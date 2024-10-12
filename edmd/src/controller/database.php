<?php
class database
{
    private $host = "localhost";
    private $user = "root";    
    private $pass = "";
    private $dbname = "edmd";
    private $con = null;
    private $status = false;

    function __construct()
    {
        $this->con = $this->initDatabase();   
    }

    public function getCon(){
        return $this->con;
    }
    public function getStatus(){
        return $this->status;
    }

    private function initDatabase(){
        try {
            $this->con = new PDO("mysql:host=$this->host;dbname=".$this->dbname, $this->user, $this->pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->status = true;
        } catch (PDOException $th) {
            return "";
        }
    }
}

