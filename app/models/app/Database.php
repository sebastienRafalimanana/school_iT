<?php
class Database{
    private $servername = "localhost";
    private $username="root";
    private $password = "";
    private $dbname = "db_bakari";
    private $conn;

    public function getConnection(){
        try {
           if ($this->conn == null) {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username, $this->password);
            $this->conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           }
          } catch (PDOException $ex) { 
            
            return $ex->getMessage();
          }
        return $this->conn;
    }
    /**
     * pour le requete insert,update,delete
     */
    public function execute($sql){
        $res = $this->getConnection()
                    ->prepare($sql);
        $res -> execute();
    }
    /**
     * pour le requete select
     */
    public function execute_query($sql){
        $res = $this->getConnection()
                    ->prepare($sql);
        $res -> execute();
        $res = $res->fetchall(PDO::FETCH_OBJ);
        /* echo json_encode($res); */
        return $res;
    }
   
}

?>