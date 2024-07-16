<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../views/templates/css/style.css/style.css"> -->
    <title>Document</title>
</head>
<body>
    <h1>Add Juegos</h1>
    <form action="#" method="post" enctype="multipart/form-data">
        <p>
            <label for="">Nombre Producto:</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <label for="">Precio:</label>
            <input type="number" name="precio" id="precio">
        </p>
        <p>
            <label for="">Imagen:</label>
            <input type="file" name="image" accept="image/jpeg,image/png,image/jpg">
        </p>
        <input type="submit" value="enviar" name="enviar">
        <input type="reset" value="reset">
    </form>
</body>
</html>



