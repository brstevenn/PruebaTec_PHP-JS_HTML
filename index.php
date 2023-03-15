<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
	<style>
		table {
			border-spacing: 0 10px;
		}
		td {
			border-width: 1px;
			padding: 5px;
		}
		th {
			border-width: 1px;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h1>Empleados</h1>
	<table border="1">
		<thead>
			<tr>
				<th>Nombre y Apellido</th>
				<th>Edad</th>
				<th>Área</th>
				<th>Correo</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$empleados = [
				["Nombre" => "Marcelo", "Apellido" => "Velez", "Edad" => 25, "Area" => "Administración", "Correo" => "marceloVelez@hotmail.com"],
				["Nombre" => "Alberto", "Apellido" => "Unbertini", "Edad" => 36, "Area" => "RRHH", "Correo" => "albert.unbert@hotmail.com"],
				["Nombre" => "Isidora", "Apellido" => "Gutierrez", "Edad" => 33, "Area" => "Desarrollador", "Correo" => "isi_gutie@gmail.cl"],
				["Nombre" => "Sebastian", "Apellido" => "Jimenez", "Edad" => 21, "Area" => "No Asignada", "Correo" => "s.jimenez@gmail.cl"],
				["Nombre" => "Manuel", "Apellido" => "Osorio", "Edad" => 19, "Area" => "Desarrollador", "Correo" => "manu007@outlook.com"],
				["Nombre" => "Alonso", "Apellido" => "Villa", "Edad" => 47, "Area" => "Product Manager", "Correo" => "alvilla@hotmail.com"]
			];
			
			foreach ($empleados as $index => $empleado) {
				if ($index % 2 != 0) {
					echo "<tr>";
					echo "<td>" . $empleado['Nombre'] . " " . $empleado['Apellido'] . "</td>";
					echo "<td>" . $empleado['Edad'] . "</td>";
					echo "<td>" . $empleado['Area'] . "</td>";
					echo "<td>" . $empleado['Correo'] . "</td>";
					echo "</tr>";
				}
			}
			?>
		</tbody>
	</table>
	<hr>
	<h1>Personas</h1>
	<table border="1">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Edad</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$personas = array ("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);
	
				foreach ($personas as $nombre => $edad) {
					echo "<tr>";
					echo "<td>$nombre</td>";
					echo "<td>$edad</td>";
					echo "</tr>";
				}

				$max_edad = 0;
				$max_edad_nombre = "";
				foreach ($personas as $nombre => $edad) {
					if ($edad > $max_edad) {
						$max_edad = $edad;
						$max_edad_nombre = $nombre;
					}
				}
			?>
		</tbody>
	</table>
	<h2>La persona con la mayor edad encontrada es: <?php echo $max_edad_nombre ?> con <?php echo $max_edad ?> años.</h2>
	<hr>
	<h1>Contador de caracteres</h1>
	<form method="post">
		<label for="texto">Introduce el texto:</label>
		<input type="text" name="texto" id="texto">
		<button type="submit">Contar caracteres</button>
	</form>
	<?php
		if (isset($_POST["texto"])) {
			$texto = $_POST["texto"];

			function cantidad_caracteres($texto) {
			$num_caracteres = strlen($texto);
			return $num_caracteres;
			}

			$num_caracteres = cantidad_caracteres($texto);
			echo "<p>El texto \"$texto\" contiene $num_caracteres caracteres.</p>";
		}
	?>
</body>
</html>
