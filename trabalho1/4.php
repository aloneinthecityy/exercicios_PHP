<?php
//4) Crie dois vetores com valores aleatórios e depois crie um terceiro vetor 
//que seja a intersecção dos outros dois, ou seja, 
//somente com os valores que estão presentes em ambos os vetores. 
//Não deve conter valores repetidos

$vetor1 = array(4,5,7,8,);
$vetor2 = array(1,3,5,2);

$vetor3 = array_intersect($vetor1, $vetor2);

print_r($vetor3);


?>