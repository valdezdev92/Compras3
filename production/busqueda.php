<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';
include '../Restriccion.php';

 include("head.php");
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

  <body class="nav-md">



    <script type="text/javascript">
      $('#datatable').dataTable({
        'iDisplayLength': 100
      });
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
                <div class="cold-md-12 col-lg-12 col-xs-12 col-sm-12 ">
          				<form class="form-horizontal" role="form" id="datos_cotizacion">

          						<div class="form-group row">
          							<label for="q" class="col-md-2 control-label"></label>
          							<div class="col-md-5">
          								<input type="text" class="form-control" id="q" placeholder="Nombre o Cargo" onkeyup='load(1);'>
          							</div>



          							<div class="col-md-3">
          								<button type="button" class="btn btn-default" onclick='load(1);'>
          									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
          								<span id="loader"></span>
          							</div>

          						</div>



          			</form>
          				<div id="resultados"></div><!-- Carga los datos ajax -->
          				<div class='outer_div table table-striped table-bordered'  ></div><!-- Carga los datos ajax -->
          			</div>


                <!-- eclet table -->


                <!--  Excel table end-->


                <!-- eclet table -->
      <!--  insert here -->

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

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
    	<script type="text/javascript" src="js/buscar.js"></script>

      <!-- <script type="text/javascript">
        $('#resultados').dataTable({
          'iDisplayLength': 100
        });
      </script> -->


    </body>

  </html>
