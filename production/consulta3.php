<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';


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




          <div class="row">




                      <?php

                      $hoy = getdate();
                      $d = $hoy['mday'];
                        $m = $hoy['mon'];
                        $y = $hoy['year'];

                          $d2= date("d");
                          $m2= date("m");
                          $y2= date("y");

                        ?>


<!-- Walforf Ezample -->


        <div class="clearfix"></div>


        <!-- Tabla de equis -->


                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Requis Capturadas <small>-</small></h2>
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
                                    <th>
                                      <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">Folio </th>
                                    <th class="column-title">Fecha </th>
                                    <th class="column-title">Dep Solicitante </th>
                                    <th class="column-title">Solicitante</th>
                                    <th class="column-title">Estatus </th>
                                    <th class="column-title">Mostrar </th>
                                    <th class="column-title no-link last"><span class="nobr">Modificar</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
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





                                                  $sql = 'SELECT *, b.Descripcion AS Departamento FROM Requi a INNER JOIN CatcUnidades b on a.IdUnidad = b.IdUnidad ORDER BY 1 DESC';
                                                  $resultado = $conexion->query($sql);

                                                  while ($row = $resultado->fetch_assoc() )
                                                   {


                                                     if ($row["Estatus"] == 0)
                                                     {
                                                       echo '

                                                             <tr class="even pointer">
                                                               <td class="a-center ">
                                                                 <input type="checkbox" class="flat" name="table_records">
                                                               </td>
                                                               <td class=" ">'.$row["Folio"].'</td>
                                                               <td class=" ">'.$row["Fecha"].'</td>
                                                               <td class=" ">'.$row["IdUnidad"].' - '.$row["Departamento"].'</td>
                                                              <td class=" ">'.$row["Solicitante"].'</td>




                                                               <td class=""><b style="color:red;">No Autorizada <a href="CambioEstatus.php?Folio='.$row["Folio"].'&IdRequi='.$row["IdRequi"].'"> <span class="btn btn-small btn-success"> <i class="fa fa-check-circle"></i>&nbsp;   </span></a>      </b></td>

                                                               <td class=" last"><a href="Mostrar.php?Folio='.$row["Folio"].'&IdRequi='.$row["IdRequi"].'"><span class="btn btn-small btn-info"> <i class="fa fa-eye"></i>&nbsp;   </span></a>
                                                               </td>


                                                               <td class=" last"><a href="ModificarRequi.php?Folio='.$row["Folio"].'&IdRequi='.$row["IdRequi"].'"><span class="btn btn-small btn-warning"> <i class="fa fa-pencil"></i>&nbsp;   </span></a>
                                                               </td>
                                                             </tr>



                                                             ';
                                                     }
                                                     else {
                                                       echo '

                                                             <tr class="even pointer">
                                                               <td class="a-center ">
                                                                 <input type="checkbox" class="flat" name="table_records">
                                                               </td>
                                                               <td class=" ">'.$row["Folio"].'</td>
                                                               <td class=" ">'.$row["Fecha"].'</td>
                                                               <td class=" ">'.$row["Departamento"].'</td>
                                                               <td class=" ">'.$row["Solicitante"].'</td>





                                                               <td class=""><b style="color:green;"> Autorizada <a href="CambioEstatus.php?Folio='.$row["Folio"].'&IdRequi='.$row["IdRequi"].'"> <span class="btn btn-small btn-danger"> <i class="fa fa-times-circle"></i>&nbsp;   </span></a>      </b></td>


                                                               <td class=" last"><a href="Mostrar.php?Folio='.$row["Folio"].'&IdRequi='.$row["IdRequi"].'"><span class="btn btn-small btn-info"> <i class="fa fa-eye"></i>&nbsp;   </span></a>
                                                               </td>

                                                               <td class=" last"><a href="ModificarRequi.php?Folio='.$row["Folio"].'&IdRequi='.$row["IdRequi"].'"><span class="btn btn-small btn-warning"> <i class="fa fa-pencil"></i>&nbsp;   </span></a>
                                                                </td>
                                                             </tr>



                                                             ';
                                                     }


                                                      }


                                                   ?>




                                  </tr>
                                </tbody>
                              </table>
                            </div>


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

  </body>
</html>
