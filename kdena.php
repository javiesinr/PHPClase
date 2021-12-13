
<?php

include 'kdena2.php';


#recogida de datos
$text1=$_GET["operando1"];
$text2=$_GET["operando2"];
$text3=$_GET["operando3"];
$selector=$_GET["cadenas"];
;
} 
    switch ($selector){
        case 'Cuentas_caracteres':
            Cuentas_caracteres ($text1);
            break;
            case 'Cuentas_palabras':
                Cuentas_palabras($text1);
                break;
            case 'Invierte_el_texto':
                Invierte_el_texto($text1,$text2,$text3);
                break;   
            case  'Busqueda':
                Busqueda($text1,$text2);
                break;
            case 'Remplazar_palabra':
                Remplazar_palabra($text3,$text2,$text1);
                break;

           
            default:
            echo "operacion incorrecta";
            break;
    }  









?>