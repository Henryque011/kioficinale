<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Henryque Nonato">

    <!-- Favicon Icon -->
    <link rel="icon" href="<?php BASE_URL ?>assets/img/favicon.svg">
    <!-- ? = se : senao -->
    <title>
        <?php echo isset($titulo) ?$titulo : 'Area - Ki Oficina' ?>
    </title>
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
