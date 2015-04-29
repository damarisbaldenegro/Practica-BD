
<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: Sesion.php");  
}
echo $_SESSION["admin"]; 
require("conexion.php"); 


	$id=$_GET["id"];
	$query= "SELECT * FROM contactos WHERE id=' ".$id." '    ";
	$resultado=mysqli_query($link,$query) or die ("Error: ". mysqli_error());

	if (mysqli_num_rows($resultado) > 0){

		while ($row=mysqli_fetch_array($resultado)) {
?>
			<html>
				<head><title>Modificar</title></head>
				<body   <body STYLE="background-image:URL(Fondo1.png); background-repeat:repeat">
					<form method="POST" action="modificar.php">
						<fieldset  style="color:blue; border-color:blue">
								<legent align="center"><font size="5">Modificar </font></legent></br>	
								
								</br><label for="Id"><font color="blue">Id</font></label>
								</br><input type="text" name="id" value="<?php echo $row["id"];  ?>"readonly="readonly">
								
								</br><label for="Titulo"><font color="blue">Titulo</font></label></br>
							  	<input type="text" name="Titulo" id="Titulo" value="<?php echo $row["Titulo"]; ?>"></br>

							  	<label for="Contenido"><font color="blue">Contenido</font></label></br>
								<input type="text" name="Contenido" id="Contenido" value="<?php echo $row["Contenido"]; ?>"></br>

								<label for="Autor"><font color="blue">Autor </font></label></br>
								<input type="text" name="Autor" id="Autor" value="<?php echo $row["Autor"]; ?>"></br>

								<label for="Fecha"><font color="blue">Fecha</font></label></br>
								<input type="text" name="Fecha" id="Fecha" value="<?php echo $row["Fecha"]; ?>"></br>
								
								</br>
								<input type="submit"  Titulo="submit" value="Guardar cambios">
							</fieldset>
					</form>
						</br><a href='Cerrar.php'>Cerrar Sesion</a>
				</body>	
			</html>
<?php 
		}
	}
	mysqli_close($link);
?>