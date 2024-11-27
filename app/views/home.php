<!-- <h1><?php echo $mensagem ?></h1> -->
<!-- <h2><?php echo $nome ?></h2> -->
<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alessandro Palmeira">

    <!-- Favicon Icon -->
    <link rel="icon" href="<?php BASE_URL ?>assets/img/favicon.svg">

    <title>KiOficina - Seu carro em boa mãos</title>
    <link rel="stylesheet" href="<?php BASE_URL ?>assets/css/reset.css">

    <!-- SLICK -->
    <link rel="stylesheet" href="<?php BASE_URL ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php BASE_URL ?>assets/css/slick-theme.css">

    <!-- LITY -->
    <link rel="stylesheet" href="<?php BASE_URL ?>assets/css/lity.css">

    <!-- bootstrap-css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="<?php BASE_URL ?>assets/css/estilo.css">
</head>

<body>

    <!-- Iniciar seção de cabeçalho -->
    <?php require_once('template/topo.php'); ?>
    <!-- Seção final do cabeçalho -->

    <!-- Iniciar seção do SLIDE -->
    <?php require_once('template/banner.php'); ?>
    <!-- Seção final do SLIDE -->

    <!-- Espaço entre sessão -->
    <?php require_once('template/destaque.php'); ?>

    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Por que nos escolher -->
    <?php require_once('template/escolha.php'); ?>

    <!-- Espaço entre sessão -->
    <?php require_once('template/servico.php'); ?>
    <!-- Espaço entre sessão -->
    <?php require_once('template/video.php'); ?>

    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Número da Ki Oficina -->
    <?php require_once('template/numero.php'); ?>

    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Logos - Marcas -->
    <?php require_once('template/marcas.php'); ?>

    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Depoimentos -->
    <?php require_once('template/depoimentos.php'); ?>
    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Equipe -->
    <?php require_once('template/equipe.php'); ?>
    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Blog -->
    <?php require_once('template/blog.php'); ?>

    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>


    <!-- Rodape -->
    <?php require_once('template/footer.php'); ?>

    <!-- modal -->

    <div class="modal" id="modalLogin" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login - Kioficina</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="http://localhost/kioficina/public/auth/login">
                        <div class="mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" require>
                        </div>
                        <div class="mb-3">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control" require>
                        </div>
                        <label for="tipo_usuario"> Tipo de tipo Usuário:</label>
                        <div class="form-floating">

                            <select class="form-select" name="tipo_usuario" id="tipo_usuario" class="form-control" aria-label="Floating label select example" require>
                                <option selected>Selecione</option>
                                <option value="1">Cliente</option>
                                <option value="2">Funcionário</option>
                            </select>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- SLICK -->
    <script src="assets/js/slick.js"></script>

    <!-- LITY -->
    <script src="assets/js/lity.min.js"></script>

    <!-- templete  -->
    <script src="assets/js/plugins/jquery-3.7.1.min.js"></script>
    <script src="assets/js/plugins/lightgallery.min.js"></script>
    <script src="assets/js/plugins/simplePagination.min.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/SplitText.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- bootstrap-js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="assets/js/oficina.js"></script>

    <?php if (isset($msg) && $tipo_msg == 'erro-tipo_usuario'): ?>
        <script>
            $(document).ready(function() {
                $('#modalLogin').modal('show');
            });
        </script>
    <?php endif; ?>



    ?>

</body>

</html>