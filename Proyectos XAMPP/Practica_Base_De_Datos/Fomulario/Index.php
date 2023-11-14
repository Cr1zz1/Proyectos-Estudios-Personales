<?php include('Conexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Index.css">
    <title>Formulario</title>
</head>


<body>
    <!-- Fomulario -->

    <div class="content">
    <div class="Formulario">
    <form action="Conexion.php" method="post" class="form">
        <ul class="wrapper">
          
          <li style="--i:9;"><input class="input" type="text" name="Id" placeholder="Identificacion:" id="Fijo"></li>
          <li style="--i:8;"><input class="input" type="text" name="Nombre" placeholder="Nombre:" id="Fijo" ></li>
          <li style="--i:7;"><input class="input" type="text" name="Apellido" placeholder="Apellido:" id="Fijo" ></li>
          <li style="--i:6;"><input class="input" type="number" min='1' name="Edad" placeholder="Edad:" id="Fijo"></li>
          <li style="--i:5;"><input class="input" type="text" name="Telefono" placeholder="Telefono:" id="Fijo"></li>
          <li style="--i:4;"><input class="input" type="text" name="Pais" placeholder="Pais:" id="Fijo"></li> 
          <li style="--i:3;"><input class="input" type="email" name="Email" placeholder="Email:"id="Fijo"></li>
          <button style="--i:2;" type="submit" name="Enviar">Enviar</button>
          <button style="--i:1;" type="submit" name="Eliminar">Eliminar</button>
        </ul>
    </form>
    
</div>
    </div>
     
</body>
<script src="./Index.js"></script>
</html>