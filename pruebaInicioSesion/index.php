<?php
    require_once "validar.php";
    $stringJson=file_get_contents("archivo.json");
    $json=json_decode($stringJson,true);



    if(isset($_POST['inicioSesion'])){
      
    validar($_POST['usuario']);
           
        $comprobarExistenciaUsuario=false;
           
                    

                    foreach($json['usuarios'] as $indice => $valor){
                        if($valor['nombre']==$_POST['usuario']){
                            $comprobarExistenciaUsuario=true;
                            if(password_verify($_POST['contraseña'],$valor['contraseña'])){
                                session_start();
                                $_SESSION['nombreUsuario']=$_POST['usuario'];
                                header('Location:main.php');
                            }else{
                                echo "ERROR:ela contraseña es incorrecta";

                                foreach($_POST['asi'] as $valor){
                                    echo $valor;
                                }
                            }
                        }
                    }

    
                if($comprobarExistenciaUsuario==false){
                    echo "ERROR:el usuario no existe";
                }
            

        }elseif(isset($_POST['registrar'])){
            $comprobarExistenciaUsuario=false;
    
            foreach($json['usuarios'] as $indice => $valor){
                if($valor['nombre']==$_POST['usuario']){
                    $comprobarExistenciaUsuario=true;
                }
            }
        if($comprobarExistenciaUsuario){
            echo "ERROR:el usuario ya existe";
        }else{
         
            $contraseñaEncriptada=password_hash($_POST['contraseña'],PASSWORD_DEFAULT);

            array_push($json['usuarios'],array("nombre"=>$_POST['usuario'],"contraseña"=>$contraseñaEncriptada));   

            $stringJson=json_encode($json,JSON_PRETTY_PRINT);

            file_put_contents("archivo.json",$stringJson);

            echo "El usuario ha sido registrado";

        }
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
 echo '<body style="background-color:red">';
?>
    
    <form action="" method="post">
        <label for="">Usuario:</label>
        <p>
            <input type="text" name="usuario" id="">
        </p>
        <label for="">Contraseña:</label>
        <p>
            <input type="password" name="contraseña" id="">
        </p>
        <p>
            <label for=""><input type="checkbox" name="asi[]" value="mates" id="">mates</label>
            <label for=""><input type="checkbox" name="asi[]" value="lengua" id="">lengua</label>
            <label for=""><input type="checkbox" name="asi[]" value="conocimiento" id="">conocimiento</label>
        </p>
        <p>
            <input type="submit" value="inicioSesion" name="inicioSesion">
            <input type="submit" value="registrar" name="registrar">
        </p>
    </form>
</body>
</html>