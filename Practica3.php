<html> 
<head> 
<title>Comprobacion peso de vehiculos</title> 
</head> 
<body align="center"> 
<hr>
<h3>- Comprobacion peso de vehiculos -</h3>
<hr>
<FORM ACTION="Practica3.php" METHOD="GET"> 
    Introduzca el peso del vehiculo:
   <INPUT TYPE="text" NAME="numero1"><br> 
   <br></br>
    Introduzca el peso maximo:
   <INPUT TYPE="text" NAME="numero2"><br> 
   <br></br>
   <INPUT TYPE="submit" VALUE="Compara"> 
   <INPUT TYPE="reset" VALUE="Limpia">
</FORM>  
<p></p>

<?php 

$n1=intval ($_GET["numero1"]);
$n2=intval ($_GET["numero2"]);

if ($n1>$n2){
    echo "El peso del vehiculo es (".$n1.") y el peso maximo es (".$n2.") por lo tanto le esta permitido pasar";
}
elseif ($n1==$n2){
    echo "El peso del vehiculo es (".$n1.") y el peso maximo es (".$n2.") por lo tanto le esta permitido pasar";
}
else{
    echo "El peso del vehiculo es  (".$n1.") y el peso maximo es (".$n2.") por lo tanto le esta permitido pasar";
}
 ?>
</p>
<br> 
</body> 
</html>