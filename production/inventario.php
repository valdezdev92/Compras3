<?php
include '../Sesiones.php';

include '../Header.php';
include '../Footer.php';
include '../ConexionDB.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';
include '../Restriccion.php';

date_default_timezone_set('America/Chihuahua');

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
              patron = /[A-Za-z0-9-.,ñ()`Ñ\s\t]/; // 4

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




              var ValorIdUnidad = $('#DepSolicitante').val();
              // var ValorFolio = $('#Folio').val();
              var ValorMotivos = $('#Motivos').val();
              var ValorSolicitante = $('#Solicitante').val();
              var ValorArea = $('#Area').val();
              // var ValorEstatus = $('#Estatus').val();


              if (ValorIdUnidad == 0)

              {
                alert('Favor de seleccionar un departamento solicitante');
              }  else if (ValorMotivos == "") {
                alert('Favor de proporcionar motivos de requisición');

              } else if (ValorSolicitante == "")

              {
                alert('Favor de proporcionar soliciante');
              } else if (ValorArea == 0)

              {
                alert('Favor de seleccionar un area');
              // } else if (ValorEstatus == 3)
              //
              // {
              //   alert('Favor de seleccionar si esta autorizado o no');
              // }
            }
            else {

                document.demoform2.submit();

              }
              //
              // alert (''+ValorIdUnidad);


            }


          </script>




          <div class="row">





            <!-- Tabla de equis -->


          <div class="col-md-6">
            <div class="x_panel">
                  <div class="x_title">
                    <h2>Inventario  <small>Ingreso de artículos </small></h2>
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
                    <form  action="insertInventario.php" method="post"class="form-horizontal form-label-left input_mask">

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback center">

                        <label for="NoArtículo">No. Artículo</label>
                        <input type="text" list="noArticulo" class="form-control has-feedback-left"  placeholder="" name="noArticulo">
                          <datalist id="noArticulo">
                              <?php
                              require '../ConexionDB.php';

                              $sql = 'SELECT *  FROM inventario ';

                              echo $sql;
                              $resultado = $conexion->query($sql);
                              while ($row = $resultado->fetch_assoc() )
                               {
                                   echo '<option value="'.$row["noArticulo"].'"">';
                                       }
                               ?>
                          </datalist>

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>


                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback center">
                        <label for="presArticulo">Presentación Artículo</label>
                        <input type="text" list="presArticulo" class="form-control has-feedback-left" placeholder="" name="presArticulo">
                        <datalist id="presArticulo">
                            <?php
                            require '../ConexionDB.php';
                            $sql = 'SELECT *  FROM inventario ';
                            $resultado = $conexion->query($sql);
                            while ($row = $resultado->fetch_assoc() )
                             {
                                 echo '<option value="'.$row["Unidad"].'"">';
                                     }
                             ?>
                        </datalist>




                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback center">
                        <label for="desArticulo"> Descripción Artículo</label>
                        <input type="text" list="desArticulo" class="form-control has-feedback-left" placeholder="" name="desArticulo">
                        <datalist id="desArticulo">
                            <?php
                            require '../ConexionDB.php';
                            $sql = 'SELECT *  FROM inventario ';
                            $resultado = $conexion->query($sql);
                            while ($row = $resultado->fetch_assoc() )
                             {
                                 echo '<option value="'.$row["Descripcion"].'"">';
                                     }
                             ?>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback center">
                        <label for="cantArticulo">Cantidad Artículo</label>
                        <input type="text" list="cantArticulo"class="form-control has-feedback-left"  placeholder="" name="cantArticulo">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback center">
                        <label for="colArticulo">Color Artículo</label>
                        <input type="text" list="colArticulo" class="form-control has-feedback-left" placeholder="" name="colArticulo">
                        <datalist id="colArticulo">
                            <?php
                            require '../ConexionDB.php';
                            $sql = 'SELECT *  FROM inventario ';
                            $resultado = $conexion->query($sql);
                            while ($row = $resultado->fetch_assoc() )
                             {
                                 echo '<option value="'.$row["Color"].'"">';
                                     }
                             ?>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>








                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                          <input type="submit" class="btn btn-success"></input>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>

          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Boardered table <small>Bordered table subtitle</small></h2>
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

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>IDInventario</th>
                          <th>Unidad</th>
                          <th>Cantidad</th>
                          <th>Descripción</th>
                          <th>Color</th>
                          <th>Fecha</th>
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





                        $sql = 'SELECT * FROM inventario ';
                        $resultado = $conexion->query($sql);

                        while ($row = $resultado->fetch_assoc() )
                         {

                             echo '

                                   <tr class="even pointer">

                                     <td class=" ">'.$row["noArticulo"].'</td>
                                     <td class=" ">'.$row["Unidad"].'</td>
                                         <td class=" ">'.$row["Cantidad"].'</td>
                                     <td class=" ">'.$row["Descripcion"].'</td>

                                    <td class=" ">'.$row["Color"].'</td>
                                    <td class=" ">'.$row["Fecha"].'</td>

                                   ';



                            }


                         ?>
                      </tbody>
                    </table>

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
