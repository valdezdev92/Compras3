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
  $db_name = "Compras";
  $tbl_name = "Usuarios";
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

  if ($conexion->connect_error) {
   die("La conexion falló: " . $conexion->connect_error);
  }

	$IdRequi = $_POST['IdRequi'] ;

 // echo '<BR> IdRequi:  '.$IdRequi;

 $Facultad = $_POST['Facultad'] ;

// echo '<BR> Facultad:  '.$Facultad;

$IdUnidad= $_POST['DepSolicitante'] ;

// echo '<BR>  $IdUnidad: '.$IdUnidad;


$Folio = $_POST['Folio'] ;

// echo '<BR> Folio :'.$Folio;


$Motivos = $_POST['Motivos'] ;

// echo ' Motivos:'.$Motivos;


$FechaInicio = $_POST['Fecha'] ;




$Dia = substr($FechaInicio, 0, 2);
$Mes = substr($FechaInicio, 3, 2);
$Año = substr($FechaInicio, 6, 4);

$Fecha = $Año.'-'.$Mes.'-'.$Dia;

// echo ' Fecha:'.$Fecha;



$Fondo = $_POST['Fondo'] ;

// echo '<BR> $Fondo  :'.$Fondo ;


$Funcion = $_POST['Funcion'] ;

// echo '<BR> $Funcion  :'.$Funcion ;

$Programa = $_POST['Programa'] ;

// echo '<BR> $Programa  :'.$Programa ;

$UPresupuestal =$_POST['UPresupuestal'] ;

// echo '<BR> $UPresupuestal  :'.$UPresupuestal ;

$Cuenta = $_POST['Cuenta'] ;

// echo '<BR> $Cuenta  :'.$Cuenta ;


// $Estatus = $_POST['Estatus'];


$Solicitante= $_POST['Solicitante'];


$FolioAdqui= $_POST['FolioAdqui'];


// if ($NumProveedor01 == "" )
//  {
// 	$NumProveedor01 = 0;
// }
// else {

$NumProveedor01 = $_POST['NomProveedor01'];
//
// }


// if ($NumProveedor02 == "" )
//  {
// 	$NumProveedor02 = 0;
// }
// else {

$NumProveedor02 = $_POST['NomProveedor02'];
//
// }

//
// if ($NumProveedor03 == "" )
//  {
// 	$NumProveedor03 = 0;
// }
// else {

$NumProveedor03 = $_POST['NomProveedor03'];

// }

//
// $NumProveedor02 = $_POST['NomProveedor02'];
//
// $NumProveedor03 = $_POST['NomProveedor03'];


// echo 'HEY WALDORF'.$NomProveedor01;


	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "sr1920la";
	$db_name = "Compras";
	$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

	if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}



	$sql5 = 'SELECT * FROM CatcProveedores WHERE Cve_Proveedor ='.$NumProveedor01.'';

	  // echo $sql5;

		$result = $conexion->query($sql5);


		if ($result->num_rows > 0)
    {
		 }
		 $row1 = $result->fetch_array(MYSQLI_ASSOC);


$NomProveedor01 = $row1['RazonSocial'];




$sql6 = 'SELECT * FROM CatcProveedores WHERE Cve_Proveedor ='.$NumProveedor02.'';

	// echo $sql6;

	$result = $conexion->query($sql6);


	if ($result->num_rows > 0) {
	 }
	 $row2 = $result->fetch_array(MYSQLI_ASSOC);



$NomProveedor02 = $row2['RazonSocial'];





$sql7 = 'SELECT * FROM CatcProveedores WHERE Cve_Proveedor ='.$NumProveedor03.'';

	// echo $sql7;

	$result = $conexion->query($sql7);


	if ($result->num_rows > 0) {
	 }
	 $row3 = $result->fetch_array(MYSQLI_ASSOC);

$NomProveedor03 = $row3['RazonSocial'];






// echo '<BR> $Estatus  :'.$Estatus ;



