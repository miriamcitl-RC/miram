<?php
require 'db.php'; require_login();
$id=$_GET['id']??0;
$st=$pdo->prepare("SELECT * FROM items WHERE id=?");
$st->execute([$id]);
$item=$st->fetch();
if(!$item) die("No existe");

$err=[];
if($_SERVER['REQUEST_METHOD']==='POST'){
  $n=trim($_POST['nombre']);
  if($n=='') $err[]='Ingrese nombre.';
  else{
    $st=$pdo->prepare("UPDATE items SET nombre=? WHERE id=?");
    $st->execute([$n,$id]);
    header('Location:index.php'); exit;
  }
}
?>
<!doctype html><html><head><meta charset="utf-8"><title>Editar</title><link rel="stylesheet" href="styles.css"></head>
<body>
<h1>Editar</h1>
<?php if($err): ?><div class="alert"><?php echo implode('<br>',$err);?></div><?php endif;?>
<form method="post">
<label>Nombre <input name="nombre" value="<?php echo $item['nombre'];?>"></label>
<button>Actualizar</button>
</form>
</body></html>