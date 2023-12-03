<?php
    include("./pattherns/strategy.php");

    echo "Abaixo segue a implementação do Stategy para ordenar a seguinte lista [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5]";

    echo "<div style='display:flex'>";
    $lista = new Lista();
    $lista->setEstrategia(new OrdenacaoCrescente());
    print_r($lista->ordenar([3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5]));
    
    $lista = new Lista();
    $lista->setEstrategia(new OrdenacaoDecrescente());
    print_r($lista->ordenar([3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5]));
    echo '</div>';
   
?>