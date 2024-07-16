<?php
require_once "../models/productos.php";
if(isset($_POST['enviar'])){
    echo $_FILES['image']['name'];
    echo $_FILES['image']['tmp_name'];
    $imagen=$_FILES['image'];
    $objeto=new productos($_POST['nombre'],$_POST['precio']);
    $objeto->addProducto($imagen);
}


require_once "../views/addJuegos.php";


?>