<?php

if(isset($_GET['cerrar'])) {

  //Vaciamos y destruimos las variables de sesión
  $_SESSION['nombre'] = NULL;
  $_SESSION['Password'] = NULL;
  unset($_SESSION['nombre']);
  unset($_SESSION['Password']);

  //Redireccionamos a la pagina index.php
  header('Location: ../Login.php');
}

?>