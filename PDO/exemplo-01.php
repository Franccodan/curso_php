<?php 

//Fazendo a conexão com o banco de dados, tipo do BD, nome do BD, endereço do banco login e senha
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

//Envia para o banco
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Deixa as colunas em negrito com o valor do lado e quebra uma linha
foreach ($results as $row) {
	
	foreach ($row as $key => $value) {

		echo "<strong>" .$key. ":</strong>" .$value. "<br/>";
	}

	echo "============================================================<br>";
}


?>