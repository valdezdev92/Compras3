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




// echo '<BR> $Estatus  :'.$Estatus ;





//  Articulo 1

$SubCuenta01 =$_POST['SubCuenta01'] ;

// echo '<BR> $SubCuenta01  :'.$SubCuenta01 ;



$Cantidad01 =$_POST['Cantidad01'];




// echo '<BR> $Cantidad01  :'.$Cantidad01 ;

$Unidad01 =$_POST['Unidad01'];

// echo '<BR> $Unidad01  :'.$Unidad01 ;


$Descripcion01 =$_POST['Descripcion01'];

// echo '<BR> $Descripcion01  :'.$Descripcion01 ;



$AUX = addslashes($Descripcion01);


$Descripcion01 = $AUX;


$Observaciones01 =$_POST['Observaciones01'];

// echo '<BR> $Observaciones01  :'.$Observaciones01 ;

$AUX = addslashes($Observaciones01);


$Observaciones01 = $AUX;


//  Articulo 1

$SubCuenta02 =$_POST['SubCuenta02'] ;

// echo '<BR> $SubCuenta02  :'.$SubCuenta02 ;




	$Cantidad02 =$_POST['Cantidad02'];


// echo '<BR> $Cantidad02  :'.$Cantidad02 ;

$Unidad02 =$_POST['Unidad02'];

// echo '<BR> $Unidad02  :'.$Unidad02 ;


$Descripcion02 =$_POST['Descripcion02'];

// echo '<BR> $Descripcion02  :'.$Descripcion02 ;

$AUX = addslashes($Descripcion02);


$Descripcion02 = $AUX;
// $Observaciones02 =$_POST['Observaciones02'];

// echo '<BR> $Observaciones02  :'.$Observaciones02 ;





//  Articulo 3

$SubCuenta03 =$_POST['SubCuenta03'];

// echo '<BR> $SubCuenta03  :'.$SubCuenta03 ;



	$Cantidad03 =$_POST['Cantidad03'];


// echo '<BR> $Cantidad03  :'.$Cantidad03 ;

$Unidad03 =$_POST['Unidad03'];

// echo '<BR> $Unidad03  :'.$Unidad03 ;


$Descripcion03 =$_POST['Descripcion03'];

// echo '<BR> $Descripcion03  :'.$Descripcion03 ;
$AUX = addslashes($Descripcion03);


$Descripcion03 = $AUX;


// $Observaciones03 =$_POST['Observaciones03'];

// echo '<BR> $Observaciones03  :'.$Observaciones03 ;







//  Articulo 4

$SubCuenta04 =$_POST['SubCuenta04'];

// echo '<BR> $SubCuenta04  :'.$SubCuenta04 ;

$Cantidad04 =$_POST['Cantidad04'];



	$Cantidad04 =$_POST['Cantidad04'];


// echo '<BR> $Cantidad04  :'.$Cantidad04 ;

$Unidad04 =$_POST['Unidad04'];

// echo '<BR> $Unidad04  :'.$Unidad04 ;


$Descripcion04 =$_POST['Descripcion04'];

// echo '<BR> $Descripcion04  :'.$Descripcion04 ;

$AUX = addslashes($Descripcion04);


$Descripcion04 = $AUX;
// $Observaciones04 =$_POST['Observaciones04'];

// echo '<BR> $Observaciones04  :'.$Observaciones04 ;





//  Articulo 5

$SubCuenta05 =$_POST['SubCuenta05'];

// echo '<BR> $SubCuenta05  :'.$SubCuenta05 ;

$Cantidad05 =$_POST['Cantidad05'];


	$Cantidad05 =$_POST['Cantidad05'];


// echo '<BR> $Cantidad05  :'.$Cantidad05 ;

$Unidad05 =$_POST['Unidad05'];

// echo '<BR> $Unidad05  :'.$Unidad05 ;


$Descripcion05 =$_POST['Descripcion05'];

// echo '<BR> $Descripcion05  :'.$Descripcion05 ;

$AUX = addslashes($Descripcion05);


$Descripcion05 = $AUX;

// $Observaciones05 =$_POST['Observaciones05'];

// echo '<BR> $Observaciones05  :'.$Observaciones05 ;





//  Articulo 6

$SubCuenta06 =$_POST['SubCuenta06'];

// echo '<BR> $SubCuenta06  :'.$SubCuenta06 ;

$Cantidad06 =$_POST['Cantidad06'];


	$Cantidad06 =$_POST['Cantidad06'];


// echo '<BR> $Cantidad06  :'.$Cantidad06 ;

$Unidad06 =$_POST['Unidad06'];

// echo '<BR> $Unidad06  :'.$Unidad06 ;


$Descripcion06 =$_POST['Descripcion06'];

// echo '<BR> $Descripcion06  :'.$Descripcion06 ;

$AUX = addslashes($Descripcion06);


$Descripcion06 = $AUX;

// $Observaciones06 =$_POST['Observaciones06'];

