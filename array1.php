<?php
for ($inicio=0; $inicio < 5; $inicio++) {



   

    for ($inicio2=0; $inicio2 < 5; $inicio2++) {

        print "Vamos por la interacción inicio: ".$inicio."<br>";

        print "Vamos por la interacción inicio2: ".$inicio2."<br>";

    }
brrr



}

//Bucles anidados de forma dependiente
for ($varexterior=0; $varexterior < 5; $varexterior++) {
    print "<br>Muestro variable exterior: ".$varexterior."<br>";

for ($varinterior=0; $varinterior < $varexterior; $varinterior++) {

    print "<br>Muestro variable interior: ".$varinterior."<br>";




}

}

#ARRAYS
print "<br><h2>ARRAY'ESTADAR'</h2>"."<br>";

#Forma 1:
$numeroP=array(2,4,6,8,10);

   print_r($numeroP);
   echo "<br>";
   print "Muestren lo que hay en la posicion3:".$numeroP[3]."<br>";
$cuentaNumerosP=count($numeroP);
print "Valor de Cuenta ARRAy:".$cuentaNumerosP."<br>"."<br>";

  for ($i=0; $i < $cuentaNumerosP; $i++) { 
    print "Muestren lo que hay en la posicion3:".$i.":".$numeroP[$i]."<br>";
   }

echo "<br>";
#Forma 2:
$numeroI=[1,3,5,7,9];

print_r($numeroI);
echo "<br>";


#ARRAY ASOCIATIVO
print "<br><h2>ARRAY'ASOCIATIVO'</h2>"."<br>";

$potencias2=[1=>2, 2=>4, 3=>8];
$capitales=array("Andalucia"=>"Sevila","Madrid"=>"Madrid","Aragon"=>"Zaragoza");
print_r($capitales);
print_r($potencias2);
echo "<br>";

//Añadir elementos a un array

$capitales["Cataluña"]="Barcalona";
   print_r($capitales);
   echo "<br>";

   $capitales["Andalucia"]="Sevilla";
   print_r($capitales);
   echo "<br>";
$cuentaLetras=strlen($capitales["Andalucia"]);
   echo $cuentaLetras;
  


   $notasAsignaturasMigue=["LMI"=>0,"FOL"=>10,"BD"=>4];
   print_r($notasAsignaturasMigue);
  
//union de arrays
$coche1=array("Seat","Renault","Dacia");
$coche2=["BMV,","Audi"];
print_r($coche1);
echo "<br>";
print_r($coche2);
echo "<br>Union de arrays";
$union2con1=$coche1+$coche2;
print_r($union2con1);
echo "<br>";
$union2con1=$coche2+$coche1;
print_r($union2con1);
echo "<br>";

//Borrar elemento

$coches3=array("Seat","Renault","Dacia","BMW","Audi");
print_r($coches3);
echo"<br>";
unset($coches3[1]);
print_r($coches3);
echo"<br>";
$cuentaCoches=count($coches3);


//copiar matrices

$copiaCapitales=$capitales;
$copiaCapitales ["Andalucia"]="Cordoba";
print_r($copiaCapitales);
echo "<br>";

/*
#Array Normales
$numeros=array(8, 3, 7 , 1);

$suspensos=array("Miguel", "kerry");

$coches=array("Ferrrari","Seat", "BMV","Opel");

echo $suspensos[0];
echo $coches[3];



$cuentaCoches= count($coches);

echo "Numero de coches".$cuentaCoches;

$aleatorio=rand(0,3);

echo "Coches aleatorio:".$coches[$aleatorio];

$parada=0;
while ($parada <= 4) {
    $aleatorio=rand(0,3);
    echo $coches[$aleatorio]."<br>";
    $parada++;
}

$alumnos=array("Nombre"=>"Miguel",
                "Apellido"=>"Kerry",
                "Edad"=>23,
                "estaAprobado"=>false);
    
    echo $alumnos["Edad"].$alumnos["Apellido"];
    */
?>