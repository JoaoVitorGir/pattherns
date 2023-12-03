<?php
    include("./pattherns/singleton.php");
    
    echo "Lista os usuários ultilizando o Singleton </br>";
    $registro = RegistroUsuario::getInstancia();
    $registro->registrarUsuario('Usuario 1');
    $registro->registrarUsuario('Usuario 2');
    print_r($registro->getListaUsuarios());
    echo '</br>';
    
  
?>