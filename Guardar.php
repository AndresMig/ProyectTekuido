<?php
include('connection.php');
$con = connection();

$nombre =$_POST['nombre'];
$correo =$_POST['correo'];
$fecha =$_POST['fecha'];
$asunto =$_POST['asunto'];
$comentario =$_POST['comentario'];

$insertar = "INSERT INTO contacto (nombre, correo, fecha,asunto, comentario) VALUES ('$nombre','$correo','$fecha','$asunto','$comentario')";

$query = mysqli_query($con,$insertar);

if($query){
    echo  '<script type="text/javascript">';
    echo'alert("¡Gracias por contactarnos!, estaremos respondiendo inmediatamente nos sea posible");';
    echo 'window.location.href = "Index.php"';
    echo '</script>';
}else{
    echo "incorrecto";
}


?>