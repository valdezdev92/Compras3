<?php

include '../Sesiones.php';
include '../Header.php';
include '../Footer.php';
include '../LeftBar.php';
include '../TopNavigation.php';
include '../Scripts.php';
require '../ConexionDB.php';
date_default_timezone_set('America/Chihuahua');
setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
$username = $_SESSION['username'];

$sql = "SELECT * FROM Usuarios WHERE Usuario = '$username'";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
}
$row = $result->fetch_array(MYSQLI_ASSOC);

$Centro = $row['Centro'];
$idUsuario = $row['IdUsuario'];
$NombreUsuario = $row['PrimerNombre'] . ' ' . $row['PrimerApellido'];

$id = $_GET['id']; // orden de compra

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

$sqlinfo = "SELECT * FROM movdOrdenCompra a
INNER JOIN DepartamentoSolicitante b on a.idDepSolicitante = b.idDepartamentoSolicitante
INNER JOIN Proyecto c on a.Proyecto= c.idProyecto
INNER JOIN FuenteFinanciamiento d on a.Fuente = d.idFuenteFinanciamiento
INNER JOIN Convenios e on a.Convenios = e.idConvenio
INNER JOIN catcLicitaciones f on a.idLicitacion = f.idLicitacion
INNER JOIN catCategorias g on a.Categoria = g.idcatCategorias
INNER JOIN catcOrdenesCompra h on a.CompraPago = h.idcatcOrdenesCompra




WHERE a.NoOrden = '$id'";

// echo $sqlinfo;
$result = $conexion->query($sqlinfo);
if ($result->num_rows > 0) {
}
$row = $result->fetch_array(MYSQLI_ASSOC);

$NoOrdenCompra = $row['NoOrden'];
$Fecha = $row['Fecha'];
$Proyecto = $row['descripcionProyecto'];
$FuenteFinanciamiento = $row['FuenteFinanciamiento'];
$descripcionFuenteFinanciamiento = $row['descripcionFuenteFinanciamiento'];
$Fuente = $FuenteFinanciamiento." - ".$descripcionFuenteFinanciamiento;
$myDateTime = DateTime::createFromFormat('Y-m-d', $Fecha);
$newDateString = $myDateTime->format('d/m/Y');
$Proveedor = $row['Proveedor'];
$descripcionUnidadPresupuestal = $row['descripcionUnidadPresupuestal'];
$Convenio = $row['Convenio'];
$descripcionConvenio = $row['descripcionConvenio'];
$Convenios = $Convenio." - ".$descripcionConvenio;
$Licitacion = $row['Licitacion'];
$descripcionLicitacion = $row['descripcionLicitacion'];
$Licitaciones = $Licitacion." - ".$descripcionLicitacion;
$Categorias = $row['DescripcionCategoria'];
$descripcionOrdenCompra = $row['descripcionOrdenCompra'];
$Monto = $row['Monto'];

$numeroFormateado = number_format($Monto, 2);








// $departamentoSolicitante = $row['descripcionUnidadPresupuestal'];
// $proyecto = $row['Proyecto'] . ' - ' . $row['descripcionProyecto'];
// $fuente = $row['FuenteFinanciamiento'] . ' - ' . $row['descripcionFuenteFinanciamiento'];
// $UnidadPresupuestal = $row['UnidadPresupuestal'];
// $conveniosss = $row['Convenio'] . ' - ' . $row['descripcionConvenio'];
// $categorias = $row['DescripcionCategoria'];
//
// $motivos = $row['motivoSolicitud'];
// $solicitantePrint = $row['PrimerNombre'] . ' ' . $row['PrimerApellido'];
// $servicioExterno = $row['DescripcionServicioExterno'];
//




// $editable = $row['EstatusRequi'];
//
// $Licitacion = $row['Licitacion'] . ' ' . $row['descripcionLicitacion'];

