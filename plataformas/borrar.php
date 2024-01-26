<?php
session_start();

if(isset($_SESSION['id_usuario'])){
    $usuario = $_SESSION['id_usuario'];
}else{
    $usuario ="";
   
}

require_once('conexion.php');

$id_publicacion= $_GET['id_publicacion'];

$sql = "DELETE FROM publicaciones
WHERE id_publicacion = $id_publicacion";


$consulta = mysqli_query($conexion, $sql);
header('Location: publicaciones.php');


?>