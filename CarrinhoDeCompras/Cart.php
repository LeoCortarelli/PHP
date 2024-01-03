<?php

class Cart {
    public function add(Product $product){
        $inCart = false; // verificando se o produto está no carrinho de compras ou não
        $this->setTotal($product); // Pegando o total dos produtos  
        // Pegando a quantidade de produtos no carrinho do getCart da função
        if(count($this->getCart()) > 0){
            foreach($this->getCart() as $productInCart){
                if($productInCart->getId() === $product->getId()){  // Caso adcionando o mesmo produto mais de uma vez
                    $quantidade = $productInCart->getQuant() + $product->getQuant(); // somando a quantidade que está no carrinho mais a quantidade que está passando por paramentro
                    $productInCart->setQuant($quantidade); // Alterando a quantidade do produto
                    $inCart = true;
                    break; // parando o array se ele der true
                }
            }
        }

        if(!$inCart){ // Esse if so vai entrar nele se não existir no carrinho de compras
            $this->setProductInCart($product);
        }

    }

    private function setProductInCart($product){
        $_SESSION['cart']['product'][] = $product;
    }

    private function setTotal(Product $product){
        $_SESSION['cart']['total'] += $product->getPreco() * $product->getQuant();
        // Pegando o valor que ja existe no total estou somando com o getPreco e getQuantidade
        // Com isso ele sempre vai adcionando o total
    }

    public function remove(int $id){
        if(isset($_SESSION['cart']['product'])){
            foreach($this->getCart() as $index => $product){
                if($product->getId() === $id){
                    unset($_SESSION['cart']['product'][$index]);
                    $_SESSION['cart']['total'] -= $product->getPreco() * $product->getQuant();
                }
            }
        }
    }

    public function getCart(){
        return $_SESSION['cart']['product'] ?? []; // ?? []  -> Esse um tipo de verificação ?? (se existir retorna ele senão retorna vazio [])
    }

    public function getTotal(){
        return $_SESSION['cart']['total'] ?? 0;
    }
}


?>