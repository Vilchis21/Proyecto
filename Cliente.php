<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>

    <link rel="stylesheet" href="css/stylebarra.css" />
    <link href="css/slider.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/flexslider.css">
	  <link rel="stylesheet" href="css/font-awesome.css">

	  <script src="js/jquery-3.1.0.min.js"></script>
	  <script src="js/jquery.flexslider.js"></script>
	  <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/6b1e0dad91.js" crossorigin="anonymous"></script>
    <script defer src="js/cliente.js"></script>
  </head>
  <body>
    <div class="contenedor">
    
    <div class="slider center-align">
            <?php
                $ids = array(1,2,3);
                $alt = array(
                    "Slide 1",
                    "Slide 2",
                    "Slide 3",
                );
                $max = count($ids);
                for($s=0;$s<$max;$s++){ ?>
                    <input type="radio" id="<?= $ids[$s]; ?>" name="image-slide" hidden />
                <?php }
            ?>
            <div class="slideshow">
                <?php for($s=0;$s<$max;$s++){ ?>
                <div class="item-slide">
                    <img src="imagenes/<?= $ids[$s]; ?>.png" alt="<?= $alt[$s]; ?>" />
                </div>
                <?php } ?>
            </div>
            <div class="pagination">
                <?php for($s=0;$s<$max;$s++){ ?>
                <label class="pag-item" for="<?= $ids[$s]; ?>">
                    <img src="imagenes/<?= $ids[$s]; ?>.png" alt="<?= $alt[$s]; ?>" />
                </label>
                <?php } ?>
            </div>
        </div>
    </div>
    <header class="header">
      <nav class="nav">
        <a href="Cliente.php" class="logo nav-link">Inicio</a>
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li class="nav-menu-item">
            <a href="Producto.php" class="nav-menu-link nav-link">Productos</a>
          </li>
          <li class="nav-menu-item">
            <a href="Scripts/Cerrar.php?cerrar=yes" class="nav-menu-link nav-link nav-menu-link_active"
              >Salir</a
            >
          </li>
        </ul>
      </nav>
    </header>
  </body>
</html>