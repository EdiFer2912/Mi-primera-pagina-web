<?php
include "conexion.php";
$result = $conn->query("SELECT * FROM doctores WHERE activo=1 ORDER BY nombre");
$doctores = [];
while($row = $result->fetch_assoc()){ $doctores[] = $row; }
echo json_encode($doctores);
?>