<?php

//acesso ao banco de dados 

class PessoaDAO{


    //Metodo construtor dos SQL  de  Pessoa 

    private $conexao;

    public function __construct(){
        $host = 'localhost';
        $user = 'root';
        $pass = '123456';
        $dbname = 'base_de_dados';
        $port = 3306;

        try{
            //conexao
            $this->conexao = new PDO("mysql:host=$host;dbname=". $dbname, $user , $pass );
            echo '<BR>Conexao com o banco de dados  realizada com Sucesso';

        }catch( PDOException $err ){
            echo "<br>Erro: Conexao com o banco de dados Não realizada. <br> Erro Gerado: ". $err->getMessage();

        }
    }

    public function select(){

        $sql = 'SELECT * FROM pessoa ';
        $stmt = $this->conexao->prepare( $sql );
        $stmt->execute();

        //traz as linhas de registros 

        //para mandar para as outras tabelas 
        //array de objetos 
        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function insert( PessoaModel $model ){

        $sql = 'INSERT INTO pessoa ( Nome, CPF, Data_Nasc  ) VALUES (? ,? ,? )';

        $stmt = $this->conexao->prepare( $sql );
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nasc );

        $stmt->execute();


    }

    public function update( PessoaModel $model ){

    }

    public function delete(){

    }
}

?>