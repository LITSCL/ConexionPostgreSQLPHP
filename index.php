<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="http://localhost/ConexionPostgreSQLPHP/controllers/PersonaControlador.php" method="GET">
		<table>
			<tr>
				<td>
					<label for="nombre">Nombre</label>
				</td>
				<td>
					<input type="text" name="nombre"/>
				</td>
			</tr>
			<tr>
				<td>
					<label for="edad">Edad</label>
				</td>
				<td>
					<input type="text" name="edad"/>
				</td>
			</tr>			
			<tr>
				<td>
					<input type="submit" value="Guardar"/>
				</td>
			</tr>
		</table>
	</form>
	
	<?php 
	if (isset($_GET["resultado"])) {
	    if ($_GET["resultado"] == "true") {
	        echo "Exito al guardar la persona";
	    }
	    else {
	        echo "Error al guardar la persona";
	    }
	}
	?>
</body>
</html>