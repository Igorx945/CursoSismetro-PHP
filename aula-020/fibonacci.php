<?php 

 
/*
function primo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

function nummero_Primo($n) {
    $count = 0;
    $num = 2;
    while ($count < $n) {
        if (primo($num)) $count++;
        $num++;
    }
    return $num - 1;
}

echo nthPrimo(25);
*/


function numero_primo($posicao){
    $primos = array(2);

    $n=3;
    while(count($primos) < $posicao){
        $e_primo = true;
        foreach($primos as $primo){
            if($n%$primo == 0){
                $e_primo = false;
            }
        }
        if($e_primo){
            $primos[] = $n;
        }
        $n++;
    }
    return $primos[$posicao - 1];
}
echo numero_primo(10);
?>
    
