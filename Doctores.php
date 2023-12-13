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

$sql = "SELECT * FROM solicitudes";
$query = mysqli_query($con, $sql); 

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
</head>
<body class="body">

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
    
    
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<section class="gallery min-vh-100">

    <div class="contenedor" style="padding-left: 10px; display: flex;">

        <div class="subcontenedor">

  <?php      



$sql = "SELECT * FROM doctores";
$query = mysqli_query($con, $sql); 

?>
            <?php while($row = mysqli_fetch_array($query)):?>    
            <div class="div" flex style="display: flex; width:100%; margin-top:20px;"  >                    
                <img src="<?= $row['Foto_Doctor']?>" class="gallery-item" alt="gallery" style="height: 250px; width: 180px; cursor: pointer;">
                <div style="padding-left: 10px; display: flex;">
                    <div class="subcontenedor">
                    <h5>Nombre</h5>    
                    <p><?= $row['Nombre_Doctor']?></p>
                    <h5>Apellido</h5>    
                    <p><?= $row['Especialidad_Doctor']?></p>
                    <h5>Direccion</h5>    
                    <p><?= $row['Localidad']?></p>                   
                </div>                
                                

                </div>
                  
            </div>
            <?php endwhile; ?>
            <!--<div class="div" style="margin-left:280px; margin-top: 15px;" style="display: flex;">-->                    
                
    </div>

    
        
</section> 
</form>

         
                    
                
          
          <footer style= "position: static;">
        <img src="Img\logo.jfif" style="width: 100px;">
        <pre>   
        Mi Libreria 
        Tel.: 829-946-2674
                        Correo: Milibreriard@lib.com            
            Direccion: C/ César Nicolás Pénson #91 Distrito Nacional, D.N. 10204   
    </pre>
    </footer>

</body>
</html>