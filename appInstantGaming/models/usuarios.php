<?php
    require_once "conexionDB.php";
    class Usuarios{

        private string $nombreUsuario;
        private string $contraseña;
        private string $nombre;
        private string $apellidos;
        private string $dni;


        public function __construct($nombreUsuario,$contraseña,){
            $this->nombreUsuario=$nombreUsuario;
            $this->contraseña=$contraseña;
            
        }

        public function setMasDatosUsuarios($nombre,$apellidos,$dni){
            $this->nombre=$nombre;
            $this->apellidos=$apellidos;
            $this->dni=$dni;
        }

        public function inicioSesion(){
            $conexionDB=InstantGamingMiguel::conexionDB();

            $consultaTablaUsuarios=$conexionDB->query("SELECT * FROM usuarios WHERE nombreUsuario='$this->nombreUsuario'");

            if($consultaTablaUsuarios->num_rows>0){
                $consultaObtenerContraseña=$conexionDB->query("SELECT contraseña FROM usuarios WHERE nombreUsuario='$this->nombreUsuario'");

                //convertimos la consulta en un array para obtener el valor de la contraseña
                $arrayContraseña=$consultaObtenerContraseña->fetch_array();

               if(password_verify($this->contraseña,$arrayContraseña['contraseña'])){
                    $_SESSION['nombreUsuario']=$this->nombreUsuario;
                    
               }else{
                    return "ERROR:la contraseña es incorrecta";
               }
            }else{
                return "ERROR:el nombre del usuario introducido no existe";
            }


        }

        public function registro(){
            $conexionDB=InstantGamingMiguel::conexionDB();

            // comprobamos existencia usuario
            $consultaComprobarExistenciaNombre=$conexionDB->query("SELECT * FROM usuarios WHERE nombreUsuario='$this->nombreUsuario'");

            if($consultaComprobarExistenciaNombre->num_rows>0){
                return "ERROR:No se puede registrar porque ya existe el usuario";
            }else{

                //ciframos la contrasña del usuario que se va a registrar
                $contraseñaCifrada=password_hash($this->contraseña,PASSWORD_DEFAULT);

                //registramos el nuevo usuario en la tabla usuarios
                $consultaAddNuevoUsuario=$conexionDB->query("INSERT INTO usuarios (nombre,Apellidos,DNI,nombreUsuario,contraseña) VALUES ('$this->nombre','$this->apellidos','$this->dni','$this->nombreUsuario','$contraseñaCifrada')");
                return "EL USUARIO HA SIDO AÑADIDO CON ÉXITO";
            }
            $conexionDB->close();

        }
    }

?>