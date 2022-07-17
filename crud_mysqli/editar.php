<h1> Editar Usuário</h1>
<?php 
    $sql = 'SELECT  * FROM  usuarios WHERE  id="'.$_REQUEST["id"].'" ';
    $res = $conn_i->query($sql );
    $row = $res->fetch_object();


?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value ="editar" >
    <input type="hidden" name ="id" value="<?php echo $row->id; ?>">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $row->nome; ?>" />
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" value="<?php echo $row->email; ?>" />
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="text" class="form-control" name="senha" id="senha" value="<?php echo $row->senha; ?>" />
    </div>
    <div class="mb-3">
        <label for="dt_nasc">Data de Nascimento</label>
        <input type="date" class="form-control" name="dt_nasc" id="dt_nasc" />
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>