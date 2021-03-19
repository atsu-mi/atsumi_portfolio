<?php

    class Database{
      private $servername = 'localhost';
      private $email = 'root';
      private $password = 'root';
      private $db_name = 'cafe';
      public $conn;
  
      public function __construct(){
            
        $this->conn = new mysqli($this->servername, $this->email, $this->password, $this->db_name);
            
          if($this->conn->connect_error){
                die("Connection Error:" .$this->conn->connect_error);
          }

           return $this->conn;
      }
  
    }   


?>