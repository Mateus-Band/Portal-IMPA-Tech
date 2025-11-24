<?php
// Portal do Estudante IMPA Tech - front controller (development)
require_once __DIR__ . '/../inc/bootstrap.php';
use App\App;

$app = new App();
$app->run();
?>
