<?php
session_start();
$DB_HOST='localhost';
$DB_NAME='mi_app_db';
$DB_USER='root';
$DB_PASS='';

try {
  $pdo=new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",$DB_USER,$DB_PASS,[
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
  ]);
} catch (PDOException $e){
  die('Error DB: '.$e->getMessage());
}

function is_logged_in(){ return isset($_SESSION['user_id']); }
function require_login(){ if(!is_logged_in()){ header('Location: login.php'); exit; } }
?>