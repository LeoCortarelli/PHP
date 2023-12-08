<?php
/* Associacoes 
    Acontece quando um objeto ULTILIZA outro, porem, sem eles dependerem um do outro. */

    class Pedido{
        public $numero;
        public $cliente;
    }

    class Cliente{
        public $nome;
        public $endereco;
    }

    $cliente = new Cliente();
    $cliente->nome = "Leonardo Tavares";
    $cliente->endereco = "Rua xxx, Numero: 777";

    $pedido = new Pedido();
    $pedido->numero = 123;
    $pedido->cliente = $cliente; //ATRIBUINDO UM OBJETO A OUTRO

    $dados = array(  // SUPONDO QUE VC QUEIRA GRAVAR NO BANCO DE DADOS 
        
        'numero' => $pedido->numero,
        'nome_cliente' => $pedido->cliente->nome, // Colocando o nome do cliente
        'endereco_cliente' => $pedido->cliente->endereco // colocando o endereco do cliente

        /* ELE COLOCA EM UM VETOR TUDO OQUE ESTA NA VARIAVEL $pedido pode ser varias variaveis como 
        $pedido2 ou $pedido3 ou PODE SER UM VETOR DE PEDIDOS */

    );

    var_dump($dados); // Printando o array

?>