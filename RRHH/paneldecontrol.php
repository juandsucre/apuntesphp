<?php

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL DE CONTROL</title>
</head>
<body>
    <h1>PANEL DE ADMINISTRACIÓN</h1>
    <h2>Bienvenido: <?php echo $_SESSION['usuario'];?></h2>
        <a href="viena.php">Entrar</a>
</body>
</html>