<?php
    require 'classes/produto.php'; // chamando a pasta com aclasse produto
    require 'models/produto.php'; // chamando a pasta com aclasse produto

    $produto = new \classes\Produto(); // para instanciar uma classe que está em outra pasta ultilizase o \nomeDaPasta\ para poder instanciar
    $produto->mastrarDetalhes();

    echo "<br>";
    echo "<br>";
    /* VOCE TAMBEM PODE COLOCAR APELIDOS PARA AS CLASSES E CHAMALAS SEPARADAMENTE EX... */
    
    use models\Produto as produtoModel; // o comando (as) da um apelido a classe Produto na pasta models
    use classes\Produto as produtoClass;

    $produto2 = new produtoModel(); 
    $produto2->mastrarDetalhes();

    echo "<br>";
    echo "<br>";

    $produto3 = new produtoClass();
    $produto3->mastrarDetalhes();

?>