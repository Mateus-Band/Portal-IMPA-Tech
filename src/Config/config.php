<?php
define('APP_NAME', 'Portal IMPA Tech');
define('APP_ENV', 'development');
define('BASE_URL', 'http://localhost');

// Configurações de erro
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

// Timezone
date_default_timezone_set('America/Sao_Paulo');