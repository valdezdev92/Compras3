<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';
// include '../Restriccion.php';


$host_db = "localhost";
$user_db = "root";
$pass_db = "sr1920la";
$db_name = "Compras3";
$tbl_name = "Usuarios";
  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM Usuarios WHERE Usuario = '$username'";

// echo $sql;

$result = $conexion->query($sql);


if ($result->num_rows > 0)
 {
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);


$Centro = $row['Centro'];
$NombreUsuario = $row['PrimerNombre'].' '.$row['PrimerApellido'];
$idUsuario = $row['IdUsuario'];

// echo 'waldorfffff...'.$idUsuario;


 ?>


<!DOCTYPE html>
<html lang="es">
  <head>
        <?php echo $Header; ?>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

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

//
// $('#datatable').dataTable({
//   'iDisplayLength': 20,
//    'bSortCellsTop': false
// });


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

                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                              <div class="x_panel">
                                                <div class="x_title">
                                                  <h1> Favor de imprirmir, firmar y entregar su requisición en <b>Fecha y Hora</b> establecidas en Secretaría Administrativa </h1>
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




                                                  <div class="clearfix"></div>

                                                </div>
                                              </div>
                                            </div>



<!-- eclet table -->


<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Listado de Requisición del Usuario : <?php echo $NombreUsuario; ?></h2>
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
              <?php

                  if (isset($_GET['Mensaje']))
                  {
                      $Folio=$_GET['Folio'];

                      switch ($_GET['Mensaje'])
                      {
                        case 'Correcto':

                        echo

                        '

                        <div class="alert alert-info alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p style="font-size:20px;">Requi No.'.$Folio.' Agregada Exitosamente.   </p>

                        </div>
                        <script language=javascript>

window.open(FormatoRequi.php?Mensaje=Correcto&Folio='.$Folio.', "Diseño Web", "width=300, height=200")
</script>




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


            </p>

            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th class="column-title">Folio </th>
                  <th class="column-title">Fecha </th>
                  <th class="column-title">Motivo</th>
                  <th class="column-title">Estatus </th>
                  <th class="column-title">Impirmir</th>
                  <th class="column-title">Ver </th>
                  <th class="column-title">Modificar</th>
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





                                                                  $sql = "SELECT * FROM Usuarios a INNER JOIN Requisiciones2023 b on a.idUsuario = b.idUsuario INNER JOIN catcEstatusProceso c on b.idProceso = c.idProceso WHERE a.idUsuario= '$idUsuario'";
                                                                    //echo $sql;
                                                                  $resultado = $conexion->query($sql);

                                                          

                                                                  while ($row = $resultado->fetch_assoc() )
                                                                   {

                                                                    $fecha = $row['Fecha'];
                                                                    $myDateTime = DateTime::createFromFormat('Y-m-d', $fecha);
                                                                    $newDateString = $myDateTime->format('d/M/Y');
                                                                    $editable = $row['Estatus'];

                                                                    if ($editable == 'Modificable') 
                                                                      {
                                                                        $varMostrar  = '<a href="#"><button disabled class="btn btn-sm btn-primary" type="button"><i class="fa fa-eye"></i> Mostrar</button> </a>';
                                                                        $varImprimible = '<a href="#"><button disabled class="btn btn-sm btn-warning" type="button"><i class="fa fa-print"></i> Imprimir</button> </a>';
                                                                        $varModificable = '<a href="registroObjetosRequi.php?id='.$row['idRequisiciones2023'].'"><button class="btn btn-sm btn-warning" type="button"><i class="fa fa-pencil"></i> Modificar</button> </a>';
                                                                     
                                                                      }
                                                                      else {
                                                                        $varMostrar = '<a target="_blank" href="mostrarRequi2023.php?id='.$row['idRequisiciones2023'].'"><button class="btn btn-sm btn-primary" type="button"><i class="fa fa-eye"></i> Ver</button> </a>';  

                                                                        $varImprimible = '<a  target="_blank" href="printRequi2023.php?id='.$row['idRequisiciones2023'].'"><button class="btn btn-sm btn-danger" type="button"><i class="fa fa-print"></i> Imprimir</button> </a>';

                                                                        $varModificable = '<a href="#"><button disabled class="btn btn-sm btn-warning" type="button"><i class="fa fa-pencil"></i> Modificar</button> </a>';
                                                                      }
  

                                                                   echo '
                                                             
                                                                   <tr>
                                                                   <th> <a href="mostrarRequi2023.php?id='.$row['idRequisiciones2023'].'">'.$row['idRequisiciones2023'].'</th></a> 
                                                                     <th>'.$newDateString.'</th>
                                                                     <th>'.$row['motivoSolicitud'].'</th>
                                                                     <th>'.$row['DescripcionEstatusProceso'].'</th>
                                                                     <th>'.$varImprimible.'</th>
                                                                     <th>'.$varMostrar.'</th>
                                                                     <th>'.$varModificable.'</th>
                                                                   </tr>
                                                        
                                                                 ';

                                                                   }  //while


                                                                   ?>
                                                                  

                      <p style="color : red; font-size: 18px; ">* Nota: Las solicitudes una vez autorizadas no pueden ser modificadas por el usuario.</p>


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
      'iDisplayLength': 20,
      order: [[1, 'desc']]


    });


<?php



if (isset($_GET['Mensaje']))
{

  $Folio =$_GET['Folio'];

  echo 'window.open("FormatoRequi.php?Mensaje=Correcto&Folio='.$Folio.'");';

   }

 ?>



    </script>


  </body>
</html>
