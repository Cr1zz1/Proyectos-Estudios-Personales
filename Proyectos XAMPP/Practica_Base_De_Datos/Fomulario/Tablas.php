<?php include('Conexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
    <link rel="stylesheet" href="">
</head>

<body>

    <table>
        <thead>
            <th>Identificacion</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Pais</th>
            <th>Email</th>
        </thead>
        
        <tbody>
            <?=CargarTabla($Conexion); ?>
        </tbody>
    </table>

</body>
</html>