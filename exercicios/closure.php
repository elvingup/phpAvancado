<!-- 
    Instrutor PHP Entra21 202320:27
FAÇA UM ALGORITIMO PARA CALCULAR MÉDIA DE NOTAS DE ALUNOS CADASTRADOS EM UM ARRAY.
USE CLOSURE PARA CALCULAR AS MEDIAS
 -->
<?php
$notas = [10,10,10];

$boletim = function($vetor){
    return array_sum($vetor) / count($vetor);
};

$hottie = $boletim($notas);

echo "Hottie nota {$hottie}";