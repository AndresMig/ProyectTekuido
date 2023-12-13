
<?php
//session_start();

// Verificar si el usuario no está autenticado
//if (!isset($_SESSION['usuario'])) {
//    header('Location: index.php');
//    exit;
//}

//Conexión con BD
include('connection.php');

$con = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre_Cliente = $_POST["nombre"];
    $Apellido_Cliente = $_POST["apellido"];
    $Direccion = $_POST["direccion"];
    $Ciudad = $_POST["ciudad"];
    $Sector = $_POST["sector"];
    $Especialidad_Solicitada = $_POST["especialista"];
    $Tipo_Servicio = $_POST["servicio"];
    $Dia_Visita = $_POST["dia_semana"];
    $Hora_inicio = $_POST["hora_inicio"];
    $Hora_Final = $_POST["hora_fin"];
    $Doctor_Preferencia = $_POST["doctor"];

    

    $sql = "INSERT INTO solicitudes (Nombre_Cliente, Apellido_Cliente, Direccion, Ciudad, Sector, Especialidad_Solicitada, Tipo_Servicio, Dia_Visita,Hora_inicio, Hora_Final, Doctor_Preferencia ) VALUES ('$Nombre_Cliente', '$Apellido_Cliente','$Direccion','$Ciudad','$Sector','$Especialidad_Solicitada','$Tipo_Servicio','$Dia_Visita','$Hora_inicio','$Hora_fin','$Doctor_Preferencia')";

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
    <link rel='stylesheet' type='text/css' media='screen' href='Css/Index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='Css/bootstrap.min.css'>
    <script src="Js/bootstrap.bundle.min.js"></script>
    <script src="Js/JavaScript.js"></script>
    <title>Panel de Productos</title>


    <style>
        body {
            font-family: Arial, sans-serif;
          /*  margin: 20px;*/
            /*line-height: 1.6;*/
        }

        h1, h2, p {
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 10px;
        }


        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 4px;
        }


        form {
            max-width: 600px;
            margin: auto;
            display: grid;
            grid-gap: 15px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }
    </style>



</head>
<body class="body" >

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
    
    
    <form class="container" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="background-color: #f0e68c">
        <h1 style="aling: center">Crear Solicitud de visita medica</h1>
    <label for="nombre">Nombre del Paciente:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="apellido">Apellido del Paciente:</label>
    <input type="text" id="apellido" name="apellido" required>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required>

    <label for="ciudad">Ciudad:</label>
    <input type="text" id="ciudad" name="ciudad" required>

    <label for="sector">Sector:</label>
    <input type="text" id="sector" name="sector" required>

    <label for="especialista">Especialista Solicitado:</label>
    <select id="especialista" name="especialista" required>
        <option value="" disabled selected>Selecciona una opción</option>
        <option value="cardiologia">Cardiología</option>
        <option value="terapeuta">Terapeuta</option>
        <option value="cuidado_discapacitados">Cuidado de Discapacitados</option>
        <option value="cuidado_alzheimer">Cuidado de Pacientes con Alzheimer</option>
        <option value="cuidado_diabeticos">Cuidado de Diabéticos</option>
    </select>

    <label for="servicio">Servicio Solicitado:</label>
    <select id="servicio" name="servicio" required>
        <option value="" disabled selected>Selecciona una opción</option>
        <option value="servicio_medico">Servicio Médico</option>
        <option value="cuidado_medico">Cuidado Médico</option>
    </select>

    <label for="doctor">Doctor de Preferencia:</label>
    <select id="doctor" name="doctor">
        <option value="" disabled selected>Selecciona una opción</option>
        <option value="dr_smith">Medico disponible</option>
        <option value="dr_smith">Dr. Smith</option>
        <option value="dra_jones">Dra. Jones</option>
        <option value="dr_gomez">Dr. Gómez</option>
    </select>

    <label for="dias_semana">Día de la Semana:</label>
    <select id="dias_semana" name="dia_semana">
        <option value="lunes">Lunes</option>
        <option value="martes">Martes</option>
        <option value="miercoles">Miércoles</option>
        <option value="jueves">Jueves</option>
        <option value="viernes">Viernes</option>
        <option value="sabado">Sábado</option>
        <option value="domingo">Domingo</option>
    </select>

    <label for="hora_inicio">Hora de Inicio de la Visita:</label>
    <input type="time" id="hora_inicio" name="hora_inicio" required>

    <label for="hora_fin">Hora de Finalización de la Visita:</label>
    <input type="time" id="hora_fin" name="hora_fin" required>

    <button type="submit" style="background-color: #4caf50; color: #fff; cursor: pointer; padding: 10px; border: none; border-radius: 4px;" name="EnviarInf">Enviar</button>
                        
    <button type="submit" style="background-color: #4caf50; color: #fff; cursor: pointer; padding: 10px; border: none; border-radius: 4px;" name="EnviarInf"> Enviar</button>
</form>  
    

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['EnviarInf'])) {
      // La lógica de PHP que deseas ejecutar cuando se hace clic en el botón
      echo '<p>Se ha hecho clic en el botón.</p>';
  }
  ?>

    <footer style= "position: static;">
        <div >
            <img src="Img\img3.jpeg" style="width: 100px; " >
        </div>
        <div>
        <pre>   
        Mi Libreria 
        Tel.: 829-946-2674
                        Correo: Milibreriard@lib.com            
            Direccion: C/ César Nicolás Pénson #91 Distrito Nacional, D.N. 10204   
    </pre>
        </div>
        
    </footer>

</body>
</html>