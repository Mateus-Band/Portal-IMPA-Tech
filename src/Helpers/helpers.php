<?php
function asset(string $path): string {
    return '/assets/' . ltrim($path, '/');
}

function url(string $path = ''): string {
    return BASE_URL . '/' . ltrim($path, '/');
}

function escape(string $string): string {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}