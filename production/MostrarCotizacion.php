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

<!DOCTYPE html>
<html lang="es">
  <head>
      <?php echo $Header; ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">

          <?php echo $LeftBar ?>

        </div>

        <!-- top navigation -->
        <?php echo $TopNavigation; ?>
        <!-- /top navigation -->

        <!-- page content -->


        <script>
function valida(e){
  tecla = (document.all) ? e.keyCode : e.which;

  //Tecla de retroceso para borrar, siempre la permite
  if (tecla==8){
      return true;
  }

  // Patron de entrada, en este caso solo acepta numeros
  patron =/[0-9]/;
  tecla_final = String.fromCharCode(tecla);
  return patron.test(tecla_final);
}


function mayus(e) {
  e.value = e.value.toUpperCase();



  }


  function validarLeras(e) { // 1
  tecla = (document.all) ? e.keyCode : e.which; // 2
  if (tecla==8) return true; // 3
  patron =/[A-Za-z\s]/; // 4
  te = String.fromCharCode(tecla); // 5
  return patron.test(te); // 6
}



function valida(e){
  tecla = (document.all) ? e.keyCode : e.which;

  //Tecla de retroceso para borrar, siempre la permite
  if (tecla==8){
      return true;
  }

  // Patron de entrada, en este caso solo acepta numeros
  patron =/[0-9]/;
  tecla_final = String.fromCharCode(tecla);
  return patron.test(tecla_final);
}


function validarLetras(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
	  if (tecla==9) return true; // 3
	  if (tecla==11) return true; // 3
   	if (tecla==47) return true; // 3
    if (tecla==37) return true; // 3
    if (tecla==35) return true; // 3
    if (tecla==61) return true; // 3
    if (tecla==42) return true; // 3
    if (tecla==43) return true; // 3
    if (tecla==36) return true; // 3
    patron = /[A-Za-z0-9-.,\s\t]/; // 4

    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}


function ValidarForm()
{




var ValorIdUnidad =   $('#DepSolicitante').val();
var ValorFolio =   $('#Folio').val();
var ValorMotivos =   $('#Motivos').val();
var ValorSolicitante =   $('#Solicitante').val();

if (ValorIdUnidad == 0)

{
alert ('Favor de seleccionar un departamento solicitante');
}

else if (ValorFolio == "")
{
   alert ('Favor de proporcionar un folio');

}

else if (ValorMotivos == "")
{
  alert ('Favor de proporcionar motivos de requisición');

}

else if (ValorSolicitante == "")

{
alert ('Favor de proporcionar soliciante');
}

else {

 document.demoform2.submit() ;

}
//
// alert (''+ValorIdUnidad);


}


</script>


        <div class="right_col" role="main">
          <div class="row">

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

              </div>
            </div>

          </div>




          <div class="row">






            <!-- Walforf Ezample -->

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mostrar Cotización <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="#" method="post">


