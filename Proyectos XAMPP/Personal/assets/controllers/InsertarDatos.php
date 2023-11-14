<?php
    include("Conexion.php");
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $Contrasena = $_POST['Contrasena'];
    $Contrasena = hash('sha512', $Contrasena);
    

    $Datos="INSERT INTO Tab_Registro(Nombre, Apellido, Usuario, CorreoElectronico, Contrasena) VALUES('$Nombre', '$Apellido', '$Usuario', '$CorreoElectronico', '$Contrasena')";
    
    $VerificarCorreo = mysqli_query($Conexion,"SELECT * FROM Tab_Registro WHERE CorreoElectronico = '$CorreoElectronico'");
    if(mysqli_num_rows($VerificarCorreo)> 0){
        echo '
            <script>
                alert("Este correo ya esta en uso..Por favor Inicie Sesión");
                window.location = "../../views/Login_Register.php";
            </script>
         ';
         exit();
    }

    $Ejecutar = mysqli_query($Conexion,$Datos);
    if($Ejecutar){
        echo 
        '<script>
            alert("Usuario almacenado exitosamente");
            window.location = "../../views/Login_Register.php";
        </script>';
    }else{
        echo 
        '<script>
            alert("Intentelo nuevamente,Usuario no almacenado...");
            window.location = "../../views/Login_Register.php";
        </script>';   
    }
    
    mysqli_close($Conexion);


    
?>