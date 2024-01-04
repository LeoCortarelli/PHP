<?php
/* 1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, 
negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". */

$valor =  70; // valor de entrada

if($valor == 0){
    echo "Igual a Zero";
}else if($valor > 0){
    echo "Valor Positivo";
}else{
    echo "Valor Negativo";
}

?>