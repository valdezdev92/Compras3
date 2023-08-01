<?php

session_start();
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

 } else {
       header('Location: ../page_403.php?Mensaje=No Existe sesión');

 exit;
 }
 $now = time();
 $expiracion = $_SESSION['expire'];

 // echo "$now";
 // echo "<br>";
 // echo "$expiracion";

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





$observaciones = $_POST['Observaciones'] ;

//echo ' Motivos:'.$Motivos;

$AUX = addslashes($observaciones);

$observaciones = $AUX;



$id= $_POST['id'];

// echo '<BR> $idUsuario  :'.$idUsuario ;


$Folio= $_POST['Folio'];


$hoy = getdate();
$d = $hoy['mday'];
  $m = $hoy['mon'];
  $y = $hoy['year'];

    $d2= date("d");
    $m2= date("m");
    $y2= date("y");

$FechaEnvio = "$y/$m2/$d2";





$sql='
UPDATE movdRequisiciones2023FormAdq
set
  
   
    ObservacionesFormAdq = "'.$observaciones.'",
    Folio = "'.$Folio.'"

WHERE idRequisiciones2023 = '.$id.'
';



echo "<br>";
echo $sql;




 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "sr1920la";
 $db_name = "Compras3";
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
  die("La conexion falló: " . $conexion->connect_error);
 }

 // se inserta la requisicion en la tabla Requisiciones2023

//  $resultado = $conexion->query($sql);


//echo $sql;
     if ($conexion->query($sql) )
     {


           

      

  

       


           

           header('Location: ReporteADQ.php?id='.$id.'');
     }
     else {
      // echo "Error al momento de insertar";
        // header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
     }
 






  mysqli_close($conexion);







?>
