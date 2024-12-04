<?php

class ServicosController extends Controller
{
    private $servicoModel;

    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // intancia model servi=ico 
        $this->servicoModel = new Servico();
    }
    // Front end: Carregar lista de serviços
    public function index()
    {
        $dados = array();
        //$dados['titulos'] = 'Servicos - Ki Oficina';

        // $servicoModel = new Servico();

        // obeter os 3 servicos
        $servicos =$this->servicoModel->getServico();
        // var_dump($servicoAleatorio);
        $dados['servicos'] = $servicos;
        // var_dump($dados);

        $this->carregarViews('servicos', $dados);
    }
    // Front end: Carregar detalhe do serviço 
    public function detalhe($link)
    {
        // var_dump($link);
        $dados = array();
        // intanciar 
        $servicoModel = new Servico();
        $detalheServico = $this->servicoModel->getServicoPorLink($link);

        // var_dump($detalheServico)

        if ($detalheServico) {
            // echo 'Carregar as informações do serviço...';
            $dados['titulo'] = $detalheServico['nome_servico'];
            $dados['detalhe'] = $detalheServico;
            $this->carregarViews('detalhe-servicos', $dados);
        } else {
            // echo 'Carregar a página de erros';
            $dados['titulo'] = 'Serviços KiOficina';
            $this->carregarViews('servicos', $dados);
        }
    }

    // *******************************************************
    //                  Back-End - Dashboard
    // *******************************************************
    //  1- Método para listar todos os serviços
    public function listar()
    {

        if (!isset($_SESSION['userTipo']) || $_SESSION['userTipo'] !== 'Funcionario') {
            header('Location:' . BASE_URL);
            exit;
        }

        $dados = array();
        $dados['listarServico'] = $this->servicoModel->getTodosServicoS();
        // var_dump($dados['listarServico']);
        $dados['conteudo'] = 'dash/servico/listar';

        $this->carregarViews('dash/dashboard', $dados);
    }

    //  2- Método para adicionar serviços
    public function adicionar()
    {

        $dados = array();
        $dados['conteudo'] = 'dash/servico/adicionar';

        $this->carregarViews('dash/dashboard', $dados);
    }

    //  3- Método para editar
    public function editar()
    {

        $dados = array();
        $dados['conteudo'] = 'dash/servico/editar';

        $this->carregarViews('dash/dashboard', $dados);
    }
    //  4- Método para desativar o serviço
    public function desativar()
    {

        $dados = array();
        $dados['conteudo'] = 'dash/servico/desativar';

        $this->carregarViews('dash/dashboard', $dados);
    }
}
