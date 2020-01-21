<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion ==null || $varsesion == ""){
    echo "No tienes autorizacion <br>";
    die();
}
session_destroy();
header("Location:index.php");
?>