<?php
$servername = "localhost";
$username = "user";
$password = "pass";
$dbname = "dbname";
$charset = 'utf8mb4';


$conn = new mysqli($servername, $username, $password);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$conn->select_db($dbname);
?>
