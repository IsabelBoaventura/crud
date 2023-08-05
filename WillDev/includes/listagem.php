<?php

    $mensagem = '';

    //se o status estiver definido, ir para o switch
    if( isset($_GET['status'])){
        switch ($_GET['status']){
            case 'success':
                $mensagem = '<div class="alert alert-success">Ação Executada com sucesso</div>';
                break;
            case 'error':
                $mensagem = '<div class="alert alert-danger">Erro na execução da Ação </div>';
                break;
        }
    }

    $resultados = '';
    foreach( $vagas as $vaga ){
        $resultados.= '<tr>'. 
                        '<td>'.$vaga->id.'</td>'.
                        '<td>'.$vaga->titulo.'</td>'.
                        '<td>'.$vaga->descricao.'</td>'.
                        '<td>'.($vaga->ativo=="S"? "Ativo":"Inativo").'</td>'.
                        '<td>'.date("d/m/Y à\s H:i:s",  strtotime( $vaga->data) ).'</td>'.
                        '<td>
                            <a href="editar.php?id='.$vaga->id.'">
                                <button type="submit" class="btn btn-primary"> Editar</button>
                            </a><a href="excluir.php?id='.$vaga->id.'">
                                <button type="submit" class="btn btn-danger"> Excluir</button>
                            </a>
                        </td>'.
                    '</tr>';

    }

    //Descobre se tem ou nao informações na variavel resultado, tendo as informações imprime as ifnoramções, não havendo , imprime a mensagem de sem ifnormações 
    $resultados = strlen($resultados)? $resultados :'<tr>
        <td colspan="6" class="text-center" >Nenhuma Vaga Encontrada
        </td>
    </tr>';

?>

<main>
    <?=$mensagem?>
    <section>       
        <a href="cadastrar.php">
            <button class="btn btn-success" >Nova Vaga</button>
        </a>
    </section>

    <section>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>           
                
            </thead>
            <tbody>
                <?php echo $resultados; ?> 
               
            </tbody>
        </table>
    </section>
</main>