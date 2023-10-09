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

$id = $_GET['id'];

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




    var ValorCuenta = $('#Cuenta').val();
    var ValorSubCuenta = $('#SubCuenta').val();
    var ValorArea = $('#Area').val();
    var ValorMotivos = $('#Motivos').val();


    if (ValorCuenta == 0)

    {
      alert('Favor de seleccionar una cuenta');
    } else if (ValorSubCuenta == 0) {
      alert('Favor de seleccionar una Sub Cuenta');


    } else if (ValorArea == 0) {
      alert('Favor de seleccionar un Area');


    } else if (ValorMotivos == "") {
      alert('Favor de escribir motivo para la requisición ');


    } else {

      document.demoform2.submit();

    }



  }
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

            <?php

if (isset($_GET['Mensaje'])) {
    $id = $_GET['id'];
    $obj = $_GET['obj'];
    $prod = $_GET['prod'];

    switch ($_GET['Mensaje']) {
        case 'Correcto':

            echo

                '

      <div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <p style="font-size:20px;">Requi No.' . $id . ' Completada Exitosamente.   </p>

      </div>



      ';
            # code...
            break;

        case 'Modificada-Correcto':

            echo

                '

        <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p style="font-size:20px;">Requi No.' . $id . ' Modificada Correctamente</p>

        </div>



        ';
            # code...
            break;

        case 'YaExiste':

            echo

                '

                                          <div class="alert alert-warning alert-dismissable">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <p style="font-size:20px;">Requi No.' . $id . ' Ya Existe en la BD</p>

                                          </div>



                                          ';
            # code...
            break;

        case 'addok':
            echo

                '

                                              <div class="alert alert-danger alert-dismissable">
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                              <p style="font-size:20px;"> Producto: <b>' . $prod . ' </b>se ha añadido correctamente en el objeto del gasto: <b>' . $obj . '</b></p>
                                                  </div>';
            break;

        default:
            # code...
            break;
    }

}

?>


<?php

$sqlinfo = "SELECT *, a.Estatus AS EstatusRequi FROM Requisiciones2023 a INNER JOIN DepartamentoSolicitante b on a.idDepartamentoSolicitante = b.idDepartamentoSolicitante INNER JOIN Proyecto c on a.idProyecto = c.idProyecto INNER JOIN FuenteFinanciamiento d on a.idFuenteFinanciamiento = d.idFuenteFinanciamiento  INNER JOIN Convenios e on a.idConvenio = e.idConvenio INNER JOIN catCategorias f on a.idcatCategoria = f.idcatCategorias INNER JOIN Usuarios g on a.idUsuario = g.idUsuario INNER JOIN servicioExterno h on a.idServicioExterno = h.idServicioExterno INNER JOIN movdObservacionesRequi i on a.idRequisiciones2023 = i.idRequisiciones2023 INNER JOIN catcLicitaciones ww on a.idLicitacion = ww.idLicitacion WHERE a.idRequisiciones2023 = '$id'";

 
//echo $sqlinfo;
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
$descripcionLicitacion = $row['descripcionLicitacion'];

$myDateTime = DateTime::createFromFormat('Y-m-d', $fecha);
$newDateString = $myDateTime->format('d/M/Y');
$editable = $row['EstatusRequi'];
$observaciones = $row['ObservacionesRequi']

?>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Requisicion No. <?php echo $id; ?> <small>Información de registro</small></h2>
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
                    <form class="form-horizontal form-label-left input_mask">



                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Unidad Administrativa</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" class="form-control"  readonly value="<?php echo $unidadAdministrativa; ?>">
                        </div>
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Departamento Solicitante</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $departamentoSolicitante; ?>">
                        </div>


                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Proyecto</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $proyecto; ?>">
                        </div>




                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Fuete de Financiamiento</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $fuente; ?>">
                        </div>




                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Unidad Presupuestal</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $UnidadPresupuestal; ?>">
                        </div>




                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Convenios</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $conveniosss; ?>">
                        </div>




                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoría</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $categorias; ?>">
                        </div>




                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Fecha *</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $newDateString; ?>">
                        </div>






                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Motivos Requisición </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $motivos; ?>">
                        </div>






                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Servicio Externo / Académico </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $servicioExterno; ?>">
                        </div>




                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Solicitante </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $solicitantePrint; ?>">
                        </div>

                        
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Licitación </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $descripcionLicitacion; ?>">
                        </div>

              
                      </div>


                      </form>