// echo '<BR> $Observaciones06  :'.$Observaciones06 ;





//  Articulo 7

$SubCuenta07 =$_POST['SubCuenta07'];

// echo '<BR> $SubCuenta07  :'.$SubCuenta07 ;

$Cantidad07 =$_POST['Cantidad07'];


	$Cantidad07 =$_POST['Cantidad07'];




// echo '<BR> $Cantidad07  :'.$Cantidad07 ;

$Unidad07 =$_POST['Unidad07'];

// echo '<BR> $Unidad07  :'.$Unidad07 ;


$Descripcion07 =$_POST['Descripcion07'];

// echo '<BR> $Descripcion07  :'.$Descripcion07 ;

$AUX = addslashes($Descripcion07);


$Descripcion07 = $AUX;
// $Observaciones07 =$_POST['Observaciones07'];

// echo '<BR> $Observaciones07  :'.$Observaciones07 ;






//  Articulo 1

$SubCuenta08 =$_POST['SubCuenta08'];

// echo '<BR> $SubCuenta08  :'.$SubCuenta08 ;

$Cantidad08 =$_POST['Cantidad08'];



	$Cantidad08 =$_POST['Cantidad08'];


// echo '<BR> $Cantidad08  :'.$Cantidad08 ;

$Unidad08 =$_POST['Unidad08'];

// echo '<BR> $Unidad08  :'.$Unidad08 ;


$Descripcion08 =$_POST['Descripcion08'];

// echo '<BR> $Descripcion08  :'.$Descripcion08 ;

$AUX = addslashes($Descripcion08);


$Descripcion08 = $AUX;

// $Observaciones08 =$_POST['Observaciones08'];

// echo '<BR> $Observaciones08  :'.$Observaciones08 ;







//  Articulo 9

$SubCuenta09 =$_POST['SubCuenta09'];

// echo '<BR> $SubCuenta09  :'.$SubCuenta09 ;

$Cantidad09 =$_POST['Cantidad09'];


$Cantidad09 =$_POST['Cantidad09'];


// echo '<BR> $Cantidad09  :'.$Cantidad09 ;

$Unidad09 =$_POST['Unidad09'];

// echo '<BR> $Unidad09  :'.$Unidad09 ;


$Descripcion09 =$_POST['Descripcion09'];

// echo '<BR> $Descripcion09  :'.$Descripcion09 ;



$AUX = addslashes($Descripcion09);


$Descripcion09 = $AUX;

// $Observaciones09 =$_POST['Observaciones09'];

// echo '<BR> $Observaciones09  :'.$Observaciones09 ;






//  Articulo 10

$SubCuenta10 =$_POST['SubCuenta10'];

// echo '<BR> $SubCuenta10  :'.$SubCuenta10 ;

$Cantidad10 =$_POST['Cantidad10'];


$Cantidad10 =$_POST['Cantidad10'];


// echo '<BR> $Cantidad10  :'.$Cantidad10 ;

$Unidad10 =$_POST['Unidad10'];

// echo '<BR> $Unidad10  :'.$Unidad10 ;


$Descripcion10 =$_POST['Descripcion10'];

// echo '<BR> $Descripcion10  :'.$Descripcion10 ;


// $Observaciones10 =$_POST['Observaciones10'];

// echo '<BR> $Observaciones10  :'.$Observaciones10 ;

$AUX = addslashes($Descripcion10);


$Descripcion10 = $AUX;





//  Articulo 11

$SubCuenta11 =$_POST['SubCuenta11'];

// echo '<BR> $SubCuenta11  :'.$SubCuenta11 ;


	$Cantidad11 =$_POST['Cantidad11'];


// echo '<BR> $Cantidad11  :'.$Cantidad11 ;

$Unidad11 =$_POST['Unidad11'];

// echo '<BR> $Unidad11  :'.$Unidad11 ;


$Descripcion11 =$_POST['Descripcion11'];

// echo '<BR> $Descripcion11  :'.$Descripcion11 ;


// $Observaciones11 =$_POST['Observaciones11'];

// echo '<BR> $Observaciones11  :'.$Observaciones11 ;


$AUX = addslashes($Descripcion11);


$Descripcion11 = $AUX;





//  Articulo 12

$SubCuenta12 =$_POST['SubCuenta12'];

// echo '<BR> $SubCuenta12  :'.$SubCuenta12 ;


	$Cantidad12 =$_POST['Cantidad12'];


// echo '<BR> $Cantidad12  :'.$Cantidad12 ;

$Unidad12 =$_POST['Unidad12'];

// echo '<BR> $Unidad12  :'.$Unidad12 ;


$Descripcion12 =$_POST['Descripcion12'];

// echo '<BR> $Descripcion12  :'.$Descripcion12 ;


// $Observaciones12 =$_POST['Observaciones12'];

// echo '<BR> $Observaciones12  :'.$Observaciones12 ;

$AUX = addslashes($Descripcion12);


$Descripcion12 = $AUX;







//  Articulo 13

$SubCuenta13 =$_POST['SubCuenta13'];

