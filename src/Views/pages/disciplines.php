<?php ob_start(); ?>

<h1 class="text-2xl font-bold text-blue-700 mb-6">Disciplinas</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach ($disciplines as $d): ?>
        <a href="/disciplines/<?= htmlspecialchars($d['slug']) ?>"
           class="block bg-white border border-gray-200 shadow-sm p-4 rounded-lg hover:shadow-md transition">
           
            <h3 class="text-lg font-semibold text-blue-700">
                <?= htmlspecialchars($d['name']) ?>
            </h3>
        </a>
    <?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
$pageTitle = 'Disciplinas';
include __DIR__ . '/../layouts/main.php';
?>
