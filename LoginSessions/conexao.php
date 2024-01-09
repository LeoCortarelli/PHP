<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "login_sessions";

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    if(!$conn){
        echo "Erro de conexao: " . mysqli_connect_error();
    }
?>