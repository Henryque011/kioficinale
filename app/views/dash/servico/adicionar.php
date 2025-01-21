<H1>PG ADICIONAR </H1>

<!-- <a href="http://localhost/KiOficinale/public/servicos/adicionar">ADICIONAR</a> -->
<a href="http://localhost/KiOficinale/public/servicos/editar">EDITAR</a>
<a href="http://localhost/KiOficinale/public/servicos/desativar">DESATIVAR</a>
<a href="http://localhost/KiOficinale/public/servicos/listar">LISTAR</a>

<div class="side" style="display: flex; justify-content: space-between;">
    <img src="http://localhost/KiOficinale/public/assets/img/sem-foto-cliente.png" alt="2" style="width: 400px; padding: 10px; margin: 10px;">
    <input type="file" name="foto_galeira" id="foto_ghaleria" style="display: none;" accept="image/*"
        <form style="width: 100%;">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome do Serviço:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <!-- <div id="emailHelp" class="form-text">descrição.</div> -->
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Descrição do Serviço:</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="side " style="display: flex; margin: 20px;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Preço Base:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">descrição.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tempo estimado:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="--:--">
            <!-- <div id="emailHelp" class="form-text">descrição.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Status de Serviço::</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ativo">
            <!-- <div id="emailHelp" class="form-text">descrição.</div> -->
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Especialidade Existente</label>
            <select id="inputState" class="form-control">
                <option selected>-Selecione-</option>
                <option>...</option>
            </select>
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Se não existir a especialidade desejada, informe no campo a baixo:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <!-- <div id="emailHelp" class="form-text">descrição.</div> -->
    </div>

    <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">t</label> 
        </div> -->
    <form>
        
    </form>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <button type="submit" class="btn btn-second " style="background-color: grey;  color: white;">Cancelar</button>
    </form>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function(){
        const visualizarImg = document.getElementsById('preview-img');
        const arquivo = document.getElementById('foto_galeria');

        visualizarImg.addEventListener('click', function(){
            arquivo.click()
        })

        arquivo.addEventListener('change', function(){
            
        })
    })
</script>