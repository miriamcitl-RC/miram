<?php
require 'db.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare('SELECT p.*, u.nombre AS autor FROM posts p LEFT JOIN usuarios u ON p.autor_id = u.id WHERE p.id = ?');
$stmt->execute([$id]);
$p = $stmt->fetch();
if (!$p) {
echo 'No encontrado.'; exit;
}
?>
<!doctype html>
<html><head><meta charset="utf-8"><title><?php echo htmlspecialchars($p['titulo']); ?></title><link rel="stylesheet" href="styles.css"></head>
<body>
<a href="index.php">← Volver</a>
<h1><?php echo htmlspecialchars($p['titulo']); ?></h1>
<small>Por: <?php echo htmlspecialchars($p['autor'] ?? 'Anon.'); ?> — <?php echo $p['creado_at']; ?></small>
<div><?php echo nl2br(htmlspecialchars($p['contenido'])); ?></div>
</body></html>