<?php

/*1) Crie um algoritmo que verifica se o valor de uma variável é positivo, 
negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero"*/

$valor = 4;

echo "Número: $valor";

if($valor>0){
    echo "Valor positivo";
}
elseif($valor==0){
    echo "Igual a zero";

}
else{
    echo "Valor negativo";
}



?>