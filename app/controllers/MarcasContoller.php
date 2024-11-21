<?php 

class MarcasController extends Controller{

    public function index(){
        $dados = array();
        // $dados['titulos'] = 'Servicos - Ki Oficina';

        // intanciar 
        $MarcasModel = new Marca();

        // obeter os 3 servicos
        $marcas = $MarcasModel-> getMarcaAletorio();
        // var_dump($servicoAleatorio);
        $dados['marcas'] = $marcas;
        // var_dump($dados);

        $this->carregarViews('marcas',$dados);
        
    }

}