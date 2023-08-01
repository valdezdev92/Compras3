<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';

date_default_timezone_set('America/Chihuahua');


$host_db = "localhost";
$user_db = "root";
$pass_db = "sr1920la";
$db_name = "Compras";
$tbl_name = "Usuarios";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}


$username = $_SESSION['username'];

$sql = "SELECT * FROM Usuarios WHERE Usuario = '$username'";

// echo $sql;

$result = $conexion->query($sql);


if ($result->num_rows > 0) {
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);


$Centro = $row['Centro'];
$NombreUsuario = $row['PrimerNombre'].' '.$row['PrimerApellido'];

$IdRequi = $_GET['IdRequi'];




// echo $Centro;  //Centro y descripcion

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
      patron = /[A-Za-z0-9-.,@ñÑ\s\t]/; // 4

      te = String.fromCharCode(tecla); // 5
      return patron.test(te); // 6
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
      //
      // alert (''+ValorIdUnidad);


    }
  </script>


  <body class="nav-md">

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
              <!-- <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->

              <div class="clearfix"></div>

              <div class="row">

                <!-- Inicio -->

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Modificacion  Requisición<small></small></h2>
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
                      <form id="demoform2" data-parsley-validate class="form-horizontal form-label-left" action="UpdateRequi.php" method="post" name="demoform2">






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






                          }


                       ?>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Folio</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="Folio" id="Folio">
                             <option value="<?php echo $Folio; ?>"><?php echo $Folio; ?></option>

                           </select>

                                <input type="text" name="IdRequi" value="<?php echo $IdRequi ?>" style="display:none;">
                                <input type="text" name="Fondo" value="<?php echo $Fondo ?>" style="display:none;">
                                <input type="text" name="UPresupuestal" value="<?php echo $UPresupuestal ?>" style="display:none;">
                                <input type="text" name="SubCuenta01" value="<?php echo $SubCuenta01 ?>" style="display:none;">
                                <input type="text" name="SubCuenta02" value="<?php echo $SubCuenta02 ?>" style="display:none;">
                                <input type="text" name="SubCuenta03" value="<?php echo $SubCuenta03 ?>" style="display:none;">
                                <input type="text" name="SubCuenta04" value="<?php echo $SubCuenta04 ?>" style="display:none;">
                                <input type="text" name="SubCuenta05" value="<?php echo $SubCuenta05 ?>" style="display:none;">
                                <input type="text" name="SubCuenta06" value="<?php echo $SubCuenta06 ?>" style="display:none;">
                                <input type="text" name="SubCuenta07" value="<?php echo $SubCuenta07 ?>" style="display:none;">
                                <input type="text" name="SubCuenta08" value="<?php echo $SubCuenta08 ?>" style="display:none;">
                                <input type="text" name="SubCuenta09" value="<?php echo $SubCuenta09 ?>" style="display:none;">
                                <input type="text" name="SubCuenta10" value="<?php echo $SubCuenta10 ?>" style="display:none;">
                                <input type="text" name="SubCuenta11" value="<?php echo $SubCuenta11 ?>" style="display:none;">
                                <input type="text" name="SubCuenta12" value="<?php echo $SubCuenta12 ?>" style="display:none;">
                                <input type="text" name="SubCuenta13" value="<?php echo $SubCuenta13 ?>" style="display:none;">
                                <input type="text" name="SubCuenta14" value="<?php echo $SubCuenta14 ?>" style="display:none;">





                              </div>
                            </div>




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



                                <!-- <option value="4401 - SECRETARÍA DIRECCIÓN">4401 - SECRETARÍA DIRECCIÓN</option>
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
                                <option value="4462 - LABORATORIO DE GEOLOGIA">4462 - LABORATORIO DE GEOLOGIA</option>
                                <option value="4462 - LABORATORIO DE GEOFISICA">4462 - LABORATORIO DE GEOFISICA</option>

                                <option value="4449 - LAB DE AEROESPACIAL">4449 - LAB DE AEROESPACIAL</option> -->


                              </select>
                              </div>
                            </div>

                            <!-- <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Folio">Folio <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Folio" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Folio" value="" onkeypress="return Folio(event)" maxlength="6">

                            </div>
                          </div> -->

                            <?php





  switch ($Centro)

  {
    case '4401 - SECRETARÍA DIRECCIÓN':
      $Funcion = 4;
      $Programa = 61;
      $ExtAcaMix = 'Academica';
    break;
    case '4402 - SECRETARÍA PLANEACIÓN':
    $Funcion = 5;
    $Programa = 21;
    $ExtAcaMix = 'Academica';
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
    $ExtAcaMix = 'Academica';
    break;
    case '4407 - LABORATORIO DE SANITARIA':
    $Funcion = 5;
    $Programa = 11;
    $ExtAcaMix = 'Mixto';
    break;
    case '4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS':
    $Funcion = 5;
    $Programa = 11;
    $ExtAcaMix = 'Mixto';
    break;
    case '4411 - LABORATORIO DE METALURGIA':
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
    $ExtAcaMix = 'Academica';
    break;
    case '4413 - LABORATORIO DE AUTOMÁTICA':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Academica';
    break;
    case '4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS':
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Academica';
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
    $Funcion = 4;
    $Programa = 61;
    $ExtAcaMix = 'Mixto';
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
                        <select class="form-control" name="Area" id="Area">
                        <option value="0">Seleccione una opción</option>
                        <option value="1">UNIDAD ACADÉMICA</option>
                        <option value="2">SERVICIO EXTERNO</option>
                        </select>

                        ';

          break;


    default:
      // code...
      break;
  }



 ?>








                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Función</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" name="Funcion" id="Funcion">
                                <option value="<?php Echo $Funcion; ?>" ><?php Echo $Funcion; ?></option>

                              </select>
                                </div>
                              </div>
                              <div class="form-group">
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


              $query = "SELECT * FROM Cuentas";
              $resultado=$conexion->query($query);

              ?>

                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuenta</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="Cuenta" id="Cuenta">
                                      <option value="0">Seleccione una cuenta</option>


                                      <?php while($row = $resultado->fetch_assoc()) { ?>

                                          <option value="<?php echo $row['Cuenta']; ?>"><?php echo $row['Cuenta'].' - '.$row['Descripcion']; ?></option>
                                          <?php } ?>
                              </select>
                                  </div>
                                </div>








                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Cuenta</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="SubCuenta" id="SubCuenta">

                              </select>
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
                                      <input type="text" id="Motivos" required="required" class="form-control col-md-7 col-xs-12" placeholder="Motivos requisicion..." name="Motivos" value="<?php echo $Motivos; ?>" onkeyup=" " onkeypress="return validarLetras(event)" onpaste="return false">



                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Solicitante <span class="required">*</span>
                            </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" id="Solicitante" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Solicitante" value="<?php echo $NombreUsuario; ?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" readonly>

                                    </div>
                                  </div>


                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Servicio Externo / Academico <span class="required">*</span>
                            </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">


                                      <?php

                                        echo $VersionArea;


                                      ?>










                                    </div>
                                  </div>


                                  <!-- <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Autorizado</label>
                              <div class="col-md-9 col-sm-9 col-xs-12">



                                <select class="form-control" name="Estatus" id="Estatus">

                                    <option value="3">Seleccione una opcion</option>
                                    <option value="0">No Autorizado</option>
                                    <option value="1">Autorizado</option>


                                  </select>

                              </div>

                            </div> -->
                    </div>










                    <!-- <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                            </div>
                          </div> -->
                    <!-- <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="female"> Female
                                </label>
                              </div>
                            </div>
                          </div> -->
                    <!-- <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div> -->
                    <!-- <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                              <button type="submit" class="btn btn-warning">Modificar</button>
                            </div>
                          </div>

                        </form> -->
                  </div>
                </div>
              </div>


              <!-- Final -->



              <div class="clearfix"></div>



              <!-- Inicio -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Articulos | Requi |  </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
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

                    <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">

                            <th class="column-title">Articulo </th>
                            <th class="column-title">Cantidad </th>
                            <th class="column-title">Unidad </th>
                            <th class="column-title">Descripción </th>
                            <th class="column-title">Observaciones </th>
                            </th>

                          </tr>
                        </thead>

                        <tbody>


                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad01" value="<?php echo $Cantidad01 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad01">

                                    <option value="<?php echo $Unidad01 ?>"><?php echo $Unidad01 ?></option>

                                    <option value="PIEZA">PIEZA</option>
                                    <option value="SERVICIO">SERVICIO</option>
                                    <option value="KG">KILOGRAMO</option>
                                    <option value="GRAMOS">GRAMOS</option>
                                    <option value="METROS">METROS</option>
                                    <option value="CENTIMETROS">CENTIMETROS</option>
                                    <option value="M2">METROS CUADRADOS</option>
                                    <option value="M3">METROS CUBICOS</option>
                                    <option value="LITROS">LITROS</option>
                                    <option value="ML">MILILITROS</option>
                                    <option value="DIA">DÍA</option>

                                  </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion01" value="<?php echo $Descripcion01 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones01" value="<?php echo $Observaciones01 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>


                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad02" value="<?php echo $Cantidad02 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad01" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad02">

      <option value="<?php echo $Unidad02 ?>"><?php echo $Unidad02 ?></option>

      <option value="PIEZA">PIEZA</option>
      <option value="SERVICIO">SERVICIO</option>
      <option value="KG">KILOGRAMO</option>
      <option value="GRAMOS">GRAMOS</option>
      <option value="METROS">METROS</option>
      <option value="CENTIMETROS">CENTIMETROS</option>
      <option value="M2">METROS CUADRADOS</option>
      <option value="M3">METROS CUBICOS</option>
      <option value="LITROS">LITROS</option>
      <option value="ML">MILILITROS</option>
      <option value="DIA">DÍA</option>

    </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion02" value="<?php echo $Descripcion02 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones02" value="<?php echo $Observaciones02 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>

                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad03" value="<?php echo $Cantidad03 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad03" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad03">

      <option value="<?php echo $Unidad03 ?>"><?php echo $Unidad03 ?></option>

      <option value="PIEZA">PIEZA</option>
      <option value="SERVICIO">SERVICIO</option>
      <option value="KG">KILOGRAMO</option>
      <option value="GRAMOS">GRAMOS</option>
      <option value="METROS">METROS</option>
      <option value="CENTIMETROS">CENTIMETROS</option>
      <option value="M2">METROS CUADRADOS</option>
      <option value="M3">METROS CUBICOS</option>
      <option value="LITROS">LITROS</option>
      <option value="ML">MILILITROS</option>
      <option value="DIA">DÍA</option>

    </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion03" value="<?php echo $Descripcion03 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones03" value="<?php echo $Observaciones03 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>


                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad04" value="<?php echo $Cantidad04 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad04" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad04">

          <option value="<?php echo $Unidad04 ?>"><?php echo $Unidad04 ?></option>

          <option value="PIEZA">PIEZA</option>
          <option value="SERVICIO">SERVICIO</option>
          <option value="KG">KILOGRAMO</option>
          <option value="GRAMOS">GRAMOS</option>
          <option value="METROS">METROS</option>
          <option value="CENTIMETROS">CENTIMETROS</option>
          <option value="M2">METROS CUADRADOS</option>
          <option value="M3">METROS CUBICOS</option>
          <option value="LITROS">LITROS</option>
          <option value="ML">MILILITROS</option>
          <option value="DIA">DÍA</option>

        </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion04" value="<?php echo $Descripcion04 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones04" value="<?php echo $Observaciones04 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>



                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad05" value="<?php echo $Cantidad05 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad05" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad05">

              <option value="<?php echo $Unidad05 ?>"><?php echo $Unidad05 ?></option>

              <option value="PIEZA">PIEZA</option>
              <option value="SERVICIO">SERVICIO</option>
              <option value="KG">KILOGRAMO</option>
              <option value="GRAMOS">GRAMOS</option>
              <option value="METROS">METROS</option>
              <option value="CENTIMETROS">CENTIMETROS</option>
              <option value="M2">METROS CUADRADOS</option>
              <option value="M3">METROS CUBICOS</option>
              <option value="LITROS">LITROS</option>
              <option value="ML">MILILITROS</option>
              <option value="DIA">DÍA</option>

            </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion05" value="<?php echo $Descripcion05 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones05" value="<?php echo $Observaciones05 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>



                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad06" value="<?php echo $Cantidad06 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad06" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad06">

                <option value="<?php echo $Unidad06 ?>"><?php echo $Unidad06 ?></option>

                <option value="PIEZA">PIEZA</option>
                <option value="SERVICIO">SERVICIO</option>
                <option value="KG">KILOGRAMO</option>
                <option value="GRAMOS">GRAMOS</option>
                <option value="METROS">METROS</option>
                <option value="CENTIMETROS">CENTIMETROS</option>
                <option value="M2">METROS CUADRADOS</option>
                <option value="M3">METROS CUBICOS</option>
                <option value="LITROS">LITROS</option>
                <option value="ML">MILILITROS</option>
                <option value="DIA">DÍA</option>

              </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion06" value="<?php echo $Descripcion06 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones06" value="<?php echo $Observaciones06 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>



                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad07" value="<?php echo $Cantidad07 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad07" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad07">

          <option value="<?php echo $Unidad07 ?>"><?php echo $Unidad07 ?></option>

          <option value="PIEZA">PIEZA</option>
          <option value="SERVICIO">SERVICIO</option>
          <option value="KG">KILOGRAMO</option>
          <option value="GRAMOS">GRAMOS</option>
          <option value="METROS">METROS</option>
          <option value="CENTIMETROS">CENTIMETROS</option>
          <option value="M2">METROS CUADRADOS</option>
          <option value="M3">METROS CUBICOS</option>
          <option value="LITROS">LITROS</option>
          <option value="ML">MILILITROS</option>
          <option value="DIA">DÍA</option>

        </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion07" value="<?php echo $Descripcion07 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones07" value="<?php echo $Observaciones07 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>



                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad08" value="<?php echo $Cantidad08 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad08" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad08">

                          <option value="<?php echo $Unidad08 ?>"><?php echo $Unidad08 ?></option>

                          <option value="PIEZA">PIEZA</option>
                          <option value="SERVICIO">SERVICIO</option>
                          <option value="KG">KILOGRAMO</option>
                          <option value="GRAMOS">GRAMOS</option>
                          <option value="METROS">METROS</option>
                          <option value="CENTIMETROS">CENTIMETROS</option>
                          <option value="M2">METROS CUADRADOS</option>
                          <option value="M3">METROS CUBICOS</option>
                          <option value="LITROS">LITROS</option>
                          <option value="ML">MILILITROS</option>
                          <option value="DIA">DÍA</option>

                        </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion08" value="<?php echo $Descripcion08 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones08" value="<?php echo $Observaciones08 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>




                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad09" value="<?php echo $Cantidad09 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad09" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad09">

                                                                                                                                                                                                                                                                    <option value="<?php echo $Unidad09 ?>"><?php echo $Unidad09 ?></option>

                                                                                                                                                                                                                                                                    <option value="PIEZA">PIEZA</option>
                                                                                                                                                                                                                                                                    <option value="SERVICIO">SERVICIO</option>
                                                                                                                                                                                                                                                                    <option value="KG">KILOGRAMO</option>
                                                                                                                                                                                                                                                                    <option value="GRAMOS">GRAMOS</option>
                                                                                                                                                                                                                                                                    <option value="METROS">METROS</option>
                                                                                                                                                                                                                                                                    <option value="CENTIMETROS">CENTIMETROS</option>
                                                                                                                                                                                                                                                                    <option value="M2">METROS CUADRADOS</option>
                                                                                                                                                                                                                                                                    <option value="M3">METROS CUBICOS</option>
                                                                                                                                                                                                                                                                    <option value="LITROS">LITROS</option>
                                                                                                                                                                                                                                                                    <option value="ML">MILILITROS</option>
                                                                                                                                                                                                                                                                    <option value="DIA">DÍA</option>

                                                                                                                                                                                                                                                                  </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion09" value="<?php echo $Descripcion09 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones09" value="<?php echo $Observaciones09 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>




                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad10" value="<?php echo $Cantidad10 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad10" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad10">

                                                                                                                                                                                                                                                                                                <option value="<?php echo $Unidad10 ?>"><?php echo $Unidad10 ?></option>

                                                                                                                                                                                                                                                                                                <option value="PIEZA">PIEZA</option>
                                                                                                                                                                                                                                                                                                <option value="SERVICIO">SERVICIO</option>
                                                                                                                                                                                                                                                                                                <option value="KG">KILOGRAMO</option>
                                                                                                                                                                                                                                                                                                <option value="GRAMOS">GRAMOS</option>
                                                                                                                                                                                                                                                                                                <option value="METROS">METROS</option>
                                                                                                                                                                                                                                                                                                <option value="CENTIMETROS">CENTIMETROS</option>
                                                                                                                                                                                                                                                                                                <option value="M2">METROS CUADRADOS</option>
                                                                                                                                                                                                                                                                                                <option value="M3">METROS CUBICOS</option>
                                                                                                                                                                                                                                                                                                <option value="LITROS">LITROS</option>
                                                                                                                                                                                                                                                                                                <option value="ML">MILILITROS</option>
                                                                                                                                                                                                                                                                                                <option value="DIA">DÍA</option>

                                                                                                                                                                                                                                                                                              </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion10" value="<?php echo $Descripcion10 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones10" value="<?php echo $Observaciones10 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>




                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad11" value="<?php echo $Cantidad11 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad11" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad11">

                                                                                                                                                                                                                                                                                                                            <option value="<?php echo $Unidad11 ?>"><?php echo $Unidad11 ?></option>

                                                                                                                                                                                                                                                                                                                            <option value="PIEZA">PIEZA</option>
                                                                                                                                                                                                                                                                                                                            <option value="SERVICIO">SERVICIO</option>
                                                                                                                                                                                                                                                                                                                            <option value="KG">KILOGRAMO</option>
                                                                                                                                                                                                                                                                                                                            <option value="GRAMOS">GRAMOS</option>
                                                                                                                                                                                                                                                                                                                            <option value="METROS">METROS</option>
                                                                                                                                                                                                                                                                                                                            <option value="CENTIMETROS">CENTIMETROS</option>
                                                                                                                                                                                                                                                                                                                            <option value="M2">METROS CUADRADOS</option>
                                                                                                                                                                                                                                                                                                                            <option value="M3">METROS CUBICOS</option>
                                                                                                                                                                                                                                                                                                                            <option value="LITROS">LITROS</option>
                                                                                                                                                                                                                                                                                                                            <option value="ML">MILILITROS</option>
                                                                                                                                                                                                                                                                                                                            <option value="DIA">DÍA</option>

                                                                                                                                                                                                                                                                                                                          </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion11" value="<?php echo $Descripcion11 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones11" value="<?php echo $Observaciones11 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>




                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad12" value="<?php echo $Cantidad12 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad12" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad12">

                                                                                                                                                                                                                                                                                                                                                        <option value="<?php echo $Unidad12 ?>"><?php echo $Unidad12 ?></option>

                                                                                                                                                                                                                                                                                                                                                        <option value="PIEZA">PIEZA</option>
                                                                                                                                                                                                                                                                                                                                                        <option value="SERVICIO">SERVICIO</option>
                                                                                                                                                                                                                                                                                                                                                        <option value="KG">KILOGRAMO</option>
                                                                                                                                                                                                                                                                                                                                                        <option value="GRAMOS">GRAMOS</option>
                                                                                                                                                                                                                                                                                                                                                        <option value="METROS">METROS</option>
                                                                                                                                                                                                                                                                                                                                                        <option value="CENTIMETROS">CENTIMETROS</option>
                                                                                                                                                                                                                                                                                                                                                        <option value="M2">METROS CUADRADOS</option>
                                                                                                                                                                                                                                                                                                                                                        <option value="M3">METROS CUBICOS</option>
                                                                                                                                                                                                                                                                                                                                                        <option value="LITROS">LITROS</option>
                                                                                                                                                                                                                                                                                                                                                        <option value="ML">MILILITROS</option>
                                                                                                                                                                                                                                                                                                                                                        <option value="DIA">DÍA</option>

                                                                                                                                                                                                                                                                                                                                                      </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion12" value="<?php echo $Descripcion12 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones12" value="<?php echo $Observaciones12 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>




                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad13" value="<?php echo $Cantidad13 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad13" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad13">

                                                                                                                                                                                                                                                                                                                                                                                    <option value="<?php echo $Unidad13 ?>"><?php echo $Unidad13 ?></option>

                                                                                                                                                                                                                                                                                                                                                                                    <option value="PIEZA">PIEZA</option>
                                                                                                                                                                                                                                                                                                                                                                                    <option value="SERVICIO">SERVICIO</option>
                                                                                                                                                                                                                                                                                                                                                                                    <option value="KG">KILOGRAMO</option>
                                                                                                                                                                                                                                                                                                                                                                                    <option value="GRAMOS">GRAMOS</option>
                                                                                                                                                                                                                                                                                                                                                                                    <option value="METROS">METROS</option>
                                                                                                                                                                                                                                                                                                                                                                                    <option value="CENTIMETROS">CENTIMETROS</option>
                                                                                                                                                                                                                                                                                                                                                                                    <option value="M2">METROS CUADRADOS</option>
                                                                                                                                                                                                                                                                                                                                                                                    <option value="M3">METROS CUBICOS</option>
                                                                                                                                                                                                                                                                                                                                                                                    <option value="LITROS">LITROS</option>
                                                                                                                                                                                                                                                                                                                                                                                    <option value="ML">MILILITROS</option>
                                                                                                                                                                                                                                                                                                                                                                                    <option value="DIA">DÍA</option>

                                                                                                                                                                                                                                                                                                                                                                                  </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion13" value="<?php echo $Descripcion13 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones13" value="<?php echo $Observaciones13 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>




                          <tr class="odd pointer">

                            <td class=" ">1</td>
                            <td class=" "> <input type="text" name="Cantidad14" value="<?php echo $Cantidad14 ?>" onkeypress="return valida(event)" onpaste="return false"></td>


                            <td class=" ">


                              <!-- <input type="text" name="Unidad14" value="" onkeyup=" " onkeypress="return validarLetras(event)">  -->
                              <select style="width:160px" class="form-control" name="Unidad14">

                                                                                                                                                                                                                                                                                                                                                                                                                <option value="<?php echo $Unidad14 ?>"><?php echo $Unidad14 ?></option>

                                                                                                                                                                                                                                                                                                                                                                                                                <option value="PIEZA">PIEZA</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="SERVICIO">SERVICIO</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="KG">KILOGRAMO</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="GRAMOS">GRAMOS</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="METROS">METROS</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="CENTIMETROS">CENTIMETROS</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="M2">METROS CUADRADOS</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="M3">METROS CUBICOS</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="LITROS">LITROS</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="ML">MILILITROS</option>
                                                                                                                                                                                                                                                                                                                                                                                                                <option value="DIA">DÍA</option>

                                                                                                                                                                                                                                                                                                                                                                                                              </select>

                            </td>


                            <td class=" "> <input type="text" name="Descripcion14" value="<?php echo $Descripcion14 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            <td class=" "> <input type="text" name="Observaciones14" value="<?php echo $Observaciones14 ?>" onkeyup=" " onkeypress="return validarLetras(event)" style="width:350px" onpaste="return false"> </td>
                            </td>
                          </tr>


                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="ln_solid"></div>
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

                    <input type="text" name="Garantia01" value="" style="display: none;">
                    <input type="text" name="Garantia02" value="" style="display: none;">
                    <input type="text" name="Garantia03" value="" style="display: none;">


                    </form>


                  </div>
                </div>
              </div>


              <!-- Final -->





              <!-- eclet table -->


              <!--  Excel table end-->




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

      <!-- <script type="text/javascript">
   if (jQuery) {
     alert("jQuery esta cargado");
} else {
      alert("jQuery no esta cargado");
}</script> -->


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
      </script>


      <?php echo $Centro; ?>

    </body>

  </html>
