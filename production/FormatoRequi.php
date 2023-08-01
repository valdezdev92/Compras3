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
// $IdRequi = $_GET['IdRequi'];
$Folio = $_GET['Folio'];




 $sql = 'SELECT *, b.Descripcion AS Departamento  FROM Requi a INNER JOIN CatcUnidades b on a.IdUnidad = b.IdUnidad  WHERE a.Folio = '.$Folio.' ';

// echo $sql;

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

     // echo $sql2;

      $result = $conexion->query($sql2);


      if ($result->num_rows > 0)
      {
       }
       $row = $result->fetch_array(MYSQLI_ASSOC);

       $Centro = $row['Centro'];
       $Nombre = $row['PrimerNombre'].' '.$row['PrimerApellido'];





         switch ($Centro)

         {
           case '4401 - DESPACHO DIRECCIÓN':
             // $Reviso = 'Encargado del Despacho';
                  $Autorizo = 'M.I. Fabián Hernández Martínez';
              $Reviso = 'M.I. Fabián Hernández Martínez';

           break;

           case '4402 - SECRETARÍA PLANEACIÓN':

            $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
           // $Reviso= 'Encargado del Despacho';
              $Reviso= 'M.I. Rodrigo De la Garza Aguilar';

           break;


           case '4403 - SECRETARÍA ACADEMICA':

           $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
           $Reviso= 'M.I. Arión Ehécatl Juárez Menchaca';

           break;


           case '4404 - SECRETARÍA EXTENSION':

           $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
           $Reviso= 'M.V. Aldo Antonio Cisneros Rodríguez';

           break;

           case '4405 - SECRETARÍA DE INVESTIGACIÓN Y POSGRADO':

           $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
           $Reviso = 'DR. Fernando Martínez Reyes';

           break;


           case '4406 - SECRETARÍA ADMINISTRATIVA':

            if ($username == 'lrvaldez' || $username == 'raramire' || $username == '21678' )
            {
               $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
              $Reviso= 'M.A. Maritza Flores Díaz de León ';

              }

              elseif ($username == '15332' ) {
                // code...

                 $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                $Reviso= 'M.I. Rodrigo De la Garza Aguilar';

              }
              elseif ($username == '15332' ) {
                // code...

                 $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                $Reviso= 'M.I. Rodrigo De la Garza Aguilar';

              }
              else {
                 $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                  $Reviso= '';
              }

           break;


           case '4407 - LABORATORIO DE SANITARIA':

              if ($IdArea == 1)
                {
                  $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                  $Reviso= 'Ing. Abril Ibarra Martínez';
                }
              elseif ($IdArea == 2)
                {
                  $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                  $Reviso= 'Ing. Mario Lopez Santa Anna';
                }


           break;



           case '4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }


           break;
           case '4411 - LABORATORIO DE METALURGIA':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }


           break;
           case '4412 - LABORATORIO DE QUIMICA':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }


           break;
           case '4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureñaz';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4413 - LABORATORIO DE AUTOMÁTICA':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4415 - LABORATORIO DE HIDRAULICA':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4416 - LABORATORIO DE SENSORES REMOTOS':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
               $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4417 - LABORATORIO DE TOPOGRAFIA':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4418 - LABORATORIO DE RESONANCIA MAGNETICA':

           if ($IdArea == 1)
             {
               $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4419 - LABORATORIO DE FISICA':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4462 - LABORATORIO DE GEOLOGIA':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4462 - LABORATORIO DE GEOFISICA':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }


           break;
           case '4449 - LAB DE AEROESPACIAL':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4408 - COORDINACIÓN DE SERVICIO EXTERNO DE LABORATORIOS':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Mario Lopez Santa Anna';
             }

           break;
           case '4403 - COORDINACIÓN DE LABORATORIOS ACADÉMICOS':

           if ($IdArea == 1)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
               $Reviso= 'Ing. Abril Ibarra Martínez';
             }
           elseif ($IdArea == 2)
             {
                $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
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
@font-face{font-family:ff1;src:url('data:application/font-woff;base64,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')format("woff");}.ff1{font-family:ff1;line-height:0.938477;font-style:normal;font-weight:normal;visibility:visible;}
@font-face{font-family:ff2;src:url('data:application/font-woff;base64,d09GRgABAAAAAGBkAA8AAAAAmWgAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAABWAAAABwAAAAcRRMcmEdERUYAAAF0AAAAHQAAACAAcAAET1MvMgAAAZQAAABPAAAAYGizboBjbWFwAAAB5AAAAMYAAAGShbG/72N2dCAAAAKsAAAFIgAABlyqhuF/ZnBnbQAAB9AAAARcAAAHwcm82gVnbHlmAAAMLAAASXsAAHegxLtxJ2hlYWQAAFWoAAAAMwAAADYUvsQ3aGhlYQAAVdwAAAAgAAAAJAufBPhobXR4AABV/AAAAL8AAAEMFX0ZtmxvY2EAAFa8AAAAiAAAAIibd7hgbWF4cAAAV0QAAAAgAAAAIAV0BnhuYW1lAABXZAAAAO0AAAG57zN6GnBvc3QAAFhUAAAAiwAAAMUQUTjUcHJlcAAAWOAAAAeCAAAL540h7UEAAAABAAAAAM+beTwAAAAAouMnKgAAAADSlHwxeJxjYGRgYOADYgkGEGBiYARCJyBmAfMYAAcgAHUAAAB4nGNgYXFnnMDAysDAasw6k4GBUQ5CM19nSGMSYmBgYmBlZoABBAsIAtJcUxgOMCgwfGa98i8QqP8K43qgMCNIjkWNdReQUmBgBAAKLAwAAHicY2BgYGaAYBkGRgYQ6AHyGMF8FoYCIC3BIAAU4WBQYNBhsGJwY/BkCGPIYqhieMnwluHz//9AFSAZPQZHoIwPQyJDDkzm/+P/N/5f/3/x//n/Z/8f/n/of8j/wP8+UFuwAkY2Brg0IxOQYEJXAHEqDLAwsLKxc3BycfPw8vELCEIEhYRFRMXEQe5mkJSSlpGVk1dQVFJGaFJRVVPX0NTS1tFl0NM3MDQyNjE1M7ewtLK2weIiWyC2AzHscbuaugAAlrspxwAAeJxVVHlQ1lUUPfe+934fIdJULkCWgsokZCaOmaODW2ILoIBbBpIlA2iKqIyYuO/myiAJbmMuoCaa80FIWu7ZKGBqbpW4ZKCTQs2kuf1eV+uP+s68efO933v33XveucdUINBUIMgUIVCHIgCwtTLqHs9uuq2Tb4GPZ74JoPzfARRjB6VjB77BQWqQUzuxB14cQ3O8gTXIQR7mw8EwWVmIeIGR9TwKtF50wAYoGZWydwimoQLNKMDewHTMVafl1Fw0Rgh6YQAysISibRYSUaNnowuiMRbjaIYdapfaXLsJm7FHHbOP0AhB+FBQaW+b8/YntJcTK1GAGsp9qhQ95ZYZsnMtxqNQJWmyqfa+ZBCMSZKDRgwqaT+HS/QU1FIA5ag+EmWj3WUPy64WSEIaClFBnakfB5tEG2Mr0UzuyJaoBdiNMkE59uEi+ZkGu8k2IBAv4y2px4sq2q/cRzPdHsKYEZbaoat8ycDX+BYnqTUd4AzjZyJMT/OxPYMm6IhBkm2RnPyV7vI0wXR1VEfZ3vAXXlY8ZhtHcIWCqAP1p8HcjjN4nRoPH7mxo2Ak0oXvVRL9EoVTGftxtdqot+sHzgvuZesvLxKK1ViLA9RYKm1FE2gWnaVr3IeTeTVfVXl6qz7lGSFVD8cYLMF23KVn6XWKo/cojXJoPq2gAqqkk1THvXggj+Z6laYy1T7dW5CgJ+jZZp75xKlzh7qH3e/duzbCzkOc6GGmZL8S66SyPajGBUENrpKhRuQvaEXBNIimCKbREvqMimkreeWWk3SVbtAf9Cc9YAgcfp6DOUTQmsfzJM7jNVwtOMm/8T3VXIWocNVZdVfvqgzJar5aLihVV3SQrtZWeI4w+Wa9KTbbzUHT4Ph5ZvnA58TDjY/CHl1y4S5w893drtdeQVN5wyBhoSW6S/YjBKPkvfNFcTtxmvyEuyAKo0iKFmaSaRRlUrYwOYcKafOT3Etor7B0juol58bc4knOr3Bn7s39BcM5hTN5Oeeyl8/yfeVRjdTTqqkKU/1UkkpRE9Vkla92qRPqZ3VV3VEPBVb76pY6RIfqcN1PJ+ssvU7X6lqTaI6b646vM8aZ55Q7v3te80R6BnjiPEmeZZ4yzxmf90Wdh1CKL/GfH11WM1VfVYql3EkHchVXiZ6TMVLFsCiVi2kBTyUvtzHZTjfuRrFo0KHC9VFez3e4m4qhdygBo7jjP9GcJnqbTN31IdzSe6W2Komc7fjRNK53/LCbwF3lziPqVR2ujuOiqiGP3oAftS81p1tcpAaICvbpSDMUwWoNSlQmTUUp9wV8H/gsFh3H0jbxhYEUQX8pC8WxoqIu6hpmYzSfxy3p4wX4lEbqVCxFJ8pBLbZIV7QzY50wpyl9x+l6ET9HXrDeKtV1pTakTBPMoSRV6NTzBWShWvvikvpcsq/mEhWjG0w8pUkHTMU8ZNqZmGyG6lOUCkWD0VZfFnfLURE6WObp4iqJ4mll0t0V4gO9VIysBIhyokUXg8QhCgWrxCe0KChdenyIuFgVvM5ALkeq8SdxHUAfd+MxzG5BgU3FWJuL9uIH822ORCzGdSxDMc11p2AcXpTOuUTRJoqrTZRtz4v4Aidw/v/fV9huSwG4KSiRP5HmKyzS55CAHnax/UHU/ZI4bAE+wNv4Raq8LTe8qfajkxvLX9goNU7qrUGcLbItyRdp9iP0x15s9hiM8ITLG++iU1LvFKRwvJ2oUtx04WGZsNBT2MoS/1moM/Vsfc888zca0r8GAAB4nI1Vz08bRxSeWTtgjIElhF9ep53txG6K7dJfaV2Hki3rdYmsSjEYskuRurahgpxQD1FpL75EQQOVeuyxf8Jb0oPJCeXe/6GHHhupl5zpm9m1Y1dV1WWZfe/7vjfvzczbtVV1H25vNT637q1+tnK3/GnpkzsfffjB++8tv1ss5Jfeuf12LnuLv2WyN9+4mTHSiwvzc7M3Zq5P61OTE6nx5FhidORaPKZRUnB41WeQ8yGe4+vrRenzJgLNAcAHhlB1WAPMVzI2rLRQ+c0/lFaotPpKqrMVslIsMIcz+K3CWZfu1F20f6xwj8FLZX+p7J+UPYG2aWIAcxYOKgyozxyoPj4Qjl/B6YLxpM3t/WSxQILkOJrjaME8Pwro/CpVhjbvlAONJCawKEjzigOLvCIrgFjWae7Bg7rrVAzT9IoFoHabt4DwNZjKKwmxVRoYsWFUpWGHcjXklAWFS3HW1UnLz6f2+F5z14VY05M5pvOYtwLz3/+x8NrFya/b7tNB1ogJZ+GQSVeIpwx+qbuDrClHz8M5MFbLVn1RxdRnuIm1TYbZtCeeC/QJpmRyJXJV4fr2uSMR/xGDMb7GD8QjH48mLYBsHJvn6bR1cfU7STtMNFxuwj2De81KJrhBxMbxs0WLLQ4zxUKgT4cbG0xORUZqYtDY73PKUnJp1Tb6O0tlRfw+NgSwNsNKXI5rKslhv0REu4QyvDyKUbCHJ3IIY7Yv9LLEZTxcy+qciVcEO4C//HMYaUbISFZ/RaQp+6Tfasj3bMjnYWlJtsiojWeKNa4q/06x8LircX6kM3zg9pEHuLdNr7yM22+a8oBPuxZpoQOduhv6jLSMc2It5z3QfMlc9pjZLcl0ekw/3OfYyb8SSgiZhUSuf0/pczPOQRno3H/Q+yFf2+S1+o7LHOFHe1trDHkhX+pzkQUzthsztMjSjJhisSl3+2LpuCmIZ/EeUU291x1NYFcqhLIq6P56OHpJ0/yfQd2rv2SUerwOi8qEcn7YvzvkD5WXEjEsOJ7Tao0dIZJDHLZamPB+9MCOJw3XZDaQLXwzs3h3ry5L8t8zwMIts6UA+y+EIndIaES2h5fszmKhih86IaqcVYUvmt2rTosznYsL7YX2Qhw5fq9xulfPTw2onnm4Vwe0jC+FRtYCTk/qgUVPNnfcC50QdtJwzzWq2f6aF9xCzr1ghFgK1SQqQekw6ZAaxUWeawmlNy4sQjqKjStA+e0uJQpL9DBK2l0txPQwUU4lsoiGTDxkrJ46jlgixDqh+nakTiCjS+Y5wd8Oosjwkh8nu+EOtp16lyXxMO+mNFHbxEOTZLJkJAdoJgOBcviaf2cGOCds82MTQQ4MP3AoCsgXGU8Ihn8c07e33XCUFC1kcCYPOq2e1sh4fMBNYag6imcZ+dr1s/3Qy/YtZpOG6KWD9r9mw+qBfiVHdavyg48JD/PjD1uYVOyKHW7id/OmTBzVge5kxlMzYCU/y0r+BhyEMeR4nKW9CXxU1d03fs65+37v7Fsmk22yDJCQhGUgmosCisiiyEiQFCyLAiqr1AUFN3Chivq41lZcqqBSlgQISzW1VKuWR1qXPtpaeVpQtGJ5LKUWyOQ959x7JxO1//d5P/9J5s7v3rnrOd/f/jtnAAKjAUBzuKmAAQIYtA2C+pbtAltzrHEbz/2xZTuDMAm2MWQzRzZvF/iBZ1q2Q7K9ySqzqsqsstEola+Ej+av5KaeenE0ewAAAMEL+T/B28ABIIOJO2R88hf5LjjZTkOmBSEowxYgIwavAH64MGISmAkWgVVgA+DABuWpRyMZ80T7icPmsRazBbSSpXnM7DkGLV92cEPTkKZggBeqz4bDdh6YfGljdihz4MCSe9ITopdfhq+7B198Lb4uA6rsCCKXaXFOvgWwG/D3G1h6/pPt7cfwqZ3T7Tlw4AC5Z9D7Kcpy7+Bjp+wGTO+ftgeyqKv3T3YqkH2EgYh5ktnCIGYFgAG8N4J4P5k5CtBR2AU37QCA7bgBn7nFPHHMxOduaW1Zyw3KtN9k7h/cANszmSBsgnDT+vy0KPfFKXwGBKb2fspaXDcwQQn8aBtC514yzZZjSZYLJDUtLHX1Hu00DDSVEHZU0zBlAZVsASFVxUuVbAP1mUzmAF4cwM9Dnii+jf/2mU7gM/HkTJ90aholvrSjisKTU5pkCzBVlSzJtsIp+85pT2T5tehO5U7jDZ2TBCWCxvgvDF4QPTd+iX9GcEb04vhCYaEy239VcGF0Vvx69AN+hXKDsZZ/VHjYfCPyIXqff1/5gxEr3NIos/cEUIEKbZAD4d6vgAIUl/4aaECDtm3lwssku6yiuUGCQDIlJI2S8UHejlLvUWfHXTlpfamlqmoXtDtzlq4oDiFqGiY6ctYy0NXbbav4TClg42b3dgWiuytwdt2ZA+uTr99D0IEfvT1zDC8J2b6Ekm5TwPYloH0rOnerPXlaJ5+Kmomu3uPbUUp5ufcQCOG3D78N/B5OXhC/29ra/KZvaFNjEvqCJuIryqvTfjPU1DjUMtMV5QI/deE7G1ZsX37Ogneeevf6+3dvWrly06abV17Qjt6BLDzrpZkd+d4P8/n8Lzc/ugv+OP/I347DK+GCL+evIZj9GAPpNMaQDL7okAtP5hGy1xrAI2TnWQsPbZflGFuzmheyq9B96DGRfYmFEuA5xEgcVBF8U6atJ5N+ADCFr9jVe6jTNDHwuno/ty0KxwSFo07hiFvDjhKweYii6IqpnK0ZzRw5l07OxcEUZ3OIiyp7YAu8A0QyE83DuKWdxicvvNIyoQcLgNZwFlpZ0vKgPQOdL8sqLB0KQ7AQaEKnO0e9c8kjf65fzt549srSn5335kx8l2djfhRwuyThP11+kCxTi/j9/FSNsINlUeJLWzJNTCUDXJKwWZjskEySb5MJHX+TVMn9J7vQXltFcjicKjUthFKlWBbVv3uALA+AegKPTCtZ7m8kDIgKF1R9PkQvaEuGhbzrHLIVnx9NTQbINnLu7fjUhN0VBU3FxBc2bcvvuhrhSXI9cjV6Mfu8kdxIfi/3Cr9XeF18IyGMU9vUS/SF6hz9Bt8N/rt8+3xHYkfix2PqK8ouP0rKpsjzbyZigUQiJiZiWK6JsQSjJc0u9GzHJAtaXTCyg9wnIDfWAZEq92NWuYhZ5QKzajl5WfgdDEjCsHAvugWkgAmH26q1oxXNRIvQKsSiPagSlML7tlEWa8di8mSGSEvKWy09La3HetoPWz7S23ixVh+U0bHwdKS+y3C2FDcTZomZNPmXe48DAbOZiD8l/Pa4bXgbaIftS9vaqoJl6WEYIGfDIc2YzajKaGoMBQMYOPifFc4MQ+GqZx7/28bHbrz1Cbjb//Vv3zl5/vOvPj0juXnzqJbZ3TfvPzJv4YNP3O1/+4PPN097Yd+zd14+mOq2XO8nbAhjKwO3u12tRCM26bFIAkAC8YyKV2BthawZqpGU5dpgMsEmaxNcrVahqZEoBL6USZgmJaRJv5Pd0/VE5h6oJ3/Al21txUrvGO7xY6+Zr/my5v5MI3mTHm/gtJA2RlujsWOsS60Vcebi0FXmgsCc0LXa9YE12t2Bu+I/1WRF1XRWgPh6kHStjW98L4yAWtxfQzpVNchG9qBnQRRdaUv47jh8e5qvX0/7inraVySWfctmphalUCpCOCO1Wuh3kFB0kFB0kLAsTWV5GoK0mUb4qU/sIsen1w+MdMHh26PvwD1wOFbB3bZSkNTrB3TBB1y4ZI5RwLjC+ESmvSCTew4TxsAWAkGPA54CYLZzKQbzGwZGGxEfcEmbf1gSw2AoxYQwLOSRLjySkBgXZAkqytO5ztKHFq7a8vRNTRcGfMqyrjUL5q8LdJZ9/rPr3lw4b86t6/NH3/9FL7wt8tjarbeufCrwE3TdTbNvvf321I7Xr9g+Z+YTg5I/v7c7/49PiK6PYXlkcnuwnNbg3/cBtfeU02SdOY13hTXnSW3eI6SCHPcIzpPjvEdIBcnuEYLo7ix6hOBpOlEs7OOqAdEjOI/gPULyCFdn2MNyvmnqlerj6ib1DZW7kLlQ+w+W8WEBAlSeEThZYQSseTTtTYYNMAzLaACpGiswe9FeIAIEN9gyYFm8C3hTZrvQvF0cJ9slpc2yp1Jkxz6hxJfUUJG74DBbE+zyimZhddkQYb2BCH8pWqAZIBOlEIPIweQYTBzeSY5BO/QuuI7C5guix4lGOUEkdIv5iUkVinmi5WSLlSVYyWbXDsqwWM4YhoFVzLkzpu0GGjb9fFkstd+1laYsUz4wy7AlJS3kFG0YRHgfO6DaSlZdPTmr2umsWp7AnwOzVDO1uRqq3wtksJ08BDZZTcEKi7EgerjndvTjB197rTM/BM78KbPzzAU/zT+FReRDPQsBlTHENizjnsP665cdfq/3fR7hV91+9HmEX3U7y4eJ3YT9HNG0G0DcXhppIJjQ5WQwmPARZaYYLJtMaDoEQgQrcmpoUoKKMaJmiBgi7IV5q2c/Fj1E8jT7qDo06HJ87PqSu0se9j/v/6X6vvqHuCj5I3pdjPHLQZ/f/6ZuBHR/QDc0LH1sP7m0rW/Qka4bdhC6t7HLYOE7RDJhpWNb5IasmeYic5V5n8ma/2vJEqGSJQJBxIygiCdZIutTvn1wCDDgQ3jP4dv1Hd8lYUr7S5h+MqadeB9YqtA2aLfwG4vkw2vFQRkOAwYUK6ZOqYFrUPZgfcRQaUPkzRJs9Lc5/V8sdLCk8ZcFyxhsEIJgQMDmYHrqz4OPXXVr5+Z1l66r2XQv+qBn16Tb7++G4vIfnvh1D1xt3n3P/qcf3z6pNYT+56X8ihn5k799/f7thwCRKxMwToJYF5WAuoI2KjVgKZwJGRivSdoa1DRsdMS58mRAk5MQVJnEHKH+hJkMm6Tjw1QXhak/EXaN/wPvHjB/5QGg/Zi5v50AYODCKBwt2MHR0dGp6b5LUguZOcIccYFvTmq5eG3iDnFN4n3x3ZAlpEgPVDusyU+tICZPnFBl9AtyW5M1hG8sDt8h1loX0ULeTUKiD8COqn69X1XU+1VFvV+1zKS9b0JgYhGCn+34LmJ3musHYNkxvCPpsUzSE49JLM320vMkYdbWWsMzw4vCq8Js2HR3wK1BxZ2eC4fIqcIhcs/hLlTZkSm4B47+KUbLMUcZUSWEG6wAjd3ETOmsTlWkyro8bJATEH3UBoV0NVFE2CAh6sdHrJOKcmCZwzA8QjBQBBvmdEdkwLiFuVFTv49G7buis+cHB2//7/zhH991dPNHPcMm3Ttx6bNP33jDC+wUfUHDhIazv/zj7Fn5f/7u7mM3w/FwJdz0i42vnvmo/YW2rp88umWLI2MuxzopxD2P23Kxre/XIIv/kchKWHATEdGAICup2jKGQaSJJ1E7jkExQ1wm/RVMwgibiZhW/LEIrsKOSlR3WWki9t6XtEw4cWyieZLY8MQbJvZd1so6xhzmDP+QsiAPGF6oGBqDwy5ndqzLHxs/1NjN3Pr3u9hTm9c9lPflT3f9YTP8HL7+BCAeOcZ5FOM8DCpAA3rQQXqnCuLJQUQhYLsdTR00yFeW5LmapE9LEtVJXecTO6nnnDEwMqiUMzxDmxD0SyPCkC+JBmK8vZgCkzCVQZXsHqRnDFImCfZ5yP3db2KhH8tmC174LnojvHcjvHMjh6k3bngKy70+2YaJM3Y52UguS44MUlkbpE/a93zexfC1YL17A96b8OmEISFYGxoXGpf+RP2sgZMa4E3gJriSXS4uUZaq12o3hO8Bd8N17BrxFuV2dY32w/BvrNf8PhUkI0DFV9owCBY1Zj9OTBZxYtLjxJ255LJXJCiN8qErQKZo70zR3pkivs0sM+wU5lsDAsM0kNEF7+9sjHjMGvGYNeK55pFlWxnIdKErOiq9nSq9nSo9V79yWdBzMFNBO4iC6we/7sl2KtCpS3+iIN8LJqQv206bktgDRYxb3ntoeyIVw2y7PZWqJx8DU9hyPbStNkX52JHz7UuXgCVtbXAQdjSGUg+jYEECvMUf6DMymWKGhgsWX/XJK92fL7x67Q/zJz/4IH/y/u+vWXjlHXfNu+LOEePWT7ll4+ZbVz3PxGsfXbDhw483zHukdsD+O/f1Agi77/sFvOTK22+bOXvt7Wd6J6yf9NzqW1/YCLyYEuGTJKhDFS4GlVKsG6ssrBlPUpARFUnlcoQ46zUEZRGLwsyiPrsVsQZklJqkoZfqk3RG1wNgMoTUsdFM7BlDoqjLiYtI2m5/pr2RSrxG2nwYgYQlTKI/PvpVwRsuuok+Y8Ouo9aGRTnr31y1/7W+can64gvZ542IXRiyKy4LXVoxj7kqdHXsioobYjcl18XuST4e2hTbF/s89EnqZMp/Vugnoc0hZkTtHB7VJCfpM4lVkiAXge9MdrRRJ7ls6ajqIiSXFiG51EMyoWEWKEX7Kb0nC/spRfsp2B22+psq6wcQXbcD6zoP01Uepqs8TFctswqYtmwLWesz/TCNVZCLZxfNBYOlTwXtBdXYMqnoPdRRluJTnpe8BLa3ue7Q2WhIczXRPPgTYAj7LBqnSkMK1CBF8OLNoZWXT7lp8lA4dO/VO89A4bX7jt14w/88/dKH6K2fLr9u+6aVNz0Fp5g3XHPhqv9arEZyC6H4Xx9D8/H8X/Jf5T/Nd/zsFab5Rzv3P7EOqx8EdmMFtIZN07jzcDvFcoAXJMS3sEwL5FkZtWDjEyASb3pKdCPCS4gewT4x7XvKqP4hTUEGv3cfOHCAaTtw4MzzBw4A1NsDANeGfS0B6Gj2qBJsAX9dFL44U6Clou1cEc16dJELxbMFX0pVX3YPOeV0NN6NV5SX3WNPeBuR6m2EfRt52fPAQl5ozjPhFc8RlGXP2/MISfduw9siOFt25aBumNT5+arTJb6mvI2IAmujuofqEY4u680G8wrxSmmWeSez3nyDe43vNo+bisi1wRyabF6pbDX/rv5d+7susSqrsTqjyBLHsqqmi7wgqJgWeVWAAODL2AYN+6UENYC/QgxDtgXJNibFqgF8lJTkODHJM3wXWmxLQFQ/sxFEaA9UsBBTbJ+aAnMF5uLJ7NvsxyyznoVsF4S2MlntFj5WmfUqVMm6aQhvC2iVsFpAwoPG+793wBDFb/wfwYCIRc1jx0CktSV2rPVwC0kbHCOh9ww20tcOitBPihns8a019+/X9+9fyzmf2BYZv1WZMn5r8qLpDq9Mn9bJGowo7Ok9jl2Frx0Jv5SY8v/+VQGbYAVTxvjLmHQ1LzCo6bdo2kcv9vzoqQ/g/zw2tjzRxO05NRbuy49G0+HDu3/ww3uI/cWAh7H99RnGqUWt9827CXjsWhKBZ9mxFbmKeRXLpNslfn7sWm6xtEy5jbtN4atDEhOprkuGSiSslY8WYfnot0PjdiQnSX5fsq6uthYkSpK48UuTSQuIEXxsvnBspEiyRbD0Uumxci6S5lViFPHYLberiNDmfURg8zzpZF4kd8pTWPEBAjn+kqp+5+1vs3vnNXNVaTVBzqvK5GwqAapKzqXGBuB7/Ja9LnvmeDJFA9ApN/p8kuoRSriR51OdFJEOwTuxaJnGn9szI2dECrHl9pYeEg6YSNcnOPEk59UXjMRvLERbTGy3En1mZUlsiYaWaBy6ySorChbpqAKWNdJQ4yBYgX19TCOHfhilN761bN4Vd9x36epfrMs/CM+6ZfgF48fe+pP8H+DV30ufO33EJQ+ty2/m9rTtnvu955qq962+YtuswczFVmjehHGLak9vENThC8defP1gx2af1/spt4J7ByOmZ8dstKAEQcecpU971J5JqBRo1GaDxWB5yWpwe8l68Dj3IvNTbTfTqb2uHQSHS/5eYum+EqukhKnja6y6RKr0PC0XuDSYi17JLSy50XeP73HmMf3xxEb4LNpovaf7QQDEzIAZY0k6bHtNlpoCqZqsaQDIxv1JlYknWclMGxeAdArr7Fhp2OvGsNeNYbcb5Vw4nRIhlqJ0VcuJtO/FaHL2DOo74O6hXYJ7BxOuW2XRhsdfkewL9p2WwjDPVpRX4kb2VTY1smEBt3U5j4IBH9FVbOerZ+V/eeRY/vc/2gLPffWPcMDIV5pefXDTX2Zc/cmaZ/6M0OC/nf4FvOZ3R+DUbYfeGrjhgafzf7t/b/6zu/cRG+onWH9Mx3xpgBI40PalSuG5osM9lpk0gBjuh/L+2SsP5aXkMSVYSsPCEoWsJNNsXoRuoaCn0jlWWmJ6jWTKbhTHdAwCDHrzfw36f3qg/9oDffI7QO+utvdD+uCGc6+3hzJxQeRFTmRFlo9GYhHEKzLmUZnhg6FAyB9i+DgTLoM+HS8iYqIMhmSrDGRITqYOv26B7YQrwqFwCPuxCPNEVVnjUCf+jp3csp/Af704/ea25csm3nD/gTvy22D2/p8OHjPhkasmbs7/htsTLLnw+/m39z+fz2+6vHHz0MFjPnvuk3/WJfGzP43l5FHcHwp42Q7yXFIUBQEwLOkQWUoqQBQIHgOmr1m4hLkgJac0JMc0VkIF7enFSguiRPp/ECWS9G9kijryMhexbgNP8MRK+4QTh78lRwY34OYJlrnvp9nKMz9hMmfeY27n9mzOt76U1zbjO8JWPHsHflYJvGSX02e9T4CFx8WP+kQKpRSEYsr/z+ezFSeH7IqO/LeeTh45498+3WHHoydW5jefbCPz0ZkjaGvPZPJUIzb3zHPk1it4cQt+Lga2diDvxhmPQIL7BAwmRmmu0fSvAl8Bj8a7cqrDIgwmCruedtiO7urSO3OkvRBJOXYMP4umHjuamp3PgQ3OZ02t81lR5XyWJJ3PSMxJVdZpZnOKW89t4Rgmha2e+8AGsBWw9cAGk8HH4DjgfCm8cT1gOCcsTRo34jb6F16jf+k1+knbdEwm2uhPs++3FbHnuTOmbV+N7aL2tiVLW3oKBgeJV1PR572arCbrlVeJRUHaldgQdbhdOXCPrULEMkkOiCliSaHndwio0MKMhxGmgBHmf80DJ78lWfjvkiyftDuQJ3AggHj4VfQ7fJ9/J7h+FADewPdpMvUdYp3idCHCRL9YtYibiOJS1DWLGrO47TDBkUxtDaFUH/maM1RGAhCJkqIDUUKywpOnUExy5wq+851kL8UEJKHgPt/X3vOd6exXN0EiN63d3ebBg90kdZTJOK0NvDqKUoF2F0+XDF2ydMnRpYgtb7uCUIjyEsOTtkJ6n+Ut06XgGeYiacZSmvvioJqSfc0GXXAqA6COpZmIxRp5cHI2StCT7EU54AMmytmay7S81yn0tIDEgTIn6k9Qsd7a0uI8THsRdgBdxu1VABliAMVFdoW6Rv01bkp1nDrOYGrZKm2APo25jF2hXaev1UQFcWJWG6pPQuOZ0YItTtDO0eVH0WPMw8LD4kbmeYH3IUPXGzgU4DgkqprWwImYFNWLjYuhjU19UZSww6Npum6SfprlW+1Dvj1oI2bQwdu5lNgFB+9QJdlzilzPx5ZycspWVylQ2YMfW4cK3hd14Q8DglFykYMNqMJViSMEUsZiE5pdKLcrxc3iVnOYJ9HGDmskZrIoKShqb4n0EJhSfwGvxYpWD7dj/wE3mln0F8NeBfEj1t5E3Qj8MbgBFNyFaT8HKhY1Yu/72ON8n7oJ47eq+LuaPleCpJK+3qbL5Es3s/TuzrKsPqCMZpd2DsvqjcMouWMg3upmkDJt2N8AS9qJew4Iv2NFGx46DJZZFRasgNajsBJe1hCKDoEzIbc3n9uSn8btOf3V/edP/hFz5tRY9q3TQ9hDp1OO3H0C2zKlRJ/AP3cwEc91FT3PYXvOp9D6Dn+wWYyoIRr4PNrpEifsCss6Z6qo0iX28FKCiH09EQkMI0osQpIgsgy2hk4XrCGmyBpivO07sKzhec4TiRxhGSorOYebse1ixyhLtacUmFImK7OUxcpqhVPEYt3marsUpCUpGr7l/52OY10d920DSR5ZJIEz7ZkWigjsWFLJa/Y48hdzk48EB7H7yFI4OJKB1Igd2qVazWIKLwBN9gxuIOYQ7utO0R6bxU3YvXNsVrQbHbIxK5RHaU3ZzigmGx2SbK1wKs2UiqygB/DbT9ZP7PRjssQhSzAZJOTX24IuTrxiGMrXDlSaIJa8GCNPvM6gPa+fyWNg3MKuwqBYfXo1jQ/Oxv7DR9y7QAdx2GSPjxkwYAYC8XA8zrImG1DCSpzdFN6pv6Yz4XAkjlIltjXJPylsx6Zx06RLzanWTP/08MxILnZp/J7wY8iMJhnGl1SkYD+jOFgEg6BnFO/MBdMpbM28XFTGJWC0kQ4UPDUpkFA46TaBRApJzwleuFIgXUoFqxBbXQJLDE+5GR5IjIKTYaQJNgoVXq634c8Bvkh2RhOz+2wcz+toL8BhwjfLvrD34TdBWSNL7FvqfgwzQVMjsJpRuqIczIZ3wqFvwbEvduZ3vvJ2fs/GX8OS3/8Bxq//7P7/zP8evQmvhj9+Nf/TP36c37Dj13D6y/l/5t+GzTDeAZUH80cAcH0PtgfzqwYiULCTc62FATTeHB+4zLwswCpqEotbEI44tqCvX5N/Z7lGR86XFvfiDnDiAXpOpD63aLqq64TtIy0hxlIxiP9jEc1rU81rU61gMGj/r0blt03maLHd0OeHL3Ea3W1wz2YmhiVxtqlXkcS+HaqFUexnD/UcClT7wISrHmj7Mv9G/k54476ftF84+Pb8Xdwe3Td359V78z09LzFw3aoZtwU12rbTeu/lvsTYD4IauNd+aGb6yTSKRoYFkZJgS9mKeCJQGqjg67iB4Ux6JNcSHpG+kLswPC7dzk2tmJZexN3I3MCtY9ZxD4HHmWfBi8x74L3QEXAkfCQSS3AZUMeN5Nh27oHIw+n30mxVqC7dHMqmx0XGJcaUjqkYn86J06ypwemJ6SW50ktTl5bP5+YFF6ZvTN+buDf9h8gf01ElAoNYF2yPZwGpPWiIZ9lIIFLHjeBYxIRqGKEmHQlxgC9j/DEOkRXAVSaTBoPEyqQgxfrBIVYEh1hRUCeW9kdIv/k9hvNTga9S4jhlOL/HcP4CQPwXoFiqbnUdqivzAFLmAaSswHRlaSy+lQKvKRFyNoXymhKt7eO1PlabcKI47nKslXr6tIgni80XYDWZb5hvtLuuP1hKlOKSpVWhsJCu5ovcf8KPeOtQlxEtwpXD0tXsP9Yuzf7kx8/86vX8vi1b4Zg3CHNe0/PJxqtfxDz5Qf7PMP7HK2dcNvfH7Zm12Rsv64YzPvwAztnzi/xPP9yR//iH9e1PwOx2KD+Y/30e75z/z+qRUYKjp7BO3Yx5NALK0WS7zKfo0Dc0Mb10nnh1KSvRgkeRLgW6rMSinzYwLTwkhOoRikf4unr/3OGLNePP4x3l1c0WWS+pbjbdT8P9xN//V0dJ2vke72+6n+R7exwmqvQLEhekpigzElcnlkrX6dcbd8h3Go9om4wu46j+qWFi+ZmyjIBlGZahSr44KouFZN5HahW5iCSFwrFoMvxyb3dRTKPbDpKODIdBWTmVPBGMIF1M9sNb/7Sgi7cduWRaf4L3Kpl5T1bwpCAgSqOIPI0ctqcqF1eurmQqyyPoWznAggCK/G8FEP9vNX7FyI3f5dW6Uj96OOLGRYgB6MqhTKYHr2TraWWiU5jIFaq6i17A9eJsWbSNrGGOsHwjiGKGS6jtp2P9HotmLWwB+PBbtxNZszyA36X4XVDpbX2BxVA4FIYVzCBUnc5QuedUMpY9he7e/5sb3nxnQs3UC0HviVenXnPpwLLx/w2fuuPhiY88k2/g9kz69fVPvF9SVTnx2vwSOPj2dcMVoedapmnY9edduQa334zeT9m/cu+ABiYwygLVRTmqdBFdqLLAPWC6fRL1iBgmRpXS/bSiyLNaRCtFdKKIjns09kUjbhcjj4AOYdfkZjOz2WXMcpatqh7CZBPnMuOEC0vGlI6uHFs9hWkTZpRcWnOXX68geQ8Ch0qPqPKItEdUe0QFRYqzs0NUeUTaI6qJlz6WUDVauhJVMtVVQ43mitFVY+qnp3IVU6uuUhZoC/V5gbmR65UbtBuMm8xrK5dVrWHuVu7S7jZ+aN5ReVvVA9rDxsPBpOtADixL++LpmJSuhWkAamM+tnFwGszFgkQbeH38rjiKV4W0gcnqKljFhbhCYJBLDpSSyRBDDZAMFojt+O1+tNMqx/pjzl/cHlhVqWsKV5YoScZFgWcZxMOqynK8jeeS8YExm3DFfVi/HwuBgTR6Sw1vE6bgZDgLLobrIQ+74FZbHZhM+f3nTCUX5giTamSN3Ap+ggukfoUAUhHHS32FAFIa1MJaYrzpOppaS56HMmVtrLFM/Zbu8PL7uI1g2kc8BHKUz+NpXyHP5LuEsH508Gwn5tY+4TBRG6YbKfZ0Cg0Xk+Jos6c9c5gsTpCWwmxLEkAkft+GnThSZ+69YPEK5WH/sCRqanTDlpXVJK3vlIa6QeZgIBxiwzTsj1cr0zN2aTN/fdOiF6ZMnjEyf9VF86+4+av/eOZfa7g9xuZNW5/KDocfTFt9w5rTP349//fH4O/Na3546TnLRo+5oiJ8eWbYM3MX/WLO/N/cot9z7y2XTWpqWlgzcseKa99etvwz/LAN2BbcQ/OYZzp4TywKHsF7MTPh/xoz472YmfB/iZlhGcuhJIYPwCjiWKkLLetIOWm5XXwKonpSgwHhDuiOBDhqK1QWi64g/sqLGP3Zk8hnPAmcd6IU5IzizseKg0e4M7Grdbj9E5OO93Hi0UUBL1I6SSKLyJ8vYe/Oxzlt8+ZTfyeZYezLlOP2CcBSW04b09hp4hsiGyLwDmHnsJkdKY5lLxBXGM9xRw1BBcgipfa8FOinuAJFMA54iqsjF0gjz19FBX8V0fgdKTl1/FXUngrBVGhyCM0KLQ6tDjGhf2s/78xp6ZQMZc/bllNuxaujxWQP8XJBi8msGwFytJhc0GJye5D4rX1azInmTzCxf1JsRx9rpQZ0BrTDJst1WIZg/9ApQrHYWa/OyZ9+9z/zpxa/et7mm97fye05s+2j/Jln7oXaZ8ykM9tf2fH9V8lYJxJHkLDNM5bUL6OBHdwArwjZE9ssJlx1IBY1rehVOVOMFTt9fU0uenRRjBLpBURLvZ8XNJLo0Z05OaBpL7vn/cTbCCvd7AnyCDnmRTzIbm5OH1Z6UWdMFIUfbR+HPUbqWcmAk0QOIq7+owPmRwespiaMy1ZavBa3K+s5WAdqmCq5Xm1QZ6l3iXdJ69Vu9biqpNTJKmKRIiK39EaCqgJEfMrWVpqCxkfLkpQSuYAocgCzEeICCHESvtRnKRmI0lwRzkUiDSbXZCeLcLW4XsTrENoasmuyMxG8Dz2JECJbrBQ3mUMN3CxuPdfNHec4rgvd2aHM2ugEvJaQ8TTkHTGdEWmx6LGIMyrNzYyTxLgT0Ar0Ba22AwND7X+2Sz5IPsQAicJ6tU7jt9bgvYdeRGJboLd7eFsbdY1pKWPmmy8iTMtgkxO9aoJoVM+vfwdvGlRaPhCue63nVW7P6d+vXnzddWwtCWVjdXhB71E2wZ4NasAw9Cd7gKRJdVEtVler1dVltaHBYfERdePq2rX2ugXa/LpZDXdra2ofD/0otkkL1nhJ0Go6Vo5Qz0VfqNkZ3VuzP/p2ze+CH9WIo0MwSZSRRZjJ5+uriRhC2HkSoUrDpZHMgLrmLJsdMI49f0BObMvME+dnVqhr1TfUf2n/yljDmnXImvWVzeHGskBkZu2iWlSbqNdb9fv0J/VenXtS36L/TWf0vV5xyK6cTsfs6UQjEpbXyU0EyKgjndZc6TypydLTLmT1CEXnjpyuJ5hwF3qhI+KwG7F/B8jyOVMjDwUSCQEUngWMqZYbE4xSe7l5OcCirTg6+nUR/51xgwBKDvBUOleVVRIR55pPXzgirpIlsqeSFCmSqsdK4qGQ9sTEH4m0xxS94UpPtld2octsvdom4zpS6Yb0ljSXJR4P0ePYrHrfIfZi9ncjEunBWRq/S1Y0N2S7s2hDFmbDpGqbnDwsehHgcFWkvN4bglDvWQ71joywrVx95Sv82zwq5Vt5xAc8iRQojGJwzjMox+vU9aB1m3yE+hy0npOnUQpep/4HrXvjBw8vhCaIUF3iWBSZjImZiI4JPFaQuDRykTlyhEjZw9jgwKuHnfFZhYOXOPaaNyIFUG+BVoWDJVXEdEgTw2LYUPI3pLnaHYSCqKURKoGBULgizfCCjpz6K7wT0zJn94It+85bdv6QhR9eAZvG3Lnq+pKtkWsO3nXnC5NNKVy+LxH+/v5FMxqvnn/l0+mS26aOffGOibdMDOharLJKvmbgWW1LIkvuGW9ffsGg646fvuOs4fCjmoRZM6H+/FmXTTrrB4QH12AeJPFiMib1U/tGyKlGJTeEG8NxraVbS1FpaXmiKXFOYnHp+lJ+hL8l1BK7MHRhrF1s16YZ7aHvxRaIV2lXGteErol1l36gfhj+MPpn/xfhL6J/KTlU2lsaTXH1Rn2ggWs1bO5CYzI3j/uw5B/sKVM1gzrLIxBP8AKUgwldISUqfc5IpMjuLJSr2OW5SOVBBZqKrcxSViusk21XKL8pETcXdNLztJ3ghuINhlVIdToNTVATlcBAWQ4t5ALIcgC0M2c1AZ8XRmQ1L4zIOpFlatM0MR46GXekTDTHVCHUDbFdvQFuhcchWwpb4STIQGIIEYaDpNC3hLAGpMiE1LKAPoJMSJEJSWaHsATdNURuGUbI/UJabAOjyfOG9TMCCOiWtkwgUWu6DRvINIJdBGYnxNJKi1kIIkk0BSwpq8BGARmfioImqCivZrCB21elOvD5zqXbvr9liZ3/6uf7FqLmqfeveOmn1654idvT84/7Jt335rL83/Lv/xg+/MrUew68dfC1A469MLn3KHMMy/IYqt8Hwr3HPeUrewV1kkcYHmF6BGn6Yr3crK8yoEFE2mSwGDCA9SUUIZJgFagHBZG0oUDbUKB1pIJJ2lCgnHjg3deo+2Tub28kb1olKqmwNHGu/9zwFP+U8Cz/rPCP0I+Yx7VnzWdjqqhF5QVoPrOAu1ZdrK3WnlN3SDvlHaoaUteof0GMXj7TWGSsMhgDYtFspxtoJngWvq31YAM4BI5jQ8kwFNB3jwl863TgsgdfowBfI2dU6iLVAeVxQDNbJ4rk9ZeF3UClkimFENsL0NYzjqNsuziFtttqcKgjGVN4E8WPTcFzPoVMjEJmXCLoCdSgB9mgK1DLcsHKtwVYKrQKSNBp3F0mJxCophS84UWC6rKFMDjevL9gxjvw6pOe7UvHT6kYT80ESMwE/O3SEyTKt9SrXLey9Wb7YfxP/TEMRM+AgGFnCEQzGTIdKvhcBJFMy7aSv/3sw/w/l3521+Y/lm6Jrpp+5wvP3r7gXnhHeNfbsATKL0F0y5an4guv+uU77796K5ZnYzEOP3Zq7OARe6WMWK1Ka9ZGa9yQwJDEpegS+eLAlMQVaA43V5odmJXoLn2Xe8//UfSI/0jgb+G/Ro9QuRUqLc3EiLAbHyOSTxiELcxBoRFoiDYejdHGBsYlLpVz2hXaEf7T0Cl4QjdhEBuzpoHlmSJYAAs0Bgs0uZ9AK9SYRpog2NtnBYMqy+gn+4zvBE9lzqgyzYMWNC3bmmWttrD0I8B3ZKDlI0LGojYCkYYWT9jEojLRou4M6WFLJz1seTlmy8slW3u9u8Pib7lPLAwt88ahOZjZmfNVCl5EiMQ6CY5G5l4R3hY+FnoFlmBpksAIScqQVPUKSYdRKb6o+SPEKL6iyebJRdKMOOXUiykIMLqxhfr7WKq1HHYdHPLuE2ckb1o2hK8oJ067gx8s2mBxBf7wuftXvXftgndvm/VwfUdP6qVrV/x0443XPbXmJ+tOP/MkZO6+aBTST41Fvt+8+YvXPvzNfqITx2OdmMSyLIgxtNcOl4JEEE1l2rl2aaoyl1nILZLmKmKQWEy08TBhX0yokgQdBeX7gDsVOBljB/tGRAcnRvkmxEYlLvLNiF6cuNx3dezyxHX8dcGT6GTEBCFoaOHw5BBxJplQwlhvbjCRabLxhCyAPegFwkue9ui2aeeZWCY85MdyhhSlHf//nlKhIxe2NWzGUT9T84ZYasQwJX2gkZNK1XXNWzWoxUpJHUxVupl87iKmWiksDe31jMiduVBTQV73la+Jnn40KwW7sq7ZQ4AHHFeM2JkcKaoogCJBQeEInQSFAx1yRUDRX8W1Z2i49jDehgFyckmxs0tKZtzK95aeJS1ulbhbrkkMr6WeZHFydgGhjPrBsIwOweKZ7+0Z8OXuz/J/g4E/vgd1eOaovP2O2et6PkQXqcNzd63cBHPhZzphKVbiKqzJ/yn/LzO1Zc+V8KE15175HNV5fgyW1dw7IAyH2smABI1ofbQhakcXR3+kPqFt0sSYVqNtjXZH2Shp6tJYaXOJqDGqkZBhEGUCfpbhgfxkAAZ6/U6T7sr5bbavhNJjxLBbHahgI5kFDHoA0pR4x+DhzTQ1nkmUNq8HMGoT1o/aGmZ9EKCBmhoaqCknwgAMcEM0X7lB84AbNP+cWh20dIbO49DVe4oOqQPPRKL74B5QBk5CGUQymZPFvEmC6CdazBbKoMcyx9pJJKeFDuvPktkbzr0eOz0WLwm8iO11U/LFgcUbcZiBmbpbboEZzLpLm6yKIU1DmoeRcFtYIJ1SAsmI2e1PPumP3bbiwhnx4Y0Xj377bebxdUsWNo+91Pdjeeys7687M8/JnZ6Tv4j5HPNpEtRh23WWonCBAUpV4EJlTICXSqIlA5R0YEBFVhkauEAZG8gJ05QrlVPyP4L6oIoB1WdXnF19YfX6ARsGCEPLhta2DhirjC0bU3tJ2SW184XZZbNrZw1YPeDD6qNlX1b8rdoKh/hgF9rWWZPwC9QSMFOggdoBq0E3OAiwe4Zusk0ukTDkMeUJVQ4Fm6qayEwKxbMnfFU0LMEbGlWZk6sikYNhaIbt8Kzw6jA7APcPmjqAyvUwlevhglwPU7lORijSrZ87cp3sRUYsunI97NQ8YQKroFNFMuKUe001F15uwCpQXupBrdSDWqkLtXCutPIV423jY6PXYEuNVmMStoE8tjZc2T8oZ1C2NmIEUEY5HVyXIHfkjBg2qKw3opkBy8uIuM9M7OPsJW781iyW+FTkU44/ScbiHnZHtxx2AltLsOFQCkNhxzsiCUHkSP3wkCaLBmfTxYOv5m1RGs9dftOdER2u2PqH49f89of7bnhu7h82vPz5Y8/dtHLj5huu2zgtdlFV45zpw7beA1s+ehTCdY+uPrPg67eve5Gp+233K7/55Wu/JHy+FgDmKI07btwNQpjvguFmMsuATX3JKnYIM4bZo7F0UzAcbQ6LlmoFGA4CI8EJAUVW++l3tQgTqqfr7eqcWiXZTUObeyXYLcEQVe4hmxYS19BlgHS9RBx3i5YUU5dEipH9JJLFoFCQaKRBIrFD6uKQImS6fnInrVCbSMOl4eahzVtDx0NocWhDaGuoN8SGUMCDQMDr5oCHjkCVU4Jj4ts7TiZOSmHIHwIsTfm7yblTdphKGcdREsldFQpxTjnuDEBUrCDqRE0Mnjc5UmxBLsm4ZYWYOtEfE16ZvuPKZKHPkS86rwtVOq/GoSZiyQJIfcwtIEMmjWlyPRwYtCosggYdU2s7b+5e8bPxndcunPzDFuzOfPVA+7NP9MxET629ccq9N/XsJTLlTtzhLaRuFQjwqw4kF6oovYBDYTwPJkZF3dD6maIQTB/NFdGsR3fmkOJ5jx7Be4SAicJJe4p8gz6aK6JZj8YnZd3eYzyC9wgBE0V3qhWSAH00V0SzhcDRsJw0lPTjJGm9tEHaKnVLH0vHJQFIpdJiabX0pLvpkNQryaUSdlcEFjESz+zt7XbPUJdjboaA53hW5oUqDrBPshvYrWw3e4jlu9njLAJsij2I11jW8X7RVLYAJZZCiZXJLbBUWbGesmK9/AJLfGWZwIqdKH4TUEtb6OwPGDYZZzwQHURGxm9m/t2LjjDD2Lmzs7OT/evbb58OsunTHwLU+3T+IjiC4sIH53agQnWtR6iF8L9H6B4boUK0wCNUj9AK+3jMx3iE6hGaa2RV5ViuihvJNnFrOC4scpzAsojl/ABqCmICKmtxilDU9hW07RVeSFjGemxjhMNYGmtVsrxegaVKqzJJYUjlrD2MtLVbSUuDEgoNlylJGj1RSXMrIo2bUJmuRP2BzWXnfVOakzhEy0RzzNzRnywBrRNI2IHkMJ3SDtryVlPTWlN0hh7oommkRVOOQ0kX4sDh3G+k10lXQGfCFpLDIBMnrOnMX1k+tHTY0M6mUY+MYz/77W//deNj+rgH2BmnN+yfMIfI6tvwYhitO1/cn3sLabDv4NVv8GRh1+/gwG9wWtFZv8VXu3IcZR9aYT5suFNp3jzE+WwY7HyWO5XodhXWKQZXyj3Jfcyxk/DiOMeUcou51Vwvx2KJKyPGEcLkTFQYB7Hl9CSA3eA4FltFEvnrPolcUiSRKRu5Np/oGnxejq6318vaucwEJrL9mYlwEwmCutXpdO2bLyJzb+ukhepUZ/JpbJtVMGeNegD4i1Se2a9urY+2iuiSovZMFNHxIjpWRJcUjfJMFNHxIjpWRKtFSSutiNaLaKOI9heZbmYR7SuirSLaX6Tui1W/r4i2imjNLcASvUosrLD/y56gaM1V7GH2sPTf4SMp7j3uZAqFxVSFFImnJIapSCb4ILG2BMhXxKKmfLAKrq/aUIWqMKvrVestaLE0KkDrvywa8adRgQAdfk2nPyOgsBCNDVBOt2is3/JK+foiBF2wvSPiOYB9pTpugFTLRarWx2GcXileuFKcXilOivktcqU4NQjiNM6Et+YdEyWukmvGvfxCHF9qJ0BNFd5FKjxJWOHapoFcRRU8CCAJwaFS0AomYbFMTufgnYoyYHqViWT6RNcOOeN5OifsADVIHLBTMw5EK6u64HUd3xRtTpCV2qRFodf24kGEZL1nIhV9SwFxgrDOmUBycFbYqWxzzRU14E8HVCsOfVrQM1c8b/XfKSQyhRCdxyxMpxog1owTICu2a55qfG7BikdKb37zJy90VMw4e/F/dE6bc+EtI9j0QxNnfn/ani07e6rRj6+aOeKhZ3seQduvu27y4/f3fODEbYlt+wnm0xDcb/s5hvejjWaX+RfmU/9x5qSfZ0ktZznG4fUmfNQ8GDkU6Y2wKTGgB0I+bNtCPqTJmq7q/QxcvYiT9YKBm8jplRFqz0aobatQq1ahVq1SsGoVKq2UcroHDdRTNUStWrz+LzdwL7sR/ZNOuaJCDWcF4n9lYoRIxxixcCPHI2hxZENka6Q7wkYY1BQMeVgKeegKeSo4ROXryU7LcgfDfKdhK3/DsLWKDFvWlabdtu+bhvLEMB22X3g5pu4Jauz2+yLj1EbSyogWUh5ZsHZDvCXJoizIDG+mLV6PQ0P2uTAiY/GWYMt3CYHLUCejVIyVtU9f+9GspyabcmfdwvOXPc+mH9kyZvGExpt6lqE111w96oHf9OzDSmR071G2GmNBA1H4p53BiFsSepRKADJ7ij2XUFH6hU+Qo+p5/Plijm8Tr+Dni2KzOcI3IjQkMsYc7xsfGhOZwc2QLjbbfe2hiyNXc1dLc8yrfVeH5kR+AIMSz2mXMZdwl8iXqVcxc7m58lWqHE6wgoXlWaCf1xwoioYGCl6zmQtUxqmHHKdgEgqTUwo05ukmBbwkECXcknJn4hW37JwS3bZeWdXcIEAgmEJKYIRC8pKEvT/Gco3m50lQDNO6B6GCgae7IfVRGOFA1UnEhY6bBjQ/ARIUMjTa5YoaKmoBnWwI2PjSRIYh4IXc+yYsVd2wKxgcI4Exd57SYpyYSzLtJzPt7f3R49Wwk/AoKVCUpnBTpO9z35dY2N5GRw/46YRDwJ1+qNhrHv3sXb/6Awzd+Nd7Ps4f27197ZrtHXes3Y78sPreFfn/7jnw11thEmq/ees3v/3VW286cZi1+flsGcaNDyThC/Zy1RxonmWON9nW1NYUKk3VqhUljcHGknNKFqfWp8QR4RHxC8IXxNvEy9QZ4RnxBeJCdb55dXhhvDv1TuCjyEexd5KHA4eTh1K9qVAFmzEzwSHsCHMse4E53Tyi/LUkbyqWzoQSJHXIhxK6AvRoP8hEiyATLUAmkYtWHpShKdvyLHm1zKYocFK2W4Tzia3QupyIV5RD04jFA7OcNKJM+MCgBTrLob8JNfWFyz2R4sbN7WjOVwXAd2cFvWSgWZQMNPslA09+MxlIixew7qDJwNLzhkVgv2xgIRmYOXH423lAp9Y6W5wG9LuqhVS20dk/qi2mCAhrnx3xwJV3Hlxw7cc3Tr9vkPXciutefH75sm35+dzP777oonW9jz6TP33PhSN6TjPPHtj/1ntvvfl7goXz8/OZQxgLJkjAB+2rFJRBdZGRaDy6XuVbg63R8dH1yQ1JrtnfHG9NjvaPjk/xT4nP9s+Oz0quTr7Lv+f7hP9M/Txi1qJyNRPMoiHqODRWnY7mow/UP0T+Evos+kn8DDIgqwViCUXQ+UCCxQAI602gHwZAv9RaX7ANkCSKAU3DNmYZqw02SYNtSYoCgwbbjEKwzaDBNoMG2wxqrtAwV4j0i+FU0fPO7rRMy1hueVD45vTEdjhnVX4rT/KNHJtdkxMqqdii4TSBhtOEkDP+xYmPlyS/GUhz42hFQTQvhHai5du9DpZAy8220ZjrkG8kSwbUPTL15/m/LXrn5l8tebqn7KXrlj23ZcW1z+TnI3HkRDgIChvytz1376lzmc0HDvzy9Xfff53aEHfgjn8N97kFPrVH1vuhycIKtpk9l53CzmOXs7xkiZIoaX5L0gAjQoUyLpClmvUiFMtTfuhH5d+cx7m4Df999Kng63xtW0VKmqcSt5+95wSgnGFAohOA8p23/7sCUIfN9hNLyYBn0nJZb9ZIYL6xVqcjAtuXknHvDus4QWsBa9g7nj57futl3zv7nHNGfi+QZNNPLTl/xPPV57XOWtrzLmmj1t6jzDbcRg3MJx2FAH/Bjo6SArhhFKw1RcAtno4o3W9yvD66soiuKKLLi+iyIjpVMMhW5tjyQPkI6QJpdGWufG75Sule6fbK5/wvDniV0aRwLBJuGD/g/TAXR1MRMhuhHJkhzpBmyDOUGeoMbYG4QFogL1AWqAu0znRntUFqZytrh1ZOl9uUOek5NcsrlleurnxQfkJ9oOaRAQ81PCtvUp+pframI/2rdKjGc3TKPaLCIyo9osYZLOHuQ4gKj6j0iBIyis6XzE4Xq6tUmY2l0kFWGVQSIyH68ugAmiCNtkYnRWdGt0TfjvJGtDS6KPpxlC2N3hdF0Z9jmAQxemmmzQ6Q3U0yjtWEByEC0IRkuo3ujkComWbgTN1qhnDQjJKrSlBJIiiwTrEUDVp94gWmPrH9BGtsYpBSGoOxyqjtjzQ3ksMbaXom4iwJc0fpvO7RFDkymiJHRWlhUpSmw8i3oyRHi6HL+oooO7CYqMPn25HIHqyDdeTS5DR13qiLOk801Tnze2Jir9fpHbm6GL2Xsuq65lmN3Y2otXF1I2okacVKEHE8J8oeKacbsIYkBLlDQuwiN5lyhVool6o0qNIy6IMYKVdSniLuFabo2D03FeBMdmRbOaP8YwCJz4ZAdLCb78NSrHhGFqzzM8eWTvTKsDKZJSTrV+RuHSNlBRkyK/YSWoNF4hGk+pt8OFVYbhEWtpvt6oHJCi4wIG2ZPtNvMny5looDqUaIQ24gXiQDeLVMr4iD8gpNFWvlOKyplmQ+w8ZBqVlCLGwyy3+Ls6COWl3mlltuAUUSl8QU2/s2kJ0KU4BWp6sHoSHNQ4d9q6gc/5FRbjRx0brduOvGldcNqXrwtccmjRped/+Um34+3dqqLpu/ckEoVB+//ZVHcvNfu+ntD+BZiYVL544+qyJS1TjulonnXV9Tmjn/xisiF8+4eFhFosQvVzaNWjlj+pOXvkRlc2XvV6iOewyEYXZUql/cQ+lXuNtHC0U0X0TLZN6EdLNE0FOJidVRCKCqyZABIVPKGDK2xRjFMMtBOdS+wyhyh3qXY6NIhb2COEYaM0tYLKwW1gsswGb3BmGr0C0cFHg6NNQdI3qCIloglea07seJR7iEO2r0FEUnMeiJCYcp3rXrHcdF2IMWgAgcum3eNwJa9BcnnJTDYaIsj5FKdKIsraYm842i4T5VYafCgGQrrWF0Tl9aUo3M2IUt379qwO23d+zY4c/UJJ960jx77tNo9jooXJX/4bqeBycMiJGYJJb9h9g0vomHd4MYSboHw80o5Q+RYVzH7agv0Jzxw0rRH1KhP6Rg1WjhlgRNoX5edajIugkVedWhqkiYuL8x6luHqVcd9tE0YaHIM0z1YrjgT4cDbsLQzRKFaQgmTPxpjTRebxh2h2F4YozW1hNXOnY8hhbHNsS2xnpjbKwQnC6Evd2QdgfJYhWUNfkhh5R0UDoksZKnrKWCsnYTWDJNW5FLUx0tUV9aokkiaWK0XxjSzQR922l2FDetdmvJurOOYtaPsaauGRrinXlusOPMqnGgiZYTcq6ruwVbRfhIt4SkOk0jzWE6Qx4kNNO68r3vPTPJVDoV65qLLrp3ZOcTnedfPWnIMvRAT8cPB5930ZT77kTZ0x86sZQYyRPifpbRhH3Fde5F5e3gu8vbUagQSi42XMW+OjoyEqG4Ri7MiUAWecgXStcr6VD7+kxxBTstYN81hIOg3MrKRFdqVlYK+RLNIlkgrCA68Cd0P2USdZSSZc2gBi+opyOVVzWDEF7gtQ/tm2sGNYMUXhhqLaiR0nIWDJHPB+fJOZhDbeI0aR6ch+aL86XrwA/gD9D14nXSD+S1cC1aw9wl3CneLf0YPCrdL78EnpZ/DnYJ2+Q3wK/kD8F78hfgL/JpcEIegB9HjoCQXAPS8jB5ErBlibN9oWYOA7XZ+2UHUrfPExOSANqgQyQA1TKkLegYVhpMxa1CtyKOUxVSrPtRBrcNfh/IHMiA+kKB/zBZEMUqSQ5IkgwYhLC9GYAQ34iMjVRRRAjygiwxAHL1KlTLRdu2pdUSkrpgfIfNreYQhylbSiEbliuf/44A9lgs2tPe0x6LHDvc7k5fWBhkaGX7zzJBRii5hcJ9r+IC+zLY5Cc19f4mCH+Wv+rlw1WlkcwXu/PXsOme269YdMkKdCeGIAQ8ANwujD8f98U+jKMC/kh84uWidLPmZqXcqae8fAZXyByiAhqZfomNAl5Nb+pCMjVcYeTGqaI4emG6e6NvD1/RHmLfHkRee7fXj2ec2+O9zCtbNEjkTL8Ao3uMoRb28BWNPhH79hD69pC9GA9wJnF0n8wqL9rjaFH6tjCI0Up5Dko5fjLd3fVPRUnZAu1Nc+MjHiVVW04hPu/GGN6lPwTB0nFVhLJSqvNFd6fupEK77XpCWTZdly0GAhX7G5A3MDY1lU7Mp1oQsTJryW5Y39GQFpka+ID5/gHzXTrjDR3PQuvS+2yUOBa5AVjH1sroAusy616LsVLOLPzuRN6sR1hEUUmlZc1moqSa2ADH7V2llc0sr0p+Pi5FfRwLWF6RFF30mcDPBISEGFdK9EpQJdSJGb0ZDBFGiCP10cx5vC1MEMcr5xrnWRf4LjMu9i0U5ohX+K7nbxCWi7v5PcZO3z/401KNYtWAGq1arzGqffWB4WCY7wfiGvFR5hH1ebgRbVSeU3eAnfwe/dfs+/wH0lH2qPGp7wR/SkoodIixSpcm7wy5cExQGrd0hUhc1g3WByxREKsEo0onoRpdYDSoVmldve/bw4ha0rAsqKPxGA0G/LysWGk5Y13CXizPsK6yVlp3W7Ils1gykO5wOqavqdvdSWtP1DuDEs3D5M8xT/F/3A4wHId1k8BJsiwqqiqbloUtgvEdHPBhY3ucPU829NQvLUFMCZbPl+GEAMcJOu7nKk0PaJouWoaRkcUAPhxwBbkFEBR8rGhYqq7R2/NhnU7mUCOCzGeQGSXkwElTg7M0UvLMYDQ/b8upSTJcJK+SkdyFptrSJAsuslZZZAjdVFsxOTiLJiMZLOqe3wFP+k/Oo4Z7dMKJ9vYINrzxPxF57ZFPCnLOm1fH+YUXKgMtulw7oVj89f/AqFyrm/sF3Wwhb0KT9/itpVMKE3ZqKTWF9vUewk7bIcz/BztBg5HyeZOt04FL47c2T+mblUfsPbhNaIB0e9mU8VubiqfsEXsPbRNSzpe+/lODkkHcB3ditwZfEOuVg9uFBnKZ7WA42uNcvnDFwuHh4sOt3kMdcopNAfqzUN7vTei97+70ZcEAH533YZufjAVv82J4GWccFZ0OqL9H8e9eRD1Q7eAPExVRwVQzcHx+755NrWzTpt1PDjlr55Z8595Ntb/H6uJHh6030TU9j751AM07/SFauePM247tYmDb5X+w7jCRsg9ofXLYLOgOqf/AvWJjJGhAhWeRxCNew4xgUBfXqM9QXqBTOcZ3GT5olEezPDFCJkez042H2YfFx/THjW6um+8W3jIkww5lY4xfCmoxcwgcodwC71XEet+lbJvQpkzTH4GPyo8qu1CX+mvlTf035ofMe9JvtT+YR2Sfx9OKCnyWEdGwbUvmILB1Qhk8QBqQZcTTmX0IEjMZd3DePJ5nBFGSIM9LHMtg98XAFqMGDUMzFWy8Ik1hVFPmDWTI5mvgNQmZVUAKACAxSHtNg1qVygRUlZEliWEQjz1nVQXyJB/0jdNuVstl43JeutmWsXmwy+Yn86vp1Ljn2nqKuRmVT8LNPs5aud/9dSRqMWCDwTxinjhGp1brYyP6y3Iuk7S7v0WRNYy1ImUOZ4k/CMe0iC0u0Dr1SElWodMMlWTV8nCWwW+yvr0sa9JhqcEsLC/LSnbCm40g00bTSGSUNAVkkwSbsJc6tBViCgMLGvD2/GP//cygxICqjt/n74f3fPThiPxnqAbm/3VewzlNp/Nqz3/CC9ry7QRTZfmLmC8xpmLomQ7cK151WWFEgpeK8wiD9QZ5+voUsu59q3mEWti/kID5Vj0NcUe8UxVgq34DtiVywGAUJhE1fLzC+22fkVJsNeXCN1qfiX0UixyIRU3yQQOCVIHGO4wENEi7LktkawI5Y4vM2JqNMZKqaWg2yUJQJV9Ii/iqlWq1WhuqDtWG6I9ZSo2vxn9+qM3X5m8LzvfN988PXs+v0K63bgjcELxDu9ta51vnvyvwqLxR2WfutfYEPpc/DfxD6zH/FehNJH3+iK6fM9WFesivJOKsMdq43WCMaOEhnLClz9U92LQ1DNXEugPbtdGA31/lkwN4xVCxcqhS5ICiyH4yNFLhyQlAwkyg+sQrCZToQq07DNwidqALXWIrrT7bh2b6XvEhXxc8Z6cBy8GYuEy+om1mp9QGdZLKTFZ7VYQ74JyOegO3EGrtjKdWYkWBm7CHTN6M0U0mX4uYJw5Hya+/HYtFzGOUAhHifntQF8l4VQ5jXXexvpYCG2sBHUvYSJ+E3evMQNF7lIjvtownYAO9f9o5LCuXD8vqWAzsCGYtd8KNNuI1Amxpu/gusrcz/mqnrnQYGbzq2du8QKIzqwIjB7ScH7bSnJK/+tWPMuWlmb905q8aVdmwMtecv2KTWVMZX2iUsDU9j117y8oVaOHpX285p20K4YEaLFffxTygw9c74LfnY7P1nK8LvSEiH2z0hZuxkvlPW8IEPBs7YHjtVfsCTNSiGqnezMKsPA6ORWPFcdIkcwa8BF0iTpcmm1fB2Wi2uEC6ES4Xb5TugXeId0n/gidQPCqmYa2YkbLiT8XfQ4Hw/C4z2Iyw4pHIhEMVvixEIyQZibJcBRG2HRAkE3+jy7mMwPPy5ZgF6U/ZUVMoo8uoCxqd2JLg+L3oMqw2BBJYp/nVcm2DDoFu67P01fpxnaODXivJV/pyIN8M4RYAJ4FFoBcwgM4SBKKGubyMCD+Sy6D1Y6QUGBOHM7Su3OwhIb4W80hrS88ROuLD9ZpMfb87ZaMbcsNdvqMWpkUSq3VaTyRtidde3UVakTQl3REuaYPtFCAiFoIGaQT34+iueFYSQ/GziGW7PZylQQo5lEUB/I6F+sQjmXRtCOQryAwFUBjaVBasQc8um5afxMzp+cWi6xfAvz7AiPwDP+j53o3Sj0BvrzOWhHvVlyZIsAQwCvwdN1zc1tGhsuNlqEwG52cQLNuNykEtiUm0D8Ff4+N+js24QfS4c/BxPBj1MQCNu6Bgu+ns7o5wtNnJXWPnvF6AApx+fgZCoe9M+H6H0HPRvD4912D3Hk5491ByvASVsPQeSvrfA7Yi8YLDf3TO/nM6ETzMC13oMdsPOPYwA2SBPQxBVOS5w4jZhwYDCT4GBwGizVpIKeAJ59ccMW2eoVM8lLm/HwsBC86kmO4zNgdOgxTbTfjkT+wLaBL3Kr7WXDKE7Nfk8ZD7mGQuPTuNiVVwNfoYMouYVWAVwywCiyCaBCcjhG/RZBCzFrKwC83ajtYwXWjKDhBlP3ieWqkTek5gNPW00yrydpotj8Mm5k93fPFH9gUYyR91bKDX8OIG+hsFC3YgEl7gyNAe+otJ3DO0/g6kAAJk4E9hylfNmQjjeN/0wV7uyXZ+D7OEov0Z1okLuHEs3B6f0InPnKlTX+ukVabg/wDSnpPLAHicY2BkYGBge3zdlukrZzy/zVcGeQ4GELh+7/R8GP1/0b9ANjXWK0AuBwMTSBQAp7gPAgB4nGNgZGBgvfIvkIGBbdX/Rf93sqkxAEVQgDMAoeUGo3icLY8xCsJAEEUnIVmwsrBLJ1hY2qZRkCCiCIIYLGwk4AU8QtB4gmAhAVNJbqAgduYWWth6BYlvZRce/8/sn4GxPxIIzy7A/1PAVXtnI3N4QRdC8ExvAiuY6ZrsxQ2rrxtK6payhgyfO28583cnk6pCDvSPypeIvwxdUJ/wS3Id42tkR7BzRKboAMbsaKB9SKxS9lZZ5WjMzkT3IDA65I4tsz1mWtQx3mO3QuvQhLbZedNzSix9+5P68QNZ+joqAAAAACwALAAsACwAaACGAL4B4AJsA5oEtAXMBuAH/ghUCegLPAtqDL4N2A6KD1IPyBA0EOARNBLwE/gUyBV2FpoX+hnOGl4bFBxGHggfLCBwIZIipiNmJJolkCacJ3AoNCoIKw4sKi0wLiouvDD4MboyrjPuNww4Njm4Org61Dr6OxY7TDuOO9AAAQAAAEMAOAADACIAAwACABAALwBZAAAEvwXsAAIAAXicjY49bsJAEEafwRBFIMok5RaRUhmtrQhFKLXLFJGhR2JlWbJsaTG3oOYkHCMH4By5QPIZtkiRgl2N5s3MNz/AlCMR/YuY8BR4wB2vgYe8cAgcS/MVeKTe78BjJtGjlFF8r8zDpavnATOeAw/54D1wLM0p8Ehbz4HHyv+woqGjktU4thT6Oayarupqty0KBZ+qlOyl2OAVunJfbwQ57aW7914KhyFjjpVfyv6ffa0tSEilTNRhRW8a1zZd3vrSmWxuzdL8uUHRIkltktlUwltuXqvi2UnV32i04XoXa+d3VduYVDtuGvULpSREfQAAAHicfca/U4EBAIDh5/sYmBxCik3irpPfZVaoqKgkMTQYu2uw+O81uMbeu/fuEfq//u+BUERCUkrakYysnGN5J04VFJWcKTtXUXXhUl1DU0tbR9eVaz03bg0Mjdy592Bs4smzqZkXr97MvVv4sPRpZe3H1i4Ig0gQjT1+fW8mm1o9fkC3+afWHu5YFlsAeJyNln9MG+cZx9/3Pdc+QoiNlxhSDt+B8aXhkpA6dE6A4rNjj7bWBAkssxkLJAQpTSsRyRCkSUsu0iIt6hqqTsq2TBpR/5iqVVWO88QMRCITW7eybom2LJPSX7TbH+sfHU3/WJe/vO/7niGLlkm74/M8z/s833vf995770xyMxmQdvGTNZNGokqG1Eq64Fsdb6Nakp4o6vXqrevSTrIKmLTTMRrVeWmH1Oh0qmZJihSD22L+5G5JI5S0CavBjoNrYAl4yLAURj4Aew5Y4BpYAreAlxBYXtXAOJgBq7wiNUqKo6mB5A5pO67dThjxS3VkDZSBhHnWYdQ60guGwTSYAV6h45lxcA4sgc9ExZTqnFf3Ye51zkvCFU+9GBPNY25z6JuiWfx63vVfPeT69LOurMOVPdnupvekXL9jl+uD0ZjF/aaa2I1kSArhJkOY+GlYyn5F/JQSlVyVthEbMMlbyZhSsNiix2aWJA+hEpMoOUHU8g2JOjW1seQmVmZrJEhU9g/2qVthnxa31MZmks+xj8k1sAQk9jHOj9hH5Bxb5WsOmwAzYAncBGvAy1ZxfojzA/YB8bP3SRtIgGEwA5bAGvCx92ED7D30RoTlcQIw9h5sgL2L23oX1s/uIrrL7mJqf3LiB2LzIjDaKoEarQR1DZUgGIqV2B+d+zuxo3Q8aeyoRamZdJN9UrMTfRLbr97pel4tsb8WNUO9mtzLbhMbMMzkNka+TTTQB0bAaeBFdAfRHWKBV8BVYAPsMtgA0NgKeAfcIXuBCfqAzG45GKbEbjp6Sk2G2B/Yb0gdVvz37LfCv8PeEv537NfCvw0fhl9hbzlhlSSrUSe4JgAfgG9D/TH2y2JLUC0na9kS1k6FbQMJ0AuGwTTwsiXW7JxQg+hkkazIBEqHfCL8T8lrMjFPqaZ+EBtQ40bveBoRzIw2ozNTv/wjNLnRL72KiBv9O99DxI3+rfOIuNFfPIOIG/3EKUTc6IPDiLjRewcQwZTYT37RskON975AtaSfTWGVprBKU1ilKeJhU/wk9z18bj92WluxYldMY2erai1Q6zq1DlPrNWqNUesstc5Tq4taR6llUEuhVphaJrUW6X4shUXNnz/UPGDWU2uFWm9Sq0AtnVpRarVQS6Nxs8SanGf3CZcRrpjkLx380934+vhZE1a0CXu+Cd+EJdiboCxaJkRasyveHua+udiacNt7OmLjeH2WceEyHsMy+RB48ICWsY2W0ckyOvDDJsAwuAHWQBl4oW7GxKeF9cO2gQQYBufAGvCK6awBRsYrU7wmJsYn3VaZeC/wsGWczTibWJPZGFACRuAZaVqh/jDtDZfDLE5CIUJIsFauLdGauS9q/vVFDalKVrFLbJp/utkrFT/t3Menm/7Q0RfV5Db6AxL2YOfRA0SnUfj9pCDaTxFF5r6dKOwN+JijHMFlfkffpS7QLfyqOfW+8jf1E6XEEP5dWVT/opU81FH/jMwbc+pt5aL6dltJRua6XqJwC5qQziv71TdXhPQ8Clcc9Sx3c+q3lR71BUUUxtzC0QJapl89rA+qz6C/tHJcNQvoc05NKEfVLlf1FL9mTt2LKRhu2IrJ7lTEoJGw6PBr8RI9ae7yXfblfL2+L/tivl2+Jp/qa/Q1+LbKQTkgb5E3y5tkWfbKHpnJRN5aKq+aBsHj2+oNcOf1cOsRcYBxCyM+fFRm5Dlif0nKsmx/imbtG6Mke1yz/9kfKdFNhwbtxyIpagezJDuQsvcb2ZKvfNiOG1nb1/eN3Cyll/LI2uy7JUoGciVa5qkLDXbwYG6eUFp74eUG7p+48HI+T+pDZxL1iWB37YGvpB9hRirWeHDUPxQ32pez/Tn7Z415O8aDcmM+a3+/XxvKzdPP6WeZ9Dy9x10+Ny91088zh3le6k7n89kSPSJ0RKP3oMOOuSd0Mn6cuY5octjVXXF1UVwPXQt30FVVkajQRauqhM5DuW620JJJz7a0CE2dRgpCU6jT/lOzEoUmGhWakEVWhGYlZHGN3S0kigJJWBES+jhRhEShjwvJkQeStork4obkohhJog80iqupWV3X1KxCY/y/x1jKMGixMz86lBmLZEYimTEwYr905mS9bR3XtNnRPC9otqSPHB89yf2xMTsfGUvbo5G0Nts59IjyEC93RtKzZCgzkJsdMsfSTqfZmYkcS+eLPX3t8YfGurgxVnvfIzrr452187F64o8ox3m5h48V52PF+Vg9Zo8Yi4g93peblUkqf3DI9UVWvQn7daShKZ8KBU53i83b2VR/tmEB/7G8TqqNvL05krJrAC/tTu5O8hLeKV7agrS/Uqo/29nUsEBfr5QCSNdGUsSYmCxMkvrM82n3r4ADqYlJvuCuNQr/60AtY5vH0oUJQrJ2a3/WThwazM36fMiO8FuyO9Zz1dWZUvmGm9yDZAdPStKGkOe6eK6qqiL87+c/WfEH+VtgscUiNcN0ghTykh3ODjB8CgYGca9Dg7kF/D/FfyIKedxggRq0sN5HZdqGQdw24fe8zsRkJaqsxUTFu1fiksL6kmwcfLGMjRWbEN2K5TT+DTKHKqMAAA==')format("woff");}.ff2{font-family:ff2;line-height:0.938965;font-style:normal;font-weight:normal;visibility:visible;}
@font-face{font-family:ff3;src:url('data:application/font-woff;base64,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')format("woff");}.ff3{font-family:ff3;line-height:0.926758;font-style:normal;font-weight:normal;visibility:visible;}
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
.fs3{font-size:27.840000px;}
.fs1{font-size:32.160000px;}
.fs0{font-size:36.000000px;}
.fs2{font-size:39.840000px;}
.ye{bottom:-6.541200px;}
.y17{bottom:-6.541100px;}
.y2{bottom:2.626300px;}
.y4{bottom:2.829800px;}
.y6{bottom:4.443400px;}
.y3{bottom:5.572500px;}
.y27{bottom:8.964200px;}
.y26{bottom:19.139700px;}
.y25{bottom:29.315100px;}
.y24{bottom:39.490600px;}
.y23{bottom:49.666100px;}
.y2a{bottom:54.249900px;}
.y22{bottom:59.841600px;}
.y21{bottom:70.017000px;}
.y0{bottom:78.500000px;}
.y20{bottom:80.192500px;}
.y1f{bottom:90.368000px;}
.y29{bottom:92.044500px;}
.y28{bottom:123.055500px;}
.y1e{bottom:135.653700px;}
.y1d{bottom:235.712500px;}
.y1c{bottom:248.068400px;}
.y1b{bottom:260.424300px;}
.y1a{bottom:272.780300px;}
.y19{bottom:285.136200px;}
.y18{bottom:297.492100px;}
.y16{bottom:309.848000px;}
.y15{bottom:322.204000px;}
.y14{bottom:334.559900px;}
.y13{bottom:346.915800px;}
.y12{bottom:359.271800px;}
.y11{bottom:371.627700px;}
.y10{bottom:383.983600px;}
.yf{bottom:396.339500px;}
.yd{bottom:408.695500px;}
.yc{bottom:421.051400px;}
.yb{bottom:447.216900px;}
.ya{bottom:459.815100px;}
.y9{bottom:481.135100px;}
.y8{bottom:495.671500px;}
.y7{bottom:520.867900px;}
.y5{bottom:537.342500px;}
.y1{bottom:552.605700px;}
.h7{height:12.098200px;}
.h6{height:14.763200px;}
.h2{height:15.974600px;}
.h8{height:20.281875px;}
.h4{height:23.429062px;}
.h3{height:26.208984px;}
.h5{height:29.024063px;}
.ha{height:30.511000px;}
.h9{height:99.558800px;}
.h1{height:490.500000px;}
.h0{height:597.176800px;}
.we{width:48.426900px;}
.wd{width:50.005300px;}
.w9{width:53.950900px;}
.w7{width:59.474900px;}
.w8{width:59.475000px;}
.w3{width:72.890400px;}
.w4{width:97.353900px;}
.w5{width:98.932200px;}
.wb{width:104.456200px;}
.w11{width:153.383100px;}
.w6{width:158.907100px;}
.w13{width:170.744200px;}
.w12{width:179.424800px;}
.w2{width:218.882100px;}
.wf{width:350.669100px;}
.wc{width:399.596000px;}
.wa{width:450.101300px;}
.w10{width:504.552200px;}
.w1{width:506.500000px;}
.w0{width:541.052200px;}
.x2{left:1.802200px;}
.xe{left:7.843900px;}
.xd{left:12.087100px;}
.x7{left:14.852500px;}
.x0{left:17.500000px;}
.x15{left:20.268300px;}
.x10{left:23.030300px;}
.x11{left:29.738000px;}
.xf{left:35.714000px;}
.x12{left:41.969800px;}
.x9{left:45.755300px;}
.x8{left:48.794800px;}
.x4{left:51.480000px;}
.x19{left:57.897500px;}
.x17{left:63.732500px;}
.x18{left:70.624900px;}
.x1{left:72.700900px;}
.x6{left:50.986100px;}
.x13{left:123.206200px;}
.x14{left:152.323600px;}
.xa{left:172.133100px;}
.x16{left:217.426900px;}
.xb{left:232.108000px;}
.xc{left:292.083000px;}
.x3{left:352.058000px;}
.x5{left:425.448300px;}
@media print{
.v0{vertical-align:0.000000pt;}
.ls0{letter-spacing:0.000000pt;}
.ws0{word-spacing:0.000000pt;}
.fs3{font-size:37.120000pt;}
.fs1{font-size:42.880000pt;}
.fs0{font-size:48.000000pt;}
.fs2{font-size:53.120000pt;}
.ye{bottom:-8.721600pt;}
.y17{bottom:-8.721467pt;}
.y2{bottom:3.501733pt;}
.y4{bottom:3.773067pt;}
.y6{bottom:5.924533pt;}
.y3{bottom:7.430000pt;}
.y27{bottom:11.952267pt;}
.y26{bottom:25.519600pt;}
.y25{bottom:39.086800pt;}
.y24{bottom:52.654133pt;}
.y23{bottom:66.221467pt;}
.y2a{bottom:72.333200pt;}
.y22{bottom:79.788800pt;}
.y21{bottom:93.356000pt;}
.y0{bottom:104.666667pt;}
.y20{bottom:106.923333pt;}
.y1f{bottom:120.490667pt;}
.y29{bottom:122.726000pt;}
.y28{bottom:164.074000pt;}
.y1e{bottom:180.871600pt;}
.y1d{bottom:314.283333pt;}
.y1c{bottom:330.757867pt;}
.y1b{bottom:347.232400pt;}
.y1a{bottom:363.707067pt;}
.y19{bottom:380.181600pt;}
.y18{bottom:396.656133pt;}
.y16{bottom:413.130667pt;}
.y15{bottom:429.605333pt;}
.y14{bottom:446.079867pt;}
.y13{bottom:462.554400pt;}
.y12{bottom:479.029067pt;}
.y11{bottom:495.503600pt;}
.y10{bottom:511.978133pt;}
.yf{bottom:528.452667pt;}
.yd{bottom:544.927333pt;}
.yc{bottom:561.401867pt;}
.yb{bottom:596.289200pt;}
.ya{bottom:613.086800pt;}
.y9{bottom:641.513467pt;}
.y8{bottom:660.895333pt;}
.y7{bottom:694.490533pt;}
.y5{bottom:716.456667pt;}
.y1{bottom:736.807600pt;}
.h7{height:16.130933pt;}
.h6{height:19.684267pt;}
.h2{height:21.299467pt;}
.h8{height:27.042500pt;}
.h4{height:31.238750pt;}
.h3{height:34.945312pt;}
.h5{height:38.698750pt;}
.ha{height:40.681333pt;}
.h9{height:132.745067pt;}
.h1{height:654.000000pt;}
.h0{height:796.235733pt;}
.we{width:64.569200pt;}
.wd{width:66.673733pt;}
.w9{width:71.934533pt;}
.w7{width:79.299867pt;}
.w8{width:79.300000pt;}
.w3{width:97.187200pt;}
.w4{width:129.805200pt;}
.w5{width:131.909600pt;}
.wb{width:139.274933pt;}
.w11{width:204.510800pt;}
.w6{width:211.876133pt;}
.w13{width:227.658933pt;}
.w12{width:239.233067pt;}
.w2{width:291.842800pt;}
.wf{width:467.558800pt;}
.wc{width:532.794667pt;}
.wa{width:600.135067pt;}
.w10{width:672.736267pt;}
.w1{width:675.333333pt;}
.w0{width:721.402933pt;}
.x2{left:2.402933pt;}
.xe{left:10.458533pt;}
.xd{left:16.116133pt;}
.x7{left:19.803333pt;}
.x0{left:23.333333pt;}
.x15{left:27.024400pt;}
.x10{left:30.707067pt;}
.x11{left:39.650667pt;}
.xf{left:47.618667pt;}
.x12{left:55.959733pt;}
.x9{left:61.007067pt;}
.x8{left:65.059733pt;}
.x4{left:68.640000pt;}
.x19{left:77.196667pt;}
.x17{left:84.976667pt;}
.x18{left:94.166533pt;}
.x1{left:96.934533pt;}
.x6{left:50.314800pt;}
.x13{left:164.274933pt;}
.x14{left:203.098133pt;}
.xa{left:229.510800pt;}
.x16{left:289.902533pt;}
.xb{left:309.477333pt;}
.xc{left:389.444000pt;}
.x3{left:469.410667pt;}
.x5{left:567.264400pt;}
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

<style media="screen">
.img-texto{
  position: relative;
  float: left;
  width: 50%;
  height: 900px;
  overflow: hidden;
}
</style>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA/UAAAPVCAIAAACodV2YAAAACXBIWXMAABYlAAAWJQFJUiTwAAAgAElEQVR42uzdeXhU9aHw8TMzWUkCYQlJ2FdZIptsimAVaWldq8X1WrcKWvV9vffVantvvbXW7opWUKv1eaxbLRWs1L3uIoICsomyhB0MSwiEhOyZ8/4xbS5X0CJKCPHz+SPPOTNnzpz8ZjTfDL+cEwnDMDgwYRhGIpGGr0EQWP3s1QAAGtGePXsyMzONA3xl/aNCD7DvD/zXABL0PQB+9ACNn/hJRgEAmtlPd4NwxP1W5lXjS/wNP/q5HrD3V6ufvQoAAIch9M3POdS/QgFAY/7o8SPbq8ZX/L0UNRYAANBsmJ9jfg4AAM3Hgf59beKfjfb+GgRBaWnpDTfcMGXKlK/OeD300EMpKSmXX375vqPxiVUAAGh8X2j+fXFx8YABA4qKir4643XllVcmJydPnTr1X4+sD/IBaOQf6mZye9XwXjrw+ff7nZ/ziZA1P0fWAwBweB1o3+93fs7edwX/ar7KV20VAACabt8DAABN34H+fW0kEgnDcO+vn7jrE9t8Wav19fUzZ86Mh/WJ50o8bSQShOE/vu67GgRhTV3twIEDj+539Jd+VMH/npDzGRsDAEDT7fvDNT8nGo3Onz//l7/85QEeZ1ZW1vnnn//di7/74QcfJvre/BwAAPT94ff3v/99165dp5122i233LJo4aIXXnzhs7fv0aPHVVddNX78+JYtW2ZmZv7f//t/zz3nXC8wAABfKU33/DkpKSklJSXxeDw5Ofmxxx/r0rnzpx1b3759n3jiiVWrVh199NGRSKS8vHz27Nnr168/FEcVOH8OAADNoO8bf35Odnb23LlzE6utW7e+9957Y7FYw5O2b98+PT395JNPfuGFF5YtWzZmzJhbbrklPz8/FotFIpG//OUv+z3ywPwcAAD0/WFRV1f361//eseOHYnVU0499amnnnrvvfd27969Z8+en//85wUFBe+///5Pf/rTJUuW/OIXvzj11FO7dOny3nvvtW7d+qmnnvLSAgCg7z9V48/PSU1Nveuuu9q2bdtw++mnn56fn3/33Xd36tRp4sSJ8+fPT09Pv/fee+fNm/fAAw8ce+yxf/7zn1u3bj116tSqqqr9Hnlgfg4AAPo+OBzzc8rKypKTk6PR6N63JyUl3XPPPTt37ozFYpdddtmCBQseffTRSZMm1dXV/eQnP1m1atXll18+YcKEM844Y79HHpifAwBAs9ZEz5/z4osvtm3btra2Nh6P7317bm7utGnT3nvvvaeffrpt27YbN25MSko6+eSTe/fuPWbMmPHjx1933XVDhgx5+umnX3zpxR0lJW3btPEaAwDw1dEU5+fccsstV155ZV1dXW1t7Z49e4IgqK6ubphSP3r06LVr15aXl99www3Dhg379a9//fDDD69cuXLjxo25ubkXX3xxYicnfu3Ek8eO3blzp/k5AADo+09qtPk5d91116233hoEQZs2bY455pjs7Ozi4uKhQ4fedNNNDc94++23T58+vX379kEQlJaWnnLKKeeee+4ll1zy0ksvvffeew0f+S9ZsuRb3/rW7t27A/NzAADQ943vgQceuOGGG/5xZNHoqlWrysrK2rRpEwTB6tWrly1blrgrNTW1Xbt2ZWVlYRhedtllnTt3njhxYhAETzzxxKRJk8aMGbN27dpEZ7/33ntjx44tLS31SgMAoO8b1SuvvHL11VcnPn1PSkrKyMiora3NyMiIRqO33HJLEATTp0/fvXv3zJkzgyBo2bJlZWXlz3/+8wULFjzyyCORSKSmpuahhx4KguCdd94ZNWrU+++/n9jtggULfvOb33ilAQDQ9//jUM+/j8fj9957b2LKTRAEv/vd75YvX56enp44f87ZZ5/dqVOnp5566o477njmmWcSj2rfvn0YD2+77bbEB/xPPvlkUVFR4uFbt2497bTTCvoXBEFw/fXX5+bmvvTSS1/8IM2/BwCgmfT9oZ5/f//990+YMOHBBx+86aabrr322sLCwu3bt7/44ouJ61tFo9GLLrpo6dKlv/nNbxYsWNDwqB/84Afjxo0LwzAMw8mTJ+99VNVVVXfccce4ceP+67/+q3379r///e+rq6sD8+8BAND3h1p5eflrr70Wi8VmzZr117/+dcSIEXfeeefw4cNPPfXU1q1bJ7aZNGlSLBbLzs7+4IMPysrKKisrgyBIS09LS00rLS19/fXXFy5c+L9+6wiCRx97dODAgbfddtuiRYvOOuus5557zusNAIC+D4JDPD/n2Wef3bBhQ3Z29ve+970JEybcfffdQRBs2rQpJycnOTk5sVm3bt0uuOCCKVOm1NfXP/HEE7fffnvisa3b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ffv23TvuG8RisV69emVnZy9duvTMM8/csWPH9ddfH41GCwoKJk6c+Kc//clpcwAA+Io40M/v95580jAFZe+7gi889SWxOm7cuIqKinPPPfdnP/vZiSee+Oqrr+bk5Jx44omXXXbZeeedl5GRUV9fn5KSEo1GI5FIVVVVJBKJxWKzZ8+eOnXqxx9//M4774waNaqqqqqsrGzatGlPPPFELBb74ke195SbvS9o9RkbAwBA0+37Rpif0/D1jDPOmDdv3sSJEysqKtq3b//qq69eeOGFycnJ99xzz44dO1q1ahWNRlNTUyORSH19/bJlyzIyMsrLyzMyMh577LGpU6f+9Kc/vfXWW1euXPmnP/2pYeJ+I0zIMT8HAIAjpu8b2YABA2bPnv3YY4+98MILw4cPf/jhhydPnvz000+fc845DVeqeumll3Jyci688MI+ffpUVlbu3r37rbfeysvLu+WWWy655JKOHTt6dQEA0PdNRSwWu+SSS7773e8+++yzffr0efTRRz/44INx48Z16dLljTfeGDp0aBAEXbp0KSoqevXVV5ctW/btb387CIJLL720Xbt2XlcAAPT9Z2m0+fefWI1Go2ecccaZZ55ZW1s7b9682bNnz5w5s7Kycu7cuYn597m5uccdd9wPf/jDnJycQ3cY5t8DANCs+r4x59/vdzUpKem444477rjjPvsIg0acYW/+PQAATU3UEAAAwFeu7/eemvKJK7PuPV/FqsvWAgBwBPT9YZ+fc8StAgBA0+37g1ZRUbFw4cIdO3Zs2LChvr4+DMPa2trq6ura2tr6+vqampqampq6urr6+vrq6uogCBI3Jjaoq6tL5HJ9fX3ia21tbcOet2zZEgRBTU1NPB5PPKS+vj4ej2/btm3t2rWJ52rYc2KzxH4SO4nH44mvtbW1YRjG4/G6urq6ujrvCQAAjlyH/Pw5GRkZS5Ys6devX2Vl5fXXX3/rrbcuXrx46dKlo0ePXrdu3e7du6uqqo466qjOnTs//vjjXbp0adOmTY8ePR588MHrrrvuoYceOuaYY0aOHPn666+PGTPmxRdf7Nev3+bNm88999wwDH/1q1/ddtttd9999/XXX//3v/+9bdu28+fPb9euXUFBQWFhYRAEDz/88IknntimTZvi4uLa2tquXbs+88wz559//jPPPPP973//kUceufTSS2tqau6+++6hQ4dmZmbOmTPnuOOOGzlypPPnAABwhGqM+TmJC82mp6dffPHFd911V/v27bt16zZw4MAdO3YMGzasffv2kUikc+fO69ev79ixY+fOnRcvXtyqVau8vLwuXboMGzZsyZIlrVu3fuONN1q1atW/f//q6uowDAsLCydMmPDKK6907NgxNTW1oKBg1KhR3bp1i0ajgwYNateu3c6dO8eMGbNo0aI1a9YUFBSMGDFixYoVdXV1JSUlOTk577//fkVFRTweT0tL69mz59e+9rXVq1dnZGRkZmYG5ucAAHDEaozrWxUUFKxfv75nz54tWrT44Q9/WFhYmJWVFY/HjzvuuL59+1ZUVLRo0aKwsPDyyy8vLy9PTk4eMmRIdnb2zp07u3Tpsn379u7du7dt23bx4sXp6elbtmwZMWJEEATbt28fPnz4a6+9NmbMmJUrV+bm5paXl7dv375///5Lly5t2bJlbm5uhw4dOnTo0Lt376VLl9bV1Q0dOrRPnz5paWkdOnSoq6sbP378pk2bcnNz27dvv2jRovHjxy9dujQxRwgAAI5Qn2Myyb7zc4qLiwcMGLBly5YDuTjUP57vMyfzfPLgPmWuy5c+B+bAr281adKklJSUKVOmBAd2MSwAaLwf6pFI4F+SvWp85d9LjXR9q6KiomnTpvXt27esrGzFihVXXnnlPffck5qaes0118RisXvuuWfPnj1XX3316tWr77333uuuu6579+5TpkzJzMy88sor6+rqpkyZkpyc/N3vfnfGjBllZWXXXHNNixYtZsyYEYvFzj///CAISkpKnnjiiWuuuSYIgk2bNt199929evX6t3/7t/Ly8rvuuisvL+873/nOI488kpaWdsUVV0Sj0YcffrhHjx7f+ta3giBYt27dnDlzLrjggsD5cwAAOMI1xvycmpqaiy++eNq0aW3atAmCYMGCBTk5OXl5ebW1tS1btgyCID09vbKyMjc3Nzc39wc/+MHw4cODIGjRokW3bt0SGwRBkJWV1blz565du27cuDGxn+OOOy41NTVx71tvvfW73/1u4sSJKSkpnTp1Ki0t7dy5c0ZGRkZGRllZ2ciRIzt16pSVlZWWlpbYYf/+/YcMGdLw2MmTJ59//vk+cQcA4EjXGNe3mj17dq9evdq2bZtYHTp0aBAEKSkpn72rhE/cG4vF9nt7XV3d6NGj33jjjf3uMxqNNvyDRWIhGv3HNx6PxzMyMvLz8xcvXhy4vhUAAEe4xpifU1VVlZmZue9jV6xY8corryQWcnJy9n3s0qVLW7duHQTBmjVr2rRp84l7G8ydO3fPnj3HHXfcjBkzvvGNbyTuXbRoUeJXiI0bN+6758SJ8IMgmDlzZiQSGT169IwZMwYPHmx+DgBHOp80edX4ios2wnOMHDny3Xffbbh01IYNG0pKSoIg6NOnz8knn3zyySf36dNnvw8cMGBAYoMePXokbmnVqlVRUVHDfrKysoIgeOGFFy655JKJEycuW7aspqYmce/gwYMTj+3UqVPilpycnPLy8sTyzp07s7KywjBcvHjx2WeffdNNN7388svSHACAI90hv75VJBJp06bNjTfeOGnSpB/96EdlZWU//vGPf//73z///PMpKSkXXXRRUlLS3Llzy8rKNm/evHLlyhUrVrz11ltHHXXUnDlzVqxYMW7cuJqamgULFmRlZV1wwQVjxoy5//77n3zyyfT09PLy8pYtWz7yyCNLliwpLS2tra1NSkr68Y9/fOmll3700UeZmZmjR48uLS1dunRpEARjx44966yzLrzwwl69egVBkJycHIvFbr/99qKiooqKip07d9bW1v7617++8cYbE5N5XN8KgCOUH0NHFufP4ct9LwUHfn7M/W5WXFw8cODAkSNHXn755aeeemrDpPb9qq2tLSwszMzM7NChQxAEiY/zE1NoEh+6JyUl1dfXh2EYjUaj0Whig+Tk5MRjE8vRaDQej69bty4pKalLly6Jx4ZhmJKSEoZhYrPENomdx+PxhidKXGarsLAwcfGsIAgSZ7vfe7OGP9j9NN/73vfS09OnTp164EMMAEoRrxqN9l76on0/dOjQrl27vv322127dj3nnHPOO++8xJ/PNj9z58797W9/O3PmzKuuukrfA6AU8arRNN9LX/T8ObFYbNasWc8++2wYhrfffvvw4cN79+79q1/9atu2bfvN3C/l1DSNtpqwYMGCc845Z9SoUX/961/j8bjz5wAA0GQdaN9/9vlzTjnllI8++uiPf/zjkCFDVq9e/Z//+Z+dO3c+4YQTbr311tmzZyemwey9n+BLvZLUIVpdunTpz372s6FDhw4fPnzGjBmf91sAAIDG90Xn54wYMWLNmjV73zh//vz77rvvz3/+c2VlZeKWFi1aHH/88ccdd9yIESNGjBjRrl27pjkWYRiuXbv27bfffuutt1577bV169btd7Orr77a/BwAmuIPdTM9vGp4Lx34/PvgnxeH2vsUMYm+X7t27d4nkElsXFRUNGXKlN///ve7du36xH569uw5bty4ESNGDB8+vF+/frFYLPhX56I5dKvxeHz58uXvvvvuW2+99dJLL23ZsuVfjsM111wzZcqUA3ki7zMAlCJeNZpo3x/45/d727Nnz9/+9rdp06Y9//zzDee/31taWlqPHj0KCgp69OjRpUuXnj175uXldevWrWXLll/691xVVbVp06ZNmzatW7duw4YNK1eu/PDDD1euXFlRUfG59uPzewCUIl41mux7KemQPk1GRsYFF1xwwQUXbN269W9/+9uTTz75+uuvN1w7NtHcH3744Ycffrhv9+fn57ds2bJjx47Z2dktWrTIzc3NyspKTU1NSUmJxWKZmZmZmZkN28fj8cRf9FZXV1dXV1dWVpaUlJSWlpaWlm7btq24uHj79u2Ji2oBAEAzltQ4T5Obmztx4sSJEyfu3r37+eeff/LJJ1955ZWysrJP276qqmrt2rVBECxevNiLBAAAB+iLnh8z+JynnmzVqtX5558/Y8aM4uLiGTNmnHfeeVlZWUfWkDk/JgAATdaBfn7/2efH3Hebf7manJx81llnnXXWWVVVVa+99tqsWbPeeOON+fPn7z17p2lyfkwAAI74vj900tLSTjnllFNOOSUIgsrKynnz5r3++utz586dP3/+jh07vEIAAPDl9/3eJ3/c+zyYwV6nxfzip61s0aLFCSeccMIJJwRBEIbh8uXL33zzzVdffXXu3LmbN29uIkO294Scz/iOAACg6fb9lz4/519ObolEIv369evXr99VV10VBMGWLVsSZ9pZunTp6tWrV69evX79+kYYoFgs1r179379+g0ePHjQoEGPPfaY+TkAABzxfX/Y5eXl5eXljR07tuGW6urqjRs3rlu3bt26ddu2bVu7dm1paemmTZtKSkrKysqKiooOfOdpaWk5OTmtW7fu2LFj27ZtO3funJeX169fv86dO3fv3j0lJaVhy5deesmbBgCAI77vG2d+zudaTUtL69WrV69evT5tYsyePXsqKirKyspKS0t37979ie8oOzu7devWGRkZmZmZaWlp+16CN/iUS9KanwMAwBHf9408P+cL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"/>
<div class="c x1 y1 w2 h2">
  <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Universidad Autónoma de Chihuahua</div>
</div>
<div class="c x3 y1 w3 h2">
  <div class="t m0 x4 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0">Folio:</div>
</div>
<div class="c x5 y1 w4 h2">
  <div class="t m0 x6 h5 y4 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $Folio; ?>
  </div>
</div>
<div class="c x1 y5 w5 h6">
  <div class="t m0 x2 h3 y6 ff1 fs0 fc0 sc0 ls0 ws0">Facultad de Ingeniería</div>
</div>
<div class="c x3 y5 w3 h6">
  <div class="t m0 x7 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0">Num. COSORE</div>
</div>
<div class="c x5 y5 w4 h6">
  <div class="t m0 x6 h5 y4 ff2 fs2 fc0 sc0 ls0 ws0"></div>
</div>
<div class="c x1 y7 w6 h2">
  <div class="t m0 x2 h3 y3 ff1 fs0 fc0 sc0 ls0 ws0">Requisición de Materiales y Equipos</div>
</div>
<div class="c x3 y7 w3 h2">
  <div class="t m0 x8 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0">Fecha</div>
</div>
<div class="c x5 y7 w4 h2">
  <div class="t m0 x9 h5 y4 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $Dia.'/'.$Mes.'/'.$Ano; ?>
  </div>
</div>
<div class="c xa y8 w7 h7">
  <div class="t m0 x0 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Fondo</div>
</div>
<div class="c xb y8 w8 h7">
  <div class="t m0 x7 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Función</div>
</div>
<div class="c xc y8 w7 h7">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Programa</div>
</div>
<div class="c x3 y8 w3 h7">
  <div class="t m0 xe h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">U. Presupuestal</div>
</div>
<div class="c x5 y8 w4 h7">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Cuenta</div>
</div>
<div class="c xa y9 w7 h6">
  <div class="t m0 x10 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $Fondo; ?>
  </div>
</div>
<div class="c xb y9 w8 h6">
  <div class="t m0 x10 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $Funcion; ?>
  </div>
</div>
<div class="c xc y9 w7 h6">
  <div class="t m0 x10 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $Programa; ?>
  </div>
</div>
<div class="c x3 y9 w3 h6">
  <div class="t m0 x11 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $UPresupuestal; ?>
  </div>
</div>
<div class="c x5 y9 w4 h6">
  <div class="t m0 x12 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $Cuenta; ?></div>
</div>
<div class="c x0 ya w9 h7">
  <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Solicitante: </div>
</div>
<div class="c x1 ya wa h7">
  <div class="t m0 x2 h3 y2 ff3 fs0 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Centro; ?></div>
</div>
<div class="c x0 yb wb h7">
  <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Motivos de la requisición</div>
</div>
<div class="c x13 yb wc h7">
  <div class="t m0 x2 h8 y2 ff2 fs3 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Motivos;?></div>
</div>
<div class="c x0 yc w9 h7">
  <div class="t m0 xd h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Sub-Cta</div>
</div>
<div class="c x1 yc wd h7">
  <div class="t m0 xe h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Cantidad</div>
</div>
<div class="c x13 yc we h7">
  <div class="t m0 xd h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Unidad</div>
</div>
<div class="c xa yc wf h7">
  <div class="t m0 x14 h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Descripción</div>
</div>
<div class="c x0 yd w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad01 == 0 ) { echo ""; } else { echo $SubCuenta01; }  ?></div>
</div>
<div class="c x1 yd wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad01 == 0 ) { echo ""; } else { echo $Cantidad01; }  ?></div>
</div>
<div class="c x13 yd we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad01 == 0 ) { echo ""; } else { echo $Unidad01; } ?></div>
</div>
<div class="c xa yd wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion01; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 yf w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad02 == 0 ) { echo ""; } else { echo $SubCuenta02; }  ?></div>
</div>
<div class="c x1 yf wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad02 == 0 ) { echo ""; } else { echo $Cantidad02; } ?></div>
</div>
<div class="c x13 yf we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad02 == 0 ) { echo ""; } else { echo $Unidad02; }; ?></div>
</div>
<div class="c xa yf wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion02; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y10 w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad03 == 0 ) { echo ""; } else { echo $SubCuenta03; }  ?></div>
</div>
<div class="c x1 y10 wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php if ($Cantidad03 == 0 ) { echo ""; } else { echo $Cantidad03; } ?></div>
</div>
<div class="c x13 y10 we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php if ($Cantidad03 == 0 ) { echo ""; } else { echo $Unidad03; } ?></div>
</div>
<div class="c xa y10 wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion03; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y11 w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad04 == 0 ) { echo ""; } else { echo $SubCuenta04; } ?></div>
</div>
<div class="c x1 y11 wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad04 == 0 ) { echo ""; } else { echo $Cantidad04; }  ?></div>
</div>
<div class="c x13 y11 we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad04 == 0 ) { echo ""; } else { echo $Unidad04; }?></div>
</div>
<div class="c xa y11 wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion04; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y12 w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad05 == 0 ) { echo ""; } else { echo $SubCuenta05; } ?></div>
</div>
<div class="c x1 y12 wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad05 == 0 ) { echo ""; } else { echo $Cantidad05; } ?></div>
</div>
<div class="c x13 y12 we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad05 == 0 ) { echo ""; } else { echo $Unidad05; } ?></div>
</div>
<div class="c xa y12 wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion05; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y13 w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad06 == 0 ) { echo ""; } else { echo $SubCuenta06; }  ?></div>
</div>
<div class="c x1 y13 wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad06 == 0 ) { echo ""; } else { echo $Cantidad06; } ?></div>
</div>
<div class="c x13 y13 we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad06 == 0 ) { echo ""; } else { echo $Unidad06; } ?></div>
</div>
<div class="c xa y13 wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion06; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y14 w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad07 == 0 ) { echo ""; } else { echo $SubCuenta07; }  ?></div>
</div>
<div class="c x1 y14 wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad07 == 0 ) { echo ""; } else { echo $Cantidad07; }  ?></div>
</div>
<div class="c x13 y14 we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad07 == 0 ) { echo ""; } else { echo $Unidad07; } ?></div>
</div>
<div class="c xa y14 wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion07; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y15 w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad08 == 0 ) { echo ""; } else { echo $SubCuenta08; }  ?></div>
</div>
<div class="c x1 y15 wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad08 == 0 ) { echo ""; } else { echo $Cantidad08; } ?></div>
</div>
<div class="c x13 y15 we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad08 == 0 ) { echo ""; } else { echo $Unidad08; } ?></div>
</div>
<div class="c xa y15 wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion08; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y16 w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad09 == 0 ) { echo ""; } else { echo $SubCuenta09; }  ?></div>
</div>
<div class="c x1 y16 wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad09 == 0 ) { echo ""; } else { echo $Cantidad09; }  ?></div>
</div>
<div class="c x13 y16 we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad09 == 0 ) { echo ""; } else { echo $Unidad09; } ?></div>
</div>
<div class="c xa y16 wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion09;?></div>
  <!-- <div class="t m0 x2 h4 y17 ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y18 w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad10 == 0 ) { echo ""; } else { echo $SubCuenta10; }  ?></div>
</div>
<div class="c x1 y18 wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad10 == 0 ) { echo ""; } else { echo $Cantidad10; }  ?></div>
</div>
<div class="c x13 y18 we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad10 == 0 ) { echo ""; } else { echo $Unidad10; } ?></div>
</div>
<div class="c xa y18 wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion10; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y19 w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad11 == 0 ) { echo ""; } else { echo $SubCuenta11; }  ?></div>
</div>
<div class="c x1 y19 wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad11 == 0 ) { echo ""; } else { echo $Cantidad11; }  ?></div>
</div>
<div class="c x13 y19 we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad11 == 0 ) { echo ""; } else { echo $Unidad11; }?></div>
</div>
<div class="c xa y19 wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion11; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y1a w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad12 == 0 ) { echo ""; } else { echo $SubCuenta12; } ?></div>
</div>
<div class="c x1 y1a wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad12 == 0 ) { echo ""; } else { echo $Cantidad12; }  ?></div>
</div>
<div class="c x13 y1a we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad12 == 0 ) { echo ""; } else { echo $Unidad12; } ?></div>
</div>
<div class="c xa y1a wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo$Descripcion12; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y1b w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad13 == 0 ) { echo ""; } else { echo $SubCuenta13; }  ?></div>
</div>
<div class="c x1 y1b wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad13 == 0 ) { echo ""; } else { echo $Cantidad13; } ?></div>
</div>
<div class="c x13 y1b we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php if ($Cantidad13 == 0 ) { echo ""; } else { echo $Unidad13; } ?></div>
</div>
<div class="c xa y1b wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion13; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y1c w9 h7">
  <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad14 == 0 ) { echo ""; } else { echo $SubCuenta14; }  ?></div>
</div>
<div class="c x1 y1c wd h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad14 == 0 ) { echo ""; } else { echo $Cantidad14; }  ?></div>
</div>
<div class="c x13 y1c we h7">
  <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad14 == 0 ) { echo ""; } else { echo $Unidad14; } ?></div>
