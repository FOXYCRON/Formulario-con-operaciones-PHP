<html>
 <head>
    <title> Operaciones </title>
 </head>
  <body>
 <?php

$multi = $_REQUEST['num1'] * $_REQUEST['num2'];
echo "El resultado de la multiplicacion es: ".$multi;


?>
<br>
<br>
<input type ="button" value= "Regresar" onclick= "window.location='multiplicacion.php';">
    
  </body>
</html>