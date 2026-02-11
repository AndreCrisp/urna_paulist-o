<?php
// Inclui o arquivo de configuração do banco de dados
// __DIR__ garante o caminho correto independentemente de onde o arquivo é chamado
require_once __DIR__ . '/../config/db.php';

// Define a classe User (Model)
// Responsável por todas as operações do usuário no banco de dados
class User {

    // Armazena a conexão com o banco de dados (PDO)
    private $conn;

    // Nome da tabela usada no banco
    private $table = "users";

    // Método construtor da classe
    // É executado automaticamente quando a classe é instanciada
    public function __construct() {

        // Cria uma instancia da classe Database
        $db = new Database();

        // Obtém a conexão com o banco e armazena a propriedade $conn
        $this->conn = $db->getConnection();
    }

    //================================
    // Buscar usuario por email
    // Usado principalmente no login
    // ===============================
    public function findByEmail ($email) {

        // Query SQL com parametro nomeado para evitar SQL Injection
        $sql = "SELECT * FROM {$this->table} WHERE email = :email LIMIT 1";

        // Prepara a query para execução
        $stmt = $this->conn->prepare($sql);

        // Vincula o valor do email ao parametro :email
        $stmt->bindValue(":email", $email);

        // Executa a query
        $stmt->execute();

        // Retorna os dados do usuario como array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // ===========================
    // Buscar usuario por ID
    // Usado no perfil do jogador
    // ===========================

    public function findById($id){
        
        // Query SQL buscando apenas os campos necessarios do usuário
        $sql = "SELECT
                    id, user, email, password, voto, CPF
                FROM {$this->table}
                WHERE id = :id LIMIT 1";

        // Prepara a query
        $stmt = $this->conn->prepare($sql);

        // Vincula o ID como inteiro
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);

        // Executa a query
        $stmt->execute();

        // Retorna os dados do usuário
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //====================
    // Criar novo usuario
    //====================
    public function create($user, $email, $password, $CPF) {

        // Criptografa a senha antes de salvar no banco
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Query SQL para inserir um novo usuário
        $sql = "INSERT INTO {$this->table}
        (user, email, password, CPF)
        VALUES
        (:user, :email, :password, :CPF)";

    // Prepara a query
    $stmt = $this->conn->prepare($sql);
    
    // Vincula os valores aos parametros
    $stmt->bindValue(":user", $user);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":password", $hash);
    $stmt->bindValue(":CPF",$CPF);

    // Executa a query e retorna true ou false
    return $stmt->execute();
}

}

?>