// echo '<BR> $SubCuenta13  :'.$SubCuenta13 ;


	$Cantidad13 =$_POST['Cantidad13'];


// echo '<BR> $Cantidad13  :'.$Cantidad13 ;

$Unidad13 =$_POST['Unidad13'];

// echo '<BR> $Unidad13  :'.$Unidad13 ;


$Descripcion13 =$_POST['Descripcion13'];

// echo '<BR> $Descripcion13  :'.$Descripcion13 ;


// $Observaciones13 =$_POST['Observaciones13'];

// echo '<BR> $Observaciones13  :'.$Observaciones13 ;


$AUX = addslashes($Descripcion13);


$Descripcion13 = $AUX;








//  Articulo 14

$SubCuenta14 =$_POST['SubCuenta14'];
$Cantidad14 =$_POST['Cantidad14'];
$Unidad14 =$_POST['Unidad14'];
$Descripcion14 =$_POST['Descripcion14'];
$AUX = addslashes($Descripcion14);
$Descripcion14 = $AUX;



// 15

$SubCuenta15 =$_POST['SubCuenta15'];
$Cantidad15 =$_POST['Cantidad15'];
$Unidad15 =$_POST['Unidad15'];
$Descripcion15 =$_POST['Descripcion15'];
$AUX = addslashes($Descripcion15);
$Descripcion15 = $AUX;

$SubCuenta16 =$_POST['SubCuenta16'];
$Cantidad16 =$_POST['Cantidad16'];
$Unidad16 =$_POST['Unidad16'];
$Descripcion16 =$_POST['Descripcion16'];
$AUX = addslashes($Descripcion16);
$Descripcion16 = $AUX;

$SubCuenta17 =$_POST['SubCuenta17'];
$Cantidad17 =$_POST['Cantidad17'];
$Unidad17 =$_POST['Unidad17'];
$Descripcion17 =$_POST['Descripcion17'];
$AUX = addslashes($Descripcion17);
$Descripcion17 = $AUX;

$SubCuenta18 =$_POST['SubCuenta18'];
$Cantidad18 =$_POST['Cantidad18'];
$Unidad18 =$_POST['Unidad18'];
$Descripcion18 =$_POST['Descripcion18'];
$AUX = addslashes($Descripcion18);
$Descripcion18 = $AUX;

$SubCuenta19 =$_POST['SubCuenta19'];
$Cantidad19 =$_POST['Cantidad19'];
$Unidad19 =$_POST['Unidad19'];
$Descripcion19 =$_POST['Descripcion19'];
$AUX = addslashes($Descripcion19);
$Descripcion19 = $AUX;

$SubCuenta20 =$_POST['SubCuenta20'];
$Cantidad20 =$_POST['Cantidad20'];
$Unidad20 =$_POST['Unidad20'];
$Descripcion20 =$_POST['Descripcion20'];
$AUX = addslashes($Descripcion20);
$Descripcion20 = $AUX;

$SubCuenta21 =$_POST['SubCuenta21'];
$Cantidad21 =$_POST['Cantidad21'];
$Unidad21 =$_POST['Unidad21'];
$Descripcion21 =$_POST['Descripcion21'];
$AUX = addslashes($Descripcion21);
$Descripcion21 = $AUX;

$SubCuenta22 =$_POST['SubCuenta22'];
$Cantidad22 =$_POST['Cantidad22'];
$Unidad22 =$_POST['Unidad22'];
$Descripcion22 =$_POST['Descripcion22'];
$AUX = addslashes($Descripcion22);
$Descripcion22 = $AUX;

$SubCuenta23 =$_POST['SubCuenta23'];
$Cantidad23 =$_POST['Cantidad23'];
$Unidad23 =$_POST['Unidad23'];
$Descripcion23 =$_POST['Descripcion23'];
$AUX = addslashes($Descripcion23);
$Descripcion23 = $AUX;

$SubCuenta24 =$_POST['SubCuenta24'];
$Cantidad24 =$_POST['Cantidad24'];
$Unidad24 =$_POST['Unidad24'];
$Descripcion24 =$_POST['Descripcion24'];
$AUX = addslashes($Descripcion24);
$Descripcion24 = $AUX;

$SubCuenta25 =$_POST['SubCuenta25'];
$Cantidad25 =$_POST['Cantidad25'];
$Unidad25 =$_POST['Unidad25'];
$Descripcion25 =$_POST['Descripcion25'];
$AUX = addslashes($Descripcion25);
$Descripcion25 = $AUX;

$SubCuenta26 =$_POST['SubCuenta26'];
$Cantidad26 =$_POST['Cantidad26'];
$Unidad26 =$_POST['Unidad26'];
$Descripcion26 =$_POST['Descripcion26'];
$AUX = addslashes($Descripcion26);
$Descripcion26 = $AUX;

