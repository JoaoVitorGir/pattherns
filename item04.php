<?php
    include("./pattherns/observer.php");

    $notificacao = new Notificacao();
    $notificacao->adicionarObservador(new ObservadorConcreto());
    $notificacao->notificar('Nova mensagem');
    echo '</br>';

?>