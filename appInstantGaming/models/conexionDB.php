<?php




 class InstantGamingMiguel{
    static function conexionDB(){
        $pc='localhost';
        $usuario='root';
        $contraseña='';
        $db='instantgamingmiguel';

        $conexionBD=new mysqli($pc,$usuario,$contraseña,$db);

        if($conexionBD->connect_errno!=null){
            die("ERROR:no se ha podido establecer conexión con la base de datos.");
        }

        return $conexionBD;

    }
}


?>