$PrecioArt01Prov01 = $_POST['PrecioArt01Prov01'];
$PrecioArt02Prov01 = $_POST['PrecioArt02Prov01'];
$PrecioArt03Prov01 = $_POST['PrecioArt03Prov01'];
$PrecioArt04Prov01 = $_POST['PrecioArt04Prov01'];
$PrecioArt05Prov01 = $_POST['PrecioArt05Prov01'];
$PrecioArt06Prov01 = $_POST['PrecioArt06Prov01'];
$PrecioArt07Prov01 = $_POST['PrecioArt07Prov01'];
$PrecioArt08Prov01 = $_POST['PrecioArt08Prov01'];
$PrecioArt09Prov01 = $_POST['PrecioArt09Prov01'];
$PrecioArt10Prov01 = $_POST['PrecioArt10Prov01'];
$PrecioArt11Prov01 = $_POST['PrecioArt11Prov01'];
$PrecioArt12Prov01 = $_POST['PrecioArt12Prov01'];
$PrecioArt13Prov01 = $_POST['PrecioArt13Prov01'];
$PrecioArt14Prov01 = $_POST['PrecioArt14Prov01'];
$PrecioArt15Prov01 = $_POST['PrecioArt15Prov01'];
$PrecioArt16Prov01 = $_POST['PrecioArt16Prov01'];
$PrecioArt17Prov01 = $_POST['PrecioArt17Prov01'];
$PrecioArt18Prov01 = $_POST['PrecioArt18Prov01'];
$PrecioArt19Prov01 = $_POST['PrecioArt19Prov01'];
$PrecioArt20Prov01 = $_POST['PrecioArt20Prov01'];
$PrecioArt21Prov01 = $_POST['PrecioArt21Prov01'];
$PrecioArt22Prov01 = $_POST['PrecioArt22Prov01'];
$PrecioArt23Prov01 = $_POST['PrecioArt23Prov01'];
$PrecioArt24Prov01 = $_POST['PrecioArt24Prov01'];
$PrecioArt25Prov01 = $_POST['PrecioArt25Prov01'];
$PrecioArt26Prov01 = $_POST['PrecioArt26Prov01'];
$PrecioArt27Prov01 = $_POST['PrecioArt27Prov01'];
$PrecioArt28Prov01 = $_POST['PrecioArt28Prov01'];
$PrecioArt29Prov01 = $_POST['PrecioArt29Prov01'];
$PrecioArt30Prov01 = $_POST['PrecioArt30Prov01'];
$PrecioArt31Prov01 = $_POST['PrecioArt31Prov01'];
$PrecioArt32Prov01 = $_POST['PrecioArt32Prov01'];
$PrecioArt33Prov01 = $_POST['PrecioArt33Prov01'];
$PrecioArt34Prov01 = $_POST['PrecioArt34Prov01'];
$PrecioArt35Prov01 = $_POST['PrecioArt35Prov01'];
$PrecioArt36Prov01 = $_POST['PrecioArt36Prov01'];




$PrecioArt01Prov02 = $_POST['PrecioArt01Prov02'];
$PrecioArt02Prov02 = $_POST['PrecioArt02Prov02'];
$PrecioArt03Prov02 = $_POST['PrecioArt03Prov02'];
$PrecioArt04Prov02 = $_POST['PrecioArt04Prov02'];
$PrecioArt05Prov02 = $_POST['PrecioArt05Prov02'];
$PrecioArt06Prov02 = $_POST['PrecioArt06Prov02'];
$PrecioArt07Prov02 = $_POST['PrecioArt07Prov02'];
$PrecioArt08Prov02 = $_POST['PrecioArt08Prov02'];
$PrecioArt09Prov02 = $_POST['PrecioArt09Prov02'];
$PrecioArt10Prov02 = $_POST['PrecioArt10Prov02'];
$PrecioArt11Prov02 = $_POST['PrecioArt11Prov02'];
$PrecioArt12Prov02 = $_POST['PrecioArt12Prov02'];
$PrecioArt13Prov02 = $_POST['PrecioArt13Prov02'];
$PrecioArt14Prov02 = $_POST['PrecioArt14Prov02'];
$PrecioArt15Prov02 = $_POST['PrecioArt15Prov02'];
$PrecioArt16Prov02 = $_POST['PrecioArt16Prov02'];
$PrecioArt17Prov02 = $_POST['PrecioArt17Prov02'];
$PrecioArt18Prov02 = $_POST['PrecioArt18Prov02'];
$PrecioArt19Prov02 = $_POST['PrecioArt19Prov02'];
$PrecioArt20Prov02 = $_POST['PrecioArt20Prov02'];
$PrecioArt21Prov02 = $_POST['PrecioArt21Prov02'];
$PrecioArt22Prov02 = $_POST['PrecioArt22Prov02'];
$PrecioArt23Prov02 = $_POST['PrecioArt23Prov02'];
$PrecioArt24Prov02 = $_POST['PrecioArt24Prov02'];
$PrecioArt25Prov02 = $_POST['PrecioArt25Prov02'];
$PrecioArt26Prov02 = $_POST['PrecioArt26Prov02'];
$PrecioArt27Prov02 = $_POST['PrecioArt27Prov02'];
$PrecioArt28Prov02 = $_POST['PrecioArt28Prov02'];
$PrecioArt29Prov02 = $_POST['PrecioArt29Prov02'];
$PrecioArt30Prov02 = $_POST['PrecioArt30Prov02'];
$PrecioArt31Prov02 = $_POST['PrecioArt31Prov02'];
$PrecioArt32Prov02 = $_POST['PrecioArt32Prov02'];
$PrecioArt33Prov02 = $_POST['PrecioArt33Prov02'];
$PrecioArt34Prov02 = $_POST['PrecioArt34Prov02'];
$PrecioArt35Prov02 = $_POST['PrecioArt35Prov02'];
$PrecioArt36Prov02 = $_POST['PrecioArt36Prov02'];




