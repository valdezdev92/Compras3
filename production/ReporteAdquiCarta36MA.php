<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';

date_default_timezone_set('America/Chihuahua');

function formatDollars($dollars){
  return "$".number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)),2);
}

 ?>


  <?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "sr1920la";
 $db_name = "Compras";
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
  die("La conexion falló: " . $conexion->connect_error);
 }



$IdRequi = $_GET['IdRequi'];
$Folio = $_GET['Folio'];



 $sql = 'SELECT *, b.Descripcion AS Departamento , a.IdUnidad AS DescripcionCompleta FROM Requi a INNER JOIN CatcUnidades b on a.IdUnidad = b.IdUnidad INNER JOIN MovcRequis c on a.Folio = c.Folio WHERE a.IdRequi = '.$IdRequi.' ';

 // echo $sql;
 $resultado = $conexion->query($sql);

 while ($row = $resultado->fetch_assoc() )
  {

    $IdRequi = $row['IdRequi'];
    $Folio = $row['Folio'];
    $IdUnidad = $row['IdUnidad'];
    $Departamento = $row['DescripcionCompleta'];
    $Motivos=$row['MotivosRequi'];
    $Solicitante = $row['Solicitante'];




    $Fondo = $row['Fondo'];
    $Funcion = $row['Funcion'];
    $Programa = $row['Programa'];
    $UPresupuestal = $row['UPresupuestal'];
    $Cuenta = $row['Cuenta'];



    $FolioAdqui =$row['FolioAdqui'];
    $NomProveedor01 =$row['NomProveedor01'];
    $NomProveedor02 =$row['NomProveedor02'];
    $NomProveedor03 =$row['NomProveedor03'];
    $NumProveedor01 =$row['NumProveedor01'];
    $NumProveedor02 =$row['NumProveedor02'];
    $NumProveedor03 =$row['NumProveedor03'];
    // $ =$row[''];
    // $ =$row[''];
    // $ =$row[''];
    // $ =$row[''];







    $SubCuenta01 =$row['SubCuenta01'];
    $Cantidad01 =$row['Cantidad01'];
    $Unidad01 = $row['Unidad01'];
    $Descripcion01 =$row['Descripcion01'];
    $Observaciones01 =$row['Observaciones01'];


    $SubCuenta02 =$row['SubCuenta02'];
    $Cantidad02 =$row['Cantidad02'];
    $Unidad02 = $row['Unidad02'];
    $Descripcion02 =$row['Descripcion02'];
    $Observaciones02 =$row['Observaciones02'];


    $SubCuenta03 =$row['SubCuenta03'];
    $Cantidad03 =$row['Cantidad03'];
    $Unidad03 = $row['Unidad03'];
    $Descripcion03 =$row['Descripcion03'];
    $Observaciones03 =$row['Observaciones03'];


    $SubCuenta04 =$row['SubCuenta04'];
    $Cantidad04 =$row['Cantidad04'];
    $Unidad04 = $row['Unidad04'];
    $Descripcion04 =$row['Descripcion04'];
    $Observaciones04 =$row['Observaciones04'];


    $SubCuenta05 =$row['SubCuenta05'];
    $Cantidad05 =$row['Cantidad05'];
    $Unidad05 = $row['Unidad05'];
    $Descripcion05 =$row['Descripcion05'];
    $Observaciones05 =$row['Observaciones05'];


    $SubCuenta06 =$row['SubCuenta06'];
    $Cantidad06 =$row['Cantidad06'];
    $Unidad06 = $row['Unidad06'];
    $Descripcion06 =$row['Descripcion06'];
    $Observaciones06 =$row['Observaciones06'];


    $SubCuenta07 =$row['SubCuenta07'];
    $Cantidad07 =$row['Cantidad07'];
    $Unidad07 = $row['Unidad07'];
    $Descripcion07 =$row['Descripcion07'];
    $Observaciones07 =$row['Observaciones07'];


    $SubCuenta08 =$row['SubCuenta08'];
    $Cantidad08 =$row['Cantidad08'];
    $Unidad08 = $row['Unidad08'];
    $Descripcion08 =$row['Descripcion08'];
    $Observaciones08 =$row['Observaciones08'];


    $SubCuenta09 =$row['SubCuenta09'];
    $Cantidad09 =$row['Cantidad09'];
    $Unidad09 = $row['Unidad09'];
    $Descripcion09 =$row['Descripcion09'];
    $Observaciones09 =$row['Observaciones09'];


    $SubCuenta10 =$row['SubCuenta10'];
    $Cantidad10 =$row['Cantidad10'];
    $Unidad10 = $row['Unidad10'];
    $Descripcion10 =$row['Descripcion10'];
    $Observaciones10 =$row['Observaciones10'];


    $SubCuenta11 =$row['SubCuenta11'];
    $Cantidad11 =$row['Cantidad11'];
    $Unidad11 = $row['Unidad11'];
    $Descripcion11 =$row['Descripcion11'];
    $Observaciones11 =$row['Observaciones11'];


    $SubCuenta12 =$row['SubCuenta12'];
    $Cantidad12 =$row['Cantidad12'];
    $Unidad12 = $row['Unidad12'];
    $Descripcion12 =$row['Descripcion12'];
    $Observaciones12 =$row['Observaciones12'];


    $SubCuenta13 =$row['SubCuenta13'];
    $Cantidad13 =$row['Cantidad13'];
    $Unidad13 = $row['Unidad13'];
    $Descripcion13 =$row['Descripcion13'];
    $Observaciones13 =$row['Observaciones13'];


    $SubCuenta14 =$row['SubCuenta14'];
    $Cantidad14 =$row['Cantidad14'];
    $Unidad14 = $row['Unidad14'];
    $Descripcion14 =$row['Descripcion14'];
    $Observaciones14 =$row['Observaciones14'];



    $SubCuenta15 =$row['SubCuenta15'];
    $Cantidad15 =$row['Cantidad15'];
    $Unidad15 = $row['Unidad15'];
    $Descripcion15 =$row['Descripcion15'];
    $Observaciones15 =$row['Observaciones15'];

    $SubCuenta16 =$row['SubCuenta16'];
    $Cantidad16 =$row['Cantidad16'];
    $Unidad16 = $row['Unidad16'];
    $Descripcion16 =$row['Descripcion16'];
    $Observaciones16 =$row['Observaciones16'];

    $SubCuenta17 =$row['SubCuenta17'];
    $Cantidad17 =$row['Cantidad17'];
    $Unidad17 = $row['Unidad17'];
    $Descripcion17 =$row['Descripcion17'];
    $Observaciones17 =$row['Observaciones17'];


    $SubCuenta18 =$row['SubCuenta18'];
    $Cantidad18 =$row['Cantidad18'];
    $Unidad18 = $row['Unidad18'];
    $Descripcion18 =$row['Descripcion18'];
    $Observaciones18 =$row['Observaciones18'];


    $SubCuenta19 =$row['SubCuenta19'];
    $Cantidad19 =$row['Cantidad19'];
    $Unidad19 = $row['Unidad19'];
    $Descripcion19 =$row['Descripcion19'];
    $Observaciones19 =$row['Observaciones19'];


    $SubCuenta20 =$row['SubCuenta20'];
    $Cantidad20 =$row['Cantidad20'];
    $Unidad20 = $row['Unidad20'];
    $Descripcion20 =$row['Descripcion20'];
    $Observaciones20 =$row['Observaciones20'];


    $SubCuenta21 =$row['SubCuenta21'];
    $Cantidad21 =$row['Cantidad21'];
    $Unidad21 = $row['Unidad21'];
    $Descripcion21 =$row['Descripcion21'];
    $Observaciones21 =$row['Observaciones21'];


    $SubCuenta22 =$row['SubCuenta22'];
    $Cantidad22 =$row['Cantidad22'];
    $Unidad22 = $row['Unidad22'];
    $Descripcion22 =$row['Descripcion22'];
    $Observaciones22 =$row['Observaciones22'];


    $SubCuenta23 =$row['SubCuenta23'];
    $Cantidad23 =$row['Cantidad23'];
    $Unidad23 = $row['Unidad23'];
    $Descripcion23 =$row['Descripcion23'];
    $Observaciones23 =$row['Observaciones23'];


    $SubCuenta24 =$row['SubCuenta24'];
    $Cantidad24 =$row['Cantidad24'];
    $Unidad24 = $row['Unidad24'];
    $Descripcion24 =$row['Descripcion24'];
    $Observaciones24 =$row['Observaciones24'];


    $SubCuenta25 =$row['SubCuenta25'];
    $Cantidad25 =$row['Cantidad25'];
    $Unidad25 = $row['Unidad25'];
    $Descripcion25 =$row['Descripcion25'];
    $Observaciones25 =$row['Observaciones25'];


    $SubCuenta26 =$row['SubCuenta26'];
    $Cantidad26 =$row['Cantidad26'];
    $Unidad26 = $row['Unidad26'];
    $Descripcion26 =$row['Descripcion26'];
    $Observaciones26 =$row['Observaciones26'];


    $SubCuenta27 =$row['SubCuenta27'];
    $Cantidad27 =$row['Cantidad27'];
    $Unidad27 = $row['Unidad27'];
    $Descripcion27 =$row['Descripcion27'];
    $Observaciones27 =$row['Observaciones27'];


    $SubCuenta28 =$row['SubCuenta28'];
    $Cantidad28 =$row['Cantidad28'];
    $Unidad28 = $row['Unidad28'];
    $Descripcion28 =$row['Descripcion28'];
    $Observaciones28 =$row['Observaciones28'];


    $SubCuenta29 =$row['SubCuenta29'];
    $Cantidad29 =$row['Cantidad29'];
    $Unidad29 = $row['Unidad29'];
    $Descripcion29 =$row['Descripcion29'];
    $Observaciones29 =$row['Observaciones29'];


    $SubCuenta30 =$row['SubCuenta30'];
    $Cantidad30 =$row['Cantidad30'];
    $Unidad30 = $row['Unidad30'];
    $Descripcion30 =$row['Descripcion30'];
    $Observaciones30 =$row['Observaciones30'];


    $SubCuenta31 =$row['SubCuenta31'];
    $Cantidad31 =$row['Cantidad31'];
    $Unidad31 = $row['Unidad31'];
    $Descripcion31 =$row['Descripcion31'];
    $Observaciones31 =$row['Observaciones31'];


    $SubCuenta32 =$row['SubCuenta32'];
    $Cantidad32 =$row['Cantidad32'];
    $Unidad32 = $row['Unidad32'];
    $Descripcion32 =$row['Descripcion32'];
    $Observaciones32 =$row['Observaciones32'];


    $SubCuenta33 =$row['SubCuenta33'];
    $Cantidad33 =$row['Cantidad33'];
    $Unidad33 = $row['Unidad33'];
    $Descripcion33 =$row['Descripcion33'];
    $Observaciones33 =$row['Observaciones33'];


    $SubCuenta34 =$row['SubCuenta34'];
    $Cantidad34 =$row['Cantidad34'];
    $Unidad34 = $row['Unidad34'];
    $Descripcion34 =$row['Descripcion34'];
    $Observaciones34 =$row['Observaciones34'];


    $SubCuenta35 =$row['SubCuenta35'];
    $Cantidad35 =$row['Cantidad35'];
    $Unidad35 = $row['Unidad35'];
    $Descripcion35 =$row['Descripcion35'];
    $Observaciones35 =$row['Observaciones35'];



    $SubCuenta36 =$row['SubCuenta36'];
    $Cantidad36 =$row['Cantidad36'];
    $Unidad36 = $row['Unidad36'];
    $Descripcion36 =$row['Descripcion36'];
    $Observaciones36 =$row['Observaciones36'];






    // PRecios

  $PrecioArt01Prov01 = $row['PrecioArt01Prov01'];
  $PrecioArt02Prov01 = $row['PrecioArt02Prov01'];
  $PrecioArt03Prov01 = $row['PrecioArt03Prov01'];
  $PrecioArt04Prov01 = $row['PrecioArt04Prov01'];
  $PrecioArt05Prov01 = $row['PrecioArt05Prov01'];
  $PrecioArt06Prov01 = $row['PrecioArt06Prov01'];
  $PrecioArt07Prov01 = $row['PrecioArt07Prov01'];
  $PrecioArt08Prov01 = $row['PrecioArt08Prov01'];
  $PrecioArt09Prov01 = $row['PrecioArt09Prov01'];
  $PrecioArt10Prov01 = $row['PrecioArt10Prov01'];
  $PrecioArt11Prov01 = $row['PrecioArt11Prov01'];
  $PrecioArt12Prov01 = $row['PrecioArt12Prov01'];
  $PrecioArt13Prov01 = $row['PrecioArt13Prov01'];
  $PrecioArt14Prov01 = $row['PrecioArt14Prov01'];
  $PrecioArt15Prov01 = $row['PrecioArt15Prov01'];
  $PrecioArt16Prov01 = $row['PrecioArt16Prov01'];
  $PrecioArt17Prov01 = $row['PrecioArt17Prov01'];
  $PrecioArt18Prov01 = $row['PrecioArt18Prov01'];
  $PrecioArt19Prov01 = $row['PrecioArt19Prov01'];
  $PrecioArt20Prov01 = $row['PrecioArt20Prov01'];
  $PrecioArt21Prov01 = $row['PrecioArt21Prov01'];
  $PrecioArt22Prov01 = $row['PrecioArt22Prov01'];
  $PrecioArt23Prov01 = $row['PrecioArt23Prov01'];
  $PrecioArt24Prov01 = $row['PrecioArt24Prov01'];
  $PrecioArt25Prov01 = $row['PrecioArt25Prov01'];
  $PrecioArt26Prov01 = $row['PrecioArt26Prov01'];
  $PrecioArt27Prov01 = $row['PrecioArt27Prov01'];
  $PrecioArt28Prov01 = $row['PrecioArt28Prov01'];
  $PrecioArt29Prov01 = $row['PrecioArt29Prov01'];
  $PrecioArt30Prov01 = $row['PrecioArt30Prov01'];
  $PrecioArt31Prov01 = $row['PrecioArt31Prov01'];
  $PrecioArt32Prov01 = $row['PrecioArt32Prov01'];
  $PrecioArt33Prov01 = $row['PrecioArt33Prov01'];
  $PrecioArt34Prov01 = $row['PrecioArt34Prov01'];
  $PrecioArt35Prov01 = $row['PrecioArt35Prov01'];
  $PrecioArt36Prov01 = $row['PrecioArt36Prov01'];


  $PrecioArt01Prov02 = $row['PrecioArt01Prov02'];
  $PrecioArt02Prov02 = $row['PrecioArt02Prov02'];
  $PrecioArt03Prov02 = $row['PrecioArt03Prov02'];
  $PrecioArt04Prov02 = $row['PrecioArt04Prov02'];
  $PrecioArt05Prov02 = $row['PrecioArt05Prov02'];
  $PrecioArt06Prov02 = $row['PrecioArt06Prov02'];
  $PrecioArt07Prov02 = $row['PrecioArt07Prov02'];
  $PrecioArt08Prov02 = $row['PrecioArt08Prov02'];
  $PrecioArt09Prov02 = $row['PrecioArt09Prov02'];
  $PrecioArt10Prov02 = $row['PrecioArt10Prov02'];
  $PrecioArt11Prov02 = $row['PrecioArt11Prov02'];
  $PrecioArt12Prov02 = $row['PrecioArt12Prov02'];
  $PrecioArt13Prov02 = $row['PrecioArt13Prov02'];
  $PrecioArt14Prov02 = $row['PrecioArt14Prov02'];
  $PrecioArt15Prov02 = $row['PrecioArt15Prov02'];
  $PrecioArt16Prov02 = $row['PrecioArt16Prov02'];
  $PrecioArt17Prov02 = $row['PrecioArt17Prov02'];
  $PrecioArt18Prov02 = $row['PrecioArt18Prov02'];
  $PrecioArt19Prov02 = $row['PrecioArt19Prov02'];
  $PrecioArt20Prov02 = $row['PrecioArt20Prov02'];
  $PrecioArt21Prov02 = $row['PrecioArt21Prov02'];
  $PrecioArt22Prov02 = $row['PrecioArt22Prov02'];
  $PrecioArt23Prov02 = $row['PrecioArt23Prov02'];
  $PrecioArt24Prov02 = $row['PrecioArt24Prov02'];
  $PrecioArt25Prov02 = $row['PrecioArt25Prov02'];
  $PrecioArt26Prov02 = $row['PrecioArt26Prov02'];
  $PrecioArt27Prov02 = $row['PrecioArt27Prov02'];
  $PrecioArt28Prov02 = $row['PrecioArt28Prov02'];
  $PrecioArt29Prov02 = $row['PrecioArt29Prov02'];
  $PrecioArt30Prov02 = $row['PrecioArt30Prov02'];
  $PrecioArt31Prov02 = $row['PrecioArt31Prov02'];
  $PrecioArt32Prov02 = $row['PrecioArt32Prov02'];
  $PrecioArt33Prov02 = $row['PrecioArt33Prov02'];
  $PrecioArt34Prov02 = $row['PrecioArt34Prov02'];
  $PrecioArt35Prov02 = $row['PrecioArt35Prov02'];
  $PrecioArt36Prov02 = $row['PrecioArt36Prov02'];


  $PrecioArt01Prov03 = $row['PrecioArt01Prov03'];
  $PrecioArt02Prov03 = $row['PrecioArt02Prov03'];
  $PrecioArt03Prov03 = $row['PrecioArt03Prov03'];
  $PrecioArt04Prov03 = $row['PrecioArt04Prov03'];
  $PrecioArt05Prov03 = $row['PrecioArt05Prov03'];
  $PrecioArt06Prov03 = $row['PrecioArt06Prov03'];
  $PrecioArt07Prov03 = $row['PrecioArt07Prov03'];
  $PrecioArt08Prov03 = $row['PrecioArt08Prov03'];
  $PrecioArt09Prov03 = $row['PrecioArt09Prov03'];
  $PrecioArt10Prov03 = $row['PrecioArt10Prov03'];
  $PrecioArt11Prov03 = $row['PrecioArt11Prov03'];
  $PrecioArt12Prov03 = $row['PrecioArt12Prov03'];
  $PrecioArt13Prov03 = $row['PrecioArt13Prov03'];
  $PrecioArt14Prov03 = $row['PrecioArt14Prov03'];
  $PrecioArt15Prov03 = $row['PrecioArt15Prov03'];
  $PrecioArt16Prov03 = $row['PrecioArt16Prov03'];
  $PrecioArt17Prov03 = $row['PrecioArt17Prov03'];
  $PrecioArt18Prov03 = $row['PrecioArt18Prov03'];
  $PrecioArt19Prov03 = $row['PrecioArt19Prov03'];
  $PrecioArt20Prov03 = $row['PrecioArt20Prov03'];
  $PrecioArt21Prov03 = $row['PrecioArt21Prov03'];
  $PrecioArt22Prov03 = $row['PrecioArt22Prov03'];
  $PrecioArt23Prov03 = $row['PrecioArt23Prov03'];
  $PrecioArt24Prov03 = $row['PrecioArt24Prov03'];
  $PrecioArt25Prov03 = $row['PrecioArt25Prov03'];
  $PrecioArt26Prov03 = $row['PrecioArt26Prov03'];
  $PrecioArt27Prov03 = $row['PrecioArt27Prov03'];
  $PrecioArt28Prov03 = $row['PrecioArt28Prov03'];
  $PrecioArt29Prov03 = $row['PrecioArt29Prov03'];
  $PrecioArt30Prov03 = $row['PrecioArt30Prov03'];
  $PrecioArt31Prov03 = $row['PrecioArt31Prov03'];
  $PrecioArt32Prov03 = $row['PrecioArt32Prov03'];
  $PrecioArt33Prov03 = $row['PrecioArt33Prov03'];
  $PrecioArt34Prov03 = $row['PrecioArt34Prov03'];
  $PrecioArt35Prov03 = $row['PrecioArt35Prov03'];
  $PrecioArt36Prov03 = $row['PrecioArt36Prov03'];



  $IVArt01 = $row['IVArt01'];
  $IVArt02 = $row['IVArt02'];
  $IVArt03 = $row['IVArt03'];
  $IVArt04 = $row['IVArt04'];
  $IVArt05 = $row['IVArt05'];
  $IVArt06 = $row['IVArt06'];
  $IVArt07 = $row['IVArt07'];
  $IVArt08 = $row['IVArt08'];
  $IVArt09 = $row['IVArt09'];
  $IVArt10 = $row['IVArt10'];
  $IVArt11 = $row['IVArt11'];
  $IVArt12 = $row['IVArt12'];
  $IVArt13 = $row['IVArt13'];
  $IVArt14 = $row['IVArt14'];
  $IVArt15 = $row['IVArt15'];
  $IVArt16 = $row['IVArt16'];
  $IVArt17 = $row['IVArt17'];
  $IVArt18 = $row['IVArt18'];
  $IVArt19 = $row['IVArt19'];
  $IVArt20 = $row['IVArt20'];
  $IVArt21 = $row['IVArt21'];
  $IVArt22 = $row['IVArt22'];
  $IVArt23 = $row['IVArt23'];
  $IVArt24 = $row['IVArt24'];
  $IVArt25 = $row['IVArt25'];
  $IVArt26 = $row['IVArt26'];
  $IVArt27 = $row['IVArt27'];
  $IVArt28 = $row['IVArt28'];
  $IVArt29 = $row['IVArt29'];
  $IVArt30 = $row['IVArt30'];
  $IVArt31 = $row['IVArt31'];
  $IVArt32 = $row['IVArt32'];
  $IVArt33 = $row['IVArt33'];
  $IVArt34 = $row['IVArt34'];
  $IVArt35 = $row['IVArt35'];
  $IVArt36 = $row['IVArt36'];





                $TiempoEntrega01 = $row['TiempoEntrega01'];
                $TiempoEntrega02 = $row['TiempoEntrega02'];
                $TiempoEntrega03 = $row['TiempoEntrega03'];
                $ObservacionesCotizacion = $row['ObservacionesCotizacion'];





     }
     $miFecha= gmmktime(12,0,0,1,15,2089);

     setlocale(LC_TIME, 'es_ES.UTF-8');


     date_default_timezone_set ('America/Chihuahua');


     // echo 'Ahora fecha actual es: '.strftime("%A, %d de %B de %Y %H:%M").'<br/>';

     $mes = strftime("%m");
     $ano = strftime("%Y");
     $dia = strftime("%d");



          // $mes = '02';
          // $ano = '2019';
          // $dia = '08';


  ?>

  <?php
        $Subtotal01 =


        ( $PrecioArt01Prov01 * $Cantidad01 )  +
        ( $PrecioArt02Prov01 * $Cantidad02 )  +
        ( $PrecioArt03Prov01 * $Cantidad03 )  +
        ( $PrecioArt04Prov01 * $Cantidad04 )  +
        ( $PrecioArt05Prov01 * $Cantidad05 )  +
        ( $PrecioArt06Prov01 * $Cantidad06 )  +
        ( $PrecioArt07Prov01 * $Cantidad07 )  +
        ( $PrecioArt08Prov01 * $Cantidad08 )  +
        ( $PrecioArt09Prov01 * $Cantidad09 )  +
        ( $PrecioArt10Prov01 * $Cantidad10 )  +
        ( $PrecioArt11Prov01 * $Cantidad11 )  +
        ( $PrecioArt12Prov01 * $Cantidad12 )  +
        ( $PrecioArt13Prov01 * $Cantidad13 )  +
        ( $PrecioArt14Prov01 * $Cantidad14 )  ;


        $Subtotal02 =

        ( $PrecioArt01Prov02 * $Cantidad01 ) +
        ( $PrecioArt02Prov02 * $Cantidad02 ) +
        ( $PrecioArt03Prov02 * $Cantidad03 ) +
        ( $PrecioArt04Prov02 * $Cantidad04 ) +
        ( $PrecioArt05Prov02 * $Cantidad05 ) +
        ( $PrecioArt06Prov02 * $Cantidad06 ) +
        ( $PrecioArt07Prov02 * $Cantidad07 ) +
        ( $PrecioArt08Prov02 * $Cantidad08 ) +
        ( $PrecioArt09Prov02 * $Cantidad09 ) +
        ( $PrecioArt10Prov02 * $Cantidad10 ) +
        ( $PrecioArt11Prov02 * $Cantidad11 ) +
        ( $PrecioArt12Prov02 * $Cantidad12 ) +
        ( $PrecioArt13Prov02 * $Cantidad13 ) +
        ( $PrecioArt14Prov02 * $Cantidad14 ) ;


        $Subtotal03 =

        ( $PrecioArt01Prov03  * $Cantidad01 ) +
        ( $PrecioArt02Prov03  * $Cantidad02 ) +
        ( $PrecioArt03Prov03  * $Cantidad03 ) +
        ( $PrecioArt04Prov03  * $Cantidad04 ) +
        ( $PrecioArt05Prov03  * $Cantidad05 ) +
        ( $PrecioArt06Prov03  * $Cantidad06 ) +
        ( $PrecioArt07Prov03  * $Cantidad07 ) +
        ( $PrecioArt08Prov03  * $Cantidad08 ) +
        ( $PrecioArt09Prov03  * $Cantidad09 ) +
        ( $PrecioArt10Prov03  * $Cantidad10 ) +
        ( $PrecioArt11Prov03  * $Cantidad11 ) +
        ( $PrecioArt12Prov03  * $Cantidad12 ) +
        ( $PrecioArt13Prov03  * $Cantidad13 ) +
        ( $PrecioArt14Prov03  * $Cantidad14 ) ;




