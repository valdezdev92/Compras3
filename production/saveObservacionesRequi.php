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



$FechaEntregaObs = $_POST['FechaEntregaObs'];
$PersonaEntregar = $_POST['PersonaEntregar'];
$TelefonoEntrega = $_POST['TelefonoEntrega'];

echo $FechaEntregaObs.'<br>';
echo $PersonaEntregar.'<br>';
echo $TelefonoEntrega.'<br>';







$sql='
INSERT INTO movdObservacionesRequi(

    idRequisiciones2023,
    ObservacionesRequi
)
VALUES(
  '.$id.',
  "'.$observaciones.'"
)';



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


           

      

           $sql = '
           
UPDATE
    Requisiciones2023
SET
    Estatus = "NoModificable",
    idProceso = 2,
    FechaEntregaObs = "'.$FechaEntregaObs.'",
    PersonaEntregar = "'.$PersonaEntregar.'",
    TelefonoEntrega = "'.$TelefonoEntrega.'"

WHERE
idRequisiciones2023 = '.$id.'
           
           
           ';

           echo $sql;

           $result = $conexion->query($sql);


           

           header('Location: mostrarRequi2023.php?Mensaje=Correcto&id='.$id.'');
     }
     else {
      // echo "Error al momento de insertar";
        // header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
     }
 






  mysqli_close($conexion);







?>
