<?php
require 'db.php';
$errors=[];
if($_SERVER['REQUEST_METHOD']==='POST'){
  $u=trim($_POST['username']);
  $n=trim($_POST['nombre']);
  $p=$_POST['password'];
  if($u==''||$n==''||$p=='') $errors[]='Completa todos los campos.';
  else{
    $h=password_hash($p,PASSWORD_DEFAULT);
    $st=$pdo->prepare("INSERT INTO usuarios(username,nombre,password_hash) VALUES(?,?,?)");
    $st->execute([$u,$n,$h]);
    header('Location: login.php'); exit;
  }
}
?>
<!doctype html><html><head><meta charset="utf-8"><title>Registrar</title><link rel="stylesheet" href="styles.css"></head>
<body>
<h1>Crear usuario</h1>
<?php if($errors): ?><div class="alert"><?php echo implode('<br>',$errors);?></div><?php endif;?>
<form method="post">
<label>Usuario <input name="username"></label>
<label>Nombre <input name="nombre"></label>
<label>Contraseña <input type="password" name="password"></label>
<button>Crear</button>
</form>
</body></html>