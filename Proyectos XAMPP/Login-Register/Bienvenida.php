<?php

    session_start();

    if(!isset($_SESSION['Usuario'])){
        echo '
        <script>
            alert("Por favor Inicie Sesión");
            window.location = "./index.php";
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
    <title>Bienvenidos</title>
</head>
<body>
    <h1>BIENVENIDO</h1>
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>