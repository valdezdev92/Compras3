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





$NoOrden = $_POST['NoOrden'];
$Fecha = $_POST['Fecha'];
$Proveedor = $_POST['Proveedor'];
$AUX = addslashes($Proveedor);
$Proveedor = $AUX;
$DepSolicitante = $_POST['DepSolicitante'];
$Proyecto = $_POST['Proyecto'];
$Fuente = $_POST['Fuente'];
$Convenios = $_POST['Convenios'];
$Licitacion = $_POST['Licitacion'];
$Categoria = $_POST['Categoria'];
$CompraPago = $_POST['CompraPago'];






$Fuente= $_POST['Fuente'] ;

//echo '<BR>  Fuente: '.$Fuente;

$UnidadPresupuestal= $_POST['UnidadPresupuestal'] ;

//echo '<BR>  UnidadPresupuestal: '.$UnidadPresupuestal;


$Convenios= $_POST['Convenios'] ;

//echo '<BR>  Convenios: '.$Convenios;

$Categoria= $_POST['Categoria'] ;

////echo '<BR>  Categoria: '.$Categoria;


$FechaInicio = $_POST['Fecha'] ;

$Dia = substr($FechaInicio, 0, 2);
$Mes = substr($FechaInicio, 3, 2);
$Año = substr($FechaInicio, 6, 4);

$Fecha = $Año.'-'.$Mes.'-'.$Dia;

////echo ' <BR> Fecha:'.$Fecha;



$idUsuario= $_POST['Solicitante'];

// echo '<BR> $idUsuario  :'.$idUsuario ;

$idServicioExterno= $_POST['Area'];

// echo '<BR> $idServicioExterno  :'.$idServicioExterno ;

$idLicitacion= $_POST['Licitacion'];

// echo '<BR> $idServicioExterno  :'.$idServicioExterno ;


if (isset($_POST['FechaEntregaObs'])) {
  //echo "Esta variable está definida, así que se imprimirá";
  $FechaEntregaObs= $_POST['FechaEntregaObs'];
}else {
  //no esta definida

  $FechaEntregaObs= "No Aplica Fecha de entrega";

}

if (isset($_POST['PersonaEntregar'])) {
  //echo "Esta variable está definida, así que se imprimirá";
  $PersonaEntregar = $_POST['PersonaEntregar'];
}else {
  //no esta definida

  $PersonaEntregar= "No Aplica Fecha de entrega";

}


if (isset($_POST['PersonaEntregar'])) {
  //echo "Esta variable está definida, así que se imprimirá";
  $PersonaEntregar = $_POST['PersonaEntregar'];
}else {
  //no esta definida

  $PersonaEntregar= "No Aplica Persona de entrega";

}


if (isset($_POST['TelefonoEntrega'])) {
  //echo "Esta variable está definida, así que se imprimirá";
  
  $TelefonoEntrega = $_POST['TelefonoEntrega']; 
}else {
  //no esta definida

  $TelefonoEntrega= "No Aplica Telefono de entrega";

}












$idProceso = 1;

 


$sql='
INSERT INTO Requisiciones2023(
  idUsuario,
  idcatCategoria,
  idDepartamentoSolicitante,
  UnidadAdministrativa,
  Fecha,
  motivoSolicitud,
  idFuenteFinanciamiento,
  idProyecto,
  UnidadPresupuestal,
  idConvenio,
  idcatCategorias,
  idServicioExterno,
  Estatus,
  idLicitacion,
  idProceso,
  OrdenCompra,
  FechaEntregaObs,
  PersonaEntregar,
  TelefonoEntrega
)
VALUES(
  '.$idUsuario.',
  '.$Categoria.',
  '.$DepSolicitante.',
  '.$unidadAdministrativa.',
  "'.$Fecha.'",
  "'.$Motivos.'",
  '.$Fuente.',
  '.$Proyecto.',
  '.$UnidadPresupuestal.',
  '.$Convenios.',
  '.$Categoria.',
  '.$idServicioExterno.',
  "Modificable",
  '.$idLicitacion.',
  '.$idProceso.',
  "OC-Pendinete",
  "'.$FechaEntregaObs.'",
  "'.$PersonaEntregar.'",
  "'.$TelefonoEntrega.'"

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

           $sql = 'SELECT @@IDENTITY AS "idRequisiciones2023"';

           // echo $sql;

           $result = $conexion->query($sql);


           if ($result->num_rows > 0) 
           {

            }
            $row = $result->fetch_array(MYSQLI_ASSOC);

            $id = $row['idRequisiciones2023'];

            header('Location: registroObjetosRequi.php?Mensaje=Correcto&id='.$id.'');
     }
     else {
      // echo "Error al momento de insertar";
        header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
     }
 






  mysqli_close($conexion);







?>
