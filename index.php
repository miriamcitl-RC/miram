<?php
require 'db.php';
require_login();

$items = $pdo->query("SELECT * FROM items ORDER BY id DESC")->fetchAll();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<h1>Bienvenido <?php echo $_SESSION['user_name']; ?></h1>

<div class="top-bar">
    <a class="btn" href="create.php">➕ Nuevo registro</a>
    <a class="btn logout" href="logout.php">🔒 Salir</a>
</div>

<div class="card">
    <h2>Lista de Registros</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>

        <?php foreach($items as $i): ?>
        <tr>
            <td><?php echo $i['id']; ?></td>
            <td><?php echo $i['nombre']; ?></td>
            <td>
                <a class="btn-edit" href="edit.php?id=<?php echo $i['id']; ?>">✏ Editar</a>
                <a class="btn-del" href="delete.php?id=<?php echo $i['id']; ?>">🗑 Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>
