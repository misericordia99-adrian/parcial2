<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">

    <Center> <H1> BIENVENIDO A LA PAPELERIA DE CETis 84</H1></Center>
         <center>  <h4> Luis Adrian Fernandez Melchor Y Valeria Montserrat Valdivia Vela</h4> </center>
        <h2>Registro  de  Usuario</h2>
        <center> <img src="img/logo.png" alt=""></center>
        
        <!-- Enlace de inicio de sesión si ya tienes una cuenta -->
        <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
        
        <form action="control_acceso.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>

            <label for="rol">Tipo de usuario:</label>
            <select name="rol" required>
                <option value="admin">Admin</option>
                <option value="vendedor">Vendedor</option>
            </select>

            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>

