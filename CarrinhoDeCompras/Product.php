<?php

class Product {

    private int $id;
    private string $nome;
    private int $preco;
    private int $quant;


    // SET
    public function setId(int $id){
        $this->id = $id;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setPreco(int $preco){
        $this->preco = $preco;
    }

    public function setQuant(int $quant){
        $this->quant = $quant;
    }

    // GET
    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getQuant(){
        return $this->quant;
    }

}

?>