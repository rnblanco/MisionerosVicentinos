<?php
    class DB{
        private $host;
        private $dbName;
        private $user;
        private $pass;

        public function __construct(){
            $this->host = 'us-cdbr-east-05.cleardb.net';
            $this->dbName = 'heroku_ea79ed0bd13dd15';
            $this->user = 'bce8c978cf04cc';
            $this->pass = "c9e34ff0";
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
