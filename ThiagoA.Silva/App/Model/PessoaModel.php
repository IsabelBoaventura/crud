<?php

//Model é quem faz a uniao do sistema com o banco de dados 

class PessoaModel{

    // as informações que vao chegar aqui 

    public $id, $nome, $cpf, $data_nasc;

    //armazena as linhas que vem do banco de dados
    public $rows ;

    public function save(){
        //chama o arquivo da camada DAO  e passa estes arquivos para ele 
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();

        $dao->insert( $this );
    }


    //Funcao para pegar todas as linhas 
    public function getAllRows(){

        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();

        $this->rows = $dao->select();



    }

}


?>