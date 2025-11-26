<?php ob_start(); ?>

<h2 class="text-3xl font-bold mb-4">Área Administrativa</h2>
<p class="text-gray-700 dark:text-gray-300">Conteúdo fictício para navegar no protótipo.</p>

<?php 
$content = ob_get_clean();
$pageTitle = 'Admin - Portal IMPA Tech';
include __DIR__ . '/../layouts/main.php';
?>