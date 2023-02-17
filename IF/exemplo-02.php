<?php

$qualSuaNota = 5;

$notaAprovado = 7;
$notaRecuperacao = 6;
$notaReprovado = 5;


if ($qualSuaNota >= $notaAprovado) {
    echo "Você está aprovado";

} else if ($qualSuaNota == $notaRecuperacao)  {
    echo "Você está de recuperação";
}

 else if ($qualSuaNota <= $notaReprovado) {
    echo "Você está reprovado";
    
} 


?>