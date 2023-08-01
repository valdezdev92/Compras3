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
                        <option value="4405 - SECRETARÍA POSGRADO">4405 - SECRETARÍA POSGRADO</option>
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


                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Buscar Proveedor # 1
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <input type="text" id="NumProveedor01" class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor01" onkeypress="return validarLeras(event)"  value="">
                                    </div>

                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                      <input type="button" name="" value="Buscar" onclick="BuscarProveedor1()">


                                    </div>
                              </div>


                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Buscar Proveedor # 2
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="NumProveedor02" class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor02" onkeypress="return validarLeras(event)" value="">



                                </div>

                                <div class="col-md-1 col-sm-1 col-xs-1">
                                  <input type="button" name="" value="Buscar" onclick="BuscarProveedor2()">


                                </div>
                              </div>


                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Buscar Proveedor # 3
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <input type="text" id="NumProveedor03"  class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor03" onkeypress="return validarLeras(event)" value="">



                                </div>

                                <div class="col-md-1 col-sm-1 col-xs-1">
                                  <input type="button" name="" value="Buscar" onclick="BuscarProveedor3()">


                                </div>
                              </div>




                              <div class="ln_solid"></div>


                              <!--  -->


                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 1
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <!-- <input type="text" id="NomProveedor01" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor01" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value=""> -->

                                  <select class="form-control" name="NomProveedor01" id="NomProveedor01" >
                                      <option value="<?php echo $NumProveedor01 ?>"> <?php echo $NumProveedor01.' - '.$NomProveedor01 ?> </option>

                                  </select>


                                </div>
                              </div>


                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 2
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <!-- <input type="text" id="NomProveedor02" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor02" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value=""> -->

                                  <select class="form-control" name="NomProveedor02" id="NomProveedor02" >
                                    <option value="<?php echo $NumProveedor02 ?>"> <?php echo $NumProveedor02.' - '.$NomProveedor02 ?> </option>

                                  </select>

                                </div>
                              </div>


                              <div class="form-group">
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


                            <div class="ln_solid"></div>


                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 1
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="TiempoEntrega01"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega01" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="<?php echo $TiempoEntrega01;?>">

                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 2
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="TiempoEntrega02"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega02" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="<?php echo $TiempoEntrega02;?>">

                              </div>
                            </div>


                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 3
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="TiempoEntrega03"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega03" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="<?php echo $TiempoEntrega03;?>">

                              </div>
                            </div>





                            <div class="ln_solid"></div>


                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 1
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="Garantia01"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia01" onkeyup="mayus(this);"  onkeypress="return validarLetras(event)" value="<?php echo $Garantia01;?>">

                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 2
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="Garantia02"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia02" onkeyup="mayus(this);"  onkeypress="return validarLetras(event)" value="<?php echo $Garantia02;?>">

                              </div>
                            </div>


                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 3
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="Garantia03"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia03" onkeyup="mayus(this);"  onkeypress="return validarLetras(event)" value="<?php echo $Garantia03;?>">

                              </div>
                            </div>


                            <div class="ln_solid"></div>

                            <div class="form-group">
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
                                <td class=" "> <input type="text" name="Descripcion01" value="<?php echo $Descripcion01?>"onkeyup="mayus(this);" onkeypress="return validarLetras(event)" >   </td>
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
                                <td class=" "> <input type="text" name="Descripcion02" value="<?php echo $Descripcion02?>"onkeyup="mayus(this);" onkeypress="return validarLetras(event)" >   </td>
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
                                <td class=" "> <input type="text" name="Descripcion03" value="<?php echo $Descripcion03?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
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
                                <td class=" "> <input type="text" name="Descripcion04" value="<?php echo $Descripcion04?>"onkeyup="mayus(this);" onkeypress="return validarLetras(event)" >   </td>
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
                                <td class=" "> <input type="text" name="Descripcion05" value="<?php echo $Descripcion05?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
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
                                <td class=" "> <input type="text" name="Descripcion06" value="<?php echo $Descripcion06?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" >   </td>
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
                                <td class=" "> <input type="text" name="Descripcion07" value="<?php echo $Descripcion07?>"onkeyup="mayus(this);" onkeypress="return validarLetras(event)" >   </td>
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
                                <td class=" "> <input type="text" name="Descripcion08" value="<?php echo $Descripcion08?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
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
                                <td class=" "> <input type="text" name="Descripcion09" value="<?php echo $Descripcion09?>"onkeyup="mayus(this);" onkeypress="return validarLetras(event)" >   </td>
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
                                <td class=" "> <input type="text" name="Descripcion10" value="<?php echo $Descripcion10?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
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
                                <td class=" "> <input type="text" name="Descripcion11" value="<?php echo $Descripcion11?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
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
                                <td class=" "> <input type="text" name="Descripcion12" value="<?php echo $Descripcion12?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
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
                                <td class=" "> <input type="text" name="Descripcion13" value="<?php echo $Descripcion13?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">   </td>
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
                                <td class=" "> <input type="text" name="Descripcion14" value="<?php echo $Descripcion14?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" >   </td>
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
