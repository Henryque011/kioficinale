<?php

// Carregar as configurações inicias
require_once('../config/config.php');

// Núcleo da Aplicação
// Nucleo é uma classe, que está fazendo uma instancia para o core (instancia e "puxar/relacionar-se" com um arquivo)
$nucleo = new Core();
$nucleo ->executar();
//echo('Hello World');
?>