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




</script>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3  left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>ADQUISICIONES UACH FING</span></a>
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

            <div class="col-md-offset-1 col-md-10 col-md-offset-1 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Mensaje </h2>
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
                <div class="x_content bs-example-popovers">


<?php

$Bandera = $_GET["Mensaje"];

switch ($Bandera) {
      case '1':
      //Correcto
      echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      <span style="Font-size : 25px;">  <strong>Correcto</strong> Su usuario ha sido creado con éxito.</span>
      </div>
      <div class="">
      <a href="../index.html">  <span class="btn btn-success"> <span class=" glyphicon glyphicon-chevron-left"></span> Regresar </span> </a>
      </div>

      ';


      break;

      case '2':
      //Correcto
      echo '<div class="alert alert-info alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      <span style="Font-size : 25px; color:white;"> Error al momento de insertar, favor de marcar a EXT. 2590 Ing. Luis Valdez </span>


      </div>
      <div class="alert alert-info alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <span style="Font-size : 15px; color: white;"> Posible causa: El No. Empleado ya fue dado de alta </span>
            </div>

      <div class="">
      <a href="../index.html">  <span class="btn btn-info"> <span class=" glyphicon glyphicon-chevron-left"></span> Regresar </span> </a>
      </div>

      ';

      break;

      case '3':
      //Codigo incorrecto
      echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <span style="Font-size : 25px; color: white;"> Código de Registro Incorrecto </span>
      </div>

      <div class="">
      <a href="../index.html">  <span class="btn btn-warning"> <span class=" glyphicon glyphicon-chevron-left"></span> Regresar </span> </a>
      </div>

      ';


      break;

      case '3':
      //Correcto
      echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Holy guacamole!</strong> Best check yo self, youre not looking too good.
      </div> ';


      break;


  default:
    // code...
    break;
}


 ?>



                  <!-- <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div>
                  <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div>
                  <div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div> -->

                </div>
              </div>
            </div>








          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
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
