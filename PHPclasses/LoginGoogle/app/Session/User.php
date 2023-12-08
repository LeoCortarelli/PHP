<?php

namespace App\Session;

class User{

    /**
     * ESSE METODO E RESPONSAVEL POR INICIAR A SESSÃO DENTRO DA APLICAÇÃO
     * @return boolean
     */
    private static function init(){
        return session_status() !== PHP_SESSION_ACTIVE ? session_start() : true; 
    /* ESSA FUNÇÃO RETORNA UM CODIGO DE STATUS E VAI VERIFICAR SE ESSE CODIGO NÃO BATE 
        COM O CODIGO DA SESSÃO ATIVA 
        (!== PHP_SESSION_ACTIVE) SE A SESSION NÃO ESTIVER ATIVA,
        (session_start() : true;) SENAO ELE DA UM START EM UMA SESSION E COLOCA COMO TRUE*/
    }



     /**
     * ESSE METODO E RESPONSAVEL POR DEFINIR A SESSION DE LOGIN DO USUARIO
     * @param string $name
     * @param string $email
     */
    public static function login($name,$email){
        //INICIA A SESSÃO DA APLICAÇÃO
        self::init();


        // DEFINE A SESSION DO USUARIO
        $_SESSION['user'] = [
            'name'=> $name,
            'email' => $email
        ];
    }


    /**
     * METODO RESPONSAVEL POR VERIFICAR SE USUARIO ESTÁ LOGADO 
     * @return boolean
     */
    public static function isLogged(){
        //INICIA A SESSÃO DA APLICAÇÃO
        self::init();

        // RETORNE A EXISTÊNCIA DO ÍNDICE USER NA SESSÃO
        return isset($_SESSION['user']); 
    }


    /**
     * METODO RESPONSAVEL POR RETORNAR AS INFORMAÇÕES GUARDADAS NA SESSION DO USUARIO
     * @return array
     */
    public static function getInfo(){
        //INICIA A SESSÃO DA APLICAÇÃO
        self::init();

        // RETORNE OD DADOS DA SESSÃO
        return $_SESSION['user'] ?? []; // (??) = OU, ||
    }



    /**
     *  METODO RESPONSAVEL POR DESLOGAR USUARIO
     */
    public static function logout(){
        //INICIA A SESSÃO DA APLICAÇÃO
        self::init();

        // ENCERRA A SESSION
        unset($_SESSION['user']);
    }
}