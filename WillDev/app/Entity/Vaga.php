<?php

/** 
 * nome no espaço onde esta pasta esta, lembrando que o 'App' é o definido no composer.json
 * */
namespace App\Entity;
/**Adicionar a dependencia ao database  */
use App\Db\Database;

use \PDO;




class Vaga{
    /**Definindo os atributos */
    /**Identificado unico da vaga
     * @var integer 
     */
    public $id;

    /**Titulo da vaga
     * @var string 
     */
    public $titulo;
    /**Descricao da vaga (pode conter html)
     * @var string 
     */
    public $descricao;
    /**Status em que a vaga se encontra
     * Define se a data esta ativa
     * @var string ( s/n)
     */
    public $ativo;
    /**Data da publicacao da vaga
     * @var string 
     */
    public $data;


    /**Metodo para cadastar a nova vaga  no banco
     * @return boolean
     */
    public function cadastrar(){

        //DEFINIR A DATA 
        $this->data = date('Y-m-d H:i:s');

        //Inserir a vaga no banco 
        $obDatabase =  new Database('vagas_wdev');

        /**Mandar as informações para a funcao de inserir , será passada como uma array de id e valor */
        $this->id = $obDatabase->insert([
            'titulo'    => $this->titulo,
            'descricao' => $this->descricao,
            'ativo'     => $this->ativo,
            'data'      => $this->data
        ]);//atribuir o ID da vaga na instancia

        //retornar sucesso
        return true ;

    }



    /**Metodo responsavel por buscar as informações de vagas do banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit 
     * @return array
     */
    public static function getVagas( $where = null, $order = null, $limit = null){

        return  ( new Database('vagas_wdev'))->select( $where, $order, $limit )->fetchAll(PDO::FETCH_CLASS, self::class );
    }

    /**Metodo responsável pela busca de uma unica vaga */
    public static function getVaga( $id){
        return  ( new Database('vagas_wdev'))->select( 'id = '. $id)->fetchObject(self::class);

        //fetchObject -> traz apenas uma posição do banco de dados;

    }


    /**Metodo responsável por atualizar a vaga no banco 
     * @return boolean 
     */
    public function  atualizar(){
        return  ( new Database('vagas_wdev'))->update('id = '. $this->id, [
            'titulo'    => $this->titulo,
            'descricao' => $this->descricao,
            'ativo'     => $this->ativo
        ] );

    }

    /**Metodo responsavel pela exclusao da vaga do banco 
     * @return boolean 
     * encaminha para o metodo delete dentro do database
     */
    public function excluir(){
        return  ( new Database('vagas_wdev'))->delete( 'id = '. $this->id);

    }
}

?>