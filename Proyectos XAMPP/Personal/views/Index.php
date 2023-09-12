<?php
    session_start();

    if(!isset($_SESSION['Usuario'])){
        echo '
        <script>
            alert("Por favor Inicie Sesión");
            window.location = "../views/Login_Register.php";
        </script>
     ';
        session_destroy();
        die();
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <H1>hola mundo</H1>
    <a href="../assets/controllers/CerrarSesion.php">Cerrar Sesion</a>

</body>
</html>