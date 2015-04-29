<?php 
$link=mysqli_connect('localhost', 'root', '', 'agenda');
if (!$link){
	die('Error al conectar la base de datos: (' . mysqli_connect_errno(). ') ' . mysqli_connect_error());
}
?>
