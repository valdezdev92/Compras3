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


          function validarLeras(e) { // 1
            tecla = (document.all) ? e.keyCode : e.which; // 2
            if (tecla == 8) return true; // 3
            patron = /[A-Za-z\s]/; // 4
            te = String.fromCharCode(tecla); // 5
            return patron.test(te); // 6
          }



          function valida(e) {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
              return true;
            }

            // Patron de entrada, en este caso solo acepta numeros
            patron = /[0-9.]/;
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
            patron = /[A-Za-z0-9-.,\s\t]/; // 4

            te = String.fromCharCode(tecla); // 5
            return patron.test(te); // 6
          }


          function ValidarForm() {




            var ValorIdUnidad = $('#DepSolicitante').val();
            var ValorFolio = $('#Folio').val();
            var ValorMotivos = $('#Motivos').val();
            var ValorSolicitante = $('#Solicitante').val();

            if (ValorIdUnidad == 0)

            {
              alert('Favor de seleccionar un departamento solicitante');
            } else if (ValorFolio == "") {
              alert('Favor de proporcionar un folio');

            } else if (ValorMotivos == "") {
              alert('Favor de proporcionar motivos de requisición');

            } else if (ValorSolicitante == "")

            {
              alert('Favor de proporcionar soliciante');
            } else {

              document.demoform2.submit();

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


                    <?php $IdRequi=$_GET['id']; ?>
                    <?php $Folio=$_GET['id']; ?>









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





                 $sql = 'SELECT *, b.Descripcion AS Departamento FROM Requi a INNER JOIN CatcUnidades b on a.IdUnidad = b.IdUnidad WHERE a.IdRequi = '.$IdRequi.' ';
                 $resultado = $conexion->query($sql);

                 while ($row = $resultado->fetch_assoc() )
                  {

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












                     }


                  ?>



                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Facultad</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="Facultad" id="Facultad" readonly="readonly">
                            <option value="4400">4400 FACULTAD DE INGENIERIA</option>

                          </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento Solicitante</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="DepSolicitante" id="DepSolicitante" readonly="readonly">


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
                              <input type="text" class="form-control" name="Fecha" id="Fecha" required="required" readonly="readonly" value="<?php echo ''.$d2.'/'.$m2.'/'.$y.'';?> ">
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
                              <input type="text" id="Solicitante" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Solicitante" readonly="readonly" value="<?php echo $Solicitante;?>" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">

                            </div>
                          </div>

                          <div class="ln_solid"></div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Fondo <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Fondo"  class="form-control col-md-7 col-xs-12" placeholder="0" name="Fondo" onkeypress="return valida(event)" value="<?php echo $Fondo;?>">

                            </div>


                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Funcion <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Funcion" class="form-control col-md-7 col-xs-12" placeholder="0" name="Funcion" onkeypress="return valida(event)" value="<?php echo $Funcion;?>">

                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Programa <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Programa"  class="form-control col-md-7 col-xs-12" placeholder="0" name="Programa" onkeypress="return valida(event)" value="<?php echo $Programa;?>">

                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Unidad Presupuestal <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="UPresupuestal"  class="form-control col-md-7 col-xs-12" placeholder="0" name="UPresupuestal" onkeypress="return valida(event)" value="<?php echo $UPresupuestal;?>">

                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Cuenta <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="Cuenta"  class="form-control col-md-7 col-xs-12" placeholder="0" name="Cuenta" onkeypress="return valida(event)" value="<?php echo $Cuenta;?>">




                              <input type="text" id="IdRequi" class="form-control col-md-7 col-xs-12" name="IdRequi" value="<?php echo $IdRequi;?>" style="display:none;">


                            </div>
                          </div>


                          <div class="ln_solid"></div>


                          <!--Seccion proveedores  -->

                          <div class="form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante" style="color:red;">No. Folio Adquisiciones<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="FolioAdqui"  class="form-control col-md-7 col-xs-12" placeholder="000000" name="FolioAdqui" value="0" onkeypress="return valida(event)" value="">

                            </div>

                            <div class="col-md-1 col-sm-1 col-xs-1">
                              <input type="submit" class="btn btn-success"></button>


                            </div>
                          </div>

                          <div class="ln_solid" ></div>

                          <div class="form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Buscar Proveedor # 1
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                              <input type="text" id="NumProveedor01"  class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor01" onkeypress="return validarLeras(event)"  value="">
                                </div>

                                <div class="col-md-1 col-sm-1 col-xs-1">
                                  <input type="button" name="" value="Buscar" onclick="BuscarProveedor1()">


                                </div>
                          </div>


                          <div class="form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Buscar Proveedor # 2
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="NumProveedor02"  class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor02" onkeypress="return validarLeras(event)" value="">



                            </div>

                            <div class="col-md-1 col-sm-1 col-xs-1">
                              <input type="button" name="" value="Buscar" onclick="BuscarProveedor2()">


                            </div>
                          </div>


                          <div class="form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Buscar Proveedor # 3
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                              <input type="text" id="NumProveedor03" class="form-control col-md-7 col-xs-12" placeholder="0" name="NumProveedor03" onkeypress="return validarLeras(event)" value="">



                            </div>

                            <div class="col-md-1 col-sm-1 col-xs-1">
                              <input type="button" name="" value="Buscar" onclick="BuscarProveedor3()">


                            </div>
                          </div>









                          <div class="ln_solid" ></div>

                          <div class="form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 1
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <!-- <input type="text" id="NomProveedor01" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor01" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value=""> -->

                              <select class="form-control" name="NomProveedor01" id="NomProveedor01" >

                                <option value="0"> N/A</option>



                              </select>


                            </div>
                          </div>




                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 2
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <!-- <input type="text" id="NomProveedor02" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor02" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value=""> -->

                              <select class="form-control" name="NomProveedor02" id="NomProveedor02" >
                                <option value="0"> N/A</option>
                              </select>

                            </div>
                          </div>


                          <div class="form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Nombre Proveedor # 3
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <!-- <input type="text" id="NomProveedor03" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre proveedor" name="NomProveedor03" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value=""> -->


                              <select class="form-control" name="NomProveedor03" id="NomProveedor03" >
                                <option value="0"> N/A</option>
                              </select>


                            </div>
                          </div>




                              <div class="ln_solid" ></div>


                              <div class="form-group" >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 1
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="TiempoEntrega01"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega01" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="">

                                </div>
                              </div>

                              <div class="form-group" >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 2
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="TiempoEntrega02"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega02" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="">

                                </div>
                              </div>


                              <div class="form-group" >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Tiempo Entrega Proveedor # 3
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="TiempoEntrega03"  class="form-control col-md-7 col-xs-12" placeholder="Tiempo entrega" name="TiempoEntrega03" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="">

                                </div>
                              </div>

                              <div class="ln_solid" ></div>


                              <div class="form-group" >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 1
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="Garantia01"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia01" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="">

                                </div>
                              </div>

                              <div class="form-group" >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 2
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="Garantia02"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia02" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="">

                                </div>
                              </div>


                              <div class="form-group" >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Garantía Proveedor # 3
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="Garantia03"  class="form-control col-md-7 col-xs-12" placeholder="Garantia" name="Garantia03" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" value="">

                                </div>
                              </div>

                              <div class="ln_solid" ></div>

<?php

                  $username = $_SESSION['username'];

                 $sql = 'SELECT * FROM Usuarios WHERE Usuario = "'.$username.'"';

                 // echo $sql;
                 $resultado = $conexion->query($sql);

                 while ($row = $resultado->fetch_assoc() )
                  {
                    $Nombre = $row['PrimerNombre'];
                  }

 ?>


                              <div class="form-group" >
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Observaciones Cotizacion
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea class="form-control" rows="3" placeholder="Observaciones..." name="ObservacionesCotizacion" id="ObservacionesCotizacion"><?php echo 'req. '.$Folio.' - '.$IdUnidad.' - '.$Departamento.' Favor de comentarle al proveedor que se recibe el material en un horario de 8:00 - 14:30 hrs.  Persona encargada de recibir el material: '.$Nombre.' ';?></textarea>

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
                      <td class=" ">
                        <?php echo $SubCuenta01?> </td>
                      <td class=" ">
                        <?php echo $Cantidad01?> </td>
                      <td class=" ">
                        <?php echo $Unidad01?> </td>
                      <td class=" ">
                        <?php echo $Descripcion01?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones01?> </td> -->


                      <td class=" ">


                        <select class="form-control" name="IVArt01">
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                              </select>




                      </td>

                      <td class=" "> <input type="text" name="PrecioArt01Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt01Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt01Prov03" onkeypress="return valida(event)" value="0"> </td>



                      </td>
                    </tr>

                    <tr>
                      <td class=" ">2</td>
                      <td class=" ">
                        <?php echo $SubCuenta02?> </td>
                      <td class=" ">
                        <?php echo $Cantidad02?> </td>
                      <td class=" ">
                        <?php echo $Unidad02?> </td>
                      <td class=" ">
                        <?php echo $Descripcion02?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones02?> </td> -->

                      <td>

                        <select class="form-control" name="IVArt02">
    <option value="SI">SI</option>
    <option value="NO">NO</option>
  </select>
                      </td>
                      <td class=" "> <input type="text" name="PrecioArt02Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt02Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt02Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">3</td>
                      <td class=" ">
                        <?php echo $SubCuenta03?> </td>
                      <td class=" ">
                        <?php echo $Cantidad03?> </td>
                      <td class=" ">
                        <?php echo $Unidad03?> </td>
                      <td class=" ">
                        <?php echo $Descripcion03?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones03?> </td> -->

                      <td>
                        <select class="form-control" name="IVArt03">
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                  </select>
                      </td>

                      <td class=" "> <input type="text" name="PrecioArt03Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt03Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt03Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">4</td>
                      <td class=" ">
                        <?php echo $SubCuenta04?> </td>
                      <td class=" ">
                        <?php echo $Cantidad04?> </td>
                      <td class=" ">
                        <?php echo $Unidad04?> </td>
                      <td class=" ">
                        <?php echo $Descripcion04?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones04?> </td> -->
                      <td> <select class="form-control" name="IVArt04">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select>
                      </td>

                      <td class=" "> <input type="text" name="PrecioArt04Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt04Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt04Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">5</td>
                      <td class=" ">
                        <?php echo $SubCuenta05?> </td>
                      <td class=" ">
                        <?php echo $Cantidad05?> </td>
                      <td class=" ">
                        <?php echo $Unidad05?> </td>
                      <td class=" ">
                        <?php echo $Descripcion05?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones05?> </td> -->
                      <td> <select class="form-control" name="IVArt05">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>

                      <td class=" "> <input type="text" name="PrecioArt05Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt05Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt05Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">6</td>
                      <td class=" ">
                        <?php echo $SubCuenta06?> </td>
                      <td class=" ">
                        <?php echo $Cantidad06?> </td>
                      <td class=" ">
                        <?php echo $Unidad06?> </td>
                      <td class=" ">
                        <?php echo $Descripcion06?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones06?> </td> -->
                      <td> <select class="form-control" name="IVArt06">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>

                      <td class=" "> <input type="text" name="PrecioArt06Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt06Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt06Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">7</td>
                      <td class=" ">
                        <?php echo $SubCuenta07?> </td>
                      <td class=" ">
                        <?php echo $Cantidad07?> </td>
                      <td class=" ">
                        <?php echo $Unidad07?> </td>
                      <td class=" ">
                        <?php echo $Descripcion07?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones07?> </td> -->
                      <td> <select class="form-control" name="IVArt07">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>

                      <td class=" "> <input type="text" name="PrecioArt07Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt07Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt07Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">8</td>
                      <td class=" ">
                        <?php echo $SubCuenta08?> </td>
                      <td class=" ">
                        <?php echo $Cantidad08?> </td>
                      <td class=" ">
                        <?php echo $Unidad08?> </td>
                      <td class=" ">
                        <?php echo $Descripcion08?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones08?> </td> -->

                      <td> <select class="form-control" name="IVArt08">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>

                      <td class=" "> <input type="text" name="PrecioArt08Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt08Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt08Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">9</td>
                      <td class=" ">
                        <?php echo $SubCuenta09?> </td>
                      <td class=" ">
                        <?php echo $Cantidad09?> </td>
                      <td class=" ">
                        <?php echo $Unidad09?> </td>
                      <td class=" ">
                        <?php echo $Descripcion09?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones09?> </td> -->

                      <td> <select class="form-control" name="IVArt09">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>

                      <td class=" "> <input type="text" name="PrecioArt09Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt09Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt09Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">10</td>
                      <td class=" ">
                        <?php echo $SubCuenta10?> </td>
                      <td class=" ">
                        <?php echo $Cantidad10?> </td>
                      <td class=" ">
                        <?php echo $Unidad10?> </td>
                      <td class=" ">
                        <?php echo $Descripcion10?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones10?> </td> -->

                      <td> <select class="form-control" name="IVArt10">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>

                      <td class=" "> <input type="text" name="PrecioArt10Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt10Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt10Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">11</td>
                      <td class=" ">
                        <?php echo $SubCuenta11?> </td>
                      <td class=" ">
                        <?php echo $Cantidad11?> </td>
                      <td class=" ">
                        <?php echo $Unidad11?> </td>
                      <td class=" ">
                        <?php echo $Descripcion11?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones11?> </td> -->

                      <td> <select class="form-control" name="IVArt11">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>

                      <td class=" "> <input type="text" name="PrecioArt11Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt11Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt11Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">12</td>
                      <td class=" ">
                        <?php echo $SubCuenta12?> </td>
                      <td class=" ">
                        <?php echo $Cantidad12?> </td>
                      <td class=" ">
                        <?php echo $Unidad12?> </td>
                      <td class=" ">
                        <?php echo $Descripcion12?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones12?> </td> -->

                      <td> <select class="form-control" name="IVArt12">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>

                      <td class=" "> <input type="text" name="PrecioArt12Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt12Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt12Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">13</td>
                      <td class=" ">
                        <?php echo $SubCuenta13?> </td>
                      <td class=" ">
                        <?php echo $Cantidad13?> </td>
                      <td class=" ">
                        <?php echo $Unidad13?> </td>
                      <td class=" ">
                        <?php echo $Descripcion13?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones13?> </td> -->

                      <td> <select class="form-control" name="IVArt13">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>

                      <td class=" "> <input type="text" name="PrecioArt13Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt13Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt13Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>
                    <tr>
                      <td class=" ">14</td>
                      <td class=" ">
                        <?php echo $SubCuenta14?> </td>
                      <td class=" ">
                        <?php echo $Cantidad14?> </td>
                      <td class=" ">
                        <?php echo $Unidad14?> </td>
                      <td class=" ">
                        <?php echo $Descripcion14?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones14?> </td> -->

                      <td> <select class="form-control" name="IVArt14">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt14Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt14Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt14Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>

                    <tr>
                      <td class=" ">15</td>
                      <td class=" ">
                        <?php echo $SubCuenta15?> </td>
                      <td class=" ">
                        <?php echo $Cantidad15?> </td>
                      <td class=" ">
                        <?php echo $Unidad15?> </td>
                      <td class=" ">
                        <?php echo $Descripcion15?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones15?> </td> -->

                      <td> <select class="form-control" name="IVArt15">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt15Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt15Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt15Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>


                    <tr>
                      <td class=" ">16</td>
                      <td class=" ">
                        <?php echo $SubCuenta16?> </td>
                      <td class=" ">
                        <?php echo $Cantidad16?> </td>
                      <td class=" ">
                        <?php echo $Unidad16?> </td>
                      <td class=" ">
                        <?php echo $Descripcion16?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones16?> </td> -->

                      <td> <select class="form-control" name="IVArt16">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt16Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt16Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt16Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>


                    <tr>
                      <td class=" ">17</td>
                      <td class=" ">
                        <?php echo $SubCuenta17?> </td>
                      <td class=" ">
                        <?php echo $Cantidad17?> </td>
                      <td class=" ">
                        <?php echo $Unidad17?> </td>
                      <td class=" ">
                        <?php echo $Descripcion17?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones17?> </td> -->

                      <td> <select class="form-control" name="IVArt17">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt17Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt17Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt17Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">18</td>
                      <td class=" ">
                        <?php echo $SubCuenta18?> </td>
                      <td class=" ">
                        <?php echo $Cantidad18?> </td>
                      <td class=" ">
                        <?php echo $Unidad18?> </td>
                      <td class=" ">
                        <?php echo $Descripcion18?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones18?> </td> -->

                      <td> <select class="form-control" name="IVArt18">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt18Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt18Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt18Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">19</td>
                      <td class=" ">
                        <?php echo $SubCuenta19?> </td>
                      <td class=" ">
                        <?php echo $Cantidad19?> </td>
                      <td class=" ">
                        <?php echo $Unidad19?> </td>
                      <td class=" ">
                        <?php echo $Descripcion19?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones19?> </td> -->

                      <td> <select class="form-control" name="IVArt19">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt19Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt19Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt19Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">20</td>
                      <td class=" ">
                        <?php echo $SubCuenta20?> </td>
                      <td class=" ">
                        <?php echo $Cantidad20?> </td>
                      <td class=" ">
                        <?php echo $Unidad20?> </td>
                      <td class=" ">
                        <?php echo $Descripcion20?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones20?> </td> -->

                      <td> <select class="form-control" name="IVArt20">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt20Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt20Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt20Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">21</td>
                      <td class=" ">
                        <?php echo $SubCuenta21?> </td>
                      <td class=" ">
                        <?php echo $Cantidad21?> </td>
                      <td class=" ">
                        <?php echo $Unidad21?> </td>
                      <td class=" ">
                        <?php echo $Descripcion21?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones21?> </td> -->

                      <td> <select class="form-control" name="IVArt21">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt21Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt21Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt21Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">22</td>
                      <td class=" ">
                        <?php echo $SubCuenta22?> </td>
                      <td class=" ">
                        <?php echo $Cantidad22?> </td>
                      <td class=" ">
                        <?php echo $Unidad22?> </td>
                      <td class=" ">
                        <?php echo $Descripcion22?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones22?> </td> -->

                      <td> <select class="form-control" name="IVArt22">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt22Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt22Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt22Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">23</td>
                      <td class=" ">
                        <?php echo $SubCuenta23?> </td>
                      <td class=" ">
                        <?php echo $Cantidad23?> </td>
                      <td class=" ">
                        <?php echo $Unidad23?> </td>
                      <td class=" ">
                        <?php echo $Descripcion23?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones23?> </td> -->

                      <td> <select class="form-control" name="IVArt23">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt23Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt23Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt23Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">24</td>
                      <td class=" ">
                        <?php echo $SubCuenta24?> </td>
                      <td class=" ">
                        <?php echo $Cantidad24?> </td>
                      <td class=" ">
                        <?php echo $Unidad24?> </td>
                      <td class=" ">
                        <?php echo $Descripcion24?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones24?> </td> -->

                      <td> <select class="form-control" name="IVArt24">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt24Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt24Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt24Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">25</td>
                      <td class=" ">
                        <?php echo $SubCuenta25?> </td>
                      <td class=" ">
                        <?php echo $Cantidad25?> </td>
                      <td class=" ">
                        <?php echo $Unidad25?> </td>
                      <td class=" ">
                        <?php echo $Descripcion25?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones25?> </td> -->

                      <td> <select class="form-control" name="IVArt25">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt25Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt25Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt25Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">26</td>
                      <td class=" ">
                        <?php echo $SubCuenta26?> </td>
                      <td class=" ">
                        <?php echo $Cantidad26?> </td>
                      <td class=" ">
                        <?php echo $Unidad26?> </td>
                      <td class=" ">
                        <?php echo $Descripcion26?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones26?> </td> -->

                      <td> <select class="form-control" name="IVArt26">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt26Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt26Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt26Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">27</td>
                      <td class=" ">
                        <?php echo $SubCuenta27?> </td>
                      <td class=" ">
                        <?php echo $Cantidad27?> </td>
                      <td class=" ">
                        <?php echo $Unidad27?> </td>
                      <td class=" ">
                        <?php echo $Descripcion27?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones27?> </td> -->

                      <td> <select class="form-control" name="IVArt27">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt27Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt27Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt27Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">28</td>
                      <td class=" ">
                        <?php echo $SubCuenta28?> </td>
                      <td class=" ">
                        <?php echo $Cantidad28?> </td>
                      <td class=" ">
                        <?php echo $Unidad28?> </td>
                      <td class=" ">
                        <?php echo $Descripcion28?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones28?> </td> -->

                      <td> <select class="form-control" name="IVArt28">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt28Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt28Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt28Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">29</td>
                      <td class=" ">
                        <?php echo $SubCuenta29?> </td>
                      <td class=" ">
                        <?php echo $Cantidad29?> </td>
                      <td class=" ">
                        <?php echo $Unidad29?> </td>
                      <td class=" ">
                        <?php echo $Descripcion29?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones29?> </td> -->

                      <td> <select class="form-control" name="IVArt29">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt29Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt29Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt29Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">30</td>
                      <td class=" ">
                        <?php echo $SubCuenta30?> </td>
                      <td class=" ">
                        <?php echo $Cantidad30?> </td>
                      <td class=" ">
                        <?php echo $Unidad30?> </td>
                      <td class=" ">
                        <?php echo $Descripcion30?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones30?> </td> -->

                      <td> <select class="form-control" name="IVArt30">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt30Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt30Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt30Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">31</td>
                      <td class=" ">
                        <?php echo $SubCuenta31?> </td>
                      <td class=" ">
                        <?php echo $Cantidad31?> </td>
                      <td class=" ">
                        <?php echo $Unidad31?> </td>
                      <td class=" ">
                        <?php echo $Descripcion31?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones31?> </td> -->

                      <td> <select class="form-control" name="IVArt31">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt31Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt31Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt31Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">32</td>
                      <td class=" ">
                        <?php echo $SubCuenta32?> </td>
                      <td class=" ">
                        <?php echo $Cantidad32?> </td>
                      <td class=" ">
                        <?php echo $Unidad32?> </td>
                      <td class=" ">
                        <?php echo $Descripcion32?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones32?> </td> -->

                      <td> <select class="form-control" name="IVArt32">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt32Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt32Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt32Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">33</td>
                      <td class=" ">
                        <?php echo $SubCuenta33?> </td>
                      <td class=" ">
                        <?php echo $Cantidad33?> </td>
                      <td class=" ">
                        <?php echo $Unidad33?> </td>
                      <td class=" ">
                        <?php echo $Descripcion33?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones33?> </td> -->

                      <td> <select class="form-control" name="IVArt33">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt33Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt33Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt33Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">34</td>
                      <td class=" ">
                        <?php echo $SubCuenta34?> </td>
                      <td class=" ">
                        <?php echo $Cantidad34?> </td>
                      <td class=" ">
                        <?php echo $Unidad34?> </td>
                      <td class=" ">
                        <?php echo $Descripcion34?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones34?> </td> -->

                      <td> <select class="form-control" name="IVArt34">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt34Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt34Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt34Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>




                    <tr>
                      <td class=" ">35</td>
                      <td class=" ">
                        <?php echo $SubCuenta35?> </td>
                      <td class=" ">
                        <?php echo $Cantidad35?> </td>
                      <td class=" ">
                        <?php echo $Unidad35?> </td>
                      <td class=" ">
                        <?php echo $Descripcion35?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones35?> </td> -->

                      <td> <select class="form-control" name="IVArt35">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt35Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt35Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt35Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>



                    <tr>
                      <td class=" ">36</td>
                      <td class=" ">
                        <?php echo $SubCuenta36?> </td>
                      <td class=" ">
                        <?php echo $Cantidad36?> </td>
                      <td class=" ">
                        <?php echo $Unidad36?> </td>
                      <td class=" ">
                        <?php echo $Descripcion36?> </td>
                      <!-- <td class=" ">
                        <?php echo $Observaciones36?> </td> -->

                      <td> <select class="form-control" name="IVArt36">
                                                                <option value="SI">SI</option>
                                                                <option value="NO">NO</option>
                                                              </select></td>


                      <td class=" "> <input type="text" name="PrecioArt36Prov01" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt36Prov02" onkeypress="return valida(event)" value="0"> </td>
                      <td class=" "> <input type="text" name="PrecioArt36Prov03" onkeypress="return valida(event)" value="0"> </td>


                      </td>
                    </tr>








                    <tbody>










                    </tbody>
                  </table>


                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        </th>

                        <th class="column-title">Observaciones </th>

                        </th>
                      </tr>
                    </thead>

                    <tr>

                      <td class=" ">
                        <?php echo $Observaciones01?> </td>





                    </tr>



                    <tbody>










                    </tbody>
                  </table>




                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-10">

                      <!-- <button type="submit" class="btn btn-success">Guardar!</button> -->

                      <input type="submit" class="btn btn-success"></button>

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


        <!--  -->

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
        <!--  -->




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
