<?php
	include('db.php');
	include('conexion.php');

	$id = 0;
	$update = false;
	$titulo='';
	$autor='';
	$editorial='';
	$precio='';
	$aumentarValor;
	
	if (isset($_POST['guardar'])){
		$titulo=$_POST['titulo'];
		$autor=$_POST['autor'];
		$editorial=$_POST['editorial'];
		$precio=$_POST['precio'];
		
		$sql = "INSERT INTO libreria (titulo, autor, editorial, precio) VALUES ('$titulo', '$autor', '$editorial', '$precio')";
		$query=mysqli_query($con,$sql);
		
		header("location: Libreria.php");
	}
	
	if(isset($_GET['borrar'])){
		$id = $_GET['borrar'];
		$sql = "DELETE FROM libreria WHERE id = '$id'";
		$query=mysqli_query($con,$sql);

		header("location: Libreria.php");
	}
	
	if(isset($_GET['editar'])){
		$id = $_GET['editar'];
		$update = true;
		$sql = "SELECT * FROM libreria WHERE id = '$id'";
		$query=mysqli_query($con,$sql);
		$counter=mysqli_num_rows($query);
		if ($counter == 1){
			$row = $query->fetch_assoc();
			$titulo = $row['titulo'];
			$autor = $row['autor'];
			$editorial = $row['editorial'];
			$precio = $row['precio'];
		}			
	}
	
	if (isset($_POST['actualizar'])){
		$id = $_POST['id'];
		$titulo=$_POST['titulo'];
		$autor=$_POST['autor'];
		$editorial=$_POST['editorial'];
		$precio=$_POST['precio'];
		
		$sql = "UPDATE libreria SET titulo = '$titulo', autor = '$autor', editorial = '$editorial', precio = '$precio' WHERE id = '$id'";
		$query=mysqli_query($con,$sql);
		
		header("location: Libreria.php");
	}
	
	if(isset($_POST['aumentar'])){
		$id = $_POST['id'];
		$titulo=$_POST['titulo'];
		$autor=$_POST['autor'];
		$editorial=$_POST['editorial'];
		$precio=$_POST['precio'];
		$aumentarValor = $_POST['aumento'];
		$sql = "CALL aumentarValorCustom('$editorial', '$aumentarValor')";
		$query=mysqli_query($con,$sql);

		header("location: Libreria.php");
	}
?>