<?php 
session_start();
?>
<html>
<head><title>Iniciar Sesion</title></head>
  <body STYLE="background-image:URL(Fondo1.png); background-repeat:repeat">
    <?php
      if (isset($_SESSION['admin'])){
	       echo "<p><a href='Cerrar.php'>Cerrar Sesion</a></p>";
         echo "<p><a href='Inicio.php'>Sesion</a></p>";
      }
      else{ 
       
     ?>
      <form action="Inicio.php" method="POST">
	  
	  <fieldset style =" border-color:blue"><b><font size='5'>Inicio Sesi&oacute;n</font></b>
      	<p><b> Usuario :</br><input type="text" name="admin"></input></b></p>
      	<p><b>Password :</br><input type="password" name="password"></input></b></p>
      	<input type="submit" value="Iniciar Sesi&oacute;n"></input>
      </fieldset>
	  </form>
 
    <?php 
      } 
    ?>  
  </body>
</html>