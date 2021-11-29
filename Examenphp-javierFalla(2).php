<?php

    echo "1";
    $text1=$_POST["text1"];
    $text2=$_POST["text2"];
    $text3=$_POST["text3"];
    $operador = $_POST["operacion"];

    #Function cuenta caracteres
    function cuentac($text1){
        $res=strlen($text1);
        echo "El texto '" . $text1 .  "' tiene " . $res . " caracteres";
    }

    #Function invierte texto
    function invierte($text1){
        $res=strrev($text1);
        echo "El texto '" . $text1 . "' invertido es " . $res;
    }
    
    function reemplaza($text3,$text2,$text1){
        $res=str_replace($text3,$text2,$text1);
        echo "El nuevo orden es: " . $res;
    

    #Function búsqueda
    function busqueda($text1, $text2){
        $res=strpos($text1,$text2);
          if ($res==True) {
            echo "La palabra " . $text2 . " se encuentra en el texto";
        } else {
            echo "La palabra " . $text2 . " no se encuentra en el texto";
        }
        
    }
    #Function reemplaza
    function reemplaza($text3,$text2,$text1){
        $res=str_replace($text3,$text2,$text1);
        echo "El nuevo orden es: " . $res;
    }
    echo "3";
    
    switch ($operador) {
        case 'cuenta':
            cuentac($text1);
            break;

        case 'invierte':
            invierte($text1);
            break;
        case 'busca':
            busqueda($text1, $text2);
            break;
        case 'remplaza':
            reemplaza($text3,$text2,$text1);
            break;
        default:
            echo "kva bro algo isiste";
            break;
        }
?>