<?php

include '../Sesiones.php';
include '../Header.php';
include '../Footer.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';
require '../ConexionDB.php';

$username = $_SESSION['username'];

$sql = "SELECT * FROM Usuarios WHERE Usuario = '$username'";


$result = $conexion->query($sql);


if ($result->num_rows > 0) {
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);

$Centro = $row['Centro'];
$idUsuario = $row['IdUsuario'];
$NombreUsuario = $row['PrimerNombre'].' '.$row['PrimerApellido'];

$id  = $_GET['id'];

 ?>






<!DOCTYPE html>
<html lang="es">

<head>
  <?php echo $Header; ?>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<script>
  function valida(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
      return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
  }


  function mayus(e) {
    e.value = e.value.toUpperCase();



  }




  function valida(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
      return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
  }


  function validarLetras(e) { // 1

  }

  function Folio(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla == 8) return true; // 3
    if (tecla == 9) return true; // 3
    if (tecla == 11) return true; // 3
    if (tecla == 47) return true; // 3
    if (tecla == 37) return true; // 3
    if (tecla == 35) return true; // 3
    if (tecla == 61) return true; // 3
    if (tecla == 42) return true; // 3
    if (tecla == 43) return true; // 3
    if (tecla == 36) return true; // 3
    patron = /[0-9-\s\t]/; // 4

    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
  }


  function ValidarForm() {




    var ValorCuenta = $('#Cuenta').val();
    var ValorSubCuenta = $('#SubCuenta').val();
    var ValorArea = $('#Area').val();
    var ValorMotivos = $('#Motivos').val();


    if (ValorCuenta == 0)

    {
      alert('Favor de seleccionar una cuenta');
    } else if (ValorSubCuenta == 0) {
      alert('Favor de seleccionar una Sub Cuenta');


    } else if (ValorArea == 0) {
      alert('Favor de seleccionar un Area');


    } else if (ValorMotivos == "") {
      alert('Favor de escribir motivo para la requisición ');


    } else {

      document.demoform2.submit();

    }



  }
