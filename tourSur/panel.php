<?php
session_start();
//aqui estoy reanunando la session que inice en login
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Document</title>
</head>
<body>
<h1>Panel de adminsitración</h1>
<h2>Bienvenido: <?php echo $_SESSION['usuario'];?></h2>
<a href="viena.php">Entrar</a>
</body>
</html>


