<section class="marcas">
    <div class="site">
        <h4>Marcas Confiável</h4>

        <div>

            <section class="marcas">
                <div class="site">
                    <h4>Marcas Confiáveis</h4>

                    <?php if (!empty($marcas)): ?>
                        <?php foreach ($marcas as $marca): ?>
                            <div>
                                <img src="<?php
                                            $caminhoArquivo = $_SERVER['DOCUMENT_ROOT'] . "/KiOficina/public/uploads/" . $marca['logo_marca'];
                                            if (!empty($marca['logo_marca'])) {
                                                if (file_exists($caminhoArquivo)) {
                                                    echo "http://localhost/KiOficinale/public/uploads/" . htmlspecialchars($marca['logo_marca'], ENT_QUOTES, 'UTF-8');
                                                } else {
                                                    echo "http://localhost/KiOficinale/public/uploads/marca/sem-foto-servico.svg";
                                                }
                                            } else {
                                                echo "http://localhost/KiOficinale/public/uploads/marca/sem-foto-servico.svg";
                                            }
                                            ?>" alt="Imagem da Marca">
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Nenhuma marca disponível no momento.</p>
                    <?php endif; ?>

                </div>
            </section>

            // <!-- <img src="assets/img/trusted-client_2.png" alt="">
                // <img src="assets/img/trusted-client_3.png" alt="">
                // <img src="assets/img/trusted-client_4.png" alt="">
                // <img src="assets/img/trusted-client_5.png" alt="">
                // <img src="assets/img/trusted-client_6.png" alt="">
                // <img src="assets/img/trusted-client_7.png" alt="">
                // <img src="assets/img/trusted-client_1.png" alt="">
                // <img src="assets/img/trusted-client_2.png" alt="">
                // <img src="assets/img/trusted-client_3.png" alt="">
                // <img src="assets/img/trusted-client_4.png" alt=""> 
                // <img src="assets/img/trusted-client_5.png" alt="">
                // <img src="assets/img/trusted-client_6.png" alt="">
                // <img src="assets/img/trusted-client_7.png" alt="">
                // <img src="assets/img/trusted-client_1.png" alt="">
                // <img src="assets/img/trusted-client_2.png" alt="">
                // <img src="assets/img/trusted-client_3.png" alt="">
                // <img src="assets/img/trusted-client_4.png" alt="">
                // <img src="assets/img/trusted-client_5.png" alt="">
                // <img src="assets/img/trusted-client_6.png" alt="">
                // <img src="assets/img/trusted-client_7.png" alt="">
                // <img src="assets/img/trusted-client_1.png" alt="">
                // <img src="assets/img/trusted-client_2.png" alt="">
                // <img src="assets/img/trusted-client_3.png" alt="">
                // <img src="assets/img/trusted-client_4.png" alt="">
                // <img src="assets/img/trusted-client_5.png" alt="">
                // <img src="assets/img/trusted-client_6.png" alt="">
                // <img src="assets/img/trusted-client_7.png" alt="">  -->
        </div>

    </div>
</section>