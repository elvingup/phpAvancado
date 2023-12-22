<!-- 
    Exercício de Closure
        , i.e., função anônima
    
        $resultado recebe o valor da função que tem uma variável por parametro e usa a variável $soma (importada por &)
        o valor de $soma é somada ao valor de $item para atualizar o valor de $soma 

 -->
<?php
$soma = 0; // iterativo somatório

$sequencia = [1,2,3,4]; // vetor dos números a serem iterados

$resultado = function ($item) use (&$soma) {
    $soma += $item;
};// a closure vai soma o valor do parâmetro ao valor da variável importada para atualizar o valor da própria variável importada

array_walk($sequencia, $resultado); // aplica o código da função armazenada em $resultado para cada elemento do vetor $sequencia

echo "<pre>";
print_r($resultado);
echo "</pre>";
