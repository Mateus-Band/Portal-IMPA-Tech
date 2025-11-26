<?php ob_start(); ?>

<div class="max-w-4xl mx-auto text-center mt-12">
    <h1 class="text-3xl font-bold text-blue-700">
        Portal do Estudante IMPA Tech
    </h1>
    <p class="text-gray-600 mt-2">
        Protótipo funcional — layout básico já configurado.
    </p>

    <!-- GRID DE PROJETOS -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
        <?php foreach ($mockProjects as $project): ?>
            <?php 
                $title = $project['title'];
                $description = $project['description'];
                include __DIR__ . '/../components/project-card.php'; 
            ?>
        <?php endforeach; ?>
    </div>
</div>

<?php 
$content = ob_get_clean();
$pageTitle = 'Início - Portal IMPA Tech';
include __DIR__ . '/../layouts/main.php';
?>