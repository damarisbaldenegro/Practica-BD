<?php 
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: Sesion.php");  
}
echo $_SESSION["admin"];
require("conexion.php"); 


	$id=$_POST["id"];
	$query= "SELECT * FROM contactos WHERE id='".$id."'";
	$resultado=mysqli_query($link,$query) or die ("Error: ". mysqli_error());

	if (mysqli_num_rows($resultado) > 0){
		
		$query ="UPDATE contactos SET Titulo='".$_POST["Titulo"]."', Contenido='".$_POST["Contenido"]."',Autor='".$_POST["Autor"]."', Fecha='".$_POST["Fecha"]."' WHERE id=' ".$_POST["id"]."' "; 
		$resultado=mysqli_query($link,$query) or die("Error". mysqli_error());
		echo "Se modifico el registro ".$id." con exito</br>";
		 
	
		 echo "</br><a href='indice.php'>Indice</a>"; 
		 echo "	</br><a href='Cerrar.php'>Cerrar Sesion</a>";
	}
	else {

		echo "No se realizaron los cambios";
	}
	mysqli_close($link);
?>