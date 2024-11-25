<?php

class AuthController extends Controller
{

    public function login()
    {
        var_dump('TEST DE LOGIN');
        $dados = array();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha');

            $tipo_usuario = filter_input(INPUT_POST, 'tipo_usuario');

            var_dump($email);
            var_dump($senha);
            var_dump($tipo_usuario);

            if ($email && $senha && $tipo_usuario) {
                if($tipo_usuario === 'cliente'){
                    $usuarioModel = new Cliente();
                    
                }elseif($tipo_usuario === 'funcionario'){

                }
            } else {
                // informaçoes invalidas
                if ($tipo_usuario == "") {
                    $dados['msg'] = 'Tipo de usuario não informado';
                    $dados['tipo_msg'] = 'erro-tipo_ususario';
                } else {
                    $dados['msg'] = 'Email e senha incorretas';
                    $dados['tipo_msg'] = 'erro';
                }
            }
        }
        $this->carregarViews('home', $dados);
    }
}
