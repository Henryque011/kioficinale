<?php 

class SobreController extends Controller{

    public function index(){
        $dados = array();
        //$dados['titulos'] = 'Sobre Nós - Ki Oficina';

        $this->carregarViews('sobre',$dados);

         // obeter os 3 servicos
        $servicoAleatorio = $servicoModel->getServicoAleatorio(3);
        // var_dump($servicoAleatorio);
        $dados['servicos'] = $servicoAleatorio;
        // var_dump($dados);

        $this->carregarViews('home',$dados);
    }
}