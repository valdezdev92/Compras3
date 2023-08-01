<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADQUISICIONES | UACH | FING </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <script type="text/javascript">

  function ValidarCampos () {

  var ValorNoEmpleado  =   $('#NoEmpleado').val();
  var Valorprimernombre =   $('#primer-nombre').val();
  var Valorprimerapellido =   $('#primer-apellido').val();
  var Valorcentro =   $('#centro').val();
  var Valorpassword1 =   $('#password1').val();
  var Valorpassword2 =   $('#password2').val();
  var ValorCodigo =   $('#Codigo').val();
  var ValorCorreo =   $('#Correo').val();
  var ValorExt =   $('#Ext').val();
  var Bandera = 0;



  if (ValorNoEmpleado == "")

  {
    alert ('Favor de colocar un numero de empleado');
  }

  else if (Valorprimernombre == "")
   {
       alert ('Favor de colocar su primer nombre ');

  }

  else if (Valorprimerapellido == "")
   {
      alert ('Favor de colocar su primer apellido');

  }

  else if (Valorcentro == 0)

  {
    alert ('Favor de seleccionar su departamento');
  }

  else if (Valorpassword1 == "")

  {
    alert ('Favor de seleccionar una contraseña');
  }

  else if (Valorpassword2 == "")

  {
    alert ('Favor de confirmar su contraseña');
  }

  else if (Valorpassword1 != Valorpassword2)

  {
    alert ('Las Contraseñas no coinciden');
  }
  else if ( ValorCodigo== "")

  {
    alert ('Favor de colocar su Codigo de Registro');
  }
  else if ( ValorCorreo== "")

  {
    alert ('Favor de colocar su Correo');
  }
  else if ( ValorExt== "")

  {
    alert ('Favor de colocar su Extensión');
  }

  else
  {
              // alert("Correcto");
     document.demoform2.submit();



  }

}



//
// function valida(e){
// tecla = (document.all) ? e.keyCode : e.which;
//
// //Tecla de retroceso para borrar, siempre la permite
// if (tecla==8){
// return true;
// }
//
// // Patron de entrada, en este caso solo acepta numeros
// patron =/[0-9]/;
// tecla_final = String.fromCharCode(tecla);
// return patron.test(tecla_final);
// }
//
//
// function mayus(e) {
// e.value = e.value.toUpperCase();
//
//
//
// }


// function validarLeras(e) { // 1
// tecla = (document.all) ? e.keyCode : e.which; // 2
// if (tecla==8 ) return true; // 3
//
// patron =/[A-Za-z\s@]/; // 4
// te = String.fromCharCode(tecla); // 5
// return patron.test(te); // 6
// }
//


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
if (tecla==96) return false; // 3
patron = /[A-Za-z0-9-.,ñÑ\s\t@]/; // 4

te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
}

function Folio(e) { // 1
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
patron = /[0-9-\s\t]/; // 4

te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
}


function mayus(e) {
  e.value = e.value.toUpperCase();



}



</script>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"> <span>ADQUISICIONES UACH FING</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2>Sección de Registro</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->

            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">

              <a data-toggle="tooltip" data-placement="top" title="Salir" href="/compras/index.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <!-- <h3>Form Elements</h3> -->
              </div>


            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Seccion de Registro<small>Usuarios</small></h2>
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

                    <form class="" action="index.html" method="post">

                    </form>
                    <form id="demoform2" name="demoform2" data-parsley-validate class="form-horizontal form-label-left" method="post"  action="RegistroUsuario-Set.php" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Número Empleado<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="NoEmpleado" name="NoEmpleado"required="required" class="form-control col-md-7 col-xs-12" onkeypress="return valida(event)" maxlength="6" onpaste="return false" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Primer Nombre<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="primer-nombre" name="primer-nombre"required="required" class="form-control col-md-7 col-xs-12" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" onpaste="return false"  >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Primer Apellido <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="primer-apellido" name="primer-apellido" required="required" class="form-control col-md-7 col-xs-12" onkeyup="mayus(this);" onkeypress="return validarLetras(event)" onpaste="return false" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Centro / Departamento</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name"> -->


                          <select id="centro" name="centro" class="form-control" required>
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
                            <option value="4411 - LABORATORIO DE MINEROLOGÍA">4411 - LABORATORIO DE MINEROLOGÍA</option>
                            <option value="4412 - LABORATORIO DE QUIMICA">4412 - LABORATORIO DE QUIMICA</option>
                            <option value="4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA">4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA</option>
                            <option value="4413 - LABORATORIO DE AUTOMÁTICA">4413 - LABORATORIO DE AUTOMÁTICA</option>


                            <option value="4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS">4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS</option>
                            <option value="4415 - LABORATORIO DE HIDRAULICA">4415 - LABORATORIO DE HIDRAULICA</option>


                            <option value="4416 - LABORATORIO DE SENSORES REMOTOS">4416 - LABORATORIO DE SENSORES REMOTOS</option>
                            <option value="4417 - LABORATORIO DE TOPOGRAFIA">4417 - LABORATORIO DE TOPOGRAFIA</option>
                            <option value="4417 - LABORATORIO DE TOPOGRAFIA">4417 - LABORATORIO DE FOTOGRAMETRIA</option>
                            <option value="4418 - LABORATORIO DE RESONANCIA MAGNETICA">4418 - LABORATORIO DE RESONANCIA MAGNETICA</option>
                            <option value="4419 - LABORATORIO DE FISICA">4419 - LABORATORIO DE FISICA</option>
                            <option value="4462 - LABORATORIO DE GEOLOGIA">4462 - LABORATORIO DE GEOLOGIA</option>
                            <option value="4462 - LABORATORIO DE GEOFISICA">4462 - LABORATORIO DE GEOFISICA</option>

                            <option value="4449 - LAB DE AEROESPACIAL">4449 - LAB DE AEROESPACIAL</option>


                          </select>
                          </select>


                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password1" name="password1" class=" form-control col-md-7 col-xs-12" required="required" type="password" onkeypress="return validarLetras(event)" onpaste="return false">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirmar Contraseña <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" name="password2" class=" form-control col-md-7 col-xs-12" required="required" type="password"  onkeypress="return validarLetras(event)" onpaste="return false">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Correo" name="Correo" class=" form-control col-md-7 col-xs-12" required="required" type="mail"   onkeyup="mayus(this);" onkeypress="return validarLetras(event)" onpaste="return false">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Extensión <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Ext" name="Ext" class=" form-control col-md-7 col-xs-12" required="required" type="text"  maxlength="6" onkeyup="mayus(this);" onkeypress="return valida(event)"  onpaste="return false" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Código de Registro <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Codigo" name="codigo" class=" form-control col-md-7 col-xs-12" required="required" type="text"  maxlength="6" onkeyup="mayus(this);"  onkeypress="return validarLetras(event)" onpaste="return false" >
                          <p>Este código es proporcionado por el departamento de Adquisiciones, si usted no cuenta con él, favor de marcar a la EXT. 2590</p>
                        </div>
                      </div>



                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="button" class="btn btn-success" onclick="ValidarCampos();">Confirmar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>







          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
  Copyright. Design: Secretaría Administrativa - Facultad de Ingeniería          </div>
          <div class="clearfix"></div>
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
