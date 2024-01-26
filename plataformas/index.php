<?php
session_start();

require_once('conexion.php');

if(isset($_SESSION['id_usuario'])){
  $usuario = $_SESSION['id_usuario'];
}else{
  $usuario ="";
 
}

if(isset($_SESSION['id_usuario'])){
    require_once("html/navIniciado.html");
}else {require_once("html/nav.html");}

$sql = "SELECT id_publicacion, titulo, descripcion, portada, id_usuario
    FROM publicaciones
    WHERE id_usuario=4";

$consulta = mysqli_query($conexion, $sql);
?>

<section id="hero">
      <div class="cont_hero">
        <div id="hero-text">
            <p id="volanta">Multiverse</p>
            <h1 id="titulo_hero">EXPLORÁ, COMPARTÍ, IMPACTÁ</h1>
            <p id="sub_hero">Proyectos visuales que inspiran, proyectos propios que brillan.</p>
            <button id= "boton-hero" class="btn btn-outline-success me-2">Conoce más</button>
        </div>
      </div>
    </section>
    
    <section id="publicaciones">
        <h2 class="subtitulos">NUESTRAS MEJORES PUBLICACIONES</h2>
        <p class="parrafos">Descubrí nuestra selección destaca de proyectos multimediales. Desde innovadores diseños a divertidos videos, descubrí e inspirate con nuestras mejores publicaciones. </p>

        <div class="row">

        <?php


        while($array = mysqli_fetch_assoc($consulta)){
            $titulo = $array["titulo"];
            $descripcion = $array["descripcion"];
            $portada = $array["portada"];
            $id_publicacion = $array ["id_publicacion"];

            echo("
            <div class='card card_publi' >
                <img src=$portada alt='...' style='border-radius:5px'>
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


    <section class="mitad">
        <div id="cat_una" class="imagen_categoria">
          <figure class="prueba">
            <img src="./recursos/motion.png">
            <div class="capa"></div>
          </figure>

          </div>
        </div>

        <div class="mitad_texto"> 
          <div class="cont_mitad">
              <h2 class="mitad_titulo">Motion Graphics</h2>
              <p class="mitad_parrafo">Explorá el universo del motion graphics con nuestras publicaciones más copadas. Conocé nuevos artistas, inspirate y subí tus propias creaciones, ¡Animate a brillar en el mundo del diseño audiovisual!</p>
              <a href="motion.php" class="btn btn-primary btn-cate">Conocé más</a>
          </div> 
        </div>
    </section>


    <section class="mitad">


      <div class="mitad_texto color"> 
        <div class="cont_mitad">
            <h2 class="mitad_titulo">Modelado 3D</h2>
            <p class="mitad_parrafo">Explorá el fascinante universo del modelado 3D con nuestras publicaciones. Proyectos que deslumbran y te transportan a otra dimensión. Sumergite en la creatividad tridimensional, compartí tus propias obras y sé parte de la revolución del diseño.</p>
            <a href="modelado.php" class="btn btn-primary btn-cate">Conocé más</a>
        </div> 
      </div>

      <div id="cat_una" class="imagen_categoria">
        <figure class="prueba">
          <img src="./recursos/modelado.png">
          <div class="capa"></div>
        </figure>

        </div>
      </div>
    </section>

    <section class="mitad">
      <div id="cat_una" class="imagen_categoria">
        <figure class="prueba">
          <img src="./recursos/vectorial.png">
          <div class="capa"></div>
        </figure>

        </div>
      </div>
      
      <div class="mitad_texto"> 
        <div class="cont_mitad">
            <h2 class="mitad_titulo">Diseño Vectorial</h2>
            <p class="mitad_parrafo">Sumergite en el mundo del diseño vectorial con nuestras mejores creaciones. Proyectos que deslumbran y demuestran la versatilidad del arte en vectores. Explorá, compartí tus propias obras y unite a la comunidad que le da forma al diseño gráfico.</p>
            <a href="diseñoVectorial.php" class="btn btn-primary btn-cate">Conocé más</a>
        </div> 
      </div>
    </section>


    <section class="mitad">

        <div class="mitad_texto color"> 
          <div class="cont_mitad ">
              <h2 class="mitad_titulo">Fotomontajes</h2>
              <p class="mitad_parrafo">Explorá el arte de los fotomontajes con nuestras creaciones más destacadas. Proyectos que fusionan la realidad y la imaginación en una sola imagen. Compartí tus propias obras y formá parte de esta comunidad que transforma imágenes en historias.</p>
              <a href="fotomontajes.php" class="btn btn-primary btn-cate">Conocé más</a>
          </div> 
        </div>        
          
        <div id="cat_una" class="imagen_categoria">
          <figure class="prueba">
            <img src="./recursos/fotomontajes.png">
            <div class="capa"></div>
          </figure>

          </div>
        </div>

    </section>

    <section class="call_to_action">
          <div class="call_texto">
            <h2 class="subtitulos sub_call">
              ¿TODAVÍA NO INICIASTE SESIÓN?
            </h2>
            <p class="parra_call">Únicamente los usuarios que cuenten con una sesión activa podrán publicar, comentar y likear proyectos.</p>
          </div>

        <div>
          <a href="login.php" class="btn btn-primary btn_call">Inicia Sesión</a>
        </div>
      
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
<?php
require_once("html/footer.html")
?>