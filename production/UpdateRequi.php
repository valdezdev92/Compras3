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

	$IdArea = $_POST['Area'] ;

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





 if ($IdArea == 1 )
 {
 	if ($IdUnidad == '4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS' )

			{
 				$Funcion = 4;
				$Programa = 61;
 			}

	if ($IdUnidad == '4407 - LABORATORIO DE SANITARIA' )

			{
				$Funcion = 4;
				$Programa = 61;
			}

	if ($IdUnidad == '4411 - LABORATORIO DE METALURGIA' )

			{
				$Funcion = 4;
				$Programa = 61;
			}

	if ($IdUnidad == '4416 - LABORATORIO DE SENSORES REMOTOS' )

			{
				$Funcion = 4;
				$Programa = 61;
			}

			if ($IdUnidad == '4417 - LABORATORIO DE TOPOGRAFIA' )

					{
						$Funcion = 4;
						$Programa = 61;
					}


		if ($IdUnidad == '4418 - LABORATORIO DE RESONANCIA MAGNETICA' )

				{
					$Funcion = 4;
					$Programa = 61;
				}

				if ($IdUnidad == '4462 - LABORATORIO DE GEOLOGIA' )

						{
							$Funcion = 4;
							$Programa = 61;
						}

						if ($IdUnidad == '4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA' )

								{
									$Funcion = 4;
									$Programa = 61;
								}


								if ($IdUnidad == '4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS' )

										{
											$Funcion = 4;
											$Programa = 61;
										}


										if ($IdUnidad == '4415 - LABORATORIO DE HIDRAULICA' )

												{
													$Funcion = 4;
													$Programa = 61;
												}


												if ($IdUnidad == '4462 - LABORATORIO DE GEOLOGIA' )

														{
															$Funcion = 4;
															$Programa = 61;
														}


													if ($IdUnidad == '4462 - LABORATORIO DE GEOFISICA' )

															{
																$Funcion = 4;
																$Programa = 61;
															}



 }
 elseif ($IdArea == 2)
 {
	 if ($IdUnidad == '4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS' )

		 {
				 $Funcion = 5;
			 $Programa = 11;
			 }

	 if ($IdUnidad == '4407 - LABORATORIO DE SANITARIA' )

			 {
				 $Funcion = 5;
				 $Programa = 11;
			 }

	 if ($IdUnidad == '4411 - LABORATORIO DE METALURGIA' )

			 {
				 $Funcion = 5;
				 $Programa = 11;
			 }

	 if ($IdUnidad == '4416 - LABORATORIO DE SENSORES REMOTOS' )

			 {
				 $Funcion = 5;
				 $Programa = 11;
			 }


			 if ($IdUnidad == '4417 - LABORATORIO DE TOPOGRAFIA' )

 					{
 						$Funcion = 5;
 						$Programa = 11;
 					}


			if ($IdUnidad == '4418 - LABORATORIO DE RESONANCIA MAGNETICA' )

					{
						$Funcion = 5;
						$Programa = 11;
					}

					if ($IdUnidad == '4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA' )

							{
								$Funcion = 5;
								$Programa = 11;
							}


							if ($IdUnidad == '4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS' )

									{
										$Funcion = 5;
										$Programa = 11;
									}

									if ($IdUnidad == '4415 - LABORATORIO DE HIDRAULICA' )

											{
												$Funcion = 5;
												$Programa = 11;
											}

											if ($IdUnidad == '4462 - LABORATORIO DE GEOLOGIA' )

													{
														$Funcion = 5;
														$Programa = 11;
													}

													if ($IdUnidad == '4462 - LABORATORIO DE GEOFISICA' )

															{
																$Funcion = 5;
																$Programa = 11;
															}




 }


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

if ($Cantidad01 == '')
 {
	$Cantidad01 = 0;
	}
	else {
			$Cantidad01 =$_POST['Cantidad01'];
	}






// echo '<BR> $Cantidad01  :'.$Cantidad01 ;

$Unidad01 =$_POST['Unidad01'];

// echo '<BR> $Unidad01  :'.$Unidad01 ;


$Descripcion01 =$_POST['Descripcion01'];

// echo '<BR> $Descripcion01  :'.$Descripcion01 ;

$AUX = addslashes($Descripcion01);


$Descripcion01 = $AUX;





