<?php ob_start(); ?>

<h1 class="text-2xl font-bold text-blue-700 mb-4">
    <?= htmlspecialchars($title) ?>
</h1>

<p class="text-gray-700 mb-8">
    <?= htmlspecialchars($desc) ?>
</p>

<a href="/disciplines" class="text-blue-600 underline hover:text-blue-800">
    ← Voltar para Disciplinas
</a>

<?php
$content = ob_get_clean();
$pageTitle = $title;
include __DIR__ . '/../layouts/main.php';
?>
