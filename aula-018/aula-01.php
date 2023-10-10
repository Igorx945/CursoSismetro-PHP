<?php
    $a = 15;
    $b = 2.7;

    $soma = $a + $b;
        echo $soma."<br>";

     $subtracao = $a - $b;
        echo $subtracao."<br>";

    $divisao = $a / $b;
        echo $divisao."<br>";

    $multiplicacao = $a * $b;
        echo $multiplicacao."<br>";

        if($soma < 10){
            echo "soma menor que 10 <br>";
        } else{
            echo "soma maior ou igual a 10 <br>";
        }

        if($subtracao > 20){
            echo "subtracao maior que 20 <br>";
        }else{
            echo "subtracao menor que 20 <br>";
        }

        if($divisao < 30){
            echo "divisao menor que 30 <br>";
        }else{
            echo "divisao maior ou igual a 30 <br>";
        }

        if($multiplicacao > 40){
            echo "multiplicacao maior que 40 <br>";
        }else{
            echo "multiplicacao menor que 40 <br>";
        }
        
        $v = 10; 

        switch($v){
            case 10:
                echo "ola";
                break;
        }
?>