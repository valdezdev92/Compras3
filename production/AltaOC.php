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


$NoOrden = $_POST['NoOrden'] ;




$Fecha = $_POST['Fecha'];


//echo '<br>FECHA :'.$Fecha;


$Dia = substr($Fecha, 8, 2);
$Mes = substr($Fecha, 5, 2);
$Año = substr($Fecha, 0, 4);

$Fecha = $Año.'-'.$Mes.'-'.$Dia;

//echo ' <BR> Fecha:'.$Fecha;



$Proveedor = $_POST['Proveedor'];




$DepSolicitanteAUX = $_POST['DepSolicitante'];

$DepSolicitante = $_POST['DepSolicitante'];

//echo '<BR> Proyecto :'.$Proyecto;




$Proyecto = $_POST['Proyecto'] ;

$Fuente= $_POST['Fuente'] ;

$Convenios= $_POST['Convenios'] ;

$idLicitacion= $_POST['Licitacion'];

$Categoria= $_POST['Categoria'] ;

$CompraPago= $_POST['CompraPago'];

$Monto= $_POST['Monto'];









$sql='INSERT INTO movdOrdenCompra(
    NoOrden,
    Fecha,
    Proveedor,
    idDepSolicitante,
    Proyecto,
    Fuente,
    Convenios,
    idLicitacion,
    Categoria,
    CompraPago,
    Monto
)
VALUES(
  "'.$NoOrden.'",
  "'.$Fecha.'",
  "'.$Proveedor.'",
  '.$DepSolicitante.',
  "'.$Proyecto.'",
  "'.$Fuente.'",
  "'.$Convenios.'",
  '.$idLicitacion.',
  "'.$Categoria.'",
  "'.$CompraPago.'",
  '.$Monto.'


)';





// echo "<br>";
// echo $sql;




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




           // echo "Correcto";

          // $sql = 'SELECT @@IDENTITY AS "idRequisiciones2023"';

           // echo $sql;

          // $result = $conexion->query($sql);


        //    if ($result->num_rows > 0)
        //    {

        //     }
        //     $row = $result->fetch_array(MYSQLI_ASSOC);

        //     $id = $row['idRequisiciones2023'];

            header("Location: vincularOrdenRequi.php?id=$NoOrden");
     }
     else {
     echo "Error al momento de insertar";
      //  header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
     }







  mysqli_close($conexion);







?>
