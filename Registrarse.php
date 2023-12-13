<?php 


include('connection.php');

$con = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre_Usuario = $_POST["nombre"];
    $Correo = $_POST["email"];
    $Telefono = $_POST["telefono"];
    $Contrasena = $_POST["password"];
    

    

    $sql = "INSERT INTO usuarios (Nombre_Usuario, Correo, Telefono, Contrasena) VALUES ('$Nombre_Usuario', '$Correo','$Telefono','$Contrasena')";

    if (mysqli_query($con, $sql)) {
        echo "Registro insertado con éxito.";
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conn);
    }
}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='Css/Registrarse.css'>
    <title>Registro de Usuario</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="Apellido">Numero de telefono:</label>
        <input type="text" id="Apellido" name="telefono" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit"><a href="index.php"> Registrarse</a></button>
    </form>
    

    
</body>
</html>
