<?php
session_start();
require_once('conexion.php');

$contenido = $_POST["contenido"];
$id_publicacion= $_GET['id_publicacion'];
$id_usuario = $_SESSION['id_usuario'];

$sql = "INSERT INTO comentarios(contenido, id_publicacion, id_usuario)
        VALUES( '$contenido', $id_publicacion, $id_usuario)";

mysqli_query($conexion, $sql);

header("Location: detalle.php?id_publicacion=$id_publicacion");
?>