<div class="row">
                      <?php
                          $id = $_GET['id'];
                          echo '<a href="ModRegistroObjetosRequi4.php?id=' . $id . '"><button class="btn btn-warning pull-right"><i class="fa fa-pencil"></i> Modificar</button></a>';
                           ?>
                           </div>
                      <div class="ln_solid"></div>

                      <div class="row">
                      <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr class="headings">

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
             <td class=" ">' . $row["unidadMedidaTraducida"] . '</td>
             <td class=" ">' . $row["descripcionProductoRequi"] . '</td>

             </td>
           </tr>


           ';
}

?>

             <a href=""></a>


                        </tbody>
                      </table>
                      </div>

                



               
                  </div>
                </div>





            
<!-- final de la primera seccion -->

    


            









                <div class="row">

<!-- Inicio -->

<!-- comentarios START -->

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="row no-print">
                        <div class="col-xs-12">
                        <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Observaciones</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="col-md-12 col-lg-12 col-sm-12">
                      <!-- blockquote -->
                      <blockquote>
                        <p><?php echo $observaciones;?></p>
                        <footer><?php echo $solicitantePrint;?> <cite title="Source Title"><?php echo $departamentoSolicitante;?></cite>
                        </footer>
                      </blockquote>

              
                    </div>
                    
                    
                    
                    </div>
                  </div>
                        </div>
                      </div>        
              </div>




</div>






</div>

<!-- Comentarios END -->




<!-- ultima parte para guardar START -->

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
             

                  <div class="row no-print">
                        <div class="col-xs-12">
                       <a href="printRequi2023.php?id=<?php echo $id;?>" target="_blank"> <button class="btn btn-primary pull-right btn-lg" id="print"  style="margin-right: 5px;"><i class="fa fa-print"></i> IMPRIMIR</button></a>
                        </div>
                      </div>
          
              </div>




</div>






</div>


<!-- ultima parte para guardar  END-->



</div>


                </div>
              </div>
            </div>
          </div>




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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>


    <script type="text/javascript">
      $('#datatable').dataTable({
        'iDisplayLength': 100
      });
    </script>




    <script type="text/javascript">
      $(document).ready(function() {
        $("#ObjetoGasto").change(function() {


          $("#ObjetoGasto option:selected").each(function() {
            ObjetoGasto = $(this).val();
            $.post("getSubProducto.php", {
              ObjetoGasto: ObjetoGasto
            }, function(data) {
              $("#Producto").html(data);
            });
          });
        })

        $('#AddP').on('click', function(){

          // alert("hihihi");

          var Objeto  =   $('#ObjetoGasto').val();
          var Cantidad  =   $('#Cantidad').val();
          var Unidad  =   $('#unidadMedida').val();
          var Producto  =   $('#Producto').val();

          if (Objeto == 0)
          {
            alert('Debe seleccionar un objeto del gasto');
          }
          else if (Cantidad == '')
          {
            alert('Debe tener una cantidad');
          }
          else if (Unidad == 0)
          {
            alert('Debe seleccionar una unidad');
          }
          else if (Producto == 0)
          {
            alert('Debe seleccionar un producto');
          }
          else {
            document.AddproductoForm.submit();

          }



         });



         $('#RegP').on('click', function(){

              // alert("hihihi");

              var Objeto2  =   $('#ObjetoGastoRegistro').val();
              var Producto2  =   $('#DescripcionProductoRegistro').val();

              if (Objeto2 == 0)
              {
                alert('Debe seleccionar un objeto del gasto');
              }
              else if (Producto2 == '')
              {
                alert('Debe escribir una descripción');
              }
              else {
                document.registroProductoCatalogoForm.submit();

              }



});



          $('#printy').on('click', function(){

      
           <?php echo  "window.location.href = 'printRequi2023.php?id=$id'";?>



          });







      });

      function updateChar() {

        var zone = document.getElementById("Area");

        if (zone.value == "2") {

          alert("You clicked Zone 1.");

          $(function() {
            $("#Funcion").val('0')
          });
        }
      }
    </script>







  </body>

</html>
