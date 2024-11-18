<?php 

class AreaController extends Controller{

    public function index(){
        $dados = array();
        //$dados['titulos'] = 'Sobre Nós - Ki Oficina';

        $this->carregarViews('area',$dados);

    }
}