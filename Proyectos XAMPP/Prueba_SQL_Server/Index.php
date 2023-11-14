<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="Insertar_bd.php">

	<h1>Formulario con Nombre y Apellido</h1>
     <label for="Identificaion">Identificacion</label>
     <input type="text" name="Id" id="Id">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="Nombre" required><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="Apellido" required><br>

    <button type="submit">Enviar</button>
</form>
</body>
</html>