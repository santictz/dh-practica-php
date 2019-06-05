<?php

$nombre="";
$email="";
require_once("C:\\xampp\\htdocs\\practica-php\\validaciones\\validar-form.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <div>
    <form action="formulario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?=$nombre?>">
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?=$email?>">
        <br>
        <input type="submit" value="Enviar">
    </form>
    </div>
    <?php if (!empty($errores)) : ?>
    <div>
        <ul>
            <p>Por favor, corrija los siguientes errores: </p>
            <?php foreach($errores as $error) : ?>
            <li>
                <?=$error?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
</body>
</html>