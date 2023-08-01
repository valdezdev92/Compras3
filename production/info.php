<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';

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
      patron = /[A-Za-z0-9-.,ñÑ\s\t]/; // 4

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




      var ValorCuenta= $('#Cuenta').val();
      var ValorSubCuenta= $('#SubCuenta').val();
      var ValorArea= $('#Area').val();
      var ValorMotivos= $('#Motivos').val();


      if (ValorCuenta == 0)

      {
        alert('Favor de seleccionar una cuenta');
      }
      else if (ValorSubCuenta == 0)
      {
        alert('Favor de seleccionar una Sub Cuenta');


      }
      else if (ValorArea == 0)
      {
        alert('Favor de seleccionar un Area');


      }
      else if (ValorMotivos == "")
      {
        alert('Favor de escribir motivo para la requisición ');


      }
       else
       {

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
                                    <h2><i class="fa fa-bars"></i> Intrucciones para uso del sistema de adquisiciones FING</h2>
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

                                    <div class="col-xs-3">
                                      <!-- required for floating -->
                                      <!-- Nav tabs -->
                                      <ul class="nav nav-tabs tabs-left">
                                        <li class="active"><a href="#home" data-toggle="tab" style="Font-size: 18px;">Registro</a>
                                        </li>
                                        <li><a href="#profile" data-toggle="tab" style="Font-size: 18px;">Consulta | Autorizaciones</a>
                                        </li>
                                        <!-- <li><a href="#messages" data-toggle="tab" style="Font-size: 18px;">Messages</a>
                                        </li>
                                        <li><a href="#settings" data-toggle="tab" style="Font-size: 18px;">Settings</a> -->
                                        </li>
                                      </ul>
                                    </div>

                                    <div class="col-xs-9">
                                      <!-- Tab panes -->
                                      <div class="tab-content">
                                        <div class="tab-pane active" id="home">
                                          <p class="lead">Registro</p>
                                          <p style="Font-size: 18px;">En esta sección se dará de alta una requisición, los parámetros correspondientes dependiendo de su área y puesto se han rellenado automáticamente por su información de registro.</p>
                                          <p style="Font-size: 18px;">Una vez llenada la información solicitada favor de colocar con número la cantidad de artículos junto a su unidad y descripción.</p>
                                          <p style="Font-size: 18px;">Al finalizar presione el botón guardar, si todo fue correcto recibirá un mensaje de confirmación en la pantalla de color verde con el número de folio asignado.</p>


                                        </div>
                                        <div class="tab-pane" id="profile">

                                          <p style="Font-size: 18px;">En esta sección se puede dar seguimiento al estatus de sus solicitudes así como impimirlas, un requisito para que su solicitud sea autorizada es impirmir el formato de la solicitud, firmarlo por el personal correspondinete y llevarlo en <b>Fecha y Hora [8:00 AM a 2:00 PM] [Laboratorios 8:00 a 1:00 PM]</b> a Secretaría Administrativa.</p>
                                          <p style="Font-size: 18px;">Los estatus de las requisiciones son los siguientes:</p>
                                          <br>
                                          <p style="Font-size: 18px;"><span style="Font-size:15px;" class="label label-info">PENDIENTE</span>: La Solicitud fue capturada, se encuentra en espera de ser AUTORIZADA ó NO AUTORIZADA por parte de Secretaría Administrativa.</p>
                                          <br>
                                          <p style="Font-size: 18px;"><span style="Font-size:15px;" class="label label-success">AUTORIZADA</span>: La Solicitud fue autorizada por Secretaría Administrativa y esta a la espera de ser cotizada.</p>
                                          <br>
                                          <p style="Font-size: 18px;"><span style="Font-size:15px;" class="label label-danger">NO AUTORIZADA</span>: La Solicitud no fue autorizada por Secretaría Administrativa.</p>
                                          <br>
                                          <p style="Font-size: 18px;"><span style="Font-size:15px;" class="label label-warning">COTIZADA</span>: La Solicitud fue cotizada y se encuentra en la espera de ser enviada a Unidad Central o Surtida en caso de Servicio Externo.</p>
                                          <br>
                                          <p style="Font-size: 18px;"><span style="Font-size:15px;" class="label label-primary">PASAR A RECOGER</span>: La Solicitud ya fue adquirida y el material se encuentra disponible para su recolección en el departamento de compras.</p>
                                          <br>
                                          <p style="Font-size: 18px;"><span style="Font-size:15px;" class="label label-default">SURTIDA</span>: La Solicitud ya fue adquirida y entregada.</p>




                                        </div>
                                        <!-- <div class="tab-pane" id="messages">Messages Tab.</div>
                                        <div class="tab-pane" id="settings">Settings Tab.</div> -->
                                      </div>
                                    </div>

                                    <div class="clearfix"></div>

                                  </div>
                                </div>
                              </div>









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
