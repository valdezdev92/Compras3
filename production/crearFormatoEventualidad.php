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

$observaciones = $_POST['ObservacionesEventualidad'] ;

//echo ' Motivos:'.$Motivos;

$AUX = addslashes($observaciones);

$observaciones = $AUX;



$id= $_POST['id'];


$impuesto= $_POST['impuesto'];

$Fecha = $_POST['Fecha'];

$Proveedor = $_POST['Proveedor'];

$subtotalPre = $_POST['subtotalPre'];


//echo "<br>Fecha". $Fecha;



//echo '<BR> Impuesto  :'.$impuesto ;


//$Folio= $_POST['Folio'];


// $hoy = getdate();
// $d = $hoy['mday'];
//   $m = $hoy['mon'];
//   $y = $hoy['year'];

//     $d2= date("d");
//     $m2= date("m");
//     $y2= date("y");

// $FechaEnvio = "$y/$m2/$d2";


switch ($impuesto) {
  case 1:
  $Monto = $subtotalPre * 1.16;

    break;

    case 2:
    $retencion = $subtotalPre *0.025;
    $Monto = $subtotalPre * 1.16;
    $Monto = $Monto - $retencion;
      break;

      case 3:
          $Monto = $subtotalPre;
        break;

  default:
    // code...
    break;
}


echo "Monto_".$Monto;


$sql='
INSERT INTO movdEventualidades(

  ObservacionesEventualidades,
  idRequisiciones2023,
  FechaOrdenEventualidad,
  idTipoImpuesto,
  Proveedor,
  Monto
)
VALUES(

    "'.$observaciones.'",
  '.$id.',
  "'.$Fecha.'",
  '.$impuesto.',
  "'.$Proveedor.'",
    '.$Monto.'


)';



//echo "<br>";
//echo $sql;




 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "sr1920la";
 $db_name = "Compras3";
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
  die("La conexion falló: " . $conexion->connect_error);
 }

 // se inserta en la tabla de movimientos de eventualidades

 //$resultado = $conexion->query($sql);


echo $sql;
     if ($conexion->query($sql) )
     {






           $sql = '

UPDATE
    Requisiciones2023
SET
    Estatus = "NoModificable",
    idProceso = 8
WHERE
idRequisiciones2023 = '.$id.'


           ';



         //echo $sql;

           $result = $conexion->query($sql);





           header('Location: eventualidadOC.php?id='.$id.'&bridge=1');
     }
     else {
   echo "Error al momento de insertar";
  //   header('Location: printOCEventualidad.php?id='.$id.'');
        // header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
     }







  mysqli_close($conexion);







?>
