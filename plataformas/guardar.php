<?php

session_start();
require_once('conexion.php');
if(isset($_SESSION['id_usuario'])){
    $usuario = $_SESSION['id_usuario'];
}else{
    $usuario ="";
   
}


$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$fecha = $_POST["fecha"];
$categoriaSeleccionada = $_POST["categoria"]; 
$usuario = $_SESSION["id_usuario"];

$ruta_temporal = $_FILES["portada"]['tmp_name'];
$portada_nombre = $_FILES["portada"]["name"];
$portada_url ="recursos/portadas/$portada_nombre";

move_uploaded_file($ruta_temporal, $portada_url);


$ruta_temporal2 = $_FILES["foto"]['tmp_name'];
$foto_nombre = $_FILES["foto"]["name"];
$foto_url ="recursos/publicaciones/$foto_nombre";

move_uploaded_file($ruta_temporal2, $foto_url);

$sql = "INSERT INTO publicaciones(id_usuario, titulo, descripcion, fecha, id_categoria, foto, portada)
        VALUES ($usuario, '$titulo', '$descripcion', $fecha, $categoriaSeleccionada, '$foto_url', '$portada_url')";

mysqli_query($conexion, $sql);
header('Location: publicaciones.php');

?>