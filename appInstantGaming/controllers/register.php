<?php
   
    require_once "../models/usuarios.php";

    if(isset($_POST['nombreUsuario'])){
        $objeto=new Usuarios($_POST['nombreUsuario'],$_POST['contraseña']);
        $objeto->setMasDatosUsuarios($_POST['nombre'],$_POST['apellidos'],$_POST['dni']);
        $resultado=$objeto->registro();
    }

    require_once "../views/register.php";
?>