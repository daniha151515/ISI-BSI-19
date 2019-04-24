<?php
	include('config/db.php');
	include('config/conexion.php');
	
	$id = 0;
	$update = false;
	$nombre='';
	$apellido='';
	
	if (isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		
		$sql = "INSERT INTO personas (nombre, apellido) VALUES ('$nombre', '$apellido')";
		$query=mysqli_query($con,$sql);
		
		header("location: personas.php");
	}
	
	if(isset($_GET['borrar'])){
		$id = $_GET['borrar'];
		$sql = "DELETE FROM personas WHERE id = '$id'";
		$query=mysqli_query($con,$sql);

		header("location: personas.php");
	}
	
	if(isset($_GET['editar'])){
		$id = $_GET['editar'];
		$update = true;
		$sql = "SELECT * FROM personas WHERE id = '$id'";
		$query=mysqli_query($con,$sql);
		$counter=mysqli_num_rows($query);
		if ($counter == 1){
			$row = $query->fetch_assoc();
			$nombre = $row['nombre'];
			$apellido = $row['apellido'];
		}		
	}
	
	if (isset($_POST['actualizar'])){
		$id = $_POST['id'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		
		$sql = "UPDATE personas SET nombre = '$nombre', apellido = '$apellido' WHERE id = '$id'";
		$query=mysqli_query($con,$sql);
		
		header("location: personas.php");
	}
?>