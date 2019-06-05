<?php

    echo "El nombre del usuario es " . $_POST["nombre"] . "<br>";

    echo "<br> Imprimir todos los valores: ";
    foreach ($_POST as $key => $value) {
        echo "<br>" . $key . " " . $value;
    }

    echo "<br><br> Funcion GetAllHeaders";
    $headers = getallheaders();
    //print_r($headers);
    foreach ($headers as $key => $value) {
        echo "<br>" . $key . " " . $value ;
    }

    echo "<br><br> Imprimir diferentes variables de PHP <br>";
    echo "<br> <pre>SERVER <br>";  
    print_r($_SERVER);
    echo "<br> <pre>FILES <br>";
    print_r($_FILES);
    echo "<br> <pre>REQUEST <br>";
    print_r($_REQUEST);
    echo "<br> <pre>SESSION <br>";
    print_r($_SESSION);
    echo "<br> <pre>COOKIE <br>";
    print_r($_COOKIE);
    echo "<br> <pre>GLOBALS <br>";
    print_r($GLOBALS);
    echo "<br>";
    
?>