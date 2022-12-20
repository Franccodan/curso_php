<?php 

///////////////////// Tipos básicos

$nome = "Daniel Franco";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

//////////////////////// Tipos compostos

$frutas = array("abacaxi", "laranja", "abacate");

//echo $frutas[2]; 

$nascimento = new DateTime();

//var_dump($nascimento);

////////////////////////// Tipos especiais

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo)

$nulo = NULL;


?>