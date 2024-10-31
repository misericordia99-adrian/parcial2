<?php
session_start();
include 'conexion.php';

// Captura los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Consulta en la base de datos para obtener el rol y verificar credenciales
$query = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verifica la contraseña
    if (password_verify($password, $user['password'])) { // Cambia a $user['password'] si está encriptada
        $_SESSION['rol'] = $user['rol'];

        // Redirecciona según el rol del usuario
        if ($user['rol'] == 'admin') {
            header('Location: dashboard_admin.php'); // Redirige al dashboard del admin
        } elseif ($user['rol'] == 'vendedor') {
            header('Location: gestionar_productos.php'); // Redirige a la gestión de productos
        }
        exit();
    } else {
        echo "Credenciales incorrectas. Por favor, intente nuevamente.";
    }
} else {
    echo "Credenciales incorrectas. Por favor, intente nuevamente.";
}
?>
