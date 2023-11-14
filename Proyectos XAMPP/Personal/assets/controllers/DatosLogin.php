<?php

    session_start();
    include 'Conexion.php';
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $Contrasena = $_POST['Contrasena'];
    $Contrasena = hash('sha512',$Contrasena);

    $ValidarLogin = mysqli_query($Conexion,"SELECT * FROM Tab_Registro WHERE CorreoElectronico = '$CorreoElectronico' and Contrasena = '$Contrasena'");
    if(mysqli_num_rows($ValidarLogin)> 0){
        $_SESSION['Usuario'] = $CorreoElectronico;
        header("location: ../../views/Index.php");
        exit;
    }else{
        echo '
        <script>
            alert("Este Usuario no existe, verifique los datos");
            window.location = "../../views/Login_Register.php";
        </script>
     ';
     exit;
    }
?>