<?php

echo "Ejercicio 1 <br>";

$num = 0;
for ($i = 1; $i <= 10; $i++) {
    $num = 2 * $i;
    echo "2 * " . $i . " es: " . $num . "<br>";
}

echo "<hr>";
echo "Ejercicio 2 <br>";

$num2 = 100;
while ($num2 >= 85) {
    echo $num2 . "<br>";
    $num2--;
}

echo "<hr>";
echo "Ejercicio 3 <br>";
$contador = 3;
while ($contador >= 1 && $contador <= 5) {
    echo "<br> El doble de la variable " . $contador . " es: " . $contador * 2;
    $contador++;
}

echo "<hr>";
echo "Ejercicio 4 <br>";
$cara = 0;
$cantidadTiros = 0;
while ($cara <= 5) {
    $cantidadTiros++;
    $tiro = rand(0, 1);
    if ($tiro == 1) {
        $cara++;
    }
}
echo "<br> Llevo " . $cantidadTiros . " tiros para obtener 5 caras <br>";

echo "<hr>";
echo "Ejercicio 5 <br>";
$nombres = ["Santiago", "Jose", "Sergio", "Franco", "Ezequiel"];
$nombre = "";

for ($i = 0; $i < count($nombres); $i++) {
    echo "<br>" . $nombres[$i];
}

echo "<hr>";
$x = 0;
while ($x < count($nombres)) {
    echo "<br>" . $nombres[$x];
    $x++;
}

echo "<hr>";
$y = 0;
do {
    echo "<br>" . $nombres[$y];
    $y++;
} while ($y < count($nombres));

echo "<hr>";
foreach ($nombres as $nombre) {
    echo "<br>" . $nombre;
}

echo "<hr>";
echo "Ejercicio 6 <br>";

$numAleatorio = [];
for ($i = 0; $i < 11; $i++) {
    $numAleatorio[] = rand(0, 10);
    if ($numAleatorio[$i] == 5) {
        echo "Se encontro un 5!";
        break;
    }
    echo $numAleatorio[$i] . "<br>";
}

echo "<hr>";
echo "Ejercicio 7 <br>";

$aleatorio = [];
$pares = 0;
for ($i = 0; $i < 10; $i++) {
    $aleatorio[] = rand(0, 100);
    if ($aleatorio[$i] % 2 == 0) {
        $pares++;
    }
}
echo "Se generaron " . $pares . " numeros pares";

echo "<hr>";
echo "Ejercicio 8 <br>";

$mascota = [
    "animal" => "perro",
    "edad" => 8,
    "altura" => 4.5,
    "nombre" => "Raul"
];
foreach ($mascota as $posicion => $value) {
    echo $posicion . ": " . $value . "<br>";
}

echo "<hr>";
echo "Ejercicio 9 <br>";
$ceu = array(
    "Italia" => "Roma", "Luxembourg" => "Luxembourg", "Bélgica" => "Bruselas", "Dinamarca" => "Copenhagen", "Finlandia" => "Helsinki", "Francia" =>
    "Paris", "Slovakia" => "Bratislava", "Eslovenia" => "Ljubljana", "Alemania" => "Berlin",
    "Grecia" => "Athenas", "Irlanda" => "Dublin", "Holanda" => "Amsterdam",
    "Portugal" => "Lisbon", "España" => "Madrid", "Suecia" => "Stockholm", "Reino
    Unido" => "London", "Chipre" => "Nicosia", "Lithuania" => "Vilnius", "Republica
    Checa" => "Prague", "Estonia" => "Tallin", "Hungría" => "Budapest", "Latvia" => "Riga",
    "Malta" => "Valletta", "Austria" => "Vienna", "Polonia" => "Warsaw"
);

foreach ($ceu as $pais => $capital) {
    echo "Pais: " . $pais . " y su Capital es: " . $capital . "<br>";
}

echo "<hr>";
echo "Ejercicio 10 <br>";

$ceu_dos = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
    "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
    "Francia" => ["Paris", "Nantes", "Lyon"],
    "Italia" => ["Roma", "Milan", "Venecia"],
    "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

foreach ($ceu_dos as $pais => $ciudades) {
    echo "Las ciudades de " . $pais . " son: <br>";
    foreach ($ciudades as $ciudad) {
        echo "- " . $ciudad . "<br>";
    }
}

echo "<hr>";
echo "Ejercicio 11 <br>";

$ceu_tres = [
    "Argentina" => [
        "Ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "esAmericano" => TRUE
    ],
    "Brasil" => [
        "Ciudades" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        "esAmericano" => TRUE
    ],
    "Colombia" => [
        "Ciudades" => ["Cartagena", "Bogota", "Barranquilla"],
        "esAmericano" => TRUE
    ],
    "Francia" => [
        "Ciudades" => ["Paris", "Nantes", "Lyon"],
        "esAmericano" => FALSE
    ],
    "Italia" => [
        "Ciudades" => ["Roma", "Milan", "Venecia"],
        "esAmericano" => FALSE
    ],
    "Alemania" => [
        "Ciudades" => ["Munich", "Berlin", "Frankfurt"],
        "esAmericano" => FALSE
    ]
];

foreach ($ceu_tres as $pais => $posicion) {
    if($posicion["esAmericano"] == TRUE){
        echo "Las ciudades de " . $pais . " son: <br>";
        foreach ($posicion["Ciudades"] as $ciudad) {
            echo "- " . $ciudad . "<br>";
        };
    }
}