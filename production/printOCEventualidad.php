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

    <style>

      .small{
        font-size: 9px;
      }

      .mediuu{
        font-size: 8px;
      }

      .paddingTable {
        padding: 5px;
      }

  
            <?php  
$id = $_GET['id'];

$sql = "SELECT * FROM movdRequisiciones2023 a INNER JOIN catcUnidadesMedida b on a.idcatcUnidadesMedida = b.idcatcUnidadesMedida INNER JOIN catcProductos c on a.idProducto = c.idProducto WHERE a.idRequisiciones2023 = $id";
$resultado = $conexion->query($sql);
$row = mysqli_num_rows($resultado);

if ($row <= 5) 
{
  $Tamaño = 'Xsmall';
}
elseif ($row <= 10) 
{
  $Tamaño = 'Small';
}
elseif ($row <= 15) 
{
  $Tamaño = 'Large';
}

elseif ($row <= 20) 
{
  $Tamaño = 'XXL';
}

elseif ($row <= 25) 
{
  $Tamaño = 'XXL2';
}
else {
  $Tamaño = 'XXLX2';
}




                switch ($Tamaño) {
                  case 'Xsmall':
                    echo '
                    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
                      padding: 15px;
                      line-height: 1.42857143;
                      vertical-align: top;
                      border-top: 1px solid #ddd;
                  }
                    ';
                    break;

                    case 'Small':
                      echo '
                      .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
                        padding: 10px;
                        line-height: 1.42857143;
                        vertical-align: top;
                        border-top: 1px solid #ddd;
                    }
                      ';
                      break;

                      
                    case 'Large':
                      echo '
                      .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
                        padding: 5px;
                        line-height: 1.42857143;
                        vertical-align: top;
                        border-top: 1px solid #ddd;
                    }
                      ';
                      break;

                      
                    case 'XXL':
                      echo '
                      .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
                        padding: 3px;
                        line-height: 1.42857143;
                        vertical-align: top;
                        border-top: 1px solid #ddd;
                    }
                      ';
                      break;

                      
                      
                    case 'XXL2':
                      echo '
                      .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
                        padding: 1px;
                        line-height: 1.42857143;
                        vertical-align: top;
                        border-top: 1px solid #ddd;
                    }
                      ';
                      break;

                      case 'XXLX2':
                        echo '
                        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
                          padding: 0px;
                          line-height: 1.42857143;
                          vertical-align: top;
                          border-top: 1px solid #ddd;
                      }
                        ';
                        break;

                  default:
                    # code...
                    break;
                }
            ?>
    </style>
  </head>

  <body class="nav-md" onload="window.print()">

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

          $sqlinfo = "SELECT *, a.Estatus AS EstatusRequi FROM Requisiciones2023 a INNER JOIN DepartamentoSolicitante b on a.idDepartamentoSolicitante = b.idDepartamentoSolicitante INNER JOIN Proyecto c on a.idProyecto = c.idProyecto INNER JOIN FuenteFinanciamiento d on a.idFuenteFinanciamiento = d.idFuenteFinanciamiento  INNER JOIN Convenios e on a.idConvenio = e.idConvenio INNER JOIN catCategorias f on a.idcatCategoria = f.idcatCategorias INNER JOIN Usuarios g on a.idUsuario = g.idUsuario INNER JOIN servicioExterno h on a.idServicioExterno = h.idServicioExterno INNER JOIN movdObservacionesRequi i on a.idRequisiciones2023 = i.idRequisiciones2023 INNER JOIN catcLicitaciones j on a.idLicitacion = j.idLicitacion WHERE a.idRequisiciones2023 = '$id'";

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
          $observaciones = $row['ObservacionesRequi'];
          $licitacion = $row['Licitacion'] . ' ' . $row['descripcionLicitacion'];
          $Extension = $row['Extension'];
          $Centro = $row['Centro'];
          $servicioExterno = $row['idServicioExterno'];

          $FechaEntregaObs = $row['FechaEntregaObs'];
          $PersonaEntregar = $row['PersonaEntregar'];
          $TelefonoEntrega = $row['TelefonoEntrega'];

          $IdArea = $servicioExterno;

            ?>

            <?php
                switch ($Centro)

                {
                  case '4401 - DESPACHO DIRECCIÓN':
                    // $Reviso = 'Encargado del Despacho';
                         $Autorizo = 'M.I. Fabián Hernández Martínez';
                     $Reviso = 'M.I. Fabián Hernández Martínez';
       
                  break;
       
                  case '4402 - SECRETARÍA PLANEACIÓN':
       
                   $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                  // $Reviso= 'Encargado del Despacho';
                     $Reviso= 'M.I. Rodrigo De la Garza Aguilar';
       
                  break;
       
       
                  case '4403 - SECRETARÍA ACADEMICA':
       
                  $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                  $Reviso= 'M.I. Arión Ehécatl Juárez Menchaca';
       
                  break;
       
       
                  case '4404 - SECRETARÍA EXTENSION':
       
                  $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                  $Reviso= 'M.V. Aldo Antonio Cisneros Rodríguez';
       
                  break;
       
                  case '4405 - SECRETARÍA DE INVESTIGACIÓN Y POSGRADO':
       
                  $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                  $Reviso = 'DR. Fernando Martínez Reyes';
       
                  break;
       
       
                  case '4406 - SECRETARÍA ADMINISTRATIVA':
       
                   if ($username == 'lrvaldez' || $username == 'raramire' || $username == '21678' )
                   {
                      $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                   $Reviso= 'M.A. Maritza Flores Díaz de León ';
       
                     }
       
                     elseif ($username == '15332' ) {
                       // code...
       
                        $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                       $Reviso= 'M.I. Rodrigo De la Garza Aguilar';
       
                     }
                     elseif ($username == '15332' ) {
                       // code...
       
                        $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                       $Reviso= 'M.I. Rodrigo De la Garza Aguilar';
       
                     }
                     else {
                        $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                         $Reviso= '';
                     }
       
                  break;
       
       
                  case '4407 - LABORATORIO DE SANITARIA':
       
                     if ($IdArea == 1)
                       {
                         $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                         $Reviso= 'Ing. Abril Ibarra Martínez';
                         $CuartaFirma ="";
                       }
                     elseif ($IdArea == 2)
                       {
                         $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                         $Reviso= 'Ing. Mario Lopez Santa Anna';
                         $CuartaFirma ="";
                       }
       
       
                  break;
       
       
       
                  case '4408 - LABORATORIO DE MATERIALES,SUELOS Y ASFALTOS':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
       
                  break;
                  case '4411 - LABORATORIO DE METALURGIA':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
       
                  break;
                  case '4412 - LABORATORIO DE QUIMICA':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
       
                  break;
                  case '4413 - LABORATORIO DE COMPUTACIÓN REDES Y ELECTRÓNICA':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureñaz';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4413 - LABORATORIO DE AUTOMÁTICA':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4414 - LABORATORIO DE MAQUINAS Y HERRAMIENTAS':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4415 - LABORATORIO DE HIDRAULICA':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4416 - LABORATORIO DE SENSORES REMOTOS':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                      $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4417 - LABORATORIO DE TOPOGRAFIA':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4418 - LABORATORIO DE RESONANCIA MAGNETICA':
       
                  if ($IdArea == 1)
                    {
                      $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4419 - LABORATORIO DE FISICA':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4462 - LABORATORIO DE GEOLOGIA':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4462 - LABORATORIO DE GEOFISICA':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
       
                  break;
                  case '4449 - LAB DE AEROESPACIAL':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4408 - COORDINACIÓN DE SERVICIO EXTERNO DE LABORATORIOS':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
                  case '4403 - COORDINACIÓN DE LABORATORIOS ACADÉMICOS':
       
                  if ($IdArea == 1)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Abril Ibarra Martínez';
                    }
                  elseif ($IdArea == 2)
                    {
                       $Autorizo = 'M.I. Adrián Isaac Orpinel Ureña';
                      $Reviso= 'Ing. Mario Lopez Santa Anna';
                    }
       
                  break;
       
       
       
                  default:
                    // code...
                    break;
                }

            ?>


              <!-- Final -->

                 <!-- invoiceeeeeee start -->


              <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="well well-sm no-shadow small">
               
                   <h1> ORDEN DE COMPRA EVENTUALIDADES</h1>
                    <h2>Universidad Autónoma de Chihuahua - Facultad de Ingeniería</h2>
                 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice ">
                      <!-- title row -->
                        <div class="row">
                            <div class="col-xs-6  invoice-header ">


                            <img src="images/uach.png" alt="" width="40%"> |  &nbsp;&nbsp; <img src="images/fing-escudo.svg" alt="" width="15%">

                                                            
                            </div>

                            <div class="col-xs-6  invoice-header">

                            <?php

                                  $id = $_GET['id'];

                                  $sql5 = "SELECT * FROM movdEventualidades WHERE idRequisiciones2023 = $id";

                                  //  echo  $sql5;
                                  $result = $conexion->query($sql5);


                                  if ($result->num_rows > 0) {
                                  }
                                  $row = $result->fetch_array(MYSQLI_ASSOC);

                                  $NoOrdenEventualidad = $row['idmovdEventualidades'];
                                  $FechaE = $row['FechaOrdenEventualidad'];



                            ?>
                         
                            <small class="pull-right primary">Folio Eventualidad: <?php echo $NoOrdenEventualidad;?></small><br>
                            <small class="pull-right primary">Requisición: <?php echo $id;?></small><br>
                            <small class="pull-right">Fecha Requisición: <?php echo $newDateString;?></small><br>
                            <small class="pull-right">Fecha Eventualidad: <?php echo  date("d/M/Y", strtotime($FechaE));?></small>
                          

                          </div>
                       
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info small">
                      
                        <div class="col-sm-6 invoice-col">
                        <strong> Unidad Administrativa </strong>: 4400 - FACULTAD DE INGENIERÍA<br>
                       
                        <strong>Proyecto</strong> : <?php echo $proyecto;?> <br>
                        <strong>Fuente de Financiamiento</strong> : <?php echo $fuente;?> <br>
                        <strong>Servicio Externo / Académico</strong> : <?php echo $servicioExterno;?> <br>
                        
                        <strong>Licitación</strong> : <?php echo $licitacion;?> <br>
                        <strong>Extensión</strong> : <?php echo $Extension;?> <br>
                      
                        <strong>Telefono Entrega</strong> : <?php echo $TelefonoEntrega;?> <br>
                        
        
                       
                       
                       
  
        
                       
              

                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col pull-right ">
                        <strong>Departamento Solicitante</strong> : <?php echo $departamentoSolicitante; ?><br>
                        <strong> Convenios </strong>: <?php echo $conveniosss;?><br>
                        <strong>Categoría</strong> : <?php echo $categorias;?><br>
                        <strong>Unidad Presupuestal</strong> : <?php echo $UnidadPresupuestal;?><br>
                        <strong>Solicitante</strong> : <?php echo $solicitantePrint;?> <br>
                        <strong>Persona a Entregar</strong> : <?php echo $PersonaEntregar;?> <br>
                        <strong>Fecha y Hora de entrega</strong> : <?php echo $FechaEntregaObs;?> <br>
                    
                        
                        </div>
                        <div class="col-sm-12 invoice-col pull-right">
                        
                        </div>
                        <!-- /.col -->
           
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                      <div class="col-sm-12 invoice-col  ">
                                            </div>

                      <!-- Table row -->
                      <div class="ln_solid"></div>
                      <div class="row">
           
                        <div class="col-xs-12 table paddingTable">
                          <table class="table table-bordered paddingTable">
                            <thead>
                              <tr>
                              <th class="column-title mediuu" style="display: table-cell;">No.</th>
                              <th class="column-title mediuu" style="display: table-cell;">Objeto del gasto </th>
                            <th class="column-title mediuu" style="display: table-cell;">Cantidad </th>
                            <th class="column-title mediuu" style="display: table-cell;">Unidad </th>
                            <th class="column-title mediuu " style="display: table-cell;">Descripción</th>
                            <th class="column-title mediuu " style="display: table-cell;">Costo Unitario</th>
                            <th class="column-title mediuu " style="display: table-cell;">Subtotal</th>
                              </tr>
                            </thead>
                            <tbody class="mediuu">
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

                          $sql = "SELECT *, a.idObjetoGasto AS idObjetoGasto1 FROM movdRequisiciones2023 a INNER JOIN catcUnidadesMedida b on a.idcatcUnidadesMedida = b.idcatcUnidadesMedida INNER JOIN catcProductos c on a.idProducto = c.idProducto WHERE a.idRequisiciones2023 = $id";
                          $resultado = $conexion->query($sql);

                          //echo $sql;
                          $count = 1;

                          while ($row = $resultado->fetch_assoc()) {
                            $subtotal1 =   $row["Precio"]*$row["Cantidad"] ;
                           
                          

                              echo '
                                      <tr class="even pointer paddingTable">
                                      <td class="small">' . $count . '</td>
                                      <td class="small">' . $row["idObjetoGasto1"] . '</td>
                                      <td class="small">' . $row["Cantidad"] . '</td>
                                      <td class=" ">' . $row["unidadMedidaTraducida"] . '</td>
                                      <td class=" ">' . $row["descripcionProductoRequi"] . '</td>
                                      <td class=" ">' . $row["Precio"] . '</td>
                                      <td class=" ">$' .number_format($subtotal1, 2). '</td>
                                      </td>
                                    </tr>
                                    ';

                                    $count++;
                                    $SubTotalF += $subtotal1;
                          }

                          ?>

           

                            </tbody>
                          </table>

                          
                       

                          <table class="table table-bordered text-center small">

                          
