<?php

$seuSalario = 5000;

$salarioTeto = 2000;
$salarioInicial = 1900;
$salarioSenior = 3000;


if ($seuSalario < $salarioTeto) {
    echo "Você recebe o salario inicial da empresa";
}

else if ($seuSalario == $salarioTeto) {
    echo "Você recebe o teto";
}

else if ($seuSalario > $salarioSenior) {
    echo "Parabéns você recebe o maior salario da empresa";    
}



?>