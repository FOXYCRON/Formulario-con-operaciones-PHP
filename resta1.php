<html>
 <head>
    <title> Operaciones </title>
 </head>
  <body>
 <?php

$resta = $_REQUEST['num1'] - $_REQUEST['num2'];
echo "El resultado de la resta es: ".$resta;


?>
<br>
<br>
<input type ="button" value= "Regresar" onclick= "window.location='resta.php';">
    
  </body>
</html>