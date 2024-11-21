<?php

class Core{
    // Método inicializar o processo de ROTAS
    public function executar(){
        $url = '/';
        // var_dump($url);
        // Verificar se a variavel URL está definida na $_GET
        // isset = verificar se uma var foi inicializada
        if(isset($_GET['url'])){
            $url .= $_GET['url'];
        }
        //var_dump($url);
        //  Defininfo um array para armazenar os parametros da URL
        $parametro = array();
        //  Verifica se a URL não está vazia e se não é apenas uma /
        if(!empty($url) && $url != '/'){

            // servicos  /especialidade  /nomeServico
            // controller  /ação  /parametro
            $url = explode('/', $url);
            //var_dump($url);
            // servico[0]
            // especialidade[1]
            //nomeServico=[2]

            // array_shift desloca um elemneto do ínicio do array
            array_shift($url);
            
            //var_dump($url);
            // $url[0]: Obter o controller atual
            // ucfirst- Colocar a primeira letra em maiúscula
            // Concatenar 'Controller' ao nome pra seguir o padro
            $controladorAtual = ucfirst($url[0]) . 'Controller';
            //controladorAtual: ServicosController
            // var_dump($controladorAtual);

            array_shift($url);
            //var_dump($url);
            // especialidade[0]
            // nomeServico=[1]

            //verificar se existe um ação na URL
            if(isset($url[0]) && !empty($url[0])){
                $acaoAtual = $url[0];
                //$acaoAtual = especialidade
                //var_dump("Nome da ação atual: " . $acaoAtual);
                array_shift($url);
            }else{
                $acaoAtual = 'index';
                //var_dump($acaoAtual)
            }
            // Os parametros
            // conta os elementos de um array
            if(count($url) > 0){
                $parametro = $url;
            }
        }else{
            $controladorAtual = 'HomeController';
            $acaoAtual = 'index';
            //var_dump("Controlador Atual: " .$controladorAtual);
            // var_dump('Ação Atual: ' . $acaoAtual);
        }

        // // '||' operador lógico ou
        // // Vereificando se o arquivo do CONTROLLER existe e se o método na class
        if(!file_exists('../app/controllers/' . $controladorAtual . '.php') || !method_exists
        ($controladorAtual, $acaoAtual)) {

            // Se não existir defina o controller como ErroController
            $controladorAtual = 'ErroController';
            $acaoAtual = 'index';

            // var_dump('Controlador Atual: '. $controladorAtual);
            // var_dump('Ação atual: '. $acaoAtual);
        }

        //var_dump($controladorAtual);
        // var_dump('Ação Atual: ' . $acaoAtual);

        // Instacia do controller atual
        $controller = new $controladorAtual();
        //var_dump($controller);

        // //call_user_func_array — Chama um retorno de chamada com uma matriz de parâmetros
        call_user_func_array(array($controller, $acaoAtual), $parametro);
    }
}