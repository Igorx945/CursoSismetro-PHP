<?php
    $lista = array(
        array("Banco de dados",85),
        array("Analise",80),
        array("CC",78),
        array("Fron End",79),
        array("Prog Mobile",86),
        array("Port",70),
        array("Mat",75),
        array("Hist",69),
        array("Geo",89),
        array("Quim",97),
        array("Bio",72),
        array("Soc",84),
        array("Proj Vida",100),
        array("Ed Fin",100),
        array("Ing",95)
    );
    echo "<br/><br/><br/>";
    foreach($lista as $item){
        echo $item[0]." - ".$item[1]."<br/>";
    }
?>