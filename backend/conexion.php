<?php
    class DB{
        private $host;
        private $dbName;
        private $user;
        private $pass;

        public function __construct(){
            $this->host = 'localhost';
            $this->dbName = 'paulinos';
            $this->user = 'root';
            $this->pass = "";

            /*
            $this->host     = 'antoniocm2735974.domaincommysql.com';
            $this->db       = 'paulinos';
            $this->usuario     = 'antoniocm2735974';
            $this->contraseña = "V1c3nt1n0501";
            */
        }

        protected function conectar(){
            try{
                return new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->pass);
            }
            catch(PDOException $error){
                echo "No se pudo conectar a la base de datos: " . $error->getMessage();
                die();
            }
        }
    }
?>
