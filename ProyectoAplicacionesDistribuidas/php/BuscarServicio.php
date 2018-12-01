<?php

$con = include "Conexion.php";
$delegacion = $_POST["selecc_delegacion"];
$tipoServicio = $_POST["tipo_Servicio"];
echo $delegacion;
$query = "SELECT proveedores.Nombre ,delegacion.Delegacion,calificaciones.Calificacion FROM proveedores INNER JOIN delegacion ON delegacion.IdDelegacion=$delegacion";
$resu = mysqli_query($con, $query);
 
echo "<img src='img/user.png' alt='' >
			<span>Delegacion</span>
			<p>ValorDelegacion</p>
			<span>Calificación</span>
			<p>calificacion</p>
			<a href='#'>Nombre del Proveedor</a>";
?>