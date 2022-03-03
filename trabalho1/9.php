<?php
//9) Faça uma função que receba uma duas strings por parâmetro, 
//inverta a primeira palavra atribuindo o resultado a segunda string. Ao final do programa, 
//devem-se ter duas palavras: a original (str) e a invertida. 
//Crie uma função que verifica se as duas palavras são palíndromos (se a palavra invertida é igual à original)


$palavra1="amizade";
$palavra2="tristeza";

function invertido($palavra1,$palavra2){
   $inversao = strrev($palavra1);
    echo $inversao . $palavra2;
    
}
function comparacao($palavra1,$palavra2){
    if(strcmp($palavra1, $palavra2)==0){
        echo "\n igual<br>";
    }
    else{
        echo "\n diferente<br>";
    }
}
echo $palavra1."<br>";
echo $palavra2 = strrev($palavra1)."<br>";
$result = comparacao($palavra1,$palavra2);
echo "\n $result. <br>";
?>