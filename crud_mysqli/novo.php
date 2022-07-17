<h1>Novo Usuario</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value ="cadastrar" >
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" />
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" />
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="senha" id="senha" />
    </div>
    <div class="mb-3">
        <label for="dt_nasc">Data de Nascimento</label>
        <input type="date" class="form-control" name="dt_nasc" id="dt_nasc" />
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>