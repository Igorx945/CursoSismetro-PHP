<?php 
// function numero_primo($n1){
//     $sequencia = array();
//     $sequencia[0] = 1;
//     $sequencia[1] = 1

//     for($i = 2; $i < $n1; $i++){
//         $sequencia[$i] = [5%2] = 1
//     }
//     return $sequencia[$n1-1];
// }
//     echo numero_primo(1);

 

function primo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

function nthPrimo($n) {
    $count = 0;
    $num = 2;
    while ($count < $n) {
        if (primo($num)) $count++;
        $num++;
    }
    return $num - 1;
}

echo nthPrimo(10); // 29
?>
    
