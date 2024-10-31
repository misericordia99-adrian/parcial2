<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$rol = $_POST['rol'];

$sql = "INSERT INTO usuarios (nombre, email, password, rol) VALUES ('$nombre', '$email', '$password', '$rol')";

if ($conn->query($sql) === TRUE) {
    if ($rol === 'admin') {
        header("Location: dashboard_admin.php");
    } elseif ($rol === 'vendedor') {
        header("Location: dashboard_vendedor.php");
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
