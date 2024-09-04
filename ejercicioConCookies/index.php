
<?php
    if(isset($_POST['enviar'])){

       
        setcookie("colores",$_POST['color'],time()+60*100);
        header('Location:index.php');

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
   if(isset($_COOKIE['colores'])){
    
    echo '<body style="background-color:' . $_COOKIE["colores"] . '">';
   }else{
    echo "<body>";
   }

    

?>
    <form action="" method="post">
        <label for="">Elige un color de fondo:</label>
        <input type="color" name="color" id="">
        <p>
            <input type="submit" name="enviar" value="enviar">
        </p>
    </form>
</body>
</html>