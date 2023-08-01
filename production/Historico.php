<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';
include '../Restriccion.php';


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



              <!-- eclet table -->



              <!--  Excel table end-->


<!-- eclet table -->
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Listado de Requisición </h2>
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
      <div class="row">
        <div class="col-sm-12">
          <div class="card-box table-responsive">
            <p class="text-muted font-13 m-b-30">

            </p>

            <table id="datatable2" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th class="column-title">Folio </th>
                  <th class="column-title">Fecha </th>
                  <th class="column-title">Dep Solicitante </th>
                  <th class="column-title">Solicitante</th>
                  <th class="column-title">Estatus </th>
                  <th class="column-title">Mostrar </th>
                  <th class="column-title no-link last"><span class="nobr">Autorizar</span>
                  <th class="column-title no-link last"><span class="nobr">No Autorizar</span>

                </tr>
              </thead>


              <tbody>


                                                                  <?php

                                                                  $host_db = "localhost";
                                                                  $user_db = "root";
                                                                  $pass_db = "sr1920la";
                                                                  $db_name = "Compras";
                                                                  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

                                                                  if ($conexion->connect_error) {
                                                                   die("La conexion falló: " . $conexion->connect_error);
                                                                  }





                                                                  $sql = 'SELECT * FROM Requi a WHERE Estatus != 0   ORDER BY Folio DESC';
                                                                  $resultado = $conexion->query($sql);

                                                                  while ($row = $resultado->fetch_assoc() )
                                                                   {
                                                                      switch ($row["Estatus"])
                                                                      {
                                                                        case 1:
                                                                          // code...
                                                                      $EstatusMuestra = '<span style="Font-size:15px;" class="label label-success">AUTORIZADO</span>';
                                                                          break;


                                                                          case 2:
                                                                          $EstatusMuestra = '<span style="Font-size:15px;" class="label label-danger">NO AUTORIZADO</span>';
                                                                            break;

                                                                            case 3:
                                                                            $EstatusMuestra = '<span style="Font-size:15px;" class="label label-warning">COTIZADO</span>';
                                                                              break;

                                                                              case 4:
                                                                              $EstatusMuestra = '<span style="Font-size:15px;" class="label label-primary">PASAR A RECOGER</span>';
                                                                                break;

                                                                                case 5:
                                                                                $EstatusMuestra = '<span style="Font-size:15px;" class="label label-default">SURTIDO</span>';
                                                                                  break;



                                                                        default:
                                                                          // code...
                                                                          break;
                                                                      }


                                                                       echo '

                                                                             <tr class="even pointer">

                                                                               <td class=" ">'.$row["Folio"].'</td>
                                                                               <td class=" ">'.$row["Fecha"].'</td>
                                                                               <td class=" ">'.$row["IdUnidad"].'</td>
                                                                              <td class=" ">'.$row["Solicitante"].'</td>




                                                                               <td class="">

                                                                               '.$EstatusMuestra.'



                                                                                   </td>

                                                                               <td class=" last">

                                                                              <a href="mostrarAutorizar.php?Folio='.$row["Folio"].'&IdRequi='.$row["IdRequi"].'">  <span style="Font-size:15px;" class="label label-info"><i class="fa fa-eye"></i> </span>       </a>
                                                                               </td>


                                                                         <td class=" last">

                                                                                  <a href="CambioEstatus.php?Folio='.$row["Folio"].'&IdRequi='.$row["IdRequi"].'&Accion=1">  <span style="Font-size:15px;" class="label label-success"><i class="fa fa-check-circle"></i> </span>  </a>
                                                                                   </td>

                                                                                   <td class=" last">

                                                                                            <a href="CambioEstatus.php?Folio='.$row["Folio"].'&IdRequi='.$row["IdRequi"].'&Accion=2">  <span style="Font-size:15px;" class="label label-danger"><i class="fa fa-close"></i> </span>  </a>
                                                                                   </td>

                                                                             </tr>



                                                                             ';


                                                                      }


                                                                   ?>


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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

    $('#datatable2').dataTable({
      'iDisplayLength': 100
    });


    </script>


  </body>
</html>
