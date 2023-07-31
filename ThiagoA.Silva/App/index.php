<?php

include 'Controller/PessoaController.php';

echo ' Olá Mundo ';

//Descobrir a rota de acesso

$url = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH);

echo ' <br> caminho:: '. $url .'<BR>' ;

//Criando o Switch para informar para qual rota o sistema quer ir

//$init_my = '/crud/ThiagoA.Silva/App/';

switch( $url ){
    case '/' :
        echo "<h1>Página Inicial</h1> ";
    break;
    case '/pessoa' :
        echo "<h1>Listagem de Pessoas </h1> ";
        PessoaController::index();
    break;

    case '/pessoa/form' :
        echo "<h1>Formulário para salvar e editar Pessoas </h1> ";
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        //para salvar o cadastro das pessoas 
        PessoaController::save();

    break;

    default: 
        echo '<h1>Error pagina 404</h1>';
    break;


}


?>