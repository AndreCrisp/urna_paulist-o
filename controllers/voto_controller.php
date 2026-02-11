<?php 

session_start();

require_once '../model/User.php';

class VotoController {

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

    public function votar () {

           // Apenas POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
            header("Location: ../views/login.php?error=invalid_method");
            exit;
        }

        // Dados do voto
        $voto = $_POST['time_selecionado'];
        // ID do usuário logado
        $id = $_SESSION['user']['id'];
        // // recebe o time do banco de dados
        // $time = $_SESSION['user']['voto'];
        
       
        // Validação de seleção vazia
        if($voto == ""){
           echo "Escolha um time valido";
           exit;
        }
        
        // Prepara a query com placeholders (:time, :id) por segurança
        $sql = "UPDATE `users` SET `voto` = :voto WHERE `id` = :id AND `voto` IS NULL";
        
        // Prepara a query
        $stmt = $this->conn->prepare($sql);

        // Vincula os valores aos parametros
        $stmt->bindValue(':voto', $voto);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);   

        // Executa a atualização no banco
        return $stmt->execute();

    
}
}

$voto = new VotoController();

$voto->votar();
?>