$Observaciones01 =$_POST['Observaciones01'];


$AUX = addslashes($Observaciones01);


$Observaciones01 = $AUX;

// echo '<BR> $Observaciones01  :'.$Observaciones01 ;




//  Articulo 1

$SubCuenta02 =$_POST['SubCuenta02'] ;

// echo '<BR> $SubCuenta02  :'.$SubCuenta02 ;
$Cantidad02 =$_POST['Cantidad02'];

if ($Cantidad02 == '')
 {
	$Cantidad02 = 0;
	}
	else {
			$Cantidad02 =$_POST['Cantidad02'];
	}




// echo '<BR> $Cantidad02  :'.$Cantidad02 ;

$Unidad02 =$_POST['Unidad02'];

// echo '<BR> $Unidad02  :'.$Unidad02 ;


$Descripcion02 =$_POST['Descripcion02'];

// echo '<BR> $Descripcion02  :'.$Descripcion02 ;



$AUX = addslashes($Descripcion02);


$Descripcion02 = $AUX;



$Observaciones02 =$_POST['Observaciones02'];

// echo '<BR> $Observaciones02  :'.$Observaciones02 ;



	$SubCuenta03 =$_POST['SubCuenta03'];

//  Articulo 3
$Cantidad03 =$_POST['Cantidad03'];
if ($Cantidad03 == '')
 {
	$Cantidad03 = 0;
	}
	else {
			$Cantidad03 =$_POST['Cantidad03'];
	}



// echo '<BR> $SubCuenta03  :'.$SubCuenta03 ;






// echo '<BR> $Cantidad03  :'.$Cantidad03 ;

$Unidad03 =$_POST['Unidad03'];

// echo '<BR> $Unidad03  :'.$Unidad03 ;


$Descripcion03 =$_POST['Descripcion03'];

// echo '<BR> $Descripcion03  :'.$Descripcion03 ;


$AUX = addslashes($Descripcion03);


$Descripcion03 = $AUX;



$Observaciones03 =$_POST['Observaciones03'];

// echo '<BR> $Observaciones03  :'.$Observaciones03 ;







//  Articulo 4

$SubCuenta04 =$_POST['SubCuenta04'];

// echo '<BR> $SubCuenta04  :'.$SubCuenta04 ;
$Cantidad04 =$_POST['Cantidad04'];
if ($Cantidad04 == '')
 {
	$Cantidad04 = 0;
	}
	else {
			$Cantidad04 =$_POST['Cantidad04'];
	}




// echo '<BR> $Cantidad04  :'.$Cantidad04 ;

$Unidad04 =$_POST['Unidad04'];

// echo '<BR> $Unidad04  :'.$Unidad04 ;


$Descripcion04 =$_POST['Descripcion04'];

// echo '<BR> $Descripcion04  :'.$Descripcion04 ;



$AUX = addslashes($Descripcion04);


$Descripcion04 = $AUX;



$Observaciones04 =$_POST['Observaciones04'];

// echo '<BR> $Observaciones04  :'.$Observaciones04 ;





//  Articulo 5

$SubCuenta05 =$_POST['SubCuenta05'];

// echo '<BR> $SubCuenta05  :'.$SubCuenta05 ;
	$Cantidad05 =$_POST['Cantidad05'];
if ($Cantidad05 == '')
 {
	$Cantidad05 = 0;
	}
	else {
			$Cantidad05 =$_POST['Cantidad05'];
	}





// echo '<BR> $Cantidad05  :'.$Cantidad05 ;

$Unidad05 =$_POST['Unidad05'];

// echo '<BR> $Unidad05  :'.$Unidad05 ;


$Descripcion05 =$_POST['Descripcion05'];

// echo '<BR> $Descripcion05  :'.$Descripcion05 ;




$AUX = addslashes($Descripcion05);


$Descripcion05 = $AUX;




$Observaciones05 =$_POST['Observaciones05'];

// echo '<BR> $Observaciones05  :'.$Observaciones05 ;





//  Articulo 6

$SubCuenta06 =$_POST['SubCuenta06'];

// echo '<BR> $SubCuenta06  :'.$SubCuenta06 ;
$Cantidad06 =$_POST['Cantidad06'];
if ($Cantidad06 == '')
 {
	$Cantidad06 = 0;
	}
	else {
			$Cantidad06 =$_POST['Cantidad06'];
	}