<?php $IdRequi=$_GET['IdRequi']; ?>
<?php $Folio=$_GET['Folio']; ?>









                    <?php

                        if (isset($_GET['Mensaje']))
                        {
                            $Folio=$_GET['Folio'];




                              switch ($_GET['Mensaje']) {
                                case 'Correcto':

                                echo

                                '

                                <div class="alert alert-info alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p style="font-size:20px;">Requi No.'.$Folio.' Agregada Exitosamente.</p>

                                </div>



                                ';
                                  # code...
                                  break;


                                  case 'Modificada-Correcto':

                                  echo

                                  '

                                  <div class="alert alert-success alert-dismissable">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  <p style="font-size:20px;">Requi No.'.$Folio.' Modificada Correctamente</p>

                                  </div>



                                  ';
                                    # code...
                                    break;



                                  case 'Agregada-Correcto':

                                  echo

                                  '

                                  <div class="alert alert-info alert-dismissable">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  <p style="font-size:20px;">Requi No.'.$Folio.' Agregada Correctamente</p>

                                  </div>



                                  ';
                                    # code...
                                    break;

                                default:
                                  # code...
                                  break;
                              }





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





                 $sql = 'SELECT *, b.Descripcion AS Departamento , a.IdUnidad AS DescripcionCompleta FROM Requi a INNER JOIN CatcUnidades b on a.IdUnidad = b.IdUnidad INNER JOIN MovcRequis c on a.Folio = c.Folio WHERE a.IdRequi = '.$IdRequi.' ';
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

                    $AUX = stripslashes($Descripcion04);


                    $Descripcion04 = $AUX;


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

                $Garantia01 = $row['Garantia01'];
                  $Garantia02 = $row['Garantia02'];
                    $Garantia03 = $row['Garantia03'];








                     }


                  ?>


                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuadro Comparativo</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                  <a href=" <?php echo 'reporte.php?IdRequi='.$IdRequi.'&Folio='.$Folio.'';?>">    <span class="btn btn-success">Generar | <i class="fa fa-table"></i> </span> </a>


                    </div>
                  </div>


                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Formato Adquisiciones</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">

                        <a href="<?php echo 'reporteAdqui.php?IdRequi='.$IdRequi.'&Folio='.$Folio.'';?>"><span class="btn btn-primary">Generar | <i class="fa fa-file-text"></i> </span></a>

                        <a href="<?php echo 'ReporteAdquiCarta.php?IdRequi='.$IdRequi.'&Folio='.$Folio.'';?>"><span class="btn btn-primary">Generar Carta | <i class="fa fa-file-text"></i> </span></a>

                          <a href="<?php echo 'ReporteAdquiCarta36.php?IdRequi='.$IdRequi.'&Folio='.$Folio.'';?>"><span class="btn btn-success">Generar Carta 36 | <i class="fa fa-file-text"></i> </span></a>

                          <a href="<?php echo 'ReporteAdquiCarta362.php?IdRequi='.$IdRequi.'&Folio='.$Folio.'';?>"><span class="btn btn-primary">Carta New | <i class="fa fa-file-text"></i> </span></a>

                              <a href="<?php echo 'MarcarRequi.php?IdRequi='.$IdRequi.'&Folio='.$Folio.'';?>"><span class="btn btn-danger">Marcar Requi. | <i class="fa fa-file-text"></i> </span></a>




                  </div>

                  <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                    <a href="<?php echo 'ReporteAdquiCarta36MA.php?IdRequi='.$IdRequi.'&Folio='.$Folio.'';?>"><span class="btn btn-primary">Generar Carta 36 Maximo| <i class="fa fa-file-text"></i> </span></a>


                  </div> -->
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Modificar Cotizacion</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">

                <a href=" <?php echo 'ModificarCotizacion.php?IdRequi='.$IdRequi.'&Folio='.$Folio.'';?>">    <span class="btn btn-warning">Modificar | <i class="fa fa-pencil"></i> </span> </a>


                  </div>
                </div>





                                          <div class="ln_solid"></div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Facultad</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Facultad" id="Facultad" readonly="readonly" >
                            <option value="4400">4400 FACULTAD DE INGENIERIA</option>

                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento Solicitante</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="DepSolicitante" id="DepSolicitante"  readonly="readonly">


                        <?php echo '<option value="'.$IdUnidad.'">'.$Departamento.' - SELECCIONADO</option>'; ?>

                        <option value="4401 - SECRETARÍA DIRECCIÓN">4401 - SECRETARÍA DIRECCIÓN</option>
                        <option value="4402 - SECRETARÍA PLANEACIÓN">4402 - SECRETARÍA PLANEACIÓN</option>
                        <option value="4403 - SECRETARÍA ACADEMICA">4403 - SECRETARÍA ACADEMICA</option>
                        <option value="4404 - SECRETARÍA EXTENSION">4404 - SECRETARÍA EXTENSION</option>
                        <option value="4405 - SECRETARÍA DE INVESTIGACIÓN Y POSGRADO">4405 - SECRETARÍA DE INVESTIGACIÓN Y POSGRADO</option>
                        <option value="4406 - SECRETARÍA ADMINISTRATIVA">4406 - SECRETARÍA ADMINISTRATIVA</option>

                        <option value="4408 - COORDINACIÓN DE SERVICIO EXTERNO DE LABORATORIOS">4408 - COORDINACIÓN DE SERVICIO EXTERNO DE LABORATORIOS</option>
                        <option value="4403 - COORDINACIÓN DE LABORATORIOS ACADÉMICOS">4403 - COORDINACIÓN DE LABORATORIOS ACADÉMICOS</option>

                        <option value="4407 - LABORATORIO DE SANITARIA">4407 - LABORATORIO DE SANITARIA</option>
                        <option value="4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS">4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS</option>
                        <option value="4411 - LABORATORIO DE METALURGIA">4411 - LABORATORIO DE METALURGIA</option>
                        <option value="4412 - LABORATORIO DE QUIMICA">4412 - LABORATORIO DE QUIMICA</option>
                        <option value="4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA">4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA</option>
                        <option value="4413 - LABORATORIO DE AUTOMÁTICA">4413 - LABORATORIO DE AUTOMÁTICA</option>


                        <option value="4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS">4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS</option>
                        <option value="4415 - LABORATORIO DE HIDRAULICA">4415 - LABORATORIO DE HIDRAULICA</option>


                        <option value="4416 - LABORATORIO DE SENSORES REMOTOS">4416 - LABORATORIO DE SENSORES REMOTOS</option>
                        <option value="4417 - LABORATORIO DE TOPOGRAFIA">4417 - LABORATORIO DE TOPOGRAFIA</option>
                        <option value="4418 - LABORATORIO DE RESONANCIA MAGNETICA">4418 - LABORATORIO DE RESONANCIA MAGNETICA</option>
                        <option value="4419 - LABORATORIO DE FISICA">4419 - LABORATORIO DE FISICA</option>
                        <option value="4418 - LABORATORIO DE GEOLOGIA">4418 - LABORATORIO DE GEOLOGIA</option>

                        <option value="4462 - LAB DE GEOLOGIA">4462 - LAB DE GEOLOGIA</option>

                        <option value="4462 - LAB DE GEOFISICA">4462 - LAB DE GEOFISICA</option>



                        <option value="4449 - LAB DE AEROESPACIAL">4449 - LAB DE AEROESPACIAL</option>


                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Folio">Folio <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Folio" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Folio" value=" <?php echo $Folio;?>" readonly="readonly">

                        </div>
                      </div>


                      <?php

                      $hoy = getdate();
                      $d = $hoy['mday'];
                        $m = $hoy['mon'];
                        $y = $hoy['year'];

                          $d2= date("d");
                          $m2= date("m");
                          $y2= date("y");

                        ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control"  name="Fecha" id="Fecha" required="required"  readonly="readonly"  value="<?php echo ''.$d2.'/'.$m2.'/'.$y.'';?> " >
                          <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                        </div>





                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Fondo">Motivos Requisición <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Motivos" required="required" class="form-control col-md-7 col-xs-12" placeholder="Motivos requisicion..." name="Motivos" readonly="readonly" value="<?php echo $Motivos;?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">



                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Solicitante <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Solicitante" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Solicitante"  readonly="readonly" value="<?php echo $Solicitante;?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">

                        </div>
                      </div>

		                      <div class="ln_solid"></div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Fondo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Fondo" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Fondo" onkeypress="return valida(event)" readonly="readonly"   value="<?php echo $Fondo;?>" >

                        </div>


                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Funcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Funcion" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Funcion" onkeypress="return valida(event)" readonly="readonly" value="<?php echo $Funcion;?>">

                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Programa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Programa" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Programa" onkeypress="return valida(event)" readonly="readonly"  value="<?php echo $Programa;?>">

                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Unidad Presupuestal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="UPresupuestal" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="UPresupuestal" onkeypress="return valida(event)"  readonly="readonly" value="<?php echo $UPresupuestal;?>">

                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Cuenta <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Cuenta" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Cuenta"  onkeypress="return valida(event)" readonly="readonly"  value="<?php echo $Cuenta;?>">




                          <input type="text" id="IdRequi" class="form-control col-md-7 col-xs-12"  name="IdRequi" value="<?php echo $IdRequi;?>" style="display:none;">


                        </div>
                      </div>


                          <div class="ln_solid"></div>


                            <!--Seccion proveedores  -->

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">No. Folio Adquisiciones<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="FolioAdqui" required="required" class="form-control col-md-7 col-xs-12" placeholder="000000" name="FolioAdqui" onkeypress="return valida(event)" readonly="readonly"  value="<?php echo $FolioAdqui;?>">

                            </div>
                          </div>

                              <div class="ln_solid"></div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 1
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="NomProveedor01" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor01"readonly="readonly" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"   value="<?php echo $NomProveedor01;?>">

                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 2
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="NomProveedor02" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor02"readonly="readonly" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"  value="<?php echo $NomProveedor02;?>">

                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 3
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="NomProveedor03" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor03"readonly="readonly"onkeyup="mayus(this);" onkeypress="return validarLetras(event)"  value="<?php echo $NomProveedor03;?>">

                            </div>
                          </div>


                          <div class="ln_solid"></div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">No. Proveedor # 1
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="NumProveedor01" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor01" readonly="readonly"onkeypress="return valida(event)"   value="<?php echo $NumProveedor01;?>">

                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">No. Proveedor # 2
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="NumProveedor02" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor02"readonly="readonly" onkeypress="return valida(event)"   value="<?php echo $NumProveedor02;?>">

                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">No. Proveedor # 3
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="NumProveedor03" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor03"readonly="readonly" onkeypress="return valida(event)"   value="<?php echo $NumProveedor03;?>">

                            </div>
                          </div>

                          <div class="ln_solid"></div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 1
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="TiempoEntrega01"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega01" onkeyup="mayus(this);" readonly="readonly"onkeypress="return validarLetras(event)" value="<?php echo $TiempoEntrega01;?>">

                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 2
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="TiempoEntrega02"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega02" onkeyup="mayus(this);" readonly="readonly"onkeypress="return validarLetras(event)" value="<?php echo $TiempoEntrega02;?>">

                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 3
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="TiempoEntrega03"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega03" onkeyup="mayus(this);" readonly="readonly"onkeypress="return validarLetras(event)" value="<?php echo $TiempoEntrega03;?>">

                            </div>
                          </div>

                          <div class="ln_solid"></div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 1
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Garantia01"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia01" onkeyup="mayus(this);" readonly onkeypress="return validarLetras(event)" value="<?php echo $Garantia01;?>">

                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 2
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Garantia02"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia02" onkeyup="mayus(this);" readonly onkeypress="return validarLetras(event)" value="<?php echo $Garantia02;?>">

                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 3
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Garantia03"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia03" onkeyup="mayus(this);" readonly onkeypress="return validarLetras(event)" value="<?php echo $Garantia03;?>">

                            </div>
                          </div>



                          <div class="ln_solid"></div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Observaciones Cotizacion
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea class="form-control" rows="3" placeholder="Observaciones..." readonly="readonly" name="ObservacionesCotizacion" id="ObservacionesCotizacion" ><?php echo $ObservacionesCotizacion?></textarea>

                            </div>
                          </div>

                            <!--Seccion proveedores  -->


                  </div>
                </div>
              </div>









  <div class="clearfix"></div>

