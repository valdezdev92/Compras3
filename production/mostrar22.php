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
                    <h2>Cotización de articulos<small></small></h2>
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="cotizar-set.php" method="post">


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





                 $sql = 'SELECT *, c.Descripcion As Area FROM Requi a  INNER JOIN CatcAreas c on a.IdArea = c.IdArea WHERE a.IdRequi = '.$IdRequi.' ';
                 $resultado = $conexion->query($sql);

                 while ($row = $resultado->fetch_assoc() )
                  {

                    $IdRequi = $row['IdRequi'];
                    $Folio = $row['Folio'];
                    $IdUnidad = $row['IdUnidad'];
                      // $Departamento = $row['Departamento'];
                    $Motivos=$row['MotivosRequi'];
                    $Solicitante = $row['Solicitante'];

                    $Area = $row['Area'];
                    $IdArea = $row['IdArea'];



                    $Fondo = $row['Fondo'];
                    $Funcion = $row['Funcion'];
                    $Programa = $row['Programa'];
                    $UPresupuestal = $row['UPresupuestal'];
                    $Cuenta = $row['Cuenta'];






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






                     }


                  ?>



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
                          <select class="form-control" name="DepSolicitante" id="DepSolicitante" readonly="readonly" >


<?php echo '<option value="'.$IdUnidad.'">'.$IdUnidad.'  - SELECCIONADO</option>'; ?>






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

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Folio">Funcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Funcion" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Funcion" value=" <?php echo $Funcion;?>" readonly="readonly">

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Folio">Programa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Programa" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Programa" value=" <?php echo $Programa;?>" readonly="readonly">

                        </div>
                      </div>

                        <?php

                        $host_db = "localhost";
                        $user_db = "root";
                        $pass_db = "sr1920la";
                        $db_name = "Compras";
                        $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

                        if ($conexion->connect_error) {
                         die("La conexion falló: " . $conexion->connect_error);
                        }


                        $sql10='SELECT * FROM Cuentas WHERE Cuenta = '.$Cuenta.'';


                        $resultado = $conexion->query($sql10);




                        if ($resultado->num_rows > 0)
                        {
                         }

                         $row = $resultado ->fetch_array(MYSQLI_ASSOC);

                         $DescripcionCuenta =   $row['Descripcion'];



                         $sql11='SELECT * FROM Subcuentas WHERE Cuenta = '.$Cuenta.' AND SubCuenta ='.$SubCuenta01.'  ';

                         // echo $sql11;


                         $resultado = $conexion->query($sql11);




                         if ($resultado->num_rows > 0)
                         {
                          }

                          $row = $resultado ->fetch_array(MYSQLI_ASSOC);

                          $DescripcionSubCuenta =   $row['Descripcion'];


                         ?>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Folio">Cuenta <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Cuenta" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Cuenta" value=" <?php echo $Cuenta.' - '. $DescripcionCuenta;?>" readonly="readonly">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Folio">Sub Cuenta <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="SubCuenta" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="SubCuenta" value=" <?php echo $SubCuenta01.' - '.$DescripcionSubCuenta;?>" readonly="readonly">

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
                          <input type="text" id="Solicitante" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Solicitante"  readonly="readonly"  value="<?php echo $Solicitante;?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Servicio Externo / Academico <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Area" id="Area" readonly="readonly">

                            <?php echo '<option value="'.$IdArea.'">  '.$Area.' - SELECCIONADO</option>'; ?>
                            <!-- <option value="1">UNIDAD ACADÉMICA</option>
                            <option value="2">SERVICIO EXTERNO</option> -->



                          </select>

                        </div>
                      </div>


		                      <div class="ln_solid"></div>




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
                                <th class="column-title">Observaciones </th>

                                </th>
                                </tr>
                              </thead>

                              <tr>
                                <td class=" ">1</td>
                                <td class=" "> <?php echo $SubCuenta01?>  </td>
                                <td class=" "> <?php echo $Cantidad01?> </td>
                                <td class=" "><?php echo $Unidad01?>  </td>
                                <td class=" "> <?php echo $Descripcion01?>  </td>
                                <td class=" "> <?php echo $Observaciones01?>  </td>





                                </td>
                              </tr>

                              <tr>
                                <td class=" ">2</td>
                                <td class=" "> <?php echo $SubCuenta02?>  </td>
                                <td class=" "> <?php echo $Cantidad02?> </td>
                                <td class=" "><?php echo $Unidad02?>  </td>
                                <td class=" "> <?php echo $Descripcion02?>  </td>
                                <td class=" "> <?php echo $Observaciones02?>  </td>



                                </td>
                              </tr>
                              <tr>
                                <td class=" ">3</td>
                                <td class=" "> <?php echo $SubCuenta03?>  </td>
                                <td class=" "> <?php echo $Cantidad03?> </td>
                                <td class=" "><?php echo $Unidad03?>  </td>
                                <td class=" "> <?php echo $Descripcion03?>  </td>
                                <td class=" "> <?php echo $Observaciones03?>  </td>



                                </td>
                              </tr>
                              <tr>
                                <td class=" ">4</td>
                                <td class=" "> <?php echo $SubCuenta04?>  </td>
                                <td class=" "> <?php echo $Cantidad04?> </td>
                                <td class=" "><?php echo $Unidad04?>  </td>
                                <td class=" "> <?php echo $Descripcion04?>  </td>
                                <td class=" "> <?php echo $Observaciones04?>  </td>



                                </td>
                              </tr>
                              <tr>
                                <td class=" ">5</td>
                                <td class=" "> <?php echo $SubCuenta05?>  </td>
                                <td class=" "> <?php echo $Cantidad05?> </td>
                                <td class=" "><?php echo $Unidad05?>  </td>
                                <td class=" "> <?php echo $Descripcion05?>  </td>
                                <td class=" "> <?php echo $Observaciones05?>  </td>



                                </td>
                              </tr>
                              <tr>
                                <td class=" ">6</td>
                                <td class=" "> <?php echo $SubCuenta06?>  </td>
                                <td class=" "> <?php echo $Cantidad06?> </td>
                                <td class=" "><?php echo $Unidad06?>  </td>
                                <td class=" "> <?php echo $Descripcion06?>  </td>
                                <td class=" "> <?php echo $Observaciones06?>  </td>




                                </td>
                              </tr>
                              <tr>
                                <td class=" ">7</td>
                                <td class=" "> <?php echo $SubCuenta07?>  </td>
                                <td class=" "> <?php echo $Cantidad07?> </td>
                                <td class=" "><?php echo $Unidad07?>  </td>
                                <td class=" "> <?php echo $Descripcion07?>  </td>
                                <td class=" "> <?php echo $Observaciones07?>  </td>



                                </td>
                              </tr>
                              <tr>
                                <td class=" ">8</td>
                                <td class=" "> <?php echo $SubCuenta08?>  </td>
                                <td class=" "> <?php echo $Cantidad08?> </td>
                                <td class=" "><?php echo $Unidad08?>  </td>
                                <td class=" "> <?php echo $Descripcion08?>  </td>
                                <td class=" "> <?php echo $Observaciones08?>  </td>




                                </td>
                              </tr>
                              <tr>
                                <td class=" ">9</td>
                                <td class=" "> <?php echo $SubCuenta09?>  </td>
                                <td class=" "> <?php echo $Cantidad09?> </td>
                                <td class=" "><?php echo $Unidad09?>  </td>
                                <td class=" "> <?php echo $Descripcion09?>  </td>
                                <td class=" "> <?php echo $Observaciones09?>  </td>



                                </td>
                              </tr>
                              <tr>
                                <td class=" ">10</td>
                                <td class=" "> <?php echo $SubCuenta10?>  </td>
                                <td class=" "> <?php echo $Cantidad10?> </td>
                                <td class=" "><?php echo $Unidad10?>  </td>
                                <td class=" "> <?php echo $Descripcion10?>  </td>
                                <td class=" "> <?php echo $Observaciones10?>  </td>



                                </td>
                              </tr>
                              <tr>
                                <td class=" ">11</td>
                                <td class=" "> <?php echo $SubCuenta11?>  </td>
                                <td class=" "> <?php echo $Cantidad11?> </td>
                                <td class=" "><?php echo $Unidad11?>  </td>
                                <td class=" "> <?php echo $Descripcion11?>  </td>
                                <td class=" "> <?php echo $Observaciones11?>  </td>




                                </td>
                              </tr>
                              <tr>
                                <td class=" ">12</td>
                                <td class=" "> <?php echo $SubCuenta12?>  </td>
                                <td class=" "> <?php echo $Cantidad12?> </td>
                                <td class=" "><?php echo $Unidad12?>  </td>
                                <td class=" "> <?php echo $Descripcion12?>  </td>
                                <td class=" "> <?php echo $Observaciones12?>  </td>




                                </td>
                              </tr>
                              <tr>
                                <td class=" ">13</td>
                                <td class=" "> <?php echo $SubCuenta13?>  </td>
                                <td class=" "> <?php echo $Cantidad13?> </td>
                                <td class=" "><?php echo $Unidad13?>  </td>
                                <td class=" "> <?php echo $Descripcion13?>  </td>
                                <td class=" "> <?php echo $Observaciones13?>  </td>




                                </td>
                              </tr>
                              <tr>
                                <td class=" ">14</td>
                                <td class=" "> <?php echo $SubCuenta14?>  </td>
                                <td class=" "> <?php echo $Cantidad14?> </td>
                                <td class=" "><?php echo $Unidad14?>  </td>
                                <td class=" "> <?php echo $Descripcion14?>  </td>
                                <td class=" "> <?php echo $Observaciones14?>  </td>




                                </td>
                              </tr>




                              <tbody>











                              </tbody>
                            </table>

                            <div class="form-group">
                              <div class="col-md-12 col-sm-12 col-xs-12 ">

                                <div class="col-md-11">

                                </div>
                                <div class="col-md-1">
                                    <?php echo '<a href="FormatoRequi.php?IdRequi='.$IdRequi.'&Folio='.$Folio.'">  <button type="button" class="btn btn-success" >Impresión de Formato</button></a>' ?>
                                </div>

                                <!-- <button type="submit" class="btn btn-success">Guardar!</button> -->

                                <!-- <input type="submit" class="btn btn-success" ></button> -->

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
