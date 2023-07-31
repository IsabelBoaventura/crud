<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        label, input{
            display: block;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Pessoa </legend>
        <form action="/pessoa/form/save" method="POST">
            <label for="Nome">Nome</label>
            <input type="text" name="Nome" id="Nome">

            <label for="CPF">CPF: </label>
            <input type="text" name="CPF" id="CPF">

            <label for="Data_Nasc">Data de Nascimento: </label>
            <input type="date" name="Data_Nasc" id="Data_Nasc">

            <button type="submit"> Salvar</button>

        </form>
    </fieldset>
    
</body>
</html>