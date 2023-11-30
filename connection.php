<?php

    if(!isset($_SESSION)) { //inicia uma sessão
        session_start();
    }

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "contacts";
    //$mysqli = new mysqli($servidor, $usuario, $senha, $bd);
    $conn = mysqli_connect($servidor, $usuario, $senha, $bd);
//if ($mysqli -> connect_errno) {
//    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//    exit();
//}

?>