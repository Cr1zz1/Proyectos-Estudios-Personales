<?php
    session_start();
    include 'Conexion_be.php';
    //Variables
    $Email = $_POST['Email'];
    $Contrasena = $_POST['Contrasena'];
    $Contrasena = hash('sha512',$Contrasena);

    $Validar_login = mysqli_query($Conexion,"SELECT * FROM Tab_Login_Register_Usuario WHERE Email = '$Email' and Contrasena = '$Contrasena'");
    
    if(mysqli_num_rows($Validar_login)> 0){
        $_SESSION['Usuario'] = $Email;
        header("location: ../Bienvenida.php");
        exit;
    }else{
        echo '
        <script>
            alert("Este Usuario no existe, verifique los datos");
            window.location = "../index.php";
        </script>
     ';
     exit;
    }


?>