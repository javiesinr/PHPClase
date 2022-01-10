<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $var=date("l");

    echo "$var";
        
    switch ($var) {
        case 'Friday':
            echo " hoy es Viernes"."<br>";
            break;
        
        case 'Monday':
            echo "<br>". "8:15-9:15 &nbsp; Aplicaciones Web"."<br>";
                           echo "9:15-10-15 &nbsp; Aplicaciones Web"."<br>";
                            echo "10:15-11:15 &nbsp; Aplicaciones Web"."<br>";
                             echo "11:15-11:45 &nbsp; Media hora del cigarro"."<br>";
                             echo "11:45-12:45 &nbsp; Servicios en red"."<br>";
                            echo "12:45-13:45 &nbsp;  Servicios en red"."<br>";
                              echo  "13:45-14:45 &nbsp; Servicios en red "."<br>";
            break;

            case 'Tuesday':
                echo "<br>". "8:15-9:15 &nbsp; Sistemas"."<br>";
                           echo "9:15-10-15 &nbsp; Sistemas"."<br>";
                            echo "10:15-11:15 &nbsp; Sistemas"."<br>";
                             echo "11:15-11:45 &nbsp; Media hora del cigarro"."<br>";
                             echo "11:45-12:45 &nbsp; Seguridad"."<br>";
                            echo "12:45-13:45 &nbsp;  Coger el bus de las 12:55"."<br>";
                              echo  "13:45-14:45 &nbsp; de camino a casa  "."<br>";
                break;


                case 'Wednesday':
                    echo "<br>". "8:15-9:15 &nbsp; Aplicaciones Web"."<br>";
                           echo "9:15-10-15 &nbsp; Aplicaciones Web"."<br>";
                            echo "10:15-11:15 &nbsp; Aplicaciones Web"."<br>";
                             echo "11:15-11:45 &nbsp; Media hora del cigarro"."<br>";
                             echo "11:45-12:45 &nbsp; Servicios en red"."<br>";
                            echo "12:45-13:45 &nbsp;  Servicios en red"."<br>";
                              echo  "13:45-14:45 &nbsp; Servicios en red "."<br>";
                    break;

                    case 'Thursday':
                        echo "<br>". "8:15-9:15 &nbsp; Base de datos"."<br>";
                        echo "9:15-10-15 &nbsp; Base de datos"."<br>";
                         echo "10:15-11:15 &nbsp; Base de datos"."<br>";
                          echo "11:15-11:45 &nbsp; Media hora del cigarro"."<br>";
                          echo "11:45-12:45 &nbsp; Seguridad"."<br>";
                         echo "12:45-13:45 &nbsp;  Ingles"."<br>";
                           echo  "13:45-14:45 &nbsp; Ingles "."<br>";
                        break;
            
                        case 'Friday':
                            echo "<br>". "8:15-9:15 &nbsp; Ingles"."<br>";
                            echo "9:15-10-15 &nbsp; Seguridad"."<br>";
                             echo "10:15-11:15 &nbsp; Seguridad"."<br>";
                              echo "11:15-11:45 &nbsp; Media hora del cigarro"."<br>";
                              echo "11:45-12:45 &nbsp; Aplicaciones Web"."<br>";
                             echo "12:45-13:45 &nbsp;  Coger el bus de las 12:55"."<br>";
                               echo  "13:45-14:45 &nbsp; Camino a casa "."<br>";
                            break;

                        case  'Sunday':
                            echo "<br>". "00:00-23:59 Hoy es domingo se fuma makelele"."<br>";
                           
                            break;

                        
                            case 'Saturday':
                                echo "Hoy es sabado y se sale."."<br>";
                                break;
                    
                            }

    ?>

</body>
</html>