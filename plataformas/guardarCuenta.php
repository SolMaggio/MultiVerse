<?php

session_start();
require_once('conexion.php');
if(isset($_SESSION['id_usuario'])){
    $usuario = $_SESSION['id_usuario'];
}else{
    $usuario ="";
   
}


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["mail"];
$contraseña = $_POST["password"]; 
$id_rol = 1;


$ruta_temporal = $_FILES["imagen"]['tmp_name'];
$imagen_nombre = $_FILES["imagen"]["name"];
$imagen_url ="recursos/perfil/$imagen_nombre";

move_uploaded_file($ruta_temporal, $imagen_url);


$sql = "INSERT INTO usuarios(nombre, apellido, email, contraseña, imagen, id_rol)
        VALUES ('$nombre', '$apellido', '$mail', '$contraseña', '$imagen_url', $id_rol )";

mysqli_query($conexion, $sql);
header('Location: index.php');

?>