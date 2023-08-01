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


$username = $_SESSION['username'];
$IdRequi = $_GET['IdRequi'];
$Folio = $_GET['Folio'];




 $sql = 'SELECT *, b.Descripcion AS Departamento  FROM Requi a INNER JOIN CatcUnidades b on a.IdUnidad = b.IdUnidad  WHERE a.IdRequi = '.$IdRequi.' ';

echo $sql;

 $result = $conexion->query($sql);


 if ($result->num_rows > 0)
 {
  }
  $row = $result->fetch_array(MYSQLI_ASSOC);


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

    $IdArea = $row['IdArea'];








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

     $FechaBD = $row['Fecha'];


     $Mes = substr($FechaBD,5,2);
     $Ano = substr($FechaBD,0,4);
     $Dia = substr($FechaBD,8,2);

     // echo '<br>'.$Mes;
     //      echo  '<br>'.$Dia;
     //           echo  '<br>'.$Ano;


      $sql2 = 'SELECT * FROM  Usuarios WHERE Usuario = "'.$username.'" ';

     echo $sql2;

      $result = $conexion->query($sql2);


      if ($result->num_rows > 0)
      {
       }
       $row = $result->fetch_array(MYSQLI_ASSOC);

       $Centro = $row['Centro'];
       $Nombre = $row['PrimerNombre'].' '.$row['PrimerApellido'];





         switch ($Centro)

         {
           case '4401 - SECRETARÍA DIRECCIÓN':
             $Reviso = 'M.I. Leticia Méndez Mariscal';
             $Autorizo = 'M.I. Javier González Cantú';
           break;

           case '4402 - SECRETARÍA PLANEACIÓN':

           $Autorizo = 'M.I. Leticia Méndez Mariscal';
           $Reviso= 'M.I. Rodrigo De la Garza Aguilar';

           break;


           case '4403 - SECRETARÍA ACADEMICA':

           $Autorizo = 'M.I. Leticia Méndez Mariscal';
           $Reviso= 'M.A. Jorge Alberto Arias Mendoza';

           break;


           case '4404 - SECRETARÍA EXTENSION':

           $Autorizo = 'M.I. Leticia Méndez Mariscal';
           $Reviso= 'M.I. David Maloof Flores';

           break;

           case '4405 - SECRETARÍA DE INVESTIGACIÓN Y POSGRADO':

           $Autorizo = 'M.I. Leticia Méndez Mariscal';
           $Reviso = 'Dr. Alejandro Villalobos Aragón';

           break;


           case '4406 - SECRETARÍA ADMINISTRATIVA':

            if ($username == 'lrvaldez' || $username == 'raramire' || $username == '21678')
            {
              $Autorizo = 'M.I. Leticia Méndez Mariscal';
              $Reviso= 'M.A. Maritza Flores Díaz de León ';

              }

              elseif ($username == '15332' ) {
                // code...

                $Autorizo = 'M.I. Leticia Méndez Mariscal';
                $Reviso= 'M.I. Rodrigo De la Garza Aguilar';
              }
              else {
                $Autorizo = 'M.I. Leticia Méndez Mariscal';
                $Reviso= '';
              }

           break;


           case '4407 - LABORATORIO DE SANITARIA':

              if ($IdArea == 1)
                {
                  $Autorizo = 'M.I. Leticia Méndez Mariscal';
                  $Reviso= 'Ing. Abril Ibarra Martínez';
                }
              elseif ($IdArea == 2)
                {
                  $Autorizo = 'M.I. Leticia Méndez Mariscal';
                  $Reviso= 'Ing. Mario Lopez Santa Anna';
                }


           break;



           case '4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }


           break;
           case '4411 - LABORATORIO DE METALURGIA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }


           break;
           case '4412 - LABORATORIO DE QUIMICA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }


           break;
           case '4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4413 - LABORATORIO DE AUTOMÁTICA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4415 - LABORATORIO DE HIDRAULICA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4416 - LABORATORIO DE SENSORES REMOTOS':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4417 - LABORATORIO DE TOPOGRAFIA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4418 - LABORATORIO DE RESONANCIA MAGNETICA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4419 - LABORATORIO DE FISICA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4462 - LABORATORIO DE GEOLOGIA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4462 - LABORATORIO DE GEOFISICA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }


           break;
           case '4449 - LAB DE AEROESPACIAL':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4408 - COORDINACIÓN DE SERVICIO EXTERNO DE LABORATORIOS':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4403 - COORDINACIÓN DE LABORATORIOS ACADÉMICOS':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Leticia Méndez Mariscal';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;



           default:
             // code...
             break;
         }




  ?>

  <!DOCTYPE html>
  <!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
  <html>
  <head>
  <meta charset="utf-8">
  <meta name="generator" content="pdf2htmlEX">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <style type="text/css">
  /*!
   * Base CSS for pdf2htmlEX
   * Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com>
   * https://github.com/coolwanglu/pdf2htmlEX/blob/master/share/LICENSE
   */#sidebar{position:absolute;top:0;left:0;bottom:0;width:250px;padding:0;margin:0;overflow:auto}#page-container{position:absolute;top:0;left:0;margin:0;padding:0;border:0}@media screen{#sidebar.opened+#page-container{left:250px}#page-container{bottom:0;right:0;overflow:auto}.loading-indicator{display:none}.loading-indicator.active{display:block;position:absolute;width:64px;height:64px;top:50%;left:50%;margin-top:-32px;margin-left:-32px}.loading-indicator img{position:absolute;top:0;left:0;bottom:0;right:0}}@media print{@page{margin:0}html{margin:0}body{margin:0;-webkit-print-color-adjust:exact}#sidebar{display:none}#page-container{width:auto;height:auto;overflow:visible;background-color:transparent}.d{display:none}}.pf{position:relative;background-color:white;overflow:hidden;margin:0;border:0}.pc{position:absolute;border:0;padding:0;margin:0;top:0;left:0;width:100%;height:100%;overflow:hidden;display:block;transform-origin:0 0;-ms-transform-origin:0 0;-webkit-transform-origin:0 0}.pc.opened{display:block}.bf{position:absolute;border:0;margin:0;top:0;bottom:0;width:100%;height:100%;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none;user-select:none}.bi{position:absolute;border:0;margin:0;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none;user-select:none}@media print{.pf{margin:0;box-shadow:none;page-break-after:always;page-break-inside:avoid}@-moz-document url-prefix(){.pf{overflow:visible;border:1px solid #fff}.pc{overflow:visible}}}.c{position:absolute;border:0;padding:0;margin:0;overflow:hidden;display:block}.t{position:absolute;white-space:pre;font-size:1px;transform-origin:0 100%;-ms-transform-origin:0 100%;-webkit-transform-origin:0 100%;unicode-bidi:bidi-override;-moz-font-feature-settings:"liga" 0}.@CSS_LINK_CN span{position:relative;vertical-align:baseline;display:inline-block;unicode-bidi:bidi-override}._{color:transparent;z-index:-1}::selection{background:rgba(127,255,255,0.4)}::-moz-selection{background:rgba(127,255,255,0.4)}.pi{display:none}.d{position:absolute;transform-origin:0 100%;-ms-transform-origin:0 100%;-webkit-transform-origin:0 100%}</style>
  <style type="text/css">
  /*!
   * Fancy styles for pdf2htmlEX
   * Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com>
   * https://github.com/coolwanglu/pdf2htmlEX/blob/master/share/LICENSE
   */@keyframes fadein{from{opacity:0}to{opacity:1}}@-webkit-keyframes fadein{from{opacity:0}to{opacity:1}}@keyframes swing{0{transform:rotate(0)}10%{transform:rotate(0)}90%{transform:rotate(720deg)}100%{transform:rotate(720deg)}}@-webkit-keyframes swing{0{-webkit-transform:rotate(0)}10%{-webkit-transform:rotate(0)}90%{-webkit-transform:rotate(720deg)}100%{-webkit-transform:rotate(720deg)}}@media screen{#sidebar{background-color:#2f3236;background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjNDAzYzNmIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDBMNCA0Wk00IDBMMCA0WiIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2U9IiMxZTI5MmQiPjwvcGF0aD4KPC9zdmc+")}#outline{font-family:Georgia,Times,"Times New Roman",serif;font-size:13px;margin:2em 1em}#outline ul{padding:0}#outline li{list-style-type:none;margin:1em 0}#outline li>ul{margin-left:1em}#outline a,#outline a:visited,#outline a:hover,#outline a:active{line-height:1.2;color:#e8e8e8;text-overflow:ellipsis;white-space:nowrap;text-decoration:none;display:block;overflow:hidden;outline:0}#outline a:hover{color:#0cf}#page-container{background-color:#9e9e9e;background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1IiBoZWlnaHQ9IjUiPgo8cmVjdCB3aWR0aD0iNSIgaGVpZ2h0PSI1IiBmaWxsPSIjOWU5ZTllIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDVMNSAwWk02IDRMNCA2Wk0tMSAxTDEgLTFaIiBzdHJva2U9IiM4ODgiIHN0cm9rZS13aWR0aD0iMSI+PC9wYXRoPgo8L3N2Zz4=");-webkit-transition:left 500ms;transition:left 500ms}.pf{margin:13px auto;box-shadow:1px 1px 3px 1px #333;border-collapse:separate}.pc.opened{-webkit-animation:fadein 100ms;animation:fadein 100ms}.loading-indicator.active{-webkit-animation:swing 1.5s ease-in-out .01s infinite alternate none;animation:swing 1.5s ease-in-out .01s infinite alternate none}}</style>
  <style type="text/css">
  .ff0{font-family:sans-serif;visibility:hidden;}
  @font-face{font-family:ff1;src:url('data:application/font-woff;base64,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')format("woff");}.ff1{font-family:ff1;line-height:0.938965;font-style:normal;font-weight:normal;visibility:visible;}
  .m0{transform:matrix(0.250000,0.000000,0.000000,0.250000,0,0);-ms-transform:matrix(0.250000,0.000000,0.000000,0.250000,0,0);-webkit-transform:matrix(0.250000,0.000000,0.000000,0.250000,0,0);}
  .v0{vertical-align:0.000000px;}
  .ls0{letter-spacing:0.000000px;}
  .sc_{text-shadow:none;}
  .sc0{text-shadow:-0.015em 0 transparent,0 0.015em transparent,0.015em 0 transparent,0 -0.015em  transparent;}
  @media screen and (-webkit-min-device-pixel-ratio:0){
  .sc_{-webkit-text-stroke:0px transparent;}
  .sc0{-webkit-text-stroke:0.015em transparent;text-shadow:none;}
  }
  .ws0{word-spacing:0.000000px;}
  .fc0{color:rgb(0,0,0);}
  .fs0{font-size:32.160000px;}
  .fs1{font-size:39.840000px;}
  .y2{bottom:2.665100px;}
  .ye{bottom:4.404600px;}
  .yc{bottom:7.995200px;}
  .yb{bottom:18.170700px;}
  .ya{bottom:28.346100px;}
  .y9{bottom:38.521600px;}
  .y8{bottom:48.697100px;}
  .y0{bottom:53.500000px;}
  .yd{bottom:54.249900px;}
  .y7{bottom:58.872600px;}
  .y6{bottom:69.048000px;}
  .y5{bottom:79.223500px;}
  .y3{bottom:82.838100px;}
  .y4{bottom:89.399000px;}
  .y1{bottom:181.927900px;}
  .h2{height:11.855900px;}
  .h5{height:15.005500px;}
  .h3{height:23.429062px;}
  .h6{height:29.024063px;}
  .h4{height:98.589800px;}
  .h1{height:141.000000px;}
  .h0{height:222.380300px;}
  .w4{width:48.426900px;}
  .w3{width:104.456200px;}
  .w2{width:504.552200px;}
  .w1{width:506.000000px;}
  .w0{width:541.052200px;}
  .x2{left:1.802200px;}
  .x4{left:13.134900px;}
  .x0{left:17.500000px;}
  .x3{left:123.206200px;}
  .x1{left:217.426900px;}
  @media print{
  .v0{vertical-align:0.000000pt;}
  .ls0{letter-spacing:0.000000pt;}
  .ws0{word-spacing:0.000000pt;}
  .fs0{font-size:42.880000pt;}
  .fs1{font-size:53.120000pt;}
  .y2{bottom:3.553467pt;}
  .ye{bottom:5.872800pt;}
  .yc{bottom:10.660267pt;}
  .yb{bottom:24.227600pt;}
  .ya{bottom:37.794800pt;}
  .y9{bottom:51.362133pt;}
  .y8{bottom:64.929467pt;}
  .y0{bottom:71.333333pt;}
  .yd{bottom:72.333200pt;}
  .y7{bottom:78.496800pt;}
  .y6{bottom:92.064000pt;}
  .y5{bottom:105.631333pt;}
  .y3{bottom:110.450800pt;}
  .y4{bottom:119.198667pt;}
  .y1{bottom:242.570533pt;}
  .h2{height:15.807867pt;}
  .h5{height:20.007333pt;}
  .h3{height:31.238750pt;}
  .h6{height:38.698750pt;}
  .h4{height:131.453067pt;}
  .h1{height:188.000000pt;}
  .h0{height:296.507067pt;}
  .w4{width:64.569200pt;}
  .w3{width:139.274933pt;}
  .w2{width:672.736267pt;}
  .w1{width:674.666667pt;}
  .w0{width:721.402933pt;}
  .x2{left:2.402933pt;}
  .x4{left:17.513200pt;}
  .x0{left:23.333333pt;}
  .x3{left:164.274933pt;}
  .x1{left:289.902533pt;}
  }
  </style>
  <script>
  /*
   Copyright 2012 Mozilla Foundation
   Copyright 2013 Lu Wang <coolwanglu@gmail.com>
   Apache License Version 2.0
  */
  (function(){function b(a,b,e,f){var c=(a.className||"").split(/\s+/g);""===c[0]&&c.shift();var d=c.indexOf(b);0>d&&e&&c.push(b);0<=d&&f&&c.splice(d,1);a.className=c.join(" ");return 0<=d}if(!("classList"in document.createElement("div"))){var e={add:function(a){b(this.element,a,!0,!1)},contains:function(a){return b(this.element,a,!1,!1)},remove:function(a){b(this.element,a,!1,!0)},toggle:function(a){b(this.element,a,!0,!0)}};Object.defineProperty(HTMLElement.prototype,"classList",{get:function(){if(this._classList)return this._classList;
  var a=Object.create(e,{element:{value:this,writable:!1,enumerable:!0}});Object.defineProperty(this,"_classList",{value:a,writable:!1,enumerable:!1});return a},enumerable:!0})}})();
  </script>
  <script>
  (function(){/*
   pdf2htmlEX.js: Core UI functions for pdf2htmlEX
   Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com> and other contributors
   https://github.com/coolwanglu/pdf2htmlEX/blob/master/share/LICENSE
  */
  var q=window.pdf2htmlEX=window.pdf2htmlEX||{},r="pc",s="pi",t={container_id:"page-container",sidebar_id:"sidebar",outline_id:"outline",loading_indicator_cls:"loading-indicator",preload_pages:3,render_timeout:100,scale_step:0.9,key_handler:!0,hashchange_handler:!0,__dummy__:"no comma"};function v(a,b){return[a[0]*b[0]+a[2]*b[1]+a[4],a[1]*b[0]+a[3]*b[1]+a[5]]}function w(a){for(var b=0,c=a.length;b<c;++b)a[b].addEventListener("dragstart",function(){return!1},!1)}
  function x(a){for(var b={},c=0,d=arguments.length;c<d;++c){var e=arguments[c],g;for(g in e)e.hasOwnProperty(g)&&(b[g]=e[g])}return b}
  function y(a){if(a){this.g=this.loaded=!1;this.page=a;this.r=parseInt(a.getAttribute("data-page-no"),16);this.m=a.clientHeight;this.t=a.clientWidth;var b=a.getElementsByClassName(r)[0];b&&(this.h=b,this.s=this.f=this.m/b.clientHeight,this.u=JSON.parse(a.getElementsByClassName(s)[0].getAttribute("data-data")),a=this.k=this.u.ctm,b=a[0]*a[3]-a[1]*a[2],this.o=[a[3]/b,-a[1]/b,-a[2]/b,a[0]/b,(a[2]*a[5]-a[3]*a[4])/b,(a[1]*a[4]-a[0]*a[5])/b],this.loaded=!0)}}
  y.prototype={show:function(){this.loaded&&!this.g&&(this.h.classList.add("opened"),this.g=!0)},d:function(a){this.f=0===a?this.s:a;this.loaded&&(a=this.h.style,a.msTransform=a.webkitTransform=a.transform="scale("+this.f.toFixed(3)+")");a=this.page.style;a.height=this.m*this.f+"px";a.width=this.t*this.f+"px"},height:function(){return this.page.clientHeight},width:function(){return this.page.clientWidth}};
  function z(a){a=a.page;var b=a.parentNode;return[b.scrollLeft-a.offsetLeft-a.clientLeft,b.scrollTop-a.offsetTop-a.clientTop]}function A(a){a.loaded&&a.g&&(a.h.classList.remove("opened"),a.g=!1)}function B(a){this.b=x(t,0<arguments.length?a:{});this.i=[];C();var b=this;document.addEventListener("DOMContentLoaded",function(){E(b)},!1)}
  B.prototype={scale:1,e:0,l:0,d:function(a,b,c){var d=this.scale;this.scale=a=0===a?1:b?d*a:a;c||(c=[0,0]);b=this.a;c[0]+=b.scrollLeft;c[1]+=b.scrollTop;for(var e=this.c,g=e.length,h=this.l;h<g;++h){var f=e[h].page;if(f.offsetTop+f.clientTop>=c[1])break}f=h-1;0>f&&(f=0);var f=e[f].page,k=f.clientWidth,h=f.clientHeight,l=f.offsetLeft+f.clientLeft,m=c[0]-l;0>m?m=0:m>k&&(m=k);k=f.offsetTop+f.clientTop;c=c[1]-k;0>c?c=0:c>h&&(c=h);for(h=0;h<g;++h)e[h].d(a);b.scrollLeft+=m/d*a+f.offsetLeft+f.clientLeft-
  m-l;b.scrollTop+=c/d*a+f.offsetTop+f.clientTop-c-k;F(this,!0)},p:function(a){var b=a.target,c=b.getAttribute("data-dest-detail");if(c){var d=G;a:{for(;b;){if(b.nodeType===Node.ELEMENT_NODE&&b.classList.contains("pf")){var b=parseInt(b.getAttribute("data-page-no"),16),e=this.n,b=b in e?this.c[e[b]]:null;break a}b=b.parentNode}b=null}d(this,c,b);a.preventDefault()}}};
  function H(a,b,c){var d=a.c;0>b||b>=d.length||(b=z(d[b]),void 0===c&&(c=[0,0]),a=a.a,a.scrollLeft+=c[0]-b[0],a.scrollTop+=c[1]-b[1])}
  function G(a,b,c){try{var d=JSON.parse(b)}catch(e){return}if(d instanceof Array){b=d[0];var g=a.n;if(b in g){var h=g[b];b=a.c[h];for(var g=2,f=d.length;g<f;++g){var k=d[g];if(null!==k&&"number"!==typeof k)return}for(;6>d.length;)d.push(null);g=c||a.c[a.e];c=z(g);c=v(g.o,[c[0],g.height()-c[1]]);var g=a.scale,l=[0,0],m=!0,f=!1,k=a.scale;switch(d[1]){case "XYZ":l=[null===d[2]?c[0]:d[2]*k,null===d[3]?c[1]:d[3]*k];g=d[4];if(null===g||0===g)g=a.scale;f=!0;break;case "Fit":case "FitB":l=[0,0];f=!0;break;
  case "FitH":case "FitBH":l=[0,null===d[2]?c[1]:d[2]*k];f=!0;break;case "FitV":case "FitBV":l=[null===d[2]?c[0]:d[2]*k,0];f=!0;break;case "FitR":l=[d[2]*k,d[5]*k],m=!1,f=!0}f&&(a.d(g,!1),d=function(b){l=v(b.k,l);m&&(l[1]=b.height()-l[1]);H(a,h,l)},b.loaded?d(b):(I(a,h,void 0,d),H(a,h)))}}}
  function J(a){window.addEventListener("DOMMouseScroll",function(b){if(b.ctrlKey){b.preventDefault();var c=a.a,d=c.getBoundingClientRect();a.d(Math.pow(a.b.scale_step,b.detail),!0,[b.clientX-d.left-c.clientLeft,b.clientY-d.top-c.clientTop])}},!1);window.addEventListener("keydown",function(b){var c=!1,d=b.ctrlKey||b.metaKey,e=b.altKey;switch(b.keyCode){case 61:case 107:case 187:d&&(a.d(1/a.b.scale_step,!0),c=!0);break;case 173:case 109:case 189:d&&(a.d(a.b.scale_step,!0),c=!0);break;case 48:d&&(a.d(0,
  !1),c=!0);break;case 33:e?H(a,a.e-1):a.a.scrollTop-=a.a.clientHeight;c=!0;break;case 34:e?H(a,a.e+1):a.a.scrollTop+=a.a.clientHeight;c=!0;break;case 35:a.a.scrollTop=a.a.scrollHeight;c=!0;break;case 36:a.a.scrollTop=0,c=!0}c&&b.preventDefault()},!1)}function F(a,b){if(void 0!==a.j){if(!b)return;clearTimeout(a.j)}a.j=setTimeout(function(){delete a.j;K(a)},a.b.render_timeout)}
  function K(a){for(var b=a.a,c=b.scrollTop,d=b.clientHeight,b=c-d,c=c+d+d,d=a.c,e=0,g=d.length;e<g;++e){var h=d[e],f=h.page,k=f.offsetTop+f.clientTop,f=k+f.clientHeight;k<=c&&f>=b?h.loaded?h.show():I(a,e):A(h)}}function C(){var a="@media screen{."+r+"{display:none;}}",b=document.createElement("style");b.styleSheet?b.styleSheet.cssText=a:b.appendChild(document.createTextNode(a));document.head.appendChild(b)}
  function I(a,b,c,d){var e=a.c;if(!(b>=e.length||(e=e[b],e.loaded||a.i[b]))){var e=e.page,g=e.getAttribute("data-page-url");if(g){a.i[b]=!0;var h=a.q.cloneNode();h.classList.add("active");e.appendChild(h);var f=a,k=new XMLHttpRequest;k.open("GET",g,!0);k.onreadystatechange=function(){if(4==k.readyState){if(200===k.status){var a=document.createElement("div");a.innerHTML=k.responseText;for(var c=null,a=a.childNodes,g=0,e=a.length;g<e;++g){var h=a[g];if(h.nodeType===Node.ELEMENT_NODE&&h.classList.contains("pf")){c=
  h;break}}a=f.c[b];f.a.replaceChild(c,a.page);a=new y(c);f.c[b]=a;A(a);a.d(f.scale);w(c.getElementsByClassName("bi"));F(f,!1);d&&d(a)}delete f.i[b]}};k.send(null)}void 0===c&&(c=a.b.preload_pages);0<--c&&(f=a,setTimeout(function(){I(f,b+1,c)},0))}}function L(a){for(var b=[],c={},d=a.a.childNodes,e=0,g=d.length;e<g;++e){var h=d[e];h.nodeType===Node.ELEMENT_NODE&&h.classList.contains("pf")&&(h=new y(h),b.push(h),c[h.r]=b.length-1)}a.c=b;a.n=c}
  function E(a){a.sidebar=document.getElementById(a.b.sidebar_id);a.outline=document.getElementById(a.b.outline_id);a.a=document.getElementById(a.b.container_id);a.q=document.getElementsByClassName(a.b.loading_indicator_cls)[0];for(var b=!0,c=a.outline.childNodes,d=0,e=c.length;d<e;++d)if("UL"===c[d].nodeName){b=!1;break}b||a.sidebar.classList.add("opened");L(a);0!=a.c.length&&(w(document.getElementsByClassName("bi")),a.b.key_handler&&J(a),a.b.hashchange_handler&&window.addEventListener("hashchange",
  function(){G(a,document.location.hash.substring(1))},!1),a.a.addEventListener("scroll",function(){var b=a.c,c=b.length;if(!(2>c)){for(var d=a.a,e=d.scrollTop,d=e+d.clientHeight,l=-1,m=c,n=m-l;1<n;){var p=l+Math.floor(n/2),n=b[p].page;n.offsetTop+n.clientTop+n.clientHeight>=e?m=p:l=p;n=m-l}a.l=m;for(var p=l=a.e,D=0;m<c;++m){var n=b[m].page,u=n.offsetTop+n.clientTop,n=n.clientHeight;if(u>d)break;n=(Math.min(d,u+n)-Math.max(e,u))/n;if(m===l&&1E-6>=Math.abs(n-1)){p=l;break}n>D&&(D=n,p=m)}a.e=p}F(a,!0)},
  !1),[a.a,a.outline].forEach(function(b){b.addEventListener("click",a.p.bind(a),!1)}),K(a))}q.Viewer=B;})();
  </script>
  <script>
  try{
  pdf2htmlEX.defaultViewer = new pdf2htmlEX.Viewer({});
  }catch(e){}
  </script>
  <title></title>
  </head>
  <body onload="window.print();">
  <div id="sidebar">
  <div id="outline">
  </div>
  </div>
  <div id="page-container">
  <div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA/QAAAEaCAIAAAAwlovuAAAACXBIWXMAABYlAAAWJQFJUiTwAAAFF0lEQVR42u3asQ0EIRAEQfZ0JvlHytnzKeA9rKpCGGE00o611gAAAC6XxAgAANBEyXwAALg+66vGGI8hAACgB3EPAADiHgAAEPcAAIC4BwAAxD0AAIh7AABA3AMAAOIeAAAQ9wAAIO4BAABxDwAAiHsAAEDcAwAA4h4AAMQ9AAAg7gEAAHEPAACIewAAEPcAAIC4BwAAxD0AACDuAQBA3AMAAOIeAAAQ9wAAgLgHAADEPQAAiHsAAEDcAwAA4h4AABD3AAAg7gEAAHEPAACIewAAQNwDAIC4NwEAAIh7AABA3AMAAOIeAAAQ9wAAIO4BAABxDwAAiHsAAEDcAwCAuAcAAMQ9AAAg7gEAAHEPAACIewAAEPcAAIC4BwAAxD0AACDuAQBA3AMAAOIeAAAQ9wAAgLgHAABxDwAAiHsAAEDcAwAA4h4AABD3AAAg7gEAAHEPAACIewAAQNwDAIC4BwAAxD0AACDuAQAAcQ8AAOIeAAAQ9wAAgLgHAADEPQAAIO4BAEDcAwAA4h4AABD3AACAuAcAAHEPAACIewAAQNwDAADiHgAAEPcAACDuAQAAcQ8AAIh7AABA3AMAgLgHAADEPQAAIO4BAABxDwAA4h4AABD3AACAuAcAAMQ9AAAg7gEAQNwDAADiHgAAEPcAAIC4BwAAcQ8AAIh7AABA3AMAAOIeAADEPQAAIO4BAABxDwAAiHsAAEDcAwCAuAcAAMQ9AAAg7gEAAHEPAADiHgAAEPcAAIC4BwAAxD0AACDuAQBA3AMAAOIeAAAQ9wAAgLgHAABxDwAAiHsAAEDcAwAA4h4AAMQ9AAAg7gEAAHEPAACIewAAQNwDAIC4BwAAxD0AACDuAQAAcQ8AAOIeAAAQ9wAAgLgHAADEPQAAiHsAAEDcAwAA4h4AABD3AACAuAcAAHEPAACIewAAQNwDAADiHgAAxD0AACDuAQAAcQ8AAIh7AABA3AMAgLgHAADEPQAAIO4BAABxDwAA4h4AABD3AACAuAcAAMQ9AACIewAAQNwDAADiHgAAEPcAAIC4BwAAcQ8AAIh7AABA3AMAAOIeAADEPQAAIO4BAABxDwAAiHsAABD3AACAuAcAAMQ9AAAg7gEAAHEPAADiHgAAEPcAAIC4BwAAxD0AAIh7AABA3AMAAOIeAAAQ9wAAgLgHAABxDwAAiHsAAEDcAwAA4h4AAMQ9AAAg7gEAAHEPAACIewAAEPcAAIC4BwAAxD0AACDuAQAAcQ8AAOIeAAAQ9wAAgLgHAADEPQAAiHsAAEDcAwAA4h4AABD3AAAg7gEAAHEPAACIewAAQNwDAADiHgAAxD0AACDuAQAAcQ8AAIh7AAAAAAC4UBIjAABAg7AvcQ8AAD24uQcAAHEPAACIewAAQNwDAADiHgAAxD0AACDuAQAAcQ8AAIh7AAAQ9wAAgLgHAADEPQAAIO4BAABxDwAA4h4AABD3AACAuAcAAMQ9AACIewAAQNwDAADiHgAAEPcAACDuAQCAy73f9805DQEHSmIEAGBfmQD0PQDQwysg+MOfssqr21wJAGCfm3sAABD3AACAuAcAAMQ9AAAg7gEAQNwDAADiHgAAEPcAAIC4BwAAcQ8AAIh7AABA3AMAAOIeAAAQ9wAAIO4BAABxDwAAiHsAAEDcAwCAuAcAAMQ9AAAg7gEAAHEPAADiHgAAEPcAAIC4BwAAxD0AACDuAQBA3AMAAOcqE8DJkhgBANj0SAdQ9gBADz8ASivxY3C6xwAAAABJRU5ErkJggg=="/>
<div class="c x0 y1 w2 h2">
  <div class="t m0 x1 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">OBSERVACIONES</div>
</div>

<style media="screen">
.midiv {
word-wrap: break-word;
max-width:800px;
width:500px;
font-family: Arial, Helvetica, sans-serif;
font-size: 9px;
left:20px;
}
</style>
<div class="c x0 y3 w2 h4 midiv">
  <?php echo $Observaciones01; ?>
  <div class="t m0 x2 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0"></div>
  <div class="t m0 x2 h3 y5 ff1 fs0 fc0 sc0 ls0 ws0"></div>
  <div class="t m0 x2 h3 y6 ff1 fs0 fc0 sc0 ls0 ws0"></div>
  <div class="t m0 x2 h3 y7 ff1 fs0 fc0 sc0 ls0 ws0"></div>
  <div class="t m0 x2 h3 y8 ff1 fs0 fc0 sc0 ls0 ws0"></div>
  <div class="t m0 x2 h3 y9 ff1 fs0 fc0 sc0 ls0 ws0"></div>
  <div class="t m0 x2 h3 ya ff1 fs0 fc0 sc0 ls0 ws0"></div>
  <div class="t m0 x2 h3 yb ff1 fs0 fc0 sc0 ls0 ws0"></div>
  <div class="t m0 x2 h3 yc ff1 fs0 fc0 sc0 ls0 ws0"></div>
</div>
<div class="c x0 yd w3 h5">
  <div class="t m0 x2 h6 ye ff1 fs1 fc0 sc0 ls0 ws0">Requisición Interna</div>
</div>
<div class="c x3 yd w4 h5">
  <div class="t m0 x4 h6 ye ff1 fs1 fc0 sc0 ls0 ws0"><?php echo $Folio; ?></div>
</div>
</div>
<div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
</div>
  </div>
  <div class="loading-indicator">
  <img alt="" src="data:image/png;base64,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">
  </div>
  </body>
  </html>
