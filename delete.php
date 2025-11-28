<?php
require 'db.php'; require_login();
$id=$_GET['id']??0;
$st=$pdo->prepare("DELETE FROM items WHERE id=?");
$st->execute([$id]);
header('Location:index.php');
?>