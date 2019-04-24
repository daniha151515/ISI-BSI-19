<html>
<body>
Nombre de usuario: 
<?php
if(isset($_POST["user"])){
	echo $_POST["user"];	
}else{
	echo ("[ERROR]No se ha encontrado un valor para nombre de usuario!");
}
?>
Contraseña: 
<?php
if(isset($_POST["pswd"])){
	echo $_POST["pswd"];	
}else{
	echo ("[ERROR]No se ha encontrado un valor para contraseña!");
}
?>
<br>
E-mail: 
<?php
if(isset($_POST["email"])){
	echo $_POST["email"];	
}else{
	echo ("[ERROR]No se ha encontrado un valor para e-mail!");
}
?>
<br>
Fecha de nacimiento: 
<?php
if(isset($_POST["bday"])){
	echo $_POST["bday"];	
}else{
	echo ("[ERROR]No se ha encontrado un valor para fecha de nacimiento!");
}
?>

<?php
if(isset($_POST["sneaky"])){
	echo ("[ERROR]Se ha modificado el valor del campo oculto!");
}
?>
<br>
</body>
</html>