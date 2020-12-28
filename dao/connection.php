<?php

class Connection extends PDO
{

    private $db = 'prep_php'; // base de données
    private $host = 'localhost'; // adresse de la base
    private $user = 'root'; // nom
    private $pwd = ''; // mot de passe
    private $con; //
    private $dsn;

 public function __construct ()
    {
        try
        {
            $this->dsn = 'mysql:host='. $this->host .';dbname='. $this->db;
            $this->con = parent::__construct($this->dsn, $this->user, $this->pwd);
            // pour mysql on active le cache de requête
            if($this->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql')
                $this->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
            return $this->con;
        }
        catch(PDOException $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }

}

?>