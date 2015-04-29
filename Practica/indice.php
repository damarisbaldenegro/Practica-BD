<?php 
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: Sesion.php");  
}
echo $_SESSION["admin"];
mysql_connect("localhost","root");
mysql_select_db("agenda");
$sql_query="SELECT * FROM contactos";
$result_set=mysql_query($sql_query);

if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM contactos WHERE id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: indice.php");
}
?>

	<head>
		<script type="text/javascript">
		function delete_id(id)
					{   if(confirm('¿Esta Seguro que desea eliminar registro ?')) 
				{
					window.location.href='indice.php?delete_id='+id;
	}
}
	</script>
			<title>Indice</title>
	</head>
		


		<body STYLE="background-image:URL(Fondo3.png); background-repeat:repeat">


			
				<fieldset style =" border-color:blue"><legent><b><font size='5'>Contactos</font></b></legent>
				
					 <table border='7'  bgcolor='#0B9A95' CELLSPACING=5>
					
							<tr >
								<th bgcolor='#0B9A95'><b><font size='3'>id</font></b></th>
								<th><b><font size='3'>Titulo</font></b></th>
								<th><b><font size='3'>Contenido</font></b></th>
								<th><b><font size='3'>Autor</font><b></th>
								<th><b><font size='3'>Fecha</font><b></th>
								<th><b><font size='3'>Opciones</font><b></th>
							</tr>
						<?php 
				
					if (mysql_num_rows($result_set) > 0) {	
					while($row=mysql_fetch_array($result_set)){
			?>
					<tr>
							<td bgcolor='#105085'><font color=white><?php echo $row["id"]?></td>
							<td><?php echo $row[1]        ?></td>	
							<td><?php echo $row[2]         ?></td>
							<td><?php echo $row[3]          ?></td>
							<td><?php echo $row[4]         ?></td>
							<?php 
							echo " <td bgcolor='#077571'><a href= formularioModificar.php?id=".$row['id']." ><img src='Modify.png'/>";?>
							  <a href="javascript:delete_id(<?php echo $row[0]; ?>)"><img src="delete.png" alt="Delete" /></a></td>
						</tr>
		
					 <?php
			  }
			 }
			 else
			 {
			  ?>
					<tr>
					<th colspan="4">No hay datos </th>
					</tr>
					<?php
			 }
			 ?>
				</table>
				  </div>
			</div>


			
					</fieldset>
				</br><input type="button" onclick=" location.href='formulario.php' " value="Nuevo" />
				</br><a href='Cerrar.php'>Cerrar Sesion</a>
			</body>
			</html>