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


        <section class="img_log">
            <div>
                <h1 class="titulo_log">¡HOLA DE NUEVO!</h1>
            </div>
        </section>

        <section class="sec_form" style="width: 50%; margin: auto;">
            <div class="form_content">
                <div class="logo_log">
                    <img src="recursos/multiverseviolet.png">
                </div>
                <h2 class="sub_login">Iniciar Sesión</h2>
                <form method="post" action="validar.php" class="form_log">
                    <div>
                        <label for="">Correo electrónico</label>
                        <input type="email" name="email">
                    </div>

                    <div>
                        <label for="">Contraseña</label>
                        <input type="password" name="password">
                    </div>

                    <div class="btn_cont">
                        <button type="submit" class="btn btn-primary btn_login">Iniciar sesión</button>
                    </div>
                </div>

            </form>

            <div class="info_log">
                <p class="parra_log">¿Todavía no tenés cuenta?</p><a href="crearSesion.php" class="enlace_log">Registrate</a>
            </div>
        </section>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