?>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>ORDEN DE COMPRA NO. <?php echo $id; ?> <small>Información de registro</small></h2>
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
                        <label class="control-label col-md-2 col-xs-12">No. Orden de Compra </label>
                        <div class="col-md-4 col-xs-12">
                          <input type="text" class="form-control"  readonly value="<?php echo $NoOrdenCompra; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">Fecha de la Orden</label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $newDateString; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">Proveedor</label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $Proveedor; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">DepartamentoSolicitante</label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $descripcionUnidadPresupuestal; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">Proyecto</label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $Proyecto; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">Fuente</label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $Fuente; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">Convenios</label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $Convenios; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">Licitacion</label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $Licitaciones; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">Categoria </label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $Categorias; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">Servicio Externo / Académico </label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $servicioExterno; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">COMPRA / PAGO </label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php echo $descripcionOrdenCompra; ?>">
                        </div>
                        <label class="control-label col-md-2  col-xs-12">Monto </label>
                        <div class="col-md-4  col-xs-12">
                        <input type="text" class="form-control"  readonly value="<?php  echo "$".$numeroFormateado; ?>">
                        </div>
                      </div>
                      </form>
                      <div class="ln_solid"></div>
                      <div class="row">

                    <?php
                        echo '<a href="ModRegistroObjetosRequi4.php?id=' . $id . '"><button class="btn btn-warning pull-right"><i class="fa fa-pencil"></i> Modificar</button></a>';
                      ?>
                    </div>
                  </div>
                </div>

                <div class="ln_solid"></div>

             <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 id="partidas">Requisiciones </h2>
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
<!-- inicio -->
  <form  data-parsley-validate class="form-horizontal form-label-left" action="addVinculoRequiOrden.php" method="post" name="EditRequi">
                      <?php
                          $query = "SELECT * FROM Requisiciones2023 ";
                          $resultado=$conexion->query($query);

                      ?>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Numero de Requi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="idRequi" id="idRequi">
                              <option value="0">SELECCIONE UNA REQUI</option>
                              <?php while($row = $resultado->fetch_assoc()) { ?>
                                <option value="<?php echo $row['idRequisiciones2023']; ?>"><?php echo $row['idRequisiciones2023'].'-'.strtoupper($row['motivoSolicitud']); ?></option>
                                <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">

                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Numero de Requi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Numero requisición..." name="idRequi2">
                          <input type="text" class="form-control" placeholder="Numero requisición..." name="NoOrden" value="<?php echo $NoOrdenCompra; ?>" style="display:none;">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Numero de Requi ROJO</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Numero requisición Rojo..." name="NoRojo">
                        </div>
                      </div>


                      <div class="form-group">

                        <div class="ln_solid"></div>
                        </div>

                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
</form>


<!-- end area  -->

              </div>
             </div>






                  <div class="ln_solid"></div>





                <div class="row">

<!-- Inicio -->

<!-- comentarios START -->








</div>

<!-- Comentarios END -->






<!-- ultima parte para guardar START -->

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
                  <div class="x_title">
                    <h2>Requisiciones Vinculadas </h2>
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

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th># Requi</th>
                          <th>No. Orden Compra</th>
                          <th>Departamento Solicitante</th>
                          <th>Motivos</th>
                          <th>Eliminar</th>
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
                                    $sql5 = "SELECT * FROM movdVinculoOrdenRequi a INNER JOIN Requisiciones2023 b on a.idRequisiciones2023 = b.idRequisiciones2023 INNER JOIN DepartamentoSolicitante c on b.idDepartamentoSolicitante = c.idDepartamentoSolicitante WHERE idmovdOrdenCompra = $NoOrdenCompra ";
                                    $resultado = $conexion->query($sql5);
    
                           // echo $sql5;
                                                             
                                   
    
                                        while ($row = $resultado->fetch_assoc())
                                         {
                                         
                                     
                                                echo '

                                              <tr>
                                                <th scope="row">'. $row['idRequisiciones2023'].'</th>
                                                <td>'. $row['idmovdOrdenCompra'].'</td>
                                                <td>'. $row['descripcionUnidadPresupuestal'].'</td> 
                                                <td>'. $row['motivoSolicitud'].'</td> 
                                                <td><a class="btn btn-danger btn-sm" href="DelVinculo.php?idmovd='.$row['idmovdVinculoOrdenRequi'].'&NoOrden='.$NoOrdenCompra.'"> Eliminar</a></td> 
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

    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="jquery.tabledit.js"></script>





<script>
    $(document).ready(function(){




    $('#data_table').Tabledit({
        editButton: true,
        removeButton: false,
        columns: {
          identifier: [0, 'id'],
          editable: [[1, 'Objeto'],[2, 'Cantidad'], [3, 'unidadMedidaTraducida'], [4, 'Descripcion']]
        },
        hideIdentifier: true,
        url: 'editarCelda.php'
    });



    $('#save').on('click', function(){



      if (confirm("Crear Formato!") == true) {

        var Folio  =   $('#Folio').val();

               // alert('Folio '+Folio);

                    if (Folio != '' )
                    {
                      document.AdqForm.submit();

                    }else {

                      alert('El numero rojo no puede ir vacio');


                    }

        } else {
          alert('Pendinete...');
        }



      });




});

</script>







  </body>

</html>
