<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Compras</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <h2>Realizar una Compra</h2>
        <form action="procesar_compra.php" method="POST">
            <label for="producto">Producto:</label>
            <input type="text" name="producto" required>

            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" required>

            <label for="direccion">Dirección de Envío:</label>
            <input type="text" name="direccion" required>

            <label for="metodo_pago">Método de Pago:</label>
            <select name="metodo_pago" required>
                <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                <option value="paypal">PayPal</option>
                <option value="transferencia">Transferencia Bancaria</option>
            </select>

            <input type="submit" value="Comprar">
        </form>
    </div>
</body>
</html>