$PrecioArt01Prov03 = $_POST['PrecioArt01Prov03'];
$PrecioArt02Prov03 = $_POST['PrecioArt02Prov03'];
$PrecioArt03Prov03 = $_POST['PrecioArt03Prov03'];
$PrecioArt04Prov03 = $_POST['PrecioArt04Prov03'];
$PrecioArt05Prov03 = $_POST['PrecioArt05Prov03'];
$PrecioArt06Prov03 = $_POST['PrecioArt06Prov03'];
$PrecioArt07Prov03 = $_POST['PrecioArt07Prov03'];
$PrecioArt08Prov03 = $_POST['PrecioArt08Prov03'];
$PrecioArt09Prov03 = $_POST['PrecioArt09Prov03'];
$PrecioArt10Prov03 = $_POST['PrecioArt10Prov03'];
$PrecioArt11Prov03 = $_POST['PrecioArt11Prov03'];
$PrecioArt12Prov03 = $_POST['PrecioArt12Prov03'];
$PrecioArt13Prov03 = $_POST['PrecioArt13Prov03'];
$PrecioArt14Prov03 = $_POST['PrecioArt14Prov03'];
$PrecioArt15Prov03 = $_POST['PrecioArt15Prov03'];
$PrecioArt16Prov03 = $_POST['PrecioArt16Prov03'];
$PrecioArt17Prov03 = $_POST['PrecioArt17Prov03'];
$PrecioArt18Prov03 = $_POST['PrecioArt18Prov03'];
$PrecioArt19Prov03 = $_POST['PrecioArt19Prov03'];
$PrecioArt20Prov03 = $_POST['PrecioArt20Prov03'];
$PrecioArt21Prov03 = $_POST['PrecioArt21Prov03'];
$PrecioArt22Prov03 = $_POST['PrecioArt22Prov03'];
$PrecioArt23Prov03 = $_POST['PrecioArt23Prov03'];
$PrecioArt24Prov03 = $_POST['PrecioArt24Prov03'];
$PrecioArt25Prov03 = $_POST['PrecioArt25Prov03'];
$PrecioArt26Prov03 = $_POST['PrecioArt26Prov03'];
$PrecioArt27Prov03 = $_POST['PrecioArt27Prov03'];
$PrecioArt28Prov03 = $_POST['PrecioArt28Prov03'];
$PrecioArt29Prov03 = $_POST['PrecioArt29Prov03'];
$PrecioArt30Prov03 = $_POST['PrecioArt30Prov03'];
$PrecioArt31Prov03 = $_POST['PrecioArt31Prov03'];
$PrecioArt32Prov03 = $_POST['PrecioArt32Prov03'];
$PrecioArt33Prov03 = $_POST['PrecioArt33Prov03'];
$PrecioArt34Prov03 = $_POST['PrecioArt34Prov03'];
$PrecioArt35Prov03 = $_POST['PrecioArt35Prov03'];
$PrecioArt36Prov03 = $_POST['PrecioArt36Prov03'];




