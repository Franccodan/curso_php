<?php 

//declarando variáveis
$nome = "daniel rodrigo da silva franco";

//string to uppercase - Letras maiusculas
$nome = strtoupper($nome);

echo $nome;

//string to lower - Letras minusculas
$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";

//Deixa maiusculo a primeira letra da primeira palavra - Daniel franco
echo ucfirst($nome);

echo "<br>";

//Deixa maiusculo apenas a primeira letra de cada palavra - Daniel franco
echo ucwords($nome);



?>