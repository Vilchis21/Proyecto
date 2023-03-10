<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    
    <script src="https://kit.fontawesome.com/6b1e0dad91.js" crossorigin="anonymous"></script>
    <!--<script src="https://kit.fontawesome.com/df59baf6b8.js" crossorigin="anonymous"></script>-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/stock.js"></script>
    <script defer src="js/modal.js"></script>
    <script defer src="js/app.js"></script>
</head>
<body>
    <header>
        <h1 id="titulo" class="titulo">Salon Octagram</h1>
        <button id="boton-carrito"><i class="fas fa-shopping-cart"></i><span id="contadorCarrito">0</span></button>
        <a href="Cliente.php" class="salir fas"><i class="fa-solid fa-arrow-left"></i></a>
    </header>
    <main id="contenedor-productos">

    </main>

    <div class="modal-contenedor">
        <div class="modal-carrito">
            <h3>Carrito</h3>
            <button id="carritoCerrar"><i class="fas fa-times-circle"></i></button>
            <div id="carrito-contenedor">
            </div>
            <p class="precioProducto">Precio total: $<span id="precioTotal">0</span></p>
            <button id="vaciar-carrito" class="boton-agregar">Vaciar carrito</button>
        </div>
    </div>
</body>
</html>