</script>




  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">

          <?php echo $LeftBar ?>

        </div>

        <!-- top navigation -->
        <?php echo $TopNavigation; ?>
        <!-- /top navigation -->


        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">

              <!-- Inicio -->

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modificar Requisición 2023 PARTE 1<small></small></h2>
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
                    <form id="demoform2" data-parsley-validate class="form-horizontal form-label-left" action="UpdateAltaRequi2.php" method="post" name="demoform2">

                      <?php

                            if (isset($_GET['Mensaje']))
                            {
                                $Folio=$_GET['Folio'];

                                switch ($_GET['Mensaje'])
                                {
                                  case 'Correcto':

                                  echo

                                  '

                                  <div class="alert alert-info alert-dismissable">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  <p style="font-size:20px;">Requi No.'.$Folio.' Agregada Exitosamente.   </p>

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



                                                                      case 'YaExiste':

                                                                      echo

                                                                      '

                                                                      <div class="alert alert-warning alert-dismissable">
                                                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                      <p style="font-size:20px;">Requi No.'.$Folio.' Ya Existe en la BD</p>

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

$id  = $_GET['id'];

$sqlinfo = "SELECT * FROM Requisiciones2023 a INNER JOIN DepartamentoSolicitante b on a.idDepartamentoSolicitante = b.idDepartamentoSolicitante INNER JOIN Proyecto c on a.idProyecto = c.idProyecto INNER JOIN FuenteFinanciamiento d on a.idFuenteFinanciamiento = d.idFuenteFinanciamiento  INNER JOIN Convenios e on a.idConvenio = e.idConvenio INNER JOIN catCategorias f on a.idcatCategoria = f.idcatCategorias INNER JOIN Usuarios g on a.idUsuario = g.idUsuario INNER JOIN servicioExterno h on a.idServicioExterno = h.idServicioExterno INNER JOIN catcLicitaciones j on a.idLicitacion = j.idLicitacion WHERE idRequisiciones2023 = '$id'";

//  echo $sqlinfo;
$result = $conexion->query($sqlinfo);
if ($result->num_rows > 0) {
}
$row = $result->fetch_array(MYSQLI_ASSOC);

$unidadAdministrativa = $row['UnidadAdministrativa'];
$departamentoSolicitante = $row['descripcionUnidadPresupuestal'];
$proyecto0 = $row['idProyecto'];
$proyecto = $row['Proyecto'] . ' - ' . $row['descripcionProyecto'];
$fuente1 = $row['idFuenteFinanciamiento'];
$fuente2 =$row['descripcionFuenteFinanciamiento'];
$fuente3 = $row['FuenteFinanciamiento'] . ' - ' . $row['descripcionFuenteFinanciamiento'];
$UnidadPresupuestal = $row['UnidadAdministrativa'];
$conveniosss = $row['Convenio'] . ' - ' . $row['descripcionConvenio'];
$conveniosss1 = $row['idConvenio'];
$conveniosss2 = $row['descripcionConvenio'];
$categorias = $row['DescripcionCategoria'];
$categorias1 = $row['idcatCategorias'];
$categorias2 = $row['DescripcionCategoria'];
$fecha = $row['Fecha'];
$motivos = $row['motivoSolicitud'];
$solicitantePrint = $row['PrimerNombre'] . ' ' . $row['PrimerApellido'];
$servicioExterno = $row['DescripcionServicioExterno'];
$servicioExterno1 = $row['idServicioExterno'];
$servicioExterno2 = $row['DescripcionServicioExterno'];

$myDateTime = DateTime::createFromFormat('Y-m-d', $fecha);
$newDateString = $myDateTime->format('d/M/Y');

$Licitacion = $row['Licitacion'] . ' ' . $row['descripcionLicitacion'];
$Licitacion1 = $row['idLicitacion'];


?>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Unidad Administrativa</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="unidadAdministrativa" id="unidadAdministrativa">
                            <option value="4400">4400 FACULTAD DE INGENIERIA</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento Solicitante</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="DepSolicitante" id="DepSolicitante">
                            <option value="<?php echo $Centro; ?>"><?php echo $Centro; ?></option>
                          </select>
                        </div>
                      </div>

                      <?php
                            $query = "SELECT * FROM Proyecto";
                            $resultado=$conexion->query($query);

                       ?>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Proyecto</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Proyecto" id="Proyecto">
      

                            <?php 
                              echo '<option selected value="'.$proyecto0.'">'.$row['Proyecto'].' - '.$row['descripcionProyecto'].' - SELECCIONADO</option>';
                            ?>


                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idProyecto']; ?>"><?php echo $row['Proyecto'].' - '.$row['descripcionProyecto']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <?php
                            $query = "SELECT * FROM FuenteFinanciamiento";
                            $resultado=$conexion->query($query);

                       ?>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fuete de Financiamiento</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Fuente" id="Fuente">
                          <?php 
                              echo '<option selected value="'.$fuente1.'">'.$fuente3.' - SELECCIONADO</option>';
                            ?>



                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idFuenteFinanciamiento']; ?>"><?php echo $row['FuenteFinanciamiento'].' - '.$row['descripcionFuenteFinanciamiento']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Unidad Presupuestal</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="UnidadPresupuestal" id="UnidadPresupuestal">
                            <option value="<?php echo substr($Centro, 0, 4); ?>"><?php echo substr($Centro, 0, 4); ?> </option>
                          </select>
                        </div>
                      </div>

                      <?php
                            $query = "SELECT * FROM Convenios";
                            $resultado=$conexion->query($query);

                       ?>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Convenios</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Convenios" id="Convenios">

                            <?php 
                              echo '<option selected value="'.$conveniosss1.'">'.$conveniosss.' - SELECCIONADO</option>';
                            ?>



                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idConvenio']; ?>"><?php echo $row['Convenio'].' - '.$row['descripcionConvenio']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

           <!-- licitaciones START -->

                     <?php
                            $query = "SELECT * FROM catcLicitaciones";
                            $resultado=$conexion->query($query);

                       ?>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Licitacion</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Licitacion" id="Licitacion">
         

                          <?php 
                              echo '<option selected value="'.$Licitacion1.'">'.$Licitacion.' - SELECCIONADO</option>';
                            ?>





                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idLicitacion']; ?>"><?php echo $row['Licitacion'].' - '.$row['descripcionLicitacion']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

      <!-- licitaciones END -->

                      <?php
                            $query = "SELECT * FROM catCategorias";
                            $resultado=$conexion->query($query);

                       ?>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoría</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Categoria" id="Categoria">
                           

                          <?php 
                              echo '<option selected value="'.$categorias1.'">'.$categorias1.' - '.$categorias2.' - SELECCIONADO</option>';
                            ?>


                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idcatCategorias']; ?>"><?php echo $row['idcatCategorias'].' - '.$row['DescripcionCategoria']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>



                      <?php





  switch ($Centro)

  {
    case '4401 - DESPACHO DIRECCIÓN':

      $ExtAcaMix = 'Academica';
    break;
    case '4402 - SECRETARÍA PLANEACIÓN':

    if ($username == 13854 || $username == 12409 )
    {

      $ExtAcaMix = 'Academica';
    }
    else {

      $ExtAcaMix = 'Academica';
    }




    break;
    case '4403 - SECRETARÍA ACADEMICA':
    
    $ExtAcaMix = 'Academica';
    break;
    case '4404 - SECRETARÍA EXTENSION':
 
    $ExtAcaMix = 'Academica';
    break;
    case '4405 - SECRETARÍA DE INVESTIGACIÓN Y POSGRADO':

    $ExtAcaMix = 'Academica';
    break;
    case '4406 - SECRETARÍA ADMINISTRATIVA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4407 - LABORATORIO DE SANITARIA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS':

    $ExtAcaMix = 'Mixto';
    break;
    case '4411 - LABORATORIO DE METALURGIA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4411 - LABORATORIO DE MINEROLOGÍA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4412 - LABORATORIO DE QUIMICA':
 
    $ExtAcaMix = 'Academica';
    break;
    case '4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4413 - LABORATORIO DE AUTOMÁTICA':

    $ExtAcaMix = 'Academica';
    break;
    case '4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS':

    $ExtAcaMix = 'Mixto';
    break;
    case '4415 - LABORATORIO DE HIDRAULICA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4416 - LABORATORIO DE SENSORES REMOTOS':

    $ExtAcaMix = 'Mixto';
    break;
    case '4417 - LABORATORIO DE TOPOGRAFIA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4417 - LABORATORIO DE FOTOGRAMETRIA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4418 - LABORATORIO DE RESONANCIA MAGNETICA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4419 - LABORATORIO DE FISICA':

    $ExtAcaMix = 'Academica';
    break;
    case '4462 - LABORATORIO DE GEOLOGIA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4462 - LABORATORIO DE GEOFISICA':

    $ExtAcaMix = 'Mixto';
    break;
    case '4449 - LAB DE AEROESPACIAL':

    $ExtAcaMix = 'Academica';
    break;
    case '4408 - COORDINACIÓN DE SERVICIO EXTERNO DE LABORATORIOS':

    $ExtAcaMix = 'Externo';
    break;
    case '4403 - COORDINACIÓN DE LABORATORIOS ACADÉMICOS':

    $ExtAcaMix = 'Academica';
    break;







    default:
      // code...
      break;
  }


  switch ($ExtAcaMix) {
    case 'Academica':
          $VersionArea = '
                    <select class="form-control" name="Area" id="Area">
                    <option value="'.$servicioExterno1.'">'.$servicioExterno2.'- SELECCIONADO</option>
                    <option value="1">UNIDAD ACADÉMICA</option>
                    </select>

                    ';

      break;


      case 'Externo':
            $VersionArea = '
                      <select class="form-control" name="Area" id="Area">
                      <option value="'.$servicioExterno1.'">'.$servicioExterno2.'- SELECCIONADO</option>
                      <option value="2">SERVICIO EXTERNO</option>
                      </select>

                      ';

        break;


        case 'Mixto':
              $VersionArea = '
                        <select class="form-control" name="Area" id="Area" >
                        <option value="'.$servicioExterno1.'">'.$servicioExterno2.'- SELECCIONADO</option>                        <option value="1" >UNIDAD ACADÉMICA</option>
                        <option value="2"">SERVICIO EXTERNO</option>
                        </select>

                        ';

          break;


    default:
      // code...
      break;
  }



 ?>




                





                      <?php
              $query = "SELECT * FROM Cuentas";
              $resultado=$conexion->query($query);

              ?>

                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuenta</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Cuenta" id="Cuenta">
                            <option value="0">Seleccione una cuenta</option>


                            <?php //while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['Cuenta']; ?>"><?php echo $row['Cuenta'].' - '.$row['Descripcion']; ?></option>
                            <?php //} ?>
                          </select>
                          <p style="color:red;">*Nota: Te recordamos que las cuentas deben de ser verificadas en el area de contabilidad con Blanca Carillo en la Ext. <b>2504</b></p>
                        </div>
                      </div> -->








                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Cuenta</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="SubCuenta" id="SubCuenta">

                          </select>
                          <p style="color:red;">*Nota: Te recordamos que las sub cuentas deben de ser verificadas en el area de contabilidad con Blanca Carillo en la Ext. <b>2504</b></p>

                        </div>
                      </div> -->


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
                          <input type="text" class="form-control" name="Fecha" id="Fecha" required="required" value="<?php echo ''.$d2.'/'.$m2.'/'.$y.'';?> " readonly>
                          <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                        </div>





                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Fondo">Motivos Requisición <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Motivos" required="required" class="form-control col-md-7 col-xs-12" placeholder="Motivos requisición..." name="Motivos" value="<?php echo $motivos;?>" onkeypress="return validarLetras(event)" maxlength="160"
                            onpaste="return true">



                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Solicitante <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Solicitante" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Solicitante" value="<?php echo $NombreUsuario; ?>" onkeyup="mayus(this);"
                          
                            onkeypress="return validarLetras(event)" readonly>

                        </div>
                      </div>

                      <input type="text" style ="display:none;" name="Solicitante" value="<?php echo $idUsuario?>">

                      


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Servicio Externo / Académico <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">


                          <?php

                                        echo $VersionArea;


                                      ?>

                                <input type="text" name="id" value="<?php echo $id;?>" style="display:none;" >

                        </div>
                      </div>
                  </div>

                </div>
              </div>
            </div>


            <!-- Final -->




                  <div class="ln_solid"></div>

                  <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-lg btn-primary" type="button">Cancel</button>
						  <button class="btn btn-lg btn-primary" type="reset">Reset</button>
              <input type="button" name="" class="btn btn-lg btn-success" value="Siguiente ->" onclick="ValidarForm();">
                        </div>
                      </div>

       


                  </form>


                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
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

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>


    <script type="text/javascript">
      $('#datatable').dataTable({
        'iDisplayLength': 100
      });
    </script>




    <script type="text/javascript">
      $(document).ready(function() {
        $("#Cuenta").change(function() {

          // alert('holi');

          // $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');

          $("#Cuenta option:selected").each(function() {
            Cuenta = $(this).val();
            $.post("getSubCuenta.php", {
              Cuenta: Cuenta
            }, function(data) {
              $("#SubCuenta").html(data);
            });
          });
        })
      });

      function updateChar() {

        var zone = document.getElementById("Area");

        if (zone.value == "2") {

          alert("You clicked Zone 1.");

          $(function() {
            $("#Funcion").val('0')
          });
        }
      }
    </script>







  </body>

</html>
