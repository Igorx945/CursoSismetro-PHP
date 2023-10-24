<?php
    $numero_sorteado = rand(1,99);

    echo $numero_sorteado. "<br>";

    switch($numero_sorteado){
        case 17:
            echo "Joao ganhou";
            break;
        case 67:
            echo "léo ganhou";
            break;
        case 21:
            echo "gesdras guanhou";
            break;
        case 33:
            echo "igor ganhou";
            break;
        case 12:
            echo "manu ganhou";
            break;
        case 7:
            echo "vini ganhou";
            break;
        case 4:
            echo "maculan ganhou";
            break;
          case 69:
            echo "thales ganhou";
            break;  
        case 60:
            echo "caua ganhou";
            break;
        case 75:
            echo "zimmerman ganhou";
            break;
        default:
            echo " Ninguem Ganhou";
        }
?>