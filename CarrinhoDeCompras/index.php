<?php 
require 'Cart.php';
require 'Product.php';
session_start();



// Como não vamos trabalhar com banco vamos fazer um array
$product = [
    1 => ['id' => 1, 'name' => 'Cadeira', 'preco' => 2000, 'quantidade' => 1],
    2 => ['id' => 2, 'name' => 'Mouse', 'preco' => 200, 'quantidade' => 1],
    3 => ['id' => 3, 'name' => 'Computador', 'preco' => 3500, 'quantidade' => 1],
    4 => ['id' => 4, 'name' => 'Ps5', 'preco' => 5000, 'quantidade' => 1],
];

    if(isset($_GET['id'])){
        $id = strip_tags($_GET['id']); // Caso fique algma tag no id vc coloca strip_tags()
        $productInfo = $product[$id];
        $product = new Product;
        $product->setId($productInfo['id']);
        $product->setNome($productInfo['name']);
        $product->setPreco($productInfo['preco']);
        $product->setQuant($productInfo['quantidade']);

        $cart = new Cart;
        $cart->add($product);
    }

var_dump($_SESSION['cart'] ?? []);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>
</head>
<body>
    <a href="MyCart.php">Ir para o Carrinho</a>
    <ul>
        <li>Cadeira<a href="?id=1">Add</a> R$ 2000</li>
        <li>Mouse<a href="?id=2">Add</a> R$ 200</li>
        <li>Computador<a href="?id=3">Add</a> R$ 3500</li>
        <li>Ps5<a href="?id=4">Add</a> R$ 5000</li>
    </ul>
</body>
</html>