<?php
$texto1=$_GET["operador1"];
$texto2=$_GET["operador2"];
$texto3=$_GET["operador3"];
$selector=$_GET["cadenas"];
//creacion de variables.
function Cuenta_caractere($texto1){

    $res=strlen($texto1);

    print "El resultado es ".$res."<br>";

}

function Cuenta_palabras($texto1){
    
    $res=str_word_count($texto1);

    print "el resultado es ".$res."<br>";
}
 function Inviertetexto($texto1){
    $res=strrev($text1);
    print "el resultado es".$res."<br>";

 }
function Busqueda($texto1,$texto2){
    
    $res=strpos($texto1,$texto2);
    if ($res==True) {
        print "La palabra se encuentra en  el texto";
    }

        else {
            print "La palabra no se encuentra en el texto";
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
            case 'Inviertetexto':
                Inviertetexto($texto1,$texto2,$texto3);
                break;   
            case  'Busqueda':
                Busqueda($texto1,$texto2);
                break;
            case 'Remplazarpalabra':
                Remplazarpalabra($texto3,$texto2,$texto1);
                break;
           
            default:
            echo "operacion erronea";
            break;

    }
?>


