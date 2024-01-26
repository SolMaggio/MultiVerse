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
?>

<section class="c_publicacion">
    <div>
        <h1 class="subtitulos">CREÁ TU PUBLICACIÓN</h1>
        <p class="parrafos parrafo_publi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis iure ullam praesentium veniam fuga dolorum perferendis labore, explicabo molestiae nam, repellendus omnis hic officia ex! Architecto natus eveniet recusandae maxime.</p>
    </div>

    <div class="form_publicaciones form_log">
        <form action="guardar.php" enctype="multipart/form-data" method="post">
            <div>
                <label class="label_publi" for="titulo" >Titulo</label>
                <input class="input_publi" type="text" name="titulo" placeholder="Su título">
            </div>

            <div>
                <textarea name="descripcion" class="comentario textarea" placeholder="Escribe tu descripción aquí..."></textarea>
            </div>

            <div>
                <label class="label_publi" for="fecha">Fecha de publicación</label>
                <input class="input_publi" type="date" name="fecha">
            </div>

            <div>
                <h4 class="label_publi">Categoría elegida</h4>

                    <div class="radio_publi" style="display:flex">
                    
                        <article class="circulo"> 
                            <label for="motion" class="circle">Motion Graphics</label>
                            <input type="radio" name="categoria"  class="radio" value="1">
                            
                        </article>

                        <article class="circulo">
                            <label for="modelado" class="circle">Modelado 3D</label>
                            <input type="radio" name="categoria"  class="radio" value="2">
                            
                        </article>
                    </div>

                    <div class="radio_publi" style="display:flex">

                        <article class="circulo">
                            <label for="vectorial" class="circle">Diseño Vectorial</label>
                            <input type="radio" name="categoria" class="radio" value="3">
                            
                        </article>

                        <article class="circulo">
                            <label for="fotomontaje" class="circle">Fotomontajes</label>
                            <input type="radio" name="categoria"  class="radio" value="4">
                            
                        </article>
                    </div>
                
                </div>

                    <div>
                        <label class="label_publi" for="">Imagen de portada</label>
                        <p>Recomendamos el uso de imágenes de portada con formato cuadrado.</p>
                        <input class="input_publi" name="portada" type="file">
                    </div>

                    <div>
                        <label  class="label_publi" for="">Imagen del proyecto</label>
                        <input class="input_publi" name="foto" type="file">
                    </div>
                    
                    <div style="display: flex; justify-content: center; padding-top: 1em;">
                        <button type="submit" class="btn btn-primary btn_publi">Guardar</button>
                    </div>


        </form>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php
require_once("html/footer.html");
?>