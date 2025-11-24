<?php
// Bootstrap mínimo - autoload e sessão
spl_autoload_register(callback: function($c): void{
    $f = __DIR__ . '/../src/' . str_replace(search: '\\',replace: '/',subject: $c) . '.php';
    if(file_exists(filename: $f)) require $f;
});
session_start();
require_once __DIR__ . '/config.php';
?>
