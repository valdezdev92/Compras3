<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
?>

<?php

$action='ajax';
	if($action == 'ajax'){
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		  $sTable = "Requi";
		 $sWhere = "";
		 $sWhere.="WHERE IdRequi<=1000";
		if ( $_GET['q'] != "" )
		{
		$sWhere.= " and Descripcion01 like '%$q%' or Descripcion02 like '%$q%'  or Folio like '%$q%' or Descripcion03 like '%$q%'  or Descripcion04 like '%$q%'  or Descripcion04 like '%$q%'  or Descripcion05 like '%$q%'  or Descripcion06 like '%$q%'   or Descripcion07 like '%$q%'  or Descripcion08 like '%$q%'  or Descripcion09 like '%$q%'   or Descripcion10 like '%$q%'   or Descripcion11 like '%$q%'   or Descripcion12 like '%$q%'   or Descripcion13 like '%$q%'  or Descripcion14 like '%$q%'  or Solicitante like '%$q%' or MotivosRequi like '%$q%' ";

		}

		$sWhere.=" order by Folio asc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './buscar.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			echo mysqli_error($con);
			?>
			<div class="table-responsive ">
			  <table class="table table-hover" style="border-color: #337ab7;">
				<tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
					<th>Folio</th>
					<th>IdUnidad</th>
					<th>Fecha</th>
					<th>Motivos</th>
					<th>ACCIONES</th>
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
						$id=$row['Folio'];
						$nombres=$row['IdUnidad'];
						$apellidos=$row['Fecha'];
						$cargo=$row['MotivosRequi'];
						$IdRequi = $row['IdRequi']
					?>
					<tr>
						<td><?php echo ($id); ?></td>
						<td><?php echo ($nombres);?></td>
						<td><?php echo ($apellidos);?></td>
						<td><?php echo ($cargo); ?></td>
						<td><?php echo "<div class=\"input-group\">
      <button type=\"button\" class=\"btn btn-success btn-xxl\" onclick=\"location='mostrarAutorizar.php?Folio=$id&IdRequi=$IdRequi'\"><span class=\"glyphicon glyphicon-zoom-in\"></span>Ver</button>


      </div>";?></td>
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=7><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>
