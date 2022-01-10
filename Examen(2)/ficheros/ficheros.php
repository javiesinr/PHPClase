<?php

$datosrecogidos=$_GET["text1"]


<input>
echo "prueba.txt";
echo "<br>";

echo readfile("pruebaficheros.txt");
echo "<br>";
echo filesize("pruebaficheros.txt");
echo "<br>";

//Apertura y lectura de un fichero

//abro el fichero en una direccion de memoria


$fichero=fopen("pruebaficheros.txt","r") or die ("fallo al abri el fichero io");
//OBTENGO EL tamaño DEL fiCHERO

echo $fichero;
$pesofichero=filesize("pruebaficheros.txt");
//Represento por la pantalla el contenido,le doy el recurso $fichero  y su peso $pesofichero
echo "<br>";
echo fread($fichero,$pesofichero);
fclose($fichero);
//cuando acaba de representarlo lo cierra y yasta


//Escribir


$ficheros=fopen("ficheros.txt","w")or die("fallo al abrir el fichero");
$nuevotexto="Que te gustan las variables";
$nuevotexto2=$datosrecogidos;
 fwrite($ficheros,"prefiero camelarte");
fclose($ficheros);                            

















?>