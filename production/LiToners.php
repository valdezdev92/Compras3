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
$NombreUsuario = $row['PrimerNombre'].' '.$row['PrimerApellido'];



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
                    <h2>Licitación de Toners y Tintas <small></small></h2>
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
                    <form id="demoform2" data-parsley-validate class="form-horizontal form-label-left" action="AltaRequi.php" method="post" name="demoform2">








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



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Facultad</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Facultad" id="Facultad">
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





  switch ($Centro)

  {
    case '4401 - DESPACHO DIRECCIÓN':
      $Funcion = 4;
      $Programa = 61;
      $ExtAcaMix = 'Academica';
    break;
    case '4402 - SECRETARÍA PLANEACIÓN':

    if ($username == 13854 || $username == 12409 )
    {
      $Funcion = 6;
      $Programa = 11;
      $ExtAcaMix = 'Academica';
    }
    else {
      $Funcion = 5;
      $Programa = 21;
      $ExtAcaMix = 'Academica';
    }




    break;
    case '4403 - SECRETARÍA ACADEMICA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Academica';
    break;
    case '4404 - SECRETARÍA EXTENSION':
    $Funcion = 3;
    $Programa = 91;
    $ExtAcaMix = 'Academica';
    break;
    case '4405 - SECRETARÍA DE INVESTIGACIÓN Y POSGRADO':
    $Funcion = 2;
    $Programa = 51;
    $ExtAcaMix = 'Academica';
    break;
    case '4406 - SECRETARÍA ADMINISTRATIVA':
    $Funcion = 5;
    $Programa = 11;
    $ExtAcaMix = 'Mixto';
    break;
    case '4407 - LABORATORIO DE SANITARIA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4411 - LABORATORIO DE METALURGIA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4411 - LABORATORIO DE MINEROLOGÍA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4412 - LABORATORIO DE QUIMICA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Academica';
    break;
    case '4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4413 - LABORATORIO DE AUTOMÁTICA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Academica';
    break;
    case '4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4415 - LABORATORIO DE HIDRAULICA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4416 - LABORATORIO DE SENSORES REMOTOS':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4417 - LABORATORIO DE TOPOGRAFIA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4417 - LABORATORIO DE FOTOGRAMETRIA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4418 - LABORATORIO DE RESONANCIA MAGNETICA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4419 - LABORATORIO DE FISICA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Academica';
    break;
    case '4462 - LABORATORIO DE GEOLOGIA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4462 - LABORATORIO DE GEOFISICA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
    break;
    case '4449 - LAB DE AEROESPACIAL':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Academica';
    break;
    case '4408 - COORDINACIÓN DE SERVICIO EXTERNO DE LABORATORIOS':
    $Funcion = 5;
    $Programa = 11;
    $ExtAcaMix = 'Externo';
    break;
    case '4403 - COORDINACIÓN DE LABORATORIOS ACADÉMICOS':
    $Funcion = 4;
    $Programa = 61;
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
                    <option value="1">UNIDAD ACADÉMICA</option>
                    </select>

                    ';

      break;


      case 'Externo':
            $VersionArea = '
                      <select class="form-control" name="Area" id="Area">
                      <option value="2">SERVICIO EXTERNO</option>
                      </select>

                      ';

        break;


        case 'Mixto':
              $VersionArea = '
                        <select class="form-control" name="Area" id="Area" >
                        <option value="0">Seleccione una opción</option>
                        <option value="1" >UNIDAD ACADÉMICA</option>
                        <option value="2"">SERVICIO EXTERNO</option>
                        </select>

                        ';

          break;


    default:
      // code...
      break;
  }



 ?>




                      <div class="form-group" style="display:none;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Función</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="Folio" value="0">
                        </div>
                      </div>



                      <div class="form-group" style="display:none;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Función</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Funcion" id="Funcion">
                            <option value="<?php Echo $Funcion; ?>"><?php Echo $Funcion; ?></option>

                          </select>
                        </div>
                      </div>
                      <div class="form-group" style="display:none;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Programa</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Programa" id="Programa">
                            <option value="<?php Echo $Programa; ?>"><?php Echo $Programa; ?></option>

                          </select>
                        </div>
                      </div>




                      <?php
              $query = "SELECT * FROM Cuentas";
              $resultado=$conexion->query($query);

              ?>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuenta</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Cuenta" id="Cuenta">
                            <option value="531">531 - PAPELERIA Y MATERIALES DE APOYO</option>

                          </select>
                          <!-- <p style="color:red;">*Nota: Te recordamos que las cuentas deben de ser verificadas en el area de contabilidad con Blanca Carillo en la Ext. <b>2504</b></p> -->
                        </div>
                      </div>








                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Cuenta</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="SubCuenta" id="SubCuenta">
                              <option value="6">6 - TINTAS Y TONERS</option>
                          </select>
                          <!-- <p style="color:red;">*Nota: Te recordamos que las sub cuentas deben de ser verificadas en el area de contabilidad con Blanca Carillo en la Ext. <b>2504</b></p> -->

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
                          <input type="text" class="form-control" name="Fecha" id="Fecha" required="required" value="<?php echo ''.$d2.'/'.$m2.'/'.$y.'';?> " readonly>
                          <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                        </div>





                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Fondo">Motivos Requisición <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Motivos" required="required" class="form-control col-md-7 col-xs-12" placeholder="Motivos requisición..." name="Motivos" value="" onkeypress="return validarLetras(event)" maxlength="160"
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


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Servicio Externo / Académico <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">


                          <?php

                                        echo $VersionArea;


                                      ?>

                        </div>
                      </div>
                  </div>

                </div>
              </div>
            </div>


            <!-- Final -->




