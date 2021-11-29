<?php

$codigo1=$_POST["codigo1"];
$ciudadOr1=$_POST["Codigoorigen1"];
$ciudaddesti1=$_POST["ciudaddestino1"];
$precio1=$_POST["precio1"];
$fechasalida1=$_POST["fechasalida1"];

$codigo2=$_POST["codigo2"];
$ciudadOr2=$_POST["Codigoorigen2"];
$ciudaddesti2=$_POST["ciudaddestino2"];
$precio2=$_POST["precio2"];
$fechasalida2=$_POST["fechasalida2"];
$selector=$_POST["Herramientas"];

$vuelo1=array(1,2,3);
$vuelo2=array(4,5,6);

function univuelos ($vuelo1,$vuelo2)
  { 
    $resultado=array_merge($vuelo1,$vuelo2);
    print_r ($resultado);
  }
  function diferenciavuelos($vuelo1,$vuelo2){
      $resultado=array_diff($vuelo1,$vuelo2);
      print_r($resultado);

  }

  function ordenavuelo ($vuelo1)
  {
    echo "<b> datos del vuelo:</b>";
    sort ($vuelo1);
    print_r($vuelo1);
}

function intersecionvuelo ($vuelo1,$vuelo2){

    $resultadoIntersec=array_intersect($vuelo1,$vuelo2);
    echo "<b> informacion de vuelo: </b>";
    print_r($resultadoIntersec);
}
function informacioncomun ($vuelo1,$vuelo2)
{
   $resultado=array_intersect ($vuelo1,$vuelo2);
       echo "<b> datos comun </b>";
       print_r ($resultado);


}



switch ($selector) {
    case 'Unevuelos':
        univuelos ($vuelo1,$vuelo2);
        break;
    
        case 'Diferenciaentrevuelos':
        diferenciavuelos ($vuelo1,$vuelo2);
        break;

        case 'ordenavuelos':
        ordenavuelo ($vuelo1);
        break;

        case 'Informacioncomun':
        informacioncomun ($vuelo1,$vuelo2);
    }



  ?>