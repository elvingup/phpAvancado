<!-- 
    filtrar nos numeros ímpares para triplicá-los a seguir
 -->
 <?php

 $sequencia = [0,1,2,3,4,5,6,7,8,9,10,11];

 $triplos = array_map(
    function($numero){
        return $numero * 3;
    },
    array_filter(
        $sequencia,
        function($numero){
            if ($numero % 2 != 0){
                return $numero;
            }
        }
    )
);

echo "<pre>";
print_r($triplos);
echo "</pre>";