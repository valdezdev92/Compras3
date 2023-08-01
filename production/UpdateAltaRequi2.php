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


$unidadAdministrativa = $_POST['unidadAdministrativa'] ;

//echo '<BR> unidadAdministrativa:  '.$unidadAdministrativa;



$DepSolicitante = $_POST['DepSolicitante'];

//echo '<BR>  $DepSolicitante: '.$DepSolicitante;



switch ($DepSolicitante) {

case '4401 - DESPACHO DIRECCIÓN':
$DepSolicitante = 1;      
break;

case '4402 - SECRETARÍA PLANEACIÓN':
$DepSolicitante = 2;      
break;  

case '4403 - SECRETARÍA ACADEMICA':

$DepSolicitante = 4;  
break;
case '4404 - SECRETARÍA EXTENSION':

$DepSolicitante = 5;  
break;
case '4405 - SECRETARÍA DE INVESTIGACIÓN Y POSGRADO':

$DepSolicitante = 6;  
break;
case '4406 - SECRETARÍA ADMINISTRATIVA':

$DepSolicitante = 7;  
break;
case '4407 - LABORATORIO DE SANITARIA':

$DepSolicitante = 8;  
break;
case '4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS':

$DepSolicitante = 22;  
break;
case '4411 - LABORATORIO DE METALURGIA':

$DepSolicitante = 10;  
break;
case '4411 - LABORATORIO DE MINEROLOGÍA':

$DepSolicitante = 23;  
break;
case '4412 - LABORATORIO DE QUIMICA':

$DepSolicitante = 11;  
break;
case '4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA':

$DepSolicitante = 13;  
break;
case '4413 - LABORATORIO DE AUTOMÁTICA':

$DepSolicitante = 12;  
break;
case '4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS':

$DepSolicitante = 14;  
break;
case '4415 - LABORATORIO DE HIDRAULICA':

$DepSolicitante = 15;  
break;
case '4416 - LABORATORIO DE SENSORES REMOTOS':

$DepSolicitante = 24;  
break;
case '4417 - LABORATORIO DE TOPOGRAFIA':

$DepSolicitante = 17;  
break;
case '4417 - LABORATORIO DE FOTOGRAMETRIA':

$DepSolicitante = 16;  
break;
case '4418 - LABORATORIO DE RESONANCIA MAGNETICA':

$DepSolicitante = 25;  
break;
case '4419 - LABORATORIO DE FISICA':

$DepSolicitante = 18;  
break;
case '4462 - LABORATORIO DE GEOLOGIA':

$DepSolicitante = 21;  
break;
case '4462 - LABORATORIO DE GEOFISICA':

$DepSolicitante = 20;  
break;
case '4449 - LAB DE AEROESPACIAL':

$DepSolicitante = 19;  
break;
case '4408 - COORDINACIÓN DE SERVICIO EXTERNO DE LABORATORIOS':

$DepSolicitante = 9;  
break;
case '4403 - COORDINACIÓN DE LABORATORIOS ACADÉMICOS':

$DepSolicitante = 3;  
break;

  default:
    # code...
    break;
}


$Proyecto = $_POST['Proyecto'] ;

//echo '<BR> Proyecto :'.$Proyecto;


$Motivos = $_POST['Motivos'] ;

//echo ' Motivos:'.$Motivos;

$AUX = addslashes($Motivos);

$Motivos = $AUX;


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



$id = $_POST['id'];





$sql='
UPDATE Requisiciones2023
SET 
  idUsuario = '.$idUsuario.',
  idcatCategoria = '.$Categoria.',
  idDepartamentoSolicitante = '.$DepSolicitante.',
  UnidadAdministrativa =  '.$unidadAdministrativa.',
  Fecha =  "'.$Fecha.'",
  motivoSolicitud = "'.$Motivos.'",
  idFuenteFinanciamiento = '.$Fuente.',
  idProyecto = '.$Proyecto.',
  UnidadPresupuestal = '.$UnidadPresupuestal.',
  idConvenio = '.$Convenios.',
  idcatCategorias = '.$Categoria.',
  idLicitacion = '.$idLicitacion.',
  idServicioExterno =  '.$idServicioExterno.'
WHERE
idRequisiciones2023 = '.$id.'';





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

        //    $sql = 'SELECT @@IDENTITY AS "idRequisiciones2023"';

           // echo $sql;

        //    $result = $conexion->query($sql);


        //    if ($result->num_rows > 0) 
        //    {

        //     }
        //     $row = $result->fetch_array(MYSQLI_ASSOC);

            // $id = $row['idRequisiciones2023'];

            header('Location: observacionesGuardar.php?id='.$id.'');
     }
     else {
    //   echo "Error al momento de insertar";
        header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
     }
 






  mysqli_close($conexion);







?>
