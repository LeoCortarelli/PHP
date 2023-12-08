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
        private $dados = array(); // COM O ARRAY VC PODE CRIAR VARIOS ATRIBUTOS 
        
        public function __set($nome, $valor){  // O $nome e o atributo private que ele pega e o $valor e oque vc vai passar para ele
            $this->dados[$nome] = $valor;
        }

        public function __get($nome){  // Mesma coisa para o get
            return $this->dados[$nome];
        }

        public function __tostring(){     // CRIANDO O TOSTRING   ////////////////////
            return "Tentei imprimir um objeto";  
        }

        public function __invoke(){ // ele printa o objeto como uma função
            return "Objeto como funcao";
        }

    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Leo";
    $pessoa->idade = 20; // COM O ARRAY VC PODE CRIAR VARIOS ATRIBUTOS
    $pessoa->sexo = "M";

    echo $pessoa->nome . "<br>";
    echo $pessoa->idade . "<br>";
    echo $pessoa->sexo . "<br>";
    
    /* ---------------------------------- */

    echo $pessoa; // vc não consegue ultilizar fazer isso , vc precisa do toString
    echo "<br>";
    echo $pessoa(); // printando com o INVOKE

?>