</div>
<div class="c xa y1c wf h7">
  <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion14; ?></div>
  <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
</div>
<div class="c x0 y1d w10 h7">
  <div class="t m0 x16 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0">OBSERVACIONES</div>
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

<div class="c x0 y1e w10 h9 midiv">
  <?php echo $Observaciones01 ?>
</div>
<div class="c x0 y28 w11 h7">
  <div class="t m0 x17 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Solicitó</div>
</div>
<div class="c xa y28 w12 h7">
  <div class="t m0 x6 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Revisó</div>
</div>
<div class="c x3 y28 w13 h7">
  <div class="t m0 x18 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Autorizó</div>
</div>
<div class="c x0 y29 w11 ha">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Nombre ?> </div>
</div>
<div class="c xa y29 w12 ha">
  <div class="t m0 x8 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Reviso; ?></div>
</div>
<div class="c x3 y29 w13 ha">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Autorizo; ?></div>
</div>
<div class="c x0 y20 w11 h7">
  <div class="t m0 x8 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Nombre y firma</div>
</div>
<div class="c xa y20 w12 h7">
  <div class="t m0 x17 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Nombre y firma</div>
</div>
<div class="c x3 y20 w13 h7">
  <div class="t m0 x19 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Nombre y firma</div>
</div>
<div class="c x1 y2a w5 h7">
  <div class="t m0 x2 h8 y2 ff2 fs3 fc0 sc0 ls0 ws0">Fecha de Rev:07/02/2014</div>
