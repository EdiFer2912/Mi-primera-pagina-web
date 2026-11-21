<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "clinica_centla";
$conn = new mysqli($host, $user, $pass, $db,33065);
if ($conn->connect_error) { die("Error: " . $conn->connect_error); }
$conn->set_charset("utf8");
?>

