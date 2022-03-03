<?php
//3) Crie um algoritmo para calcular a média final de um aluno, para isso, 
//insira os valores de três notas em um array,  por fim, calcule a média geral. 
//Caso a média seja maior ou igual a seis, 
//exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada


$notas = array(10,8,7);

$media = ($notas[0] + $notas[1] + $notas[2])/3;

if($media>=6){
    echo "aprovado";
}
else{
    echo "reprovado";
}




?>