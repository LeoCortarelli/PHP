<?php
/* Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em 
relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". */

$valorA = 7;
$valorB = 5;

if($valorA > $valorB){
    echo "{$valorB} {$valorA}";
}else{
    echo "{$valorA} {$valorB}";
}

?>