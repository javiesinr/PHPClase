<?php




function Cuentas_caracteres($text1){

$res=strlen($text1);

print "El resultado es ".$res."<br>";

}

function Cuentas_palabras($text1){

$res=str_word_count($text1);

print "el resultado es ".$res."<br>";
}
function Invierte_el_texto($text1){
$res=strrev($text1);
print "el resultado es".$res."<br>"."<br>";

}
function Busqueda($text1,$text2){

$res=strpos($text1,$text2);
if ($res==True) {
print "La palabra se encuentra en  el texto";

}
else {
print "La palabra no esta en el texto";
}
      
}

function Remplazar_palabra($text3,$text2,$text1){
$res=str_replace($text3,$text2,$text1);
print "el nuevo orden es".$res."<br>";
} 

?>