$SubCuenta27 =$_POST['SubCuenta27'];
$Cantidad27 =$_POST['Cantidad27'];
$Unidad27 =$_POST['Unidad27'];
$Descripcion27 =$_POST['Descripcion27'];
$AUX = addslashes($Descripcion27);
$Descripcion27 = $AUX;

$SubCuenta28 =$_POST['SubCuenta28'];
$Cantidad28 =$_POST['Cantidad28'];
$Unidad28 =$_POST['Unidad28'];
$Descripcion28 =$_POST['Descripcion28'];
$AUX = addslashes($Descripcion28);
$Descripcion28 = $AUX;

$SubCuenta29 =$_POST['SubCuenta29'];
$Cantidad29 =$_POST['Cantidad29'];
$Unidad29 =$_POST['Unidad29'];
$Descripcion29 =$_POST['Descripcion29'];
$AUX = addslashes($Descripcion29);
$Descripcion29 = $AUX;

$SubCuenta30 =$_POST['SubCuenta30'];
$Cantidad30 =$_POST['Cantidad30'];
$Unidad30 =$_POST['Unidad30'];
$Descripcion30 =$_POST['Descripcion30'];
$AUX = addslashes($Descripcion30);
$Descripcion30 = $AUX;

$SubCuenta31 =$_POST['SubCuenta31'];
$Cantidad31 =$_POST['Cantidad31'];
$Unidad31 =$_POST['Unidad31'];
$Descripcion31 =$_POST['Descripcion31'];
$AUX = addslashes($Descripcion31);
$Descripcion31 = $AUX;

$SubCuenta32 =$_POST['SubCuenta32'];
$Cantidad32 =$_POST['Cantidad32'];
$Unidad32 =$_POST['Unidad32'];
$Descripcion32 =$_POST['Descripcion32'];
$AUX = addslashes($Descripcion32);
$Descripcion32 = $AUX;

$SubCuenta33 =$_POST['SubCuenta33'];
$Cantidad33 =$_POST['Cantidad33'];
$Unidad33 =$_POST['Unidad33'];
$Descripcion33 =$_POST['Descripcion33'];
$AUX = addslashes($Descripcion33);
$Descripcion33 = $AUX;

$SubCuenta34 =$_POST['SubCuenta34'];
$Cantidad34 =$_POST['Cantidad34'];
$Unidad34 =$_POST['Unidad34'];
$Descripcion34 =$_POST['Descripcion34'];
$AUX = addslashes($Descripcion34);
$Descripcion34 = $AUX;

$SubCuenta35 =$_POST['SubCuenta35'];
$Cantidad35 =$_POST['Cantidad35'];
$Unidad35 =$_POST['Unidad35'];
$Descripcion35 =$_POST['Descripcion35'];
$AUX = addslashes($Descripcion35);
$Descripcion35 = $AUX;

$SubCuenta36 =$_POST['SubCuenta36'];
$Cantidad36 =$_POST['Cantidad36'];
$Unidad36 =$_POST['Unidad36'];
$Descripcion36 =$_POST['Descripcion36'];
$AUX = addslashes($Descripcion36);
$Descripcion36 = $AUX;







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


