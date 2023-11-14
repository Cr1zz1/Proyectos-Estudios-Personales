<?php
    //Vamos a incluir la Conexion a la base de datos 
    include 'Conexion_be.php';

    //LLenar Variables de la base de datos en base al name del codigo de HTML
    
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Usuario = $_POST["Usuario"];
        $Email = $_POST['Email'];
        $Contrasena = $_POST['Contrasena'];
        $Contrasena = hash('sha512', $Contrasena);
    
        $Datos = "INSERT INTO Tab_Login_Register_Usuario(Nombre ,Apellido ,Usuario ,Email ,Contrasena)VALUES('$Nombre', '$Apellido', '$Usuario', '$Email', '$Contrasena')";
        
    //El correo no se repite en la base de datos
        $Verificar_correo = mysqli_query($Conexion, "SELECT * FROM Tab_Login_Register_Usuario WHERE Email='$Email'");
        if(mysqli_num_rows($Verificar_correo) > 0){
            echo '
            <script>
                alert("Este correo ya esta en uso..Por favor Inicie Sesión");
                window.location = "../index.php";
            </script>
         ';
         exit();
        }
    //El usuario no se repite en la base de datos

        $Verificar_usuario = mysqli_query($Conexion, "SELECT * FROM Tab_Login_Register_Usuario WHERE Usuario='$Usuario'");
        if(mysqli_num_rows($Verificar_usuario) > 0){
            echo '<script>
            alert("Este usuario ya esta en uso..Por favor escoja otro o InicieSesion");
            window.location = "../index.php";
         </script>';
         exit();
        }
        
    //Una vez que se manden los datos se mandara un alerta Exitosamente o Erronamente
        $Ejecutar = mysqli_query($Conexion, $Datos);
        
        if($Ejecutar){
            echo '<script>
                	alert("Usuario almacenado exitosamente");
                    window.location = "../index.php";
                 </script>';
        }else{
            echo '<script>
                	alert("Intentelo nuevamente,Usuario no almacenado...");
                    window.location = "../index.php";
                 </script>';     
        }

        mysqli_close($Conexion);

?>