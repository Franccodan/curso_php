<?php 

//Volta JSON para um array
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Daniel","idade":24}]';

$data = json_decode($json, true);

var_dump($data);

?>