<?php
//5) Crie um programa que substitua todas as vogais por ? do conteúdo de uma string

$palavra = "cozinha";

$vogais = array("a","e","i","o","u");
$subtituir = array("?","?","?","?","?");

$novapalavra = str_replace($vogais, $subtituir,$palavra);
echo $novapalavra;




?>