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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.bootstrap.min.css">

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
              <div class="clearfix"></div>
            <div class="row">

              <!-- Inicio -->
              <!-- button table -->

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Requisición Pendientes de Autorizarse</h2>
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

                          <!-- PHP logica de la tabla START -->

                            <?php
                                   

                                   
                                    // echo $editable;
                                    
                                   

                            
                            ?>

                            <!-- PHP logica de la tabla END -->

                          <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>AUTORIZADA</th>
                                        <th>NO-AUTORIZADA</th>
                                        <th>FOLIO</th>
                                        <th>FECHA</th>
                                        <th>DEP. SOLICITANTE</th>
                                        <th>SOLICITANTE</th>
                         
                        
                                
                                     
                                 
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
                                $sql5 = "SELECT *, a.Estatus AS EstatusRequi FROM Requisiciones2023 a INNER JOIN DepartamentoSolicitante b on a.idDepartamentoSolicitante = b.idDepartamentoSolicitante INNER JOIN Proyecto c on a.idProyecto = c.idProyecto INNER JOIN FuenteFinanciamiento d on a.idFuenteFinanciamiento = d.idFuenteFinanciamiento  INNER JOIN Convenios e on a.idConvenio = e.idConvenio INNER JOIN catCategorias f on a.idcatCategoria = f.idcatCategorias INNER JOIN Usuarios g on a.idUsuario = g.idUsuario INNER JOIN servicioExterno h on a.idServicioExterno = h.idServicioExterno INNER JOIN catcLicitaciones j on a.idLicitacion = j.idLicitacion WHERE idProceso = 3 order by a.idRequisiciones2023 DESC";
                                $resultado = $conexion->query($sql5);

                       // echo $sql5;
                                                         
                               

                                    while ($row = $resultado->fetch_assoc())
                                     {
                                      $solicitantePrint = $row['PrimerNombre'] . ' ' . $row['PrimerApellido'];


                                      $id = $row['idRequisiciones2023'];

                                      $sql2 = "SELECT *, b.Cantidad AS CantidadProducto FROM Requisiciones2023 a INNER JOIN movdRequisiciones2023 b on a.idRequisiciones2023 = b.idRequisiciones2023 INNER JOIN catcUnidadesMedida c on b.idcatcUnidadesMedida = c.idcatcUnidadesMedida INNER JOIN catcProductos d on b.idProducto = d.idProducto WHERE a.idRequisiciones2023 = $id and b.idRecibido = 1";
                                      $resultado2 = $conexion->query($sql2);

                                    //  echo $sql2;
      
                                 
      
                                      
      
                                     
                                            // $EstatusRecibidas = $row['idRecibido'];
                                            //   switch ($EstatusRecibidas) {
                                            //     case '0':
                                            //       $banderaRecibida = '<span class="label label-primary ">Sin Clasificar</span>';                                               
                                            //       break;

                                            //       case '1':
                                            //         $banderaRecibida = '<span class="label label-success ">Recibida</span>';                                                 
                                            //         break;

                                            //         case '2':
                                            //           $banderaRecibida = '<span class="label label-danger ">No Recibida</span>';                                               
                                            //           break;

                                            //     default:
                                            //       # code...
                                            //       break;
                                            //   }
                                              

                                           

                        
    
                                            echo '
                                            <tr class="text-center">
                                            <td class="text-center"><a href="autorizarSET.php?idd='.$row['idRequisiciones2023'].'&opc=1&id='.$row['idRequisiciones2023'].'"> <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-check-circle"></i></button></a> </td>
                                            <td class="text-center"><a href="autorizarSET.php?idd='.$row['idRequisiciones2023'].'&opc=2&id='.$row['idRequisiciones2023'].'"> <button class="btn btn-sm btn-warning" type="button"><i class="fa fa-close"></i></button></a> </td>
                                            
                                            <td> <a href="mostrarRequi2023.php?id='.$row['idRequisiciones2023'].'" > <b>'.$row['idRequisiciones2023'].'</a></b></td>
                                            <td>'.$row['Fecha'].'</td>
                                            <td>'.$row['descripcionUnidadPresupuestal'].'</td>
                                            <td>'.$solicitantePrint.'</td>
                                  
                                  
                          
                                                
                            
                               
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

              <div class="clearfix"></div>
              <!-- SEPARADANDO EN MEDIO -->

              <div class="ln_solid"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Requisición Autorizadas</h2>
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

                          <!-- PHP logica de la tabla START -->

                            <?php
                                   

                                   
                                    // echo $editable;
                                    
                                   

                            
                            ?>

                            <!-- PHP logica de la tabla END -->

                          <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>CAMBIO ESTATUS</th>
                                        <th>FOLIO</th>
                                        <th>FECHA</th>
                                        <th>DEP. SOLICITANTE</th>
                                        <th>SOLICITANTE</th>
                                        <th>CANTIDAD</th>
                                        <th>DESCRIPCION</th>
                                        <th>ESTATUS</th>

                                
                                     
                                 
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
                                $sql = "SELECT *, a.Estatus AS EstatusRequi FROM Requisiciones2023 a INNER JOIN DepartamentoSolicitante b on a.idDepartamentoSolicitante = b.idDepartamentoSolicitante INNER JOIN Proyecto c on a.idProyecto = c.idProyecto INNER JOIN FuenteFinanciamiento d on a.idFuenteFinanciamiento = d.idFuenteFinanciamiento  INNER JOIN Convenios e on a.idConvenio = e.idConvenio INNER JOIN catCategorias f on a.idcatCategoria = f.idcatCategorias INNER JOIN Usuarios g on a.idUsuario = g.idUsuario INNER JOIN servicioExterno h on a.idServicioExterno = h.idServicioExterno INNER JOIN catcLicitaciones j on a.idLicitacion = j.idLicitacion WHERE idProceso = 4 ";
                                $resultado = $conexion->query($sql);

                            

                                

                                    while ($row = $resultado->fetch_assoc())
                                     {


                                      $id = $row['idRequisiciones2023'];

                                      $sql2 = "SELECT *, b.Cantidad AS CantidadProducto FROM Requisiciones2023 a INNER JOIN movdRequisiciones2023 b on a.idRequisiciones2023 = b.idRequisiciones2023 INNER JOIN catcUnidadesMedida c on b.idcatcUnidadesMedida = c.idcatcUnidadesMedida INNER JOIN catcProductos d on b.idProducto = d.idProducto INNER JOIN catRecibidas e on e.idRecibido = b.idRecibido WHERE   a.idRequisiciones2023 = $id AND b.idRecibido >= 3 ";
                                      $resultado2 = $conexion->query($sql2);
                                      $solicitantePrint = $row['PrimerNombre'] . ' ' . $row['PrimerApellido'];

                                      //echo $sql2;
      
                                 
      
                                      
      
                                          while ($row2 = $resultado2->fetch_assoc())
                                          

                                          {
                                              $EstatusRecibidas = $row2['idRecibido'];

                                            //  echo $EstatusRecibidas;
                                              switch ($EstatusRecibidas) {
                                                case '0':
                                                  $banderaRecibida = '<span class="label label-primary ">Sin Clasificar</span>';                                               
                                                  break;

                                                  case '1':
                                                    $banderaRecibida = '<span class="label label-success ">Recibida</span>';                                                 
                                                    break;

                                                    case '2':
                                                      $banderaRecibida = '<span class="label label-danger ">No Recibida</span>';                                               
                                                      break;

                                                      case '3':
                                                        $banderaRecibida = '<span class="label label-primary ">Autorizada  </span>';                                               
                                                        break;

                                                        case '4':
                                                          $banderaRecibida = '<span class="label label-danger ">No Autorizada  </span>';                                               
                                                          break;
    
  

                                                default:
                                                $banderaRecibida = '<span class="label label-default ">sin definir </span>';                                               
                                                break;
                                              }
                                              
                        
    
                                            echo '
                                            <tr class="text-center">
                                            <td class="text-center">
                                            <a href="autorizarSET.php?idd='.$row2['idmovdRequisiciones2023'].'&opc=1&id='.$row2['idRequisiciones2023'].'"> <button class="btn btn-sm btn-success" type="button"><i class="fa fa-check-circle"></i></button></a> 
                                            <a href="autorizarSET.php?idd='.$row2['idmovdRequisiciones2023'].'&opc=2&id='.$row2['idRequisiciones2023'].'"> <button class="btn btn-sm btn-danger" type="button"><i class="fa fa-close"></i></button></a>



                                            </td>
                                                <td><a href="mostrarRequi2023.php?id='.$row2['idRequisiciones2023'].'"><b>'.$row2['idRequisiciones2023'].'</b></a></td>
                                                <td>'.$row2['Fecha'].'</td>
                                                <td>'.$row['descripcionUnidadPresupuestal'].'</td>
                                                <td>'.$solicitantePrint.'</td>
                                                <td>'.$row2['Cantidad'].'</td>
                                                <td>'.$row2['descripcionProducto'].'</td>
                                                <td>'.$banderaRecibida.'</td>

                                                

                                                
                                                
                               
                                            </tr>
    
    
                                                    ';


                                          }

                          

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


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.colVis.min.js"></script>

    <script type="text/javascript">


$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );


        var table = $('#example2').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf' ],
        order: [[1, 'desc']],
    } );
 
    table.buttons().container()
        .appendTo( '#example2_wrapper .col-sm-6:eq(0)' );
} );



    </script>


  </body>
</html>
