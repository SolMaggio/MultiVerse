<?php
session_start();
if(isset($_SESSION['id_usuario'])){
    $usuario = $_SESSION['id_usuario'];
}else{
    $usuario ="";
   
}

if(isset($_SESSION['id_usuario'])){
    require_once("html/navIniciado.html");
}else {require_once("html/nav.html");}


require_once('conexion.php');


$id_publicacion = $_GET['id_publicacion'];
$sql = "SELECT id_publicacion, titulo, publicaciones.id_usuario, descripcion, foto, megusta, publicaciones.id_categoria, categorias.id_categoria, clase, usuarios.nombre, usuarios.email, usuarios.imagen, usuarios.apellido, usuarios.imagen
    FROM publicaciones
    INNER JOIN categorias ON  publicaciones.id_categoria = categorias.id_categoria
    INNER JOIN usuarios ON  publicaciones.id_usuario = usuarios.id_usuario
    WHERE id_publicacion = $id_publicacion";

$consulta = mysqli_query($conexion, $sql);
$array = mysqli_fetch_assoc($consulta);



$titulo = $array["titulo"];
$descripcion = $array["descripcion"];
$categoria = $array["clase"];


$sql2 = "SELECT id_comentario, contenido, comentarios.id_usuario, usuarios.nombre, usuarios.email, usuarios.imagen, usuarios.apellido
            FROM comentarios
            INNER JOIN usuarios ON usuarios.id_usuario = comentarios.id_usuario
            WHERE id_publicacion = $id_publicacion";
    $consulta2 = mysqli_query($conexion, $sql2);

?>



<main>

<section class="publicacion_detalle">

    <div class="publi">
    <?php



    $id_publicacion=$array["id_publicacion"];
    $titulo = $array["titulo"];
    $descripcion = $array["descripcion"];
    $foto = $array["foto"];
    $categoria = $array ["clase"];
    $nombreUsuario = $array["nombre"];
    $emailUsuario = $array["email"];
    $imagenUsuario = $array["imagen"];
    $apellidoUsuario = $array["apellido"];
    $like = $array["megusta"];
    $id_usuario =$array["id_usuario"];
    

    if($like == 1){
        $corazon = "<i class='fa-solid fa-heart fa-2xl' style='color: #8a2488;'></i>";
    }else{
        $corazon = "<i class='fa-regular fa-heart fa-2xl' style='color: #8a2488;'></i>";
    }
    
    echo("<div>
            <figure>");
            $extension = pathinfo($foto, PATHINFO_EXTENSION);

            if (in_array($extension, array('jpg', 'jpeg', 'png', 'gif'))) {
                echo "<img src='$foto'  class='foto_publi'>";
            } elseif (in_array($extension, array('mp4', 'webm'))) {
                echo "<video  class='foto_publi' controls>";
                echo "<source src='$foto'>";
                echo '</video>';
            } else {
                // Tipo de archivo no compatible
                echo 'Tipo de archivo no compatible.';
            }
            
            if($usuario == $id_usuario){
                echo("<a href='borrar.php?id_publicacion=$id_publicacion'><i class='fa-solid fa-trash fa-xl' style='color: #8a2488; padding-top:1em;'></i></a>");
                
            }  
                echo("</figure>
                </div>            
                <div class='info_publi'>
                    <h2 class='subtitulos sub_publi'>$titulo</h2>
                    <h3 class='categoria'>$categoria</h3>
                    <p class='parrafo_publi'>$descripcion</p>
                    <a href='darLike.php?id_publicacion=$id_publicacion'>$corazon</a>
                </div>
            </div>");  
           


        
        echo("<div class='datos'>
        <figure class='contenedor'>
            <img src=$imagenUsuario class='perfil_foto'>
        </figure>
        <div class='datos_texto'>
            <h4 class='nombre'>$nombreUsuario $apellidoUsuario</h4>
            <p>$emailUsuario</p>
        </div>
    </div>");


    ?>
 


</section>
<section style="width: 80%; margin: auto">
<h3 class="subtitulos sub-comentario">COMENTARIOS</h3>

<?php
    if(isset($_SESSION['id_usuario'])){
        ?>        
        <form action="crearComentario.php?id_publicacion=<?php echo($id_publicacion); ?>" method="post">
            <div class="comment-form">
                        <div class="icon-textarea-contenedor">
                            <i class="fa-solid fa-comment fa-flip-horizontal fa-2xl"></i>
                            <textarea name="contenido" class="comentario textarea" placeholder="Escribe tu comentario aquí..."></textarea>
                        </div>
                            <button type="submit" class="btn btn-primary">Publicar</button>
            </div>
        </form>
        

        <?php  
            }else{
                echo("<h4 class='alerta-comment'>Debes estar logueado para realizar comentarios.</h4>");
            }
        ?>
  





</section>

<section style="margin: auto; width: 80%;">

<?php

        while(  $array2 = mysqli_fetch_assoc($consulta2)   ){
            $id_comentario = $array2['id_comentario'];
            $contenido = $array2['contenido'];
            $id_usuario = $array2['id_usuario'];
            $nombre = $array2['nombre'];
            $mail = $array2['email'];
            $foto = $array2['imagen'];
            $apellido = $array2['apellido'];

            echo( "<div class='datos-comment'>
            <div style='display: flex;'>
                <figure class='contenedor'> 
                    <img src=$foto class='perfil_foto_comment'>
                </figure>
                <div class='datos_texto-comment'>
                    <h4 class='nombre-comment'>$nombre $apellido</h4>
                    <p class='gmail'>$mail</p>
                    <p>$contenido</p>
                </div>
            </div> 
        </div>" );
        } 

    ?>
        

</section>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php
require_once("html/footer.html");
?>
