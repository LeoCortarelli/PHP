<?php
/* 
    JA APRENDEMOS
        clone*
        construct*
        invoke -> APRENDER AGORA
        toString -> APRENDER AGORA
        get*
        set* 
*/

    class Pessoa{
        private $nome;
        
        function __set($nome, $valor){  // O $nome e o atributo private que ele pega e o $valor e oque vc vai passar para ele
            $this->nome = $valor;
        }

        function __get($nome){
            return $this->nome;
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Leo";

    echo $pessoa->nome;
    

?>