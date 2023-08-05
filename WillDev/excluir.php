<?php 

require __DIR__.'/vendor/autoload.php';

//definicao do titulo 
define('TITLE', 'Excluir  Vaga');

use \App\Entity\Vaga;

//VALIDACAO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id']) ){
    header('location: index.php?status=error');
    exit;
}

//busca a Vaga deste ID
$obVaga = Vaga::getVaga($_GET['id']);

//validar a vaga - verificar se ela existe
if( !$obVaga instanceof Vaga){
    header('location: index.php?status=error');
    exit;
}
//se o id que esta sendo buscado nao existir volta para a tela principal


//VALIDACAO DO post
if( isset($_POST['excluir'])){
    $obVaga->excluir();
    header('location: index.php?status=success');
    exit;


}
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';

?>