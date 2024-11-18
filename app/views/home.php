<!-- <h1><?php echo $mensagem ?></h1> -->
<!-- <h2><?php echo $nome?></h2> -->
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

    <link rel="stylesheet" href="<?php BASE_URL ?>assets/css/estilo.css">
</head>

<body>

    <!-- Iniciar seção de cabeçalho -->
    <?php require_once('template/topo.php'); ?>
    <!-- Seção final do cabeçalho -->

    <!-- Iniciar seção do SLIDE -->
    <?php require_once ('template/banner.php'); ?>
    <!-- Seção final do SLIDE -->

    <!-- Espaço entre sessão -->
    <?php require_once ('template/destaque.php'); ?>

    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Por que nos escolher -->
    <?php require_once ('template/escolha.php'); ?>

    <!-- Espaço entre sessão -->
    <?php require_once ('template/servico.php'); ?>
    <!-- Espaço entre sessão -->
    <?php require_once ('template/video.php'); ?>

    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Número da Ki Oficina -->
    <?php require_once ('template/numero.php'); ?>

    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Logos - Marcas -->
    <?php require_once ('template/marcas.php'); ?>

    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Depoimentos -->
    <?php require_once ('template/depoimentos.php'); ?>
    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Equipe -->
    <?php require_once ('template/equipe.php'); ?>
    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>

    <!-- Blog -->
    <?php require_once ('template/blog.php'); ?>

    <!-- Espaço entre sessão -->
    <div class="of-height-125 of-height-80"></div>


    <!-- Rodape -->
    <?php require_once ('template/footer.php'); ?>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- SLICK -->
    <script src="assets/js/slick.js"></script>

    <!-- LITY -->
    <script src="assets/js/lity.min.js"></script>

    <script src="assets/js/oficina.js"></script>

</body>

</html>