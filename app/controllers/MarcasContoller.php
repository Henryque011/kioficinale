<?php

class MarcasController extends Controller
{

    public function index()
    {
        $dados = array();
        // $dados['titulos'] = 'Servicos - Ki Oficina';

        // instanciar 
        $MarcasModel = new Marca();
        
        // obeter os 3 servicos
        $marcas = $MarcasModel->getMarcasAletorias();
        var_dump($marcas);

        $dados['marcas'] = $marcas;
        // var_dump($dados);

        $this->carregarViews('marcas', $dados);
    }
}
