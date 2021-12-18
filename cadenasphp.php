<?php
$text1=$_GET["operador1"];
$text2=$_GET["operador2"];
$text3=$_GET["operador3"];
$selector=$_GET["cadenas"];
//creacion de variables.
function Cuenta_caractere($text1){

    $res=strlen($text1);

    print "El resultado es ".$res."<br>";

}

function Cuenta_palabras($text1){
    
    $res=str_word_count($text1);

    print "el resultado es ".$res."<br>";
}
 function Inviertetexto($text1){
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

//Ahora vendrian los function 
    
switch ($selector){
        case 'Cuentas_caracteres':
            Cuentas_caracteres ($texto1);
            break;
            case 'Cuentas_palabras':
                Cuenta_palabras($texto1);
                break;
            case 'Invierte_el_texto':
                Inviertetexto($texto1,$texto2,$texto3);
                break;   
            case  'Busqueda':
                Busqueda($texto1,$texto2);
                break;
            case 'Remplazar_palabra':
                Remplazarpalabra($texto3,$texto2,$texto1);
                break;
           
            default:
            echo "operacion incorrecta";
            break;

    }
?>