$IVArt01 = $_POST['IVArt01'];
$IVArt02 = $_POST['IVArt02'];
$IVArt03 = $_POST['IVArt03'];
$IVArt04 = $_POST['IVArt04'];
$IVArt05 = $_POST['IVArt05'];
$IVArt06 = $_POST['IVArt06'];
$IVArt07 = $_POST['IVArt07'];
$IVArt08 = $_POST['IVArt08'];
$IVArt09 = $_POST['IVArt09'];
$IVArt10 = $_POST['IVArt10'];
$IVArt11 = $_POST['IVArt11'];
$IVArt12 = $_POST['IVArt12'];
$IVArt13 = $_POST['IVArt13'];
$IVArt14 = $_POST['IVArt14'];
$IVArt15 = $_POST['IVArt15'];
$IVArt16 = $_POST['IVArt16'];
$IVArt17 = $_POST['IVArt17'];
$IVArt18 = $_POST['IVArt18'];
$IVArt19 = $_POST['IVArt19'];
$IVArt20 = $_POST['IVArt20'];
$IVArt21 = $_POST['IVArt21'];
$IVArt22 = $_POST['IVArt22'];
$IVArt23 = $_POST['IVArt23'];
$IVArt24 = $_POST['IVArt24'];
$IVArt25 = $_POST['IVArt25'];
$IVArt26 = $_POST['IVArt26'];
$IVArt27 = $_POST['IVArt27'];
$IVArt28 = $_POST['IVArt28'];
$IVArt29 = $_POST['IVArt29'];
$IVArt30 = $_POST['IVArt30'];
$IVArt31 = $_POST['IVArt31'];
$IVArt32 = $_POST['IVArt32'];
$IVArt33 = $_POST['IVArt33'];
$IVArt34 = $_POST['IVArt34'];
$IVArt35 = $_POST['IVArt35'];
$IVArt36 = $_POST['IVArt36'];


$TiempoEntrega01   = $_POST['TiempoEntrega01'];
$TiempoEntrega02   = $_POST['TiempoEntrega02'];
$TiempoEntrega03   = $_POST['TiempoEntrega03'];
$ObservacionesCotizacion = $_POST['ObservacionesCotizacion'];


$Garantia01   = $_POST['Garantia01'];
$Garantia02   = $_POST['Garantia02'];
$Garantia03   = $_POST['Garantia03'];


// Validacion de insercion








	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "sr1920la";
	$db_name = "Compras";
	$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

	if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}





	$sql2 = 'SELECT * FROM MovcRequis WHERE Folio ='.$Folio.'';
	$resultado = $conexion->query($sql2);

	while ($row = $resultado->fetch_assoc() )
	 {




			}

			    $BanderaInsertar = $resultado->num_rows;


					// echo " <BR>Cuantos renglones hay   '.$BanderaInsertar.' ";

