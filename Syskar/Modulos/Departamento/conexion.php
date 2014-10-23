<!DOCTYPE html>
<html>
<head>
	<title>Departamentos</title>

	
</head>
<body>

<?php
	
	include('var.php');  
	
	//$usuario = $_POST[user];
	//$contrasena = $_POST[pass];

	$conn = mysql_connect($host, $user, $pass)or die("No se pudo conectar a la Base de Datos".mysql_error());
	echo "Conexion Establecida"."<br>";
	mysql_select_db($database, $conn);

	$query = "SELECT * FROM departamento";
	$res = mysql_query($query, $conn)or die("No se pudo realizar la consulta".mysql_error());
	$tot = mysql_num_rows($res);

	//echo $usuario,", <br>".$contrasena,"<br>";
	
 ?>	
 	<table style="background:#A29D9D" border="1" align="center">
 	  	<tr>
 	  		<td>Id Depto</td>
 	  		<td>Nombre departamento:</td> 
 	  	</tr>
 	  	<?php 
 	  	if ($tot > 0) {
 	     while ($row = mysql_fetch_assoc($res)) { ?>
 	  	<tr> 
      	    <td style="background:#FFFFFF" align="center"><?php echo "".$row['id_departamento']."<br>";?></td> 
      	    <td align="center"> <?php echo "".$row['nombre_depto']."<br>";?></td>
      	</tr>
      	<?php
   		}
	}
	?>
    </table>
      	

</body>
</html>
