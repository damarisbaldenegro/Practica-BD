<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: Sesion.php");  
}
echo $_SESSION["admin"];
    ?>	
    	
<html>
<body bgcolor='#164583'>
<div>

<?php
require_once('Editar.php');
?>

<h1>Nuevo contacto</h1>
<form action="guardar.php" method="POST">

<label for="Titulo">Titulo</label></br>
<input type="text" maxlength="100" name="Titulo" id="Titulo">
</br>
</br>
<label for="Contenido">Contenido</label></br>
<input type="text" maxlength="100" name="Contenido" id="Contenido">
</br>
</br>
<label for="Autor">Autor</label></br>
<input type="text" maxlength="100" name="Autor" id="Autor">
</br>
</br>
<label for="Fecha">Fecha</label></br>
<input type="text" maxlength="256" name="Fecha" id="Fecha">
</br>
</br>
<input type="submit" name="enviar" Value="Guardar">


</form>
</div>
	</br><a href='Cerrar.php'>Cerrar Sesi&oacute;n</a>
</body>
</html>