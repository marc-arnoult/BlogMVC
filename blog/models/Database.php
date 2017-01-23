<?php

class Database {
    private $host;
    private $dbName;
    private $username;
    private $password;
    private $pdo;

    public function __construct($host = 'localhost', $dbName, $username, $password)
    {
        $this->host     = $host;
        $this->dbName   = $dbName;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPdo () : PDO
    {
        if($this->pdo === null) {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName;charset=utf8", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }
}
