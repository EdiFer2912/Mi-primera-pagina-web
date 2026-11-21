<?php
include "conexion.php";

$nombre = $_POST['nombre'];
$comunidad = $_POST['comunidad'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$doctor_id = intval($_POST['doctor_id']);
$motivo = $_POST['motivo'];

// Revisa si ese doctor ya tiene cita a esa hora
$check = $conn->query("SELECT * FROM pacientes WHERE fecha='$fecha' AND hora='$hora' AND doctor_id=$doctor_id AND estado != 'Cancelada'");
if($check->num_rows > 0){ echo "OCUPADO"; exit; }

$sql = "INSERT INTO pacientes (nombre, comunidad, telefono, fecha, hora, doctor_id, motivo) VALUES ('$nombre','$comunidad','$telefono','$fecha','$hora',$doctor_id,'$motivo')";

echo $conn->query($sql) ? "OK" : "ERROR";
?>