<div class="row">




            <!-- Inicio -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Artículos | Requisición | </h2>
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


                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">

                          <th class="column-title">Artículo </th>
                          <th class="column-title">Cantidad </th>
                          <th class="column-title">Unidad </th>
                          <th class="column-title">Descripción </th>
                          </th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>

                      <tbody>


                        <tr class="odd pointer">

                          <td class=" ">1</td>
                          <td class=" ">

                            <input type="text" name="Cantidad01" value="" onkeypress="return valida(event)" onpaste="return true">

                          </td>

                          <td class=" ">


                            <select style="width:160px" class="form-control disabled" name="Unidad01" >
                              <option value="PIEZA" selected >PIEZA</option>




                            </select>

                          </td>


                          </td>


                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion01" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>

                          <td class=" "> <input type="text" name="Observaciones01" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>

                        <tr class="odd pointer">

                          <td class=" ">2</td>
                          <td class=" "> <input type="text" name="Cantidad02" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <select style="width:160px" class="form-control" name="Unidad02" >
                              <option value="PIEZA" selected >PIEZA</option>




                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion02" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones02" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>


                        <tr class="odd pointer">


                          <td class=" ">3</td>
                          <td class=" "> <input type="text" name="Cantidad03" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <select style="width:160px" class="form-control" name="Unidad03" >
                              <option value="PIEZA" selected >PIEZA</option>




                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion03" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones03" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>


                        <tr class="odd pointer">

                          <td class=" ">4</td>
                          <td class=" "> <input type="text" name="Cantidad04" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                            <select style="width:160px" class="form-control" name="Unidad04" >
                              <option value="PIEZA" selected >PIEZA</option>





                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion04" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones04" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>


                        <tr class="odd pointer">

                          <td class=" ">5</td>
                          <td class=" "> <input type="text" name="Cantidad05" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                            <select style="width:160px" class="form-control" name="Unidad05" >
                              <option value="PIEZA" selected >PIEZA</option>





                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion05" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones05" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>



                        <tr class="odd pointer">

                          <td class=" ">6</td>
                          <td class=" "> <input type="text" name="Cantidad06" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                            <select style="width:160px" class="form-control" name="Unidad06" >
                              <option value="PIEZA" selected >PIEZA</option>





                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion06" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones06" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>



                        <tr class="odd pointer">

                          <td class=" ">7</td>
                          <td class=" "> <input type="text" name="Cantidad07" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                            <select style="width:160px" class="form-control" name="Unidad07" >
                              <option value="PIEZA" selected >PIEZA</option>





                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion07" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones07" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>




                        <tr class="odd pointer">

                          <td class=" ">8</td>
                          <td class=" "> <input type="text" name="Cantidad08" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                            <select style="width:160px" class="form-control" name="Unidad08" >
                              <option value="PIEZA" selected >PIEZA</option>





                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion08" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones08" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>



                        <tr class="odd pointer">

                          <td class=" ">9</td>
                          <td class=" "> <input type="text" name="Cantidad09" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                            <select style="width:160px" class="form-control" name="Unidad09" >
                              <option value="PIEZA" selected >PIEZA</option>





                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion09" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones09" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>




                        <tr class="odd pointer">

                          <td class=" ">10</td>
                          <td class=" "> <input type="text" name="Cantidad10" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                            <select style="width:160px" class="form-control" name="Unidad10" >
                              <option value="PIEZA" selected >PIEZA</option>





                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion10" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones10" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>





                        <tr class="odd pointer">

                          <td class=" ">11</td>
                          <td class=" "> <input type="text" name="Cantidad11" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                            <select style="width:160px" class="form-control" name="Unidad11" >
                              <option value="PIEZA" selected >PIEZA</option>





                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion11" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones11" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>


                        <tr class="odd pointer">

                          <td class=" ">12</td>
                          <td class=" "> <input type="text" name="Cantidad12" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                            <select style="width:160px" class="form-control" name="Unidad12" >
                              <option value="PIEZA" selected >PIEZA</option>





                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion12" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones12" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>




                        <tr class="odd pointer">

                          <td class=" ">13</td>
                          <td class=" "> <input type="text" name="Cantidad13" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" ">


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                            <select style="width:160px" class="form-control" name="Unidad13" >
                              <option value="PIEZA" selected >PIEZA</option>





                            </select>

                          </td>
                          <td class=" ">
                            <!-- <input type="text" name="Descripcion01" value="" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="500">  -->
                            <select class="form-control" name="Descripcion13" style="width:700px" >
                              <option value="">Selecciona una opción... </option>

                              <?php
                              require '../ConexionDB.php';
                              $sql = 'SELECT *  FROM Toners ';
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["Descripcion"].'"> '.$row["Descripcion"].' </option>';
                                       }
                               ?>






                            </select>

                          </td>
                          <td class=" "> <input type="text" name="Observaciones13" value="" onkeyup=" " style="display: none;" onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          </td>
                        </tr>



                        <tr class="odd pointer">

                          <td class=" " >14</td>
                          <td class=" " > <input readonly type="text" name="Cantidad14" value="" onkeypress="return valida(event)" onpaste="return true"> </td>
                          <td class=" " >


                            <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)"> -->
                            <select style="width:160px" class="form-control" name="Unidad14" >
                              <option value="PIEZA">PIEZA</option>

                            </select>

                          </td>
                          <td class=" " > <input readonly type="text" name="Descripcion14" value="MATERIAL DE LICITACIÓN SEGÚN CONTRATO" onkeyup=" " onkeypress="return validarLetras(event)" style="width:700px" onpaste="return true" maxlength="120"> </td>
                          <!-- <td class=" "> <input type="text" name="Observaciones14" value="" onkeyup=" " onkeypress="return validarLetras(event)"  style="width:700px" onpaste="return true" maxlength="120"> </td> -->
                          </td>
                        </tr>





                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="ln_solid"></div>

                  <!-- test 1 -->




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
                              <textarea class="form-control" rows="5" placeholder='Favor de colocar toda la información necesaria para su requisición.' name="Observaciones01" onkeypress="return validarLetras(event)" onpaste="return true"
                                maxlength="1100"></textarea>
                            </div>
                          </div>

                        </td>





                      </tr>




                      </tr>
                    </tbody>
                  </table>

                  <!-- test 2 -->


                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">

                      <!-- <button type="submit" class="btn btn-success">Guardar!</button> -->

                      <div class="col-md-11">

                      </div>

                      <div class="col-md-1">
                        <!-- <button type="submit" class="btn btn-success btn-lg">Guardar!</button> -->
                        <span> <input type="button" name="" class="btn btn-lg btn-success" value="Guardar" onclick="ValidarForm();"> </span>

                      </div>

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
