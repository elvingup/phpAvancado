<!-- 
    Calcule a média dos valores de qualquer vetor informado pelo usuario
 -->
 <?php

 $media = function($item){
    return array_sum($item) / count($item);
 };

 $notas = [8,6,7];

echo $media($notas);