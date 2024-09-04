<?php

    class ConexionDB{
        static public function conexionDB(){
            $pc="localhost";
            $nombreUsuario="root";
            $contraseña="";
            $nombreBaseDatos="pruebarestaurante";

            $conexion=new mysqli($pc,$nombreUsuario,$contraseña,$nombreBaseDatos);

        

            if($conexion->connect_errno!=null){
                die("ERROR:no se ha podido establecer conexión con la base de datos");
            }

            return $conexion;

        }
    }

    











    class Datos{
        private string $nombreCocinero;
        private string $nombrePlato;
        private array $imagen;

        public function __construct($nombreCocinero,$nombrePlato,$imagen){
            $this->nombreCocinero=$nombreCocinero;
            $this->nombrePlato=$nombrePlato;
            $this->imagen=$imagen;
        }

        public function add(){
            $conexionDB=ConexionDB::conexionDB();

            if($conexionDB->connect_errno!=null){
                echo "error";
            }else{
                echo "hay conexion";
            }

            $imagen=$this->imagen;
            echo $imagen['type'];        
            $arrayMIMES=array("image/jpeg","image/png","image/jpg");

            if(in_array($imagen['type'],$arrayMIMES)){
                $check = getimagesize($imagen["tmp_name"]);
                if($check !== false){
                $direccionArchivoImg=$imagen['tmp_name'];
                $tipoMimeImagen=$imagen['type'];
                $imgContent=addslashes(file_get_contents($direccionArchivoImg));


                // consultas DML INSERT
                $conexionDB->query("INSERT INTO cocineros (nombre) VALUES ('$this->nombreCocinero')");

                $filaCocineroAñadido=$conexionDB->query("SELECT idCocinero FROM cocineros WHERE nombre='$this->nombreCocinero'");
                $arrayCocineroElegido=mysqli_fetch_array($filaCocineroAñadido);

                $idCocineroSeleccionado=$arrayCocineroElegido['idCocinero'];

                $conexionDB->query("INSERT INTO platos (nombre,fk_cocinero,imagen,extension) VALUES ('$this->nombrePlato',$idCocineroSeleccionado,'$imgContent','$tipoMimeImagen')");
                $conexionDB->close();
                }else{
                    echo "ERROR:el archivo es demasiado pesado";
                }


            }else{
                echo "no está";
            }
            
        }



        static public function visualizarDatos(){
            $conexionDB=ConexionDB::conexionDB();

            $tablaPlatos=$conexionDB->query("SELECT * FROM platos");

            if($tablaPlatos->num_rows>0){
                while($row=$tablaPlatos->fetch_object()){
                    echo $row->nombre;
                    echo '<img  src="data:'.$row->extension.';base64,'.base64_encode( $row->imagen).'"width="150"/>';
                }
            }

        }
    }




?>