<main>
    <section>
       
        <a href="index.php">
            <button class="btn btn-success" >Voltar</button>
        </a>
    </section>
    <h2 class="mt-3"><?=TITLE?></h2>
    <!-- Trocando o titulo fixo pela variavel  -->
    <form action="" method="post">
        <div class="form-group">
            <label for="Titulo">Titulo</label>
            <input type="text" name="Titulo" id="Titulo" class="form-control" value="<?=$obVaga->titulo?>">
        </div>

        <div class="form-group">
            <label for="Descricao">Descrição</label>
            <textarea  name="Descricao" id="Descricao" class="form-control" rows="5"><?=$obVaga->descricao?></textarea>
        </div>

       
        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo"  value="S" checked> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="N" <?=(($obVaga->ativo=='N')?'checked': '')?> > Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success mt-1" >Salvar</button>
        </div>
    </form>
</main>

