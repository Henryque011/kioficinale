<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

// Define url base da aplicação
// define("BASE_URL","https://kioficina.smpsistema.com.br/");
// Define URl local
define("BASE_URL","http://localhost/KiOficinale/public/");

//configuração do Databases
define("DB_HOST", "smpsistema.com.br");
define("DB_NAME", "u283879542_henryque");
define("DB_USER", "u283879542_henryque");
define("DB_PASS", "Henryque@tipi02");

// define('HOST_EMAIL','smtp.hostinger.com');
// define('PORT_EMAIL','465');
// define('USER_EMAIL','senacria@tipi02.smpsistema.com.br');
// define('PASS_EMAIL','Senac@senacria01');

// Config email
// define('HOST_EMAIL','smtp.hostinger.com');
// define('PORT_EMAIL','465');
// define('USER_EMAIL','innovaclicktipi02@smpsistema.com.br');
// define('PASS_EMAIL','Senac@tipi02');

define('HOST_EMAIL','smtp.gmail.com');
define('PORT_EMAIL','465');
define('USER_EMAIL','henryquenonatosilva@gmail.com');
define('PASS_EMAIL','rvoh totu dndy wmck');


// Sistema de autoload das class - Function para o autoload - "$classe" é uma class
spl_autoload_register(function ($classe){

    if(file_exists('../app/controllers/'. $classe . '.php')){
        //  caminho - nome do arquivo - fim do arquivo .php
        // ../app/controllers/HomeController.php
        require_once '../app/controllers/'. $classe .'.php';
        //var_dump('../app/controllers/'. $classe .'.php');
    }

    if (file_exists('../app/models/'. $classe . '.php')){
        require_once '../app/models/'. $classe . '.php';
    }

    if(file_exists('../core/'. $classe .'.php')){
        require_once '../core/' . $classe .'.php';
    }
});