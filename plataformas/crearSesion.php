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
?>

<main class="main_log">



<section class="sec_form" style="width: 50%; margin: auto;">
    <div class="form_content">

        <h2 class="sub_login">Crear Sesión</h2>
        <form action="guardarCuenta.php" enctype="multipart/form-data" method="post" class="form_log">

            <div>
                <label for="">Nombre</label>
                <input type="text" name="nombre" placeholder="Su nombre">
            </div>

            <div>
                <label for="">Apellido</label>
                <input type="text" name="apellido" placeholder="Su apellido">
            </div>

            
            <div>
                <label for="">E-mail</label>
                <input type="email" name="mail" placeholder="Su email">
            </div>


            <div>
                <label for="">Contraseña</label>
                <input type="password" name="password" placeholder="Su contraseña">
            </div>

            <div>
                <label  class="label_publi" for="">Imagen del proyecto</label>
                <input class="input_publi" name="imagen" type="file" >
            </div>

            <div class="btn_cont">
                <button type="submit" class="btn btn-primary btn_login">Crear Sesión</button>
            </div>
        </div>

    </form>

    <div class="info_log">
        <p class="parra_log">¿Ya tenés una cuenta?</p><a href="login.php" class="enlace_log">Iniciá sesión</a>
    </div>
</section>

<section class="img_log">
    <div>
        <h1 class="titulo_log">¡BIENVENIDO!</h1>
    </div>
</section>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
