<br>Página onde lista as pessoas 


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Nascimento</th>
        </tr>
        <?php foreach( $model->rows as $item ):  ?>
        

        <tr>
            <td><?= $item->Id ?></td>
            <td><?= $item->Nome ?></td>
            <td><?= $item->CPF ?></td>
            <td><?= $item->Data_Nasc ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>