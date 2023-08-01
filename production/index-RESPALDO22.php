<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';
include '../Restriccion.php';

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



        <div class="right_col" role="main">
          <div class="row">

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

              </div>
            </div>

          </div>

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
              patron = /[A-Za-z0-9-.,ñ()`Ñ\s\t]/; // 4

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




              var ValorIdUnidad = $('#DepSolicitante').val();
              // var ValorFolio = $('#Folio').val();
              var ValorMotivos = $('#Motivos').val();
              var ValorSolicitante = $('#Solicitante').val();
              var ValorArea = $('#Area').val();
              // var ValorEstatus = $('#Estatus').val();


              if (ValorIdUnidad == 0)

              {
                alert('Favor de seleccionar un departamento solicitante');
              }  else if (ValorMotivos == "") {
                alert('Favor de proporcionar motivos de requisición');

              } else if (ValorSolicitante == "")

              {
                alert('Favor de proporcionar soliciante');
              } else if (ValorArea == 0)

              {
                alert('Favor de seleccionar un area');
              // } else if (ValorEstatus == 3)
              //
              // {
              //   alert('Favor de seleccionar si esta autorizado o no');
              // }
            }
            else {

                document.demoform2.submit();

              }
              //
              // alert (''+ValorIdUnidad);


            }


          </script>




          <div class="row">




            <!-- Walforf Ezample -->

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Alta Articulos  / Modificacion  Requisición<small></small></h2>
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
                  <form id="demoform2" data-parsley-validate class="form-horizontal form-label-left" action="AltaRequiAdmin.php" method="post" name="demoform2">








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





														<option value="0">0 - Seleccione una opción</option>



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

                     <div class="form-group" style="display:none;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Folio">Folio <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Folio" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Folio" value="" onkeypress="return Folio(event)" maxlength="6">

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
                            <input type="text" class="form-control" name="Fecha" id="Fecha" required="required" value="<?php echo ''.$d2.'/'.$m2.'/'.$y.'';?> ">
                            <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                          </div>





                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Función</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="Funcion" id="Funcion">
                                <option value="0">0</option>
                                <option value="6">6</option>
                            <option value="5">5</option>
                              <option value="4">4</option>
                                <option value="3">3</option>
                            <option value="2">2</option>

                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Programa</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="Programa" id="Programa">
                                      <option value="0">0</option>
                              <option value="91">91</option>
                              <option value="61">61</option>
                                <option value="51">51</option>
                                  <option value="11">11</option>

                                      <option value="21">21</option>
                                        <option value="95">95</option>

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
                                          <select class="form-control" name="Cuenta" id="Cuenta" >
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






                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Fondo">Motivos Requisición <span class="required">*</span>
                        </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="Motivos" required="required" class="form-control col-md-7 col-xs-12" placeholder="Motivos requisicion..." name="Motivos" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">



                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Solicitante <span class="required">*</span>
                        </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="Solicitante" required="required" class="form-control col-md-7 col-xs-12" placeholder="0" name="Solicitante" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)">

                          </div>
                        </div>


                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Solicitante">Servicio Externo / Academico <span class="required">*</span>
                        </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="Area" id="Area">

                            <option value="0">Seleccione una opcion</option>
                            <option value="1">UNIDAD ACADÉMICA</option>
                            <option value="2">SERVICIO EXTERNO</option>


                          </select>

                          </div>
                        </div>

<!--
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Autorizado</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">



                            <select class="form-control" name="Estatus" id="Estatus">

                                <option value="3">Seleccione una opcion</option>
                                <option value="0">No Autorizado</option>
                                <option value="1">Autorizado</option>


                              </select>

                          </div >
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



            <div class="clearfix"></div>

            <!-- Walforf Ezample -->


            <div class="clearfix"></div>


            <!-- Tabla de equis -->


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Articulos | Requi |  </h2>
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
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>

                      <tbody>


                        <tr class="odd pointer">

                          <td class=" ">1</td>
                          <td class=" "> <input type="text" name="Cantidad01" value="" onkeypress="return valida(event)" size="5"></td>
                          <td class=" "> <input type="text" name="Unidad01" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion01" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones01" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>

                        <tr class="odd pointer">

                          <td class=" ">2</td>
                          <td class=" "> <input type="text" name="Cantidad02" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad02" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion02" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones02" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>


                        <tr class="odd pointer">

                          <td class=" ">3</td>
                          <td class=" "> <input type="text" name="Cantidad03" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad03" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion03" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones03" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>


                        <tr class="odd pointer">

                          <td class=" ">4</td>
                          <td class=" "> <input type="text" name="Cantidad04" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad04" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion04" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones04" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>


                        <tr class="odd pointer">

                          <td class=" ">5</td>
                          <td class=" "> <input type="text" name="Cantidad05" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad05" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion05" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones05" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>


                        <tr class="odd pointer">

                          <td class=" ">6</td>
                          <td class=" "> <input type="text" name="Cantidad06" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad06" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion06" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones06" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>



                        <tr class="odd pointer">

                          <td class=" ">7</td>
                          <td class=" "> <input type="text" name="Cantidad07" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad07" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion07" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones07" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>



                        <tr class="odd pointer">

                          <td class=" ">8</td>
                          <td class=" "> <input type="text" name="Cantidad08" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad08" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion08" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones08" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>



                        <tr class="odd pointer">

                          <td class=" ">9</td>
                          <td class=" "> <input type="text" name="Cantidad09" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad09" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion09" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones09" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>




                        <tr class="odd pointer">

                          <td class=" ">10</td>
                          <td class=" "> <input type="text" name="Cantidad10" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad10" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion10" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones10" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>




                        <tr class="odd pointer">

                          <td class=" ">11</td>
                          <td class=" "> <input type="text" name="Cantidad11" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad11" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion11" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones11" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>



                        <tr class="odd pointer">

                          <td class=" ">12</td>
                          <td class=" "> <input type="text" name="Cantidad12" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad12" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion12" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40" > </td>
                          <td class=" "> <input type="text" name="Observaciones12" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>



                        <tr class="odd pointer">

                          <td class=" ">13</td>
                          <td class=" "> <input type="text" name="Cantidad13" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad13" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion13" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones13" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>



                        <tr class="odd pointer">

                          <td class=" ">14</td>
                          <td class=" "> <input type="text" name="Cantidad14" value="" onkeypress="return valida(event)" size="5"> </td>
                          <td class=" "> <input type="text" name="Unidad14" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)"> </td>
                          <td class=" "> <input type="text" name="Descripcion14" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          <td class=" "> <input type="text" name="Observaciones14" value="" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" size="40"> </td>
                          </td>
                        </tr>





                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                      <!-- <button type="submit" class="btn btn-success">Guardar!</button> -->

                      <div class="col-md-11">

                      </div>

                      <div class="col-md-1">
                        <button type="button" class="btn btn-success" onclick="ValidarForm();">Guardar!</button>
                      </div>

                    </div>
                  </div>

                  </form>


                </div>
              </div>
            </div>



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


    <script type="text/javascript">


     $(document).ready(function(){
           $("#Cuenta").change(function () {

             // alert('holi');

             // $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');

             $("#Cuenta option:selected").each(function () {
               Cuenta = $(this).val();
               $.post("getSubCuenta.php", { Cuenta: Cuenta }, function(data){
                 $("#SubCuenta").html(data);
               });
             });
           })
         });


       </script>

  </body>

  </html>