// echo '<BR> $Cantidad06  :'.$Cantidad06 ;

$Unidad06 =$_POST['Unidad06'];

// echo '<BR> $Unidad06  :'.$Unidad06 ;


$Descripcion06 =$_POST['Descripcion06'];

// echo '<BR> $Descripcion06  :'.$Descripcion06 ;


$AUX = addslashes($Descripcion06);


$Descripcion06 = $AUX;




$Observaciones06 =$_POST['Observaciones06'];

// echo '<BR> $Observaciones06  :'.$Observaciones06 ;





//  Articulo 7

$SubCuenta07 =$_POST['SubCuenta07'];

// echo '<BR> $SubCuenta07  :'.$SubCuenta07 ;
$Cantidad07 =$_POST['Cantidad07'];
if ($Cantidad07 == '')
 {
	$Cantidad07 = 0;
	}
	else {
			$Cantidad07 =$_POST['Cantidad07'];
	}





// echo '<BR> $Cantidad07  :'.$Cantidad07 ;

$Unidad07 =$_POST['Unidad07'];

// echo '<BR> $Unidad07  :'.$Unidad07 ;


$Descripcion07 =$_POST['Descripcion07'];

// echo '<BR> $Descripcion07  :'.$Descripcion07 ;


$AUX = addslashes($Descripcion07);


$Descripcion07 = $AUX;



$Observaciones07 =$_POST['Observaciones07'];

// echo '<BR> $Observaciones07  :'.$Observaciones07 ;






//  Articulo 1

$SubCuenta08 =$_POST['SubCuenta08'];

// echo '<BR> $SubCuenta08  :'.$SubCuenta08 ;
$Cantidad08 =$_POST['Cantidad08'];
if ($Cantidad08 == '')
 {
	$Cantidad08 = 0;
	}
	else {
			$Cantidad08 =$_POST['Cantidad08'];
	}



// echo '<BR> $Cantidad08  :'.$Cantidad08 ;

$Unidad08 =$_POST['Unidad08'];

// echo '<BR> $Unidad08  :'.$Unidad08 ;


$Descripcion08 =$_POST['Descripcion08'];

// echo '<BR> $Descripcion08  :'.$Descripcion08 ;



$AUX = addslashes($Descripcion08);


$Descripcion08 = $AUX;






$Observaciones08 =$_POST['Observaciones08'];

// echo '<BR> $Observaciones08  :'.$Observaciones08 ;







//  Articulo 9

$SubCuenta09 =$_POST['SubCuenta09'];

// echo '<BR> $SubCuenta09  :'.$SubCuenta09 ;
	$Cantidad09 =$_POST['Cantidad09'];

if ($Cantidad09 == '')
 {
	$Cantidad09 = 0;
	}
	else {
			$Cantidad09 =$_POST['Cantidad09'];
	}



// echo '<BR> $Cantidad09  :'.$Cantidad09 ;

$Unidad09 =$_POST['Unidad09'];

// echo '<BR> $Unidad09  :'.$Unidad09 ;


$Descripcion09 =$_POST['Descripcion09'];

// echo '<BR> $Descripcion09  :'.$Descripcion09 ;



$AUX = addslashes($Descripcion09);


$Descripcion09 = $AUX;



$Observaciones09 =$_POST['Observaciones09'];

// echo '<BR> $Observaciones09  :'.$Observaciones09 ;






//  Articulo 10

$SubCuenta10 =$_POST['SubCuenta10'];

// echo '<BR> $SubCuenta10  :'.$SubCuenta10 ;
	$Cantidad10 =$_POST['Cantidad10'];
if ($Cantidad10 == '')
 {
	$Cantidad10 = 0;
	}
	else {
			$Cantidad10 =$_POST['Cantidad10'];
	}




// echo '<BR> $Cantidad10  :'.$Cantidad10 ;

$Unidad10 =$_POST['Unidad10'];

// echo '<BR> $Unidad10  :'.$Unidad10 ;


$Descripcion10 =$_POST['Descripcion10'];

// echo '<BR> $Descripcion10  :'.$Descripcion10 ;


$AUX = addslashes($Descripcion10);


$Descripcion10 = $AUX;



$Observaciones10 =$_POST['Observaciones10'];

