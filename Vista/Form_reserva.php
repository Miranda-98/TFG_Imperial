<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Fechas</title>
</head>
<body>
	<form action="" method="POST">
		<label for="fecha_inicio">Fecha de Inicio:</label>
		<input type="date" id="fecha_inicio" name="fecha_inicio" value="<?php echo date('Y-m-d'); ?>">
		<br><br>
		<label for="fecha_fin">Fecha de Fin:</label>
		<input type="date" id="fecha_fin" name="fecha_fin" value="<?php echo date('Y-m-d', strtotime('+1 week')); ?>">
		<br><br>
		<input type="submit" value="Enviar">
	</form>

	<form>
		<!-- 
			echo "<option value=".$fila['Nombre'].">".$fila['Nombre']."</option>";
 		-->
		<label>Codigo</label>
		<select name="codigo" id="codigo_id">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="mercedes">Mercedes</option>
		<option value="audi">Audi</option>
		</select>
	</form>
</body>
</html>
mostrar habitaciones con estado libre

<?php
	require_once "../Modelo/conexion.php";
	require_once "../Modelo/Reserva.php";
	
	$reserva = new Reserva();
	$rr = $reserva->mostrarEstadoHabitaciones();

	
?>