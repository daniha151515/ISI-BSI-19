<!DOCTYPE html>
<html>
	<head>
		<title>Personas</title>
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php require_once 'procesarPersonas.php'; ?>
		<div class="container">
		<?php
			$sql = "SELECT * FROM personas";
			$query=mysqli_query($con,$sql);
		?>
			<div class="row justify-content-center">
				<table class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th colspan="2">Acción</th>
						</tr>
					</thead>
					<?php
						while($row = $query->fetch_assoc()):?>
							<tr>
								<td><?php echo $row['nombre']?></td>
								<td><?php echo $row['apellido']?></td>
								<td>
									<a href="personas.php?editar=<?php echo $row['id'];?>" class="btn btn-info">Editar</a>
									<a href="procesarPersonas.php?borrar=<?php echo $row['id'];?>" class="btn btn-danger">Borrar</a>
								</td>
							</tr>
						<?php endwhile;?>
				</table>
			</div>
			<div class="row justify-content-center">
				<form action="procesarPersonas.php" method="POST" id="personas">
					<input type="hidden" name="id" value="<?php echo $id;?>">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="nombre" class="form-control" value="<?php echo $nombre?>" placeholder="" required>
					</div>
					<div class="form-group">
						<label>Apellido</label>
						<input type="text" name="apellido" class="form-control" value="<?php echo $apellido?>" placeholder="" required>
					</div>
					<div class="form-group">
					<?php 
					 if ($update == true):
					?>
						<button type="submit" name="actualizar" class="btn btn-info">Actualizar</button>
					<?php else: ?>
						<button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
					<?php endif; ?>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>