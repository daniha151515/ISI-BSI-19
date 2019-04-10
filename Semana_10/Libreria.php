<!DOCTYPE html>
<html>
	<head>
		<title>Libreria</title>
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php require_once 'procesarLibreria.php';?>
		<div class="container">
		<?php
			$sql = "SELECT * FROM libreria";
			$query=mysqli_query($con,$sql);
		?>
			<div class="row justify-content-center">
				<table class="table">
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Autor</th>
							<th>Editorial</th>
							<th>Precio</th>
							<th colspan="2">Acción</th>
						</tr>
					</thead>
					<?php
						while($row = $query->fetch_assoc()):?>
							<tr>
								<td><?php echo $row['titulo']?></td>
								<td><?php echo $row['autor']?></td>
								<td><?php echo $row['editorial']?></td>
								<td><?php echo $row['precio']?></td>
								<td>
									<a href="Libreria.php?editar=<?php echo $row['id'];?>" class="btn btn-info">Editar</a>
									<a href="procesarLibreria.php?borrar=<?php echo $row['id'];?>" class="btn btn-danger">Borrar</a>
								</td>
							</tr>
						<?php endwhile; ?>
				</table>
			</div>
			<div class="row justify-content-center">
				<form action="procesarLibreria.php" method="POST" id="form-libreria">
					<div class="form-group">
						<label>% Aumento (default= 0.10)</label>
						<input type="number" step="0.05" name="aumento" class="form-control" value="" placeholder="">
					</div>
					<input type="hidden" name="id" value="<?php echo $id;?>"> 
					<div class="form-group">
						<label>Título</label>
						<input type="text" name="titulo" class="form-control" value="<?php echo $titulo?>" placeholder="" required>
					</div>
					<div class="form-group">
						<label>Autor</label>
						<input type="text" name="autor" class="form-control" value="<?php echo $autor?>" placeholder="" required>
					</div>
					<div class="form-group">
						<label>Editorial</label>
						<input type="text" name="editorial" class="form-control" value="<?php echo $editorial?>" placeholder="" required>
					</div>
					<div class="form-group">
						<label>Precio</label></br>
						<input type="number" step="0.01" name="precio" class="form-control" value="<?php echo $precio?>" placeholder="" required>
					</div>
					<div class="form-group">
					<?php 
					 if ($update == true):
					?>
						<button type="submit" name="aumentar" class="btn btn-info">Aumentar</button>
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