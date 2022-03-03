<?php
//10) Crie uma função que recebe uma string como parâmetro 
//e encontra o número total de caracteres desta, e os números de 
//vezes que cada caractere aparece nesta string. 
//Imprima os caracteres presentes na string juntamente com a quantidade calculada do mesmo


$palavra = "churrasco";
$tamanho = strlen($palavra);
echo "tamanho de caracteres da string: $tamanho <br>";

    for ($i=0; $i<$tamanho; $i++){
        $caracteres = $palavra[$i];
       $tot = substr_count($palavra,$caracteres);

    echo "\n $caracteres = $tot <br>";
    }





?>