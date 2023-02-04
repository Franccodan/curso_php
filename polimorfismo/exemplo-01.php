<?php

abstract class Animal {

	public function falar(){

		return "som";

	}

	public function mover(){
		return "Anda";
	}
}

class Cachorro extends Animal {
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal {

	public function falar(){
		return "Mia";
	}
}

class Leao extends Animal {
	public function falar(){
		return "Ruge";
	}
}

class Passaro extends Animal {
	public function falar() {
		return "Canta";
	}

	public function mover() {
		return "Voa e " . parent::mover();
	}
}


$pluto = new Cachorro();
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "----------------------" . "<br/>"; 

$garfield = new Gato();
echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "----------------------" . "<br/>"; 

$aslan = new Leao();
echo $aslan->falar() . "<br/>";
echo $aslan->mover() . "<br/>";

echo "----------------------" . "<br/>"; 

$canario = new Passaro();
echo $canario->falar() . "<br/>";
echo $canario->mover();


?>