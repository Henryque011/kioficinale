<?php 

class ServicosController extends Controller{

    public function index(){
        $dados = array();
        //$dados['titulos'] = 'Servicos - Ki Oficina';

        $this->carregarViews('servicos',$dados);
        // intanciar 
        $servicoModel = new servico();

        // obeter os 3 servicos
        $servico = $servicoModel-> getServico();
        // var_dump($servicoAleatorio);
        $dados['servicos'] = $servico;
        // var_dump($dados);

        $this->carregarViews('servicos',$dados);
        
    }

    public function detalhe($link){
        // var_dump($link);
        $dados = array();
        // intanciar 
        $servicoModel = new servico();
        $detalheServico = $servicoModel->getServicoPorLink($link);

        // var_dump($detalheServico)

        if($detalheServico){
            // echo 'Carregar as informações do serviço...';
            $dados['titulo'] = $detalheServico['nome_servico'];
            $dados['detalhe'] = $detalheServico;
            $this->carregarViews('detalhe-sericos', $dados);
        }else{
            // echo 'Carregar a página de erros';
            $dados['titulo'] = 'Serviços KiOficina';
            $this->carregarViews('servicos',$dados);
        }
    
    }
}