</div>
<div class="c xb y2a w8 h7">
  <div class="t m0 x2 h8 y2 ff2 fs3 fc0 sc0 ls0 ws0">No. de Revisión: 2</div>
</div>
<div class="c x5 y2a w4 h7">
  <div class="t m0 x2 h8 y2 ff2 fs3 fc0 sc0 ls0 ws0">FOR 7.4 ADQ 01</div>
</div>
</div>
<div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
</div>
<div id="pf2" class="pf w0 h0" data-page-no="2"><div class="pc pc2 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA/UAAAPVCAIAAACodV2YAAAACXBIWXMAABYlAAAWJQFJUiTwAAAgAElEQVR42uzdeXhU9aHw8TMzWUkCYQlJ2FdZIptsimAVaWldq8X1WrcKWvV9vffVantvvbXW7opWUKv1eaxbLRWs1L3uIoICsomyhB0MSwiEhOyZ8/4xbS5X0CJKCPHz+SPPOTNnzpz8ZjTfDL+cEwnDMDgwYRhGIpGGr0EQWP3s1QAAGtGePXsyMzONA3xl/aNCD7DvD/zXABL0PQB+9ACNn/hJRgEAmtlPd4NwxP1W5lXjS/wNP/q5HrD3V6ufvQoAAIch9M3POdS/QgFAY/7o8SPbq8ZX/L0UNRYAANBsmJ9jfg4AAM3Hgf59beKfjfb+GgRBaWnpDTfcMGXKlK/OeD300EMpKSmXX375vqPxiVUAAGh8X2j+fXFx8YABA4qKir4643XllVcmJydPnTr1X4+sD/IBaOQf6mZye9XwXjrw+ff7nZ/ziZA1P0fWAwBweB1o3+93fs7edwX/ar7KV20VAACabt8DAABN34H+fW0kEgnDcO+vn7jrE9t8Wav19fUzZ86Mh/WJ50o8bSQShOE/vu67GgRhTV3twIEDj+539Jd+VMH/npDzGRsDAEDT7fvDNT8nGo3Onz//l7/85QEeZ1ZW1vnnn//di7/74QcfJvre/BwAAPT94ff3v/99165dp5122i233LJo4aIXXnzhs7fv0aPHVVddNX78+JYtW2ZmZv7f//t/zz3nXC8wAABfKU33/DkpKSklJSXxeDw5Ofmxxx/r0rnzpx1b3759n3jiiVWrVh199NGRSKS8vHz27Nnr168/FEcVOH8OAADNoO8bf35Odnb23LlzE6utW7e+9957Y7FYw5O2b98+PT395JNPfuGFF5YtWzZmzJhbbrklPz8/FotFIpG//OUv+z3ywPwcAAD0/WFRV1f361//eseOHYnVU0499amnnnrvvfd27969Z8+en//85wUFBe+///5Pf/rTJUuW/OIXvzj11FO7dOny3nvvtW7d+qmnnvLSAgCg7z9V48/PSU1Nveuuu9q2bdtw++mnn56fn3/33Xd36tRp4sSJ8+fPT09Pv/fee+fNm/fAAw8ce+yxf/7zn1u3bj116tSqqqr9Hnlgfg4AAPo+OBzzc8rKypKTk6PR6N63JyUl3XPPPTt37ozFYpdddtmCBQseffTRSZMm1dXV/eQnP1m1atXll18+YcKEM844Y79HHpifAwBAs9ZEz5/z4osvtm3btra2Nh6P7317bm7utGnT3nvvvaeffrpt27YbN25MSko6+eSTe/fuPWbMmPHjx1933XVDhgx5+umnX3zpxR0lJW3btPEaAwDw1dEU5+fccsstV155ZV1dXW1t7Z49e4IgqK6ubphSP3r06LVr15aXl99www3Dhg379a9//fDDD69cuXLjxo25ubkXX3xxYicnfu3Ek8eO3blzp/k5AADo+09qtPk5d91116233hoEQZs2bY455pjs7Ozi4uKhQ4fedNNNDc94++23T58+vX379kEQlJaWnnLKKeeee+4ll1zy0ksvvffeew0f+S9ZsuRb3/rW7t27A/NzAADQ943vgQceuOGGG/5xZNHoqlWrysrK2rRpEwTB6tWrly1blrgrNTW1Xbt2ZWVlYRhedtllnTt3njhxYhAETzzxxKRJk8aMGbN27dpEZ7/33ntjx44tLS31SgMAoO8b1SuvvHL11VcnPn1PSkrKyMiora3NyMiIRqO33HJLEATTp0/fvXv3zJkzgyBo2bJlZWXlz3/+8wULFjzyyCORSKSmpuahhx4KguCdd94ZNWrU+++/n9jtggULfvOb33ilAQDQ9//jUM+/j8fj9957b2LKTRAEv/vd75YvX56enp44f87ZZ5/dqVOnp5566o477njmmWcSj2rfvn0YD2+77bbEB/xPPvlkUVFR4uFbt2497bTTCvoXBEFw/fXX5+bmvvTSS1/8IM2/BwCgmfT9oZ5/f//990+YMOHBBx+86aabrr322sLCwu3bt7/44ouJ61tFo9GLLrpo6dKlv/nNbxYsWNDwqB/84Afjxo0LwzAMw8mTJ+99VNVVVXfccce4ceP+67/+q3379r///e+rq6sD8+8BAND3h1p5eflrr70Wi8VmzZr117/+dcSIEXfeeefw4cNPPfXU1q1bJ7aZNGlSLBbLzs7+4IMPysrKKisrgyBIS09LS00rLS19/fXXFy5c+L9+6wiCRx97dODAgbfddtuiRYvOOuus5557zusNAIC+D4JDPD/n2Wef3bBhQ3Z29ve+970JEybcfffdQRBs2rQpJycnOTk5sVm3bt0uuOCCKVOm1NfXP/HEE7fffnvisa3btC4uLv7jH//4yQMOgscff3z8+PF/+MMfWrVqdcIJJ0yfPj0wPwcAAH0fHOL5OQsWLPj+979fV1d39dVXDxo0aP78+UEQtGrVqqKioqqqqmGzBx544NRTT01PT7/uuuueffbZhl317NmzRYsWnzzgIAiC4I033jj99NNPOOGE5cuX5+TkVFVVmZ8DAIC+P7QKCwtjsVh6enpWVtbixYsTN8bj8aysrL3DPS0tLT09/aSTTqqurp43b966desa7rrjjjtGjhy5756feOKJs88++8EHH4xEImEYzps3z0sOAIC+P4Tzc6qrq1evXl1fX9+xY8du3brNmTMnsUHi9PaJv6/d+7Ff//rX09PTO3bs+OSTTyYSPxKJZGRkTJ8+vW2btv9zVEEQBMG6det69OhRVlY2c+bMnj17Llu2zPwcAAD0/SGcn1NcXLxixYqXX355ypQpBQUF69evT2yQl5e3Y8eOrKysTzx23Lhx06ZNO//886dNm3bzzTc33N6xY8e77rqzIa8bDrGoqKi6uvqqq67Ky8vbvn27+TkAADRjSYf9CLZs2XLTTTedccYZmzZtSkpK2rBhQ+L2ioqKoUOH1tTUpKWl7b19QUFBQUFBixYt7rjjjkWLFt1xxx0NZ83/t4suevmVVx555JG9t1+3bl0sFlu1alVNTU1dXZ2XHIDmzb8ke9X4ijvM83OCIIjFYu++++4f/vCHOXPm1NXVpaamJm7fvHnz5MmTy8rK9vvY448/Pi0t7eijj37ttdf2Pp677ryrS+fOwT/n5wRBkJaWtnr16ptvvvmdd97p0aOH+TkAADRjB/r5/SGanxMEQX5+fseOHX/yk5+8//77mzZtys/PLywsDIKga9euw4cPT5z/ft/Hpqam/vnPfx4xYsSDDz649/Fkt86e8dRTJ510Um1tbeKW3Nzc3r17X3vttdu2bdu9e7f5OQA0b34SHVkSnwx61fiy3ktBUzh/Tk5OTnl5+UMPPdS1a9cPPvigf//+ids3bdpUXl7+GR+Hn3HGGXl5eZdffvknbh86dOjkOyZHI//41rKzs7dt25aXl1dZWbnvaTQBAKA5Ofznz4lGo4mTY9bV1fXq1Wv06NGJDaqqqpYtW7Zr167PfqIOHTrsu+crJl7xne98JwiC/v37L1q06LLLLuvSpcvKlSsHDhxofg4AAM3YYZ6fk/jaq1evzMzM+fPnV1RUdO3aNRqNBkFw2mmnDRo0qF27dqtXr27duvWePXuKioq6desWiUQ2btzYt2/f5cuX5+XlRaPR0tLSrKys3Nzcjz76qEePHtu3by8rK/vprT997PHHzjzzzJkzZ956661vvvlmRUVFQUGB+TkAAOj7Q2v8+PGPPvroyJEjR44cuWTJktNOO23hwoVJSUkLFixYunTp4sWLW7ZsOXjw4N/+9rcjRowoKSlZsmTJ1KlTp06d2rt372XLluXm5sbj8euvv/7pp5+Ox+Nr166tr69PnCa/oKBg9uzZLVq0qKury8/Pj8ViXnIAAJqxyIF/3hyGYeIqsImvQRAUFxcPGDBgy5YtidVP3Pu5Vs8666wf/OAH119//RlnnNGvX7/rrrtu/fr11dXVNTU10Wg0OTm5trY2Ho9Ho9F4PB4EQWpqahiG0Wi0rKwsJSUlOTk5DMOqqqr09PQwDGtra2tqam677bZVq1bdfvvtGzdufOihh6644oqxY8d+kYOMRCKTJk1KSUmZMmXKgWzs7QVAo/5Q95eaXjW8l8KwSczPCYLgiiuuePPNN2+//fb77rtvxYoV1113XX5+fsNTJCcnf//73y8rK3viiSeqqqr2e4QdO3asrKzMyMjYtWtXWVlZr169Lr300ng8/u1vf/u73/1uhw4dTjrppOBQTsgxPwcAgMMu2kSO49RTT924cePLL7985513dujQoaio6LLLLtu6devWrVuPOeaYOXPm/OhHP/rFL37x8ssvDxs2LHF7WVlZYqGkpOS+++6bP3/+Bx988O67786ePfv000//0Y9+dOONN5588slHHXXUzp07r732Wh+oAwDQ7DWV+TmRSGTz5s3nnnvuvffeW1VVtWHDhkWLFuXm5k6YMCHxR7SJzVavXl1dXZ2amrpr166hQ4euXbt21apV27Ztu+iiixqOMx6PL1iwYPLkyW+88UaXLl3Gjh171FFHXXbZZf/4hs3PAaC5/lA308OrhvdS05mfE4Zhhw4dfvnLXyZOdNOrV6/nnntu0KBB55xzTuLebdu2lZSU9OzZMzk5ueGpu3fv3r179/r6+sLCwrZt22ZnZ9fW1k6fPv0Xv/jF9OnT+/fv/6c//WnNmjW33Xbbfr+RwPwcAACal2iTOpoxY8b069dv+/btr7766kcffZSenj59+vRHH320qqqqXbt2ffv23TvuG8RisV69emVnZy9duvTMM8/csWPH9ddfH41GCwoKJk6c+Kc//clpcwAA+Io40M/v95580jAFZe+7gi889SWxOm7cuIqKinPPPfdnP/vZiSee+Oqrr+bk5Jx44omXXXbZeeedl5GRUV9fn5KSEo1GI5FIVVVVJBKJxWKzZ8+eOnXqxx9//M4774waNaqqqqqsrGzatGlPPPFELBb74ke195SbvS9o9RkbAwBA0+37Rpif0/D1jDPOmDdv3sSJEysqKtq3b//qq69eeOGFycnJ99xzz44dO1q1ahWNRlNTUyORSH19/bJlyzIyMsrLyzMyMh577LGpU6f+9Kc/vfXWW1euXPmnP/2pYeJ+I0zIMT8HAIAjpu8b2YABA2bPnv3YY4+98MILw4cPf/jhhydPnvz000+fc845DVeqeumll3Jyci688MI+ffpUVlbu3r37rbfeysvLu+WWWy655JKOHTt6dQEA0PdNRSwWu+SSS7773e8+++yzffr0efTRRz/44INx48Z16dLljTfeGDp0aBAEXbp0KSoqevXVV5ctW/btb387CIJLL720Xbt2XlcAAPT9Z2m0+fefWI1Go2ecccaZZ55ZW1s7b9682bNnz5w5s7Kycu7cuYn597m5uccdd9wPf/jDnJycQ3cY5t8DANCs+r4x59/vdzUpKem444477rjjPvsIg0acYW/+PQAATU3UEAAAwFeu7/eemvKJK7PuPV/FqsvWAgBwBPT9YZ+fc8StAgBA0+37g1ZRUbFw4cIdO3Zs2LChvr4+DMPa2trq6ura2tr6+vqampqampq6urr6+vrq6uogCBI3Jjaoq6tL5HJ9fX3ia21tbcOet2zZEgRBTU1NPB5PPKS+vj4ej2/btm3t2rWJ52rYc2KzxH4SO4nH44mvtbW1YRjG4/G6urq6ujrvCQAAjlyH/Pw5GRkZS5Ys6devX2Vl5fXXX3/rrbcuXrx46dKlo0ePXrdu3e7du6uqqo466qjOnTs//vjjXbp0adOmTY8ePR588MHrrrvuoYceOuaYY0aOHPn666+PGTPmxRdf7Nev3+bNm88999wwDH/1q1/ddtttd9999/XXX//3v/+9bdu28+fPb9euXUFBQWFhYRAEDz/88IknntimTZvi4uLa2tquXbs+88wz559//jPPPPP973//kUceufTSS2tqau6+++6hQ4dmZmbOmTPnuOOOGzlypPPnAABwhGqM+TmJC82mp6dffPHFd911V/v27bt16zZw4MAdO3YMGzasffv2kUikc+fO69ev79ixY+fOnRcvXtyqVau8vLwuXboMGzZsyZIlrVu3fuONN1q1atW/f//q6uowDAsLCydMmPDKK6907NgxNTW1oKBg1KhR3bp1i0ajgwYNateu3c6dO8eMGbNo0aI1a9YUFBSMGDFixYoVdXV1JSUlOTk577//fkVFRTweT0tL69mz59e+9rXVq1dnZGRkZmYG5ucAAHDEaozrWxUUFKxfv75nz54tWrT44Q9/WFhYmJWVFY/HjzvuuL59+1ZUVLRo0aKwsPDyyy8vLy9PTk4eMmRIdnb2zp07u3Tpsn379u7du7dt23bx4sXp6elbtmwZMWJEEATbt28fPnz4a6+9NmbMmJUrV+bm5paXl7dv375///5Lly5t2bJlbm5uhw4dOnTo0Lt376VLl9bV1Q0dOrRPnz5paWkdOnSoq6sbP378pk2bcnNz27dvv2jRovHjxy9dujQxRwgAAI5Qn2Myyb7zc4qLiwcMGLBly5YDuTjUP57vMyfzfPLgPmWuy5c+B+bAr281adKklJSUKVOmBAd2MSwAaLwf6pFI4F+SvWp85d9LjXR9q6KiomnTpvXt27esrGzFihVXXnnlPffck5qaes0118RisXvuuWfPnj1XX3316tWr77333uuuu6579+5TpkzJzMy88sor6+rqpkyZkpyc/N3vfnfGjBllZWXXXHNNixYtZsyYEYvFzj///CAISkpKnnjiiWuuuSYIgk2bNt199929evX6t3/7t/Ly8rvuuisvL+873/nOI488kpaWdsUVV0Sj0YcffrhHjx7f+ta3giBYt27dnDlzLrjggsD5cwAAOMI1xvycmpqaiy++eNq0aW3atAmCYMGCBTk5OXl5ebW1tS1btgyCID09vbKyMjc3Nzc39wc/+MHw4cODIGjRokW3bt0SGwRBkJWV1blz565du27cuDGxn+OOOy41NTVx71tvvfW73/1u4sSJKSkpnTp1Ki0t7dy5c0ZGRkZGRllZ2ciRIzt16pSVlZWWlpbYYf/+/YcMGdLw2MmTJ59//vk+cQcA4EjXGNe3mj17dq9evdq2bZtYHTp0aBAEKSkpn72rhE/cG4vF9nt7XV3d6NGj33jjjf3uMxqNNvyDRWIhGv3HNx6PxzMyMvLz8xcvXhy4vhUAAEe4xpifU1VVlZmZue9jV6xY8corryQWcnJy9n3s0qVLW7duHQTBmjVr2rRp84l7G8ydO3fPnj3HHXfcjBkzvvGNbyTuXbRoUeJXiI0bN+6758SJ8IMgmDlzZiQSGT169IwZMwYPHmx+DgBHOp80edX4ios2wnOMHDny3Xffbbh01IYNG0pKSoIg6NOnz8knn3zyySf36dNnvw8cMGBAYoMePXokbmnVqlVRUVHDfrKysoIgeOGFFy655JKJEycuW7aspqYmce/gwYMTj+3UqVPilpycnPLy8sTyzp07s7KywjBcvHjx2WeffdNNN7388svSHACAI90hv75VJBJp06bNjTfeOGnSpB/96EdlZWU//vGPf//73z///PMpKSkXXXRRUlLS3Llzy8rKNm/evHLlyhUrVrz11ltHHXXUnDlzVqxYMW7cuJqamgULFmRlZV1wwQVjxoy5//77n3zyyfT09PLy8pYtWz7yyCNLliwpLS2tra1NSkr68Y9/fOmll3700UeZmZmjR48uLS1dunRpEARjx44966yzLrzwwl69egVBkJycHIvFbr/99qKiooqKip07d9bW1v7617++8cYbE5N5XN8KgCOUH0NHFufP4ct9LwUHfn7M/W5WXFw8cODAkSNHXn755aeeemrDpPb9qq2tLSwszMzM7NChQxAEiY/zE1NoEh+6JyUl1dfXh2EYjUaj0Whig+Tk5MRjE8vRaDQej69bty4pKalLly6Jx4ZhmJKSEoZhYrPENomdx+PxhidKXGarsLAwcfGsIAgSZ7vfe7OGP9j9NN/73vfS09OnTp164EMMAEoRrxqN9l76on0/dOjQrl27vv322127dj3nnHPOO++8xJ/PNj9z58797W9/O3PmzKuuukrfA6AU8arRNN9LX/T8ObFYbNasWc8++2wYhrfffvvw4cN79+79q1/9atu2bfvN3C/l1DSNtpqwYMGCc845Z9SoUX/961/j8bjz5wAA0GQdaN9/9vlzTjnllI8++uiPf/zjkCFDVq9e/Z//+Z+dO3c+4YQTbr311tmzZyemwey9n+BLvZLUIVpdunTpz372s6FDhw4fPnzGjBmf91sAAIDG90Xn54wYMWLNmjV73zh//vz77rvvz3/+c2VlZeKWFi1aHH/88ccdd9yIESNGjBjRrl27pjkWYRiuXbv27bfffuutt1577bV169btd7Orr77a/BwAmuIPdTM9vGp4Lx34/PvgnxeH2vsUMYm+X7t27d4nkElsXFRUNGXKlN///ve7du36xH569uw5bty4ESNGDB8+vF+/frFYLPhX56I5dKvxeHz58uXvvvvuW2+99dJLL23ZsuVfjsM111wzZcqUA3ki7zMAlCJeNZpo3x/45/d727Nnz9/+9rdp06Y9//zzDee/31taWlqPHj0KCgp69OjRpUuXnj175uXldevWrWXLll/691xVVbVp06ZNmzatW7duw4YNK1eu/PDDD1euXFlRUfG59uPzewCUIl41mux7KemQPk1GRsYFF1xwwQUXbN269W9/+9uTTz75+uuvN1w7NtHcH3744Ycffrhv9+fn57ds2bJjx47Z2dktWrTIzc3NyspKTU1NSUmJxWKZmZmZmZkN28fj8cRf9FZXV1dXV1dWVpaUlJSWlpaWlm7btq24uHj79u2Ji2oBAEAzltQ4T5Obmztx4sSJEyfu3r37+eeff/LJJ1955ZWysrJP276qqmrt2rVBECxevNiLBAAAB+iLnh8z+JynnmzVqtX5558/Y8aM4uLiGTNmnHfeeVlZWUfWkDk/JgAATdaBfn7/2efH3Hebf7manJx81llnnXXWWVVVVa+99tqsWbPeeOON+fPn7z17p2lyfkwAAI74vj900tLSTjnllFNOOSUIgsrKynnz5r3++utz586dP3/+jh07vEIAAPDl9/3eJ3/c+zyYwV6nxfzip61s0aLFCSeccMIJJwRBEIbh8uXL33zzzVdffXXu3LmbN29uIkO294Scz/iOAACg6fb9lz4/519ObolEIv369evXr99VV10VBMGWLVsSZ9pZunTp6tWrV69evX79+kYYoFgs1r179379+g0ePHjQoEGPPfaY+TkAABzxfX/Y5eXl5eXljR07tuGW6urqjRs3rlu3bt26ddu2bVu7dm1paemmTZtKSkrKysqKiooOfOdpaWk5OTmtW7fu2LFj27ZtO3funJeX169fv86dO3fv3j0lJaVhy5deesmbBgCAI77vG2d+zudaTUtL69WrV69evT5tYsyePXsqKirKyspKS0t37979ie8oOzu7devWGRkZmZmZaWlp+16CN/iUS9KanwMAwBHf9408P+cL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"/>
  <div class="c x1 y1 w2 h2">
    <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Universidad Autónoma de Chihuahua</div>
  </div>
  <div class="c x3 y1 w3 h2">
    <div class="t m0 x4 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0">Folio:</div>
  </div>
  <div class="c x5 y1 w4 h2">
    <div class="t m0 x6 h5 y4 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $Folio; ?>
    </div>
  </div>
  <div class="c x1 y5 w5 h6">
    <div class="t m0 x2 h3 y6 ff1 fs0 fc0 sc0 ls0 ws0">Facultad de Ingeniería</div>
  </div>
  <div class="c x3 y5 w3 h6">
    <div class="t m0 x7 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0">Num. COSORE</div>
  </div>
  <div class="c x5 y5 w4 h6">
    <div class="t m0 x6 h5 y4 ff2 fs2 fc0 sc0 ls0 ws0"></div>
  </div>
  <div class="c x1 y7 w6 h2">
    <div class="t m0 x2 h3 y3 ff1 fs0 fc0 sc0 ls0 ws0">Requisición de Materiales y Equipos</div>
  </div>
  <div class="c x3 y7 w3 h2">
    <div class="t m0 x8 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0">Fecha</div>
  </div>
  <div class="c x5 y7 w4 h2">
    <div class="t m0 x9 h5 y4 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $Dia.'/'.$Mes.'/'.$Ano; ?>
    </div>
  </div>
  <div class="c xa y8 w7 h7">
    <div class="t m0 x0 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Fondo</div>
  </div>
  <div class="c xb y8 w8 h7">
    <div class="t m0 x7 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Función</div>
  </div>
  <div class="c xc y8 w7 h7">
    <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Programa</div>
  </div>
  <div class="c x3 y8 w3 h7">
    <div class="t m0 xe h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">U. Presupuestal</div>
  </div>
  <div class="c x5 y8 w4 h7">
    <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Cuenta</div>
  </div>
  <div class="c xa y9 w7 h6">
    <div class="t m0 x10 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $Fondo; ?>
    </div>
  </div>
  <div class="c xb y9 w8 h6">
    <div class="t m0 x10 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $Funcion; ?>
    </div>
  </div>
  <div class="c xc y9 w7 h6">
    <div class="t m0 x10 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $Programa; ?>
    </div>
  </div>
  <div class="c x3 y9 w3 h6">
    <div class="t m0 x11 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $UPresupuestal; ?>
    </div>
  </div>
  <div class="c x5 y9 w4 h6">
    <div class="t m0 x12 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $Cuenta; ?></div>
  </div>
  <div class="c x0 ya w9 h7">
    <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Solicitante: </div>
  </div>
  <div class="c x1 ya wa h7">
    <div class="t m0 x2 h3 y2 ff3 fs0 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Centro; ?></div>
  </div>
  <div class="c x0 yb wb h7">
    <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Motivos de la requisición</div>
  </div>
  <div class="c x13 yb wc h7">
    <div class="t m0 x2 h8 y2 ff2 fs3 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Motivos;?></div>
  </div>
  <div class="c x0 yc w9 h7">
    <div class="t m0 xd h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Sub-Cta</div>
  </div>
  <div class="c x1 yc wd h7">
    <div class="t m0 xe h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Cantidad</div>
  </div>
  <div class="c x13 yc we h7">
    <div class="t m0 xd h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Unidad</div>
  </div>
  <div class="c xa yc wf h7">
    <div class="t m0 x14 h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Descripción</div>
  </div>
  <div class="c x0 yd w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad01 == 0 ) { echo ""; } else { echo $SubCuenta01; }  ?></div>
  </div>
  <div class="c x1 yd wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad01 == 0 ) { echo ""; } else { echo $Cantidad01; }  ?></div>
  </div>
  <div class="c x13 yd we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad01 == 0 ) { echo ""; } else { echo $Unidad01; } ?></div>
  </div>
  <div class="c xa yd wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion01; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 yf w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad02 == 0 ) { echo ""; } else { echo $SubCuenta02; }  ?></div>
  </div>
  <div class="c x1 yf wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad02 == 0 ) { echo ""; } else { echo $Cantidad02; } ?></div>
  </div>
  <div class="c x13 yf we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad02 == 0 ) { echo ""; } else { echo $Unidad02; }; ?></div>
  </div>
  <div class="c xa yf wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion02; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y10 w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad03 == 0 ) { echo ""; } else { echo $SubCuenta03; }  ?></div>
  </div>
  <div class="c x1 y10 wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php if ($Cantidad03 == 0 ) { echo ""; } else { echo $Cantidad03; } ?></div>
  </div>
  <div class="c x13 y10 we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php if ($Cantidad03 == 0 ) { echo ""; } else { echo $Unidad03; } ?></div>
  </div>
  <div class="c xa y10 wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion03; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y11 w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad04 == 0 ) { echo ""; } else { echo $SubCuenta04; } ?></div>
  </div>
  <div class="c x1 y11 wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad04 == 0 ) { echo ""; } else { echo $Cantidad04; }  ?></div>
  </div>
  <div class="c x13 y11 we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad04 == 0 ) { echo ""; } else { echo $Unidad04; }?></div>
  </div>
  <div class="c xa y11 wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion04; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y12 w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad05 == 0 ) { echo ""; } else { echo $SubCuenta05; } ?></div>
  </div>
  <div class="c x1 y12 wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad05 == 0 ) { echo ""; } else { echo $Cantidad05; } ?></div>
  </div>
  <div class="c x13 y12 we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad05 == 0 ) { echo ""; } else { echo $Unidad05; } ?></div>
  </div>
  <div class="c xa y12 wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion05; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y13 w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad06 == 0 ) { echo ""; } else { echo $SubCuenta06; }  ?></div>
  </div>
  <div class="c x1 y13 wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad06 == 0 ) { echo ""; } else { echo $Cantidad06; } ?></div>
  </div>
  <div class="c x13 y13 we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad06 == 0 ) { echo ""; } else { echo $Unidad06; } ?></div>
  </div>
  <div class="c xa y13 wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion06; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y14 w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad07 == 0 ) { echo ""; } else { echo $SubCuenta07; }  ?></div>
  </div>
  <div class="c x1 y14 wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad07 == 0 ) { echo ""; } else { echo $Cantidad07; }  ?></div>
  </div>
  <div class="c x13 y14 we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad07 == 0 ) { echo ""; } else { echo $Unidad07; } ?></div>
  </div>
  <div class="c xa y14 wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion07; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y15 w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad08 == 0 ) { echo ""; } else { echo $SubCuenta08; }  ?></div>
  </div>
  <div class="c x1 y15 wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad08 == 0 ) { echo ""; } else { echo $Cantidad08; } ?></div>
  </div>
  <div class="c x13 y15 we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad08 == 0 ) { echo ""; } else { echo $Unidad08; } ?></div>
  </div>
  <div class="c xa y15 wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion08; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y16 w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad09 == 0 ) { echo ""; } else { echo $SubCuenta09; }  ?></div>
  </div>
  <div class="c x1 y16 wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad09 == 0 ) { echo ""; } else { echo $Cantidad09; }  ?></div>
  </div>
  <div class="c x13 y16 we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad09 == 0 ) { echo ""; } else { echo $Unidad09; } ?></div>
  </div>
  <div class="c xa y16 wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion09;?></div>
    <!-- <div class="t m0 x2 h4 y17 ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y18 w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad10 == 0 ) { echo ""; } else { echo $SubCuenta10; }  ?></div>
  </div>
  <div class="c x1 y18 wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad10 == 0 ) { echo ""; } else { echo $Cantidad10; }  ?></div>
  </div>
  <div class="c x13 y18 we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad10 == 0 ) { echo ""; } else { echo $Unidad10; } ?></div>
  </div>
  <div class="c xa y18 wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion10; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y19 w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad11 == 0 ) { echo ""; } else { echo $SubCuenta11; }  ?></div>
  </div>
  <div class="c x1 y19 wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad11 == 0 ) { echo ""; } else { echo $Cantidad11; }  ?></div>
  </div>
  <div class="c x13 y19 we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad11 == 0 ) { echo ""; } else { echo $Unidad11; }?></div>
  </div>
  <div class="c xa y19 wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion11; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y1a w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad12 == 0 ) { echo ""; } else { echo $SubCuenta12; } ?></div>
  </div>
  <div class="c x1 y1a wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad12 == 0 ) { echo ""; } else { echo $Cantidad12; }  ?></div>
  </div>
  <div class="c x13 y1a we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad12 == 0 ) { echo ""; } else { echo $Unidad12; } ?></div>
  </div>
  <div class="c xa y1a wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo$Descripcion12; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y1b w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad13 == 0 ) { echo ""; } else { echo $SubCuenta13; }  ?></div>
  </div>
  <div class="c x1 y1b wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad13 == 0 ) { echo ""; } else { echo $Cantidad13; } ?></div>
  </div>
  <div class="c x13 y1b we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php if ($Cantidad13 == 0 ) { echo ""; } else { echo $Unidad13; } ?></div>
  </div>
  <div class="c xa y1b wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion13; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y1c w9 h7">
    <div class="t m0 x15 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad14 == 0 ) { echo ""; } else { echo $SubCuenta14; }  ?></div>
  </div>
  <div class="c x1 y1c wd h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad14 == 0 ) { echo ""; } else { echo $Cantidad14; }  ?></div>
  </div>
  <div class="c x13 y1c we h7">
    <div class="t m0 x0 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php  if ($Cantidad14 == 0 ) { echo ""; } else { echo $Unidad14; } ?></div>
  </div>
  <div class="c xa y1c wf h7">
    <div class="t m0 x2 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Descripcion14; ?></div>
    <!-- <div class="t m0 x2 h4 ye ff2 fs1 fc0 sc0 ls0 ws0">123456789102112</div> -->
  </div>
  <div class="c x0 y1d w10 h7">
    <div class="t m0 x16 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0">OBSERVACIONES</div>
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

  <div class="c x0 y1e w10 h9 midiv">
    <?php echo $Observaciones01 ?>
  </div>
  <div class="c x0 y28 w11 h7">
    <div class="t m0 x17 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Solicitó</div>
  </div>
  <div class="c xa y28 w12 h7">
    <div class="t m0 x6 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Revisó</div>
  </div>
  <div class="c x3 y28 w13 h7">
    <div class="t m0 x18 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Autorizó</div>
  </div>
  <div class="c x0 y29 w11 ha">
    <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Nombre ?> </div>
  </div>
  <div class="c xa y29 w12 ha">
    <div class="t m0 x8 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Reviso; ?></div>
  </div>
  <div class="c x3 y29 w13 ha">
    <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Autorizo; ?></div>
  </div>
  <div class="c x0 y20 w11 h7">
    <div class="t m0 x8 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Nombre y firma</div>
  </div>
  <div class="c xa y20 w12 h7">
    <div class="t m0 x17 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Nombre y firma</div>
  </div>
  <div class="c x3 y20 w13 h7">
    <div class="t m0 x19 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Nombre y firma</div>
  </div>
  <div class="c x1 y2a w5 h7">
    <div class="t m0 x2 h8 y2 ff2 fs3 fc0 sc0 ls0 ws0">Fecha de Rev:07/02/2014</div>
  </div>
  <div class="c xb y2a w8 h7">
    <div class="t m0 x2 h8 y2 ff2 fs3 fc0 sc0 ls0 ws0">No. de Revisión: 2</div>
  </div>
  <div class="c x5 y2a w4 h7">
    <div class="t m0 x2 h8 y2 ff2 fs3 fc0 sc0 ls0 ws0">FOR 7.4 ADQ 01</div>
  </div>
  </div>

  <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
  </div>

</div>
</body>
</html>
