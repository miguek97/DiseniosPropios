<?php
    require_once "../models/usuarios.php";
    //NOTA:FALTA LA FUNCIÓN HTMLSPECIALCHARS
    if(isset($_POST['nombreUsuario'])){
        $objeto=new Usuarios($_POST['nombreUsuario'],$_POST['contraseña']);
        $resultado=$objeto->inicioSesion();
    }
    require_once "../views/login.php";

?>