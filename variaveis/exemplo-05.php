<?php

$nome = "Daniel";

function teste() {

	global $nome;
	echo $nome;

}

function teste2() {
	$nome = "Luciano";
	echo $nome. " Agora no teste dois";

}

teste();

teste2();

?>