// echo '<BR> $Observaciones10  :'.$Observaciones10 ;






//  Articulo 11

$SubCuenta11 =$_POST['SubCuenta11'];

// echo '<BR> $SubCuenta11  :'.$SubCuenta11 ;
	$Cantidad11 =$_POST['Cantidad11'];
if ($Cantidad11 == '')
 {
	$Cantidad11 = 0;
	}
	else {
			$Cantidad11 =$_POST['Cantidad11'];
	}




// echo '<BR> $Cantidad11  :'.$Cantidad11 ;

$Unidad11 =$_POST['Unidad11'];

// echo '<BR> $Unidad11  :'.$Unidad11 ;


$Descripcion11 =$_POST['Descripcion11'];

// echo '<BR> $Descripcion11  :'.$Descripcion11 ;




$AUX = addslashes($Descripcion11);


$Descripcion11 = $AUX;


$Observaciones11 =$_POST['Observaciones11'];

// echo '<BR> $Observaciones11  :'.$Observaciones11 ;







//  Articulo 12

$SubCuenta12 =$_POST['SubCuenta12'];

// echo '<BR> $SubCuenta12  :'.$SubCuenta12 ;
$Cantidad12 =$_POST['Cantidad12'];

if ($Cantidad12 == '')
 {
	$Cantidad12 = 0;
	}
	else {
			$Cantidad12 =$_POST['Cantidad12'];
	}



// echo '<BR> $Cantidad12  :'.$Cantidad12 ;

$Unidad12 =$_POST['Unidad12'];

// echo '<BR> $Unidad12  :'.$Unidad12 ;


$Descripcion12 =$_POST['Descripcion12'];

// echo '<BR> $Descripcion12  :'.$Descripcion12 ;




$AUX = addslashes($Descripcion12);


$Descripcion12 = $AUX;



$Observaciones12 =$_POST['Observaciones12'];

// echo '<BR> $Observaciones12  :'.$Observaciones12 ;









//  Articulo 13

$SubCuenta13 =$_POST['SubCuenta13'];

// echo '<BR> $SubCuenta13  :'.$SubCuenta13 ;

$Cantidad13 =$_POST['Cantidad13'];
if ($Cantidad13 == '')
 {
	$Cantidad13 = 0;
	}
	else {
			$Cantidad13 =$_POST['Cantidad13'];
	}


// echo '<BR> $Cantidad13  :'.$Cantidad13 ;

$Unidad13 =$_POST['Unidad13'];

// echo '<BR> $Unidad13  :'.$Unidad13 ;


$Descripcion13 =$_POST['Descripcion13'];

// echo '<BR> $Descripcion13  :'.$Descripcion13 ;


$AUX = addslashes($Descripcion13);


$Descripcion13 = $AUX;



$Observaciones13 =$_POST['Observaciones13'];

// echo '<BR> $Observaciones13  :'.$Observaciones13 ;









//  Articulo 1

$SubCuenta14 =$_POST['SubCuenta14'];

// echo '<BR> $SubCuenta14  :'.$SubCuenta14 ;

	$Cantidad14 =$_POST['Cantidad14'];
if ($Cantidad14 == '')
 {
	$Cantidad14 = 0;
	}
	else {
			$Cantidad14 =$_POST['Cantidad14'];
	}


// echo '<BR> $Cantidad14  :'.$Cantidad14 ;

$Unidad14 =$_POST['Unidad14'];

// echo '<BR> $Unidad14  :'.$Unidad14 ;


$Descripcion14 =$_POST['Descripcion14'];

// echo '<BR> $Descripcion14  :'.$Descripcion14 ;


$AUX = addslashes($Descripcion14);


$Descripcion14 = $AUX;



$Observaciones14 =$_POST['Observaciones14'];

// echo '<BR> $Observaciones14  :'.$Observaciones14 ;

$Garantia01   = $_POST['Garantia01'];
$Garantia02   = $_POST['Garantia02'];
$Garantia03   = $_POST['Garantia03'];








