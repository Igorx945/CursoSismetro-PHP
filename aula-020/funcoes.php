<?php 
function fibonacci($n1){
    $sequencia = array();
    $sequencia[1] = 2;
    $sequencia[2] = 2;

    for($i = 3; $i < $n1; $i++){
        $sequencia[$i] = $sequencia[$i - 1] + $sequencia[$i - 2];
    }
    return $sequencia[$n1-1];
}
    echo fibonacci(20);
?>