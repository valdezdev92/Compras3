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

           case '4405 - SECRETARÍA POSGRADO':

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
  @font-face{font-family:ff1;src:url('data:application/font-woff;base64,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')format("woff");}.ff1{font-family:ff1;line-height:0.938477;font-style:normal;font-weight:normal;visibility:visible;}
  @font-face{font-family:ff2;src:url('data:application/font-woff;base64,d09GRgABAAAAAFkkAA8AAAAAjWAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAABWAAAABwAAAAcRRMcmEdERUYAAAF0AAAAHQAAACAAagAET1MvMgAAAZQAAABPAAAAYGizboxjbWFwAAAB5AAAAMUAAAGSLo90Z2N2dCAAAAKsAAAFIgAABlyqhuF/ZnBnbQAAB9AAAARcAAAHwcm82gVnbHlmAAAMLAAAQl4AAGvU7PFu+WhlYWQAAE6MAAAAMwAAADYT26i7aGhlYQAATsAAAAAgAAAAJAufBPJobXR4AABO4AAAALQAAAD0AJgXLGxvY2EAAE+UAAAAfAAAAHz5oRNcbWF4cAAAUBAAAAAgAAAAIAVuBHJuYW1lAABQMAAAAO0AAAG56kR2GHBvc3QAAFEgAAAAgAAAAK9AhaCecHJlcAAAUaAAAAeCAAAL540h7UEAAAABAAAAAM+beTwAAAAAouMnKgAAAADSlHwxeJxjYGRgYOADYgkGEGBiYARCGyBmAfMYAAbeAG8AAAB4nGNgYQlmnMDAysDAasw6k4GBUQ5CM19nSGMSYmBgYmBlZoABBAsIAtJcUxgOMCgwfGa98i8QqP8K43qgMCNIjkWNdReQUmBgBAAOiAwMAHicY2BgYGaAYBkGRgYQ6AHyGMF8FoYCIC3BIAAU4WBQYLBicGPwZAhjyAKKlzFUMbxk+Pz/P1CFAoMegyNQxochkSGHoYihEiLz//H/a/8v/D/3/8z/Q/8P/j/wf9//gP/uUFuwAkY2Brg0IxOQYEJXAHEqArCwsrFzcHJx8/Dy8QtAhASFhEVExRgYxIFOl5SSlpGVk1dQVEJoUVZRVVPX0NTS1mHQ1dM3MGQwMjYxNWNgMLfA4iJLGMMKt6upCwDICCh7AAAAeJxVVHlQ1lUUPfe+934fIdJULkCWgsokZCaOmaODW2ILoIBbBpIlA2iKqIyYuO/myiAJbmMuoCaa80FIWu7ZKGBqbpW4ZKCTQs2kuf1eV+uP+s68efO933v33XveucdUINBUIMgUIVCHIgCwtTLqHs9uuq2Tb4GPZ74JoPzfARRjB6VjB77BQWqQUzuxB14cQ3O8gTXIQR7mw8EwWVmIeIGR9TwKtF50wAYoGZWydwimoQLNKMDewHTMVafl1Fw0Rgh6YQAysISibRYSUaNnowuiMRbjaIYdapfaXLsJm7FHHbOP0AhB+FBQaW+b8/YntJcTK1GAGsp9qhQ95ZYZsnMtxqNQJWmyqfa+ZBCMSZKDRgwqaT+HS/QU1FIA5ag+EmWj3WUPy64WSEIaClFBnakfB5tEG2Mr0UzuyJaoBdiNMkE59uEi+ZkGu8k2IBAv4y2px4sq2q/cRzPdHsKYEZbaoat8ycDX+BYnqTUd4AzjZyJMT/OxPYMm6IhBkm2RnPyV7vI0wXR1VEfZ3vAXXlY8ZhtHcIWCqAP1p8HcjjN4nRoPH7mxo2Ak0oXvVRL9EoVTGftxtdqot+sHzgvuZesvLxKK1ViLA9RYKm1FE2gWnaVr3IeTeTVfVXl6qz7lGSFVD8cYLMF23KVn6XWKo/cojXJoPq2gAqqkk1THvXggj+Z6laYy1T7dW5CgJ+jZZp75xKlzh7qH3e/duzbCzkOc6GGmZL8S66SyPajGBUENrpKhRuQvaEXBNIimCKbREvqMimkreeWWk3SVbtAf9Cc9YAgcfp6DOUTQmsfzJM7jNVwtOMm/8T3VXIWocNVZdVfvqgzJar5aLihVV3SQrtZWeI4w+Wa9KTbbzUHT4Ph5ZvnA58TDjY/CHl1y4S5w893drtdeQVN5wyBhoSW6S/YjBKPkvfNFcTtxmvyEuyAKo0iKFmaSaRRlUrYwOYcKafOT3Etor7B0juol58bc4knOr3Bn7s39BcM5hTN5Oeeyl8/yfeVRjdTTqqkKU/1UkkpRE9Vkla92qRPqZ3VV3VEPBVb76pY6RIfqcN1PJ+ssvU7X6lqTaI6b646vM8aZ55Q7v3te80R6BnjiPEmeZZ4yzxmf90Wdh1CKL/GfH11WM1VfVYql3EkHchVXiZ6TMVLFsCiVi2kBTyUvtzHZTjfuRrFo0KHC9VFez3e4m4qhdygBo7jjP9GcJnqbTN31IdzSe6W2Komc7fjRNK53/LCbwF3lziPqVR2ujuOiqiGP3oAftS81p1tcpAaICvbpSDMUwWoNSlQmTUUp9wV8H/gsFh3H0jbxhYEUQX8pC8WxoqIu6hpmYzSfxy3p4wX4lEbqVCxFJ8pBLbZIV7QzY50wpyl9x+l6ET9HXrDeKtV1pTakTBPMoSRV6NTzBWShWvvikvpcsq/mEhWjG0w8pUkHTMU8ZNqZmGyG6lOUCkWD0VZfFnfLURE6WObp4iqJ4mll0t0V4gO9VIysBIhyokUXg8QhCgWrxCe0KChdenyIuFgVvM5ALkeq8SdxHUAfd+MxzG5BgU3FWJuL9uIH822ORCzGdSxDMc11p2AcXpTOuUTRJoqrTZRtz4v4Aidw/v/fV9huSwG4KSiRP5HmKyzS55CAHnax/UHU/ZI4bAE+wNv4Raq8LTe8qfajkxvLX9goNU7qrUGcLbItyRdp9iP0x15s9hiM8ITLG++iU1LvFKRwvJ2oUtx04WGZsNBT2MoS/1moM/Vsfc888zca0r8GAAB4nI1Vz08bRxSeWTtgjIElhF9ep53txG6K7dJfaV2Hki3rdYmsSjEYskuRurahgpxQD1FpL75EQQOVeuyxf8Jb0oPJCeXe/6GHHhupl5zpm9m1Y1dV1WWZfe/7vjfvzczbtVV1H25vNT637q1+tnK3/GnpkzsfffjB++8tv1ss5Jfeuf12LnuLv2WyN9+4mTHSiwvzc7M3Zq5P61OTE6nx5FhidORaPKZRUnB41WeQ8yGe4+vrRenzJgLNAcAHhlB1WAPMVzI2rLRQ+c0/lFaotPpKqrMVslIsMIcz+K3CWZfu1F20f6xwj8FLZX+p7J+UPYG2aWIAcxYOKgyozxyoPj4Qjl/B6YLxpM3t/WSxQILkOJrjaME8Pwro/CpVhjbvlAONJCawKEjzigOLvCIrgFjWae7Bg7rrVAzT9IoFoHabt4DwNZjKKwmxVRoYsWFUpWGHcjXklAWFS3HW1UnLz6f2+F5z14VY05M5pvOYtwLz3/+x8NrFya/b7tNB1ogJZ+GQSVeIpwx+qbuDrClHz8M5MFbLVn1RxdRnuIm1TYbZtCeeC/QJpmRyJXJV4fr2uSMR/xGDMb7GD8QjH48mLYBsHJvn6bR1cfU7STtMNFxuwj2De81KJrhBxMbxs0WLLQ4zxUKgT4cbG0xORUZqYtDY73PKUnJp1Tb6O0tlRfw+NgSwNsNKXI5rKslhv0REu4QyvDyKUbCHJ3IIY7Yv9LLEZTxcy+qciVcEO4C//HMYaUbISFZ/RaQp+6Tfasj3bMjnYWlJtsiojWeKNa4q/06x8LircX6kM3zg9pEHuLdNr7yM22+a8oBPuxZpoQOduhv6jLSMc2It5z3QfMlc9pjZLcl0ekw/3OfYyb8SSgiZhUSuf0/pczPOQRno3H/Q+yFf2+S1+o7LHOFHe1trDHkhX+pzkQUzthsztMjSjJhisSl3+2LpuCmIZ/EeUU291x1NYFcqhLIq6P56OHpJ0/yfQd2rv2SUerwOi8qEcn7YvzvkD5WXEjEsOJ7Tao0dIZJDHLZamPB+9MCOJw3XZDaQLXwzs3h3ry5L8t8zwMIts6UA+y+EIndIaES2h5fszmKhih86IaqcVYUvmt2rTosznYsL7YX2Qhw5fq9xulfPTw2onnm4Vwe0jC+FRtYCTk/qgUVPNnfcC50QdtJwzzWq2f6aF9xCzr1ghFgK1SQqQekw6ZAaxUWeawmlNy4sQjqKjStA+e0uJQpL9DBK2l0txPQwUU4lsoiGTDxkrJ46jlgixDqh+nakTiCjS+Y5wd8Oosjwkh8nu+EOtp16lyXxMO+mNFHbxEOTZLJkJAdoJgOBcviaf2cGOCds82MTQQ4MP3AoCsgXGU8Ihn8c07e33XCUFC1kcCYPOq2e1sh4fMBNYag6imcZ+dr1s/3Qy/YtZpOG6KWD9r9mw+qBfiVHdavyg48JD/PjD1uYVOyKHW7id/OmTBzVge5kxlMzYCU/y0r+BhyEMeR4nKW9CZwU1bk2fs6pfe2q3rfp7tl6lgZmmBkYGkanUEGRVZGWQTqgLAqorBIXDOACLqio1zUuuONCQGaAYYlODNGo4WrikquJ0ZuAohHDNYQYYXq+c05V9fSo+X/3+/2b6eq3q2s953mfdznvKQACZwCA5nLTAAMEMORFCBratgts7ZGmF3nuj23bGYRF8CJDVnNk9XaBH3yybTsk65vNcrO63Cw/A6UKVfD+wiXctG+fP4M9AACAYA9erAcH8HGrrTBqAzJqmwUWg9VgK2A34d83sY/dH84Yx/P5I6D9yNDG5mHNgT0HDhwg+4K+z1CWewfvO3U3YPr+tN2fRd19f7JS/ux9DETMo8xWBjErAfTjrRHE28nMYYAOw2747A4A2M6r8ZHbjGNHDHzstva29dyQTP5aY//QRpjPZAKwGcJnNxamR7gvv8VHQGBa32esyfUAA5TBj15E6PTzpltyNMFy/oSmhaTuvsNdHg+aRgQromlYMoFK1oCgquKlStaBhkwmcwAvDuD7IXcUe5H//pGO4SPx5EifdmkaFb6yIorCk0MaZA0wVJUsybriIfuPaU1i+fXoJuUmz+s6JwlKGI3xTQicHTk9dp5vZmBm5NzYImGRMsd3aWBRZHbsKvRjfqVytWc9f79wr/F6+EP0Pv++8gdPtHhJo42+Y0AFKrRADoT6vgYKUBz5G6ABDVqWmQstl6zyypZGCQLJkJA0WsY7uRtKfYftDXflpI1JU1XVbmh15UxdUWxB1DQsdObM5aC7r8dS8ZFSwMLN7m4KRGdTYG+6Mwc2Jl67laAD33o+cwQviZhfSkWnKWB+KchvQ6dvs6ZM7+JTESPe3Xd0O0opL/V9AoL47cVvD36PIC+I3x0dHT7DO7y5KQG9AQPxlRU1aZ8RbG4abhrpygqBn7bonU0rt684beE7j7171Z27n1216tlnf7Lq7Dx6B7LwlBdmdRb6PiwUCr/ccv8u+HDhvr8dhZfAhV8tWEcw+zEG0gmMIRl82SkX78wVZLc1gCvI9r0Wb9oqzzGWZrYsYlejO9ADIvsCCyXAc4iROKgi+IZMW08m/QBgCp+xu++TLsPAwOvu+8IyKRzjFI46hSNuDStCwOYiiqIrqnKW5mnhyLF0ciwOpjiLQ1xE2QPb4I0gnJlkHMQtbTc+eeEvbRN720B7eygLzSxpeZDPQPvH8kpTh8KwU2FrMzrRNfqd8+77c8MK9ppTVyV/duYbs/BVnor1UcDtkoD/dPRBMg0t7PPx0zSiDqZJha8syTCwlPBzCaJmIbJBIkF+TcR1/EtCJdef6EZ7LRXJoVAqaZgIpZKmN9vw7gGyPAAaCDwy7WS5v4koICqeUPV6ET2hJXlM5J7nE0vx+tC0hJ+sI8fejg9N1F1R0DQsfGnRtvyhsxGdJOcjZ6Mns84cxY3i93Iv83uF18TX48I4tUM9T1+kztWv9l7tu9m7z3soeih2NKq+rOzyoYRsiDz/Rjzqj8ejYjyKeU2MxhktYXSjJzsnm9DshuEd5DoBubBOiFR5gLLKJcoqF5VVy8nLQ+9gQBKFhXvRWpACBhxhqeaOdjQLLUarEYv2oCqQhHe8SFUsj2nyeIawJdWttt629iO9+YOml/Q2XqzXh2R0TJ74C+57R+EsKWbEjTIjYfAv9R0FAlYzEX9K+O1q24gOkIf5ZR0d1YHydCsGyKlwWAtWM16oORU2NwUDfgwc/McKJ1tRqPqJB/+2+YFrrnsI7vZ989t3jp/1zCuPz0xs2TK6bU7PT/Yfmr/o7odu8b31wRdbpj+378mbLhxKbUyu71M2iLGVgdudrlYiYYv0WDgOIIF4RsVfYF2lrHlUT0KW6wKJOJuoi3N1WqWmhiMQeFMGUZqUkCb9TjZPNxDOPdBA/gFvtr3dwHYE9/iRV41XvVljf6aJvEmPN3JaUBujrdPYMeb55soYc27wUmOhf27wCu0q/zrtFv/Nsac0WVE1nRUgPh8kXWvhC98Lw6AO99ewLlUNsOE96EkQQZdYEr46Dl+e5h3Q096SnvaW0LJ3+azU4hRKhYlmpNYIA3YSSnYSSnYSlqcpl6chSBtphO/62C6yf3rj4HA3HLE98g7cA0dgE9xjKUWm3jioG97lwCVzhALGIeNjmXyRk3sPEsU4YlD02OApAmY7l2KwvmFgdBD6gEs7fK0JDIPhFBNCa9AVHXgkYMDPC2QJKivSua7kPYtWb3382uYJfq+yvHvdwgUb/F3lX/zsyjcWzZ973cbC4fd/0QevDz+wftt1qx7zP4KuvHbOdTfckNrx2sXb5856aEji57f3FP7xKbH1UcxHBrcH87QG/74PqH3f2k3WldN4h6w5l7V5V5CKPO4KnMvjvCtIRWZ3BUF0NhZdQXAtnSgWt3HMgOgKnCvwriC5gmMzrNacd7p6ifqg+qz6uspNYCZo/8EyXkwgQOUZgZMVRsCWR9PeYFg/w7CMBpCqsQKzF+0FIkBwkyUDlsWbgDdkthvN38VxslWWbJFdkyLb/gkVvqKOitwNWy1NsCoqW4Q15cOEjR5E9EvR/C0AGSiFGER2Jvtg4eBOsg/aoXfDDRQ2XxI7TizKMcLQbcanBjUoxrG2421mlmAlm10/JMNinvF4PNjEnD5z+m6gYdfPm8Ws/a6lNGeZisFZhi0rayOH6MAgwttYftVSsuqaKVnVSmfVijj+HJyllqnDsVADXiCD/dVhsNlsDlSajAnRvb03oIfvfvXVrsIwOOspZufJs58qPIYp8p7eRYByDPENy7mnsf36ZafP7X2vK/hUpx+9ruBTnc7yYmE3UT+bmnYDiNtLIw0E47qcCATiXmLMFA/LJuKaDoEQxoacOppUoDRGzAyhIaJeWLd692PqIczT4qXm0EOX46NXld1Sdq/vGd8v1ffVP8REyRfW66OMTw54fb43dI9f9/l1j4bZx/KRU1v6Jh3puscKQOcydnlY+A5hJmx0LJNckDnLWGysNu4wWON/zSxhyixhCMJGGIVdZglvTHn3wWHAA+/BW47Yru/4IYZJDmSYARyTx1ghNom2Qd7Eb0zJB9eLQzIcBgwoNUxdUiPXqOzB9oihbEP4Zil2+jvs/i8lHcw0vvJAOYMdQhDwC9gdTE/7eeCBS6/r2rLh/A21z96OPujdNfmGO3uguOK2Y7/uhWuMW27d//iD2ye3B9H/vFBYObNw/Lev3bn9E0B4ZSLGSQDbojJQX7RGSQ9MwlmQgbHahKVBTcNOR4yrSPg1OQFBtUHcERpPGImQQTo+RG1RiMYTIcf5P/DuAeNXLgDyR4z9eQKAwYsi8AzBCpwROSM1w3teahEzV5grLvTOTa0Qr4jfKK6Lvy++GzSFFOmBGls1+WmVxOWJEamc/kAua4qG8IXF4DvEW+smVsi9SEjsAdhRPaD3q0t6v7qk96uXG7T3DQgMTCH43o7uIn6nsXEQ5o4RnQlXZRIuPSYwm+2lx0nArKW1h2aFFodWh9iQ4WyAW4PSnZ4LBcmhQkFyzaFuVNWZKYYHtv0pRcsR2xhRI4QbrAiN3cRN6apJVabKu11skAMQe9QBhXQNMUTYISHmx0u8k8oKYBqtGB5B6C+BDXOiMzxo3KLc6GkXodH7Lu7q/fHbN/x34eDDNx/e8lFv6+TbJy178vFrrn6OnaovbJzYeOpXf5wzu/DP391y5CdwPFwFn/3F5ldOfpR/rqP7kfu3brU55kJsk4LcM7gtl1j6fg2y+A+JrISJm1BEI4KspGrLGQaRJp5M/TgGRT3icumvYDJG2CzEtOOPxXA1DlQiuqNKk4xj+aVtE48dmWQcJz48iYaJf5c1s7YzhzXDN6w8wAOGFyqHR2HrhcyODYUj44d7djPX/f1m9tstG+4peAsnuv+wBX4BX3sIkIgc4zyCcR4ClaAR3W0jvUsFscQQYhCw346mDRniLU/wXG3CqyWI6aSh87GdNHLOeDAyKMt5XEebCPRHT5ghPxILxLhbMUUlYaoCKtk8QI8YoEoS6I+QB4bfxEM/ks0Wo/Bd9EJ490J4+0IO0mjc4xos5/xkHRZOWhVkJTkt2TNAuTZA77T//tyT4XPBBucC3DfR04nDgrAuOC44Lv2p+nkjJzXCa8G1cBW7QlyqLFOv0K4O3QpugRvYdeJa5QZ1nXZb6Dfmqz6vChJhoOIzbRoCSxpzgCYmSjQx4Wrizlxi+csSlEZ70cUgU7J1pmTrTIneZpZ7rBTWWw8EHsODPN3wzq6msKusYVdZw25oHl6+jYFMN7q4s8rdqMrdqMoN9auWB9wAMxWwAiiwcehrLrdTQqch/bEivxddSG82T5uS+AMlilvR98n2eCqK1XZ7KtVAPgansOf6yYt1KarHNs/nly0FSzs64BAcaAynEUbRgwR4jc/f72QypQoNFy659NOXe75YdNn62wrHP/igcPzOi9YtuuTGm+dffNPIcRunrt285brVzzCxuvsXbvrw403z76sbtP+mfX0Awp47fgHPu+SG62fNWX/Dyb6JGyc/vea65zYDN6dE9CQB6lGlg0EliW1jtYkt43EKMmIiKS+HSbBeS1AWNinMTBqzm2FzUEapTXj0pD5ZZ3TdD6ZASAMbzcCRMSSGuoKEiKTt9mfyTZTxmmjzYQQSlTCI/fjoV8VouOQi+p0Nq556GybVrH9z1oHn+s6pGkpPZJ05MjohaFVeEDy/cj5zafCy6MWVV0evTWyI3pp4MPhsdF/0i+CnqeMp3ynBR4JbgszIurk8qk1M1mcRryROTgLfmWJboy5y2uTomhIkJ0uQnHSRTGSYBUrJdkrf8eJ2Ssl2Cg6HzYGuysZBxNbtwLbOxXS1i+lqF9PVy80ipk3LRObGzABMYxPk4NlBc9Fh6TdBe0EN9kwq+z7pLE/xKTdKXgrzHU44dCoa1lJDLA/+BBjCXpPmqdKQAjVAEbxkS3DVhVOvnTIcDt972c6TUHj1jiPXXP0/j7/wIXrzqRVXbn921bWPwanG1ZdPWP1fS9RwbhEU/+tjaDxY+Evh68Jnhc6fvcy0/HTn/oc2YPODwG5sgNaxaZr/HWGlWA7wgoT4NpZpgzwrozbsfAJE8k2PiTRji7WW2BEcE9O+p4rqG9YcYPB794EDB5iOAwdOPnPgAEB9vQBwHTjWEoCO5owuwx7wNyXpi5NFWSpZz5XIrCuXhFA8W4ylVPUlZ5dv7Y7Gm/GK8pKz7zF3JVLdlbB/JS+7EVjQTc25LrziBoKy7EZ7riDp7mW4awR7za4c1D0GDX6+7nKEb6huI2LAOqjtoXaEo8sGo9G4WLxEmm3cxGw0Xude5XuMo4Yich0wh6YYlyjbjL+rf9f+rkusymqsziiyxLGsqukiLwgqlkVeFSAA+DSWh6b9UoLqxz8hhiHrAmQdk2JVP95LSnCcmOAZvhstsSQgqp9bCCK0ByqYxBTLq6bAPIE5dwr7Fvsxy2xkIdsNoaVMUXuEj1VmowpV8t3wCG8JaLWwRkDC3Z73f2+DIYLf+C+MARGNGEeOgHB7W/RI+8E24wj+I6n3DHbS1w8J00+KGRzxrTf279f371/P2Z/YFxm/TZk6flvinBm2rsyY3sV6GFHY03cUhwrf2Ay/jLjy//5VCZthJVPO+MqZdA0vMKj5t2j6R8/3/vSxD+D/PDC2It7M7fl2LNxXOAPNgPfu/vFttxL/iwH3Yv/rc4xTk3rvW3YT8Fh1JAPPsmMrc5XzK5dLN0j8gugV3BJpuXI9d73C1wQlJlxTnwiWSdgqHy7B8uHvp8atcE6SfN5EfX1dHYiXJXDjJxMJE4hhvG+huG+4hNnCmL1Uuq+cC6d5lThFPA7LrWpC2ryXEDbPk07mRXKlPIUV7yeQ48+rHnDcgT67e1wjV51W4+S4qkyOphKgquRYanQQvsbv+euy644nUjQBnXKyz8epHaGCk3n+tosi0hZ4Oxct0/xzPjNqZriYW8639ZJ0wCT6faKdT7Jf/clI/MYk2mZgv5XYMzNLcks0tUTz0M1meUmySEeVsLyJphqHwEoc62MZ2fK9KL35zeXzL77xjvPX/GJD4W54ytoRZ48fe90jhT/Ay36UPn3GyPPu2VDYwu3p2D3vR0831+xbc/GLs4cy55rB+RPHLa47sUlQRywae+5VQ22ffX7fZ9xK7h2MmN4dc9DCMgRtd5be7WFrFpFSoEmbA5aAFWVrwA1lG8GD3PPMU9pupkt7TXsbHCz7e5mpe8vMsjKmnq816+Op5Jlazn9+IBe5hFtUdo33Vu+DzAP6g/HN8Em02XxP9wE/iBp+I8qS4bDttVnqCqRqs4YHQDbmS6hMLMFKRtpzNkinsM2OJkNuN4bcbgw53SjnQumUCDGL0q9aTqR9L0YSc2bS2AF3D+0S3DtYcMIqkzY8/omMvuDYaRkM8WxlRRVuZG9VcxMbEnBbV/Ao4PcSW8V2vXJK4ZeHjhR+/9Ot8PRX/ggHjXq5+ZW7n/3LzMs+XffEnxEa+rcTv4CX/+4QnPbiJ28O3nTX44W/3bm38Pkt+4gP9Qi2HzOwXnpAGRxseVNJeLpoa49pJDxADA1A+cDRKxflSXKbEkzStLBEISvJdDQvTNdQ0FN2jibLDLeRDNnJ4hi2Q4BBb/yvQf9PF/TfuKBP/ADona/5AUgf2nj6VdZwJiaIvMiJrMjykXA0jHhFxjoqM3wg6A/6ggwfY0Ll0KvjRViMl8OgbJaDDBmTqcevtTBPtCIUDAVxHIuwTlSXNw238+84yC1/BP7r+Rk/6VixfNLVdx64sfAizN751NAxE++7dNKWwm+4PYGyCRcV3tr/TKHw7IVNW4YPHfP505/+sz6B7/1xzJOHcX8o4CUrwHMJURQEwLCkQ2QpoQBRIHj0G94W4Tzm7JSc0pAc1VgJFa2nmystUon0/0AlkvRvOEUddYGDWKeBJ7q0kp947OD3eGRoI26eQLnzfpytOvkIkzn5HnMDt2dLof2FgrYFXxH24tkb8b1K4AWrgt7rHQIs3i6+1YdSKKUgFFX+f96fpdhjyA51FL53d/Komf/27g7aET3xMr97Z5uZj04eQtt6p5C7Grmld77NWy/jxVp8Xwxs70TuhTOugATnDhgsjNYcp+lfRb0Crow35VRbRRgsFDc9Yasd3dSRd+ZIeyEy5Ng54hQ69NjZ3GJ/Dm60P2vr7M/KavuzLGF/hqP2UGW9ZrSkuI3cVo5hUtjruQNsAtsA2wAsMAV8DI4CzpvCKzcChrPT0qRxw06jf+k2+lduox+3DNtloo3+OPt+R4l6nj5z+vY12C/Kdyxd1tZbdDhIvppSn/tqNpvNl18hHgVpV+JD1ON25cCtlgoRyyQ4IKaIJ4We2SGgYgszLkaYIkaY/7UOHP8es/A/xCyf5m3IEzgQQNz7Cvodvs6/E1zfDwDvwddpMA2dYr1idyHCwoBctYibiOJS1DWTOrO47bDAkZHaWiKpXvIz51EZCUAkSooORAnJCk/uQjHIlSv4yneSrRQDkAEF5/6+ce/vZNeAugmSuWnv6THefruHDB1lMnZrA7eOIinQ7uLpkqFLli45uhSx521VEglRXWJ40lZI7/e8ZboUXMdcJM2YpGNfHFRTsrfFQxecygCoYzYTMa2RGydHowI9yF6UA15goJylOUrLu51CDwtIHihzrOEYpfX2tjb7ZvIl2AF0GbNWA+QR/SgmsivVdeqvcVOq49RxHqaOrdYG6dOZC9iV2pX6ek1UECdmteH6ZDSeOUOwxInaabp8P3qAuVe4V9zMPCPwXuTR9UYO+TkOiaqmNXIiFkX1XM+50MKuvihKOODRNF03SD/N9q7xIu8etBkr6NDtXErshkN3qJLsBkVO5GNJOTllqasVqOzBt61DBW+LuvGHB4LRckmADajBVUkgBFKeJQY0ulFuV4qbza3hsE6izZ3mKKxkERwxHMu3hXsJTGm8gL9FS74ezOP4ATeaUfIviqMKEkesv5aGEfhjaCMohgvTfw5UTDVi3/s44nyfhgnjt6n4t9r+UIIMJX3zoi6TH52RpXd3lmf1QeV0dGlna1ZvaqXijsF4rTOClOnA8QZYmifhOSD6jg1taHgrLDcrTVgJzfthFbygMRgZBmdBbm8ht7Uwndtz4us7z5ryU+bkt2PZN08MYz85kbJ59yHsyySJPYF/7mTCbugqupHD9pxXofUdvkCLGFaDNPF5uMsRjlmVpnnaNFGlSxzhpQQRx3oiEhhGlFiEJEFkGewNnSh6Q0yJN8S463dgruF5zqVEjqgM5UrO1mbsu1hRqlL5lAJTyhRltrJEWaNwilhq2xxrl4K0JEXDl/y/s3GsY+O+7yDJo0oYOJPPtFFE4MCSMq/Ra/Mv1iYvSQ7i8JGlcLCZgdSIfbJLNVvEFF4AOtgztJG4Q7ivu0RrbBY3Yc/OsVnRarLFpqxQEaE1ZTsjWGyyRbK20q40Uyqzgu7Hbx/5fmynD4tltliGxQARv3kx4ODELYahem1DpRli5sUYeeg1Bu157WQBA2MtuxqDYs2JNTQ/OAfHDx9x7wIdxGCzNT7qgX7D74+FYjGWNVi/ElJi7LOhnfqrOhMKhWMoVWaZk32TQ1Z0OjddOt+YZs7yzQjNCuei58duDT2AjEiCYbwJRQoMcIoDJTAIuE7xzlwgncLezEslZVwCRhvpQME1kwJJhZNuE0imkPSc4KYrBdKllFiF6JoyWOZxjZvHBYmnGGR40gQbxQovJ9rw5QBfwp2R+Jx+H8eNOvJFOEz8btkXjj58BihvYol/S8OPVgM0NwGzBaUrK8AceBMc/iYc+3xXYefLbxX2bP41LPv9H2Dsqs/v/M/C79Eb8DL48CuFp/74cWHTjl/DGS8V/ll4C7bAWCdU7i4cAsCJPdherK8aCEPBSswzF/nReGO8/wLjAj+rqAlMtyAUtn1B74Am/8Fyjc6cNy3uxR1g5wP0nEhjbtFwTNcxy0taQoymohD/RcOa26aa26Za0WHQ/l+dyu+7zJFSv6E/Dl9qN7rT4K7PTBxLEmzTqCKBYztUByM4zh7uBhSo7q6Jl97V8VXh9cJN8Jp9j+QnDL2hcDO3R/fO23nZ3kJv7wsM3LB65vUBjbbt9L7bua8w9gOgFu617pmVfjSNIuHWAFLibJKtjMX9SX8lX88NDmXSo7i20Mj0BG5CaFw6z02rnJ5ezF3DXM1tYDZw94AHmSfB88x74L3gIXAodCgcjXMZUM+N4tg8d1f43vR7abY6WJ9uCWbT48Lj4mOSYyrHp3PidHNaYEZ8RlkueX7q/IoF3PzAovQ16dvjt6f/EP5jOqKEYQDbgu2xLCC1B42xLBv2h+u5kRyLmGAtI9Smw0EO8OWML8oh8gVwVYmEh0FiVUKQogPgEC2BQ7QkqRNN+8Kk33yuwvko4atUOEoVzucqnK8IEN/ZKJqqX1OP6stdgJS7ACkvKl15GtO3UtQ1JUyOplBdUyJ1/brWr2oTj5XmXY6000ifFvFksfsCzGbjdeP1vBP6g2XEKC5dVh0MCekaviT8J/qI1w53FNEkWtmarmH/sX5Z9pGHn/jVa4V9W7fBMa8T5by899PNlz2PdfKDwp9h7I+XzLxg3sP5zPrsNRf0wJkffgDn7vlF4akPdxQ+vq0h/xDMbofy3YXfF/DGhf+sGRUhOHoM29QtWEfDoAJNscq9ig69w+MzkvPFy5KsRAseRboU6LIKUz9tYFp4SATVFRRX8Hb3/bnTG23Bn0c7K2paTPK9rKbFcD49zif+/b86y9L273h7w/kkv1vjsFCtnx0/OzVVmRm/LL5MulK/ynOjfJPnPu1ZT7fnsP6Zx8D8mTI9ftP0mB5V8sZQeTQo815Sq8iFJSkYikYSoZf6ekpyGj1WgHRkKATKKyjzhDGCdDExAG8DhwUdvO3IJdL6Q7xbycy7XMGTgoAIzSLyNHOYT1UtqVpTxVRVhNH3xgCLBBT+3xIQ/28tfuWozT8U1TqsHzkYdvIixAF0eCiT6cVfsg20MtEuTOSKVd0lL+BEcZYsWp6sxxhpekcSwwyXUt9Px/Y9Gsma2APw4rduxbNGhR+/k/hdNOkd/YnFYCgYgpXMEFSTzlDesysZyx9Dt+z/zdVvvDOxdtoE0HfslWmXnz+4fPx/w8duvHfSfU8UGrk9k3991UPvl1VXTbqisBQOvWHDCEXovYJpbr3qzEvW4fab2fcZ+1fuHdDI+EeboKZkjCpdIherLHAPGE6fRFwhioXRSbqdVpJ5VktkpUSOl8gxV8axaNjpYuQK0Bas2twcZg67nFnBstU1w5hs/HRmnDChbEzyjKqxNVOZDmFm2fm1N/v0SjLuQeBQ5QrVrpB2hRpXqKRIsTe2hWpXSLtCDYnSxxKpVktXoSqmpnq4p6XyjOoxDTNSucpp1ZcqC7VF+nz/vPBVytXa1Z5rjSuqllevY25RbtZu8dxm3Fh1ffVd2r2eewMJJ4AcXJ72xtJRKV0H0wDURb1s09A0mIeJRBt8VezmGIpVB7XBiZpqWM0FuWJikEsMlhKJIEMdkAwmxDx+Ox95WuXYcMT+F7MGV1fpmsKVx8sSMVHgWQbxsLqqAq/juURscNQiWnEHtu9HgmAwzd5Sx9uAKTgFzoZL4EbIw264zVIHJ1I+32nTyIk5oqQa+UYuBd/B2dKAQgCpROOl/kIAKQ3qYB1x3nQdTasj90OVsi7aVK5+z3a44/u4jWDaSyIEspfX1WlvcZzJex5R/cjQOXbOLT/xIDEbhpMpdm0KTReT4mijN585SBbHSEthtSUDQCR/34GDOFJn7r5g6Reqw77WBGpuctKWVTVkWN8uDXWSzAF/KMiGaNoff61Kz9ylzfr1tYufmzpl5qjCpecsuPgnX//HE/9ax+3xbHl222PZEfCD6WuuXnfi4dcKf38A/t64/LbzT1t+xpiLK0MXZlqfmLf4F3MX/Gatfuvtay+Y3Ny8qHbUjpVXvLV8xef4ZhuxL7iHjmOe7ORdWhRcgXdzZsL/NWfGuzkz4f+SM8Mcy6EEhg/AKOJYqRst70zZw3K7+BREDaQGA8Id0JkJcNhSKBeLDhF/7WaM/uwy8kmXgQt2loIcUdz5QGnyCHcmDrUO5j8lnGt7fwMSXqR0kmQWka9Qxt5SiHHali3f/p2MDONYpgK3jx8mLTntmc5OF18X2SCBdxAHhy3sKHEse7a40vM0d9gjqACZpNSel/wDDJe/BMZ+13B15vxp5MarqBivIpq/IyWndryK8qkgTAWnBNHs4JLgmiAT/Lf+886clk7JUHajbTnlVLzaVkx2ES8XrZjMOhkg24rJRSsm5wMkbu23YnY2f6KB45NSP/pIO3WgMyAPm00nYBmG40O7CMVkZ78yt3Di3f8sfLvklTO3XPv+Tm7PyRc/Kpx84naofc5MPrn95R0XvULmOpE8goR9nrGkfhkN7uQGuUXILm2zWHDMgVjStKJb5UwxVhr09Te56MolOUqkFxEt9X1RtEiiK3flZL+mveQc91N3JaxyRk+QK8hRN+NBNnPG9GGVm3XGQkn60fJyOGKkkZUMOEnkIOIaPjpgfHTAbG7GuGynxWsxq6qBg/WglqmWG9RGdbZ6s3iztFHtUY+qSkqdoiIWKSJySm8kqCpAxIdsb6dD0HhvWZJSIucXRQ5gNUKcHyFOwqf6PCUDUZonwnlIpMnk2uwUEa4RN4r4O4SWhqza7CwE70CPIoTIGjPFTeFQIzeb28j1cEc5jutGN3UqszfbCa+lZD4NeYcNe0ZaNHIkbM9Kc0bGycC4ndDy9yettgMPhtr/bJe8kHyIfpKFdWudxm+rxVsPP4fktkBfz4iODhoa01LGzHdfhEzLYbOdvWqGaHTvr38Hrx2SrBgMN7za+wq358Tv1yy58kq2jqSysTk8u+8wG2dPBbWgFf3JGiRpUn1Ei9bXafX1WW14oDU2sn5cfV7L1y/UFtTPbrxFW1f3YPCn0We1QK07CFpD58oR6enIc7U7I3tr90feqv1d4KNa8YwgTBBjZBJl8nr7ayKGEXWeTKRkKBnODKpvybLZQePYswblxI7MfHFBZqW6Xn1d/Zf2r4zZ2qJD1mioagk1lfvDs+oW16G6eIPert+hP6r36dyj+lb9bzqj73WLQ3bldDpnTycWkai8Ti7CT2Yd6bTmSudJTZaediCrhyk6d+R0Pc6EutFznWFb3Yj/O0iWT5sWvscfjwugeC9gTI3cFGeUuguNCwGmttLs6Dcl+nfSSQIoOcBTdq4uryIU57hPX9oUV8US7qkiRYqk6rGKRCikPbHwR8L2WKIXXOVye1U3usDSaywyryOVbkxvTXNZEvEQO47dqvdtYS9WfycjkR6apfm7RGVLY7YnizZlYTZEqrbJwUOimwEOVYcrGtwpCA2u59Bgc4Rl5hqqXubf4lGSb+cR73cZyV+cxWAfZ0iO12noQes2+TCNOWg9J0+zFLxO4w9a98YPHVFMTRBSXWp7FJmMgZWIzgk8UmRcmrnIHDpEWPYgdjjw14P2/Kzizkttf82dkQJotECrwsHSauI6pIlj0Tqc/BvWUuNMQkHU0wiWQX8wVJlmeEFHdv0V3ohpm7t74dZ9Zy4/a9iiDy+GzWNuWn1V2bbw5W/ffNNzUwwpVLEvHrpo/+KZTZctuOTxdNn108Y+f+OktZP8uhatqpYvH3xKx9Lw0lvHWxeePeTKoyduPGUE/Kg2btRObDhr9gWTT/kx0cF1WAdJvpjMSf3MugZyqqeKG8aN4bj25LYkSiYr4s3x0+JLkhuT/EhfW7AtOiE4IZoX89p0Tz74o+hC8VLtEs/lwcujPckP1A9DH0b+7Psy9GXkL2WfJPuSkRTX4GnwN3LtHoub4JnCzec+LPsH+62hGgGd5RGIxXkByoG4rpASlf5gJFzidxbLVayKXLjqbQUaiqXMVtYorD3arlB9U8LOWNBxN9K2kxuKOxlWIdXpNDVBXVQCA2UFNJEDINMG0M6c2Qy8bhqR1dw0ImtnlqlP08y46GScmTKRHFONUA/EfvUmuA0ehWwStsPJkIHEESIKB0mhbxlRDUiRCalnAb0EmZAiE5KRHaISdNMguWQYJtcLabENjCTObB3gBBDQLWubSLLWdB12kGkGuwTMdoqlnRazEESSbApYWl6JnQIyPxUFDFBZUcNgB7e/SnXwM13LXrxo61Kr8PXP9y1CLdPuXPnCU1esfIHb0/uPOybf8cbywt8K7z8M73152q0H3nz71QO2vzCl7zBzBHN5FDXsA6G+o67xld2COskVPK5guAJp+lK73KKv9kAPobQpYAlgAOuNK0I4zipQDwgiaUOBtqFA60gFg7ShQDXxwLuv0vDJ2J9vIm9aJSqpMBk/3Xd6aKpvami2b3bop+inzIPak8aTUVXUIvJCtIBZyF2hLtHWaE+rO6Sd8g5VDarr1L8gRq+Y5VnsWe1hPBBTs5VupCPBs/FlbQSbwCfgKHaUPB4F9F9jHF86nbjswtdThK8n56nSRWoDKmKAjmwdK+Hrr4qbgSolk4QQ+wvQ0jN2oGw5OIWW02pwuM2MKbyK4sei4DmLQiZKITMuHnAJNeBCNuAQankuUPWWAJNCu4AEnebdZXIAgVpKwZ1eJKiOWghDYy37i268Da9+9swvGz+1cjx1EyBxE/Cvy46RLN8yt3LdzDYY+YP4j8ZjGIiuAwFD9hSIFjJlOliMuQgimbYXy/72sw8L/1z2+c1b/pjcGlk946bnnrxh4e3wxtCut2AZlF+AaO3Wx2KLLv3lO++/ch3ms7EYhx/bNXbwkLVKRqxWrbVoZ2jcMP+w+PnoPPlc/9T4xWguN0+a458d70m+y73n+yhyyHfI/7fQXyOHKG8Fk8lMlJDd+ChhPmEI9jCHBEeiYdp4NEYb6x8XP1/OaRdrh/jPgt/CY7oBA9iZNTyYzxTBBJjQGExo8gBCK9aYhpsh2NvvBYNq0zOA+zw/CJ6qnKfaMN42oWFa5mxzjYnZjwDf5kDTS0jGpD4CYUOTJ2piUk40aThDetjUSQ+b7hiz6Y4lm3vdq8P0t8IrFqeWufPQbMzszHmrBDcjRHKdBEejci8LbwkfC30CS7A0WWCEBFVIanqFhK2oFF/U/RGiFF+RRMuUEjYjQTmNYooERle20Xgfs1rbQSfAIe9+OiPjpuXD+MoKErTb+MHUBksr8EfM27/6vSsWvnv97HsbOntTL1yx8qnN11z52LpHNpx44lHI3HLOaKR/OxZ5f/PGL1798Df7iU0cj21iAnNZAGNorxVKgngATWPyXF6apsxjFnGLpXmKGCAeE208LFjnEqksTmdBeT/gvvUfj7JDvSMjQ+OjvROjo+PneGdGzo1f6L0semH8Sv7KwHF0PGyAIPRoodCUIAkmmWDcs9HYZCDDYGNxWQB70HNEl1zr0WPRzjMwJ9zjwzxDitKO/n8/UqEzF7I07MbROFNzp1hqxDElfaCRg0o19S3bNKhFk6QOpjrdQj53EVctCZPBva4TuTMXbC7ydX/5mujaR6NKsKrqW1wEuMBxaMTK5EhRRREUcQoKm3TiFA50yhUBxUATl8/QdO1BvA4D5PjS0mCXlMw4le9tvUvbnCpxp1yTOF7LXGaxx+z8QjmNg2E5nYLFMz/aM+ir3Z8X/gb9f3wP6vDkYXn7jXM29H6IzlFH5G5e9SzMhZ7ogklsxFVYW/hT4V9GauueS+A9606/5Glq83wYLGu4d0AIDrcSfgl6Ig2RxogVWRL5qfqQ9qwmRrVabVukJ8JGSFMno8mWMlFjVE9chgGU8ftYhgfyo37o7/PZTbor57PY/hJKVxFDTnWggp1kFjDoLkiHxDuHjmihQ+OZeLJlI4ARi6h+xNKw6gM/TdTU0kRNBSEDMMhJ0XztJM39TtL8C+p10NIZ+hyH7r5v6ZQ68EQ4sg/uAeXgOJRBOJM5XqqbJIl+rM1oowp6JHMkTzI5bXRaf5Y8veH0q3DQY/KSwIvYXzckbwyYvCcGMzBTv3YtzGDVXdZsVg5rHtbSStJtIYF0ShkkM2a3P/qoL3r9ygkzYyOazj3jrbeYBzcsXdQy9nzvw/LY2RdtODnfHjs9rXAO8wXW0wSox77rbEXh/IOUav8EZYyfl8oiZYOUtH9QZVYZ7j9bGevPCdOVS5Rv5X8E9CGVg2pOrTy1ZkLNxkGbBgnDy4fXtQ8aq4wtH1N3Xvl5dQuEOeVz6mYPWjPow5rD5V9V/q3GDAX5QDd6sas27hOoJ2CkQCP1A9aAHvA2wOEZutYyuHjcI4+piKtyMNBc3UyepFD69ISvS6YluFOjqnJydTj8dggaISs0O7QmxA7C/YOmDaK8HqK8HiryeojyOpmhSNd+YfM62YrMWHR4PWTXPGEBm6BvSzjiW+ecai60wgOrQUXShVrShVrSgVool6x62fOW52NPn4dNeto9k7EP5Kq1x+H+ITkPVWtPlADKU0En18XJFdkzhj2U6z2RzKAV5YTuM5P6NXupk781ShmfUj7V+ONkLu5BZ3bLQTuxtRQ7DkkYDNnRERkQRDbrh4Y1mzQ5my6dfDV/q9J0+oprbwrrcOW2Pxy9/Le37bv66Xl/2PTSFw88fe2qzVuuvnLz9Og51U1zZ7RuuxW2fXQ/hBvuX3Ny4TdvXfk8U//bnpd/88tXf0n0fD0AzGGad9y8GwSx3gVCLeQpAxaNJavZYcwYZo/G0lWBUKQlJJqq6Wc4CDxxTvArsjrAvqslmFBdW2/V5NRqyWoe3tInwR4JBqlxD1q0kLiWLv2k6yUSuJu0pJiGJFKUbCeRUQwKBYlmGiSSO6QhDilCpt+P76QVapNoujTUMrxlW/BoEC0JbgpuC/YF2SDyuxDwu93sd9Hhr7ZLcAx8eUfJg5NSGPKfAJYO+TuDc99aIcoydqAkkqsqFuJ8a4czAFFaQTSImhQ4c0q41INcmnHKCrF0bCAm3DJ9O5TJQq/NLzqvC9U6r8agJmJmAaQ+Zi3IkIfGNDsRDgyYlSZBg46l9V0/6Vn5s/FdVyyaclsbDme+viv/5EO9s9Bj66+Zevu1vXsJp9yEO7yN1K0CAX7dieRiFaWbcCjO58HC6IiTWj9ZkoLpl7kSmXXlrhxS3OjRFXhXELBQPGhvSWzQL3MlMuvK+KCs03uMK/CuIGCh5Eq14iBAv8yVyGwxcdSak4aTfpwsbZQ2SdukHulj6agkACkpLZHWSI86qz6R+iQ5KeFwRWARI/HM3r4e5wj1OeYnEPAcz8q8UM0B9lF2E7uN7WE/Yfke9iiLAJti38bfWNaOftE0tggllkKJlcklsNRYsa6xYt3xBZbEyjKBFTtJ/C6glrXRpz9g2GTs+UB0EhmZv5n5dy86wwxj56auri72r2+9dSLApk98CFDf44Vz4EiKCy+c14mK1bWuoBbT/66gu2qEitkCV1BdQStu4yof4wqqK2iOk1WdY7lqbhTbzK3juJDIcQLLIpbzAagpiPGrrMkpQknbV9K2V3ghbno2Yh8jFMJsrFXL8kYFJpV2ZbLCkMpZq5W0tVNJS5MSCk2XKQmaPVFJcysizZtQTlciPv+W8jO/y+YkD9E2yRgz74xPl4L2iSTtQMYw7dIO2vJmc/N6Q7SnHuii4UmLhhyDki7EgK253xleJ10B7Qe2kDEM8uCEdV2FSyqGJ1uHdzWPvm8c+/lvf/uvax7Qx93Fzjyxaf/EuYSrr8eLVlp3vmSg9haHwX5AV7+jk8VNf0ADv6NpJUf9nl7tynFUfWiFeesIu9K8ZZj92TjU/qywK9GtamxTPFySe5T7mGMn48VRjklyS7g1XB/HYsaVEWOTMDkSJeMA9pweBbAHHMW0VcLI3/QzclkJI1M1cnw+0XH43DG6vj531M5RJjCJHahMRJtIEtSpTqffvvsinHt9Fy1UpzaTT2PfrJI5ZfRdwFdi8owBdWv9slkil5W0Z7xEjpXI0RK5rGSWZ7xEjpXI0RJZLRm00kpkvUT2lMi+EtfNKJG9JbJZIvtKzH2p6feWyGaJrDkFWKJbiYUN9n9ZExWtpZo9yB6U/jt0KMW9xx1PoZCYqpTCsZTEMJWJOB8g3pYA+cpoxJDfroYbqzdVo2qs6nr1RhOaLM0K0Povk2b8aVbAT6df08efEVCYiOYGqKabNNdvuqV8/RmCbpjvDLsBYH+pjpMg1XLh6o0xGKNnihXPFKNnipFifpOcKUYdghjNM+G1BdtFianknDF3fCGGT7UToOZK9ySVLhNWOr6pP1dZDd8GkKTgUBK0g8mYlsnhbLxTKgOGW5lIHp/o+CEn3UjnmOWnDokNdurGgUhVdTe8svO71GYnWalPWpJ6zZdOIiTfeydR6lsGSBCEbc5EMgZnhuzKNsddUf2+tF81Y9CrBVx3xY1W/51BIo8Qos8xC9FHDRBvxk6Qlfo1jzU9vXDlfcmfvPHIc52VM09d8h9d0+dOWDuSTd8zadZF0/ds3dlbgx6+dNbIe57svQ9tv/LKKQ/e2fuBnbclvu2nWE+DcL/l4xjehzYb3cZfmM98R5njPp4ltZwVGIdXGfB+4+3wJ+G+MJsS/bo/6MW+LeSDmqzpqj7AwdVLNFkvOrjxnF4Vpv5smPq2CvVqFerVKkWvVqFspVTQLWiinpoh6tXi7/9yEveyk9E/bpcrKtRxViD+UyaFCTtGiYcbPhpGS8KbwtvCPWE2zKDmQNDFUtBFV9A1wUHKr8e7TNOZDPODjq38HcfWLHFsWYdNeyzvdx3lSSE6bb/4sl3dY9TZHfBDxq6NpJURbaQ8sujtBnlTkkVZkBneSJu8HoMe2evAiMzFW4o936UELsPtEaVSrKx//IqPZj82xZC76hedtfwZNn3f1jFLJjZd27scrbv8stF3/aZ3HzYiZ/QdZmswFjQQgX/aGQg7JaGHKQOQp6dY84gUoT94BTminsmfJeb4DvFifoEothgjvSODw8JjjPHe8cEx4ZncTOlcI+/NB88NX8ZdJs01LvNeFpwb/jEMSDynXcCcx50nX6Beyszj5smXqnIozgom5jP/gKjZX5IN9RejZiPnr4rRCDlGwSQUH04p0JynMyjgDgJRwSkptx+84pSdU6HH0quqWxoFCARDSAmMUBy8JGnvjzGv0fF5khTDsu5CqOjg6U5KfTRGOFB1knGh86YBHZ8AcQoZmu1yqIZSLaAPGwIWPjXhMATclHv/A0tVJ+0KhkZJYsx5TmkpToylmfzxTD4/ED1uDTtJj5ICRWkqN1W6iLtIYmG+g84e8NEHDgHn8UOlUfMZT978qz/A4DV/vfXjwpHd29ev29554/rtyAdrbl9Z+O/eA3+9Diag9ps3f/PbX735hp2HWV9YwJZj3HhBAj5nrVCNwcYpxniDbU9tS6Fkqk6tLGsKNJWdVrYktTEljgyNjJ0dOjvWIV6gzgzNjC0UF6kLjMtCi2I9qXf8H4U/ir6TOOg/mPgk1ZcKVrIZIxMYxo40xrJnGzOMQ8pfywqGYupMME6GDvlgXFeAHhkAmUgJZCJFyMRzkaq3ZWjIljxbXiOzKQqclOUU4XxqKbQuJ+wW5dBhxNKJWfYwokz0wEMLdFZAXzNq7k+Xu5Ti5M2tSM5bDcAPjwq6g4FGyWCgMWAw8Ph3BwNp8QK2HXQwMHlmaxgOGA0sDgZmjh38/jigXWudLR0G9DmmhVS20ad/1JhMCRDWPznyrktuenvhFR9fM+OOIebTK698/pkVy18sLOB+fss552zou/+JwolbJ4zsPcE8eWD/m++9+cbviT25EQPiVYwFE3xmjWrwQYOFlWwLezo7lZ3PrmB5yRQlUdJ8pqQBRoQK7UQgS7UbRShWpHzQhyq++0xfLBQf9/vvMxFFv/cbyywhbJ5q3wDbbycj7Ckhop2M8J65/4eSEQeN/LFlZPIrabus+wRBYLy+Xqezw/LLyBxouxntBKaA2fbGx09d0H7Bj0497bRRP/In2PRjS88a+UzNme2zl/W+S9qove8w8yJuo0bm085isrfoU0VIMVQrBW9tCZBLH02THvCgtH65qkSuLJErSuTyEjlVNM6rcmyFv2KkdLZ0RlWuYl7FKul26Yaqp33PD3qF0aRQNBxqHD/o/RAXQ9MQMpqgHJ4pzpRmyjOVmepMbaG4UFooL1QWqgu1rnRXjYfUUVbVDa+aIXcoc9Nza1dUrqhaU3W3/JB6V+19g+5pfFJ+Vn2i5snazvSv0sFa1+mtcIVKV6hyhVq7cN7ZhgiVrlDlCmVkRpU3kZ0h1lSrMhtNpQOsMqQsStK1FZFBdLAs0h6ZHJkV2Rp5K8J7IsnI4sjHETYZuSOCIj/HMAlg9NJRF8tPNjfInEYDvg0RgAYkj17o6fQHW+hojKGbLRAOmVl2aRkqiwcE1i6coQmMT90kxaeWj2CNjQ9RklEYrYpYvnBLE9m9iabqw/aScECEPuM7kiJ7RlJkrwgtUonQoRHy62jJZjR0QX9BXWdOqKrHx9sRz75dD+vJqclh6t0K/Hp7sgdPhC9oS9bvdTu9M1cfpddSXlPfMruppwm1N61pQk1kiKkKhG0vmqpHyu4GzJZEIFdIhF3kIlOO7QvmUlUeSmAeeiOeFE0GExfJT5/CRudxOWlh+8E3lpnzVHwMIPHfEYgMdcZ+8ksnlj6dA/N/5siySW5JTiazlIwAlbjeR8gQc4Y8IXkprcchsSmpBCYfdkWOU5CDfSirZnCikvMPSpuG1/AZDF+hpWJAqhVikBuMFwk//lquV8ZARaWminVyDNbWSDKfYWMgaZQRb4s88b3NXlCnvT6zdu1aUMLCJL+U719BNio+DrImXTMEDWsZ3vq9AmP8j8x4okns9u2em69ZdeWw6rtffWDy6BH1d0699uczzG3q8gWrFgaDDbEbXr4vt+DVa9/6AJ4SX7Rs3hmnVIarm8atnXTmVbXJzFnXXBw+d+a5rZXxMp9c1Tx61cwZj57/AvX1q/q+RvXcAyAEs6NTA2JgZUARZ78slMh8iSyTOfTpFomgpwoLayIQQFWTIQOChpTxyNguM4rHqAAVUPsBA+lM+63ABlKFfYI4RhozW1girBE2CizALtgmYZvQI7wt8HSaoDNf8BhFtECqjmkNiB2bOoIzg/Bbik7i3BFzjiXe8fFsJ1bYgxaCMBz+4vzvJDewyTzipJ8PHmujI829bcRcms3NxuslUz+qQ/ZoMxm5Mlvp811peS0yohPaLrp00A03dO7Y4cvUJh571Dh13uNozgYoXFq4bUPv3RMHRUl+CnP/J2waX8S9u0GUDMAGQi0o5QuSKT1HrYjX35LxwSrRF1ShL6hg02jilgTNwQERVrDE2wmWRFjB6nCIhEJRGmeFaIQV8tIho2LBX4jaxVAxtgr5ncEjZ8QgRMPxEImtNNJ4fSHYE4KhSVFaZ03CqujRKFoS3RTdFu2LstFiorKYAnXSm51kRKNorMlD/VPS29InEiu5xloqGmtnMEOmQxjk1NRGSzSukuiAgTQpMiAl5YwKfD+Asg03rXxqyzpPoMSqH2UNXfNoiLefeYKDKFaNAU007fRjff1a7BfhPZ1ygpo0zTqG6NPSIJGZ9lXv/eiJyYbSpZiXn3PO7aO6Huo667LJw5aju3o7bxt65jlT77gJZU98aMfVUTJmhPtZRhP3ldY8l5Q6gx8udUbBYloRlNhqsb+milSll9ZLhTgRyCIP+WIZcxWddt2QKa1mpsXMu4ZxEFSYWZnYSs3MSjiMbxHJAmED0Yk/ofMpkwyUlChvAbV4Qb1eqaK6BQTxAn/70PpJ7ZAWkMILj1oHaqW0nAXD5LPAmXIO5lCHOF2aD+ejBeIC6UrwY/hjdJV4pfRjeT1cj9YxNws3ibdID4P7pTvlF8Dj8s/BLuFF+XXwK/lD8J78JfiLfAIckwfh25HDICjXgrTcKk8GlixxljfYwmGgtrhP+Sc13DxxIQmgPbRcHlArQ9qCzmekiTXcKnQt4jhVIYWbH2Vw2+D3gcyBDGgoFnu3yoIoVkuyX5JkwCCE/U0/hPhCZOykiiJCkBdkiQGQa1ChWiFaliWtkZDUDWM7LG4NhzgsWVIKWbBC+eJ3BLBHopHefG8+Gj5yMO88yq444czMDnziAJmt4hSN9r9Ki63LYbOP1Ff7miH8WeHSlw5WJ8OZL3cXLmfTvTdcvPi8legmDEEIygvnMF9h/EXRE52ecHFkr1gN5qZBXMHDugX2Xjf4JRGuOwbhCmpx+2Lw+72xDKL+7qGKuCfkUIrZMtnvYRQmHvF4eYX3WV5PSrHUlId6RJ5IQyb6UTR8IBoxyAd1wKkNj3V64tBDwLs8nq315zxbZcbSLA/ypGobWwyyEFTJG9TC3hqlRq3RhqvDtWH6A6ZS6631nRXs8Hb4OgILvAt8CwJX8Su1q8yr/VcHbtRuMTd4N/hu9t8vb1b2GXvNPf4v5M/8/9B6jX/5++IJry+s66dNczAX9CnxGOs5w3ODh/FEijdhhwn2ZC1S+d/q8aiG6fViHEX8Pl+1V/bjLx7VY6rViowdTNlHytIVnhwAxI04aoi/HEfxbtS+w4NbxPJ3o/Mspd1redEs78te5O2Gp+30wAowJiaTn2ibWSm1UZ2sMlPUPhXhDjits8GDWwi1d8VSq7CZw03YSx6ch+FHHnwRNo4djJD/eeNINGwcoRIIE3NH8EiwKJK5AhxGo+4883q9brS1ifvHb9Onjt8W7p83sNee/dd3mDxsvyPjPkzd3/enna1ZuaI1q2PO2BHIms5kxw7C0gAjG+Y7MgNeIOOrscf0W8nEARffvEC8odX+UYPazgqZaU4pXPbKR5mKZOYvXYVLR1c1rsq1FC5+1qitii3ylLG1vQ9csXbVSrToxK+3ntYxlXBwLebgd7EO6PC1Tvj9Z2FYes7bjV4XkRc2eUMtmCz+05KwAE/FhIe/vWKdjYU6VCs1GFmYlcfBsWisOE6abMyE56HzxBnSFONSOAfNwdHPNXCFeI10K7xRvFn6FzyGYhExDevEjJQVnxJ/DwWDVFUZgRY0yJuVyGTvSuyWopGSjERZroYIcwyC5KGL6EIuI/C8fCFWQfrfiBCLqGV0GXVDT5coChy/FwcAALtmOJClua0KbZMOgW7ps/U1+lGdoxMOqshP+gog/wTCrQBOBotBH2AAnaENIh5jRfmq/Xaem47dkTIMLBzM0Joeo5e41G3GIewFHaLVdg5LGfp+53E5jouLu3xHHUyLJDayW08kbYm/vbKLtCJpSrohXNoB8xQgYt+ftntIIzgfh3fFspIYjJ0ikf9YJ5SlToEczCI/fkeD7kRZ+4EXwyBfSWaHQWF4c3mgFj25fHphMjO39xeLr1oI/3oXI/J3/bj3R9dIPwV9fXYdH/eKNw1qADAF0Ab+jhsuZunok/Kj5ahcBmdlECzfjSpAHfEB8sPwz3g/mgel+zU6+x1z9ys7iqM9lu5XNnA/gCBecPgffcbpaV0IHsTuK3rA8gGOPcgAWWAPQhARee4gYvahoUCCD8AhgFiINjJ0esz+32+wbJykU+LKnf/3CgIWnEwxPSctDpwAKbaHYPtP7HNoMvcKPtc8UnL7685QhJjwHvJJnj1ipbGwGq5BH0NmMbMarGaYxWAxRJPhFITwJRoMYtZDFnaj2duxRe5GU3eACPvBMzQEm9h7DCOgN0+rbvI0uxiDzcyfbvzyj+xzMFw4jO/0/wCzasDzAAB4nGNgZGBgYHt8ffOy/u54fpuvDPIcDCBwPdf2IYz+v+hfIJsa6xUgl4OBCSQKALk4Dr4AeJxjYGRgYL3yL5CBgW3V/0X/d7KpMQBFUIAtAKHfBp14nGN6w+DCAARMq4DYEox3gWiWYoZQIL4PxHZAHAbEUlAxXyBOBOJgEB+odidr2P+/rGEM01iPM6QB8TwgexHLY4YVQLn9QDXT2FYxzACKz2GzZEgGys0D0hFA/kIgOwaozgDK5gSq9QLiNhYGhgAg7QbE3kAzhIG0ExC3Mx5n6GA8/n8RkG4GmtkOEgNiFxANdH8rUJ89UL0KkN8MZEsBsSIQa4DMAaljY2AE+fMeABruNagAAAAsACwALAAsAEoAggGkAjADXgR4BZAGpAfCCBgJrAsACy4Mgg2cDk4PFg+MD/gQpBD4ErQTvBSMFToWXhe+GZIaIhrYHAodzB7wIDQhViJqIyokXiVUJmAnNCf4Kcwq0ivuLPQthi/CMIQxeDK4NDo1OjVWNXI1qDXqAAEAAAA9ADgAAwAiAAMAAgAQAC8AWQAABL8D5gACAAF4nI2OPWrDQBBGn2zZIdikTFJuEUglIy0BB5NaZYoguzd4EQIhwVq+heucJMfIAXKOXCD51t4iRQrvMsybmW9+gDnvJISXMOM+8ogrniKPeeQYOZXmM/JEvd+Rp8ySOymT9FqZ21NX4BE3PEQe88pL5FSaj8gTbf2KPFX+hzUdA42sxbGj0i9h3Q3N0LpdVSl4U6XmIMUWr9DVh3YrKOlP3cF7KRwGy4JcfiX7f/a5VkiZsZRZ6QueNa7vhrL3tTN2kZuV+XODosJmy8zmhYSX3LxRxbOXKtwY9p3vYuP8vuk7U2jHRaN+AahXRIMAAAB4nH3Gt05CAQBA0fMeC47SpMhGkcQgqBQHNjrSJCAkMDgwkrDy9zAwe5OTXKH/69wEQhGPYuISklKepGVk5TzLKygqKXtR8epNTd27D58amlravnT19A0MjYxNfJuaW1j6sbK28WtrZ+/g7BKEQSQ6+zsdp8dq7eE+jdYVaCgR9XicjZZ/TBvnGcff9z3XPkKIjZcYUg7fgfGl4ZKQOnROgOKzY4+21gQJLLMZCyQEKU0rEckQpElLLtIiLeoaqk7KtkwaUf+YqlVVjvPEDEQiE1u3sm6JtiyT0l+02x/rHx1N/1iXv7zv+54hi5ZJu+PzPM/7PN973/fee+9McjMZkHbxkzWTRqJKhtRKuuBbHW+jWpKeKOr16q3r0k6yCpi00zEa1Xlph9TodKpmSYoUg9ti/uRuSSOUtAmrwY6Da2AJeMiwFEY+AHsOWOAaWAK3gJcQWF7VwDiYAau8IjVKiqOpgeQOaTuu3U4Y8Ut1ZA2UgYR51mHUOtILhsE0mAFeoeOZcXAOLIHPRMWU6pxX92Hudc5LwhVPvRgTzWNuc+iboln8et71Xz3k+vSzrqzDlT3Z7qb3pFy/Y5frg9GYxf2mmtiNZEgK4SZDmPhpWMp+RfyUEpVclbYRGzDJW8mYUrDYosdmliQPoRKTKDlB1PINiTo1tbHkJlZmayRIVPYP9qlbYZ8Wt9TGZpLPsY/JNbAEJPYxzo/YR+QcW+VrDpsAM2AJ3ARrwMtWcX6I8wP2AfGz90kbSIBhMAOWwBrwsfdhA+w99EaE5XECMPYebIC9i9t6F9bP7iK6y+5ian9y4gdi8yIw2iqBGq0EdQ2VIBiKldgfnfs7saN0PGnsqEWpmXSTfVKzE30S26/e6XpeLbG/FjVDvZrcy24TGzDM5DZGvk000AdGwGngRXQH0R1igVfAVWAD7DLYANDYCngH3CF7gQn6gMxuORimxG46ekpNhtgf2G9IHVb89+y3wr/D3hL+d+zXwr8NH4ZfYW85YZUkq1EnuCYAH4BvQ/0x9stiS1AtJ2vZEtZOhW0DCdALhsE08LIl1uycUIPoZJGsyARKh3wi/E/JazIxT6mmfhAbUONG73gaEcyMNqMzU7/8IzS50S+9iogb/TvfQ8SN/q3ziLjRXzyDiBv9xClE3OiDw4i40XsHEMGU2E9+0bJDjfe+QLWkn01hlaawSlNYpSniYVP8JPc9fG4/dlpbsWJXTGNnq2otUOs6tQ5T6zVqjVHrLLXOU6uLWkepZVBLoVaYWia1Ful+LIVFzZ8/1Dxg1lNrhVpvUqtALZ1aUWq1UEujcbPEmpxn9wmXEa6Y5C8d/NPd+Pr4WRNWtAl7vgnfhCXYm6AsWiZEWrMr3h7mvrnYmnDbezpi43h9lnHhMh7DMvkQePCAlrGNltHJMjrwwybAMLgB1kAZeKFuxsSnhfXDtoEEGAbnwBrwiumsAUbGK1O8JibGJ91WmXgv8LBlnM04m1iT2RhQAkbgGWlaof4w7Q2XwyxOQiFCSLBWri3Rmrkvav71RQ2pSlaxS2yaf7rZKxU/7dzHp5v+0NEX1eQ2+gMS9mDn0QNEp1H4/aQg2k8RRea+nSjsDfiYoxzBZX5H36Uu0C38qjn1vvI39ROlxBD+XVlU/6KVPNRR/4zMG3PqbeWi+nZbSUbmul6icAuakM4r+9U3V4T0PApXHPUsd3Pqt5Ue9QVFFMbcwtECWqZfPawPqs+gv7RyXDUL6HNOTShH1S5X9RS/Zk7diykYbtiKye5UxKCRsOjwa/ESPWnu8l325Xy9vi/7Yr5dviaf6mv0Nfi2ykE5IG+RN8ubZFn2yh6ZyUTeWiqvmgbB49vqDXDn9XDrEXGAcQsjPnxUZuQ5Yn9JyrJsf4pm7RujJHtcs//ZHynRTYcG7cciKWoHsyQ7kLL3G9mSr3zYjhtZ29f3jdwspZfyyNrsuyVKBnIlWuapCw128GBunlBae+HlBu6fuPByPk/qQ2cS9Ylgd+2Br6QfYUYq1nhw1D8UN9qXs/05+2eNeTvGg3JjPmt/v18bys3Tz+lnmfQ8vcddPjcvddPPM4d5XupO5/PZEj0idESj96DDjrkndDJ+nLmOaHLY1V1xdVFcD10Ld9BVVZGo0EWrqoTOQ7luttCSSc+2tAhNnUYKQlOo0/5TsxKFJhoVmpBFVoRmJWRxjd0tJIoCSVgREvo4UYREoY8LyZEHkraK5OKG5KIYSaIPNIqrqVld19SsQmP8v8dYyjBosTM/OpQZi2RGIpkxMGK/dOZkvW0d17TZ0TwvaLakjxwfPcn9sTE7HxlL26ORtDbbOfSI8hAvd0bSs2QoM5CbHTLH0k6n2ZmJHEvniz197fGHxrq4MVZ73yM66+OdtfOxeuKPKMd5uYePFedjxflYPWaPGIuIPd6Xm5VJKn9wyPVFVr0J+3WkoSmfCgVOd4vN29lUf7ZhAf+xvE6qjby9OZKyawAv7U7uTvIS3ile2oK0v1KqP9vZ1LBAX6+UAkjXRlLEmJgsTJL6zPNp96+AA6mJSb7grjUK/+tALWObx9KFCUKydmt/1k4cGszN+nzIjvBbsjvWc9XVmVL5hpvcg2QHT0rShpDnuniuqqoi/O/nP1nxB/lbYLHFIjXDdIIU8pIdzg4wfAoGBnGvQ4O5Bfw/xX8iCnncYIEatLDeR2XahkHcNuH3vM7EZCWqrMVExbtX4pLC+pJsHHyxjI0VmxDdiuU0/g0yhyqjAAA=')format("woff");}.ff2{font-family:ff2;line-height:0.938965;font-style:normal;font-weight:normal;visibility:visible;}
  @font-face{font-family:ff3;src:url('data:application/font-woff;base64,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')format("woff");}.ff3{font-family:ff3;line-height:0.906250;font-style:normal;font-weight:normal;visibility:visible;}
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
  .y2{bottom:2.626300px;}
  .y4{bottom:2.829800px;}
  .y6{bottom:4.443300px;}
  .y3{bottom:5.572500px;}
  .y1e{bottom:54.250000px;}
  .y0{bottom:78.500000px;}
  .y1d{bottom:79.446400px;}
  .y1c{bottom:92.044600px;}
  .y1b{bottom:123.055500px;}
  .y1a{bottom:148.252000px;}
  .y19{bottom:160.607900px;}
  .y18{bottom:172.963800px;}
  .y17{bottom:185.319700px;}
  .y16{bottom:197.675700px;}
  .y15{bottom:210.031600px;}
  .y14{bottom:222.387500px;}
  .y13{bottom:234.743400px;}
  .y12{bottom:247.099400px;}
  .y11{bottom:259.455300px;}
  .y10{bottom:271.811200px;}
  .yf{bottom:284.167200px;}
  .ye{bottom:296.523100px;}
  .yd{bottom:308.879000px;}
  .yc{bottom:321.234900px;}
  .yb{bottom:346.915900px;}
  .ya{bottom:359.514100px;}
  .y9{bottom:380.834100px;}
  .y8{bottom:395.370500px;}
  .y7{bottom:420.566900px;}
  .y5{bottom:437.041500px;}
  .y1{bottom:452.304700px;}
  .h8{height:12.098200px;}
  .ha{height:12.098300px;}
  .h6{height:14.763200px;}
  .h2{height:15.974600px;}
  .hc{height:20.281875px;}
  .h4{height:23.429062px;}
  .h3{height:26.208984px;}
  .h5{height:29.004609px;}
  .h7{height:29.024063px;}
  .hb{height:30.510900px;}
  .h9{height:32.185547px;}
  .h1{height:390.500000px;}
  .h0{height:523.041300px;}
  .w9{width:50.794400px;}
  .w4{width:58.685800px;}
  .w6{width:62.631500px;}
  .w7{width:62.631600px;}
  .w3{width:72.890400px;}
  .wb{width:109.980200px;}
  .w5{width:121.817300px;}
  .w8{width:131.287000px;}
  .we{width:132.076200px;}
  .wf{width:173.111700px;}
  .w2{width:184.948800px;}
  .wd{width:257.550100px;}
  .wc{width:453.257800px;}
  .wa{width:512.443600px;}
  .w1{width:565.000000px;}
  .w0{width:600.238000px;}
  .x2{left:1.802200px;}
  .x9{left:4.418600px;}
  .xd{left:7.843900px;}
  .x13{left:9.988500px;}
  .x14{left:12.146000px;}
  .x7{left:14.852500px;}
  .x0{left:17.500000px;}
  .x6{left:21.034000px;}
  .xe{left:22.372800px;}
  .x17{left:24.871400px;}
  .xf{left:29.080000px;}
  .x1a{left:32.499800px;}
  .x16{left:37.213000px;}
  .x1d{left:38.563500px;}
  .x8{left:48.794900px;}
  .x4{left:51.480100px;}
  .x1b{left:58.615400px;}
  .x10{left:61.172000px;}
  .x1{left:69.544400px;}
  .x18{left:73.596800px;}
  .x1c{left:101.300500px;}
  .x15{left:105.764100px;}
  .x19{left:116.487400px;}
  .x11{left:128.730200px;}
  .x12{left:10.541900px;}
  .xa{left:191.861700px;}
  .xb{left:254.993200px;}
  .xc{left:318.124800px;}
  .x3{left:449.911800px;}
  .x5{left:523.302200px;}
  @media print{
  .v0{vertical-align:0.000000pt;}
  .ls0{letter-spacing:0.000000pt;}
  .ws0{word-spacing:0.000000pt;}
  .fs3{font-size:37.120000pt;}
  .fs1{font-size:42.880000pt;}
  .fs0{font-size:48.000000pt;}
  .fs2{font-size:53.120000pt;}
  .y2{bottom:3.501733pt;}
  .y4{bottom:3.773067pt;}
  .y6{bottom:5.924400pt;}
  .y3{bottom:7.430000pt;}
  .y1e{bottom:72.333333pt;}
  .y0{bottom:104.666667pt;}
  .y1d{bottom:105.928533pt;}
  .y1c{bottom:122.726133pt;}
  .y1b{bottom:164.074000pt;}
  .y1a{bottom:197.669333pt;}
  .y19{bottom:214.143867pt;}
  .y18{bottom:230.618400pt;}
  .y17{bottom:247.092933pt;}
  .y16{bottom:263.567600pt;}
  .y15{bottom:280.042133pt;}
  .y14{bottom:296.516667pt;}
  .y13{bottom:312.991200pt;}
  .y12{bottom:329.465867pt;}
  .y11{bottom:345.940400pt;}
  .y10{bottom:362.414933pt;}
  .yf{bottom:378.889600pt;}
  .ye{bottom:395.364133pt;}
  .yd{bottom:411.838667pt;}
  .yc{bottom:428.313200pt;}
  .yb{bottom:462.554533pt;}
  .ya{bottom:479.352133pt;}
  .y9{bottom:507.778800pt;}
  .y8{bottom:527.160667pt;}
  .y7{bottom:560.755867pt;}
  .y5{bottom:582.722000pt;}
  .y1{bottom:603.072933pt;}
  .h8{height:16.130933pt;}
  .ha{height:16.131067pt;}
  .h6{height:19.684267pt;}
  .h2{height:21.299467pt;}
  .hc{height:27.042500pt;}
  .h4{height:31.238750pt;}
  .h3{height:34.945312pt;}
  .h5{height:38.672812pt;}
  .h7{height:38.698750pt;}
  .hb{height:40.681200pt;}
  .h9{height:42.914062pt;}
  .h1{height:520.666667pt;}
  .h0{height:697.388400pt;}
  .w9{width:67.725867pt;}
  .w4{width:78.247733pt;}
  .w6{width:83.508667pt;}
  .w7{width:83.508800pt;}
  .w3{width:97.187200pt;}
  .wb{width:146.640267pt;}
  .w5{width:162.423067pt;}
  .w8{width:175.049333pt;}
  .we{width:176.101600pt;}
  .wf{width:230.815600pt;}
  .w2{width:246.598400pt;}
  .wd{width:343.400133pt;}
  .wc{width:604.343733pt;}
  .wa{width:683.258133pt;}
  .w1{width:753.333333pt;}
  .w0{width:800.317333pt;}
  .x2{left:2.402933pt;}
  .x9{left:5.891467pt;}
  .xd{left:10.458533pt;}
  .x13{left:13.318000pt;}
  .x14{left:16.194667pt;}
  .x7{left:19.803333pt;}
  .x0{left:23.333333pt;}
  .x6{left:28.045333pt;}
  .xe{left:29.830400pt;}
  .x17{left:33.161867pt;}
  .xf{left:38.773333pt;}
  .x1a{left:43.333067pt;}
  .x16{left:49.617333pt;}
  .x1d{left:51.418000pt;}
  .x8{left:65.059867pt;}
  .x4{left:68.640133pt;}
  .x1b{left:78.153867pt;}
  .x10{left:81.562667pt;}
  .x1{left:92.725867pt;}
  .x18{left:98.129067pt;}
  .x1c{left:135.067333pt;}
  .x15{left:141.018800pt;}
  .x19{left:155.316533pt;}
  .x11{left:171.640267pt;}
  .x12{left:250.055867pt;}
  .xa{left:255.815600pt;}
  .xb{left:339.990933pt;}
  .xc{left:424.166400pt;}
  .x3{left:599.882400pt;}
  .x5{left:697.736267pt;}
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
  <div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABGoAAAMNCAIAAABPgwU9AAAACXBIWXMAABYlAAAWJQFJUiTwAAAgAElEQVR42uzdeXxU5aHw8TOTnSQQCNlAdpBNEGQTBKtIS92rRcXeqtUKWtv39fbV1rb3emuttZuiFdRq+/lYt1IqWHG37iKCArIJsiTsGJYQCAlZSDLn/WPaXMpmWKvm+/0jyZk5c2bynBkyP+aZM5EwDAMAAPinSCRiEGBfYRhG5BMAANoJGiPREAAAsBf/w/457V477lgPctQoAAAANIZ8AgAAkE8AAABHPZ/isyQbvlr81EUAAKCpieiBwxk1R6QBAL7Qz3M8P7Tj2O8gm7wHAADQKNGGVN3zq8WDLwIAAE2QyXuHNWo6CgD4Qj/P8fzQjmO/g2zyHgAAQKOYvGfyHgAA0CgHnLy3c+fOm2++eeLEiU1nLB555JHk5ORrrrnm00dNRwEAX9Rnh+aA2XEceJAPmE8lJSV9+vQpLi5uOsNx3XXXJSUlTZo0ST4BAJ6FGwo7jn0H+YCT9/bqBJP3VBMAADRx0YZI3fNrg4bFvc5t4osAAEATzScAAAA+VWIQBPF3QO35teHshsW9zj0qi/X19dOnT4+F9fHril9tJBKE4T++7rsYBOHuutq+ffue1POko36rgn+drXeQlQEAgCaaT/+uyXvRaHTu3Lm//OUvG3lbMzMzx44de8WVVyz9aGk8n0zeAwAAjms+HX9///vfd+zYcd555912220L5i946eWXDr5+586dr7/++tGjRzdv3jwjI+P//t//e+kll9p5AADA8fTvOfJecnJyaWlpLBZLSkp64skn2rdrd6Db16NHj8mTJ69cufKkk06KRCIVFRUzZ85cu3btsbhVgSPvAQAAB8+n4z95Lysra/bs2fHFli1bPvDAAwkJCQ1Xmpubm5aWdtZZZ7300ktLliwZMWLEbbfdVlBQkJCQEIlE/vrXv+5180zeAwAAjlM+HX91dXW//vWvt23bFl8859xzn3766Q8++GDnzp27du36xS9+0bt37w8//PBnP/vZokWL7rzzznPPPbd9+/YffPBBy5Ytn376absNAAD49+TT8Z+8l5KScu+992ZnZzecfv755xcUFNx3330nnHDCuHHj5s6dm5aW9sADD8yZM+fhhx8+9dRT//KXv7Rs2XLSpEnV1dV73TyT9wAAgOOUT8d/8l55eXlSUlI0Gt3z9MTExPvvv3/79u0JCQlXX331vHnzHn/88fHjx9fV1f30pz9duXLlNddcM2bMmAsuuGCvm2fyHgAAcBz8G4689/LLL2dnZ9fW1sZisT1Pz8vLmzJlygcffPDMM89kZ2evX78+MTHxrLPO6tat24gRI0aPHn3jjTf279//mWeeefmVl7eVlma3amX/AQAAx83xnrx32223XXfddXV1dbW1tbt27QqCoKampuHtTMOHD1+9enVFRcXNN988cODAX//6148++uiKFSvWr1+fl5d35ZVXxjdyxpfOOGvkyO3bt5u8BwAAHNd8Om6T9+69997bb789CIJWrVqdcsopWVlZJSUlAwYMuOWWWxqu8a677po6dWpubm4QBGVlZeecc86ll1561VVXvfLKKx988EHDC1aLFi06++yzd+7cGZi8BwAAHLd8Oj4efvjhm2+++R/XGo2uXLmyvLy8VatWQRAUFRUtWbIkflZKSkrr1q3Ly8vDMLz66qvbtWs3bty4IAgmT548fvz4ESNGrF69Op4xH3zwwciRI8vKyuxFAADgi5NPr7322g033BB/7SgxMTE9Pb22tjY9PT0ajd52221BEEydOnXnzp3Tp08PgqB58+ZVVVW/+MUv5s2b99hjj0Uikd27dz/yyCNBELz33nvDhg378MMP45udN2/eb37zG3sRAAA4Tvl0rN/7FIvFHnjggfh8vCAIfve73y1btiwtLS1+5L2LL774hBNOePrpp+++++7nnnsufqnc3NwwFt5xxx3xl6eeeuqp4uLi+MU3b9583nnn9e7VOwiCm266KS8v75VXXjnyG+m9TwAAwKfn07F+79NDDz00ZsyYP/7xj7fccsv3vve9wsLCrVu3vvzyy/GPzY1Go9/85jcXL178m9/8Zt68eQ2X+sEPfjBq1KgwDMMwnDBhwp63qqa6+u677x41atR//dd/5ebm/v73v6+pqQm89wkAADjW+XRMVVRUvPHGGwkJCTNmzPjb3/42ePDge+65Z9CgQeeee27Lli3j64wfPz4hISErK+ujjz4qLy+vqqoKgiA1LTU1JbWsrOzNN9+cP3/+v0RdEDz+xON9+/a94447FixYcNFFF73wwgv2JQDA0RLh88aOOz6DfMwn7z3//PPr1q3Lysr69re/PWbMmPvuuy8Igg0bNuTk5CQlJcVX69ix4+WXXz5x4sT6+vrJkyffdddd8cu2bNWypKTkT3/6096P5yB48sknR48e/Yc//KFFixann3761KlTA5P3AACAYykxOMaT9+bNm/ed73ynrq7uhhtuGDdu3J133tmuXbsWLVpUVlZWV1dnZGTEV3v44YfDMExLS7vxxhv79u176623xjfVpUuXZs2a7XWj41fz1ltvnX/++aeffvqyZctycnKqq6tTU1MDk/cAAI6Ypz2fO/H/6LfjjvUgH/PJe4WFhQkJCWlpaZmZmQsXLoyfGIvFMjMz9+yi1NTUtLS0M888s6amZs6cOWvWrGk46+677x4yZMi+W548efLFF1/8xz/+MRKJhGE4Z84cexQAADh2ju3kvZqamqKiovr6+rZt23bs2HHWrFnxFeIf6xQ/dMSel/3yl7+clpbWtm3bp556Kl5QkUgkPT196tSp2a2y//dWBUEQBGvWrOncuXN5efn06dO7dOmyZMkSk/cAAIBjm0/HbvJeSUnJ8uXLX3311YkTJ/bu3Xvt2rXxFfLz87dt25aZmbnXZUeNGjVlypSxY8dOmTIlPn8vfnrbtm3vvfeehnppuInFxcU1NTXXX399fn7+1q1bHXkPAAA4tvl07GzatOmWW275/ve/P2rUqNzc3HXr1sVPr6ysHDBgwO7du/dav3fv3uedd97ZZ5/94YcfTp48ecuWLQ1n/cc3v3nFFVfstf6aNWsSEhJWrly5e/fuuro6uxMAADi2+XSMJu8FQZCQkPD+++//4Q9/mDVrVl1dXUpKSvz0jRs3Tpgwoby8fL+XPe2001JTU0866aQ33nhjz9tz7z33tm/XLvjn5L0gCFJTU4uKim699db33nuvc+fOJu8BAADHNp+O0eS9IAgKCgratm3705/+dMSIEZs2bSooKIif3qFDh0GDBsU/92nfy6akpPzlL395+eWXCwsL97w9WS2zpj39dEZGRsNJeXl53bp1mzRp0pe+9KWamhqT9wAAgGObT8dOTk5ORUXFI4880qFDh48++qhXr17x0zds2FBRUXGQF3MuuOCC/Pz8a665Zq/TBwwYMOHuCdF/HjAwKytry5Yt+fn5VVVV+x7fHAAA4Cjn07E78l40Go0ftbyurq5r167Dhw+Pr1BdXb1kyZIdO3Yc/IratGmz75avHXft17/+9SAIevXqtWDBgquvvrp9+/YrVqzo27evyXsAAMCxc8w/Nrdr164ZGRlz586trKzs0KFDNBoNguC88847+eSTW7duXVRU1LJly127dhUXF3fs2DESiaxfv75Hjx7Lli3Lz8+PRqNlZWWZmZl5eXkff/xx586dt27dWl5e/rPbf/bEk09ceOGF06dPv/32299+++3KysrevXubvAcAABzbfDqmRo8e/fjjjw8ZMmTIkCGLFi0677zz5s+fn5iYOG/evMWLFy9cuLB58+b9+vX77W9/O3jw4NLS0kWLFk2aNGnSpEndunVbsmRJXl5eLBa76aabnnnmmVgstnr16vr6+vjHQ/Xu3XvmzJnNmjWrq6srKChISEiwOwEAgGMn0vC6SiQSafgaBEFJSUmfPn02bdoUX9zr3ENavOiii37wgx/cdNNNF1xwQc+ePW+88ca1a9fW1NTs3r07Go0mJSXV1tbGYrFoNBqLxYIgSElJCcMwGo2Wl5cnJycnJSWFYVhdXZ2WlhaGYW1t7e7du++4446VK1fedddd69evf+SRR6699tqRI0ceyY2MRCLjx49PTk6eOHFiY1Z21wEAvpjPDiORwKQbO44DDPIxn7wXBMG111779ttv33XXXQ8++ODy5ctvvPHGhkPwBUGQlJT0ne98p7y8fPLkydXV1fu9oW3btq2qqkpPT9+xY0d5eXnXrl2/9a1vxWKxr33ta1dccUWbNm3OPPPM4FjO1jN5DwAAiB6H6zj33HPXr1//6quv3nPPPW3atCkuLr766qs3b968efPmU045ZdasWT/+8Y/vvPPOV199deDAgfHTy8vL4z+UlpY++OCDc+fO/eijj95///2ZM2eef/75P/7xj3/4wx+eddZZJ5544vbt27/3ve95OQgAADjWjsfkvUgksnHjxksvvfSBBx6orq5et27dggUL8vLyxowZEz8+RHy1oqKimpqalJSUHTt2DBgwYPXq1StXrtyyZcs3v/nNhpsbi8XmzZs3YcKEt956q3379iNHjjzxxBOvvvrqf/wyJu8BABzhs0NzwOw4DjzIx2PyXhiGbdq0+eUvfxk/RF7Xrl1feOGFk08++ZJLLomfu2XLltLS0i5duiQlJTVcdadOnTp16lRfX19YWJidnZ2VlVVbWzt16tQ777xz6tSpvXr1+vOf/7xq1ao77rhjr1tr8h4AAHAsRI/bNY0YMaJnz55bt259/fXXP/7447S0tKlTpz7++OPV1dWtW7fu0aPHnu3UICEhoWvXrllZWYsXL77wwgu3bdt20003RaPR3r17jxs37s9//rMD7gEAAMdHYvCvM9Ma5qfFHfZEuP0ujho1qrKy8tJLL/35z39+xhlnvP766zk5OWecccbVV1992WWXpaen19fXJycnR6PRSCRSXV0diUQSEhJmzpw5adKkTz755L333hs2bFh1dXV5efmUKVMmT56ckJBw5Ldqz/l4e35O7kFWBgAAmmg+HYfJew1fL7jggjlz5owbN66ysjI3N/f111//xje+kZSUdP/992/btq1FixbRaDQlJSUSidTX1y9ZsiQ9Pb2ioiI9Pf2JJ56YNGnSz372s9tvv33FihV//vOfG940dRxm65m8BwAAJB7/q+zTp8/MmTOfeOKJl156adCgQY8++uiECROeeeaZSy65pOEDcF955ZWcnJxvfOMb3bt3r6qq2rlz5zvvvJOfn3/bbbddddVVbdu2tecAAIAvfj4FQZCQkHDVVVddccUVzz//fPfu3R9//PGPPvpo1KhR7du3f+uttwYMGBAEQfv27YuLi19//fUlS5Z87WtfC4LgW9/6VuvWre0zAADg35ZPx+29T3stRqPRCy644MILL6ytrZ0zZ87MmTOnT59eVVU1e/bs+Huf8vLyhg4d+qMf/SgnJ+fY3QzvfQIAABqbT8fzvU/7XUxMTBw6dOjQoUMPdCuP/7ubvPcJAADYS9QQAAAANDaf9py31jB7LW7PyWwW9xocAACgyeXTv33y3uduEQAAaKL5dNgqKyvnz5+/bdu2devW1dfXh2FYW1tbU1NTW1tbX1+/e/fu3bt319XV1dfX19TUBEEQPzG+Ql1dXbxG6uvr419ra2sbtrxp06YgCHbv3h2LxeIXqa+vj8ViW7ZsWb16dfy6GrYcXy2+nfhGYrFY/GttbW0YhrFYrK6urq6uzv4GAAAO2xEdeS89PX3RokU9e/asqqq66aabbr/99oULFy5evHj48OFr1qzZuXNndXX1iSee2K5duyeffLJ9+/atWrXq3LnzH//4xxtvvPGRRx455ZRThgwZ8uabb44YMeLll1/u2bPnxo0bL7300jAMf/WrX91xxx333XffTTfd9Pe//z07O3vu3LmtW7fu3bt3YWFhEASPPvroGWec0apVq5KSktra2g4dOjz33HNjx4597rnnvvOd7zz22GPf+ta3du/efd999w0YMCAjI2PWrFlDhw4dMmSII+8BAACH50gn70Uikfr6+rS0tCuvvPLee+/Nzc3t2LFj3759t23bNnDgwNzc3Egk0q5du7Vr17Zt27Zdu3YLFy5s0aJFfn5++/btBw4cuGjRopYtW7711lstWrTo1atXTU1NGIaFhYVjxox57bXX2rZtm5KS0rt372HDhnXs2DEajZ588smtW7fevn37iBEjFixYsGrVqt69ew8ePHj58uV1dXWlpaU5OTkffvhhZWVlLBZLTU3t0qXLl770paKiovT09IyMjMDkPQAA4HAd6cfm9u7de+3atV26dGnWrNmPfvSjwsLCzMzMWCw2dOjQHj16VFZWNmvWrLCw8JprrqmoqEhKSurfv39WVtb27dvbt2+/devWTp06ZWdnL1y4MC0tbdOmTYMHDw6CYOvWrYMGDXrjjTdGjBixYsWKvLy8ioqK3NzcXr16LV68uHnz5nl5eW3atGnTpk23bt0WL15cV1c3YMCA7t27p6amtmnTpq6ubvTo0Rs2bMjLy8vNzV2wYMHo0aMXL14cn0AIAMCncsQsO479j/CeryPtOT+tpKSkT58+mzZtasxnzjbsrYOsvO+u3e+LOUd9glzjPzZ3/PjxycnJEydODBr3GbsAAF/U598m3dhx7HeQj8LH5hYXF0+ZMqVHjx7l5eXLly+/7rrr7r///pSUlO9+97sJCQn333//rl27brjhhqKiogceeODGG2/s1KnTxIkTMzIyrrvuurq6uokTJyYlJV1xxRXTpk0rLy//7ne/26xZs2nTpiUkJIwdOzYIgtLS0smTJ3/3u98NgmDDhg333Xdf165d/+M//qOiouLee+/Nz8//+te//thjj6Wmpl577bXRaPTRRx/t3Lnz2WefHQTBmjVrZs2adfnllweOvAcAAByZI528t3v37iuvvHLKlCmtWrUKgmDevHk5OTn5+fm1tbXNmzcPgiAtLa2qqiovLy8vL+8HP/jBoEGDgiBo1qxZx44d4ysEQZCZmdmuXbsOHTqsX78+vp2hQ4empKTEz33nnXd+97vfjRs3Ljk5+YQTTigrK2vXrl16enp6enp5efmQIUNOOOGEzMzM1NTU+AZ79erVv3//hstOmDBh7NixXi8CAACO0JF+bO7MmTO7du2anZ0dXxwwYEAQBMnJyQffVNxe5yYkJOz39Lq6uuHDh7/11lv73WY0Gm14pTL+QzT6j6Oxx2Kx9PT0goKChQsXBj42FwAAODJHOnmvuro6IyNj38suX778tddei/+Qk5Oz72UXL17csmXLIAhWrVrVqlWrvc5tMHv27F27dg0dOnTatGlf+cpX4ucuWLAgXmjr16/fd8vxD4AKgmD69OmRSGT48OHTpk3r16+fyXsAAMCRiB7h5YcMGfL+++83fCLtunXrSktLgyDo3r37WWedddZZZ3Xv3n2/F+zTp098hc6dO8dPadGiRXFxccN2MjMzgyB46aWXrrrqqnHjxi1ZsmT37t3xc/v16xe/7AknnBA/JScnp6KiIv7z9u3bMzMzwzBcuHDhxRdffMstt7z66qvKBwAAOAr5dCST91q1avXDH/5w/PjxK1eu/PDDD6+//vqKiooXX3xx1qxZ27dvLy8vnz179rx58zZu3Pjmm28uX778nXfe2bRp06xZs1566aUdO3Zs2bJl3rx5s2fPLikpGTFixJo1a5566qnnn39+06ZNzZs3f+yxxxYtWlRWVlZSUpKYmPjf//3fS5cu/fjjj1977bXy8vINGzYsXrz473//e0VFxUUXXTRz5sxnn3322WefTUpKSkhIuPvuu4uLiysrKzdv3lxbW/vrX/86FosFJu8BAACHKxKG4X5fmSkpKenbt++QIUOuueaac889t+ENRftVW1tbWFiYkZHRpk2bIAjiL0bF59fFXzJKTEysr68PwzAajUaj0fgKSUlJ8cvGf45Go7FYbM2aNYmJie3bt49fNgzD5OTkMAzjq8XXiW88Fos1XFH803sLCwvjn8kbBEH8U572XK3hWBQH8u1vfzstLW3SpEmfPmo6CgD4oj47dPxrO44DD/LB8mnAgAEdOnR49913O3TocMkll1x22WXxI0N88cyePfu3v/3t9OnTr7/+evkEAHgW7lm4Hcd+B/lgk/cSEhJmzJjx/PPPh2F41113DRo0qFu3br/61a+2bNmy34o4KvPijtti3Lx58y655JJhw4b97W9/i8ViJu8BAAAHEg0+7ch755xzzscff/ynP/2pf//+RUVFP/nJT9q1a3f66afffvvtM2fOjM+Ra1h5zx8+y4uLFy/++c9/PmDAgEGDBk2bNu1QfwUAAKAJOtjk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"/>
  <div class="c x1 y1 w2 h2">
  <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Universidad Autónoma de Chihuahua</div>
</div>
<div class="c x3 y1 w3 h2">
  <div class="t m0 x4 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0">Folio:</div></div>
<div class="c x5 y1 w4 h2">
  <div class="t m0 x6 h7 y4 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $Folio; ?></div>
</div>
<div class="c x1 y5 w5 h6">
  <div class="t m0 x2 h3 y6 ff1 fs0 fc0 sc0 ls0 ws0">Facultad de Ingeniería</div>
</div>
<div class="c x3 y5 w3 h6">
  <div class="t m0 x7 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0">Num. COSORE</div>
</div>
<div class="c x5 y5 w4 h6">
  <div class="t m0 x6 h7 y4 ff2 fs2 fc0 sc0 ls0 ws0"></div>
</div>
<div class="c x1 y7 w2 h2">
  <div class="t m0 x2 h3 y3 ff1 fs0 fc0 sc0 ls0 ws0">Requisición de Materiales y Equipos</div>
</div>
<div class="c x3 y7 w3 h2">
  <div class="t m0 x8 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0">Fecha</div>
</div>
<div class="c x5 y7 w4 h2">
  <div class="t m0 x9 h7 y4 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $Dia.'/'.$Mes.'/'.$Ano; ?></div>
</div>
<div class="c xa y8 w6 h8">
  <div class="t m0 x6 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Fondo</div>
</div>
<div class="c xb y8 w7 h8">
  <div class="t m0 x0 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Función</div>
</div>
<div class="c xc y8 w8 h8">
  <div class="t m0 x8 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Programa</div>
</div>
<div class="c x3 y8 w3 h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">U. Presupuestal</div>
</div>
<div class="c x5 y8 w4 h8">
  <div class="t m0 x0 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Cuenta</div>
</div>
<div class="c xa y9 w6 h6">
  <div class="t m0 xe h4 y3 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"  ><?php echo $Fondo; ?></div>
</div>
<div class="c xb y9 w7 h6">
  <div class="t m0 xf h4 y3 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Funcion; ?></div>
</div>
<div class="c xc y9 w8 h6">
  <div class="t m0 x10 h4 y3 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Programa; ?></div>
</div>
<div class="c x3 y9 w3 h6">
  <div class="t m0 xf h4 y3 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $UPresupuestal; ?></div>
</div>
<div class="c x5 y9 w4 h6">
  <div class="t m0 xf h4 y3 ff2 fs1
  fc0 sc0 ls0 ws0"><?php echo $Cuenta; ?></div>
</div>
<div class="c x0 ya w9 h8">
  <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Solicitante: </div>
</div>
<div class="c x1 ya wa h8">
  <div class="t m0 x12 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Centro; ?></div>
</div>
<div class="c x0 yb wb h8">
  <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Motivos de la requisición</div>
</div>
<div class="c x11 yb wc h8">
  <div class="t m0 x12 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Motivos;?></div>
</div>
<div class="c x0 yc w9 h8">
  <div class="t m0 x13 h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Sub-Cta</div>
</div>
<div class="c x1 yc w4 h8">
  <div class="t m0 x14 h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Cantidad</div>
</div>
<div class="c x11 yc w6 h8">
  <div class="t m0 x0 h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Unidad</div>
</div>
<div class="c xa yc wd h8">
  <div class="t m0 x15 h4 y2 ff1 fs1 fc0 sc0 ls0 ws0">Descripción</div>
</div>
<div class="c x3 yc we h8">
  <div class="t m0 x16 h4 y2 ff1 fs1 fc0 sc0 ls0ws0">Observaciones</div>
</div>
<div class="c x0 yd w9 h8">
  <div class="t m0 xe h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta01; ?></div>
</div>
<div class="c x1 yd w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0"style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad01; ?></div>
</div>
<div class="c x11 yd w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0"style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad01; ?></div>
</div>
<div class="c xa yd wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0"style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion01; ?></div>
</div>
<div class="c x3 yd we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0"style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observaciones01; ?></div>
</div>
<div class="c x0 ye w9 h8">
  <div class="t m0 xe h4 y2 ff2 fs1 fc0 sc0 ls0 ws0"style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta02; ?></div>
</div>
<div class="c x1 ye w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad02; ?></div>
</div>
<div class="c x11 ye w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad02; ?></div>
</div>
<div class="c xa ye wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion02; ?></div>
</div>
<div class="c x3 ye we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observaciones02; ?></div>
</div>
<div class="c x0 yf w9 h8">
  <div class="t m0 xe h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta03; ?></div>
</div>
<div class="c x1 yf w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad03; ?></div>
</div>
<div class="c x11 yf w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad03; ?></div>
</div>
<div class="c xa yf wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion03; ?></div>
</div>
<div class="c x3 yf we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observaciones03; ?></div>
</div>
<div class="c x0 y10 w9 h8">
  <div class="t m0 xe h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta04; ?></div>
</div>
<div class="c x1 y10 w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad04; ?></div>
</div>
<div class="c x11 y10 w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad04; ?></div>
</div>
<div class="c xa y10 wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion04; ?></div>
</div>
<div class="c x3 y10 we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observaciones04; ?></div>
</div>
<div class="c x0 y11 w9 h8">
  <div class="t m0 xe h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta05; ?></div>
</div>
<div class="c x1 y11 w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad05; ?></div>
</div>
<div class="c x11 y11 w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad05; ?></div>
</div>
<div class="c xa y11 wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion05; ?></div>
</div>
<div class="c x3 y11 we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observaciones05; ?></div>
</div>
<div class="c x0 y12 w9 h8">
  <div class="t m0 xe h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta06; ?></div>
</div>
<div class="c x1 y12 w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad06; ?></div>
</div>
<div class="c x11 y12 w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad06; ?></div>
</div>
<div class="c xa y12 wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion06; ?></div>
</div>
<div class="c x3 y12 we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observaciones06; ?></div>
</div>
<div class="c x0 y13 w9 h8">
  <div class="t m0 xe h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta07; ?></div>
</div>
<div class="c x1 y13 w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;"><?php echo $Cantidad07; ?></div>
</div>
<div class="c x11 y13 w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad07; ?></div>
</div>
<div class="c xa y13 wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion07; ?></div>
</div>
<div class="c x3 y13 we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observaciones07; ?></div>
</div>
<div class="c x0 y14 w9 h8">
  <div class="t m0 xe h4 y2 ff2 fs1 fc0
  sc0 ls0 ws0"><?php echo $SubCuenta08; ?></div>
</div>
<div class="c x1 y14 w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad08; ?></div>
</div>
<div class="c x11 y14 w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad08; ?></div>
</div>
<div class="c xa y14 wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0"  style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion08; ?></div>
</div>
<div class="c x3 y14 we h8">
  <div class="t m0 xd h4 y2 ff2
  fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observaciones08; ?></div>
</div>
<div class="c x0 y15 w9 h8">
  <div class="t m0 xe h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta09; ?></div>
</div>
<div class="c x1 y15 w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad09; ?></div>
</div>
<div class="c x11 y15 w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad09; ?></div>
</div>
<div class="c xa y15 wd h8">
  <div class="t m0 x9
  h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion09;?></div>
</div>
<div class="c x3 y15 we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observaciones09; ?></div>
</div>
<div class="c x0 y16 w9 h8">
  <div class="t m0 x6 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta10; ?></div>
</div>
<div class="c x1 y16 w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad10; ?></div>
</div>
<div class="c x11 y16 w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad10; ?></div>
</div>
<div class="c xa y16 wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion10; ?></div>
</div>
<div class="c x3 y16 we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observacione10; ?></div>
</div>
<div class="c x0 y17 w9 h8">
  <div class="t m0 x6 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta11; ?></div>
</div>
<div class="c x1 y17 w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0 "style="font-family: Arial, Helvetica, sans-serif; "><?php echo $Cantidad11; ?></div>
</div>
<div class="c x11 y17 w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad11; ?></div>
</div>
<div class="c xa y17 wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion11; ?></div>
</div>
<div class="c x3 y17 we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observacione11;?></div>
</div>
<div class="c x0 y18 w9 h8">
  <div class="t m0 x6 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta12; ?></div>
</div>
<div class="c x1 y18 w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad12; ?></div>
</div>
<div class="c x11 y18 w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad12; ?></div></div>
<div class="c xa y18 wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo$Descripcion12; ?> </div>
</div>
<div class="c x3 y18 we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observacione12; ?></div>
</div>
<div class="c x0 y19 w9 h8">
  <div class="t m0 x6 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta13; ?></div>
</div>
<div class="c x1 y19 w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad13; ?></div>
</div>
<div class="c x11 y19 w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad13; ?></div>
</div>
<div class="c xa y19 wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion13; ?></div>
</div>
<div class="c x3 y19 we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observacione13; ?></div>
</div>
<div class="c x0 y1a w9 h8">
  <div class="t m0 x6 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $SubCuenta14; ?></div>
</div>
<div class="c x1 y1a w4 h8">
  <div class="t m0 xf h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Cantidad14; ?></div>
</div>
<div class="c x11 y1a w6 h8">
  <div class="t m0 x14 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Unidad14; ?></div>
</div>
<div class="c xa y1a wd h8">
  <div class="t m0 x9 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Descripcion14; ?></div>
</div>
<div class="c x3 y1a we h8">
  <div class="t m0 xd h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Observacione14; ?></div>
</div>
<div class="c x0 y1b
  wf ha">
  <div class="t m0 x18 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Solicitó</div>
</div>
<div class="c xa y1b wd ha">
  <div class="t m0 x19 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Revisó</div>
</div>
<div class="c x3 y1b we ha">
  <div class="t m0 x4 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Autorizó</div>
</div>
<div class="c x0 y1c wf hb">
  <div class="t m0 x1a h4 y2 ff2 fs1 fc0 sc0 ls0 ws0" style="font-family: Arial, Helvetica, sans-serif;" ><?php echo $Nombre ?></div>
</div>
<div class="c xa y1c wd hb">
  <div class="t m0 x1b h4 y2 ff2 fs1

  fc0 sc0 ls0 ws0"><?php echo $Reviso; ?></div>
</div>
<div class="c x3 y1c we hb">
  <div class="t m0 x7 h4 y2 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $Autorizo; ?></div>
</div>
<div class="c x0 y1d wf h8">
  <div class="t m0 x1b h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Nombre y firma</div>
</div>
<div class="c xa y1d wd h8">
  <div class="t m0 x1c h4 y2 ff2 fs1 fc0 sc0 ls0 ws0">Nombre y firma</div>
</div>
<div class="c x3 y1d we h8">
  <div class="t m0 x1d h4
  y2 ff2 fs1 fc0 sc0 ls0 ws0">Nombre y firma</div>
</div>
<div class="c x1 y1e w5 h8">
  <div class="t m0 x2 hc y2 ff2 fs3 fc0 sc0 ls0 ws0">Fecha de Rev:07/02/2014</div>
</div>
<div class="c xb y1e w7 h8">
  <div class="t m0 x2 hc y2 ff2 fs3 fc0 sc0 ls0 ws0">No. de Revisión: 2</div>
</div>
<div class="c x5 y1e w4 h8">
  <div class="t m0 x2 hc y2 ff2 fs3 fc0 sc0 ls0 ws0">FOR 7.4 ADQ 01</div>
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
