<?php 
// Defina a classe Databesa , responasevel por gerenciar a conexão com o banco de daods
class Database {

    // Endereço de servidor do banco de dados (localhost = servidor local)
    private $host = "localhost";

    //Nome do bando de dados que será utilizado 
    private $db_name = "urnapaulistao";

    // Usuario do banco de dados (padrao de XAMPP é "root")
    private $username = "root";

    // Senha do banco de dados (vazia por padrao no XAMPP)
    private $password = "";

    //Propriedade estatica que armazenara a conexao PDO
    // static significa que sera compartilhada por todas as instancias da classe
    private static $connection;

    //Metodo publico para obter a conexao com o banco
    public function getConnection () {

        //Verificar se ainda NÃO existe uma conexao criada
        if (!self::$connection) {

            // Tenta criar a conexao com o banco
            try {

                //Cria um novo obleto PDO para conexao com o MySQL
                self::$connection = new PDO(

                    // String de conexao (DSN) com host e nome do banco
                    "mysql:host={$this->host};dbname={$this->db_name}",

                    // Usuario do banco de dados
                    $this->username,
                    
                    // Senha do banco de dados
                    $this->password,

                    // Array de configurações do PDO
                    [
                        //Define que erros serao lancados como exeções
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

                        // Define que os dados retornados virao como array associativo
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

                        // Define o charset como UTF-8 com suporte a emolis
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"

                    ]

                );
                
            // Caso ocorra algum erro na conexao 
            } catch (PDOException $e) {

                // Encerra o script e exibe a mensagem de erro
                die("Erro ao conecter ao banco:" . $e->detMessage());
            }
        }

        //Retorna a conexao ja criada (ou recem-criada)
        return self::$connection;
    }
}

?>