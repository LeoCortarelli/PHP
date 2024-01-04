<?php
/* Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. 
Caso o número seja fora desse intervalo, informar que não existe mês com este número. */

$mes = ["Janeiro",
"Fevereiro",
"Março",
"Abril",
"Maio", 
"Junho",
"Julho",
"Agosto",
"Setembro",
"Outubro",
"Novembro",
"Dezembro"];

$numMes = 8;

if($numMes >= 0 && $numMes <= 12){
    echo $mes[$numMes - 1];
}else{
    echo "Número invalido";
}