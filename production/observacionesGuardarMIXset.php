<?php

session_start();
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

 } else {
       header('Location: ../page_403.php?Mensaje=No Existe sesión');

 exit;
 }
 $now = time();
 $expiracion = $_SESSION['expire'];


 if($now > $_SESSION['expire']) {
 session_destroy();

    header('Location: ../page_403.php?Mensaje=Tiempo Agotado');
 exit;
 }

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "sr1920la";
 $db_name = "Compras3";
 $tbl_name = "Usuarios";
   $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
  die("La conexion falló: " . $conexion->connect_error);
 }



$username = $_SESSION['username'];



$idRequi = $_GET['id'] ;
$Folio = $_GET['Folio'] ;





// inicio

//SELECT SUM(Cantidad) As Cantidad, descripcionProductoRequi FROM movdTempRequiMIX WHERE`idRequisiciones2023` = 19 GROUP BY `descripcionProductoRequi`

$sql1="SELECT * FROM  movdTempRequiMIX  WHERE idRequisiciones2023 = $idRequi";
echo $sql1.'<br>';
$resultado = $conexion->query($sql1);





while ($row = $resultado->fetch_assoc()) 
{


}









            
    




  mysqli_close($conexion);







?>
