<?php
namespace App\Controllers;

class DisciplinesController {
    public function index(): void {
        require_once __DIR__ . '/../Views/pages/disciplines.php';
    }
}