<?php
/* Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de 
três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior 
ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado] */

$nota1 = 7.3;
$nota2 = 6.4;
$nota3 = 5.1;

$media = ($nota1 + $nota2 + $nota3) / 3;
$mediaFormat = number_format($media, 2);  // Formatando a data para que tenha apenas 2 casas decimais
if($media > 6.33){
    echo "Aprovado: {$mediaFormat}";
}else{
    echo "Reprovado: {$mediaFormat}";
}

?>