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

$id = 1;

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
   <!-- bootstrap-daterangepicker -->
   <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

      <!-- bootstrap-datetimepicker -->
      <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

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

  function check(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    if (tecla == 32) {
        return true;
    }

    if (tecla == 47) {
        return true;
    }

    if (tecla == 35) {
        return true;
    }

    if (tecla == 45) {
        return true;
    }



    // Patrón de entrada, en este caso solo acepta numeros y letras
    patron = /[A-Za-z0-9]/;
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

      <div class="alert alert-info alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <p style="font-size:20px;">Requi No.' . $id . ' Agregada Exitosamente.   </p>

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

$sqlinfo = "SELECT *,a.Estatus AS RequiEstatus   FROM Requisiciones2023 a INNER JOIN DepartamentoSolicitante b on a.idDepartamentoSolicitante = b.idDepartamentoSolicitante INNER JOIN Proyecto c on a.idProyecto = c.idProyecto INNER JOIN FuenteFinanciamiento d on a.idFuenteFinanciamiento = d.idFuenteFinanciamiento  INNER JOIN Convenios e on a.idConvenio = e.idConvenio INNER JOIN catCategorias f on a.idcatCategoria = f.idcatCategorias INNER JOIN Usuarios g on a.idUsuario = g.idUsuario INNER JOIN servicioExterno h on a.idServicioExterno = h.idServicioExterno  INNER JOIN catcLicitaciones j on a.idLicitacion = j.idLicitacion WHERE idRequisiciones2023 = '$id'";

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

$id = 0;

$editable = $row['RequiEstatus'];

$Licitacion = $row['Licitacion'] . ' ' . $row['descripcionLicitacion'];

$idLicitacion = $row['idLicitacion'];

// echo $editable;

?>
<div class="row">
<div class="" tabindex="-1" role="dialog" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Registro</h4>
      </div>
      <div class="modal-body">
      <div class="container">

      <?php
$query = 'SELECT * FROM catcObjetoGasto WHERE Estatus = "Activo"';
$resultado = $conexion->query($query);

?>



        <div class="x_content">
      <br>
      <form class="form-horizontal form-label-left input_mask" action="registroProductoCatalogo2.php" method="post"  name="registroProductoCatalogoForm">

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
        <select class="form-control" name="ObjetoGastoRegistro" id="ObjetoGastoRegistro">
              <option value="0">SELECCIONE UN OBJETO DEL GASTO</option>


              <?php while ($row = $resultado->fetch_assoc()) {?>
              <option value="<?php echo $row['idObjetoGasto']; ?>"><?php echo $row['idObjetoGasto'] . ' - ' . $row['descripcionObjetoGasto']; ?></option>
              <?php }?>
            </select>

        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <input type="text" class="form-control" id="DescripcionProductoRegistro" name="DescripcionProductoRegistro" placeholder="Descripción del producto" onkeyup="mayus(this)" onkeypress="return check(event)">

          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
        </div>


        <div class="clearfix"></div>

<div class="ln_solid"></div>





        <div class="form-group">
          <div class="col-md-12 col-sm-12 col-xs-12 ">

            <button type="button" class="btn btn-danger btn-block" id="RegP">Registrar</button>
          </div>
        </div>

      </form>
    </div>

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

            </div>









                  <div class="ln_solid"></div>



             <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 id="partidas">Partidas registradas </h2>
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



                    <div class="table">
                      <table id="datatable1" class="table table-striped table-bordered">
                        <thead>
                          <tr class="headings">
                          <th class="column-title" style="">Id</th>
                          <th class="column-title" style="">Objetodelgasto</th>
                          <th class="column-title" style="">Producto</th>




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



$sql = "SELECT * FROM catcProductos WHERE idLicitacion = 0 AND Activo <> 0 ORDER BY descripcionProducto";
$resultado = $conexion->query($sql);

//echo $sql;

$Count = 0;
while ($row = $resultado->fetch_assoc()) {

    $Count++;
    $id = $row["idProducto"];


        echo '

                          <tr class="" id="' . $row["idProducto"] . '">

                          <td class=" ">' . $row["idProducto"] . '</td>
                          <td class=" ">' . $row["idObjetoGasto"] . '</td>
                          <td class=" ">' . $row["descripcionProducto"] . '</td>
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






                  <div class="ln_solid"></div>





                <div class="row">

<!-- Inicio -->




<!-- ultima parte para guardar START -->



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
        <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script src="jquery.tabledit.js"></script>


    <script type="text/javascript">
      $('#datatable5').dataTable({
        'iDisplayLength': 10
      });
    </script>




    <script type="text/javascript">
      $(document).ready(function() {


        $('#datatable1').Tabledit({
        editButton: true,
        removeButton: true,
        columns: {
          identifier: [0, 'id'],
          editable: [[1, 'Objetodelgasto'], [2, 'Producto'], [3, 'Estatus']]
        },
        hideIdentifier: false,
        url: 'editarCelda4.php'
    });




        $("#ObjetoGasto").change(function() {


          $("#ObjetoGasto option:selected").each(function() {
            ObjetoGasto = $(this).val();
            Licitacion = <?php echo $idLicitacion; ?>;
            $.post("getSubProducto.php", {
              ObjetoGasto: ObjetoGasto,
              Licitacion: Licitacion
            }, function(data) {
              $("#Producto").html(data);
            });
          });
        })




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


});






    </script>







  </body>

</html>
