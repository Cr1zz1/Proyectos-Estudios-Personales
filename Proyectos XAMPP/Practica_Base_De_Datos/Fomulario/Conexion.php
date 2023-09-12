<?php

    $Conexion = mysqli_connect('localHost','root','','DB_Datos_Personales') or die(mysqli_error($mysqli));
    
    function insertar($Conexion){
        $Identificacion = $_POST['Id'];
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Edad = $_POST['Edad'];
        $Telefono = $_POST['Telefono'];
        $Pais = $_POST['Pais'];
        $Email = $_POST['Email'];
    

        $Consulta = "INSERT INTO Tab_Datos_Personales(Id,Nombre,Apellido,Edad,Telefono,Pais,Email) 
        VALUES('$Identificacion','$Nombre','$Apellido', '$Edad','$Telefono','$Pais','$Email')";
        mysqli_query($Conexion,$Consulta);
        mysqli_close($Conexion);
        header("Location: Index.php");
    }
    
    function eliminar($Conexion){
        $Identificacion = $_POST['Id'];
        $Consulta = "DELETE FROM Tab_Datos_Personales WHERE Id = '$Identificacion'";
        mysqli_query($Conexion,$Consulta);
        mysqli_close($Conexion);
        header("Location: Index.php");
    }

    function Diferencia($Conexion){
        if (isset($_POST['Enviar'])){
            insertar($Conexion);
        }
        if(isset($_POST['Eliminar'])){
            eliminar($Conexion);
        }
    }

    Diferencia($Conexion);

    function CargarTabla($Conexion){
        $Consulta = "SELECT * FROM Tab_Datos_Personales";
        $Resultado = mysqli_query($Conexion,$Consulta);

        while($fila = mysqli_fetch_array($Resultado)){
            echo "<tr>";
            echo "<td>".$fila['Id'];
            echo "<td>".$fila['Nombre'];
            echo "<td>".$fila['Apellido'];
            echo "<td>".$fila['Edad'];
            echo "<td>".$fila['Telefono'];
            echo "<td>".$fila['Pais'];
            echo "<td>".$fila['Email'];
            echo "<tr>";
        }
        mysqli_close($Conexion);
    }
?>