$sql =' UPDATE  Requi  SET
Folio = '.$Folio.' ,
IdUnidad = "'.$IdUnidad.'" ,
IdArea = '.$IdArea.' ,
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
Observaciones02 = "'.$Observaciones02.'" ,
SubCuenta03 = '.$SubCuenta03.' ,
Cantidad03 = '.$Cantidad03 .' ,
Unidad03 = "'.$Unidad03 .'" ,
Descripcion03 = "'.$Descripcion03.'" ,
Observaciones03 = "'.$Observaciones03.'" ,
SubCuenta04 = '.$SubCuenta04 .' ,
Cantidad04 = '.$Cantidad04 .' ,
Unidad04 = "'.$Unidad04 .'" ,
Descripcion04 = "'.$Descripcion04 .'" ,
Observaciones04 = 	"'.$Observaciones04.'" ,
SubCuenta05 = '.$SubCuenta05 .' ,
Cantidad05 = '.$Cantidad05 .' ,
Unidad05 = 	"'.$Unidad05 .'" ,
Descripcion05 = "'.$Descripcion05.'"  ,
Observaciones05 = 	"'.$Observaciones05.'"  ,
SubCuenta06 = '.$SubCuenta06.' ,
Cantidad06 = 	'.$Cantidad06 .' ,
Unidad06 = "'.$Unidad06 .'" ,
Descripcion06 = "'.$Descripcion06 .'" ,
Observaciones06 = "'.$Observaciones06.'" ,
SubCuenta07 = '.$SubCuenta07.' ,
Cantidad07 = '.$Cantidad07.' ,
Unidad07 = 	"'.$Unidad07 .'" ,
Descripcion07 = "'.$Descripcion07.'"  ,
Observaciones07 = "'.$Observaciones07.'"  ,
SubCuenta08 = '.$SubCuenta08 .' ,
Cantidad08 = '.$Cantidad08 .' ,
Unidad08 = "'.$Unidad08.'"  ,
Descripcion08 = "'.$Descripcion08 .'" ,
Observaciones08 = "'.$Observaciones08 .'" ,
SubCuenta09 = '.$SubCuenta09 .' ,
Cantidad09 = '.$Cantidad09 .' ,
Unidad09 = "'.$Unidad09.'"  ,
Descripcion09 = "'.$Descripcion09 .'" ,
Observaciones09 = "'.$Observaciones09.'"  ,
SubCuenta10 = '.$SubCuenta10.'  ,
Cantidad10 = '.$Cantidad10 .' ,
Unidad10 = "'.$Unidad10 .'" ,
Descripcion10 = "'.$Descripcion10.'"  ,
Observaciones10 = "'.$Observaciones10 .'" ,
SubCuenta11 = '.$SubCuenta11.'  ,
Cantidad11 = 	'.$Cantidad11 .' ,
Unidad11 = "'.$Unidad11.'"  ,
Descripcion11 = "'.$Descripcion11.'"  ,
Observaciones11 = "'.$Observaciones11.'"  ,
SubCuenta12 = '.$SubCuenta12 .' ,
Cantidad12 = '.$Cantidad12 .' ,
Unidad12 = "'.$Unidad12.'"  ,
Descripcion12 = "'.$Descripcion12.'"  ,
Observaciones12 = "'.$Observaciones12 .'" ,
SubCuenta13 = '.$SubCuenta13 .' ,
Cantidad13 = "'.$Cantidad13.'"  ,
Unidad13 = "'.$Unidad13.'"  ,
Descripcion13 = "'.$Descripcion13.'" ,
Observaciones13 = "'.$Observaciones13.'"  ,
SubCuenta14 = '.$SubCuenta14.' ,
Cantidad14 = '.$Cantidad14.' ,
Unidad14 = "'.$Unidad14 .'" ,
Descripcion14 = "'.$Descripcion14 .'" ,
Observaciones14 = "'.$Observaciones14 .'"




WHERE Folio = '.$Folio.'';









	echo "<br>";
	echo $sql;




	if ($conexion->query($sql) ) {


		// header('Location: ModificarRequi.php?Folio='.$Folio.'&IdRequi='.$IdRequi.'&Mensaje=Modificada-Correcto');


		header('Location:consultaLvl3.php?Folio='.$Folio.'&IdRequi='.$IdRequi.'&Mensaje=Modificada-Correcto');


	echo "Correcto";



	}
	else {
	  echo "Error no se inserto";
		// header('Location: ../Mensajes.php?Accion=Error&Mensaje=No se inserto');
	}


	 mysqli_close($conexion);







 ?>
