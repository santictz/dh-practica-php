<?php

function triangulo($base, $altura){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    $superficie = ($base * $altura) / 2;
    return $superficie;
};

function rectangulo($base, $altura){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    $superficie = $base * $altura;
    return $superficie;
};

function cuadrado($lado){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;  
    return pow($lado,2);
};

function circulo($radio){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return pi() * pow($radio,2);
}

?>