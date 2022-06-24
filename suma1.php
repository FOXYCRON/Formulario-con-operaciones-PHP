<html>
 <head>
    <title> Operaciones </title>
 </head>
  <body>
 <?php

$suma = $_REQUEST['num1'] + $_REQUEST['num2'];
echo "El resultado de la suma es: ".$suma;


?>
<br>
<br>
<input type ="button" value= "Regresar" onclick= "window.location='suma.php';">
    
  </body>
</html>