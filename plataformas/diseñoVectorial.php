<?php

require_once('conexion.php');

session_start();
if(isset($_SESSION['id_usuario'])){
    $usuario = $_SESSION['id_usuario'];
}else{
    $usuario ="";
   
}

if(isset($_SESSION['id_usuario'])){
    require_once("html/navIniciado.html");
}else {require_once("html/nav.html");}

$sql = "SELECT id_publicacion, titulo, descripcion, foto, id_categoria, portada
    FROM publicaciones
    WHERE id_categoria=3";

$consulta = mysqli_query($conexion, $sql);
?>

<main>
    <section>
            <div class="fondo_MG vectorial">
                <h1 class="titulo_cat">Diseño Vectorial</h1>
            </div>
    </section>

    <section class="publicaciones">
        <h2 class="subtitulos sub_publicaciones">NUESTRAS PUBLICACIONES</h2>
        <div class="row">

        <?php


while($array = mysqli_fetch_assoc($consulta)){
    $titulo = $array["titulo"];
    $descripcion = $array["descripcion"];
    $foto = $array["foto"];
    $id_publicacion = $array ["id_publicacion"];
    $portada = $array ["portada"];

    echo("
    <div class='card card_publi' >
        <img src='$portada' style='border-radius:5px'>
            <div class='card-body'>
                <h5 class='card-title'>$titulo</h5>
                <p class='card-text'>$descripcion</p>
                <a href='detalle.php?id_publicacion=$id_publicacion' class='btn btn-primary'>Conocé más</a>
            </div>
    </div>");
}

?>