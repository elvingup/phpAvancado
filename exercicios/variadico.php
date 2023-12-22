<!-- 
    
Instrutor PHP Entra21 2023 21:45
CRIE UMA FUNÇÃO QUE MOSTRE O MENOR E MAIOR NUMERO CONTIDO NO PARAMETRO VARIADICO
 -->
 <?php
function sequencia(...$seq){
    echo min($seq);
    echo "<br>";
    echo max($seq);
}

sequencia(2,5,11,55,22);