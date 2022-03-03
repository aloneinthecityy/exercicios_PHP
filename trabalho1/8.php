<?php
//8) Crie uma função pra saber se o número passado é primo

$numero = 3;
echo "número escolhido: $numero <br>";
$primo=$numero-1;
$cont=0;

for($x=1;$x<=$primo;$x++){
    if($primo%$x==0){
        $cont++;
    }
}
if($cont==2){
    echo "O número antecessor de $numero é primo";
}
else{
    echo "O número antecessor de $numero não é primo ";
}

?>