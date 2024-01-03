<?php

require 'Cart.php';
require 'Product.php';
session_start();

$cart = new Cart;
$productInCart = $cart->getCart();

if(isset($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $cart->remove($id);
    header('Location: MyCart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Go home</a>
    <ul>
        <?php if(count($productInCart) <= 0): ?>
            <h3>Nenhum produto no carrinho</h3>
        <?php endif ?>

        <?php foreach($productInCart as $product): ?>
            <li>
                <?php echo $product->getNome(); ?>
                <input type="text" value="<?php echo $product->getQuant(); ?>">
                Preço: <?php echo $product->getPreco(); ?>
                Subtotal: <?php echo $product->getPreco() * $product->getQuant(); ?>
                <a href="?id=<?php echo $product->getId(); ?>"></a>
            </li>
        <?php endforeach ?>
        <li>Total: <?php echo $cart->getTotal(); ?></li>
    </ul>
</body>
</html>