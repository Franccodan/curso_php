<?php 



$anoNascimento = 1999;

$nome = "Daniel";

$sobrenome = "Franco";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome;

echo "<br/>";

//unset($nomeCompleto);



if (isset($nome)) {
	echo $nome;
}

?>