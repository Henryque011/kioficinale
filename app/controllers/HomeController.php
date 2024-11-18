<?php 

class HomeController extends Controller{

    public function index(){

        $dados = array();

        $dados['mensagem'] = 'Bem-vindo a KiOficina';
        
        // iNTANCIAR O METODO SERVICO
        $servicoModel = new servico();

        // obeter os 3 servicos
        $servicoAleatorio = $servicoModel->getServicoAleatorio(3);
        // var_dump($servicoAleatorio);
        $dados['servicos'] = $servicoAleatorio;
        // var_dump($dados);

        $this->carregarViews('home',$dados);
        

    }
}