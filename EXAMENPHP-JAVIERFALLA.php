<?php

$numero=$_POST["numero"];
$aleatorio=$_POST["aleatorio"];
$numeroAleatorio=rand(0,2048);

#vale hasta aqui lo tenemos bien creo.


    function dab($numero) {
         $res=decbin($numero);
    echo "Esto "$numero."es".$res ."en binario";
}

    function dao($numero){
         $res=decoct($numero);
    echo "Esto".$numero."es".$res."en octal";
}

    function dah($num){
        $res=dechex($num);
    echo "Esto".$num."es".$res."en hexadecimal";
}

    function bad($num){
         $res=bindec($num);
    echo "Esto".$num."es ".$res."en decimal";
}

    function oad($num){
         $res=octdec($num);
    echo "esto".$num."es igual a".$res."en decimal";
}

    function had($num){
        $res=hexdec($num);
    echo "EstO".$num."es ".$res."en decimal";
}



switch ($selector) {
    case 'DecimalABinario':
        dab($num);
        break;
              case 'DeciamalaOctal':
        dao($numero);
        break;
          case 'DecimalaHexadecimal':
        dah($numero);
        break;
    case 'BinarioaDecimal':
        bad($numero);
        break;
         case 'OctalaDecimal':
         oad($numero);
  break;
    case 'Hexadecimaladecimal':
        had($numero);
        break;
    default:
        echo "No tengo porque por nada aqui, pero si sale esto es k la has lao bro";
        break;
}
?>















