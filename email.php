    <?php

        // RECONHECER ESTRUTURA PHPMAILER 
        require_once("phpmailer/src/PHPMailer.php");
        require_once("phpmailer/src/SMTP.php");
        $ok =0;

        // Estrutura para envio de email
        try{
            if(isset($_POST["email"])){

                $nome        = $_POST["nome"];
                $telefone    = $_POST["tel"];
                $email       = $_POST["email"];
                $mensagem    = $_POST["mensagem"];
                $assunto     = "CONTATO VIA SITE";

                $phpmail = new PHPMailer\PHPMailer\PHPMailer(); //Gerando variavel de email
                $phpmail-> isSMTP(); //envio por SMTP
                $phpmail-> SMTPDebug = 0;

                $phpmail-> Host = "smtp.hostinger.com"; //SMTP Servidor de Email
                $phpmail-> Port = 465; //Porta do Servidor SMTP

                $phpmail-> SMTPSecure = 'ssl'; //Certificado / Autenticação SMTP
                $phpmail-> SMTPAuth = true; //Caso necessite ser autenticadp

                $phpmail-> Username = "tipitwo@tipi02.smpsistema.com.br"; //Email SMTP
                $phpmail-> Password = "Senac@tipitwo01"; //Senha SMTP
                $phpmail-> IsHTML(true); //Trabalhar com estrutura HTML
                $phpmail-> setFrom("tipitwo@tipi02.smpsistema.com.br" , $nome); //Email do remetente
                $phpmail-> addAddress("tipitwo@tipi02.smpsistema.com.br" , $assunto); //Email do destinatário

                $phpmail-> Subject = $assunto; //Assunto enviado pelo método POST

                // Estutura do Email
                $phpmail-> msgHTML("Nome: $nome <br>
                                    E-Mail: $email <br>
                                    Telefone: $telefone <br>
                                    Mensagem: $mensagem");

                $phpmail-> AltBody = "Nome: $nome \n
                                    E-Mail: $email \n
                                    Telefone: $telefone \n
                                    Mensagem: $mensagem";

                if($phpmail -> send()){
                    $ok=1;
                    echo "Mensagem enviada com sucesso!";
                    require_once("index.php");
                }else{
                    $ok=2;
                    echo "Não foi possivel enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
                }

             // ********************E-MAIL DE RESPOSTA****************/
            $phpmailResposta = new PHPmailer\PHPMailer\PHPmailer();

            $phpmailResposta->isSMTP(); 
            $phpmailResposta->SMTPDebug = 0;
            $phpmailResposta->Host = "smtp.hostinger.com";
            $phpmailResposta->Port = 465;
            $phpmailResposta->SMTPSecure = 'ssl';
            $phpmailResposta->SMTPAuth = true;
            $phpmailResposta->Username = "tipitwo@tipi02.smpsistema.com.br"; //Email SMTP
            $phpmailResposta->Password = "Senac@tipitwo01"; //Senha SMTP
            $phpmailResposta->IsHTML(true);
            $phpmailResposta->setFrom("tipitwo@tipi02.smpsistema.com.br", "INNOVA CLICK"); //Remetente
            $phpmailResposta->addAddress($email, $nome); //Destinatário
            $phpmailResposta->Subject = "resposta - ". $assunto;

            $phpmailResposta->msgHTML("$nome <br>
                                        Em breve retornaremos seu contato. <br>
                                        Mensagem: $mensagem <br>
                                        Emcaso de dúvidas entre em contato pelo número <br>
                                        (11)9999-6666");
            $phpmailResposta->AltBody="$nome \n
                                        Em breve retornaremos seu contato. \n
                                        Mensagem: $mensagem \n
                                        Emcaso de dúvidas entre em contato pelo número \n
                                        (11)9999-6666";
            $phpmailResposta->send();
            }
        }catch(Exception $e){
            // Caso dê erro ao enviar o email
            require_once("contato.php"); 
        }
    ?>