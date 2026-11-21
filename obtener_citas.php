<?php
include "conexion.php";

$sql = "SELECT p.*, d.nombre as doctor_nombre, d.especialidad FROM pacientes p LEFT JOIN doctores d ON p.doctor_id = d.id ORDER BY p.fecha, p.hora";
$result = $conn->query($sql);
$datos = [];
while($row = $result->fetch_assoc()){ $datos[] = $row; }
echo json_encode($datos);
?>