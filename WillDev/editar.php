<?php 

//phpinfo();

require __DIR__.'/vendor/autoload.php';

//definicao do titulo 
define('TITLE', 'Editar Vaga');

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
if( isset($_POST['Titulo'], $_POST['Descricao'], $_POST['ativo'])){
    // $obVaga = new Vaga;

    $obVaga->titulo = $_POST['Titulo'];
    $obVaga->descricao = $_POST['Descricao'];
    $obVaga->ativo = $_POST['ativo'];

   /**Cadastrar a  vaga 
    * metodo que esta dentro da Class Vaga
    */
   // $obVaga->cadastrar();
   //comentado pois estamos no editar


   echo '<pre>';
print_r($obVaga);
echo '</pre>';
exit;


    header('location: index.php?status=success');
    exit;


}






include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';



?>