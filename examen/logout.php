<?php
session_start();
session_unset();
session_destroy();
header('Location: login.php'); // Redirige de vuelta al formulario de inicio de sesión
exit();
