<?php

//Crear array Persona
$persona = [
    "Nombre" => "Jon",
    "Apellido" => "Snow",
    "Edad" => 27,
    "Hobbies" => [
        "Netflix",
        "Futbol",
        "Programar"
    ]
];

//Modificar Edad
$persona["Edad"] = 25;

//Agregar Direccion
$persona[] = [
    "Direccion" => "Winterfell"
];

//Agregar un Hobbie dentro del array
$persona["Hobbies"][] = "Correr";

var_dump($persona);

//Condicionales
//Ej 1
$num1 = 5;
$num2 = 4;
if ($num1 > $num2) {
    echo "<br> El numero mayor es " . $num1 . "<br>";
} else {
    echo "El numero mayor es " . $num2 . "<br>";
}

//Ej 2
$num3 = rand(1,5);
if ($num3 == 3 || $num3 == 5) {
    echo $num3;
}

//Ej 3
if ($num3 != 3) {
    echo "El numero NO es 3";
} else {
    echo $num3;
}

//Ej 4
$num4 = rand(1,100);
if ($num4 > 50) {
    echo "<br> El numero es MAYOR a 50";
} else if ($num4 == 50){
    echo "<br> El numero es 50";
} else {
    echo "<br> El numero es MENOR a 50";
}

//Ej 5
$nombreDeUsuario = "Santiago";
$contraseniaDeUsuario = "1234";

if ($nombreDeUsuario == "admin" && $contraseniaDeUsuario == "1234") {
    echo "<br> Bienvenido!";
} else if ($nombreDeUsuario == "") {
    echo "<br> Ingrese un nombre de usuario valido";
} else if ($contraseniaDeUsuario == "") {
    echo "<br> Ingrese la contrasenia";
} else if ($nombreDeUsuario !="admin") {
    echo "<br> El nombre de usuario es incorrecto";
} else if($contraseniaDeUsuario != "1234") {
    echo "<br> La contrasenia es incorrecta";
}

//Ej 6
$edad = 26;
$casado = FALSE;
$sexo = "Masculino";

if ($edad > 18 && !$casado || $sexo == "Otro") {
    echo "<br> Bienvenido";
}

//Ej 7
$cantidadDeAlumnos = 30;
if ($cantidadDeAlumnos) {
    echo "<br> true";
} else {
    echo "<br> false";
}

//Ej 8
$numero = 5;
$resto = $numero % 2;

echo $resto == 0 ? "<br>El numero es par" : "<br>El numero es impar";

//Ej 9 & 10
$nota = 0;

if ($nota >= 1 && $nota <= 10) {
    switch ($nota) {
        case '10':
            echo "<br>Excelente!!!!!";
            break;
        case '9':
            echo "<br>MUY bien!!";
            break;
        case '8':
        case '7':
        case '6':
            echo "<br>Bien!!!";
            break;
        case '5':
        case '4':
            echo "<br>zafamos";
            break;
        default:
            echo "<br>desaprobado";
            break;
    }    
} else {
    echo "<br>El numero no es valido";
}
