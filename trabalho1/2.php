<?php
//2) Crie um algoritmo que exiba a tabuada de 0 a 10 de acordo com o valor de uma variável

$valor = 4;



$vetor = array(1,2,3,4,5,6,7,8,9,10);


for($i = 0; $i < 10; $i++) {
   $tabuada = $valor * $vetor[$i];
   echo "tabuada $valor x $vetor[$i] = $tabuada <br><br>";
    }

?>