<thead>
  <tr class="text-center">
  
    <th class="text-center">SUBTOTAL</th>
    <th class="text-center">IMPUESTOS</th>
    <th class="text-center">TOTAL</th>
  </tr>
</thead>
<tbody>
<tr>
  
  </tr>
  <tr>
    <td><b>$<?php echo number_format($SubTotalF, 2) ;?></b></td>

    <td><b><?php 




 

        $id = $_GET['id'];

        $sql5 = "SELECT * FROM movdEventualidades WHERE idRequisiciones2023 = $id";

      //  echo  $sql5;
        $result = $conexion->query($sql5);
       

        if ($result->num_rows > 0) {
        }
        $row = $result->fetch_array(MYSQLI_ASSOC);

        $ImpuestoSQL = $row['idTipoImpuesto'];

        $Proveedor = $row['Proveedor'];

        $NoOrdenEventualidad = $row['idmovdEventualidades'];

        //echo "IMPUESTO<br>".$ImpuestoSQL;


        switch ($ImpuestoSQL) {
          case '1':
            # IVA NORMAL 16
            $TAXESS = 0.16;
            break;

            case '2':
              # RESICO
              $TAXESS = 0.025;
              break;

              case '3':
                # SIN IVA
                $TAXESS = 0;
                break;
          
          default:
            # code...
            break;
        }

        if($ImpuestoSQL == 1){

          
        $ImpuestoPrint = $SubTotalF * $TAXESS;
        echo "$".number_format($ImpuestoPrint, 2) ;

        } elseif ($ImpuestoSQL == 2) 
        {
          $retencionRESICO = $SubTotalF * $TAXESS;
          $IVA = $SubTotalF * 0.16;

          echo "$"."IVA:  ".number_format($IVA, 2)."<br>" ;
          echo "$"."RETENCIÓN:  ".number_format($retencionRESICO, 2)."<br>" ;
        }
        else{



        }

    
    
    
    ?></b></td>

    <td><b><?php 

        if($ImpuestoSQL == 1){

                  
          echo "$".number_format($SubTotalF+$ImpuestoPrint, 2) ;

          } elseif ($ImpuestoSQL == 2) 
          {

            echo "$".number_format($SubTotalF+$IVA-$retencionRESICO, 2) ;
           
          }
          else{

            echo "$".number_format($SubTotalF, 2) ;

          }

    
    
   
    
    
    
    
    
    
    ?></b></td>
  </tr>
 
