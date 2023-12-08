<?php

    /* CRIACAO DE UMA CLASSE E INSTANCIAÇÃO */
    
        class Pessoa{
            public $nome;
            public $idade;

            public function Falar(){    // Fazendo um metodo falar
                echo $this->nome. " de ".$this->idade." anos acabou de Falar"; // printa falou na tela
            }
        }

        $leo = new Pessoa(); // Instanciando uma pessoa
        $leo->nome = "Leonardo Tavares Cortarelli"; // Atribuindo nome a variavel $leo
        $leo->idade = 20;   // Atribuindo idade a variavel $leo
        $leo->Falar(); // printa falou na tela

    
?>