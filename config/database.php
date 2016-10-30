<?php 
class Database{ 
 
    // specify your own database credentials 
    private $host = "localhost"; 
    private $db_name = "crudangular"; 
    private $username = "root"; 
    private $password = ""; 
    public $conn; 
 
    // get the database connection 
    public function getConnection(){ $this->conn = null;
         
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }


    // get the database connection 
    public function getConexion()
    { 
        $this->conn = null;
         
        try
        {
            $this->conn = new mysqli($this->host, $this->username,$this->password,$this->db_name);
        
        }catch(mysqli_sql_exception $exception)
        {
            echo "Connection error: " . $exception->errorMessage();
        }
         
        return $this->conn;
    }
}
?>