if ($IVArt01 == 'SI')
 {
      $SumatoriaIVArt01PROV01 =  ( $Cantidad01 * $PrecioArt01Prov01 )  * (0.16);
      $SumatoriaIVArt01PROV02 =  ( $Cantidad01 * $PrecioArt01Prov02 )  * (0.16);
      $SumatoriaIVArt01PROV03 =  ( $Cantidad01 * $PrecioArt01Prov03 )  * (0.16);

}
else
{
  $SumatoriaIVArt01PROV01 =  0;
  $SumatoriaIVArt01PROV02 =  0;
  $SumatoriaIVArt01PROV03 =  0;
}


      if ($IVArt02 == 'SI')
       {
            $SumatoriaIVArt02PROV01 =  ( $Cantidad02 * $PrecioArt02Prov01 )  * (0.16);
            $SumatoriaIVArt02PROV02 =  ( $Cantidad02 * $PrecioArt02Prov02 )  * (0.16);
            $SumatoriaIVArt02PROV03 =  ( $Cantidad02 * $PrecioArt02Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt02PROV01 =  0;
        $SumatoriaIVArt02PROV02 =  0;
        $SumatoriaIVArt02PROV03 =  0;
      }



      if ($IVArt03 == 'SI')
       {
            $SumatoriaIVArt03PROV01 =  ( $Cantidad03 * $PrecioArt03Prov01 )  * (0.16);
            $SumatoriaIVArt03PROV02 =  ( $Cantidad03 * $PrecioArt03Prov02 )  * (0.16);
            $SumatoriaIVArt03PROV03 =  ( $Cantidad03 * $PrecioArt03Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt03PROV01 =  0;
        $SumatoriaIVArt03PROV02 =  0;
        $SumatoriaIVArt03PROV03 =  0;
      }


      if ($IVArt04 == 'SI')
       {
            $SumatoriaIVArt04PROV01 =  ( $Cantidad04 * $PrecioArt04Prov01 )  * (0.16);
            $SumatoriaIVArt04PROV02 =  ( $Cantidad04 * $PrecioArt04Prov02 )  * (0.16);
            $SumatoriaIVArt04PROV03 =  ( $Cantidad04 * $PrecioArt04Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt04PROV01 =  0;
        $SumatoriaIVArt04PROV02 =  0;
        $SumatoriaIVArt04PROV03 =  0;
      }


      if ($IVArt05 == 'SI')
       {
            $SumatoriaIVArt05PROV01 =  ( $Cantidad05 * $PrecioArt05Prov01 )  * (0.16);
            $SumatoriaIVArt05PROV02 =  ( $Cantidad05 * $PrecioArt05Prov02 )  * (0.16);
            $SumatoriaIVArt05PROV03 =  ( $Cantidad05 * $PrecioArt05Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt05PROV01 =  0;
        $SumatoriaIVArt05PROV02 =  0;
        $SumatoriaIVArt05PROV03 =  0;
      }


      if ($IVArt06 == 'SI')
       {
            $SumatoriaIVArt06PROV01 =  ( $Cantidad06 * $PrecioArt06Prov01 )  * (0.16);
            $SumatoriaIVArt06PROV02 =  ( $Cantidad06 * $PrecioArt06Prov02 )  * (0.16);
            $SumatoriaIVArt06PROV03 =  ( $Cantidad06 * $PrecioArt06Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt06PROV01 =  0;
        $SumatoriaIVArt06PROV02 =  0;
        $SumatoriaIVArt06PROV03 =  0;
      }

      if ($IVArt07 == 'SI')
       {
            $SumatoriaIVArt07PROV01 =  ( $Cantidad07 * $PrecioArt07Prov01 )  * (0.16);
            $SumatoriaIVArt07PROV02 =  ( $Cantidad07 * $PrecioArt07Prov02 )  * (0.16);
            $SumatoriaIVArt07PROV03 =  ( $Cantidad07 * $PrecioArt07Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt07PROV01 =  0;
        $SumatoriaIVArt07PROV02 =  0;
        $SumatoriaIVArt07PROV03 =  0;
      }

      if ($IVArt08 == 'SI')
       {
            $SumatoriaIVArt08PROV01 =  ( $Cantidad08 * $PrecioArt08Prov01 )  * (0.16);
            $SumatoriaIVArt08PROV02 =  ( $Cantidad08 * $PrecioArt08Prov02 )  * (0.16);
            $SumatoriaIVArt08PROV03 =  ( $Cantidad08 * $PrecioArt08Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt08PROV01 =  0;
        $SumatoriaIVArt08PROV02 =  0;
        $SumatoriaIVArt08PROV03 =  0;
      }


      if ($IVArt09 == 'SI')
       {
            $SumatoriaIVArt09PROV01 =  ( $Cantidad09 * $PrecioArt09Prov01 )  * (0.16);
            $SumatoriaIVArt09PROV02 =  ( $Cantidad09 * $PrecioArt09Prov02 )  * (0.16);
            $SumatoriaIVArt09PROV03 =  ( $Cantidad09 * $PrecioArt09Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt09PROV01 =  0;
        $SumatoriaIVArt09PROV02 =  0;
        $SumatoriaIVArt09PROV03 =  0;
      }

      if ($IVArt10 == 'SI')
       {
            $SumatoriaIVArt10PROV01 =  ( $Cantidad10 * $PrecioArt10Prov01 )  * (0.16);
            $SumatoriaIVArt10PROV02 =  ( $Cantidad10 * $PrecioArt10Prov02 )  * (0.16);
            $SumatoriaIVArt10PROV03 =  ( $Cantidad10 * $PrecioArt10Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt10PROV01 =  0;
        $SumatoriaIVArt10PROV02 =  0;
        $SumatoriaIVArt10PROV03 =  0;
      }

      if ($IVArt11 == 'SI')
       {
            $SumatoriaIVArt11PROV01 =  ( $Cantidad11 * $PrecioArt11Prov01 )  * (0.16);
            $SumatoriaIVArt11PROV02 =  ( $Cantidad11 * $PrecioArt11Prov02 )  * (0.16);
            $SumatoriaIVArt11PROV03 =  ( $Cantidad11 * $PrecioArt11Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt11PROV01 =  0;
        $SumatoriaIVArt11PROV02 =  0;
        $SumatoriaIVArt11PROV03 =  0;
      }

      if ($IVArt12 == 'SI')
       {
            $SumatoriaIVArt12PROV01 =  ( $Cantidad12 * $PrecioArt12Prov01 )  * (0.16);
            $SumatoriaIVArt12PROV02 =  ( $Cantidad12 * $PrecioArt12Prov02 )  * (0.16);
            $SumatoriaIVArt12PROV03 =  ( $Cantidad12 * $PrecioArt12Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt12PROV01 =  0;
        $SumatoriaIVArt12PROV02 =  0;
        $SumatoriaIVArt12PROV03 =  0;
      }

      if ($IVArt13 == 'SI')
       {
            $SumatoriaIVArt13PROV01 =  ( $Cantidad13 * $PrecioArt13Prov01 )  * (0.16);
            $SumatoriaIVArt13PROV02 =  ( $Cantidad13 * $PrecioArt13Prov02 )  * (0.16);
            $SumatoriaIVArt13PROV03 =  ( $Cantidad13 * $PrecioArt13Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt13PROV01 =  0;
        $SumatoriaIVArt13PROV02 =  0;
        $SumatoriaIVArt13PROV03 =  0;
      }


      if ($IVArt14 == 'SI')
       {
            $SumatoriaIVArt14PROV01 =  ( $Cantidad14 * $PrecioArt14Prov01 )  * (0.16);
            $SumatoriaIVArt14PROV02 =  ( $Cantidad14 * $PrecioArt14Prov02 )  * (0.16);
            $SumatoriaIVArt14PROV03 =  ( $Cantidad14 * $PrecioArt14Prov03 )  * (0.16);

      }
      else
      {
        $SumatoriaIVArt14PROV01 =  0;
        $SumatoriaIVArt14PROV02 =  0;
        $SumatoriaIVArt14PROV03 =  0;
      }





    $IVA01 =

                $SumatoriaIVArt01PROV01 +
                $SumatoriaIVArt02PROV01 +
                $SumatoriaIVArt03PROV01 +
                $SumatoriaIVArt04PROV01 +
                $SumatoriaIVArt05PROV01 +
                $SumatoriaIVArt06PROV01 +
                $SumatoriaIVArt07PROV01 +
                $SumatoriaIVArt08PROV01 +
                $SumatoriaIVArt09PROV01 +
                $SumatoriaIVArt10PROV01 +
                $SumatoriaIVArt11PROV01 +
                $SumatoriaIVArt12PROV01 +
                $SumatoriaIVArt13PROV01 +
                $SumatoriaIVArt14PROV01 ;



                $IVA02 =

                $SumatoriaIVArt01PROV02 +
                $SumatoriaIVArt02PROV02 +
                $SumatoriaIVArt03PROV02 +
                $SumatoriaIVArt04PROV02 +
                $SumatoriaIVArt05PROV02 +
                $SumatoriaIVArt06PROV02 +
                $SumatoriaIVArt07PROV02 +
                $SumatoriaIVArt08PROV02 +
                $SumatoriaIVArt09PROV02 +
                $SumatoriaIVArt10PROV02 +
                $SumatoriaIVArt11PROV02 +
                $SumatoriaIVArt12PROV02 +
                $SumatoriaIVArt13PROV02 +
                $SumatoriaIVArt14PROV02 ;



                $IVA03 =

                $SumatoriaIVArt01PROV03 +
                $SumatoriaIVArt02PROV03 +
                $SumatoriaIVArt03PROV03 +
                $SumatoriaIVArt04PROV03 +
                $SumatoriaIVArt05PROV03 +
                $SumatoriaIVArt06PROV03 +
                $SumatoriaIVArt07PROV03 +
                $SumatoriaIVArt08PROV03 +
                $SumatoriaIVArt09PROV03 +
                $SumatoriaIVArt10PROV03 +
                $SumatoriaIVArt11PROV03 +
                $SumatoriaIVArt12PROV03 +
                $SumatoriaIVArt13PROV03 +
                $SumatoriaIVArt14PROV03 ;











   ?>




  <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
  <!-- Generated by PHPExcel - http://www.phpexcel.net -->
  <html>
    <head>
  	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	  <meta name="author" content="Maritza" />
  	<style type="text/css">
  	  html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
  	  table { border-collapse:collapse; page-break-after:always }

  	  .b { text-align:center }
  	  .e { text-align:center }
  	  .f { text-align:right }
  	  .inlineStr { text-align:left }
  	  .n { text-align:right }
  	  .s { text-align:left }
  	  td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  td.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  th.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  td.style2 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  th.style2 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  td.style3 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  th.style3 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  td.style4 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
  	  th.style4 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
  	  td.style5 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
  	  th.style5 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
  	  td.style6 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  th.style6 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  td.style7 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  th.style7 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  td.style8 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  th.style8 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  td.style9 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
  	  th.style9 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
  	  td.style10 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  th.style10 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
  	  td.style11 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
  	  th.style11 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
  	  td.style12 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:white }
  	  th.style12 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:7pt; background-color:white }
  	  table.sheet0 col.col0 { width:42pt }
  	  table.sheet0 col.col1 { width:50pt }
  	  table.sheet0 col.col2 { width:50pt }
  	  table.sheet0 col.col3 { width:60pt }
  	  table.sheet0 col.col4 { width:98.95555442pt }
  	  table.sheet0 col.col5 { width:98.27777664999999pt }
  	  table.sheet0 col.col6 { width:31.17777742pt }
  	  table.sheet0 col.col7 { width:37.95555512pt }
  	  table.sheet0 col.col8 { width:23.72222195pt }
  	  table.sheet0 col.col9 { width:42pt }
  	  table.sheet0 tr { height:20pt }
        table.sheet0 tr.row7 { height:6pt }
        table.sheet0 tr.row8 { height:6pt }
        table.sheet0 tr.row9 { height:6pt }
        table.sheet0 tr.row10 { height:6pt }
        table.sheet0 tr.row11 { height:6pt }
        table.sheet0 tr.row12 { height:6pt }
        table.sheet0 tr.row13 { height:6pt }
        table.sheet0 tr.row14 { height:6pt }
        table.sheet0 tr.row15 { height:6pt }
        table.sheet0 tr.row16 { height:6pt }
        table.sheet0 tr.row17 { height:6pt }
        table.sheet0 tr.row18 { height:6pt }
        table.sheet0 tr.row19 { height:6pt }
        table.sheet0 tr.row20 { height:6pt }

  	  /* table.sheet0 tr.row6 { height:21pt }
  	  table.sheet0 tr.row10 { height:13pt }
  	  table.sheet0 tr.row11 { height:13pt }
  	  table.sheet0 tr.row13 { height:12pt }
  	  table.sheet0 tr.row15 { height:13pt }
  	  table.sheet0 tr.row16 { height:13pt }
  	  table.sheet0 tr.row17 { height:13pt }
  	  table.sheet0 tr.row19 { height:19pt }
  	  table.sheet0 tr.row21 { height:26pt }
  	  table.sheet0 tr.row22 { height:3pt }
  	  table.sheet0 tr.row23 { height:12pt } */
  	</style>
    </head>

    <body onload="window.print();">
  <style>
  @page { left-margin: 0.25in; right-margin: 0.25in; top-margin: 0.75in; bottom-margin: 0.75in; }
  body { left-margin: 0.25in; right-margin: 0.25in; top-margin: 0.75in; bottom-margin: 0.75in; }
  </style>
  	<table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
          <br>
  		<col class="col0">
  		<col class="col1">
  		<col class="col2">
  		<col class="col3">
  		<col class="col4">
  		<col class="col5">
  		<col class="col6">
  		<col class="col7">
  		<col class="col8">
  		<col class="col9">
  		<tbody>
  		  <tr class="row0">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3" colspan="3" style="    position: absolute; top: 90px; left: 200; color: black;">4400 FACULTAD DE INGENIERÍA</td>
  			<td class="column4">&nbsp;</td>
  			<td class="column5">&nbsp;</td>
  			<td class="column6">&nbsp;</td>
  			<td class="column7">&nbsp;</td>
  			<td class="column8">&nbsp;</td>
  			<td class="column9"></td>
  		  </tr>
  		  <tr class="row1">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp; </td>
  			<td class="column3">&nbsp;</td>
  			<td class="column4">&nbsp;</td>
  			<td class="column5">&nbsp;</td>
  			<td class="column6 style0 n"><?php echo $dia; ?></td>
  			<td class="column7 style0 n"> <?php echo $mes; ?></td>
  			<td class="column8">&nbsp;</td>
  			<td class="column9 style3 n"><?php echo $ano; ?></td>
  		  </tr>
  		  <tr class="row2">

  		  </tr>
  		  <tr class="row3">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3   "  colspan="3" style="    position: absolute; top: 115px; left: 200; color: black;"><?php echo $Departamento ?> </td>
  			<td class="column6">&nbsp;</td>
  			<td class="column7">&nbsp;</td>
  			<td class="column8">&nbsp;</td>
  			<td class="column9">&nbsp;</td>
  		  </tr>
  		  <tr class="row4">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 " colspan="2" style="font-size: 8px;"> <?php echo $Motivos ?> </td>
  			<td class="column5 style3 n" style="    position: absolute; top: 135px; left: 450px; color: black;" ><?php echo $Fondo ?></td>
  			<td class="column6 style3 n" style="    position: absolute; top: 135px; left: 520px; color: black;"><?php echo $Funcion ?></td>
  			<td class="column7 style3 n" style="    position: absolute; top: 135px; left: 570px; color: black;"><?php echo $Programa ?></td>
  			<td class="column8 style3 n" style="    position: absolute; top: 135px; left: 620px; color: black;"><?php echo $UPresupuestal ?></td>
  			<td class="column9 style3 n" style="    position: absolute; top: 135px; left: 690px; color: black;" ><?php echo $Cuenta ?></td>
  		  </tr>
  		  <tr class="row5">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style11 s style11" colspan="3"> - </td>
  			<td class="column6">&nbsp;</td>
  			<td class="column7">&nbsp;</td>
  			<td class="column8">&nbsp;</td>
  			<td class="column9">&nbsp;</td>
  		  </tr>

  		  </tr>

  		  <tr class="row7">
           <tr class="row7">
              <tr class="row7">
                 <tr class="row7">
                    <tr class="row7">
                       <tr class="row7">
                          <tr class="row7">


  			<td class="column0 style0 n"><?php if($Cantidad01 == 0 ) { } else { echo $SubCuenta01; } ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad01 == 0 ) { } else { echo $Cantidad01; } ?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php   if ($Cantidad01 == 0 ) { } else {  echo $Unidad01; }?></td>
  			<td class="column4  " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion01; ?></td>
  		  </tr>
  		  <tr class="row8">
  			<td class="column0 style0 n"><?php if($Cantidad02 == 0 ) { } else { echo $SubCuenta02; } ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad02 == 0 ) { } else { echo $Cantidad02; }?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php  if ($Cantidad02 == 0 ) { } else {  echo $Unidad02; } ?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion02; ?></td>
  		  </tr>
  		  <tr class="row9">
  			<td class="column0 style0 n"><?php if($Cantidad03 == 0 ) { } else { echo $SubCuenta03; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad03 == 0 ) { } else { echo $Cantidad03; }?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php  if ($Cantidad03 == 0 ) { } else {  echo $Unidad03; }?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion03; ?></td>
  		  </tr>
  		  <tr class="row10">
  			<td class="column0 style0 n"><?php if($Cantidad04 == 0 ) { } else { echo $SubCuenta04; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad04 == 0 ) { } else { echo $Cantidad04; } ?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php if ($Cantidad04 == 0 ) { } else {  echo $Unidad04; } ?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion04; ?></td>
  		  </tr>
  		  <tr class="row11">
  			<td class="column0 style0 n"><?php if($Cantidad05 == 0 ) { } else { echo $SubCuenta05; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad05 == 0 ) { } else { echo $Cantidad05; } ?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php  if ($Cantidad05 == 0 ) { } else {  echo $Unidad05; } ?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion05; ?></td>
  		  </tr>
  		  <tr class="row12">
  			<td class="column0 style0 n"><?php if($Cantidad06 == 0 ) { } else { echo $SubCuenta06; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad06 == 0 ) { } else { echo $Cantidad06; } ?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php  if ($Cantidad06 == 0 ) { } else {  echo $Unidad06; }?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion06; ?></td>
  		  </tr>
  		  <tr class="row13">
  			<td class="column0 style0 n"><?php if($Cantidad07 == 0 ) { } else { echo $SubCuenta07; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad07 == 0 ) { } else { echo $Cantidad07; }?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php  if ($Cantidad07 == 0 ) { } else {  echo $Unidad07; } ?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion07; ?></td>
  		  </tr>
  		  <tr class="row14">
  			<td class="column0 style0 n"><?php if($Cantidad08 == 0 ) { } else { echo $SubCuenta08; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad08 == 0 ) { } else { echo $Cantidad08; } ?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php  if ($Cantidad08 == 0 ) { } else {  echo $Unidad08; } ?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion08; ?></td>
  		  </tr>
  		  <tr class="row15">
  			<td class="column0 style0 n"><?php if($Cantidad09 == 0 ) { } else { echo $SubCuenta09; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad09 == 0 ) { } else { echo $Cantidad09; } ?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php  if ($Cantidad09 == 0 ) { } else {  echo $Unidad09; }?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion09; ?></td>
  		  </tr>
  		  <tr class="row16" style="bottom: 20px; ">
  			<td class="column0 style0 n"><?php if($Cantidad10 == 0 ) { } else { echo $SubCuenta10; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad10 == 0 ) { } else { echo $Cantidad10; } ?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php   if ($Cantidad10 == 0 ) { } else {  echo $Unidad10; } ?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion10; ?></td>
  		  </tr>
  		  <tr class="row17">
  			<td class="column0 style0 n"><?php if($Cantidad11 == 0 ) { } else { echo $SubCuenta11; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad11 == 0 ) { } else { echo $Cantidad11; } ?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php  if ($Cantidad11 == 0 ) { } else {  echo $Unidad11; } ?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion11; ?></td>
  		  </tr>
  		  <tr class="row18">
  			<td class="column0 style0 n"><?php if($Cantidad12 == 0 ) { } else { echo $SubCuenta12; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad12 == 0 ) { } else { echo $Cantidad12; }?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php  if ($Cantidad12 == 0 ) { } else {  echo $Unidad12; }?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion12; ?></td>
  		  </tr>
  		  <tr class="row19">
  			<td class="column0 style0 n"><?php if($Cantidad13 == 0 ) { } else { echo $SubCuenta13; }  ?></td>
  			<td class="column1 style2 n"><?php if($Cantidad13 == 0 ) { } else { echo $Cantidad13; } ?></td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s"><?php  if ($Cantidad13 == 0 ) { } else {  echo $Unidad13; } ?></td>
  			<td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion13; ?></td>
  		  </tr>
      </tr>
      <tr class="row20">
      <td class="column0 style0 n"><?php if($Cantidad14 == 0 ) { } else { echo $SubCuenta14;} ?></td>
      <td class="column1 style2 n"><?php if($Cantidad14 == 0 ) { } else { echo $Cantidad14; } ?></td>
      <td class="column2">&nbsp;</td>
      <td class="column3 style1 s"><?php if ($Cantidad14 == 0 ) { } else {  echo $Unidad14; } ?></td>
      <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion14; ?></td>
      </tr>
    </tr>
    <tr class="row20">
    <td class="column0 style0 n"><?php if($Cantidad15 == 0 ) { } else { echo $SubCuenta15;} ?></td>
    <td class="column1 style2 n"><?php if($Cantidad15 == 0 ) { } else { echo $Cantidad15; } ?></td>
    <td class="column2">&nbsp;</td>
    <td class="column3 style1 s"><?php if ($Cantidad15 == 0 ) { } else {  echo $Unidad15; } ?></td>
    <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion15; ?></td>
    </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad16 == 0 ) { } else { echo $SubCuenta16;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad16 == 0 ) { } else { echo $Cantidad16; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad16 == 0 ) { } else {  echo $Unidad16; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion16; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad17 == 0 ) { } else { echo $SubCuenta17;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad17 == 0 ) { } else { echo $Cantidad17; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad17 == 0 ) { } else {  echo $Unidad17; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion17; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad18 == 0 ) { } else { echo $SubCuenta18;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad18 == 0 ) { } else { echo $Cantidad18; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad18 == 0 ) { } else {  echo $Unidad18; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion18; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad19 == 0 ) { } else { echo $SubCuenta19;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad19 == 0 ) { } else { echo $Cantidad19; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad19 == 0 ) { } else {  echo $Unidad19; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion19; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad20 == 0 ) { } else { echo $SubCuenta20;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad20 == 0 ) { } else { echo $Cantidad20; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad20 == 0 ) { } else {  echo $Unidad20; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion20; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad21 == 0 ) { } else { echo $SubCuenta21;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad21 == 0 ) { } else { echo $Cantidad21; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad21 == 0 ) { } else {  echo $Unidad21; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion21; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad22 == 0 ) { } else { echo $SubCuenta22;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad22 == 0 ) { } else { echo $Cantidad22; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad22 == 0 ) { } else {  echo $Unidad22; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion22; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad23 == 0 ) { } else { echo $SubCuenta23;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad23 == 0 ) { } else { echo $Cantidad23; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad23 == 0 ) { } else {  echo $Unidad23; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion23; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad24 == 0 ) { } else { echo $SubCuenta24;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad24 == 0 ) { } else { echo $Cantidad24; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad24 == 0 ) { } else {  echo $Unidad24; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion24; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad25 == 0 ) { } else { echo $SubCuenta25;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad25 == 0 ) { } else { echo $Cantidad25; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad25 == 0 ) { } else {  echo $Unidad25; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion25; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad26 == 0 ) { } else { echo $SubCuenta26;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad26 == 0 ) { } else { echo $Cantidad26; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad26 == 0 ) { } else {  echo $Unidad26; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion26; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad27 == 0 ) { } else { echo $SubCuenta27;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad27 == 0 ) { } else { echo $Cantidad27; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad27 == 0 ) { } else {  echo $Unidad27; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion27; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad28 == 0 ) { } else { echo $SubCuenta28;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad28 == 0 ) { } else { echo $Cantidad28; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad28 == 0 ) { } else {  echo $Unidad28; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion28; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad29 == 0 ) { } else { echo $SubCuenta29;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad29 == 0 ) { } else { echo $Cantidad29; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad29 == 0 ) { } else {  echo $Unidad29; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion29; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad30 == 0 ) { } else { echo $SubCuenta30;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad30 == 0 ) { } else { echo $Cantidad30; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad30 == 0 ) { } else {  echo $Unidad30; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion30; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad31 == 0 ) { } else { echo $SubCuenta31;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad31 == 0 ) { } else { echo $Cantidad31; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad31 == 0 ) { } else {  echo $Unidad31; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion31; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad32 == 0 ) { } else { echo $SubCuenta32;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad32 == 0 ) { } else { echo $Cantidad32; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad32 == 0 ) { } else {  echo $Unidad32; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion32; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad33 == 0 ) { } else { echo $SubCuenta33;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad33 == 0 ) { } else { echo $Cantidad33; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad33 == 0 ) { } else {  echo $Unidad33; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion33; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad34 == 0 ) { } else { echo $SubCuenta34;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad34 == 0 ) { } else { echo $Cantidad34; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad34 == 0 ) { } else {  echo $Unidad34; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion34; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad35 == 0 ) { } else { echo $SubCuenta35;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad35 == 0 ) { } else { echo $Cantidad35; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad35 == 0 ) { } else {  echo $Unidad35; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion35; ?></td>
  </tr>
  </tr>
  <tr class="row20">
  <td class="column0 style0 n"><?php if($Cantidad36 == 0 ) { } else { echo $SubCuenta36;} ?></td>
  <td class="column1 style2 n"><?php if($Cantidad36 == 0 ) { } else { echo $Cantidad36; } ?></td>
  <td class="column2">&nbsp;</td>
  <td class="column3 style1 s"><?php if ($Cantidad36 == 0 ) { } else {  echo $Unidad36; } ?></td>
  <td class="column4 " colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Descripcion36; ?></td>
  </tr>


  		  <!-- <tr class="row20" >
  			<td class="column0 style0 n">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3">&nbsp;</td>
  			<td class="column4">&nbsp;</td>
  			<td class="column5">&nbsp;</td>
  			<td class="column6">&nbsp;</td>
  			<td class="column7">&nbsp;</td>
  			<td class="column8">&nbsp;</td>
  			<td class="column9">&nbsp;</td>
  		  </tr> -->
  		  <!-- <tr class="row21">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3">&nbsp;</td>
  			<td class="column4">&nbsp;</td>
  			<td class="column5">&nbsp;</td>
  			<td class="column6">&nbsp;</td>
  			<td class="column7">&nbsp;</td>
  			<td class="column8">&nbsp;</td>
  			<td class="column9">&nbsp;</td>
  		  </tr> -->


        <?php

        switch ($NombreUsuario) {
          case 'lrvaldez':
              $NombreRealizo = 'ING. LUIS  VALDEZ S.';
            break;

            case 'mfloresd':
              $NombreRealizo = 'M.A. MARITZA FLORES DÍAZ DE LEÓN';
                // $Firma = "maritza-firma02.png";
              break;

              case 'raramire':
              $NombreRealizo = 'M.A. ROCÍO ALEJANDRA RAMÍREZ LIRA';
                // $Firma = "rocio-firma01.png";
                break;

                case 'oaperez':
                $NombreRealizo = 'M.A. OSKAR ARTURO PÉREZ OCHOA';
                  break;

                  case 'ciaguilar':
                  $NombreRealizo = 'LIC. CLAUDIA AGUILAR';
                    break;





              default:
                  $NombreRealizo = 'INDEFINIDO';
                break;
            }



         ?>


  			<td class="column3 style9 s style9"  style=" position: absolute; top: 870px;  left: 230px; "colspan="3"><?php echo $NombreRealizo; ?>   </td>

        <style media="screen">
        .midiv {
        word-wrap: break-word;
        max-width:500px;
        width:500px;
        font-family: Arial, Helvetica, sans-serif;
        font-size:13px;
        left:20px;
        }
        </style>



  			<td class="column4 style9 s style9" colspan="3" style="position: absolute; top:870px; left:380px;">M.I. LETICIA MENDEZ MARISCAL </td>
  			<td class="column7 style9 s style9" colspan="4"  style="position: absolute; top:870px; left: 555px; "> </td>
  			<td class="column8 style6 null"></td>
  			<td class="column9 style5 null"></td>
  		  </tr>
  		  <tr class="row24">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 midiv"  colspan="1"  style="position: absolute; top:650px; left: 280px; display:none;"> Observaciones: <br> <?php echo $Observaciones01; ?></td>
  			<td class="column4">&nbsp;</td>
  			<td class="column5">&nbsp;</td>
  			<td class="column6" style="position: absolute; top:950px; left: 50px;"> Req. <?php echo $Folio; ?></td>
  			<td class="column7 style4 null" style="position: absolute; top:750px; left:60px;  font-size: 15px;" ></td>
        <?php

        $Total01 = ($IVA01 + $Subtotal01);
            if ($Total01 != 0)
            {
              echo '<td class="column8" style="position: absolute; top:750px; left:300px;" >Presupuesto máximo autorizado Neto '.formatDollars($Total01).'</td>';
            }

         ?>


  			<td class="column9 style4 null"></td>
  		  </tr>
  		</tbody>




  	</table>
    </body>
    <img src="<?php echo $Firma; ?>" alt="" style=" position: absolute; top: 480px; left: 260px; color: black; height: 5%;">
  </html>


  <?php  ?>
