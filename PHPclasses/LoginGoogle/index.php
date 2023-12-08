<?php

// AUTOLOAD DE CLASSES DO COMPOSER 
require __DIR__.'/vendor/autoload.php'; // PODE EXECUTAR AS CLASSES NO PROJETO

// DEPENDENCIAS DAS SESSIONS 
use \App\Session\User as SessionUser; // CHAMAR NO CORPO DA PAGINA

// HEADER (CABEÇALHO DA PAGINA)
include __DIR__.'/includes/header.php';

// LOGIN (CORPO DA PAGINA)
include SessionUser::isLogged() ? // SE ESSE FOR TRUE CARREGA O PRIMEIRO senão CARREGA O SEGUNDO
        __DIR__.'/includes/admin.php': 
        __DIR__.'/includes/login.php';

// FOOTER (RODAPE DA PAGINA)
include __DIR__.'/includes/footer.php';