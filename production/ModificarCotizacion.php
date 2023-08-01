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
  patron =/[0-9.]/;
  tecla_final = String.fromCharCode(tecla);
  return patron.test(tecla_final);
}


function mayus(e) {
  // e.value = e.value.toUpperCase();



  }


  function validarLeras(e) { // 1
  // tecla = (document.all) ? e.keyCode : e.which; // 2
  // if (tecla==8) return true; // 3
  // patron =/[A-Za-z\s]/; // 4
  // te = String.fromCharCode(tecla); // 5
  // return patron.test(te); // 6
}





function validarLetras(e) { // 1
//     tecla = (document.all) ? e.keyCode : e.which; // 2
//     if (tecla==8) return true; // 3
// 	  if (tecla==9) return true; // 3
// 	  if (tecla==11) return true; // 3
//    	if (tecla==47) return true; // 3
//     if (tecla==37) return true; // 3
//     if (tecla==35) return true; // 3
//     if (tecla==61) return true; // 3
//     if (tecla==42) return true; // 3
//     if (tecla==43) return true; // 3
//     if (tecla==36) return true; // 3
//     patron = /[A-Za-z0-9-.@,\s\t]/; // 4
//
//     te = String.fromCharCode(tecla); // 5
//     return patron.test(te); // 6
// }


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
                    <h2>Modificacion de Cotización <small></small></h2>
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="UpdateCotizacion.php" method="post">


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





                 $sql = 'SELECT * FROM Requi a INNER JOIN MovcRequis c on a.Folio = c.Folio WHERE a.IdRequi = '.$IdRequi.' ';
                 $resultado = $conexion->query($sql);

                 while ($row = $resultado->fetch_assoc() )
                  {

                    $IdRequi = $row['IdRequi'];
                    $Folio = $row['Folio'];
                    $IdUnidad = $row['IdUnidad'];
                    // $Departamento = $row['Departamento'];
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



        $FechaBD = $row['Fecha'];



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



                                $OrdenCompra = $row['OrdenCompra'];









                     }


                  ?>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Facultad</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Facultad" id="Facultad"  >
                            <option value="4400">4400 FACULTAD DE INGENIERIA</option>

                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento Solicitante</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="DepSolicitante" id="DepSolicitante" >


                        <?php echo '<option value="'.$IdUnidad.'">'.$IdUnidad.' - '.$Departamento.' - SELECCIONADO</option>'; ?>

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
                        <option value="4424 - INGENIERIA EN SISTEMAS">4424 - INGENIERIA EN SISTEMAS</option>
                        <option value="4426 - INGENIERIA EN MINAS">4426 - INGENIERIA EN MINAS</option>


                        <option value="4462 - LABORATORIO DE GEOLOGIA">4462 - LABORATORIO DE GEOLOGIA</option>
                        <option value="4462 - LABORATORIO DE GEOFISICA">4462 - LABORATORIO DE GEOFISICA</option>

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



                        // echo $FechaBD;

                      $AnoBD = substr($FechaBD, 0, 4);
                      // echo "Año  $AnoBD  ";
                      $MesBD = substr($FechaBD, 5, 2);
                      // echo "MEs  $MesBD  ";
                      $DiaBD = substr($FechaBD, 8, 2);
                      // echo "Dia  $DiaBD  ";








                        ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control"  name="Fecha" id="Fecha" required="required"   value="<?php echo ''.$DiaBD.'/'.$MesBD.'/'.$AnoBD.'';?> " >
                          <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                        </div>





                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Fondo">Motivos Requisición <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Motivos" required="required" class="form-control col-md-7 col-xs-12" placeholder="Motivos requisicion..." name="Motivos"  value="<?php echo $Motivos;?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">



                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Solicitante <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Solicitante" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Solicitante"   value="<?php echo $Solicitante;?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">

                        </div>
                      </div>

		                      <div class="ln_solid"></div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Fondo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Fondo" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Fondo" onkeypress="return valida(event)"    value="<?php echo $Fondo;?>" >

                        </div>


                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Funcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Funcion" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Funcion" onkeypress="return valida(event)"  value="<?php echo $Funcion;?>">

                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Programa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Programa" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Programa" onkeypress="return valida(event)"   value="<?php echo $Programa;?>">

                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Unidad Presupuestal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="UPresupuestal" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="UPresupuestal" onkeypress="return valida(event)"   value="<?php echo $UPresupuestal;?>">

                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Cuenta <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Cuenta" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Cuenta"  onkeypress="return valida(event)"   value="<?php echo $Cuenta;?>">




                          <input type="text" id="IdRequi" class="form-control col-md-7 col-xs-12"  name="IdRequi" value="<?php echo $IdRequi;?>" style="display:none;">


                        </div>
                      </div>


                          <div class="ln_solid"></div>


                            <!--Seccion proveedores  -->

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">No. Folio Adquisiciones<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="FolioAdqui" required="required" class="form-control col-md-7 col-xs-12" placeholder="000000" name="FolioAdqui" onkeypress="return valida(event)"   value="<?php echo $FolioAdqui;?>">

                            </div>
                          </div>

                              <div class="ln_solid"></div>


                              <div class="form-group"  >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Buscar Proveedor # 1
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <input type="text" id="NumProveedor01" class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor01" onkeypress="return validarLeras(event)"  value="">
                                    </div>

                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                      <input type="button" name="" value="Buscar" onclick="BuscarProveedor1()">


                                    </div>
                              </div>


                              <div class="form-group"  >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Buscar Proveedor # 2
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="NumProveedor02" class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor02" onkeypress="return validarLeras(event)" value="">



                                </div>

                                <div class="col-md-1 col-sm-1 col-xs-1"  >
                                  <input type="button" name="" value="Buscar" onclick="BuscarProveedor2()">


                                </div>
                              </div>


                              <div class="form-group"  >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Buscar Proveedor # 3
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <input type="text" id="NumProveedor03"  class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor03" onkeypress="return validarLeras(event)" value="">



                                </div>

                                <div class="col-md-1 col-sm-1 col-xs-1">
                                  <input type="button" name="" value="Buscar" onclick="BuscarProveedor3()">


                                </div>
                              </div>




                              <div class="ln_solid"  ></div>


                              <!--  -->


                              <div class="form-group"  >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 1
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <!-- <input type="text" id="NomProveedor01" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor01" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value=""> -->

                                  <select class="form-control" name="NomProveedor01" id="NomProveedor01" >
                                      <option value="<?php echo $NumProveedor01 ?>"> <?php echo $NumProveedor01.' - '.$NomProveedor01 ?> </option>

                                  </select>


                                </div>
                              </div>


                              <div class="form-group"  >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 2
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <!-- <input type="text" id="NomProveedor02" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor02" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value=""> -->

                                  <select class="form-control" name="NomProveedor02" id="NomProveedor02" >
                                    <option value="<?php echo $NumProveedor02 ?>"> <?php echo $NumProveedor02.' - '.$NomProveedor02 ?> </option>

                                  </select>

                                </div>
                              </div>


                              <div class="form-group"  >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 3
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <!-- <input type="text" id="NomProveedor03" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor03" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value=""> -->


                                  <select class="form-control" name="NomProveedor03" id="NomProveedor03" >
                                    <option value="<?php echo $NumProveedor03 ?>"> <?php echo $NumProveedor03.' - '.$NomProveedor03 ?> </option>

                                  </select>


                                </div>
                              </div>




                            <!--Seccion proveedores  -->


                            <div class="ln_solid"  ></div>


                            <div class="form-group"  >
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 1
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="TiempoEntrega01"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega01" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="<?php echo $TiempoEntrega01;?>">

                              </div>
                            </div>

                            <div class="form-group"  >
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 2
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="TiempoEntrega02"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega02" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="<?php echo $TiempoEntrega02;?>">

                              </div>
                            </div>


                            <div class="form-group"  >
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 3
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="TiempoEntrega03"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega03" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="<?php echo $TiempoEntrega03;?>">

                              </div>
                            </div>





                            <div class="ln_solid"  ></div>


                            <div class="form-group"  >
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 1
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="Garantia01"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia01" onkeyup="mayus(this);"  onkeypress="return validarLetras(event)" value="<?php echo $Garantia01;?>">

                              </div>
                            </div>

                            <div class="form-group"  >
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 2
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="Garantia02"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia02" onkeyup="mayus(this);"  onkeypress="return validarLetras(event)" value="<?php echo $Garantia02;?>">

                              </div>
                            </div>


                            <div class="form-group"  >
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 3
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="Garantia03"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia03" onkeyup="mayus(this);"  onkeypress="return validarLetras(event)" value="<?php echo $Garantia03;?>">

                              </div>
                            </div>


                            <div class="ln_solid"  ></div>

                            <div class="form-group"  >
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Observaciones Cotizacion
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class="form-control" rows="3" placeholder="Observaciones..."  name="ObservacionesCotizacion" id="ObservacionesCotizacion" ><?php echo $ObservacionesCotizacion?></textarea>

                              </div>
                            </div>



                  </div>
                </div>
              </div>

<!--  -->



<!--  -->







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
                                <th>IVA</th>
                                <th class="column-title">Precio Proveedor 1 </th>
                                <th class="column-title">Precio Proveedor 2 </th>
                                <th class="column-title">Precio Proveedor 3 </th>

                                </th>
                                </tr>
                              </thead>

                              <tr>
                                <td class=" ">1</td>
                                <td class=" " > <input type="text" name="SubCuenta01" value="<?php echo $SubCuenta01?>" onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Cantidad01" value="<?php echo $Cantidad01?>" onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Unidad01" value="<?php echo $Unidad01?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion01" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion01?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"style="display:none;"   onkeyup="mayus(this);" onkeypress="return validarLetras(event)">  </td> -->
                                </td>

                                <td> <select class="form-control" name="IVArt01">
                                <?php echo '<option value="'.$IVArt01.'">'.$IVArt01.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt01Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt01Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt01Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt01Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt01Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt01Prov03?>"> </td>



                                </td>
                              </tr>

                              <tr>
                                <td class=" ">2</td>
                                <td class=" " > <input type="text" name="SubCuenta02" value="<?php echo $SubCuenta02?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad02" value="<?php echo $Cantidad02?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Unidad02" value="<?php echo $Unidad02?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion02" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion02?></textarea>   </td>
                                <!-- <td class=" "> <input type="text" style="display:none;"  name="Observaciones02" value="<?php echo $Observaciones02?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt02">
                                <?php echo '<option value="'.$IVArt02.'">'.$IVArt02.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt02Prov01"onkeypress="return valida(event)"  value="<?php echo $PrecioArt02Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt02Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt02Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt02Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt02Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">3</td>
                                <td class=" " > <input type="text" name="SubCuenta03" value="<?php echo $SubCuenta03?>" onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Cantidad03" value="<?php echo $Cantidad03?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Unidad03" value="<?php echo $Unidad03?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion03" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion03?></textarea>   </td>
                                <!-- <td class=" "> <input type="text" style="display:none;"  name="Observaciones03" value="<?php echo $Observaciones03?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt03">
                                <?php echo '<option value="'.$IVArt03.'">'.$IVArt03.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt03Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt03Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt03Prov02"onkeypress="return valida(event)"  value="<?php echo $PrecioArt03Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt03Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt03Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">4</td>
                                <td class=" "  > <input type="text" name="SubCuenta04" value="<?php echo $SubCuenta04?>" onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Cantidad04" value="<?php echo $Cantidad04?>"  onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad04" value="<?php echo $Unidad04?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion04" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion04?></textarea>   </td>
                                <!-- <td class=" "> <input type="text" style="display:none;"  name="Observaciones04" value="<?php echo $Observaciones04?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt04">
                                <?php echo '<option value="'.$IVArt04.'">'.$IVArt04.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt04Prov01"onkeypress="return valida(event)"  value="<?php echo $PrecioArt04Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt04Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt04Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt04Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt04Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">5</td>
                                <td class=" "  > <input type="text" name="SubCuenta05" value="<?php echo $SubCuenta05?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Cantidad05" value="<?php echo $Cantidad05?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Unidad05" value="<?php echo $Unidad05?>"onkeyup="mayus(this);" onkeypress="return validarLetras(event)" >   </td>
                                <td class=" "> <textarea name="Descripcion05" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion05?></textarea>   </td>
                                <!-- <td class=" "> <input type="text" style="display:none;"  name="Observaciones05" value="<?php echo $Observaciones05?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt05">
                                <?php echo '<option value="'.$IVArt05.'">'.$IVArt05.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt05Prov01"onkeypress="return valida(event)"  value="<?php echo $PrecioArt05Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt05Prov02"onkeypress="return valida(event)"  value="<?php echo $PrecioArt05Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt05Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt05Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">6</td>
                                <td class=" "  > <input type="text" name="SubCuenta06" value="<?php echo $SubCuenta06?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad06" value="<?php echo $Cantidad06?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad06" value="<?php echo $Unidad06?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion06" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion06?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones06" value="<?php echo $Observaciones06?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt06">
                                <?php echo '<option value="'.$IVArt06.'">'.$IVArt06.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt06Prov01"onkeypress="return valida(event)"  value="<?php echo $PrecioArt06Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt06Prov02"onkeypress="return valida(event)"  value="<?php echo $PrecioArt06Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt06Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt06Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">7</td>
                                <td class=" "  > <input type="text" name="SubCuenta07" value="<?php echo $SubCuenta07?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Cantidad07" value="<?php echo $Cantidad07?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad07" value="<?php echo $Unidad07?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion07" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion07?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones07" value="<?php echo $Observaciones07?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt07">
                                <?php echo '<option value="'.$IVArt07.'">'.$IVArt07.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt07Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt07Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt07Prov02"onkeypress="return valida(event)"  value="<?php echo $PrecioArt07Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt07Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt07Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">8</td>
                                <td class=" "  > <input type="text" name="SubCuenta08" value="<?php echo $SubCuenta08?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad08" value="<?php echo $Cantidad08?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Unidad08" value="<?php echo $Unidad08?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion08" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion08?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;"  name="Observaciones08" value="<?php echo $Observaciones08?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt08">
                                <?php echo '<option value="'.$IVArt08.'">'.$IVArt08.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt08Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt08Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt08Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt08Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt08Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt08Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">9</td>
                                <td class=" "  > <input type="text" name="SubCuenta09" value="<?php echo $SubCuenta09?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad09" value="<?php echo $Cantidad09?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Unidad09" value="<?php echo $Unidad09?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion09" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion09?></textarea>  </td>
                                <!-- <td class=" "> <input type="text" style="display:none;"  name="Observaciones09" value="<?php echo $Observaciones09?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt09">
                                <?php echo '<option value="'.$IVArt09.'">'.$IVArt09.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt09Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt09Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt09Prov02"onkeypress="return valida(event)"  value="<?php echo $PrecioArt09Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt09Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt09Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">10</td>
                                <td class=" "  > <input type="text" name="SubCuenta10" value="<?php echo $SubCuenta10?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Cantidad10" value="<?php echo $Cantidad10?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad10" value="<?php echo $Unidad10?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion10" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion10?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones10" value="<?php echo $Observaciones10?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt10">
                                <?php echo '<option value="'.$IVArt10.'">'.$IVArt10.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt10Prov01"onkeypress="return valida(event)"  value="<?php echo $PrecioArt10Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt10Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt10Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt10Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt10Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">11</td>
                                <td class=" "  > <input type="text" name="SubCuenta11" value="<?php echo $SubCuenta11?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Cantidad11" value="<?php echo $Cantidad11?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Unidad11" value="<?php echo $Unidad11?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion11" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion11?></textarea>    </td>
                                <!-- <td class=" "> <input type="text" style="display:none;"  name="Observaciones11" value="<?php echo $Observaciones11?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt11">
                                <?php echo '<option value="'.$IVArt11.'">'.$IVArt11.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt11Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt11Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt11Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt11Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt11Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt11Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">12</td>
                                <td class=" "  > <input type="text" name="SubCuenta12" value="<?php echo $SubCuenta12?>"onkeypress="return valida(event)" >   </td>
                                <td class=" "> <input type="text" name="Cantidad12" value="<?php echo $Cantidad12?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad12" value="<?php echo $Unidad12?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion12" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion12?></textarea>   </td>
                                <!-- <td class=" "> <input type="text" style="display:none;"  name="Observaciones12" value="<?php echo $Observaciones12?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt12">
                                <?php echo '<option value="'.$IVArt12.'">'.$IVArt12.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt12Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt12Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt12Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt12Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt12Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt12Prov03?>"> </td>


                                </td>
                              </tr>
                              <tr>
                                <td class=" ">13</td>
                                <td class=" "  > <input type="text" name="SubCuenta13" value="<?php echo $SubCuenta13?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad13" value="<?php echo $Cantidad13?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad13" value="<?php echo $Unidad13?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion13" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion13?></textarea>  </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones13" value="<?php echo $Observaciones13?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt13">
                                <?php echo '<option value="'.$IVArt13.'">'.$IVArt13.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>



                                <td class=" "> <input type="text" name="PrecioArt13Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt13Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt13Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt13Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt13Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt13Prov03?>"> </td>


                                </td>
                              </tr>

                              <tr>
                                <td class=" ">14</td>
                                <td class=" "  > <input type="text" name="SubCuenta14" value="<?php echo $SubCuenta14?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad14" value="<?php echo $Cantidad14?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad14" value="<?php echo $Unidad14?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion14" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion14?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones14" value="<?php echo $Observaciones14?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt14">
                                <?php echo '<option value="'.$IVArt14.'">'.$IVArt14.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt14Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt14Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt14Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt14Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt14Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt14Prov03?>"> </td>


                                </td>
                              </tr>


                              <tr>
                                <td class=" ">15</td>
                                <td class=" "  > <input type="text" name="SubCuenta15" value="<?php echo $SubCuenta15?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad15" value="<?php echo $Cantidad15?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad15" value="<?php echo $Unidad15?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion15" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion15?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones15" value="<?php echo $Observaciones15?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt15">
                                <?php echo '<option value="'.$IVArt15.'">'.$IVArt15.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt15Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt15Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt15Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt15Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt15Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt15Prov03?>"> </td>


                                </td>
                              </tr>

                              <tr>
                                <td class=" ">16</td>
                                <td class=" "  > <input type="text" name="SubCuenta16" value="<?php echo $SubCuenta16?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad16" value="<?php echo $Cantidad16?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad16" value="<?php echo $Unidad16?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion16" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion16?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones16" value="<?php echo $Observaciones16?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt16">
                                <?php echo '<option value="'.$IVArt16.'">'.$IVArt16.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt16Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt16Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt16Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt16Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt16Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt16Prov03?>"> </td>


                                </td>
                              </tr>


                              <tr>
                                <td class=" ">17</td>
                                <td class=" "  > <input type="text" name="SubCuenta17" value="<?php echo $SubCuenta17?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad17" value="<?php echo $Cantidad17?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad17" value="<?php echo $Unidad17?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion17" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion17?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones17" value="<?php echo $Observaciones17?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt17">
                                <?php echo '<option value="'.$IVArt17.'">'.$IVArt17.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt17Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt17Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt17Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt17Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt17Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt17Prov03?>"> </td>


                                </td>
                              </tr>


                              <tr>
                                <td class=" ">18</td>
                                <td class=" "  > <input type="text" name="SubCuenta18" value="<?php echo $SubCuenta18?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad18" value="<?php echo $Cantidad18?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad18" value="<?php echo $Unidad18?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion18" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion18?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones18" value="<?php echo $Observaciones18?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt18">
                                <?php echo '<option value="'.$IVArt18.'">'.$IVArt18.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt18Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt18Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt18Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt18Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt18Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt18Prov03?>"> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">19</td>
                                <td class=" "  > <input type="text" name="SubCuenta19" value="<?php echo $SubCuenta19?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad19" value="<?php echo $Cantidad19?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad19" value="<?php echo $Unidad19?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion19" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion19?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones19" value="<?php echo $Observaciones19?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt19">
                                <?php echo '<option value="'.$IVArt19.'">'.$IVArt19.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt19Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt19Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt19Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt19Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt19Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt19Prov03?>"> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">20</td>
                                <td class=" "  > <input type="text" name="SubCuenta20" value="<?php echo $SubCuenta20?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad20" value="<?php echo $Cantidad20?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad20" value="<?php echo $Unidad20?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion20" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion20?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones20" value="<?php echo $Observaciones20?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt20">
                                <?php echo '<option value="'.$IVArt20.'">'.$IVArt20.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt20Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt20Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt20Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt20Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt20Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt20Prov03?>"> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">21</td>
                                <td class=" "  > <input type="text" name="SubCuenta21" value="<?php echo $SubCuenta21?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad21" value="<?php echo $Cantidad21?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad21" value="<?php echo $Unidad21?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion21" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion21?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones21" value="<?php echo $Observaciones21?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt21">
                                <?php echo '<option value="'.$IVArt21.'">'.$IVArt21.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt21Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt21Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt21Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt21Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt21Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt21Prov03?>"> </td>


                                </td>
                              </tr>




                              <tr>
                                <td class=" ">22</td>
                                <td class=" "  > <input type="text" name="SubCuenta22" value="<?php echo $SubCuenta22?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad22" value="<?php echo $Cantidad22?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad22" value="<?php echo $Unidad22?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion22" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion22?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones22" value="<?php echo $Observaciones22?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt22">
                                <?php echo '<option value="'.$IVArt22.'">'.$IVArt22.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt22Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt22Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt22Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt22Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt22Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt22Prov03?>"> </td>


                                </td>
                              </tr>




                              <tr>
                                <td class=" ">23</td>
                                <td class=" "  > <input type="text" name="SubCuenta23" value="<?php echo $SubCuenta23?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad23" value="<?php echo $Cantidad23?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad23" value="<?php echo $Unidad23?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion23" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion23?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones23" value="<?php echo $Observaciones23?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt23">
                                <?php echo '<option value="'.$IVArt23.'">'.$IVArt23.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt23Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt23Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt23Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt23Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt23Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt23Prov03?>"> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">24</td>
                                <td class=" "  > <input type="text" name="SubCuenta24" value="<?php echo $SubCuenta24?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad24" value="<?php echo $Cantidad24?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad24" value="<?php echo $Unidad24?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion24" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion24?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones24" value="<?php echo $Observaciones24?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt24">
                                <?php echo '<option value="'.$IVArt24.'">'.$IVArt24.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt24Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt24Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt24Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt24Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt24Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt24Prov03?>"> </td>


                                </td>
                              </tr>

                              <tr>
                                <td class=" ">25</td>
                                <td class=" "  > <input type="text" name="SubCuenta25" value="<?php echo $SubCuenta25?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad25" value="<?php echo $Cantidad25?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad25" value="<?php echo $Unidad25?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion25" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion25?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones25" value="<?php echo $Observaciones25?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt25">
                                <?php echo '<option value="'.$IVArt25.'">'.$IVArt25.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt25Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt25Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt25Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt25Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt25Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt25Prov03?>"> </td>


                                </td>
                              </tr>


                              <tr>
                                <td class=" ">26</td>
                                <td class=" "  > <input type="text" name="SubCuenta26" value="<?php echo $SubCuenta26?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad26" value="<?php echo $Cantidad26?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad26" value="<?php echo $Unidad26?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion26" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion26?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones26" value="<?php echo $Observaciones26?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt26">
                                <?php echo '<option value="'.$IVArt26.'">'.$IVArt26.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt26Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt26Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt26Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt26Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt26Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt26Prov03?>"> </td>


                                </td>
                              </tr>


                              <tr>
                                <td class=" ">27</td>
                                <td class=" "  > <input type="text" name="SubCuenta27" value="<?php echo $SubCuenta27?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad27" value="<?php echo $Cantidad27?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad27" value="<?php echo $Unidad27?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion27" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion27?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones27" value="<?php echo $Observaciones27?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt27">
                                <?php echo '<option value="'.$IVArt27.'">'.$IVArt27.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt27Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt27Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt27Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt27Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt27Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt27Prov03?>"> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">28</td>
                                <td class=" "  > <input type="text" name="SubCuenta28" value="<?php echo $SubCuenta28?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad28" value="<?php echo $Cantidad28?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad28" value="<?php echo $Unidad28?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion28" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion28?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones28" value="<?php echo $Observaciones28?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt28">
                                <?php echo '<option value="'.$IVArt28.'">'.$IVArt28.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt28Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt28Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt28Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt28Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt28Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt28Prov03?>"> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">29</td>
                                <td class=" "  > <input type="text" name="SubCuenta29" value="<?php echo $SubCuenta29?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad29" value="<?php echo $Cantidad29?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad29" value="<?php echo $Unidad29?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion29" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion29?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones29" value="<?php echo $Observaciones29?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt29">
                                <?php echo '<option value="'.$IVArt29.'">'.$IVArt29.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt29Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt29Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt29Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt29Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt29Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt29Prov03?>"> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">30</td>
                                <td class=" "  > <input type="text" name="SubCuenta30" value="<?php echo $SubCuenta30?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad30" value="<?php echo $Cantidad30?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad30" value="<?php echo $Unidad30?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion30" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion30?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones30" value="<?php echo $Observaciones30?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt30">
                                <?php echo '<option value="'.$IVArt30.'">'.$IVArt30.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt30Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt30Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt30Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt30Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt30Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt30Prov03?>"> </td>


                                </td>
                              </tr>




                              <tr>
                                <td class=" ">31</td>
                                <td class=" "  > <input type="text" name="SubCuenta31" value="<?php echo $SubCuenta31?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad31" value="<?php echo $Cantidad31?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad31" value="<?php echo $Unidad31?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion31" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion31?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones31" value="<?php echo $Observaciones31?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt31">
                                <?php echo '<option value="'.$IVArt31.'">'.$IVArt31.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt31Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt31Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt31Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt31Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt31Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt31Prov03?>"> </td>


                                </td>
                              </tr>




                              <tr>
                                <td class=" ">32</td>
                                <td class=" "  > <input type="text" name="SubCuenta32" value="<?php echo $SubCuenta32?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad32" value="<?php echo $Cantidad32?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad32" value="<?php echo $Unidad32?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion32" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion32?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones32" value="<?php echo $Observaciones32?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt32">
                                <?php echo '<option value="'.$IVArt32.'">'.$IVArt32.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt32Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt32Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt32Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt32Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt32Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt32Prov03?>"> </td>


                                </td>
                              </tr>




                              <tr>
                                <td class=" ">33</td>
                                <td class=" "  > <input type="text" name="SubCuenta33" value="<?php echo $SubCuenta33?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad33" value="<?php echo $Cantidad33?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad33" value="<?php echo $Unidad33?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion33" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion33?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones33" value="<?php echo $Observaciones33?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt33">
                                <?php echo '<option value="'.$IVArt33.'">'.$IVArt33.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt33Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt33Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt33Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt33Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt33Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt33Prov03?>"> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">34</td>
                                <td class=" "  > <input type="text" name="SubCuenta34" value="<?php echo $SubCuenta34?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad34" value="<?php echo $Cantidad34?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad34" value="<?php echo $Unidad34?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion34" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion34?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones34" value="<?php echo $Observaciones34?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt34">
                                <?php echo '<option value="'.$IVArt34.'">'.$IVArt34.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt34Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt34Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt34Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt34Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt34Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt34Prov03?>"> </td>


                                </td>
                              </tr>




                              <tr>
                                <td class=" ">35</td>
                                <td class=" "  > <input type="text" name="SubCuenta35" value="<?php echo $SubCuenta35?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad35" value="<?php echo $Cantidad35?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad35" value="<?php echo $Unidad35?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion35" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion35?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones35" value="<?php echo $Observaciones35?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt35">
                                <?php echo '<option value="'.$IVArt35.'">'.$IVArt35.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt35Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt35Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt35Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt35Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt35Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt35Prov03?>"> </td>


                                </td>
                              </tr>



                              <tr>
                                <td class=" ">36</td>
                                <td class=" "  > <input type="text" name="SubCuenta36" value="<?php echo $SubCuenta36?>" onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Cantidad36" value="<?php echo $Cantidad36?>"onkeypress="return valida(event)">   </td>
                                <td class=" "> <input type="text" name="Unidad36" value="<?php echo $Unidad36?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
                                <td class=" "> <textarea name="Descripcion36" rows="1" cols="80" style="margin: 0px; height: 43px; width: 353px;"><?php echo $Descripcion36?></textarea>   </td>
                                <!-- <td class=" "> <input type="text"  style="display:none;" name="Observaciones36" value="<?php echo $Observaciones36?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td> -->

                                <td> <select class="form-control" name="IVArt36">
                                <?php echo '<option value="'.$IVArt36.'">'.$IVArt36.'</option>'; ?>
                                                                          <option value="SI">SI</option>
                                                                          <option value="NO">NO</option>
                                                                        </select></td>




                                <td class=" "> <input type="text" name="PrecioArt36Prov01" onkeypress="return valida(event)" value="<?php echo $PrecioArt36Prov01?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt36Prov02" onkeypress="return valida(event)" value="<?php echo $PrecioArt36Prov02?>"> </td>
                                <td class=" "> <input type="text" name="PrecioArt36Prov03" onkeypress="return valida(event)" value="<?php echo $PrecioArt36Prov03?>"> </td>


                                </td>
                              </tr>













                              <tbody>











                              </tbody>
                            </table>


                                                <table class="table table-striped jambo_table bulk_action">
                                                  <thead>
                                                    <tr class="headings">

                                                      <th class="column-title">Observaciones</th>
                                                      <!-- <th class="column-title">Cantidad </th> -->
                                                      <!-- <th class="column-title">Unidad </th> -->
                                                      <!-- <th class="column-title">Descripción </th> -->
                                                      <!-- <th class="column-title">Observaciones </th> -->
                                                      </th>

                                                    </tr>
                                                  </thead>

                                                  <tbody>


                                                    <tr class="odd pointer">

                                                      <td class=" ">

                                                        <div class="form-group">
                                                          <label class="control-label col-md-1 col-sm-1 col-xs-1">Observaciones Generales </span>
                                      </label>
                                                          <div class="col-md-11 col-sm-11 col-xs-11">
                                                            <textarea class="form-control" rows="5" placeholder='Favor de colocar toda la información necesaria para su requisición.' name="Observaciones01"  onkeypress="return validarLetras(event)" onpaste="return true"  maxlength="1100" ><?php echo $Observaciones01?></textarea>
                                                          </div>
                                                        </div>

                                                      </td>





                                                    </tr>




                                                    </tr>
                                                  </tbody>
                                                </table>

                            <div class="form-group">

                              <div class="col-md-11 col-sm-11 col-xs-11 ">

                                <!-- <button type="submit" class="btn btn-success">Guardar!</button> -->

                                <input type="submit" class="btn btn-success" ></button>

                              </div>
                              <div class="col-md-1 col-sm-1 col-xs-1 ">

                                <!-- <button type="submit" class="btn btn-success">Guardar!</button> -->

                                <input type="submit" class="btn btn-success" ></button>

                              </div>
                            </div>


                          </div>
                        </div>


                      </div>




</form>


        <!-- Tabla de reuis  -->






      <div class="clearfix"></div>


      <!-- Ejemplo inicio -->



</div>

</div>
<script type="text/javascript">


function BuscarProveedor1 () {

   // alert('holi');

   // $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');




    var  NoProveedor1 = $("#NumProveedor01").val();

     // alert(NoProveedor);

     $.post("GetProveedor.php", { NoProveedor: NoProveedor1 }, function(data){ $("#NomProveedor01").html(data);});

   }





   function BuscarProveedor2 () {

      // alert('holi');

      // $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');




      var     NoProveedor2 = $("#NumProveedor02").val();

        // alert(NoProveedor);

        $.post("GetProveedor.php", { NoProveedor: NoProveedor2 }, function(data){ $("#NomProveedor02").html(data);});

      }


      function BuscarProveedor3 () {

         // alert('holi');

         // $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');




          var    NoProveedor3 = $("#NumProveedor03").val();

           // alert(NoProveedor);

           $.post("GetProveedor.php", { NoProveedor: NoProveedor3 }, function(data){ $("#NomProveedor03").html(data);});

         }








   </script>



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
