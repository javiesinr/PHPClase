<?php

$numeros = 8;
$numeros = 3;
$numeros = 7; 
$numeros = 1; 

$numeros =array(8,3,7,1);
$suspensos =array("Migue","kerry");
$coche = array ("Ferrari","Seat","BMW");

ECHO $suspensos[0];
echo $numeros[3];


$cuentaCoches=count($coche);

echo "numero de coches".$cuentaCoches;

$aleatorio=rand(0,$cuentaCoches-1);

$numerosP = array (2,4,6,8);

echo "coche aleatorio:".$coche[$aleatorio];

$cuentaCoches=count($numerosP);

$potencias2 =[1=>2, 2=>4, 3=>8];
$capitales =array("Andalucia"=<"Sevilla", "Madriz"=>"Madrid");
print_r($potencias2);

echo "<br>";


//añadir comentarios a un array

$capitales["Cataluña"]="Barcelona";
print_r($capitales);
echo "br";