$NumProveedor01 = $_POST['NomProveedor01'];
$NumProveedor02 = $_POST['NomProveedor02'];
$NumProveedor03 = $_POST['NomProveedor03'];


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


		if ($result->num_rows > 0) {
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






$FolioAdqui = $_POST['FolioAdqui'];





$TiempoEntrega01   = $_POST['TiempoEntrega01'];
$TiempoEntrega02   = $_POST['TiempoEntrega02'];
$TiempoEntrega03   = $_POST['TiempoEntrega03'];
$ObservacionesCotizacion = $_POST['ObservacionesCotizacion'];


$Garantia01   = $_POST['Garantia01'];
$Garantia02   = $_POST['Garantia02'];
$Garantia03   = $_POST['Garantia03'];







$sql =' UPDATE  Requi  SET
Folio = '.$Folio.' ,
IdUnidad = "'.$IdUnidad.'" ,
Fondo = '.$Fondo.' ,
Funcion = '.$Funcion.' ,
Programa = '.$Programa.' ,
UPresupuestal = '.$UPresupuestal.' ,
Cuenta = '.$Cuenta.' ,
Fecha = "'.$Fecha.'" ,
MotivosRequi = "'.$Motivos.'" ,
Solicitante = "'.$Solicitante.'" ,
SubCuenta01 = '.$SubCuenta01.' ,
Cantidad01 = '.$Cantidad01.' ,
Unidad01 = "'.$Unidad01.'" ,
Descripcion01 = "'.$Descripcion01.'" ,
Observaciones01 = "'.$Observaciones01.'" ,
SubCuenta02 = '.$SubCuenta02.' ,
Cantidad02 = 	'.$Cantidad02 .' ,
Unidad02 = "'.$Unidad02 .'" ,
Descripcion02 = "'.$Descripcion02.'" ,

SubCuenta03 = '.$SubCuenta03.' ,
Cantidad03 = '.$Cantidad03 .' ,
Unidad03 = "'.$Unidad03 .'" ,
Descripcion03 = "'.$Descripcion03.'" ,

SubCuenta04 = '.$SubCuenta04 .' ,
Cantidad04 = '.$Cantidad04 .' ,
Unidad04 = "'.$Unidad04 .'" ,
Descripcion04 = "'.$Descripcion04 .'" ,

SubCuenta05 = '.$SubCuenta05 .' ,
Cantidad05 = '.$Cantidad05 .' ,
Unidad05 = 	"'.$Unidad05 .'" ,
Descripcion05 = "'.$Descripcion05.'"  ,

SubCuenta06 = '.$SubCuenta06.' ,
Cantidad06 = 	'.$Cantidad06 .' ,
Unidad06 = "'.$Unidad06 .'" ,
Descripcion06 = "'.$Descripcion06 .'" ,

SubCuenta07 = '.$SubCuenta07.' ,
Cantidad07 = '.$Cantidad07.' ,
Unidad07 = 	"'.$Unidad07 .'" ,
Descripcion07 = "'.$Descripcion07.'"  ,

SubCuenta08 = '.$SubCuenta08 .' ,
Cantidad08 = '.$Cantidad08 .' ,
Unidad08 = "'.$Unidad08.'"  ,
Descripcion08 = "'.$Descripcion08 .'" ,

SubCuenta09 = '.$SubCuenta09 .' ,
Cantidad09 = '.$Cantidad09 .' ,
Unidad09 = "'.$Unidad09.'"  ,
Descripcion09 = "'.$Descripcion09 .'" ,

SubCuenta10 = '.$SubCuenta10.'  ,
Cantidad10 = '.$Cantidad10 .' ,
Unidad10 = "'.$Unidad10 .'" ,
Descripcion10 = "'.$Descripcion10.'"  ,

SubCuenta11 = '.$SubCuenta11.'  ,
Cantidad11 = 	'.$Cantidad11 .' ,
Unidad11 = "'.$Unidad11.'"  ,
Descripcion11 = "'.$Descripcion11.'"  ,

SubCuenta12 = '.$SubCuenta12 .' ,
Cantidad12 = '.$Cantidad12 .' ,
Unidad12 = "'.$Unidad12.'"  ,
Descripcion12 = "'.$Descripcion12.'"  ,

SubCuenta13 = '.$SubCuenta13 .' ,
Cantidad13 = "'.$Cantidad13.'"  ,
Unidad13 = "'.$Unidad13.'"  ,
Descripcion13 = "'.$Descripcion13.'" ,

SubCuenta14 = '.$SubCuenta14.' ,
Cantidad14 = '.$Cantidad14.' ,
Unidad14 = "'.$Unidad14 .'" ,
Descripcion14 = "'.$Descripcion14 .'" ,

SubCuenta15 = '.$SubCuenta15.' ,
Cantidad15 = '.$Cantidad15.' ,
Unidad15 = "'.$Unidad15 .'" ,
Descripcion15 = "'.$Descripcion15 .'",

SubCuenta16 = '.$SubCuenta16.' ,
Cantidad16 = '.$Cantidad16.' ,
Unidad16 = "'.$Unidad16 .'" ,
Descripcion16 = "'.$Descripcion16 .'",

SubCuenta17 = '.$SubCuenta17.' ,
Cantidad17 = '.$Cantidad17.' ,
Unidad17 = "'.$Unidad17 .'" ,
Descripcion17 = "'.$Descripcion17 .'",


SubCuenta18 = '.$SubCuenta18.' ,
Cantidad18 = '.$Cantidad18.' ,
Unidad18 = "'.$Unidad18 .'" ,
Descripcion18 = "'.$Descripcion18 .'",


SubCuenta19 = '.$SubCuenta19.' ,
Cantidad19 = '.$Cantidad19.' ,
Unidad19 = "'.$Unidad19 .'" ,
Descripcion19 = "'.$Descripcion19 .'",


SubCuenta20 = '.$SubCuenta20.' ,
Cantidad20 = '.$Cantidad20.' ,
Unidad20 = "'.$Unidad20 .'" ,
Descripcion20 = "'.$Descripcion20 .'",


SubCuenta21 = '.$SubCuenta21.' ,
Cantidad21 = '.$Cantidad21.' ,
Unidad21 = "'.$Unidad21 .'" ,
Descripcion21 = "'.$Descripcion21 .'",


SubCuenta22 = '.$SubCuenta22.' ,
Cantidad22 = '.$Cantidad22.' ,
Unidad22 = "'.$Unidad22 .'" ,
Descripcion22 = "'.$Descripcion22 .'",


SubCuenta23 = '.$SubCuenta23.' ,
Cantidad23 = '.$Cantidad23.' ,
Unidad23 = "'.$Unidad23 .'" ,
Descripcion23 = "'.$Descripcion23 .'",


SubCuenta24 = '.$SubCuenta24.' ,
Cantidad24 = '.$Cantidad24.' ,
Unidad24 = "'.$Unidad24 .'" ,
Descripcion24 = "'.$Descripcion24 .'",


SubCuenta25 = '.$SubCuenta25.' ,
Cantidad25 = '.$Cantidad25.' ,
Unidad25 = "'.$Unidad25 .'" ,
Descripcion25 = "'.$Descripcion25 .'",


SubCuenta26 = '.$SubCuenta26.' ,
Cantidad26 = '.$Cantidad26.' ,
Unidad26 = "'.$Unidad26 .'" ,
Descripcion26 = "'.$Descripcion26 .'",


SubCuenta27 = '.$SubCuenta27.' ,
Cantidad27 = '.$Cantidad27.' ,
Unidad27 = "'.$Unidad27 .'" ,
Descripcion27 = "'.$Descripcion27 .'",


SubCuenta28 = '.$SubCuenta28.' ,
Cantidad28 = '.$Cantidad28.' ,
Unidad28 = "'.$Unidad28 .'" ,
Descripcion28 = "'.$Descripcion28 .'",


SubCuenta29 = '.$SubCuenta29.' ,
Cantidad29 = '.$Cantidad29.' ,
Unidad29 = "'.$Unidad29 .'" ,
Descripcion29 = "'.$Descripcion29 .'",


SubCuenta30 = '.$SubCuenta30.' ,
Cantidad30 = '.$Cantidad30.' ,
Unidad30 = "'.$Unidad30 .'" ,
Descripcion30 = "'.$Descripcion30 .'",


SubCuenta31 = '.$SubCuenta31.' ,
Cantidad31 = '.$Cantidad31.' ,
Unidad31 = "'.$Unidad31 .'" ,
Descripcion31 = "'.$Descripcion31 .'",


SubCuenta32 = '.$SubCuenta32.' ,
Cantidad32 = '.$Cantidad32.' ,
Unidad32 = "'.$Unidad32 .'" ,
Descripcion32 = "'.$Descripcion32 .'",


SubCuenta33 = '.$SubCuenta33.' ,
Cantidad33 = '.$Cantidad33.' ,
Unidad33 = "'.$Unidad33 .'" ,
Descripcion33 = "'.$Descripcion33 .'",


SubCuenta34 = '.$SubCuenta34.' ,
Cantidad34 = '.$Cantidad34.' ,
Unidad34 = "'.$Unidad34 .'" ,
Descripcion34 = "'.$Descripcion34 .'",


SubCuenta35 = '.$SubCuenta35.' ,
Cantidad35 = '.$Cantidad35.' ,
Unidad35 = "'.$Unidad35 .'" ,
Descripcion35 = "'.$Descripcion35 .'",


SubCuenta36 = '.$SubCuenta36.' ,
Cantidad36 = '.$Cantidad36.' ,
Unidad36 = "'.$Unidad36 .'" ,
Descripcion36 = "'.$Descripcion36 .'"




WHERE Folio = '.$Folio.'';





// echo $sql;



	// echo "<br>";
	// echo $sql;




	if ($conexion->query($sql) )

	{


		// header('Location: ModificarRequi.php?Folio='.$Folio.'&IdRequi='.$IdRequi.'&Mensaje=Modificada-Correcto');


	// echo "Correcto Actualizacion primer parte Cotizacion";







	$sql =' UPDATE  MovcRequis  SET

  FolioAdqui = '.$FolioAdqui.' ,
	NomProveedor01 = "'.$NomProveedor01.' ",
	NomProveedor02 = "'.$NomProveedor02.'" ,
	NomProveedor03 = "'.$NomProveedor03.' ",
	NumProveedor01 = '.$NumProveedor01.' ,
	NumProveedor02 = '.$NumProveedor02.' ,
	NumProveedor03 = '.$NumProveedor03.' ,

	PrecioArt01Prov01 = '.$PrecioArt01Prov01.',
	PrecioArt02Prov01 = '.$PrecioArt02Prov01.',
	PrecioArt03Prov01 = '.$PrecioArt03Prov01.',
	PrecioArt04Prov01 = '.$PrecioArt04Prov01.',
	PrecioArt05Prov01 = '.$PrecioArt05Prov01.',
	PrecioArt06Prov01 = '.$PrecioArt06Prov01.',
	PrecioArt07Prov01 = '.$PrecioArt07Prov01.',
	PrecioArt08Prov01 = '.$PrecioArt08Prov01.',
	PrecioArt09Prov01 = '.$PrecioArt09Prov01.',
	PrecioArt10Prov01 = '.$PrecioArt10Prov01.',
	PrecioArt11Prov01 = '.$PrecioArt11Prov01.',
	PrecioArt12Prov01 = '.$PrecioArt12Prov01.',
	PrecioArt13Prov01 = '.$PrecioArt13Prov01.',
	PrecioArt14Prov01 = '.$PrecioArt14Prov01.',
	PrecioArt15Prov01 = '.$PrecioArt15Prov01.',
	PrecioArt16Prov01 = '.$PrecioArt16Prov01.',
	PrecioArt17Prov01 = '.$PrecioArt17Prov01.',
	PrecioArt18Prov01 = '.$PrecioArt18Prov01.',
	PrecioArt19Prov01 = '.$PrecioArt19Prov01.',
	PrecioArt20Prov01 = '.$PrecioArt20Prov01.',
	PrecioArt21Prov01 = '.$PrecioArt21Prov01.',
	PrecioArt22Prov01 = '.$PrecioArt22Prov01.',
	PrecioArt23Prov01 = '.$PrecioArt23Prov01.',
	PrecioArt24Prov01 = '.$PrecioArt24Prov01.',
	PrecioArt25Prov01 = '.$PrecioArt25Prov01.',
	PrecioArt26Prov01 = '.$PrecioArt26Prov01.',
	PrecioArt27Prov01 = '.$PrecioArt27Prov01.',
	PrecioArt28Prov01 = '.$PrecioArt28Prov01.',
	PrecioArt29Prov01 = '.$PrecioArt29Prov01.',
	PrecioArt30Prov01 = '.$PrecioArt30Prov01.',
	PrecioArt31Prov01 = '.$PrecioArt31Prov01.',
	PrecioArt32Prov01 = '.$PrecioArt32Prov01.',
	PrecioArt33Prov01 = '.$PrecioArt33Prov01.',
	PrecioArt34Prov01 = '.$PrecioArt34Prov01.',
	PrecioArt35Prov01 = '.$PrecioArt35Prov01.',
	PrecioArt36Prov01 = '.$PrecioArt36Prov01.',




	PrecioArt01Prov02 = '.$PrecioArt01Prov02.',
	PrecioArt02Prov02 = '.$PrecioArt02Prov02.',
	PrecioArt03Prov02 = '.$PrecioArt03Prov02.',
	PrecioArt04Prov02 = '.$PrecioArt04Prov02.',
	PrecioArt05Prov02 = '.$PrecioArt05Prov02.',
	PrecioArt06Prov02 = '.$PrecioArt06Prov02.',
	PrecioArt07Prov02 = '.$PrecioArt07Prov02.',
	PrecioArt08Prov02 = '.$PrecioArt08Prov02.',
	PrecioArt09Prov02 = '.$PrecioArt09Prov02.',
	PrecioArt10Prov02 = '.$PrecioArt10Prov02.',
	PrecioArt11Prov02 = '.$PrecioArt11Prov02.',
	PrecioArt12Prov02 = '.$PrecioArt12Prov02.',
	PrecioArt13Prov02 = '.$PrecioArt13Prov02.',
	PrecioArt14Prov02 = '.$PrecioArt14Prov02.',
	PrecioArt15Prov02 = '.$PrecioArt15Prov02.',
	PrecioArt16Prov02 = '.$PrecioArt16Prov02.',
	PrecioArt17Prov02 = '.$PrecioArt17Prov02.',
	PrecioArt18Prov02 = '.$PrecioArt18Prov02.',
	PrecioArt19Prov02 = '.$PrecioArt19Prov02.',
	PrecioArt20Prov02 = '.$PrecioArt20Prov02.',
	PrecioArt21Prov02 = '.$PrecioArt21Prov02.',
	PrecioArt22Prov02 = '.$PrecioArt22Prov02.',
	PrecioArt23Prov02 = '.$PrecioArt23Prov02.',
	PrecioArt24Prov02 = '.$PrecioArt24Prov02.',
	PrecioArt25Prov02 = '.$PrecioArt25Prov02.',
	PrecioArt26Prov02 = '.$PrecioArt26Prov02.',
	PrecioArt27Prov02 = '.$PrecioArt27Prov02.',
	PrecioArt28Prov02 = '.$PrecioArt28Prov02.',
	PrecioArt29Prov02 = '.$PrecioArt29Prov02.',
	PrecioArt30Prov02 = '.$PrecioArt30Prov02.',
	PrecioArt31Prov02 = '.$PrecioArt31Prov02.',
	PrecioArt32Prov02 = '.$PrecioArt32Prov02.',
	PrecioArt33Prov02 = '.$PrecioArt33Prov02.',
	PrecioArt34Prov02 = '.$PrecioArt34Prov02.',
	PrecioArt35Prov02 = '.$PrecioArt35Prov02.',
	PrecioArt36Prov02 = '.$PrecioArt36Prov02.',





	PrecioArt01Prov03 = '.$PrecioArt01Prov03.',
	PrecioArt02Prov03 = '.$PrecioArt02Prov03.',
	PrecioArt03Prov03 = '.$PrecioArt03Prov03.',
	PrecioArt04Prov03 = '.$PrecioArt04Prov03.',
	PrecioArt05Prov03 = '.$PrecioArt05Prov03.',
	PrecioArt06Prov03 = '.$PrecioArt06Prov03.',
	PrecioArt07Prov03 = '.$PrecioArt07Prov03.',
	PrecioArt08Prov03 = '.$PrecioArt08Prov03.',
	PrecioArt09Prov03 = '.$PrecioArt09Prov03.',
	PrecioArt10Prov03 = '.$PrecioArt10Prov03.',
	PrecioArt11Prov03 = '.$PrecioArt11Prov03.',
	PrecioArt12Prov03 = '.$PrecioArt12Prov03.',
	PrecioArt13Prov03 = '.$PrecioArt13Prov03.',
	PrecioArt14Prov03 = '.$PrecioArt14Prov03.',
	PrecioArt15Prov03 = '.$PrecioArt15Prov03.',
	PrecioArt16Prov03 = '.$PrecioArt16Prov03.',
	PrecioArt17Prov03 = '.$PrecioArt17Prov03.',
	PrecioArt18Prov03 = '.$PrecioArt18Prov03.',
	PrecioArt19Prov03 = '.$PrecioArt19Prov03.',
	PrecioArt20Prov03 = '.$PrecioArt20Prov03.',
	PrecioArt21Prov03 = '.$PrecioArt21Prov03.',
	PrecioArt22Prov03 = '.$PrecioArt22Prov03.',
	PrecioArt23Prov03 = '.$PrecioArt23Prov03.',
	PrecioArt24Prov03 = '.$PrecioArt24Prov03.',
	PrecioArt25Prov03 = '.$PrecioArt25Prov03.',
	PrecioArt26Prov03 = '.$PrecioArt26Prov03.',
	PrecioArt27Prov03 = '.$PrecioArt27Prov03.',
	PrecioArt28Prov03 = '.$PrecioArt28Prov03.',
	PrecioArt29Prov03 = '.$PrecioArt29Prov03.',
	PrecioArt30Prov03 = '.$PrecioArt30Prov03.',
	PrecioArt31Prov03 = '.$PrecioArt31Prov03.',
	PrecioArt32Prov03 = '.$PrecioArt32Prov03.',
	PrecioArt33Prov03 = '.$PrecioArt33Prov03.',
	PrecioArt34Prov03 = '.$PrecioArt34Prov03.',
	PrecioArt35Prov03 = '.$PrecioArt35Prov03.',
	PrecioArt36Prov03 = '.$PrecioArt36Prov03.',




	IVArt01  = "'.$IVArt01.'",
	IVArt02  = "'.$IVArt02.'",
	IVArt03  = "'.$IVArt03.'",
	IVArt04  = "'.$IVArt04.'",
	IVArt05  = "'.$IVArt05.'",
	IVArt06  = "'.$IVArt06.'",
	IVArt07  = "'.$IVArt07.'",
	IVArt08  = "'.$IVArt08.'",
	IVArt09  = "'.$IVArt09.'",
	IVArt10  = "'.$IVArt10.'",
	IVArt11  = "'.$IVArt11.'",
	IVArt12  = "'.$IVArt12.'",
	IVArt13  = "'.$IVArt13.'",
	IVArt14  = "'.$IVArt14.'",
	IVArt15  = "'.$IVArt15.'",
	IVArt16  = "'.$IVArt16.'",
	IVArt17  = "'.$IVArt17.'",
	IVArt18  = "'.$IVArt18.'",
	IVArt19  = "'.$IVArt19.'",
	IVArt20  = "'.$IVArt20.'",
	IVArt21  = "'.$IVArt21.'",
	IVArt22  = "'.$IVArt22.'",
	IVArt23  = "'.$IVArt23.'",
	IVArt24  = "'.$IVArt24.'",
	IVArt25  = "'.$IVArt25.'",
	IVArt26  = "'.$IVArt26.'",
	IVArt27  = "'.$IVArt27.'",
	IVArt28  = "'.$IVArt28.'",
	IVArt29  = "'.$IVArt29.'",
	IVArt30  = "'.$IVArt30.'",
	IVArt31  = "'.$IVArt31.'",
	IVArt32  = "'.$IVArt32.'",
	IVArt33  = "'.$IVArt33.'",
	IVArt34  = "'.$IVArt34.'",
	IVArt35  = "'.$IVArt35.'",
	IVArt36  = "'.$IVArt36.'",


	TiempoEntrega01 = "'.$TiempoEntrega01.'",
	TiempoEntrega02 = "'.$TiempoEntrega02.'",
	TiempoEntrega03 = "'.$TiempoEntrega03.'",
	ObservacionesCotizacion ="'.$ObservacionesCotizacion.'",
	Garantia01 = "'.$Garantia01 .'",
	Garantia02 = "'.$Garantia02 .'",
	Garantia03 = "'.$Garantia03 .'"



	WHERE Folio = '.$Folio.'';

// echo $sql;

	if ($conexion->query($sql) )

	{
		header('Location: MostrarCotizacion.php?Folio='.$Folio.'&IdRequi='.$IdRequi.'&Mensaje=Modificada-Correcto');


	}

	else {
		  // echo "Error de act movcrequis";
	}




	}
	else {
	  // echo "Error";
		// header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
	}


	 mysqli_close($conexion);







 ?>
