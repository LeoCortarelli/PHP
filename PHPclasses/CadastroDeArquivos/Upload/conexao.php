<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "upload";

$mysqli = new mysqli($host, $user, $pass, $bd);

/* TRATAMENTO DE ERRO */
if($mysqli->connect_errno){
    echo "Connect failed" . $mysqli->connect_errno;
    exit();
}
?>