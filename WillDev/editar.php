<?php 

//phpinfo();

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;

//VALIDACAO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id']) ){
    header('location: index.php?status=error');
    exit;
}

//busca a Vaga deste ID
$obVaga = Vaga::getVaga($_GET['id']);
echo '<pre>';
print_r($obVaga);
echo '</pre>';
exit;

//VALIDACAO DO post
if( isset($_POST['Titulo'], $_POST['Descricao'], $_POST['ativo'])){
    $obVaga = new Vaga;

    $obVaga->titulo = $_POST['Titulo'];
    $obVaga->descricao = $_POST['Descricao'];
    $obVaga->ativo = $_POST['ativo'];

   /**Cadastrar a  vaga 
    * metodo que esta dentro da Class Vaga
    */
    $obVaga->cadastrar();


    header('location: index.php?status=success');
    exit;


}






include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';



?>