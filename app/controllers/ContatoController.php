<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class ContatoController extends Controller
{

    public function index()
    {
        $dados = array();
        $dados['titulos'] = 'Contato - Ki Oficina';

        $this->carregarViews('contato', $dados);
    }
    // enviar email
    public function enviarEmail()
    {
        // var_dump($_SERVER['REQUEST_METHOD']);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
            $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_SPECIAL_CHARS);
            $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

            // var_dump($nome);
            // var_dump($email);
            // var_dump($tel);
            // var_dump($assunto);
            // var_dump($mensagem);
            // var_dump($_SERVER['REQUEST_METHOD']);
            // var_dump($_SERVER);

            if ($nome && $email && $tel && $mensagem) {

                //instaciar o model de contato
                $contatoModel = new Contato();

                $salvar = $contatoModel->salvarEmail($tel, $email, $assunto, $mensagem, $nome);

                if ($salvar) {
                    //Reconhecer estrutura PHPmailer
                    require_once("vendors/phpmailer/PHPMailer.php");
                    require_once("vendors/phpmailer/SMTP.php");
                    require_once("vendors/phpmailer/Exception.php");

                    $phpmail = new PHPMailer(); //Gerando variavel de email

                    try {
                        $phpmail->isSMTP(); //envio por SMTP
                        $phpmail->SMTPDebug = 0;

                        $phpmail->Host = HOST_EMAIL; //SMTP Servidor de Email
                        $phpmail->Port = PORT_EMAIL; //Porta do Servidor SMTP

                        $phpmail->SMTPSecure = 'ssl'; //Certificado / Autenticação SMTP
                        $phpmail->SMTPAuth = true; //Caso necessite ser autenticadp

                        $phpmail->Username = USER_EMAIL; //Email SMTP
                        $phpmail->Password = PASS_EMAIL; //Senha SMTP

                        //REMETENTE E DESTINATARIO
                        $phpmail->setFrom(USER_EMAIL, $nome); //Email do remetente
                        $phpmail->addAddress(USER_EMAIL, $assunto); //Email do destinatário

                        $phpmail->IsHTML(true); //Trabalhar com estrutura HTML

                        $phpmail->Subject = $assunto; //Assunto enviado pelo método POST

                        // Estutura do Email
                        $phpmail->msgHTML("Nome: $nome <br>
                                    E-Mail: $email <br>
                                    Telefone: $tel <br>
                                    Mensagem: $mensagem");

                        $phpmail->AltBody = "Nome: $nome \n
                                    E-Mail: $email \n
                                    Telefone: $tel \n
                                    Mensagem: $mensagem";

                        $phpmail->send();

                        $dados = array(
                            'mensagem' => 'Obrigado pelo seu contato, em breve respoderemos.',
                            'status' => 'sucesso'
                        );

                        $this->carregarViews('contato', $dados);

                        // ********************E-MAIL DE RESPOSTA****************/
                        $phpmailResposta = new PHPMailer(); //Gerando variavel de email

                        $phpmailResposta->isSMTP();
                        $phpmailResposta->SMTPDebug = 0;
                        $phpmailResposta->Host = HOST_EMAIL;
                        $phpmailResposta->Port = PORT_EMAIL;
                        $phpmailResposta->SMTPSecure = 'ssl';
                        $phpmailResposta->SMTPAuth = true;
                        $phpmailResposta->Username = HOST_EMAIL; //Email SMTP
                        $phpmailResposta->Password = PASS_EMAIL; //Senha SMTP
                        $phpmailResposta->IsHTML(true);
                        $phpmailResposta->setFrom(USER_EMAIL, "INNOVA CLICK"); //Remetente
                        $phpmailResposta->addAddress(USER_EMAIL, $nome); //Destinatário
                        $phpmailResposta->Subject = "resposta - " . $assunto;

                        $phpmailResposta->msgHTML("$nome <br>
                                            Em breve retornaremos seu contato. <br>
                                            Mensagem: $mensagem <br>
                                            Emcaso de dúvidas entre em contato pelo número <br>
                                            (11)9999-6666");
                        $phpmailResposta->AltBody = "$nome \n
                                            Em breve retornaremos seu contato. \n
                                            Mensagem: $mensagem \n
                                            Emcaso de dúvidas entre em contato pelo número \n
                                            (11)9999-6666";
                        $phpmailResposta->send();
                    } catch (Exception $e) {
                        $dados = array(
                            'mensagem'          => 'Não foi possível enviar o e-mail. Por favor, tente mais tarde',
                            'status'            => 'erro',
                            'nome'              => $email,
                            'telefone'          => $tel,
                            'mensagem_usuario'  => $mensagem
                        );
                        error_log('Erro ao enviar o e-mail ' . $phpmail->ErrorInfo);
                        $this->carregarViews('contato', $dados);
                    } // fim try


                }
            } //fim do if que testa se os campos estão preenchidos
        } else {
            //Ebixir o form sem mensagem
            $dados = array();
            $this->carregarViews('contato', $dados);
        }
    }
}
