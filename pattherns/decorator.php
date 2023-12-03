<?php
interface Relatorio {
    public function gerar();
}

class RelatorioSimples implements Relatorio {
    private $nome;

    public function __construct($nome = "Relatório Simples") {
        $this->nome = $nome;
    }

    public function gerar() {
        return $this->nome;
    }
}


class DecoratorRelatorio implements Relatorio {
    protected $relatorio;

    public function __construct(Relatorio $relatorio) {
        $this->relatorio = $relatorio;
    }

    public function gerar() {
        return $this->relatorio->gerar();
    }
}

class RelatorioComTabela extends DecoratorRelatorio {
    private $dados;

    public function __construct(Relatorio $relatorio, $dados) {
        parent::__construct($relatorio);
        $this->dados = $dados;
    }

    public function gerar() {
        $tabela = "<table>";
        foreach ($this->dados as $linha) {
            $tabela .= "<tr>";
            foreach ($linha as $celula) {
                $tabela .= "<td>" . $celula . "</td>";
            }
            $tabela .= "</tr>";
        }
        $tabela .= "</table>";
        return parent::gerar() . $tabela;
    }
}


class RelatorioComNegrito extends DecoratorRelatorio {
    public function gerar() {
        return "<b>" . parent::gerar() . "</b>";
    }
}

class RelatorioComItalico extends DecoratorRelatorio {
    public function gerar() {
        return "<i>" . parent::gerar() . "</i>";
    }
}

?>