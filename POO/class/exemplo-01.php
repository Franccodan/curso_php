<?php

/////Programação orientada a objetos
/////Aula 01 - Classes, attibutos e métodos

class Pessoa { ////////////Classe

	public $nome;//Atributo - Atributo fora do método escrevemos normal com $

	public function falar(){//Método

		return "O meu nome é: ". $this->nome; ////Atributo dentro do método escreve com $this->
	}


}


$daniel = new Pessoa();
$daniel->nome= "Daniel Rodrigo";
echo $daniel->falar();

?>