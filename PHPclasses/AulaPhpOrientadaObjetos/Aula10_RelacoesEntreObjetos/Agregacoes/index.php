<?php
/* AGREGACAO
    Na agregação uma classe precisa da outra para executar sua ação, ou seja, uma classe ultiliza a 
    outra como parte de si própria */

    class Produtos{
        public $nome;
        public $valor;

        function __construct($nome, $valor){
            $this->nome = $nome;
            $this->valor = $valor;
        }

    }

    class Carrinho{
        public $produtos;

        public function adiciona(Produtos $produto){  // Ela chama obrigatoriamente a clsse Produtos
            $this->produtos[] = $produto; // VC TRANSFORMA EM ARRAY E JOGA O PARAMETRO QUE ESTÁ RECEBENDO
        }

        public function mostrar(){

            // PRINTANDO NA TELA
            foreach($this->produtos as $produto){ // $this->produtos e o nome do array e a variavel produto e o objeto
                echo $produto->nome. '<br>';
                echo $produto->valor. '<hr>';
            }
        }

    }

    // INSTANCIANDO OBJETO

    $produto1 = new Produtos("Notebook", 1220.00); // Criando a partir do construtor
    $produto2 = new Produtos("Mouse", 300); // Criando a partir do construtor

    $carinho = new Carrinho(); // Instanciando um carrinho de compras
    $carinho->adiciona($produto1); // adicionando um produto ao carrinho
    $carinho->adiciona($produto2); // adicionando um produto ao carrinho

    $carinho->mostrar(); // exibindo a variavel do carrinho estanciada

?>