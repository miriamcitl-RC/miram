<?php
require 'db.php';
if (is_logged_in()) { header('Location:index.php'); exit; }

$errors=[];
if($_SERVER['REQUEST_METHOD']==='POST'){
  $u=trim($_POST['username']??'');
  $p=$_POST['password']??'';
  if($u==''||$p==''){ $errors[]='Completa usuario y contraseña.'; }
  else{
    $st=$pdo->prepare("SELECT id,password_hash,nombre FROM usuarios WHERE username=?");
    $st->execute([$u]);
    $user=$st->fetch();
    if($user && password_verify($p,$user['password_hash'])){
      session_regenerate_id(true);
      $_SESSION['user_id']=$user['id'];
      $_SESSION['user_name']=$user['nombre'];
      header('Location:index.php'); exit;
    } else $errors[]='Usuario o contraseña incorrectos.';
  }
}
?>
<!doctype html><html><head><meta charset="utf-8"><title>Login</title><link rel="stylesheet" href="styles.css"></head>
<body>
<h1>Login</h1>
<?php if($errors): ?><div class="alert"><?php echo implode('<br>',$errors);?></div><?php endif;?>
<form method="post">
<label>Usuario <input name="username"></label>
<label>Contraseña <input type="password" name="password"></label>
<button>Entrar</button>
</form>
</body></html>