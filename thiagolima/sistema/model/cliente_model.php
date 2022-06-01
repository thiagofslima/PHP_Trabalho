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
        public function readId($id) {
            try {
                $sql_code = "SELECT * FROM Cliente WHERE Id LIKE $id";
                $sql_query = Conexao::executar_sql($sql_code);
                
                $dados = $sql_query->fetch_assoc();
                self::setId($dados['Id']);
                self::setNome($dados['Nome']);
                self::setSobrenome($dados['Sobrenome']);
                self::setEmail($dados['Email']);
                self::setIdade($dados['Idade']);
                self::setSexo($dados['Sexo']);
            } catch (Exception $e) {
                echo "Ocorreu um erro ao localizar cliente.";
            }

            return $sql_query;
        }

        public function update() {
            try {
                $sql_code = "UPDATE Cliente SET
                            Nome = '" . self::getNome() . "',
                            Sobrenome = '" . self::getSobrenome() . "',
                            Email = '" . self::getEmail() . "',
                            Idade = ". self::getIdade() .",
                            Sexo = '" . self::getSexo() ."'
                            WHERE Id = " . self::getId();

                echo $sql_code;
                $sql_query = Conexao::executar_sql($sql_code);
                return $sql_query;
            }
            catch (Exception $e) {
                echo "Erro! Cliente não foi alterado.";
            }
        }

        public function delete() {
            $sql_code = "DELETE FROM Cliente WHERE Id = " . self::getId();
            $sql_query = Conexao::executar_sql($sql_code);

            return $sql_query;
        }
    }
?>