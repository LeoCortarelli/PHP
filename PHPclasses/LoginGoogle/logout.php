<?php

// AUTOLOAD DE CLASSES DO COMPOSER 
require __DIR__.'/vendor/autoload.php'; // PODE EXECUTAR AS CLASSES NO PROJETO

// DEPENDENCIAS QUE IRÁ USAR
use \App\Session\User as SessionUser; // USANDO A DEPENDENCIA SESSION QUE ESTÁ NA CLASSE Session/user.php

// DESLOGA O USUARIO
SessionUser::logout(); // ELE VAI SER REPONSAVEL POR DESTRUIR A SESSION (ELE ESTA DENTRO DA CLASSE user.php NA LINHA 67)

// REDIRECIONA O USUARIO PARA A HOME
header('location: index.php');
exit;