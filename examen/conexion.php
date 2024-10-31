<?php
$servername = "localhost";
$username = "root";
$password = ""; // Sin contraseña
$dbname = "tienda_web"; // Cambia este valor si tu base de datos tiene otro nombre


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
