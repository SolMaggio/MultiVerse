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

$sql = "SELECT id_publicacion, titulo, descripcion, foto, portada
    FROM publicaciones";

$consulta = mysqli_query($conexion, $sql);
?>

<main>
    <section class="publicaciones">
        <h2 class="subtitulos sub_publicaciones">NUESTRAS PUBLICACIONES</h2>
        <div class="row">

<?php


while($array = mysqli_fetch_assoc($consulta)){
    $titulo = $array["titulo"];
    $descripcion = $array["descripcion"];
    $foto = $array["foto"];
    $id_publicacion = $array ["id_publicacion"];
    $portada = $array["portada"];

    echo("
    <div class='card card_publi'>
        
            <img src='$portada' style='border-radius:5px'>
        
            <div class='card-body'>
                <h5 class='card-title'>$titulo</h5>
                <p class='card-text'>$descripcion</p>
                <a href='detalle.php?id_publicacion=$id_publicacion' class='btn btn-primary'>Conocé más</a>
            </div>
    </div>");
}

?>

        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<?php
require_once("html/footer.html");
?>