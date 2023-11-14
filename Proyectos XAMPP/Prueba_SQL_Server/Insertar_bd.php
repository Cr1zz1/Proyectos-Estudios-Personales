<?php

//Llamamos la concexion(Base de datos) para insertar datos a la base de datos
include("Conexion.php");


    

    if ($conexion === false) {
        die("Error de conexión: " . sqlsrv_errors());
    }
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Obtener valores del formulario
        $Id = $_POST["Id"];
        $nombre = $_POTS["Nombre"];
        $apellido = $_POST["Apellido"];
    
        // Consulta INSERT
        $sql = "INSERT INTO Tb_Prueba (Id,nombre, apellido) VALUES ('$Id', '$Nombre','$Apellido')";
   
    
        $stmt = sqlsrv_query($conexion, $sql);
    
        if ($stmt === false) {
            die("Error en la inserción: " . print_r(sqlsrv_errors(), true));
        } else {
            echo "Datos insertados correctamente.";
        }
    }
    
    // Cerrar la conexión
    sqlsrv_close($conexion);


?>
