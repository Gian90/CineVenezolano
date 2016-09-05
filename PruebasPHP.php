<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NOSE</title>
  </head>
  <body>
      <?php
            $name = "Carlos";
            defined("PI", 3.141615);
            defined('SALUDA', 'Hello World', TRUE);
            $age = 24;
            $a= "3";
            $c= "4a";
            $d= "a32";
            $b= 3;
            $sinlge= TRUE;
            echo "Me estoy cagando!";
            echo $name;
            echo $age;
            echo $sinlge;
            echo $a + $b; // print 6 convierte todo a numero
            echo $a + $c; // print 7 convierte a numero y pone en 0 las letras si tiene una letra despues de un numero.
            echo $a + $d; //print 3  convierte a todo en cero si tiene una letra adelante
            echo $a + $b + $d;// print 6

            echo SALUDA;
          /*  function myTests($parameter){
              $GLOBALS['a']= $parameter;
              echo $parameter;

            }

            myTests();*/

if (condition) {
  # code...
}
while ($a <= 10) {
  # code...
}
public function FunctionName($value='')
{
  # code...
}
if (condition) {
  # code...
}elseif (condition) {
  # code...
} else {
  # code...
}


       ?>
  </body>
</html>
