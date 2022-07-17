<h1>Listar </h1>
<?php
    $sql = "SELECT * FROM usuarios ";
    $res = $conn_i->query( $sql );

    $qtd = $res->num_rows;

    if( $qtd > 0 ){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<thead>
                <tr>    
                    <th>#</th>   <th>Nome</th>   <th>E-mail</th>   <th>Ações</th>
                </tr>
            </thead>
            <tbody>";

        while( $row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>
                <button class='btn btn-success'  onclick=\"location.href='?page=editar&id=".$row->id."';\"> Editar </button>
                <button class='btn btn-danger'  
                    onclick=\"if( confirm('Tem certeza que deseja EXCLUIR este registro?') ){
                        location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}
                    \"  > Excluir </button>
            </td>";
            print "</tr>";
           
        }
        print "</tbody></table> ";
    }else{
        print "<p class='alert alert-danger'> Não encontramos resultados para a sua pesquisa</p>";
    }
?>