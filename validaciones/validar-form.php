<?php

//Valido si el form tiene informacion
if ($_POST) {
    //Creo una coleccion de errores
    $errores = [];

    //Nombre no vacio
    if (empty($_POST["nombre"])) {
        $errores[] = "El campo Nombre no puede estar vacio!";
    } 

    //Email no vacio
    if (empty($_POST["email"])) {
        $errores[] = "El campo Email no puede estar vacio!";
    }
    //Email con formato valido
    if (!empty($_POST["email"]) && !(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
        $errores[] = "El email no es valido!";
    }

    if (empty($errores)){
        header("Location:exito.php");exit;
    }
}