/// Consulta de folio para no repetir folios





	switch ($BanderaInsertar)
	 {
		case '0':
			# code... se inserta

			$SeInserta = 1;

			break;

		default:
			# code...

			$SeInserta = 0;
			break;
	}


	if ($SeInserta == 1)

	{





    $sql =' UPDATE  Requi  SET

    Fondo = '.$Fondo.' ,
    Funcion = '.$Funcion.' ,
    Programa = '.$Programa.' ,
    UPresupuestal = '.$UPresupuestal.' ,
    Cuenta = '.$Cuenta.',
    Estatus = 3

    WHERE IdRequi = '.$IdRequi.'';



    	// echo "<br>";
    	// echo $sql;




    	if ($conexion->query($sql) )
       {


    		// header('Location: ModificarRequi.php?Folio='.$Folio.'&IdRequi='.$IdRequi.'&Mensaje=Modificada-Correcto');


    	echo "Correcto Se Actualizo el fondo funcion etc..";



    	}
    	else {
    	  echo "Error no se actualizo nada";
    		// header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
    	}



      $sql ='

    INSERT INTO  MovcRequis (
			 Folio ,
		EstatusCotizacion ,  FolioAdqui ,
		NomProveedor01 ,  NomProveedor02 ,
		 NomProveedor03 ,  NumProveedor01 ,
		 NumProveedor02 ,  NumProveedor03 ,


		PrecioArt01Prov01 ,
		PrecioArt02Prov01 ,
		PrecioArt03Prov01 ,
		PrecioArt04Prov01 ,
		PrecioArt05Prov01 ,
		PrecioArt06Prov01 ,
		PrecioArt07Prov01 ,
		PrecioArt08Prov01 ,
		PrecioArt09Prov01 ,
		PrecioArt10Prov01 ,
		PrecioArt11Prov01 ,
	  PrecioArt12Prov01 ,
		PrecioArt13Prov01 ,
		PrecioArt14Prov01 ,
		PrecioArt15Prov01 ,
		PrecioArt16Prov01 ,
		PrecioArt17Prov01 ,
		PrecioArt18Prov01 ,
		PrecioArt19Prov01 ,
		PrecioArt20Prov01 ,
		PrecioArt21Prov01 ,
		PrecioArt22Prov01 ,
		PrecioArt23Prov01 ,
		PrecioArt24Prov01 ,
		PrecioArt25Prov01 ,
		PrecioArt26Prov01 ,
		PrecioArt27Prov01 ,
		PrecioArt28Prov01 ,
		PrecioArt29Prov01 ,
		PrecioArt30Prov01 ,
		PrecioArt31Prov01 ,
		PrecioArt32Prov01 ,
		PrecioArt33Prov01 ,
		PrecioArt34Prov01 ,
		PrecioArt35Prov01 ,
		PrecioArt36Prov01 ,


		PrecioArt01Prov02 ,
		PrecioArt02Prov02 ,
		PrecioArt03Prov02 ,
		PrecioArt04Prov02 ,
		PrecioArt05Prov02 ,
		PrecioArt06Prov02 ,
		PrecioArt07Prov02 ,
		PrecioArt08Prov02 ,
		PrecioArt09Prov02 ,
		PrecioArt10Prov02 ,
		PrecioArt11Prov02 ,
		PrecioArt12Prov02 ,
		PrecioArt13Prov02 ,
		PrecioArt14Prov02 ,
		PrecioArt15Prov02 ,
		PrecioArt16Prov02 ,
		PrecioArt17Prov02 ,
		PrecioArt18Prov02 ,
		PrecioArt19Prov02 ,
		PrecioArt20Prov02 ,
		PrecioArt21Prov02 ,
		PrecioArt22Prov02 ,
		PrecioArt23Prov02 ,
		PrecioArt24Prov02 ,
		PrecioArt25Prov02 ,
		PrecioArt26Prov02 ,
		PrecioArt27Prov02 ,
		PrecioArt28Prov02 ,
		PrecioArt29Prov02 ,
		PrecioArt30Prov02 ,
		PrecioArt31Prov02 ,
		PrecioArt32Prov02 ,
		PrecioArt33Prov02 ,
		PrecioArt34Prov02 ,
		PrecioArt35Prov02 ,
		PrecioArt36Prov02 ,


		PrecioArt01Prov03 ,
		PrecioArt02Prov03 ,
		PrecioArt03Prov03 ,
		PrecioArt04Prov03 ,
		PrecioArt05Prov03 ,
		PrecioArt06Prov03 ,
		PrecioArt07Prov03 ,
		PrecioArt08Prov03 ,
		PrecioArt09Prov03 ,
		PrecioArt10Prov03 ,
		PrecioArt11Prov03 ,
		PrecioArt12Prov03 ,
		PrecioArt13Prov03 ,
		PrecioArt14Prov03 ,
		PrecioArt15Prov03 ,
		PrecioArt16Prov03 ,
		PrecioArt17Prov03 ,
		PrecioArt18Prov03 ,
		PrecioArt19Prov03 ,
		PrecioArt20Prov03 ,
		PrecioArt21Prov03 ,
		PrecioArt22Prov03 ,
		PrecioArt23Prov03 ,
		PrecioArt24Prov03 ,
		PrecioArt25Prov03 ,
		PrecioArt26Prov03 ,
		PrecioArt27Prov03 ,
		PrecioArt28Prov03 ,
		PrecioArt29Prov03 ,
		PrecioArt30Prov03 ,
		PrecioArt31Prov03 ,
		PrecioArt32Prov03 ,
		PrecioArt33Prov03 ,
		PrecioArt34Prov03 ,
		PrecioArt35Prov03 ,
		PrecioArt36Prov03 ,


		IVArt01 ,
		IVArt02 ,
		IVArt03 ,
		IVArt04 ,
		IVArt05 ,
		IVArt06 ,
		IVArt07 ,
		IVArt08 ,
		IVArt09 ,
		IVArt10 ,
		IVArt11 ,
		IVArt12 ,
		IVArt13 ,
		IVArt14 ,
		IVArt15 ,
		IVArt16 ,
		IVArt17 ,
		IVArt18 ,
		IVArt19 ,
		IVArt20 ,
		IVArt21 ,
		IVArt22 ,
		IVArt23 ,
		IVArt24 ,
		IVArt25 ,
		IVArt26 ,
		IVArt27 ,
		IVArt28 ,
		IVArt29 ,
		IVArt30 ,
		IVArt31 ,
		IVArt32 ,
		IVArt33 ,
		IVArt34 ,
		IVArt35 ,
		IVArt36 ,


		TiempoEntrega01   ,
		TiempoEntrega02  ,
		TiempoEntrega03  ,
		ObservacionesCotizacion,
		Garantia01,
		Garantia02,
		Garantia03


		)


    VALUES

     ( '.$Folio.',
				0 ,
				'.$FolioAdqui.',
				"'.$NomProveedor01.'",
				"'.$NomProveedor02.' ",
				"'.$NomProveedor03.'" ,
				'.$NumProveedor01.' ,
				'.$NumProveedor02.' ,
				'.$NumProveedor03.'  ,

				'.$PrecioArt01Prov01.',
				'.$PrecioArt02Prov01.',
				'.$PrecioArt03Prov01.',
				'.$PrecioArt04Prov01.',
				'.$PrecioArt05Prov01.',
				'.$PrecioArt06Prov01.',
				'.$PrecioArt07Prov01.',
				'.$PrecioArt08Prov01.',
				'.$PrecioArt09Prov01.',
				'.$PrecioArt10Prov01.',
				'.$PrecioArt11Prov01.',
				'.$PrecioArt12Prov01.',
				'.$PrecioArt13Prov01.',
				'.$PrecioArt14Prov01.',
				'.$PrecioArt15Prov01.',
				'.$PrecioArt16Prov01.',
				'.$PrecioArt17Prov01.',
				'.$PrecioArt18Prov01.',
				'.$PrecioArt19Prov01.',
				'.$PrecioArt20Prov01.',
				'.$PrecioArt21Prov01.',
				'.$PrecioArt22Prov01.',
				'.$PrecioArt23Prov01.',
				'.$PrecioArt24Prov01.',
				'.$PrecioArt25Prov01.',
				'.$PrecioArt26Prov01.',
				'.$PrecioArt27Prov01.',
				'.$PrecioArt28Prov01.',
				'.$PrecioArt29Prov01.',
				'.$PrecioArt30Prov01.',
				'.$PrecioArt31Prov01.',
				'.$PrecioArt32Prov01.',
				'.$PrecioArt33Prov01.',
				'.$PrecioArt34Prov01.',
				'.$PrecioArt35Prov01.',
				'.$PrecioArt36Prov01.',



				'.$PrecioArt01Prov02.',
				'.$PrecioArt02Prov02.',
				'.$PrecioArt03Prov02.',
				'.$PrecioArt04Prov02.',
				'.$PrecioArt05Prov02.',
				'.$PrecioArt06Prov02.',
				'.$PrecioArt07Prov02.',
				'.$PrecioArt08Prov02.',
				'.$PrecioArt09Prov02.',
				'.$PrecioArt10Prov02.',
				'.$PrecioArt11Prov02.',
				'.$PrecioArt12Prov02.',
				'.$PrecioArt13Prov02.',
				'.$PrecioArt14Prov02.',
				'.$PrecioArt15Prov02.',
				'.$PrecioArt16Prov02.',
				'.$PrecioArt17Prov02.',
				'.$PrecioArt18Prov02.',
				'.$PrecioArt19Prov02.',
				'.$PrecioArt20Prov02.',
				'.$PrecioArt21Prov02.',
				'.$PrecioArt22Prov02.',
				'.$PrecioArt23Prov02.',
				'.$PrecioArt24Prov02.',
				'.$PrecioArt25Prov02.',
				'.$PrecioArt26Prov02.',
				'.$PrecioArt27Prov02.',
				'.$PrecioArt28Prov02.',
				'.$PrecioArt29Prov02.',
				'.$PrecioArt30Prov02.',
				'.$PrecioArt31Prov02.',
				'.$PrecioArt32Prov02.',
				'.$PrecioArt33Prov02.',
				'.$PrecioArt34Prov02.',
				'.$PrecioArt35Prov02.',
				'.$PrecioArt36Prov02.',



				'.$PrecioArt01Prov03.',
				'.$PrecioArt02Prov03.',
				'.$PrecioArt03Prov03.',
				'.$PrecioArt04Prov03.',
				'.$PrecioArt05Prov03.',
				'.$PrecioArt06Prov03.',
				'.$PrecioArt07Prov03.',
				'.$PrecioArt08Prov03.',
				'.$PrecioArt09Prov03.',
				'.$PrecioArt10Prov03.',
				'.$PrecioArt11Prov03.',
				'.$PrecioArt12Prov03.',
				'.$PrecioArt13Prov03.',
				'.$PrecioArt14Prov03.',
				'.$PrecioArt15Prov03.',
				'.$PrecioArt16Prov03.',
				'.$PrecioArt17Prov03.',
				'.$PrecioArt18Prov03.',
				'.$PrecioArt19Prov03.',
				'.$PrecioArt20Prov03.',
				'.$PrecioArt21Prov03.',
				'.$PrecioArt22Prov03.',
				'.$PrecioArt23Prov03.',
				'.$PrecioArt24Prov03.',
				'.$PrecioArt25Prov03.',
				'.$PrecioArt26Prov03.',
				'.$PrecioArt27Prov03.',
				'.$PrecioArt28Prov03.',
				'.$PrecioArt29Prov03.',
				'.$PrecioArt30Prov03.',
				'.$PrecioArt31Prov03.',
				'.$PrecioArt32Prov03.',
				'.$PrecioArt33Prov03.',
				'.$PrecioArt34Prov03.',
				'.$PrecioArt35Prov03.',
				'.$PrecioArt36Prov03.',


			"'.$IVArt01.'",
			"'.$IVArt02.'",
			"'.$IVArt03.'",
			"'.$IVArt04.'",
			"'.$IVArt05.'",
			"'.$IVArt06.'",
			"'.$IVArt07.'",
			"'.$IVArt08.'",
			"'.$IVArt09.'",
			"'.$IVArt10.'",
			"'.$IVArt11.'",
			"'.$IVArt12.'",
			"'.$IVArt13.'",
			"'.$IVArt14.'",
			"'.$IVArt15.'",
			"'.$IVArt16.'",
			"'.$IVArt17.'",
			"'.$IVArt18.'",
			"'.$IVArt19.'",
			"'.$IVArt20.'",
			"'.$IVArt21.'",
			"'.$IVArt22.'",
			"'.$IVArt23.'",
			"'.$IVArt24.'",
			"'.$IVArt25.'",
			"'.$IVArt26.'",
			"'.$IVArt27.'",
			"'.$IVArt28.'",
			"'.$IVArt29.'",
			"'.$IVArt30.'",
			"'.$IVArt31.'",
			"'.$IVArt32.'",
			"'.$IVArt33.'",
			"'.$IVArt34.'",
			"'.$IVArt35.'",
			"'.$IVArt36.'",



			"'.$TiempoEntrega01.'",
			"'.$TiempoEntrega02.'",
			"'.$TiempoEntrega03.'",
			"'.$ObservacionesCotizacion.'",
			"'.$Garantia01.'",
			"'.$Garantia02.'",
			"'.$Garantia03.'"



			)


      ';


				//
      	// echo "<br>";
      	// echo $sql;




      	if ($conexion->query($sql) )
         {


      		header('Location: MostrarCotizacion.php?Folio='.$Folio.'&IdRequi='.$IdRequi.'&Mensaje=Agregada-Correcto');


      	// echo "Correcto Se inserto";



      	}
      	else {
      	  echo "Error no se inserto";
      		// header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
      	}



	}
	else {


	header('Location: CotizarIndex.php?Mensaje=YaExiste&Folio='.$Folio.'');


			  echo "Error no se debe insertar porque ya existe uno";


	}







// Validacion END






















	 mysqli_close($conexion);







 ?>
