<?php
session_start();
session_unset(); // Limpia cualquier sesión activa
session_destroy(); // Destruye la sesión activa

// Reinicia la sesión para el proceso de login
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        
        <!-- Formulario de inicio de sesión -->
        <form action="autenticar.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Iniciar Sesión">
        </form>
        
        <!-- Enlace al registro para nuevos usuarios -->
        <p>¿No tienes cuenta? <a href="index.php">Regístrate</a></p>
    </div>
</body>
</html>
