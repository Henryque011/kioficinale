<H1>PG ADICIONAR </H1>

<!-- <a href="http://localhost/KiOficinale/public/servicos/adicionar">ADICIONAR</a> -->
<a href="http://localhost/KiOficinale/public/servicos/editar">EDITAR</a>
<a href="http://localhost/KiOficinale/public/servicos/desativar">DESATIVAR</a>
<a href="http://localhost/KiOficinale/public/servicos/listar">LISTAR</a>

<div class="side" style="display: flex; justify-content: space-between;">
    <img src="http://localhost/KiOficinale/public/assets/img/sem-foto-cliente.png" alt="2" style="width: 400px; padding: 10px; margin: 10px;">

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
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="submit" class="btn btn-second " style="background-color: grey;  color: white;">Cancelar</button>
    </form>
</div>