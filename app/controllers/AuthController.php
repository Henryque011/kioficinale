<?php

class AuthController extends Controller
{

    public function login()
    {
        // var_dump('TEST DE LOGIN');
        $dados = array();
        // var_dump($_POST);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha');
            $tipo_usuario = filter_input(INPUT_POST, 'tipo_usuario');

            // var_dump($email);
            // var_dump($senha);
            // var_dump($tipo_usuario);

            if ($email && $senha && $tipo_usuario != "Selecione") {
                if ($tipo_usuario === 'Cliente'){
                    $usuarioModel   = new Cliente();
                    $usuario        = $usuarioModel->buscarCliente($email);
                    $campoSenha     = 'senha_cliente';
                    $campoId        = 'id_cliente';
                    $campoNome      = 'nome_cliente';
                    // var_dump($usuario);

                }elseif($tipo_usuario === 'Funcionario') {
                    $usuarioModel       = new Funcionario();
                    $usuario            = $usuarioModel->buscarFunc($email);
                    $campoSenha         = 'senha_funcionario';
                    $campoId            = 'id_funcionario';
                    $campoNome          = 'nome_funcionario';
                    // var_dump($usuario);

                }else{
                    $usuario = null;
                }

                if($usuario && $usuario[$campoSenha] === $senha){

                    // var_dump($usuario);
                    $_SESSION['userId'] = $usuario[$campoId];
                    $_SESSION['userTipo'] = $tipo_usuario;
                    $_SESSION['userNome'] = $usuario[$campoNome];

                    //Redirecionar para tela de dashborad
                    header('Location:' . BASE_URL . 'dashboard');
                    exit;

                }else{
                    // var_dump('errado');
                    $_SESSION['login-erro'] = 'E-mail ou senha incorretos';
                }

            } else {
                // Credenciais inválidas - dados incompletos
                $_SESSION['login-erro'] = 'preencha todos os dados'; 
            }
            header('location: ' . BASE_URL); //Salvamento por sessão e não em dados
            exit;

            //     if($tipo_usuario === '1'){
            //         $usuarioModel = new Cliente();
            //     }elseif($tipo_usuario === '2'){

            //     }
            // } else {
            //     // informaçoes invalidas
            //     if ($tipo_usuario == "selecione") {
            //         $dados['msg'] = 'Tipo de usuario não informado';
            //         $dados['tipo_msg'] = 'erro-tipo_ususario';
            //     } else {
            //         $dados['msg'] = 'Email e senha incorretas';
            //         $dados['tipo_msg'] = 'erro';
            //     }
            // }
        }

        // Se p método não for via POST
        header('location:' . BASE_URL);
        exit;
        $this->carregarViews('home', $dados);

    }

    public function sair() {
        session_unset(); //limpar variaveis
        session_destroy(); //destruir sessao
        header('Location:' . BASE_URL . 'dashboard');
        exit;
    }
}
