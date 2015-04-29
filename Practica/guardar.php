<?php
//Validar si hay una sesion activa
//Si no redireccionar o mostrar error
//Validar datos
//obtener datos
require("conexion.php");
$Titulo = $_POST['Titulo'];
$Contenido = $_POST['Contenido'];
$Autor = $_POST['Autor'];
$Fecha = $_POST['Fecha'];


$mysqli = new mysqli("localhost", "root", "", "agenda");
if ($mysqli->connect_errno) {
throw new Exception(
"Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " .
$mysqli->connect_error);
}
$sql = "INSERT INTO `contactos` ".
"(`Titulo`, `Contenido`, `autor`, `Fecha`) ".
"VALUES ".
"('".$Titulo."', '".$Contenido."', '".$Autor."', '".$Fecha."');";
$resultado = $mysqli->query($sql);
$mysqli->close();

?>
<html>
<body>
<div>
<h1>Nuevo contacto</h1>
<p>Se ha agregado un contacto</p>
<?php 
echo "</br><a href='indice.php'>Regresar a indice</a>";
	echo "</br><a href='Cerrar.php'>Cerrar sesi&acuten</a>"
?>
</div>
</body>
</html>