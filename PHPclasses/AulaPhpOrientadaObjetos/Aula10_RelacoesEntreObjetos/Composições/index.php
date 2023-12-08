<?php
/* COMPOSICÃO
    NA COMPOSICAO UMA CLASSE E INSTANCIADA DENTRO DE OUTRA CLSSE DENTRO DE SI PROPRIA, SENDO ASSIM, QUANDO
    ELA FOR DESTRUIDA, A OUTRA CLASSE TAMBEM SERÁ */

    class Pessoa{
        public function atribuiNome($nome){
            return "O nome da pessoa é: ". $nome;
        }
    }

    class Exibe{
        public $pessoa;
        public $nome;

        function __construct($nome){
            $this->pessoa = new Pessoa();  // criando uma instancia da classe PESSOA dentro da classe EXIBE
            $this->nome = $nome;
        }

        public function exibeNome(){
            echo $this->pessoa->atribuiNome($this->nome);
        }
    }


    $exibe = new Exibe("Joao");
    $exibe->exibeNome();    

?>