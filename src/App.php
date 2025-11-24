<?php
namespace App;
class App {
    public function run(){
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if($path === '/' || $path === '/index.php'){
            include __DIR__ . '/../views/home.php';
            return;
        }
        if(strpos($path,'/admin')===0){
            include __DIR__ . '/../views/admin.php';
            return;
        }
        if($path === '/disciplines.php'){
            include __DIR__ . '/../views/disciplines.php';
            return;
        }
        // fallback 404
        header('HTTP/1.0 404 Not Found');
        echo '404 - Página não encontrada';
    }
}
?>