</tbody>
</table>

<p class="well well-sm no-shadow small" > <b>PROVEEDOR: <?php 


$id = $_GET['id'];

$sql5 = "SELECT * FROM movdEventualidades WHERE idRequisiciones2023 = $id";

//  echo  $sql5;
$result = $conexion->query($sql5);


if ($result->num_rows > 0) {
}
$row = $result->fetch_array(MYSQLI_ASSOC);

$ImpuestoSQL = $row['idTipoImpuesto'];

$Proveedor = $row['Proveedor'];

$ObservacionesEventualidades = $row['ObservacionesEventualidades'];



echo $Proveedor;?></b></p>

<p class="well well-sm no-shadow small">OBSERVACIONES EVENTUALIDAD: <?php echo $ObservacionesEventualidades;?> </p>

                          <table class="table table-bordered text-center small">

                          
                      <thead>
                        <tr class="text-center">
                        
                          <th class="text-center">FIRMA PROVEEDOR</th>
                          <th class="text-center">FIRMA UNIDAD DE COMPRAS</th>
                   
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td><br></td>
                          <td><br></td>
      
                        </tr>
                        <tr>
                          <td><br></td>
                        
                          <td><?php echo $NombreUsuario;?><br></td>

                 
                         
                        </tr>
                       
                      </tbody>
                    </table>
                        </div>
                        <!-- /.col -->
                      </div>
        

                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                      
                      </div>

                      <!-- <div class="row">
                        <button class="btn btn-default pull-right" onclick="cerrarse();">X</button>
                      </div> -->

                      <!-- this row will not appear when printing -->
          
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

        function cerrarse(){
                window.close()
            }


    </script>


<script>



// Asegurarse de que la ventana de impresión se cierre correctamente
window.onafterprint = function() {
  // Limpiar cualquier código adicional necesario
  var ventanaActual = window.open('', '_self');
  ventanaActual.close();
};

</script>




  </body>
</html>
