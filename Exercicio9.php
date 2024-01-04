<?php 
/* Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é 
    maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou 
    Fulano não é maior de 18 e tem XX Anos. */

$nome = "Ortega";
$idade = 20;

if($idade >= 18){
    echo "{$nome} e maior de 18 anos";
}else{
    echo "{$nome} e menor de 18 anos";
}

?>