<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head><title>Inicio Sesion</title></head>
  <body>
    <?php 
	  if(isset($_POST['admin']) && isset($_POST['password'])){
	      
		     if ($_POST['admin']=='admin' && $_POST['password']=='admin'){
				$_SESSION['admin']=$_POST['admin'];
				echo "Bienvenido usuario: " . $_POST['admin'];
				echo "</br><a href='indice.php'>Indice</a>";
		     }
		     else {
				echo "Acceso Restringido";
				echo "</br><a href='Sesion.php'>Pagina Sesion</a>";
		      }
	  } 
	  else{

		      if (isset($_SESSION['admin'])){
				echo "Sesion de: ". $_SESSION['admin'];
				echo "</br><a href='indice.php'>Ir a indice</a>";
				echo "</br><a href='Cerrar.php'>Cerrar sesion</a>";
		      }
		      else{
					echo "Acceso Restringido";      
		      }
	 }
	?>
	
  </body>
</html>