<html>
 <head>
    <title> Operaciones </title>
 </head>
  <body>
 <?php

$divicion = $_REQUEST['num1'] / $_REQUEST['num2'];
echo "El resultado de la divicion es: ".$divicion;


?>
<br>
<br>
<input type ="button" value= "Regresar" onclick= "window.location='divicion.php';">
    
  </body>
</html>