<?php 
//	session_start();
require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<h2>Usuarios Compras 2023</h2>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td>NoEmpleado</td>
				<td>PrimerNombre</td>
				<td>PrimerApellido</td>
				<td>Centro</td>
                <td>Usuario</td>
                <td>Password</td>
                <td>Nivel</td>
                <td>FechaCreacion</td>
                <td>Codigo</td>
                <td>Extension</td>
                <td>Correo</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT IdUsuario,NoEmpleado,PrimerNombre,PrimerApellido,Centro,Usuario,Password,Nivel,FechaCreacion,Codigo,Extension,Correo
						from Usuarios where id='$idp'";
					}else{
						$sql="SELECT IdUsuario,NoEmpleado,PrimerNombre,PrimerApellido,Centro,Usuario,Password,Nivel,FechaCreacion,Codigo,Extension,Correo 
						from Usuarios";
					}
				}else{
					$sql="SELECT IdUsuario,NoEmpleado,PrimerNombre,PrimerApellido,Centro,Usuario,Password,Nivel,FechaCreacion,Codigo,Extension,Correo 
						from Usuarios";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
                           $ver[4]."||".
                           $ver[5]."||".
                           $ver[6]."||".
                           $ver[7]."||".
                           $ver[8]."||".
                           $ver[9]."||".
                           $ver[10]."||".
						   $ver[11];
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
                <td><?php echo $ver[5] ?></td>
                <td><?php echo $ver[6] ?></td>
                <td><?php echo $ver[7] ?></td>
                <td><?php echo $ver[8] ?></td>
                <td><?php echo $ver[9] ?></td>
                <td><?php echo $ver[10] ?></td>
                <td><?php echo $ver[11] ?></td>

				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>