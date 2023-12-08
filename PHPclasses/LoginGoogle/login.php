<?php

// AUTOLOAD DE CLASSES DO COMPOSER 
require __DIR__.'/vendor/autoload.php'; // PODE EXECUTAR AS CLASSES NO PROJETO

// DEPENDENCIAS QUE IRÁ USAR
use Google\Client as GoogleClient; // (as GoogleClient) AQUI ESTÁ DANDO UM APELIDO PARA A DEPENDENCIA
use \App\Session\User as SessionUser; // USANDO A DEPENDENCIA SESSION QUE ESTÁ NA CLASSE Session/user.php


// VALIDAÇÃO PRINCIPAL DO COOOKIE

// Verifica os campos obrigatoris 
if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])){
    header('location: index.php');
    exit;
}

// COOKIE CSFR
$cookie = $_COOKIE['g_csrf_token'] ?? ''; // O (?? '') E SE ELE NÃO EXISTIR SERÁ VAZIO '' 

// print_r($_POST); // DEBUG
// print_r($cookie); // DEBUG

// VERIFICA O VALOR DO COOKIE E DO POST PARA O CSRF
if($_POST['g_csrf_token'] != $cookie){
    header('location: index.php');
    exit;
}


/* ------------------------------------------------------------------------------------ */


// PROXIMO PASSO INSTALAR A DEPENDENCIA NO TERMINAL= composer require google/apiclient 

// VALIDAÇÃO SECUNDARIA DO TOKEN (OU SEJA DOS DADOS DO EMAIL DO USUARIO)

// INSTANCIA DO CLIENTE GOOGLE 
$client = new GoogleClient(['client_id' => '?????????????????????????????????????????????']);
                                            // USAR A CHAVE DE ACESSO NO includes/login.php na linha 5

// OBTEM OS DADOS DO USUARIO COM BASE NO JWT
$payload = $client->verifyIdToken($_POST['credential']); // NO LUGAR DO ID TOKEM VOCÊ COLOCA O SEU $_POST['credential']

// VERIFICA OS DADOS DO $payload
if (isset($payload['email'])) {
  SessionUser::login($payload['name'],$payload['email']);  // SessionUser::login (ELE CHAMA O METODO LOGIN NA CLASSE user.php na linha 26)
  header('location: index.php');
  exit;
}

// PROBLEMAS AO CONSULTAR A API
die('Problemas ao consultar API');

