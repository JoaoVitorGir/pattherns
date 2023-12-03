<?php
    include("./pattherns/decorator.php");
    
    echo "A baixo implementação do DECORATOR";
    echo '</br>';
    echo '</br>';

    $relatorio = new RelatorioComNegrito(new RelatorioSimples("Relatório com um negrito"));
    echo $relatorio->gerar();
    echo '</br>';
    
    $dados = array(
        array('Nome', 'Idade', 'Cidade'),
        array('João', '30', 'São Paulo'),
        array('Maria', '25', 'Rio de Janeiro'),
    );
    
    $relatorio = new RelatorioComTabela(new RelatorioSimples(""), $dados);
    echo $relatorio->gerar();
    echo '</br>';

?>