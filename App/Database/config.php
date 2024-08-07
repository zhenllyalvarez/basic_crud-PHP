<?php
    class config {
        private $host;
        private $username;
        private $password;
        private $dbname;
        private $connection;
        private $status;

        function __construct()
        {
            $this->host = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "basic_crud";
            $this->status = false;
            $this->connection = $this->initialize();
        }

        public function getStatus() 
        {
            return $this->status;
        }

        public function getConnection() {
            return $this->connection;
        }

        public function closeConnection() {
            $this->connection = null;
        }

        public function initialize() {
            try {
                $dbCOnnection = new PDO("mysql:host=$this->host;dbname=" . $this->dbname, $this->username, $this->password);
                $dbCOnnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->status = true;
                
                return $dbCOnnection;
            } catch (PDOException $th) {
                return $th;
            }
        }
    }

    // $config = new config();

    // if($config->getStatus()) {
    //     echo "Connected";
    // } else {
    //     echo "error";
    // }
?>