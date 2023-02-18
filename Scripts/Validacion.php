<?php
$error;
if(!empty($_POST['nombre']) && !empty($_POST['Password']))
{
    $nombre = $_POST['nombre'];
    $Password = $_POST['Password'];
    if($nombre == "administrador" && $Password == "asd")
    {
        $error = "OK";
        header("Location: ../Administrador.php");
    }
    else{
        if($nombre == "cliente" && $Password == 123)
        {
            $error = "OK";
            header("Location: ../Cliente.php");
        }
        else{
            $error = "Datos Erroneos";
            header("Location: ../Login.php?error=$error");
        }
    }
}else{
    $error = "Campos Vacios";
    header("Location: ../Login.php?error=$error");
}