<?php
// Página simples de listagem de disciplinas (substituir por consultas ao banco)
$disciplines = [
    ['code'=>'DISC001','title'=>'Cálculo I','year'=>2025],
    ['code'=>'DISC002','title'=>'Álgebra Linear I','year'=>2025],
];
?>
<!doctype html><html lang="pt-br"><head><meta charset="utf-8"><title>Disciplinas</title></head><body>
<h1>Catálogo de Disciplinas</h1>
<ul>
<?php foreach($disciplines as $d): ?>
<li><?php echo htmlspecialchars($d['code']) ?> — <?php echo htmlspecialchars($d['title']) ?> (<?php echo $d['year'] ?>)</li>
<?php endforeach; ?>
</ul>
</body></html>
