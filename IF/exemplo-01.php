<?php 

$qualASuaIdade = 120;

$idadeCriança = 12;
$idadeMaior = 18;
$idadeIdoso = 65;


//Estrutura de condição
if ($qualASuaIdade < $idadeCriança) {
 
	echo "Criança";
} else if ($qualASuaIdade < $idadeMaior) {

	echo "É adolescente";
} else if ($qualASuaIdade < $idadeIdoso) {

	echo "Adulto";
} else {
	echo "idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";


?>