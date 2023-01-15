<?php

  class Db {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "oophp";

    protected function connect(){
      try {

        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;

      } catch ( Exception $e) {
        echo $e->getMessage();
      }

    }
  }

 ?>
