<?php 

namespace App\Db;

/**Dependencia desta classe  */
use \PDO;
use \PDOException;

class Database{
    //Definir as credenciais do banco de dados

    /**Host de conexao com o banco de dados  @var string */
    const HOST='localhost';

    /**Nome do banco de dados @var string  */
    const NAME='isabel';

    /**Usuario do banco de dados @var string  */
    const USER = 'root';

    /**Senha de acesso ao banco de dados  */
    const PASS= '123456';


    /**Nome da tabela que será manipulada no banco de dados  */
    private $table ;

    /**Instancia de PDO - Classe de conexao com o banco de dados  */
    private $connection;


    /**Define a tabela, a instancia e a conexao */
    public function __construct( $table = null ){
        $this->table = $table; 
        /**Metodo de conexao com o banco de dados  */
        $this->setConnection();

    }

    /**Metodo que fara a conexao em si ao banco de dados  */
    private function setConnection(){
        /**Try catch - para tratar os erros que o sistema pode gerar */
        try{
            /**Conectando */
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            /**Tratar os erros de query */
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            /**Recebendo o atributo de erro no node, e o valor  */

        }catch( PDOException $e){
            /**Usar apenas em desenvolvimento  */
            die('Error: '.$e->getMessage());
            /**Em produção deve ser enviada uma mensagem amigável para o usuário, e este erro deve ser salvo no log,  para que o desenvolvimento saiba o que esta acontecendo */

        }
    }


    /**Metodo responsavel por executar as querys no banco de dados, deve ser apresentado antes do insert, já que o insert irá encaminhar para ele
     * @param string $query
     * @param array $params 
     * @return PDOStatement
     */
    public function execute( $query, $params =[] ){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute( $params);
            return $statement ;           

        }catch( PDOException $e){           
            die('Error: '.$e->getMessage());
        }

    }


    /**Metodo responsavelpor inserir os dados no banco
     * @param array  $values [  field => value ]
     * @return integer ID inserido na tabela 
       */
    public function insert( $values  ){
        //Dados da  query
        $fields = array_keys( $values);
        /** variavel campo, recebe todas as chaves da array */
        $binds = array_pad( [], count($fields), '?');
        /** cria uma variavel que recebe uma array com o mesmo numero de campo da $fields e todas com o valor '?'  */

        //monta a query 
        $query = 'INSERT INTO '.$this->table.' ('. implode(',', $fields).') VALUES ('. implode(',', $binds ).')';
        /**Com a funcao implode (contraria ao explode), adiciona os campos que receberam os valores  */

        //executa o insert 
        $this->execute( $query, array_values( $values ));

        return $this->connection->lastInsertId();
        /**Ultimo id inserido na tabela  */
    }



    /**metodo responsavel por  buscar informacoes de uma tabela no banco de dados 
     * @param string $where
     * @param string $order 
     * @param string $limit 
     * return PDOStatement 
     */
    public function select( $where = null, $order = null, $limit = null, $fields = '*'){
        //dados da query
        $where  = strlen($where) ? 'WHERE '.$where : '';
        $order  = strlen($order) ? 'ORDER BY  '.$order  : '';
        $limit  = strlen($limit) ? 'LIMIT  '.$limit : '';

        //select que ira ao banco
        $query = 'SELECT '.$fields .' FROM '.$this->table.' '. $where .' '. $order.' '. $limit ;


        //executa
        return $this->execute($query);

    }
   
}


?>