<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    // Agregar un producto
    if ($action == 'add') {
        $nombre = $_POST['nombre_producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        $sql = "INSERT INTO productos (nombre_producto, descripcion, precio, stock) VALUES ('$nombre', '$descripcion', '$precio', '$stock')";
        $conn->query($sql);
    }
    // Editar un producto
    elseif ($action == 'edit') {
        $id = $_POST['id'];
        $nombre = $_POST['nombre_producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        $sql = "UPDATE productos SET nombre_producto='$nombre', descripcion='$descripcion', precio='$precio', stock='$stock' WHERE id='$id'";
        $conn->query($sql);
    }
    // Eliminar un producto
    elseif ($action == 'delete') {
        $id = $_POST['id'];
        $sql = "DELETE FROM productos WHERE id='$id'";
        $conn->query($sql);
    }
}

// Obtener productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Productos</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <h2>Gestión de Productos</h2>

        <!-- Formulario para agregar un producto -->
        <form method="POST" action="">
            <input type="hidden" name="action" value="add">
            <label>Nombre del Producto:</label>
            <input type="text" name="nombre_producto" required>
            <label>Descripción:</label>
            <textarea name="descripcion" required></textarea>
            <label>Precio:</label>
            <input type="number" name="precio" step="0.01" required>
            <label>Stock:</label>
            <input type="number" name="stock" required>
            <input type="submit" value="Agregar Producto">
        </form>

        <!-- Lista de productos -->
        <h3>Lista de Productos</h3>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="action" value="edit">
                <label>Nombre:</label>
                <input type="text" name="nombre_producto" value="<?php echo $row['nombre_producto']; ?>" required>
                <label>Descripción:</label>
                <textarea name="descripcion" required><?php echo $row['descripcion']; ?></textarea>
                <label>Precio:</label>
                <input type="number" name="precio" step="0.01" value="<?php echo $row['precio']; ?>" required>
                <label>Stock:</label>
                <input type="number" name="stock" value="<?php echo $row['stock']; ?>" required>
                <input type="submit" value="Actualizar">
                <button type="submit" name="action" value="delete">Eliminar</button>
            </form>
        <?php } ?>
    </div>
</body>
</html>
