<?php

$funcionesEjecutadas = 0;

include_once("funciones.php");
include_once("superficie.php");

function radioMayor($radio1, $radio2, $radio3){

    $arrayRadios = [$radio1, $radio2, $radio3];

    $arraySuperficie = [];

    //$mayorSuperficie = circulo($arrayRadios[0]);  
    foreach ($arrayRadios as $radio) {
        $arraySuperficie[] = circulo($radio);
    }
    return mayor($arraySuperficie[0], $arraySuperficie[1], $arraySuperficie[2]);

};

// rectangulo(2,3);
// cuadrado(45);
// var_dump($funcionesEjecutadas);

$text = "Me encanta php, a mi también me encanta php!";
echo strpos($text,"php");


?>