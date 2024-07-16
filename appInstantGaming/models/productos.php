<?php
require_once "conexionDB.php";


class productos{
    protected string $nombre;
    protected int $precio;


    public function __construct($nombre,$precio) {
        $this->nombre=$nombre;
        $this->precio=$precio;
    }

    public function addProducto($imagen){
        $conexionDB=InstantGamingMiguel::conexionDB();

        $_FILES=$imagen;

        // comprobar formato archivo
        $formatoArchivo= array("image/jpeg","image/jpg","image/png");
        if(in_array($_FILES['type'],$formatoArchivo)){
          
        
            $check = getimagesize($_FILES["tmp_name"]);
                if($check !== false){
                    $image = $_FILES['tmp_name'];
                    $tipoMimeImg=$_FILES['type'];
                    $imgContent = addslashes(file_get_contents($image));
            

                    //añadimos el nuevo producto en la tabla de la base de datos
                    $sentenciaAddProducto=$conexionDB->query("INSERT INTO juegos (nombreJuego,precio,imagen,descuento,tipoMimeImagen) VALUES('$this->nombre',$this->precio,'$imgContent','25','$tipoMimeImg')");
                    $mensajeExitoso="<h2>Se ha almacecnado el producto nuevo</h2>";
                    $conexionDB->close();
                    return $mensajeExitoso;
                }else{
                    return "Please select an image file to upload.";
                }
        }else{
            return "<h2>el formato no es correcto</h2>";
        }

    }

    public static function visualizarProductos(){

        //nos conectamos a la base de datos
        $conexionDB=InstantGamingMiguel::conexionDB();

        //consulta a al tabla juegos para visualizar los juegos de la base de datos
        $consultaTablaJuegos=$conexionDB->query("SELECT * FROM juegos");


        $arrayTablaJuegos=array();
        if($consultaTablaJuegos->num_rows>0){
           
            while($row=$consultaTablaJuegos->fetch_object()){
                
                
               

                array_push($arrayTablaJuegos,array('nombreJuego'=>$row->nombreJuego,'image'=>$row->imagen,'precio'=>$row->precio,'descuento'=>25,'tipoMimeImagen'=>$row->tipoMimeImagen));
            
            }
                return $arrayTablaJuegos;
        }else{
            return "ERROR:no hya juegos registrados en la base de datos";
        }

        $conexionDB->close();
    }
    

}

    productos::visualizarProductos();




?>