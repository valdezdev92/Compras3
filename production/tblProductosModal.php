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
$NombreUsuario = $row['PrimerNombre'] . ' ' . $row['PrimerApellido'];

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

    <body class="nav-md">
      <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">

   

          </div>

     


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
            <?php

            $id= $_GET['id'];

          $sqlinfo = "SELECT *, a.Estatus AS EstatusRequi FROM Requisiciones2023 a INNER JOIN DepartamentoSolicitante b on a.idDepartamentoSolicitante = b.idDepartamentoSolicitante INNER JOIN Proyecto c on a.idProyecto = c.idProyecto INNER JOIN FuenteFinanciamiento d on a.idFuenteFinanciamiento = d.idFuenteFinanciamiento  INNER JOIN Convenios e on a.idConvenio = e.idConvenio INNER JOIN catCategorias f on a.idcatCategoria = f.idcatCategorias INNER JOIN Usuarios g on a.idUsuario = g.idUsuario INNER JOIN servicioExterno h on a.idServicioExterno = h.idServicioExterno INNER JOIN movdObservacionesRequi i on a.idRequisiciones2023 = i.idRequisiciones2023 WHERE a.idRequisiciones2023 = '$id'";

            // echo $sqlinfo;
          $result = $conexion->query($sqlinfo);
          if ($result->num_rows > 0) {
          }
          $row = $result->fetch_array(MYSQLI_ASSOC);

          $unidadAdministrativa = $row['UnidadAdministrativa'];
          $departamentoSolicitante = $row['descripcionUnidadPresupuestal'];
          $proyecto = $row['Proyecto'] . ' - ' . $row['descripcionProyecto'];
          $fuente = $row['FuenteFinanciamiento'] . ' - ' . $row['descripcionFuenteFinanciamiento'];
          $UnidadPresupuestal = $row['UnidadAdministrativa'];
          $conveniosss = $row['Convenio'] . ' - ' . $row['descripcionConvenio'];
          $categorias = $row['DescripcionCategoria'];
          $fecha = $row['Fecha'];
          $motivos = $row['motivoSolicitud'];
          $solicitantePrint = $row['PrimerNombre'] . ' ' . $row['PrimerApellido'];
          $servicioExterno = $row['DescripcionServicioExterno'];

          $myDateTime = DateTime::createFromFormat('Y-m-d', $fecha);
          $newDateString = $myDateTime->format('d/M/Y');
          $editable = $row['EstatusRequi'];
          $observaciones = $row['ObservacionesRequi']

            ?>


              <!-- Final -->

                 <!-- invoiceeeeeee start -->


              <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Universidad Autónoma de Chihuahua - Requisición </h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                        <div class="row">
                            <div class="col-xs-6  invoice-header">


                            <img src="images/uach.png" alt="" width="30%">

                                                            
                            </div>

                            <div class="col-xs-6  invoice-header">
                            <h3>
                            <small class="pull-right">Folio: <?php echo $id;?></small><br>
                            <small class="pull-right">Fecha: <?php echo $newDateString;?></small>
                            </h3>

                          </div>
                       
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                      
                        <div class="col-sm-6 invoice-col">
                        <strong> Unidad Administrativa </strong>: 4400 - Facultad de Ingenierría<br>
                        <strong>Unidad Presupuestal</strong> : <?php echo $UnidadPresupuestal;?><br>
                        <strong>Departamento Solicitante</strong> : <?php echo $departamentoSolicitante; ?><br>
                        <strong>Proyecto</strong> : <?php echo $proyecto;?> <br>
                        <strong>Fuete de Financiamiento</strong> : <?php echo $fuente;?> <br>
                        <strong>Servicio Externo / Académico</strong> : <?php echo $servicioExterno;?> <br>
              

                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col ">
                        <strong> Convenios </strong>: <?php echo $conveniosss;?><br>
                        <strong>Categoría</strong> : <?php echo $categorias;?><br>
                        <strong>Fecha</strong> : <?php echo $newDateString; ?><br>
                        <strong>Motivos Requisición</strong> : <?php echo $motivos;?> <br>
                        <strong>Fuete de Financiamiento</strong> : <?php echo $fuente;?> <br>
                        <strong>Solicitante</strong> : <?php echo $solicitantePrint;?> <br>
                        </div>
                        <!-- /.col -->
           
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="ln_solid"></div>
                      <div class="row">
           
                        <div class="col-xs-12 table">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                              <th class="column-title" style="display: table-cell;">Objeto del gasto </th>
                            <th class="column-title" style="display: table-cell;">Cantidad </th>
                            <th class="column-title" style="display: table-cell;">Unidad </th>
                            <th class="column-title" style="display: table-cell;">Descripción</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "sr1920la";
$db_name = "Compras3";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM movdRequisiciones2023 a INNER JOIN catcUnidadesMedida b on a.idcatcUnidadesMedida = b.idcatcUnidadesMedida INNER JOIN catcProductos c on a.idProducto = c.idProducto WHERE a.idRequisiciones2023 = $id";
$resultado = $conexion->query($sql);

//echo $sql;

while ($row = $resultado->fetch_assoc()) {

    echo '





             <tr class="even pointer">

             <td class=" ">' . $row["idObjetoGasto"] . '</td>
             <td class=" ">' . $row["Cantidad"] . '</td>
             <td class=" ">' . $row["descripcionUnidadMedida"] . '</td>
             <td class=" ">' . $row["descripcionProducto"] . '</td>

             </td>
           </tr>


           ';
}

?>

             <a href=""></a>

                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
        

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                          <p class="lead">Observaciones:</p>
    
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            <?php echo $observaciones;?>
                          </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                      <table class="table table-bordered">
                      <thead>
                        <tr>
                        
                          <th>Solicitó</th>
                          <th>Revisó</th>
                          <th>Autorizó</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td><br></td>
                          <td><br></td>
                          <td><br></td>
                        </tr>
                        <tr>
                          <td><?php echo $solicitantePrint;?><br></td>
                          <td>M.I. Adrián Isaac Orpinel Ureña<br></td>
                          <td>M.I. Adrián Isaac Orpinel Ureña<br></td>
                        </tr>
                       
                      </tbody>
                    </table>
                      </div>

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>

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




  </body>
</html>
