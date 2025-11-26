<?php
// config/routes.php
// Simple router with support for dynamic params like /disciplines/{slug}
// and a render helper to include views from src/Views.

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Render helper: render('pages/home', ['title'=>'...'])
 * It will include src/Views/pages/home.php and extract $data.
 */
function render(string $view, array $data = []): void {
    $base = __DIR__ . '/../src/Views/';
    $file = $base . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $view) . '.php';
    if (!file_exists($file)) {
        http_response_code(500);
        echo "View not found: $file";
        return;
    }
    extract($data, EXTR_SKIP);
    // Make a small helper available in views
    $routeUrl = function(string $path = '') {
        return $path === '' ? '/' : $path;
    };
    include $file;
}

/**
 * Router implementation
 */
$routes = [];

/**
 * Register a route
 * method: 'GET'|'POST'|...
 * path: '/foo' or '/disciplines/{slug}'
 * handler: callable (no args) OR function($params) where $params is assoc array
 */
function route(string $method, string $path, callable $handler): void {
    global $routes;
    $method = strtoupper($method);
    $routes[] = ['method' => $method, 'path' => $path, 'handler' => $handler];
}

/**
 * Convert route path to regex and extract param names
 */
function compileRoute(string $path): array {
    $paramNames = [];
    $regex = preg_replace_callback('#\{([a-zA-Z0-9_]+)\}#', function($m) use (&$paramNames) {
        $paramNames[] = $m[1];
        return '([^/]+)';
    }, $path);
    $regex = '#^' . $regex . '$#';
    return [$regex, $paramNames];
}

/**
 * Dispatch request
 */
function dispatch(): void {
    global $routes;

    $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
    $requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';

    // Remove query string
    $uri = parse_url($requestUri, PHP_URL_PATH);
    if ($uri === '') $uri = '/';

    foreach ($routes as $r) {
        if ($r['method'] !== $requestMethod) continue;

        list($regex, $paramNames) = compileRoute($r['path']);
        if (preg_match($regex, $uri, $matches)) {
            array_shift($matches); // drop full match
            $params = [];
            foreach ($paramNames as $i => $name) {
                $params[$name] = urldecode($matches[$i] ?? '');
            }
            // call handler with params if it accepts them
            $handler = $r['handler'];
            $ref = new ReflectionFunction($handler);
            if ($ref->getNumberOfParameters() > 0) {
                $handler($params);
            } else {
                $handler();
            }
            return;
        }
    }

    // No route matched -> 404
    http_response_code(404);
    if (is_readable(__DIR__ . '/../src/Views/pages/404.php')) {
        render('pages/404');
    } else {
        echo "404 - Página não encontrada";
    }
}

/* ===========================
   Register your routes here
   =========================== */

// Home
route('GET', '/', function() {
    $mockProjects = [
        [
            'id' => 1,
            'title' => "Projeto de Visualização 3D",
            'description' => "Exploração de superfícies e teoremas com gráficos interativos.",
        ],
        [
            'id' => 2,
            'title' => "Sistema de Entrega de Trabalhos",
            'description' => "Protótipo do sistema usado para submissão de PDFs e feedback.",
        ],
        [
            'id' => 3,
            'title' => "Portal de Disciplinas",
            'description' => "Visão geral das disciplinas e materiais do curso.",
        ],
    ];

    render('pages/home', [
        'title' => 'Portal IMPA Tech',
        'mockProjects' => $mockProjects
    ]);
});

// Disciplines list
route('GET', '/disciplines', function() {
    // example data; later you can replace by model
    $disciplines = [
        ['slug' => 'calculo-i', 'name' => 'Cálculo I'],
        ['slug' => 'algebra-linear', 'name' => 'Álgebra Linear'],
        ['slug' => 'prog-intro', 'name' => 'Introdução à Programação'],
    ];
    render('pages/disciplines', ['disciplines' => $disciplines]);
});

// Discipline detail (dynamic)
route('GET', '/disciplines/{slug}', function($params) {
    $slug = $params['slug'] ?? '';

    $all = [
        'calculo-i' => ['title' => 'Cálculo I', 'desc' => 'Descrição do Cálculo I'],
        'algebra-linear' => ['title' => 'Álgebra Linear', 'desc' => 'Descrição da Álgebra Linear'],
        'prog-intro' => ['title' => 'Introdução à Programação', 'desc' => 'Descrição da Programação'],
    ];

    if (!isset($all[$slug])) {
        http_response_code(404);
        render('pages/404');
        return;
    }

    $data = $all[$slug];
    render('pages/discipline', ['slug' => $slug, 'data' => $data]);
});

// Projects
route('GET', '/projects', function() {
    $projects = [
        ['id' => 1, 'title' => 'Vis 3D'],
        ['id' => 2, 'title' => 'Submission System']
    ];
    render('pages/projects', ['projects' => $projects]);
});

// Admin (visual only)
route('GET', '/admin', function() {
    render('pages/admin');
});

route('GET', '/', function() {
    $mockProjects = [
        [
            'id' => 1,
            'title' => "Projeto de Visualização 3D",
            'description' => "Exploração de superfícies e teoremas com gráficos interativos.",
        ],
        [
            'id' => 2,
            'title' => "Sistema de Entrega de Trabalhos",
            'description' => "Protótipo do sistema usado para submissão de PDFs e feedback.",
        ],
        [
            'id' => 3,
            'title' => "Portal de Disciplinas",
            'description' => "Visão geral das disciplinas e materiais do curso.",
        ],
    ];

    render('pages/home', [
        'mockProjects' => $mockProjects,
        'title' => 'Portal IMPA Tech'
    ]);
});

/* You can add more routes here... */

/* ===== run dispatcher ===== */
dispatch();
