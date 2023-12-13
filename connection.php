<?php 

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "tekuido";

    $connect = new mysqli($host, $user, $pass, $bd);

    //mysqli_select_db($connect,$bd);

    return $connect; 
}

?>