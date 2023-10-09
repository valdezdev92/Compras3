<?php

include '../Sesiones.php';
include '../Header.php';
include '../Footer.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';
require '../ConexionDB.php';

$OrdenCompra = $_POST['OrdenCompra'];


$sql = "SELECT NoOrden  FROM movdOrdenCompra WHERE NoOrden = $OrdenCompra";
$resultado=$conexion->query($sql);



   if ($resultado->num_rows > 0)
   {
      echo "Existe";
      header('Location: capturaOC.php?Mensaje=YaExiste');
    }
    else {
    //  echo "no existe";
    }
  //  $row = $resultado->fetch_array(MYSQLI_ASSOC);

    //$OrdenCompra = $row['NoOrden'];




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
              <!-- Inicio Contenido  START WALDORF -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Captura de Ordenes de Compra<small>UF - F - Eventualidades</small></h2>
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
                    <br>
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left row"  action="AltaOC.php" method="post" name="demoform2">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Orden
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="NoOrden" name="NoOrden" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $OrdenCompra?>" readonly>
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" id="single_cal2" placeholder="" name="Fecha" >
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Proveedor
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Proveedor" name="Proveedor" required="required" placeholder="Razon Social"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <?php
                            $query = "SELECT * FROM DepartamentoSolicitante";
                            $resultado=$conexion->query($query);

                       ?>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento Solicitante</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="DepSolicitante" id="DepSolicitante">
                          <option value="0">Seleccione un Departamento Solicitante</option>

                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idDepartamentoSolicitante']; ?>"><?php echo $row['descripcionUnidadPresupuestal']; ?></option>
                            <?php } ?>
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
                            <option value="0">SELECCIONE UN PROYECTO</option>


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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fuente de Financiamiento</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Fuente" id="Fuente">
                            <option value="0">SELECCIONE UNA FUENTE</option>


                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idFuenteFinanciamiento']; ?>"><?php echo $row['FuenteFinanciamiento'].' - '.$row['descripcionFuenteFinanciamiento']; ?></option>
                            <?php } ?>
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
                            <option value="0">SELECCIONE UN CONVENIO</option>


                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idConvenio']; ?>"><?php echo $row['Convenio'].' - '.$row['descripcionConvenio']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>


                      <?php
                            $query = "SELECT * FROM catcLicitaciones";
                            $resultado=$conexion->query($query);

                       ?>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Licitacion</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Licitacion" id="Licitacion">
                            <option value="0">SELECCIONE UNA LICITACIÓN</option>





                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idLicitacion']; ?>"><?php echo $row['Licitacion'].' - '.$row['descripcionLicitacion']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <?php
                            $query = "SELECT * FROM catCategorias ORDER BY DescripcionCategoria ASC ";
                            $resultado=$conexion->query($query);

                       ?>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoría</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="Categoria" id="Categoria">
                            <option value="0">SELECCIONE UNA CATEGORIA</option>


                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idcatCategorias']; ?>"><?php echo $row['DescripcionCategoria']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">COMPRA / PAGO</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="CompraPago" id="CompraPago">
                            <option value="0">SELECCIONE COMPRA / PAGO</option>


                            <option value="1">ORDEN DE COMPRA</option>
                            <option value="2">ORDEN DE PAGO</option>

                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Total
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Monto" name="Monto" required="required" placeholder="$ Total Neto "  class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>












                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>




              <!-- Final Contenido END WALDORF -->


                  <div class="ln_solid"></div>

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

    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

     <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>

    <!-- bootstrap-datetimepicker -->
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

        <!-- validator -->
        <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>


  <script>



$('#single_cal2').datetimepicker({
    format: 'YYYY-MM-DD'
});


  </script>

</html>