<!-- Walforf Ezample -->






        <!-- Tabla de equis -->


                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Articulos de requi <?php echo $Folio; ?> </h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Settings 1</a>
                                  </li>
                                  <li><a href="#">Settings 2</a>
                                  </li>
                                </ul>
                              </li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <p class="text-muted font-13 m-b-30">
                            </p>
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                </th>
                                <th class="column-title">Articulo </th>
                                <th class="column-title">SubCuenta </th>
                                <th class="column-title">Cantidad </th>
                                <th class="column-title">Unidad </th>
                                <th class="column-title">Descripción </th>
                                <!-- <th class="column-title">Observaciones </th> -->
                                <th class="column-title">IVA </th>
                                <th class="column-title">Precio Proveedor 1 </th>
                                <th class="column-title">Precio Proveedor 2 </th>
                                <th class="column-title">Precio Proveedor 3 </th>

                                </th>
                                </tr>
                              </thead>

                              <tr>
                                <td class=" ">1</td>
                                <td class=" " ><?php echo $SubCuenta01?>   </td>
                                <td class=" "> <?php echo $Cantidad01?>  </td>
                                <td class=" "> <?php echo $Unidad01?>   </td>
                                <td class=" "> <?php echo $Descripcion01?>  </td>
                                <!-- <td class=" "> <?php echo $Observaciones01?>  </td> -->
                                </td>

                                <td> <?php echo $IVArt01?> </td>

                                <td class=" "> <?php echo $PrecioArt01Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt01Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt01Prov03?> </td>



                                </td>
                              </tr>

                              <tr>
                                <td class=" ">2</td>
                                <td class=" " > <?php echo $SubCuenta02?>   </td>
                                <td class=" "> <?php echo $Cantidad02?>  </td>
                                <td class=" "> <?php echo $Unidad02?>  </td>
                                <td class=" "> <?php echo $Descripcion02?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones02?> </td> -->

                                <td> <?php echo $IVArt02?> </td>

                                <td class=" "> <?php echo $PrecioArt02Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt02Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt02Prov03?> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">3</td>
                                <td class=" " > <?php echo $SubCuenta03?>  </td>
                                <td class=" "> <?php echo $Cantidad03?> </td>
                                <td class=" "> <?php echo $Unidad03?>  </td>
                                <td class=" "> <?php echo $Descripcion03?>   </td>
                                <!-- <td class=" "> <?php echo $Observaciones03?>  </td> -->

                                <td> <?php echo $IVArt03?> </td>


                                <td class=" "> <?php echo $PrecioArt03Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt03Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt03Prov03?> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">4</td>
                                <td class=" "> <?php echo $SubCuenta04?>  </td>
                                <td class=" "> <?php echo $Cantidad04?>  </td>
                                <td class=" "> <?php echo $Unidad04?>   </td>
                                <td class=" "> <?php echo $Descripcion04?>   </td>
                                <!-- <td class=" "> <?php echo $Observaciones04?>  </td> -->

                                <td> <?php echo $IVArt04?> </td>


                                <td class=" "> <?php echo $PrecioArt04Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt04Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt04Prov03?> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">5</td>
                                <td class=" "  > <?php echo $SubCuenta05?> </td>
                                <td class=" "> <?php echo $Cantidad05?>  </td>
                                <td class=" "> <?php echo $Unidad05?>  </td>
                                <td class=" "> <?php echo $Descripcion05?>   </td>
                                <!-- <td class=" "> <?php echo $Observaciones05?>  </td> -->

                                <td> <?php echo $IVArt05?> </td>


                                <td class=" "> <?php echo $PrecioArt05Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt05Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt05Prov03?> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">6</td>
                                <td class=" "> <?php echo $SubCuenta06?>  </td>
                                <td class=" "> <?php echo $Cantidad06?>   </td>
                                <td class=" "> <?php echo $Unidad06?>  </td>
                                <td class=" "> <?php echo $Descripcion06?>  </td>
                                <!-- <td class=" "> <?php echo $Observaciones06?>   </td> -->

                                <td> <?php echo $IVArt06?> </td>



                                <td class=" "> <?php echo $PrecioArt06Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt06Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt06Prov03?> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">7</td>
                                <td class=" "> <?php echo $SubCuenta07?>  </td>
                                <td class=" "> <?php echo $Cantidad07?>  </td>
                                <td class=" "> <?php echo $Unidad07?> </td>
                                <td class=" "> <?php echo $Descripcion07?>  </td>
                                <!-- <td class=" "> <?php echo $Observaciones07?>  </td> -->

                                <td> <?php echo $IVArt07?> </td>


                                <td class=" "> <?php echo $PrecioArt07Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt07Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt07Prov03?> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">8</td>
                                <td class=" "> <?php echo $SubCuenta08?> </td>
                                <td class=" "> <?php echo $Cantidad08?> </td>
                                <td class=" "> <?php echo $Unidad08?>  </td>
                                <td class=" "> <?php echo $Descripcion08?>  </td>
                                <!-- <td class=" "> <?php echo $Observaciones08?>  </td> -->

                                <td> <?php echo $IVArt08?> </td>


                                <td class=" "> <?php echo $PrecioArt08Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt08Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt08Prov03?> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">9</td>
                                <td class=" "  > <?php echo $SubCuenta09?>  </td>
                                <td class=" "> <?php echo $Cantidad09?> </td>
                                <td class=" "> <?php echo $Unidad09?>  </td>
                                <td class=" "> <?php echo $Descripcion09?>  </td>
                                <!-- <td class=" "> <?php echo $Observaciones09?> </td> -->

                                <td> <?php echo $IVArt09?> </td>


                                <td class=" "> <?php echo $PrecioArt09Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt09Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt09Prov03?> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">10</td>
                                <td class=" " > <?php echo $SubCuenta10?>   </td>
                                <td class=" "> <?php echo $Cantidad10?>  </td>
                                <td class=" "> <?php echo $Unidad10?>  </td>
                                <td class=" "> <?php echo $Descripcion10?>   </td>
                                <!-- <td class=" "> <?php echo $Observaciones10?>  </td> -->


                                <td> <?php echo $IVArt10?> </td>


                                <td class=" "> <?php echo $PrecioArt10Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt10Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt10Prov03?> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">11</td>
                                <td class=" "  ><?php echo $SubCuenta11?>  </td>
                                <td class=" "> <?php echo $Cantidad11?>  </td>
                                <td class=" "> <?php echo $Unidad11?>  </td>
                                <td class=" "> <?php echo $Descripcion11?>  </td>
                                <!-- <td class=" "> <?php echo $Observaciones11?>  </td> -->

                                <td> <?php echo $IVArt11?> </td>


                                <td class=" "> <?php echo $PrecioArt11Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt11Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt11Prov03?> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">12</td>
                                <td class=" "  > <?php echo $SubCuenta12?>  </td>
                                <td class=" "> <?php echo $Cantidad12?>   </td>
                                <td class=" "> <?php echo $Unidad12?>   </td>
                                <td class=" "> <?php echo $Descripcion12?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones12?>  </td> -->

                                <td> <?php echo $IVArt12?> </td>


                                <td class=" "> <?php echo $PrecioArt12Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt12Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt12Prov03?></td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">13</td>
                                <td class=" "> <?php echo $SubCuenta13?>  </td>
                                <td class=" "> <?php echo $Cantidad13?>  </td>
                                <td class=" "> <?php echo $Unidad13?>  </td>
                                <td class=" "> <?php echo $Descripcion13?>  </td>
                                <!-- <td class=" "> <?php echo $Observaciones13?>  </td> -->

                                <td> <?php echo $IVArt13?> </td>


                                <td class=" "> <?php echo $PrecioArt13Prov01?></td>
                                <td class=" "> <?php echo $PrecioArt13Prov02?></td>
                                <td class=" "> <?php echo $PrecioArt13Prov03?> </td>


                                </td>
                              </tr>

                              <tr>
                                <td class=" ">14</td>
                                <td class=" "> <?php echo $SubCuenta14?>  </td>
                                <td class=" "><?php echo $Cantidad14?>  </td>
                                <td class=" "><?php echo $Unidad14?>  </td>
                                <td class=" "> <?php echo $Descripcion14?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones14?>  </td> -->

                                <td> <?php echo $IVArt14?> </td>



                                <td class=" "> <?php echo $PrecioArt14Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt14Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt14Prov03?> </td>


                                </td>
                              </tr>


                              <tr>
                                <td class=" ">15</td>
                                <td class=" "> <?php echo $SubCuenta15?>  </td>
                                <td class=" "><?php echo $Cantidad15?>  </td>
                                <td class=" "><?php echo $Unidad15?>  </td>
                                <td class=" "> <?php echo $Descripcion15?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones15?>  </td> -->

                                <td> <?php echo $IVArt15?> </td>



                                <td class=" "> <?php echo $PrecioArt15Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt15Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt15Prov03?> </td>


                                </td>
                              </tr>


                              <tr>
                                <td class=" ">16</td>
                                <td class=" "> <?php echo $SubCuenta16?>  </td>
                                <td class=" "><?php echo $Cantidad16?>  </td>
                                <td class=" "><?php echo $Unidad16?>  </td>
                                <td class=" "> <?php echo $Descripcion16?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones16?>  </td> -->

                                <td> <?php echo $IVArt16?> </td>



                                <td class=" "> <?php echo $PrecioArt16Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt16Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt16Prov03?> </td>


                                </td>
                              </tr>


                              <tr>
                                <td class=" ">17</td>
                                <td class=" "> <?php echo $SubCuenta17?>  </td>
                                <td class=" "><?php echo $Cantidad17?>  </td>
                                <td class=" "><?php echo $Unidad17?>  </td>
                                <td class=" "> <?php echo $Descripcion17?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones17?>  </td> -->

                                <td> <?php echo $IVArt17?> </td>



                                <td class=" "> <?php echo $PrecioArt17Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt17Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt17Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">18</td>
                                <td class=" "> <?php echo $SubCuenta18?>  </td>
                                <td class=" "><?php echo $Cantidad18?>  </td>
                                <td class=" "><?php echo $Unidad18?>  </td>
                                <td class=" "> <?php echo $Descripcion18?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones18?>  </td> -->

                                <td> <?php echo $IVArt18?> </td>



                                <td class=" "> <?php echo $PrecioArt18Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt18Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt18Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">19</td>
                                <td class=" "> <?php echo $SubCuenta19?>  </td>
                                <td class=" "><?php echo $Cantidad19?>  </td>
                                <td class=" "><?php echo $Unidad19?>  </td>
                                <td class=" "> <?php echo $Descripcion19?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones19?>  </td> -->

                                <td> <?php echo $IVArt19?> </td>



                                <td class=" "> <?php echo $PrecioArt19Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt19Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt19Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">20</td>
                                <td class=" "> <?php echo $SubCuenta20?>  </td>
                                <td class=" "><?php echo $Cantidad20?>  </td>
                                <td class=" "><?php echo $Unidad20?>  </td>
                                <td class=" "> <?php echo $Descripcion20?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones20?>  </td> -->

                                <td> <?php echo $IVArt20?> </td>



                                <td class=" "> <?php echo $PrecioArt20Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt20Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt20Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">21</td>
                                <td class=" "> <?php echo $SubCuenta21?>  </td>
                                <td class=" "><?php echo $Cantidad21?>  </td>
                                <td class=" "><?php echo $Unidad21?>  </td>
                                <td class=" "> <?php echo $Descripcion21?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones21?>  </td> -->

                                <td> <?php echo $IVArt21?> </td>



                                <td class=" "> <?php echo $PrecioArt21Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt21Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt21Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">22</td>
                                <td class=" "> <?php echo $SubCuenta22?>  </td>
                                <td class=" "><?php echo $Cantidad22?>  </td>
                                <td class=" "><?php echo $Unidad22?>  </td>
                                <td class=" "> <?php echo $Descripcion22?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones22?>  </td> -->

                                <td> <?php echo $IVArt22?> </td>



                                <td class=" "> <?php echo $PrecioArt22Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt22Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt22Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">23</td>
                                <td class=" "> <?php echo $SubCuenta23?>  </td>
                                <td class=" "><?php echo $Cantidad23?>  </td>
                                <td class=" "><?php echo $Unidad23?>  </td>
                                <td class=" "> <?php echo $Descripcion23?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones23?>  </td> -->

                                <td> <?php echo $IVArt23?> </td>



                                <td class=" "> <?php echo $PrecioArt23Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt23Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt23Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">24</td>
                                <td class=" "> <?php echo $SubCuenta24?>  </td>
                                <td class=" "><?php echo $Cantidad24?>  </td>
                                <td class=" "><?php echo $Unidad24?>  </td>
                                <td class=" "> <?php echo $Descripcion24?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones24?>  </td> -->

                                <td> <?php echo $IVArt24?> </td>



                                <td class=" "> <?php echo $PrecioArt24Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt24Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt24Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">25</td>
                                <td class=" "> <?php echo $SubCuenta25?>  </td>
                                <td class=" "><?php echo $Cantidad25?>  </td>
                                <td class=" "><?php echo $Unidad25?>  </td>
                                <td class=" "> <?php echo $Descripcion25?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones25?>  </td> -->

                                <td> <?php echo $IVArt25?> </td>



                                <td class=" "> <?php echo $PrecioArt25Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt25Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt25Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">26</td>
                                <td class=" "> <?php echo $SubCuenta26?>  </td>
                                <td class=" "><?php echo $Cantidad26?>  </td>
                                <td class=" "><?php echo $Unidad26?>  </td>
                                <td class=" "> <?php echo $Descripcion26?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones26?>  </td> -->

                                <td> <?php echo $IVArt26?> </td>



                                <td class=" "> <?php echo $PrecioArt26Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt26Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt26Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">27</td>
                                <td class=" "> <?php echo $SubCuenta27?>  </td>
                                <td class=" "><?php echo $Cantidad27?>  </td>
                                <td class=" "><?php echo $Unidad27?>  </td>
                                <td class=" "> <?php echo $Descripcion27?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones27?>  </td> -->

                                <td> <?php echo $IVArt27?> </td>



                                <td class=" "> <?php echo $PrecioArt27Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt27Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt27Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">28</td>
                                <td class=" "> <?php echo $SubCuenta28?>  </td>
                                <td class=" "><?php echo $Cantidad28?>  </td>
                                <td class=" "><?php echo $Unidad28?>  </td>
                                <td class=" "> <?php echo $Descripcion28?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones28?>  </td> -->

                                <td> <?php echo $IVArt28?> </td>



                                <td class=" "> <?php echo $PrecioArt28Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt28Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt28Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">29</td>
                                <td class=" "> <?php echo $SubCuenta29?>  </td>
                                <td class=" "><?php echo $Cantidad29?>  </td>
                                <td class=" "><?php echo $Unidad29?>  </td>
                                <td class=" "> <?php echo $Descripcion29?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones29?>  </td> -->

                                <td> <?php echo $IVArt29?> </td>



                                <td class=" "> <?php echo $PrecioArt29Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt29Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt29Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">30</td>
                                <td class=" "> <?php echo $SubCuenta30?>  </td>
                                <td class=" "><?php echo $Cantidad30?>  </td>
                                <td class=" "><?php echo $Unidad30?>  </td>
                                <td class=" "> <?php echo $Descripcion30?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones30?>  </td> -->

                                <td> <?php echo $IVArt30?> </td>



                                <td class=" "> <?php echo $PrecioArt30Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt30Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt30Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">31</td>
                                <td class=" "> <?php echo $SubCuenta31?>  </td>
                                <td class=" "><?php echo $Cantidad31?>  </td>
                                <td class=" "><?php echo $Unidad31?>  </td>
                                <td class=" "> <?php echo $Descripcion31?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones31?>  </td> -->

                                <td> <?php echo $IVArt31?> </td>



                                <td class=" "> <?php echo $PrecioArt31Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt31Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt31Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">32</td>
                                <td class=" "> <?php echo $SubCuenta32?>  </td>
                                <td class=" "><?php echo $Cantidad32?>  </td>
                                <td class=" "><?php echo $Unidad32?>  </td>
                                <td class=" "> <?php echo $Descripcion32?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones32?>  </td> -->

                                <td> <?php echo $IVArt32?> </td>



                                <td class=" "> <?php echo $PrecioArt32Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt32Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt32Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">33</td>
                                <td class=" "> <?php echo $SubCuenta33?>  </td>
                                <td class=" "><?php echo $Cantidad33?>  </td>
                                <td class=" "><?php echo $Unidad33?>  </td>
                                <td class=" "> <?php echo $Descripcion33?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones33?>  </td> -->

                                <td> <?php echo $IVArt33?> </td>



                                <td class=" "> <?php echo $PrecioArt33Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt33Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt33Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">34</td>
                                <td class=" "> <?php echo $SubCuenta34?>  </td>
                                <td class=" "><?php echo $Cantidad34?>  </td>
                                <td class=" "><?php echo $Unidad34?>  </td>
                                <td class=" "> <?php echo $Descripcion34?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones34?>  </td> -->

                                <td> <?php echo $IVArt34?> </td>



                                <td class=" "> <?php echo $PrecioArt34Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt34Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt34Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">35</td>
                                <td class=" "> <?php echo $SubCuenta35?>  </td>
                                <td class=" "><?php echo $Cantidad35?>  </td>
                                <td class=" "><?php echo $Unidad35?>  </td>
                                <td class=" "> <?php echo $Descripcion35?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones35?>  </td> -->

                                <td> <?php echo $IVArt35?> </td>



                                <td class=" "> <?php echo $PrecioArt35Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt35Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt35Prov03?> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">36</td>
                                <td class=" "> <?php echo $SubCuenta36?>  </td>
                                <td class=" "><?php echo $Cantidad36?>  </td>
                                <td class=" "><?php echo $Unidad36?>  </td>
                                <td class=" "> <?php echo $Descripcion36?> </td>
                                <!-- <td class=" "> <?php echo $Observaciones36?>  </td> -->

                                <td> <?php echo $IVArt36?> </td>



                                <td class=" "> <?php echo $PrecioArt36Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt36Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt36Prov03?> </td>


                                </td>
                              </tr>






                              <tbody>











                              </tbody>
                            </table>


                            <table id="datatable-buttons" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                </th>
                                <!-- <th class="column-title">Articulo </th>
                                <th class="column-title">SubCuenta </th>
                                <th class="column-title">Cantidad </th>
                                <th class="column-title">Unidad </th>
                                <th class="column-title">Descripción </th> -->
                                <th class="column-title">Observaciones </th>
                                <!-- <th class="column-title">IVA </th>
                                <th class="column-title">Precio Proveedor 1 </th>
                                <th class="column-title">Precio Proveedor 2 </th>
                                <th class="column-title">Precio Proveedor 3 </th> -->

                                </th>
                                </tr>
                              </thead>

                              <tr>
                                <!-- <td class=" ">1</td>
                                <td class=" " ><?php echo $SubCuenta01?>   </td>
                                <td class=" "> <?php echo $Cantidad01?>  </td>
                                <td class=" "> <?php echo $Unidad01?>   </td>
                                <td class=" "> <?php echo $Descripcion01?>  </td> -->
                                <td class=" "> <?php echo $Observaciones01?>  </td>
                                </td>

                                <!-- <td> <?php echo $IVArt01?> </td>

                                <td class=" "> <?php echo $PrecioArt01Prov01?> </td>
                                <td class=" "> <?php echo $PrecioArt01Prov02?> </td>
                                <td class=" "> <?php echo $PrecioArt01Prov03?> </td> -->



                                </td>
                              </tr>





                              <tbody>











                              </tbody>
                            </table>

                            <div class="form-group">

                              <div class="col-md-11 col-sm-11 col-xs-11 ">

                              </div>
                              <div class="col-md-1 col-sm-1 col-xs-1 ">

                                <a href=" <?php echo 'ModificarCotizacion.php?IdRequi='.$IdRequi.'&Folio='.$Folio.'';?>">    <span class="btn btn-warning">Modificar | <i class="fa fa-pencil"></i> </span> </a>
                              </div>
                            </div>

                          </div>
                        </div>







                          <div class="ln_solid"></div>

                      </div>




</form>


        <!-- Tabla de reuis  -->






      <div class="clearfix"></div>


      <!-- Ejemplo inicio -->



</div>

</div>




        <!-- /page content -->

        <!-- footer content -->
        <footer>
<?php echo $Footer; ?>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <!-- scripts -->
  <?php echo $Scripts ?>
  <!-- Scripts -->

  </body>
</html>
