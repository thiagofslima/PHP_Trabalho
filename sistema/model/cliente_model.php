<?php
    include_once '../conexao/conexao.php';

    class Cliente {
        
        //Mapeamento das propriedades da classe x tabela do banco de dados
        private $id;
        private $nome;
        private $sobrenome;
        private $email;
        private $idade;
        private $sexo;

        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getSobrenome() {
            return $this->sobrenome;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setSobrenome($sobrenome) {
            $this->sobrenome = $sobrenome;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        public function create() {

            $sql_code = "INSERT INTO Cliente (Nome, Sobrenome, Email, Idade, Sexo)
                VALUES ('" . self::getNome() . "', 
                        '" . self::getSobrenome() . "', 
                        '".self::getEmail()."', 
                        ".self::getIdade().", 
                        '".self::getSexo()."')";
            
            $sql_query = Conexao::executar_sql($sql_code);
            return $sql_query;
        }

        public function read($ordem) {
            $sql_code = "SELECT * FROM Cliente ORDER BY $ordem";

            //Vai returnar um vetor com os campos
            $sql_query = Conexao::executar_sql($sql_code);

            return $sql_query;
        }

        public function readLike($argumento, $coluna) {
            $sql_code = "SELECT * FROM Cliente WHERE $coluna LIKE '%$argumento%'";
            $sql_query = Conexao::executar_sql($sql_code);

            return $sql_query;
        }

        public function delete($id) {
            // $sql_code = "DELETE FROM Cliente WHERE Id = $id";
            // $sql_query = Conexao::executar_sql($sql_code);

            // return $sql_query;

            echo "grdfsgbfds";
        }
    }
?>