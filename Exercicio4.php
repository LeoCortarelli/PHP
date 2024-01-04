<?php
/* 4) Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). 
Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. */

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['operacao'];
$result = 0;

if($n1 && $n2){
    switch($op){
        case "+":
            $result = $n1 + $n2;
            break;
        case "-":
            $result = $n1 - $n2;
            break;
        case "*":
            $result = $n1 * $n2;
            break;
        case "/":
            $result = $n1 / $n2;
            break;
    }
}

echo "O Resultado: {$result}";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <form method="post">
        <label>Valor 1</label>
        <input type="number" name="n1">
        <br>
        <label>Valor 2</label>
        <input type="number" name="n2">
        <br>
        <select name="operacao">
            <option value="+">Adição</option>
            <option value="-">Subtração</option>
            <option value="/">Divisão</option>
            <option value="*">Multiplicação</option>
        </select>
        <br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>