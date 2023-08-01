<?php 

//phpinfo();

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;

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