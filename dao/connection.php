<?php

class Connection extends PDO
{
    private static $pdo;
    private $db = 'prep_php'; 
    private $host = 'localhost'; 
    private $user = 'root';
    private $pwd = '';
    private $con;
    private $dsn;

    private function __construct (){
        try
        {
            $this->dsn = 'mysql:host='. $this->host .';dbname='. $this->db;
            $this->con = parent::__construct($this->dsn, $this->user, $this->pwd);
            if($this->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql')
                $this->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $this->con;
        }
        catch(PDOException $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }

    public static function getInstance(): Connection{
        if (!isset(self::$pdo)) {
            self::$pdo = new Connection();
        }
        return self::$pdo;
    }

}

?>