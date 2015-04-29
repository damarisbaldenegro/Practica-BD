<?php 
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: Sesion.php");  
}
echo $_SESSION["admin"];
?>	
<html>
	
	<body  <body STYLE="background-image:URL(Fondo2.png); background-repeat:repeat">
		<form method="POST" action="guardar.php">
			<fieldset style="color:black; border-color:blue">
				<legent align="center"><b><font  SIZE=5 >Nuevo Contacto</font><b></legent></br>	
				
				</br><label for="Titulo">Titulo</font></label></br>
			  	<input type="text" name="Titulo" id="Titulo" value=""></br>

			  	<label for="Contenido">Contenido</font></label></br>
				<input type="text" name="Contenido" id="Contenido" value=""></br>

				<label for="Autor">Autor</font></label></br>
				<input type="text" name="Autor" id="Autor" value=""></br>

				<label for="Fecha">Fecha</font></label></br>
				<input  name="Fecha"  id="Fecha" row="100" cols="50"></input></br>
				
			 
               
				
				</br>
				<input type="submit" value="Guardar">
			</fieldset>
			</br><b><a href='Cerrar.php'>Cerrar sesi&acuten</a><b>
		</form>
	</body>
</html>