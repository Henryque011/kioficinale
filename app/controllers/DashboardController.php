<?php

class dashboardController extends Controller{
    public function index(){
        
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        // var_dump($_SESSION['userNome']);

        if(!isset($_SESSION['userId']) || !isset($_SESSION['userTipo'])){

            header('Location:' . BASE_URL . 'dashboard');
            exit;
        }

        $dados = array();
        $dados['titulo']   = 'Dashboard - Ki Oficina'; 
        $dados['nomeUser'] = $_SESSION['userNome'];
        $dados['iduser']   = $_SESSION['userId'];
        $dados['tipoUser'] = $_SESSION['userTipo'];
        $this->carregarViews('dash/dashboard',$dados);
    }
}