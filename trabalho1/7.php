<?php

/*7) Faça uma função que receba 2 strings (A e B) 
e retorne uma terceira string (C) formada pelos 
caracteres de A e B intercalados. 
Ex.: Se A='Quarta‘ e B='Segunda', a resposta deve ser 'QSueagrutnada'*/

$palavra1 = "maracuja";
$palavra2 = "janeiro"; 

function intercalacao($palavra1,$palavra2){
    return implode('', array_map(
        function ($s1,$s2){
            return $s1.$s2;
        },
        str_split($palavra1), str_split($palavra2)
    ));
}
$resultado = intercalacao ($palavra1, $palavra2);
echo $resultado;




?>
