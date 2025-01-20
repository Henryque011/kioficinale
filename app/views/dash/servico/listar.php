<h1>PG LISTAR</h1>
<p>chegue aqui</p>

<a href="http://localhost/KiOficinale/public/servicos/adicionar">ADICIONAR</a>
<a href="http://localhost/KiOficinale/public/servicos/editar">EDITAR</a>
<a href="http://localhost/KiOficinale/public/servicos/desativar">DESATIVAR</a>
<!-- <a href="http://localhost/KiOficinale/public/servicos/listar">LISTAR</a> -->
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Tempo</th>
            <th scope="col">Especialidade</th>
            <th scope="col">Editar</th>
            <th scope="col">Desativar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listarServico as $linha): ?>
            <tr>
                <!-- <img src="http://localhost/KiOficinale/public/uploads/galeria/test.jpg"> -->
                <th scope="row"><?php echo $linha['id_servico'] ?></th>
                <td> <img src="<?php echo BASE_URL . 'uploads/' . $linha['foto_galeria']; ?>"
                        alt="<?php echo $linha['nome_servico']; ?>"
                        style="width: 100px; height: auto;"></td>
                <td><?php echo $linha['nome_servico'] ?></td>
                <td><?php echo $linha['descricao_servico'] ?></td>
                <td><?php echo $linha['preco_base_servico'] ?></td>
                <td><?php echo $linha['tempo_estimado_servico'] ?></td>
                <td><?php echo $linha['nome_especialidade'] ?></td>
                <td><i class="bi bi-pen"></i></td>
                <td><i class="bi bi-trash"></i></td>
                <!-- <?php var_dump(BASE_URL . 'uploads/' . $linha['foto_galeria']); ?> -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>