<?php
    require_once "../models/productos.php";

    $arrayProductos=productos::visualizarProductos();

    require_once "../views/productos.php";


?>