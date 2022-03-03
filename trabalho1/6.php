<?php
//6) Crie duas strings e retire da primeira string 
//todos os caracteres que estão presentes na segunda string

$palavra1 = "historias";
$palavra2 = "mentiras";

for($i=0; $i<strlen($palavra2); $i++){
    for($x=0; $x<strlen($palavra1);$x++){
        if($palavra1[$x] == $palavra2[$i]){
            $palavra1 = substr_replace($palavra1,"",$x,1);
        }
    }
}
echo $palavra1;
?>

