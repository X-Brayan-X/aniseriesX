<?php
    class Database {

        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;

        function __construct(){
            $this->host =constant('HOST');
            $this->db =constant('DB');
            $this->user =constant('USER');
            $this->password =constant('PASSWORD');
            $this->chatset =constant('CHARSET');
        }

        function connect(){
            try{
                $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
                $option = [
                    PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,   
                    PDO::ATTR_EMULATE_PREPARES  => false,
                ];
 
                $pdo = new PDO($connection, $this->user, $this->password, $options);
        
                return $pdo;
            }catch(PDOException $e){
                print_r('Error connection: ' . $e->getMessage());
            }
        }


    }

?>