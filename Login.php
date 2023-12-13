<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="Css/Login.css">

</head>
<body  style="margin: 0; padding: 0; overflow: hidden;">
        <!-- Tu contenido va aquí -->
        <div style="padding: 20px; color: white; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <h1>Libreria Online</h1>
            <p>¡Bienvenido!</p>

            <?php
            session_start();

            // Verificar si el usuario ya está autenticado
            if (isset($_SESSION['usuario'])) {
                header('Location: biblioteca.php');
                exit;
            }
        
            // Verificar si se ha enviado el formulario
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $usuario = 'Prueba';
                $contrasena = '1234';
            
                // Verificar credenciales
                if ($_POST['usuario'] === $usuario && $_POST['contrasena'] === $contrasena) {
                    // Autenticación exitosa
                    $_SESSION['usuario'] = $usuario;
                    header("Location:Index.php");
                    echo '<a ></a>';
                    exit;
                } else {
                    echo '<p style="color: red;">Credenciales incorrectas. Inténtalo de nuevo.</p>';
                }
            }
            ?>
            <div>
                <h1>Iniciar Sesión</h1>
                <form method="post" action="">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required>
        
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required>        
                    <button type="submit">Iniciar Sesión</button>
                </form>
            </div>
                
        </div>
    
   
</body>
</html>
