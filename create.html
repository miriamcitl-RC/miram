<?php
require 'db.php'; require_login();
$err=[];
if($_SERVER['REQUEST_METHOD']==='POST'){
  $n=trim($_POST['nombre']);
  if($n=='') $err[]='Captura un nombre.';
  else{
    $st=$pdo->prepare("INSERT INTO items(nombre) VALUES(?)");
    $st->execute([$n]);
    header('Location: index.php'); exit;
  }
}
?>
<!doctype html><html><head><meta charset="utf-8"><title>Crear</title><link rel="stylesheet" href="styles.css"></head>
<body>
<h1>Crear registro</h1>
<?php if($err): ?><div class="alert"><?php echo implode('<br>',$err);?></div><?php endif;?>
<form method="post">
<label>Nombre <input name="nombre"></label>
<button>Guardar</button>
</form>
<a href="index.php">Volver</a>
</body></html>