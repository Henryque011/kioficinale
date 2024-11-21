<section class="marcas">
    <div class="site">
        <h4>Marcas Confiável</h4>

        <div>
            <?php if (isset($marca ) && !empty($marcas)): ?>
                <section class="marcas">
                    <div class="site">
                        <h4>Marcas Confiáveis</h4>
                        <?php foreach ($marcas as $marca): ?>
                            <div>
                                <img src="<?php
                                            $caminhoArquivo = $_SERVER['DOCUMENT_ROOT'] . "/KiOficinale/public/uploads/" . $marca['foto_galeria'];
                                            if ($marca['foto_galeria'] != "") {
                                                if (file_exists($caminhoArquivo)) {
                                                    echo "http://localhost/KiOficinale/public/uploads/" . htmlspecialchars($marca['foto_galeria'], ENT_QUOTES, 'UTF-8');
                                                } else {
                                                    echo "http://localhost/KiOficinale/public/uploads/marcas/sem-foto-servico.svg";
                                                }
                                            } else {
                                                echo "http://localhost/KiOficinale/public/uploads/marcas/sem-foto-servico.svg";
                                            }
                                            ?>" alt="Imagem da Marca">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php else: ?>
                <p>Não há marcas cadastradas.</p>
            <?php endif; ?>

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