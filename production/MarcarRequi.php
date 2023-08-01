<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';

date_default_timezone_set('America/Chihuahua');
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





     }
     $miFecha= gmmktime(12,0,0,1,15,2089);

     setlocale(LC_TIME, 'es_ES.UTF-8');


     date_default_timezone_set ('America/Chihuahua');


     // echo 'Ahora fecha actual es: '.strftime("%A, %d de %B de %Y %H:%M").'<br/>';

     $mes = strftime("%m");
     $ano = strftime("%Y");
     $dia = strftime("%d");


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
  			<td
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



  			<td class="column6" style="position: absolute; top:10px; left: 350px;"> Req. <?php echo $FolioAdqui; ?></td>
        	<td class="column6" style="position: absolute; top:30px; left: 350px;">  Folio. <?php echo $Folio; ?></td>
  			<td class="column7 style4 null" style="position: absolute; top:750px; left:60px;  font-size: 15px;" ></td>
  			<td class="column8">&nbsp;</td>
  			<td class="column9 style4 null"></td>
  		  </tr>
  		</tbody>




  	</table>
    </body>
    <img src="<?php echo $Firma; ?>" alt="" style=" position: absolute; top: 480px; left: 260px; color: black; height: 5%;">
  </html>


  <?php  ?>
