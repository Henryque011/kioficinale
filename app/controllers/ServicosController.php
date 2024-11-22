<?php 

class ServicosController extends Controller{

    public function index(){
        $dados = array();
        //$dados['titulos'] = 'Servicos - Ki Oficina';

        // instanciar 
        $servicoModel = new Servico();

        // obeter os 3 servicos
        $servicos = $servicoModel->getServico();
        // var_dump($servicoAleatorio);
        $dados['servicos'] = $servicos;
        // var_dump($dados);

        // var_dump($dados['servicos']);
        $this->carregarViews('servicos',$dados);

    }

    public function detalhe($link){
        // var_dump($link);
        $dados = array();
        // intanciar 
        $servicoModel = new Servico();
        
        $detalheServico = $servicoModel->getServicoPorLink($link);

        // var_dump($detalheServico);

        if($detalheServico){
            // echo 'Carregar as informações do serviço...';
            $dados['titulo'] = $detalheServico['nome_servico'];
            $dados['detalhe'] = $detalheServico;
            $this->carregarViews('detalhe-servico',$dados);
        }else{
            // echo 'Carregar a página de erros';
            $dados['titulo'] = 'Serviços KiOficina';
            $this->carregarViews('servicos',$dados);
        }
    
    }
}