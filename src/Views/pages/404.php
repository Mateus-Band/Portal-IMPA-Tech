<?php
// src/Views/pages/404.php
http_response_code(404);
?>
<?php include __DIR__ . '/../layouts/main.php'; ?>
<div class="container">
  <h1>404 - Página não encontrada</h1>
  <p>Ops — não achei essa rota.</p>
  <p><a href="/">Voltar para a home</a></p>
</div>
