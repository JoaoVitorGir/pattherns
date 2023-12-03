<?php
interface Observador {
    public function atualizar($mensagem);
}

class ObservadorConcreto implements Observador {
    public function atualizar($mensagem) {
        echo "Recebi a mensagem: $mensagem";
    }
}

class Notificacao {
    private $observadores = array();

    public function adicionarObservador(Observador $observador) {
        array_push($this->observadores, $observador);
    }

    public function notificar($mensagem) {
        foreach ($this->observadores as $observador) {
            $observador->atualizar($mensagem);
        }
    }
}

?>