<?php
    require_once 'config.php';
    class Conexao {
        private static $instance;
        private static $msg;

        //Método para executar instruções SQL
        public static function executar_sql($sql_code) {
            try {
                //Fazendo a conexão
                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                if($mysqli->connect_errno) {
                    echo "Falha na conexão com o banco de dados.";
                }
                else {
                    //Manda o comando SQL para ser executado, e retorna se deu certo ou não
                    $sql_query = $mysqli->query($sql_code);

                }              
                return $sql_query;
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        public static function testar_banco() {
            $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if(mysqli_connect_errno()) {
                $msg = "Falha de conexão com o banco de dados: " . mysqli_connect_errno();
            }
            else {
                $msg = "Conexão do banco de dados realalizada com sucesso";
            }

            return $msg;
        }
    }
?>