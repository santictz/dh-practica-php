<?php

function mayor($num1, $num2, $num3 = 100)
{
   $arrayNum = [$num1, $num2, $num3];

   $max = $arrayNum[0];

   foreach ($arrayNum as $numero) {
       if ($numero > $max) {
           $max = $numero;
       }
   }
   
   return $max;
    //return max($num1, $num2, $num3);
};

function tabla($base, $limite = 100)
{
    $resultado = [];
    for ($i = $base; $i <= $limite; $i++) {
        $resultado[] = $i;
    }
    return $resultado;

};

/* 
echo mayor(4, 5);

$resultado = tabla(1);
var_dump($resultado); */
