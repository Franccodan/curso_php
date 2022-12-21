<?php 

//declarando variáveis
$empresa = "Eracode";

//troca de caractere, primeiro especifica-se o que queremos trocar, segundo pelo que vamos trocar e por ultimo selecionar a variável que queremos fazer a alteração
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>