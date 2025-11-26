<?php ob_start(); ?>

<h2 class="text-3xl font-bold mb-4">Disciplinas</h2>
<p class="text-gray-700 dark:text-gray-300">Lista de disciplinas (protótipo visual).</p>

<?php 
$content = ob_get_clean();
$pageTitle = 'Disciplinas - Portal IMPA Tech';
include __DIR__ . '/../layouts/main.php';
?>