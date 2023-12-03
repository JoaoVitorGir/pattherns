<?php
    include("./pattherns/factory.php");

    //desenha um círculo na tela
    $fabrica = new FabricaFormas();
    $forma = $fabrica->criarForma('circulo');
    echo $forma->desenhar();
    
    // senha um quadrado na tela
    $fabrica = new FabricaFormas();
    $forma = $fabrica->criarForma('quadrado');
    echo $forma->desenhar();
  
?>