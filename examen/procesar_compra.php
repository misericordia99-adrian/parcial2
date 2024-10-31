<?php
// Aquí procesaríamos la compra, como guardar los detalles en la base de datos
// y validar el método de pago. Esto es solo un ejemplo de procesamiento.

// Obtener los datos del formulario
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$direccion = $_POST['direccion'];
$metodo_pago = $_POST['metodo_pago'];

// Redirige a la página de agradecimiento después de procesar la compra
header('Location: gracias.php');
exit();
?>
