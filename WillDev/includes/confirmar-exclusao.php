<main>
    <section>
       
       
    </section>


    <h2 class="mt-3">Excluir Vaga </h2>
    <!-- Trocando o titulo fixo pela variavel  -->
    <form action="" method="post">
        <div class="form-group">
            <p>Você deseja realmente excluir a vaga "<strong><?=$obVaga->id.' - '.$obVaga->titulo?></strong>" ? </p>
        </div>

        
       
        

        <div class="form-group">

            <a href="index.php"><button type="button" class="btn btn-success" >Cancelar</button></a>
            
            <button type="submit" name="excluir" class="btn btn-danger mt-1" >Excluir</button>
        </div>
    </form>
</main>

