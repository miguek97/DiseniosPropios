<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../views/templates/css/style.css">
    <link rel="shortcut icon" href="https://cdn.vectorstock.com/i/1000v/14/20/golden-logo-dragon-in-circle-vector-36471420.jpg" type="image/x-icon">
</head>
<body>
    <main class="contenedorPrincipalLogin">
        <div>
            <div>
                <h2 id="tituloLogin">Inicia sesión</h2>
                <div class="containerRedesSociales">
                    <a href="">
                        <div class="facebook"></div>
                    </a>
                    <a href="">
                        <div class="google"></div>
                    </a>
                    <a href="">
                        <div class="iphone"></div>
                    </a>
                    <a href="">
                        <div class="discord"></div>
                    </a>
                </div>
                <hr>
                <form action="#" method="post">
                    <?php
                        if(isset($resultado)){
                            echo $resultado;
                        }
                    ?>
                    <input type="text" name="nombreUsuario" placeholder="correo.." autofocus>
                    <input type="password" name="contraseña" id="password" placeholder="contraseña..">
                    <input type="submit" value="Iniciar sesión" name="enviar">
                </form>
                <div class="containerOlvidoContraseña">
                    <a href="register.php">No tienes cuenta?</a>
                    <a href="">Olvidaste la contraseña</a>
                </div>
            </div>
        </div>
        <div>
        </div>
    </main>
</body>
</html>