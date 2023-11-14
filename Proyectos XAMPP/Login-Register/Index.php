<?php

    session_start();
    if(isset($_SESSION['Usuario'])){
        header("location: Bienvenida.php");
    }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Register</title>
    <link rel="stylesheet" href="./assets/css/Index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Parte principal de la pagina -->
    <main>
        <!-- Caja del login -->
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera_login">
                    <h3>Ya tienes una cuenta?</h3>
                    <p>Inicia Sesión para entrar en la página</p>
                    <button id="btn__iniciar_sesion">Iniciar Sesión</button>
                </div>
                <!-- Caja de Registro -->
                <div class="caja__trasera_register">
                    <h3>Aún no tienes cuenta?</h3>
                    <p>Registrate para entrar en la página</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            <!--Formulario Login/Register -->
            <div class="contenedor__login_register">
                <!-- Login -->
                <form action="./php/Login_Usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name='Email'>
                    <input type="password" placeholder="Contraseña" name='Contrasena'>
                    <button>Ingresar</button>
                </form>
                <!-- Register -->
                <form action="./php/Registro_Usuarios_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre" name="Nombre">
                    <input type="text" placeholder="Apellido" name="Apellido">
                    <input type="text" placeholder="Usuario" name="Usuario">
                    <input type="text" placeholder="Correo Electronico" name="Email">
                    <input type="password" placeholder="Contraseña" name="Contrasena">
                    <button type="submit"  name= 'Enviar'>Regístrarse</button>
                </form>

            </div>
        </div>

    </main>

    <script src="./assets/js/Index.js"></script>
</body>

</html>