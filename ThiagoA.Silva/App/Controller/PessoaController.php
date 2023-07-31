<?php

class PessoaController
{
    public static function index(){

        include 'Model/PessoaModel.php';
        $model = new PessoaModel();
        $model->getAllRows();



        //devolve a lista das pessoas 
        //tem de buscar de onde vem esta lista de pessoas 
        include 'View/modulos/Pessoa/ListPessoa.php';


        //agora o controller terá junto a Model  e a View 
        //significa que a viewm,  e o que venho da model 
        
    }


    public static function form(){
        //devolve o formulario das pessoas 

        //tem de trazer a pagina onde tera o formulario 

        include 'View/modulos/Pessoa/FormPessoa.php';
    }

    public static function save(){

        ECHO ' <BR>';
        var_dump( $_POST);

        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->nome = $_POST['Nome'];
        $model->cpf = $_POST['CPF'];
        $model->data_nasc = $_POST['Data_Nasc'];

        $model->save();

        //redirecionando a localizacao 
        header("Location: /pessoa");


    }
}
