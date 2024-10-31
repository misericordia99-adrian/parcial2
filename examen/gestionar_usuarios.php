<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    // Agregar un usuario
    if ($action == 'add') {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $rol = $_POST['rol'];

        $sql = "INSERT INTO usuarios (nombre, email, password, rol) VALUES ('$nombre', '$email', '$password', '$rol')";
        $conn->query($sql);
    }
    // Eliminar un usuario
    elseif ($action == 'delete') {
        $id = $_POST['id'];
        $sql = "DELETE FROM usuarios WHERE id='$id'";
        $conn->query($sql);
    }
}

// Obtener usuarios
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Usuarios</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <h2>Gestión de Usuarios</h2>

        <!-- Formulario para agregar un usuario -->
        <form method="POST" action="">
            <input type="hidden" name="action" value="add">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            <label>Rol:</label>
            <select name="rol" required>
                <option value="admin">Admin</option>
                <option value="vendedor">Vendedor</option>
            </select>
            <input type="submit" value="Agregar Usuario">
        </form>

        <!-- Lista de usuarios -->
        <h3>Lista de Usuarios</h3>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" readonly>
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" readonly>
                <label>Rol:</label>
                <input type="text" name="rol" value="<?php echo $row['rol']; ?>" readonly>
                <button type="submit" name="action" value="delete">Eliminar</button>
            </form>
        <?php } ?>
    </div>
</body>
</html>
