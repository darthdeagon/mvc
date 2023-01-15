<?php


  class Users extends Db{

    protected function getUser($name){
      $sql = "SELECT * FROM users WHERE firstname = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name]);

      $result = $stmt->fetchAll();
      return $result;
    }

  protected function setUsers($firstname, $surname, $password){
   $sql = "INSERT INTO users(firstname, surname, password) VALUES(?, ?, ?)";
   $stmt = $this->connect()->prepare($sql);
   $stmt->execute([$firstname, $surname, $password]);

  }

  }
