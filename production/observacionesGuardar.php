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

$sqlinfo = "SELECT *, a.Estatus AS EstatusRequi FROM Requisiciones2023 a INNER JOIN DepartamentoSolicitante b on a.idDepartamentoSolicitante = b.idDepartamentoSolicitante INNER JOIN Proyecto c on a.idProyecto = c.idProyecto INNER JOIN FuenteFinanciamiento d on a.idFuenteFinanciamiento = d.idFuenteFinanciamiento  INNER JOIN Convenios e on a.idConvenio = e.idConvenio INNER JOIN catCategorias f on a.idcatCategoria = f.idcatCategorias INNER JOIN Usuarios g on a.idUsuario = g.idUsuario INNER JOIN servicioExterno h on a.idServicioExterno = h.idServicioExterno INNER JOIN catcLicitaciones j on a.idLicitacion = j.idLicitacion WHERE idRequisiciones2023 = '$id'";

//  echo $sqlinfo;
$result = $conexion->query($sqlinfo);
if ($result->num_rows > 0) {
}
$row = $result->fetch_array(MYSQLI_ASSOC);

$unidadAdministrativa = $row['UnidadAdministrativa'];
$departamentoSolicitante = $row['descripcionUnidadPresupuestal'];
$proyecto = $row['Proyecto'] . ' - ' . $row['descripcionProyecto'];
$fuente = $row['FuenteFinanciamiento'] . ' - ' . $row['descripcionFuenteFinanciamiento'];
$UnidadPresupuestal = $row['UnidadPresupuestal'];
$conveniosss = $row['Convenio'] . ' - ' . $row['descripcionConvenio'];
$categorias = $row['DescripcionCategoria'];
$idcatCategorias = $row['idcatCategorias'];

$motivos = $row['motivoSolicitud'];
$solicitantePrint = $row['PrimerNombre'] . ' ' . $row['PrimerApellido'];
$servicioExterno = $row['DescripcionServicioExterno'];
$fecha = $row['Fecha'];
$myDateTime = DateTime::createFromFormat('Y-m-d', $fecha);
$newDateString = $myDateTime->format('d/M/Y');
$editable = $row['EstatusRequi'];

$Licitacion = $row['Licitacion'] . ' ' . $row['descripcionLicitacion'];

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

                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Licitación </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $Licitacion; ?>">
                        </div>




                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Solicitante </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $solicitantePrint; ?>">
                        </div>
                      </div>


                      </form>
                      <div class="ln_solid"></div>

                      <div class="row">  

                      
                    <?php 
                        if ($editable == "Modificable") 
                        {
                          echo '<a href="ModRegistroObjetosRequi2.php?id='.$id.'"><button class="btn btn-warning pull-right"><i class="fa fa-pencil"></i> Modificar</button></a>';
                        }else {
                          echo '<button class="btn btn-warning pull-right" disabled><i class="fa fa-pencil"></i> Modificar</button>';
                        }
                    
                    ?>

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
                    <div class="ln_solid"></div>

                    <div class="row">   


                    <?php 
                        if ($editable == "Modificable") 
                        {
                          echo ' <a href="registroObjetosRequi.php?id='.$id.'"><button class="btn btn-warning pull-right " style="margin-right: 5px;"><i class="fa fa-pencil"></i> Modificar</button></a>';
                        }else {
                          echo '<button class="btn btn-warning pull-right " disabled style="margin-right: 5px;"><i class="fa fa-pencil"></i> Modificar</button>';
                        }
                    
                    ?>





                    
                    </div>


                  </div>
                </div>
              </div>
             </div>






                  <div class="ln_solid"></div>





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
                      <form action="saveObservacionesRequi.php" method="POST" name="saveForm" >
                      <textarea name="Observaciones" class="resizable_textarea form-control" placeholder="Observaciones de la requisicion"></textarea>
                      <input type="text" name="id" style="display:none;" value="<?php echo $id;?>">
                   
                    </div>
                  </div>
                        </div>
                      </div>        
              </div>



 
</div>






</div>

<!-- eventos set ----------------------------------------------------------------------------->

<?php

    if ($idcatCategorias == 18 || $idcatCategorias == 19 || $idcatCategorias == 20  ) {


      echo '
      
      <div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="row no-print">
        <div class="col-xs-12">

          <div class="col-sm-4">
                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha y Hora de Entrega</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          
                          <div class="input-group date" id="myDatepicker4">
                              <input type="text" class="form-control" readonly="readonly" name="FechaEntregaObs" required>
                              <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>


                        </div>
                      </div>
            </div>





            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Persona a entregar</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="PersonaEntregar"  name="PersonaEntregar" class="form-control"  required name="PersonaEntregar">
                </div>
                       
                </div>
            </div>


 



            <div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefono </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="TelefonoEntrega" class="form-control"  required name="TelefonoEntrega" >
                </div>

              </div>
            </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    

</div>
      
      
      
      
      
      ';
     
    }



?>


<!-- eventos set END -->

<!-- Comentarios END -->




<!-- ultima parte para guardar START -->

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
             

                  <div class="row no-print">
                        <div class="col-xs-12">
                        <button class="btn btn-success btn-block btn-lg" id="save" style="margin-right: 5px;"><i class="fa fa-save"></i> GUARDAR</button>
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



            <!-- bootstrap-daterangepicker -->
            <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>


    <script type="text/javascript">
      $('#datatable').dataTable({
        'iDisplayLength': 100
      });
    </script>




    <script type="text/javascript">
      $(document).ready(function() {


          
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        format: 'DD-MM-YYYY HH:mm',
        allowInputToggle: true
    });





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



          $('#save').on('click', function(){

      

          if (confirm("Guardar Requisición?!") == true)
           {
                //verificamos que no sea un evento

                var evento = <?php echo $idcatCategorias;?>

                if (evento == 18 || evento == 19 || evento == 20 ) 
                {
                  var PersonaEntregar  =   $('#PersonaEntregar').val(); 
                  var FechaEntregaObs  =   $('#FechaEntregaObs').val(); 
                  var TelefonoEntrega  =   $('#TelefonoEntrega').val(); 

                    if (PersonaEntregar == "") 
                    {
                      alert("Debe colocar la Persona a la que se entregará");
                      
                      $('#PersonaEntregar').addClass('parsley-error');
                    }else if (TelefonoEntrega == "") {
                      $('#PersonaEntregar').removeClass('parsley-error');
                      alert("Debe colocar el Telefono de quien se le que se entregará");
                      $('#TelefonoEntrega').addClass('parsley-error');

                      
                    }else if (FechaEntregaObs =="" ) {
                      $('#TelefonoEntrega').removeClass('parsley-error');
                      alert("Debe seleccionar una hora y fecha para entregar");
                      $('#FechaEntregaObs').addClass('parsley-error');

                      
                    }else {
                      document.saveForm.submit();
                    }

                  
                }
                else{

                  document.saveForm.submit();
                }

           
            } else {
              alert('Pendiente...');
            }



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
