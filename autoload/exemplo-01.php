<?php

function incluirClasses($nomeClasse) {
	if (file_exists($nomeClasse. ".php") === true) {
			require_once($nomeClasse. ".php");
	}

}

spl_autoload_register("incluirClasses");

/*spl_autoload_register(function($nomeClasse){
	if (file_exists("abstrata"$nomeClasse. ".php") === true) {
			require_once($nomeClasse. ".php");
	}


});	
*/


//

$carro = new DelRey();

$carro->acelerar(80);


?>
