<?php
interface EstrategiaOrdenacao {
    public function ordenar($lista);
}

class OrdenacaoCrescente implements EstrategiaOrdenacao {
    public function ordenar($lista) {
        sort($lista);
        $listaNaLista = "<ul>";
        foreach ($lista as $key => $value) {
            $listaNaLista .= "<li> ".$value." </li>";
        }
        $listaNaLista .= "</ul>";
        return $listaNaLista;
    }
}

class OrdenacaoDecrescente implements EstrategiaOrdenacao {
    public function ordenar($lista) {
        rsort($lista);
        $listaNaLista = "<ul>";
        foreach ($lista as $key => $value) {
            $listaNaLista .= "<li> ".$value." </li>";
        }
        $listaNaLista .= "</ul>";
        return $listaNaLista;
    }
}

class Lista {
    private $estrategia;

    public function setEstrategia(EstrategiaOrdenacao $estrategia) {
        $this->estrategia = $estrategia;
    }

    public function ordenar($lista) {
        return $this->estrategia->ordenar($lista);
    }
}

?>