<?php

if(!isset($_SESSION)){ // Se não existir o session
    session_start();
}

session_destroy();

header('Location: index.php');

?>