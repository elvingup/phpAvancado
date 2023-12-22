<!-- 
    Closure que itera uma contagem
 -->

 <?php

 function contagem(){
    $contador = 0;
    // $contando recebe o valor da função que usa o $contador
    $contando = function() use ($contador) {
        while ($contador < 11) {
        echo "nº ".$contador."<br>";
        $contador++;
        }
    };

    return $contando;
 }

$contagem = contagem(); // a função retorna $contando; depois, o valor é atribuído a $contagem
$contagem(); // a variável $contagem chama a função que está armazenada