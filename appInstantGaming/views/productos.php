<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/templates/css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" class="buscadorProducto">
            <input type="text" name="nombreProducto" id="nombreProducto">
    </form>
    <section class="contenedorProductos">

    <?php
        if(is_array($arrayProductos)){
            foreach($arrayProductos as $valor){
                echo '<div>';
                    echo '<img  src="data:'.$valor['tipoMimeImagen'].';base64,'.base64_encode( $valor['image']).'"width="150"/>';
                    echo '<div class="descuento">25%</div>';
                    echo '<div class="datosJuego">';
                    echo "<h2>".$valor['nombreJuego']."</h2>";
                    echo "<h2>Precio:".$valor['precio']."</h2>";
                    echo '</div>';
                echo '</div>';
            }
        }else{
            echo $arrayProductos;
        }


    ?>
        <div>
            <img src="https://images7.alphacoders.com/901/901507.jpg" alt="artorias">
            <div class="descuento">25%</div>
            <div class="datosJuego">
                <h2>Dark souls</h2>
                <h2>Precio:12€</h2>
            </div>
        </div>
        <div>
        <img src="https://images7.alphacoders.com/901/901507.jpg" alt="artorias">
            <div class="descuento">25%</div>
            <div class="datosJuego">
                <h2>Dark souls</h2>
                <h2>Precio:12€</h2>
            </div>
        </div>
        <div>
        <img src="https://images7.alphacoders.com/901/901507.jpg" alt="artorias">
            <div class="descuento">25%</div>
            <div class="datosJuego">
                <h2>Dark souls</h2>
                <h2>Precio:12€</h2>
            </div>
        </div>
        <div>
        <img src="https://images7.alphacoders.com/901/901507.jpg" alt="artorias">
            <div class="descuento">25%</div>
            <div class="datosJuego">
                <h2>Dark souls</h2>
                <h2>Precio:12€</h2>
            </div>
        </div>
        <div>
        <img src="https://images7.alphacoders.com/901/901507.jpg" alt="artorias">
            <div class="descuento">25%</div>
            <div class="datosJuego">
                <h2>Dark souls</h2>
                <h2>Precio:12€</h2>
            </div>
        </div>
        <div>
        <img src="https://images7.alphacoders.com/901/901507.jpg" alt="artorias">
            <div class="descuento">25%</div>
            <div class="datosJuego">
                <h2>Dark souls</h2>
                <h2>Precio:12€</h2>
            </div>
        </div>
        <div>
        <img src="https://images7.alphacoders.com/901/901507.jpg" alt="artorias">
            <div class="descuento">25%</div>
            <div class="datosJuego">
                <h2>Dark souls</h2>
                <h2>Precio:12€</h2>
            </div>
        </div>
        <div>
        <img src="https://images7.alphacoders.com/901/901507.jpg" alt="artorias">
            <div class="descuento">25%</div>
            <div class="datosJuego">
                <h2>Dark souls</h2>
                <h2>Precio:12€</h2>
            </div>
        </div>
        <div>
        <img src="https://images7.alphacoders.com/901/901507.jpg" alt="artorias">
            <div class="descuento">25%</div>
            <div class="datosJuego">
                <h2>Dark souls</h2>
                <h2>Precio:12€</h2>
            </div>
        </div>
    </section>
</body>
</html>