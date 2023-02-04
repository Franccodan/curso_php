<?php


////Declaração de classe
class Carro {


////Atributos privados
	private $modelo;
	private $motor;
	private $ano;


/////Métodos publicos get para receber e set para enviar
	public function getModelo():string{
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

		public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

		public function getAno():int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}


////Método exibir, retorna um array.
	public function exibir(){

		return array(
			'modelo'=>$this->getModelo(),
			'motor'=>$this->getMotor(),
			'ano'=>$this->getAno()
		);
	}
}


/////Chamando atributos e enviando valores pelo método set
$gol = new Carro();
$gol->setModelo("Gol GTI");
$gol->setMotor("1.0");
$gol->setAno("1997");

var_dump($gol->exibir());

?>