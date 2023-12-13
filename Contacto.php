<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href="Css/Contacto.css">
    
    
    <title>Formulario de Contacto</title>
</head>
<body>
<nav>
        <div class="containerMenu">
            <div>
                <a href="index.php">Te Kuido</a>
                <a href="index.php">Inicio</a>
                <a href="QuienesSomos.php">Sobre Nosotros</a>
                <a href="Informacion.php">Información</a>
                <a href="Doctores.php">Doctores</a>
                <a href="solicitudes.php">Solicitudes</a>
                <a href="Contacto.php">Contacto</a>
            </div>
            <div>
                <input style = " margin-left: 240px;" type="text" id="barra-busqueda" name="enviar" placeholder="Buscar..." value=""/>
            </div>
            <div>
                <img src="Img/Perfil.JPG" class="Img-Perfil">
            </div>
        </div>
    </nav>


    <div class="container">
        <h1>Contacto</h1>
        <form action="Guardar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>

            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" name="asunto" required>

            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="4" required></textarea>

            <input type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>
