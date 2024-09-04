<?php

require_once "clase.php";

    if(isset($_POST['enviar'])){

        $datos=new Datos($_POST['cocinero'],$_POST['plato'],$_FILES['imagen']);
        $datos->add();
      

        
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante ficticio</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Nombre Cocinero</label>
        <p><input type="text" name="cocinero" id=""></p>
        <label for="">Nombre plato</label>
        <p><input type="text" name="plato" id=""></p>
        <label for="">Foto plato:</label>
        <p><input type="file" name="imagen" id="" accept="image/jpeg,image/png,image/jpg"></p>
        <p>
            <input type="submit" value="enviar" name="enviar">
            <input type="reset" value="reset">
        </p>
    </form>    

    <section>
        <?php

        Datos::visualizarDatos();

        ?>
    </section>
</body>
</html>