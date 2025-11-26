<?php
// src/Views/pages/projects.php
?>
<?php include __DIR__ . '/../layouts/main.php'; ?>
<div class="container">
  <h1>Projetos</h1>
  <ul>
    <?php foreach ($projects as $p): ?>
      <li><?= htmlspecialchars($p['title']) ?></li>
    <?php endforeach; ?>
  </ul>
</div>
