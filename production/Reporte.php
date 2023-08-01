<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';

date_default_timezone_set('America/Chihuahua');

function money_format($format, $number)
{
    $regex  = '/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?'.
              '(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/';
    if (setlocale(LC_MONETARY, 0) == 'C') {
        setlocale(LC_MONETARY, '');
    }
    $locale = localeconv();
    preg_match_all($regex, $format, $matches, PREG_SET_ORDER);
    foreach ($matches as $fmatch) {
        $value = floatval($number);
        $flags = array(
            'fillchar'  => preg_match('/\=(.)/', $fmatch[1], $match) ?
                           $match[1] : ' ',
            'nogroup'   => preg_match('/\^/', $fmatch[1]) > 0,
            'usesignal' => preg_match('/\+|\(/', $fmatch[1], $match) ?
                           $match[0] : '+',
            'nosimbol'  => preg_match('/\!/', $fmatch[1]) > 0,
            'isleft'    => preg_match('/\-/', $fmatch[1]) > 0
        );
        $width      = trim($fmatch[2]) ? (int)$fmatch[2] : 0;
        $left       = trim($fmatch[3]) ? (int)$fmatch[3] : 0;
        $right      = trim($fmatch[4]) ? (int)$fmatch[4] : $locale['int_frac_digits'];
        $conversion = $fmatch[5];

        $positive = true;
        if ($value < 0) {
            $positive = false;
            $value  *= -1;
        }
        $letter = $positive ? 'p' : 'n';

        $prefix = $suffix = $cprefix = $csuffix = $signal = '';

        $signal = $positive ? $locale['positive_sign'] : $locale['negative_sign'];
        switch (true) {
            case $locale["{$letter}_sign_posn"] == 1 && $flags['usesignal'] == '+':
                $prefix = $signal;
                break;
            case $locale["{$letter}_sign_posn"] == 2 && $flags['usesignal'] == '+':
                $suffix = $signal;
                break;
            case $locale["{$letter}_sign_posn"] == 3 && $flags['usesignal'] == '+':
                $cprefix = $signal;
                break;
            case $locale["{$letter}_sign_posn"] == 4 && $flags['usesignal'] == '+':
                $csuffix = $signal;
                break;
            case $flags['usesignal'] == '(':
            case $locale["{$letter}_sign_posn"] == 0:
                $prefix = '(';
                $suffix = ')';
                break;
        }
        if (!$flags['nosimbol']) {
            $currency = $cprefix .
                        ($conversion == 'i' ? $locale['int_curr_symbol'] : $locale['currency_symbol']) .
                        $csuffix;
        } else {
            $currency = '';
        }
        $space  = $locale["{$letter}_sep_by_space"] ? ' ' : '';

        $value = number_format($value, $right, $locale['mon_decimal_point'],
                 $flags['nogroup'] ? '' : $locale['mon_thousands_sep']);
        $value = @explode($locale['mon_decimal_point'], $value);

        $n = strlen($prefix) + strlen($currency) + strlen($value[0]);
        if ($left > 0 && $left > $n) {
            $value[0] = str_repeat($flags['fillchar'], $left - $n) . $value[0];
        }
        $value = implode($locale['mon_decimal_point'], $value);
        if ($locale["{$letter}_cs_precedes"]) {
            $value = $prefix . $currency . $space . $value . $suffix;
        } else {
            $value = $prefix . $value . $space . $currency . $suffix;
        }
        if ($width > 0) {
            $value = str_pad($value, $width, $flags['fillchar'], $flags['isleft'] ?
                     STR_PAD_RIGHT : STR_PAD_LEFT);
        }

        $format = str_replace($fmatch[0], $value, $format);
    }
    return $format;
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



 $sql = 'SELECT *, b.Descripcion AS Departamento FROM Requi a INNER JOIN CatcUnidades b on a.IdUnidad = b.IdUnidad INNER JOIN MovcRequis c on a.Folio = c.Folio WHERE a.IdRequi = '.$IdRequi.' ';
 $resultado = $conexion->query($sql);

 while ($row = $resultado->fetch_assoc() )
  {

    $IdRequi = $row['IdRequi'];
    $Folio = $row['Folio'];
    $IdUnidad = $row['IdUnidad'];
    $Departamento = $row['Departamento'];
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




                $TiempoEntrega01 = $row['TiempoEntrega01'];
                $TiempoEntrega02 = $row['TiempoEntrega02'];
                $TiempoEntrega03 = $row['TiempoEntrega03'];
                $ObservacionesCotizacion = $row['ObservacionesCotizacion'];



                  $Garantia01 = $row['Garantia01'];
                  $Garantia02 = $row['Garantia02'];
                  $Garantia03 = $row['Garantia03'];





     }


  ?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
  <!-- Generated by PHPExcel - http://www.phpexcel.net -->
  <html>
    <head>
  	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	  <meta name="author" content="Julian" />
  	  <meta name="company" content="Rectoria" />
  	<style type="text/css">
  	  html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
  	  table { border-collapse:collapse; page-break-after:always }
  	  /* .gridlines td { border:1px dotted black } */
  	  .gridlines th { border:1px dotted black }
  	  .b { text-align:center }
  	  .e { text-align:center }
  	  .f { text-align:right }
  	  .inlineStr { text-align:left }
  	  .n { text-align:right }
  	  .s { text-align:left }
  	  td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
  	  th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
  	  td.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style2 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style2 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style4 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style4 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style5 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style5 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style6 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style6 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style7 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style7 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style8 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style8 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style9 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style9 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style10 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style10 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style11 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style11 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style12 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style12 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style14 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style14 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style15 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style15 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style16 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
  	  th.style16 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
  	  td.style17 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style17 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style18 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
  	  th.style18 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
  	  td.style19 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style19 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style20 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style20 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style21 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style21 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style22 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial Narrow'; font-size:8pt; background-color:#FFFFFF }
  	  th.style22 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial Narrow'; font-size:8pt; background-color:#FFFFFF }
  	  td.style23 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style23 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style24 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style24 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style25 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style25 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style26 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style26 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style27 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style27 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style28 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style28 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style29 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:6pt; background-color:#CCFFFF }
  	  th.style29 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:6pt; background-color:#CCFFFF }
  	  td.style30 { vertical-align:bottom; text-align:center; padding-center:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style30 { vertical-align:bottom; text-align:center; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style31 { vertical-align:bottom; text-align:center; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style31 { vertical-align:bottom; text-align:center; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style32 { vertical-align:bottom; text-align:center; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style32 { vertical-align:bottom; text-align:center; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style33 { vertical-align:bottom; text-align:center; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style33 { vertical-align:bottom; text-align:center; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style34 { vertical-align:bottom; text-align:center; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style34 { vertical-align:bottom; text-align:center; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style35 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style35 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style36 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style36 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style37 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style37 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style38 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style38 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style39 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style39 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style40 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style40 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style41 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style41 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style42 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style42 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style43 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style43 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style44 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style44 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style45 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style45 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style46 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style46 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style47 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style47 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style48 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style48 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style49 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style49 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style50 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style50 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style51 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style51 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style52 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style52 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style53 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style53 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style54 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style54 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style55 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style55 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style56 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style56 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style57 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style57 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style58 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style58 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style59 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style59 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style60 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style60 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style61 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  th.style61 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:#CCFFFF }
  	  td.style62 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style62 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style63 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style63 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style64 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style64 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style65 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style65 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style66 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style66 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style67 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style67 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style68 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style68 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style69 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style69 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style70 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style70 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style71 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style71 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style72 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style72 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style73 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style73 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style74 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style74 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style75 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style75 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style76 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style76 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style77 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style77 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  td.style78 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  th.style78 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial Narrow'; font-size:8pt; background-color:white }
  	  table.sheet0 col.col0 { width:21.68888864pt }
  	  table.sheet0 col.col1 { width:127.42222076pt }
  	  table.sheet0 col.col2 { width:46.08888836pt }
  	  table.sheet0 col.col3 { width:59.64444375999999pt }
  	  table.sheet0 col.col4 { width:42.02222174pt }
  	  table.sheet0 col.col5 { width:45.41111059pt }
  	  table.sheet0 col.col6 { width:42.69999951pt }
  	  table.sheet0 col.col7 { width:56.25555490999999pt }
  	  table.sheet0 tr { height:12.75pt }
  	  table.sheet0 tr.row8 { height:14pt }
  	  table.sheet0 tr.row9 { height:14pt }
  	  table.sheet0 tr.row11 { height:14pt }
  	  table.sheet0 tr.row12 { height:14pt }
  	  table.sheet0 tr.row27 { height:14pt }
  	  table.sheet0 tr.row31 { height:14pt }
  	  table.sheet0 tr.row32 { height:14pt }
  	  table.sheet0 tr.row33 { height:14pt }
  	  table.sheet0 tr.row34 { height:14pt }
  	  table.sheet0 tr.row35 { height:14pt }
  	  table.sheet0 tr.row36 { height:14pt }
  	  table.sheet0 tr.row37 { height:14pt }
  	  table.sheet0 tr.row41 { height:14pt }
  	  table.sheet0 tr.row42 { height:14pt }
  	  table.sheet0 tr.row43 { height:14pt }
  	</style>
    </head>

    <body onload="window.print();">
  <style>
  @page { left-margin: 0.1968503937007874in; right-margin: 0.1968503937007874in; top-margin: 0.3937007874015748in; bottom-margin: 0.3937007874015748in; }
  body { left-margin: 0.1968503937007874in; right-margin: 0.1968503937007874in; top-margin: 0.3937007874015748in; bottom-margin: 0.3937007874015748in; }
  </style>
  	<table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
  		<col class="col0">
  		<col class="col1">
  		<col class="col2">
  		<col class="col3">
  		<col class="col4">
  		<col class="col5">
  		<col class="col6">
  		<col class="col7">
  		<tbody>
  		  <tr class="row0">
  			<td class="column0 style18 null"></td>
  			<td class="column1 style0 null">
  <div style="position: relative;"><img style="position: absolute; z-index: 1; left: 75px; top: 2px; width: 79px; height: 80px;" src="uach.png" border="0" /></div></td>

  		  </tr>
  		  <tr class="row1">

  		  </tr>
  		  <tr class="row2">

  		  </tr>
  		  <tr class="row3">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


        <?php






$miFecha= gmmktime(12,0,0,1,15,2089);

setlocale(LC_TIME, 'es_ES.UTF-8');


date_default_timezone_set ('America/Chihuahua');


// echo 'Ahora fecha actual es: '.strftime("%A, %d de %B de %Y %H:%M").'<br/>';

$mes = strftime("%B");
$ano = strftime("%Y");
$dia = strftime("%d");



          ?>




  			<td class="column7">&nbsp;</td>
  		  </tr>
  		  <tr class="row4">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3 style1 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHIHUAHUA, CHIH; A <?php echo $dia;?> DE <?php echo strtoupper($mes); ?> DEL <?php echo $ano; ?></td>

  			<td class="column7">&nbsp;</td>
  		  </tr>
  		  <tr class="row5">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2">&nbsp;</td>
  			<td class="column3">&nbsp;</td>
  			<td class="column4 style1 null"></td>
  			<td class="column5 style1 null"></td>
  			<td class="column6 style1 null"></td>
  			<td class="column7 style1 null"></td>
  		  </tr>
  		  <tr class="row6">
  			<td class="column0 style74 s style75" colspan="2">REQUISICIÓN U.C:  <?php echo $FolioAdqui?></td>
  			<td class="column2 style1 null"></td>
  			<td class="column3 style1 null"></td>
  			<td class="column4">&nbsp;</td>
  			<td class="column5">&nbsp;</td>
  			<td class="column6 style1 s">HOJA   1  DE 1</td>
  			<td class="column7">&nbsp;</td>
  		  </tr>
  		  <tr class="row7">
  			<td class="column0 style74 s style75" colspan="2">No. DE SOLICITUD: </td>
  			<td class="column2 style1 null"></td>
  			<td class="column3 style1 null"></td>
  			<td class="column4">&nbsp;</td>
  			<td class="column5">&nbsp;</td>
  			<td class="column6">&nbsp;</td>
  			<td class="column7">&nbsp;</td>
  		  </tr>
        <!-- <tr class="row7">
        <td class="column0 style74 s style75" colspan="2">No. DE REQUISICIÓN INTERNA: <?php echo $Folio?></td>
        <td class="column2 style1 null"></td>
        <td class="column3 style1 null"></td>
        <td class="column4">&nbsp;</td>
        <td class="column5">&nbsp;</td>
        <td class="column6">&nbsp;</td>
        <td class="column7">&nbsp;</td>
        </tr> -->
  		  <tr class="row8">
  			<td class="column0">&nbsp;</td>
  			<td class="column1">&nbsp;</td>
  			<td class="column2 style1 null"></td>
  			<td class="column3 style1 null"></td>
  			<td class="column4 style1 null"></td>
  			<td class="column5 style1 null"></td>
  			<td class="column6">&nbsp;</td>
  			<td class="column7">&nbsp;</td>
  		  </tr>
  		  <tr class="row9">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style1 null"></td>
  			<td class="column2 style55 s style56" colspan="2">PROVEEDOR 1</td>
  			<td class="column4 style55 s style56" colspan="2">PROVEEDOR 2</td>
  			<td class="column6 style55 s style56" colspan="2">PROVEEDOR 3</td>
  		  </tr>
  		  <tr class="row10">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style1 null"></td>
  			<td class="column2 style3 s">NOMBRE: <?php echo $NomProveedor01; ?> </td>
  			<td class="column3 style23 null"></td>
  			<td class="column4 style3 s">NOMBRE: <?php echo $NomProveedor02; ?> </td>
  			<td class="column5 style23 null"></td>
  			<td class="column6 style3 s">NOMBRE: <?php echo $NomProveedor03; ?></td>
  			<td class="column7 style23 null"></td>
  		  </tr>
  		  <tr class="row11">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style1 null"></td>
  			<td class="column2 style4 s">No. PROV.:</td>
  			<td class="column3 style24 n"><?php echo $NumProveedor01; ?> </td>
  			<td class="column4 style4 s">No. PROV.:</td>
  			<td class="column5 style24 n"><?php echo $NumProveedor02; ?> </td>
  			<td class="column6 style4 s">No. PROV.:</td>
  			<td class="column7 style24 n"><?php echo $NumProveedor03; ?> </td>
  		  </tr>
  		  <tr class="row12">
  			<td class="column0 style8 s">CANT.</td>
  			<td class="column1 style8 s">DESCRIPCIÓN</td>
  			<td class="column2 style9 s">P. UNIT.</td>
  			<td class="column3 style10 s">SUBTOTAL</td>
  			<td class="column4 style9 s">P. UNIT.</td>
  			<td class="column5 style10 s">SUBTOTAL</td>
  			<td class="column6 style9 s">P. UNIT.</td>
  			<td class="column7 style10 s">SUBTOTAL</td>
  		  </tr>
  		  <tr class="row13">
  			<td class="column0 style7 n"> <?php echo $Cantidad01; ?></td>
  			<td class="column1 style25 s"><?php echo $Descripcion01; ?></td>
  			<td class="column2 style30 s">$<?php echo $PrecioArt01Prov01;   ?> </td>
  			<td class="column3 style31 f">$<?php echo $Cantidad01 * $PrecioArt01Prov01?></td>
  			<td class="column4 style30 n">$<?php echo $PrecioArt01Prov02?></td>
  			<td class="column5 style31 f">$<?php echo $Cantidad01 * $PrecioArt01Prov02?></td>
  			<td class="column6 style30 n">$<?php echo $PrecioArt01Prov03?></td>
  			<td class="column7 style31 f">$<?php echo $Cantidad01 * $PrecioArt01Prov03?></td>
  		  </tr>
  		  <tr class="row14">
  			<td class="column0 style7 n"> <?php echo $Cantidad02; ?></td>
  			<td class="column1 style25 s"><?php echo $Descripcion02; ?></td>
  			<td class="column2 style30 n">$ <?php echo $PrecioArt02Prov01;   ?></td>
  			<td class="column3 style31 f">$ <?php echo $Cantidad02 * $PrecioArt02Prov01?></td>
  			<td class="column4 style30 n">$ <?php echo $PrecioArt02Prov02?></td>
  			<td class="column5 style31 f">$<?php echo $Cantidad02 * $PrecioArt02Prov02?></td>
  			<td class="column6 style30 n">$<?php echo $PrecioArt02Prov03?></td>
  			<td class="column7 style31 f">$ <?php echo $Cantidad02 * $PrecioArt02Prov03?></td>
  		  </tr>
  		  <tr class="row15">
  			<td class="column0 style7 n"><?php echo $Cantidad03; ?></td>
  			<td class="column1 style25 s"><?php echo $Descripcion03; ?></td>
  			<td class="column2 style30 n">$ <?php echo $PrecioArt03Prov01;   ?></td>
  			<td class="column3 style31 f">$ <?php echo $Cantidad03 * $PrecioArt03Prov01?></td>
  			<td class="column4 style30 n">$ <?php echo $PrecioArt03Prov02?></td>
  			<td class="column5 style31 f">$ <?php echo $Cantidad03 * $PrecioArt03Prov02?></td>
  			<td class="column6 style30 n">$<?php echo $PrecioArt03Prov03?></td>
  			<td class="column7 style31 f">$ <?php echo $Cantidad03 * $PrecioArt03Prov03?></td>
  		  </tr>
  		  <tr class="row16">
  			<td class="column0 style7 n"><?php echo $Cantidad04; ?></td>
  			<td class="column1 style25 s"><?php echo $Descripcion04; ?></td>
  			<td class="column2 style30 n">$ <?php echo $PrecioArt04Prov01;   ?></td>
  			<td class="column3 style31 f">$ <?php echo $Cantidad04 * $PrecioArt04Prov01?></td>
  			<td class="column4 style30 n">$<?php echo $PrecioArt04Prov02?></td>
  			<td class="column5 style31 f">$ <?php echo $Cantidad04 * $PrecioArt04Prov02?></td>
  			<td class="column6 style30 n">$<?php echo $PrecioArt04Prov03?></td>
  			<td class="column7 style31 f">$ <?php echo $Cantidad04 * $PrecioArt04Prov03?></td>
  		  </tr>
  		  <tr class="row17">
  			<td class="column0 style7 n"><?php echo $Cantidad05; ?></td>
  			<td class="column1 style25 s"><?php echo $Descripcion05; ?></td>
  			<td class="column2 style30 n">$ <?php echo $PrecioArt05Prov01;   ?></td>
  			<td class="column3 style31 f">$<?php echo $Cantidad05 * $PrecioArt05Prov01?></td>
  			<td class="column4 style30 n">$<?php echo $PrecioArt05Prov02?></td>
  			<td class="column5 style31 f">$ <?php echo $Cantidad05 * $PrecioArt05Prov02?></td>
  			<td class="column6 style30 n">$ <?php echo $PrecioArt05Prov03?></td>
  			<td class="column7 style31 f">$ <?php echo $Cantidad05 * $PrecioArt05Prov03?></td>
  		  </tr>
  		  <tr class="row18">
  			<td class="column0 style7 n"><?php echo $Cantidad06; ?></td>
  			<td class="column1 style25 s"><?php echo $Descripcion06; ?></td>
  			<td class="column2 style30 n">$ <?php echo $PrecioArt06Prov01;   ?></td>
  			<td class="column3 style31 f">$ <?php echo $Cantidad06 * $PrecioArt06Prov01?></td>
  			<td class="column4 style30 n">$ <?php echo $PrecioArt06Prov02?></td>
  			<td class="column5 style31 f">$ <?php echo $Cantidad06 * $PrecioArt06Prov02?></td>
  			<td class="column6 style30 n">$ <?php echo $PrecioArt06Prov03?></td>
  			<td class="column7 style31 f">$ <?php echo $Cantidad06 * $PrecioArt06Prov03?></td>
  		  </tr>
  		  <tr class="row19">
  			<td class="column0 style7 n"><?php echo $Cantidad07; ?></td>
  			<td class="column1 style25 s"><?php echo $Descripcion07; ?></td>
  			<td class="column2 style30 n">$ <?php echo $PrecioArt07Prov01;   ?></td>
  			<td class="column3 style31 f">$ <?php echo $Cantidad07 * $PrecioArt07Prov01?></td>
  			<td class="column4 style30 n">$ <?php echo $PrecioArt07Prov02?></td>
  			<td class="column5 style31 f">$ <?php echo $Cantidad07 * $PrecioArt07Prov02?></td>
  			<td class="column6 style30 n">$ <?php echo $PrecioArt07Prov03?></td>
  			<td class="column7 style31 f">$ <?php echo $Cantidad07 * $PrecioArt07Prov03?></td>
  		  </tr>
  		  <tr class="row20">
  			<td class="column0 style5 n"><?php echo $Cantidad08; ?></td>
  			<td class="column1 style26 s"><?php echo $Descripcion08; ?></td>
  			<td class="column2 style32 n">$ <?php echo $PrecioArt08Prov01;   ?></td>
  			<td class="column3 style31 f">$ <?php echo $Cantidad08 * $PrecioArt08Prov01?></td>
  			<td class="column4 style32 n">$ <?php echo $PrecioArt08Prov02?></td>
  			<td class="column5 style31 f">$ <?php echo $Cantidad08 * $PrecioArt08Prov02?></td>
  			<td class="column6 style32 n">$ <?php echo $PrecioArt08Prov03?></td>
  			<td class="column7 style31 f">$ <?php echo $Cantidad08 * $PrecioArt08Prov03?></td>
  		  </tr>
  		  <tr class="row21">
  			<td class="column0 style27 n"><?php echo $Cantidad09; ?></td>
  			<td class="column1 style28 s"><?php echo $Descripcion09; ?></td>
  			<td class="column2 style33 n">$ <?php echo $PrecioArt09Prov01;   ?></td>
  			<td class="column3 style31 f">$ <?php echo $Cantidad09 * $PrecioArt09Prov01?></td>
  			<td class="column4 style34 n">$ <?php echo $PrecioArt09Prov02?></td>
  			<td class="column5 style31 f">$ <?php echo $Cantidad09 * $PrecioArt09Prov02?></td>
  			<td class="column6 style33 n">$ <?php echo $PrecioArt09Prov03?></td>
  			<td class="column7 style31 f">$  <?php echo $Cantidad09 * $PrecioArt09Prov03?></td>
  		  </tr>
  		  <tr class="row22">
  			<td class="column0 style27 n"><?php echo $Cantidad10; ?></td>
  			<td class="column1 style28 s"><?php echo $Descripcion10; ?></td>
  			<td class="column2 style33 n">$ <?php echo $PrecioArt10Prov01;   ?></td>
  			<td class="column3 style31 f">$ <?php echo $Cantidad10 * $PrecioArt10Prov01?></td>
  			<td class="column4 style34 n">$ <?php echo $PrecioArt10Prov02?></td>
  			<td class="column5 style31 f">$ <?php echo $Cantidad10 * $PrecioArt10Prov02?></td>
  			<td class="column6 style33 n">$ <?php echo $PrecioArt10Prov03?></td>
  			<td class="column7 style31 f">$ <?php echo $Cantidad10 * $PrecioArt10Prov03?></td>
  		  </tr>
  		  <tr class="row23">
  			<td class="column0 style27 n"><?php echo $Cantidad11; ?></td>
  			<td class="column1 style28 s"><?php echo $Descripcion11; ?></td>
  			<td class="column2 style33 n">$ <?php echo $PrecioArt11Prov01;   ?></td>
  			<td class="column3 style31 f">$ <?php echo $Cantidad11 * $PrecioArt11Prov01?></td>
  			<td class="column4 style34 n">$ <?php echo $PrecioArt11Prov02?></td>
  			<td class="column5 style31 f">$ <?php echo $Cantidad11 * $PrecioArt11Prov02?></td>
  			<td class="column6 style33 n">$ <?php echo $PrecioArt11Prov03?></td>
  			<td class="column7 style31 f">$ <?php echo $Cantidad11 * $PrecioArt11Prov03?></td>
  		  </tr>
  		  <tr class="row24">
  			<td class="column0 style27 n"><?php echo $Cantidad12; ?></td>
  			<td class="column1 style28 s"><?php echo $Descripcion12; ?></td>
  			<td class="column2 style33 null">$<?php echo $PrecioArt12Prov01;   ?></td>
  			<td class="column3 style31 null">$ <?php echo $Cantidad12 * $PrecioArt12Prov01?></td>
  			<td class="column4 style34 null">$ <?php echo $PrecioArt12Prov02?></td>
  			<td class="column5 style31 null">$ <?php echo $Cantidad12 * $PrecioArt12Prov02?></td>
  			<td class="column6 style33 null">$ <?php echo $PrecioArt12Prov03?></td>
  			<td class="column7 style31 null">$ <?php echo $Cantidad12 * $PrecioArt12Prov03?></td>
  		  </tr>
  		  <tr class="row25">
  			<td class="column0 style27 n"><?php echo $Cantidad13; ?></td>
  			<td class="column1 style28 s"><?php echo $Descripcion13; ?></td>
  			<td class="column2 style33 null">$<?php echo $PrecioArt13Prov01;   ?></td>
  			<td class="column3 style31 null">$ <?php echo $Cantidad13 * $PrecioArt13Prov01?></td>
  			<td class="column4 style34 null">$ <?php echo $PrecioArt13Prov02?></td>
  			<td class="column5 style31 null">$ <?php echo $Cantidad13 * $PrecioArt13Prov02?></td>
  			<td class="column6 style33 null">$ <?php echo $PrecioArt13Prov03?></td>
  			<td class="column7 style31 null">$ <?php echo $Cantidad13 * $PrecioArt13Prov03?></td>
  		  </tr>
  		  <tr class="row26">
  			<td class="column0 style27 n"><?php echo $Cantidad14; ?></td>
  			<td class="column1 style28 s"><?php echo $Descripcion14; ?></td>
  			<td class="column2 style33 n">$ <?php echo $PrecioArt14Prov01;   ?></td>
  			<td class="column3 style31 f">$ <?php echo $Cantidad14 * $PrecioArt14Prov01?></td>
  			<td class="column4 style34 n">$ <?php echo $PrecioArt14Prov02?></td>
  			<td class="column5 style31 f">$ <?php echo $Cantidad14 * $PrecioArt14Prov02?></td>
  			<td class="column6 style33 n">$ <?php echo $PrecioArt14Prov03?></td>
  			<td class="column7 style31 f">$ <?php echo $Cantidad14 * $PrecioArt14Prov03?></td>
  		  </tr>
  		  <tr class="row27">
  			<td class="column0 style6 null"></td>
  			<td class="column1 style11 null"></td>
  			<td class="column2 style35 null"></td>
  			<td class="column3 style36 null"></td>
  			<td class="column4 style35 null"></td>
  			<td class="column5 style36 null"></td>
  			<td class="column6 style35 null"></td>
  			<td class="column7 style36 null"></td>
  		  </tr>


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
  		  <tr class="row28">
  			<td class="column0 style22 null"></td>
  			<td class="column1 style19 s">SUBTOTAL</td>
  			<td class="column2 style37 null"></td>
  			<td class="column3 style38 f"> <?php setlocale(LC_MONETARY, 'en_US.UTF-8'); echo money_format('%.2n', $Subtotal01); ?> </td>
  			<td class="column4 style37 null"></td>
  			<td class="column5 style39 f"> <?php setlocale(LC_MONETARY, 'en_US.UTF-8'); echo money_format('%.2n', $Subtotal02); ?></td>
  			<td class="column6 style40 null"></td>
  			<td class="column7 style39 f"> <?php setlocale(LC_MONETARY, 'en_US.UTF-8'); echo money_format('%.2n', $Subtotal03); ?></td>
  		  </tr>
  		  <tr class="row29">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style20 s">IVA</td>
  			<td class="column2 style41 null"></td>
  			<td class="column3 style42 f"> <?php  setlocale(LC_MONETARY, 'en_US.UTF-8'); echo money_format('%.2n', $IVA01);  ?> </td>
  			<td class="column4 style41 null"></td>
  			<td class="column5 style43 f"> <?php  setlocale(LC_MONETARY, 'en_US.UTF-8'); echo money_format('%.2n', $IVA02);  ?></td>
  			<td class="column6 style44 null"></td>
  			<td class="column7 style43 f"> <?php  setlocale(LC_MONETARY, 'en_US.UTF-8'); echo money_format('%.2n', $IVA03); ?></td>
  		  </tr>
  		  <!-- <tr class="row30">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style20 s">DESCUENTO</td>
  			<td class="column2 style41 null"></td>
  			<td class="column3 style42 null"></td>
  			<td class="column4 style41 null"></td>
  			<td class="column5 style43 null"></td>
  			<td class="column6 style44 null"></td>
  			<td class="column7 style43 null"></td>
  		  </tr> -->
  		  <!-- <tr class="row31">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style20 s">ANTICIPO</td>
  			<td class="column2 style45 null"></td>
  			<td class="column3 style46 null"></td>
  			<td class="column4 style45 null"></td>
  			<td class="column5 style47 null"></td>
  			<td class="column6 style48 null"></td>
  			<td class="column7 style47 null"></td>
  		  </tr> -->
  		  <tr class="row32">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style21 s">TOTAL</td>
  			<td class="column2 style49 null"></td>
  			<td class="column3 style50 f"> <?php $Total01 = ($IVA01 + $Subtotal01);  setlocale(LC_MONETARY, 'en_US.UTF-8'); echo money_format('%.2n', $Total01);?></td>
  			<td class="column4 style49 null"></td>
  			<td class="column5 style51 f"> <?php  $Total02 = ($IVA02 + $Subtotal02);setlocale(LC_MONETARY, 'en_US.UTF-8'); echo money_format('%.2n', $Total02); ?></td>
  			<td class="column6 style52 null"></td>
  			<td class="column7 style51 f"> <?php  $Total03 = ($IVA03 + $Subtotal03); setlocale(LC_MONETARY, 'en_US.UTF-8'); echo money_format('%.2n', $Total03);?></td>
  		  </tr>
  		  <tr class="row33">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style76 null style78" colspan="7"></td>
  		  </tr>
  		  <tr class="row34">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style14 s">TIEMPO DE ENTREGA</td>
  			<td class="column2 style57 s style58" colspan="2"> <?php echo $TiempoEntrega01; ?> </td>
  			<td class="column4 style57 s style58" colspan="2"> <?php echo $TiempoEntrega02; ?> </td>
  			<td class="column6 style57 s style56" colspan="2"> <?php echo $TiempoEntrega03;?> </td>
  		  </tr>
  		  <tr class="row35">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style63 null style64" colspan="7"></td>
  		  </tr>
  		  <tr class="row36">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style14 s">TIEMPO DE GARANTÍA</td>
  			<td class="column2 style57 null style58" colspan="2"><?php echo $Garantia01; ?></td>
  			<td class="column4 style57 null style58" colspan="2"><?php echo $Garantia02; ?></td>
  			<td class="column6 style57 null style56" colspan="2"><?php echo $Garantia03; ?></td>
  		  </tr>
  		  <tr class="row37">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style63 null style64" colspan="7"></td>
  		  </tr>


        <?php
              $Renglon01 = substr($ObservacionesCotizacion, 0,250);
              $Renglon02 = substr($ObservacionesCotizacion, 250,500);
              $Renglon03 = substr($ObservacionesCotizacion, 500,600);


         ?>


  		  <tr class="row38">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style59 s style61" rowspan="4">OBSERVACIÓN</td>
  			<td class="column2 style65 null style67" colspan="6"> <?php  ?> </td>
  		  </tr>
  		  <tr class="row39">
  			<td class="column0 style1 null"></td>
  			<td class="column2 style65 null style67" colspan="6"> <?php  ?></td>
  		  </tr>
  		  <tr class="row40">
  			<td class="column0 style1 null"></td>
  			<td class="column2 style65 null style67" colspan="6"> <?php ?></td>
  		  </tr>
  		  <tr class="row41">
  			<td class="column0 style1 null"></td>
  			<td class="column2 style65 null style67" colspan="6"> </td>
  		  </tr>
  		  <tr class="row42">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style63 null style64" colspan="7"></td>
  		  </tr>
  		  <tr class="row43">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style15 s">PROV. SUGERIDO</td>
  			<td class="column2 style55 n style56" colspan="2">1</td>
  			<td class="column4 style55 n style56" colspan="2">2</td>
  			<td class="column6 style55 n style56" colspan="2">3</td>
  		  </tr>
  		  <tr class="row44">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style13 null"></td>
  			<td class="column2 style12 null"></td>
  			<td class="column3 style12 null"></td>
  			<td class="column4 style12 null"></td>
  			<td class="column5 style12 null"></td>
  			<td class="column6 style12 null"></td>
  			<td class="column7 style12 null"></td>
  		  </tr>
  		  <tr class="row45">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style17 s"></td>
  			<td class="column2 style1 null"></td>
  			<td class="column3 style54 s style54" colspan="4"></td>
  			<td class="column7 style1 null"></td>
  		  </tr>
  		  <tr class="row46">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style1 null"></td>
  			<td class="column2 style1 null"></td>
  			<td class="column3 style1 null"></td>
  			<td class="column4 style1 null"></td>
  			<td class="column5 style1 null"></td>
  			<td class="column6 style1 null"></td>
  			<td class="column7 style1 null"></td>
  		  </tr>

        <?php

            // switch ($NombreUsuario) {
            //   case 'lrvaldez':
            //       $NombreRealizo = 'ING. LUIS RAFAEL VALDEZ SANTIESTEBAN';
            //       $Firma = "";
            //     break;
            //
            //     case 'mfloresd':
            //       $NombreRealizo = 'M.A. MARITZA FLORES DÍAZ DE LEÓN';
            //       $Firma = "maritza-firma02.png";
            //       break;
            //
            //       case 'raramire':
            //         $NombreRealizo = 'M.A. ROCÍO ALEJANDRA RAMÍREZ LIRA';
            //         $Firma = "rocio-firma01.png";
            //         break;
            //
            //         case 'oaperez':
            //         $NombreRealizo = 'M.A. OSKAR ARTURO PÉREZ OCHOA';
            //           $Firma = "";
            //           break;
            //
            //           case 'caguilar':
            //           $NombreRealizo = 'LIC. CLAUDIA AGUILAR';
            //             $Firma = "";
            //             break;
            //
            //
            //   default:
            //       $NombreRealizo = 'INDEFINIDO';
            //     break;
            // }
            //


         ?>

  		  <tr class="row47">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style2 null"></td>
  			<td class="column2 style1 null"></td>
  			<td class="column3 style62 null style62" colspan="4"></td>
  			<td class="column7 style1 null"></td>
  		  </tr>
  		  <tr class="row48">
  			<td class="column0 style1 null"> </td>
  			<td class="column1 style17 s"><?php echo $NombreRealizo; ?> <img src="<?php echo $Firma; ?>" alt="" style="    position: absolute; top: 850px; left: 75px; color: black; height: 5%;"></td>
  			<td class="column2 style1 null"></td>
  			<td class="column3 style53 s style53" colspan="4"></td>
  			<td class="column7 style1 null"></td>
  		  </tr>
  		  <tr class="row49">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style1 null"></td>
  			<td class="column2 style1 null"></td>
  			<td class="column3 style1 null"></td>
  			<td class="column4 style1 null"></td>
  			<td class="column5 style1 null"></td>
  			<td class="column6 style1 null"></td>
  			<td class="column7 style1 null"></td>
  		  </tr>
  		  <tr class="row50">
  			<td class="column0 style1 null"></td>
  			<td class="column1 style54 null style54" colspan="7"></td>
  		  </tr>
  		</tbody>
  	</table>
    </body>

  </html>
