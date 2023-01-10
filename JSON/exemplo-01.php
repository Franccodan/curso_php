<?php 


//Transforma array em JSON
$pessoas = array();	

	array_push($pessoas, array(
		'nome'=>'João',
		'idade'=> 20

	));

	array_push($pessoas, array(
		'nome'=>'Daniel',
		'idade'=> 24

	));

	echo json_encode($pessoas);


?>