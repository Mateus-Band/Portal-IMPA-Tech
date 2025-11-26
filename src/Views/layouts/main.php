<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Portal IMPA Tech' ?></title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <?php include __DIR__ . '/header.php'; ?>
    
    <main class="px-6 py-10 max-w-5xl mx-auto">
        <?= $content ?>
    </main>
    
    <?php include __DIR__ . '/footer.php'; ?>
    
    <script src="/assets/js/theme-toggle.js"></script>
</body>
</html>