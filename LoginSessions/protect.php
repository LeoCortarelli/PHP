<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){ // Se não tiver nenhuma session de com o ID
        die("Você não pode acessar essa página, porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
    }
?>