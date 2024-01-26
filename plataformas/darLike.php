<?php

session_start();

require_once('conexion.php');


if( isset($_SESSION['id_usuario']) ) {
     $usuario = $_SESSION['id_usuario'];

     require_once('conexion.php');
   
     $id_publicacion = $_GET['id_publicacion'];

     $sql = "UPDATE publicaciones
             SET megusta = 1
             WHERE id_publicacion = $id_publicacion";


     $consulta = mysqli_query($conexion, $sql);
     header("Location: detalle.php?id_publicacion=$id_publicacion");
  


 } else {
     $usuario = '';
     header('Location: login.php');
 }

 
?>