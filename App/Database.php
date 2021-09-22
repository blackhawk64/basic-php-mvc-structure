<?php
namespace App;
use PDO;

class Database{
    private $host;
    private $charset;
    private $user;
    private $password;

    private $database;

    public function __construct(){
        $this->host = constant('HOST');
        $this->charset = constant('CHARSET');
        $this->db_Backoffice = constant('DB');
    }

    public function ConnectDatabase(){
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');

        try
        {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        }
        catch(PDOException $e)
        {
            print_r('Error Connection Database: ' . $e->getMessage());
        }
    }
}

?>