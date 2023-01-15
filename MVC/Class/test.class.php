<?php



  class Test extends db {
//GET ALL DATA 
    public function getUsers(){
      $sql = "SELECT * FROM users";
      $stmt = $this->connect()->query($sql);
      while ($rov = $stmt->fetch()){
        $name = $rov['name'];
        return $name;
      }
    }
// GET DATA FROM DB
    public function getUsersStmt($first_name, $surname){
   $sql = "SELECT * FROM users WHERE first_name = ? AND surname = ?";
   $stmt = $this->connect()->prepare($sql);
   $stmt->execute([$first_name, $surname]);
   $names = $stmt->fetchAll();

   foreach ($names as $name){
     echo $name['password'];
   }


  }
// SET DATA IN DB
  public function setUsersStmt($first_name, $surname, $password){
 $sql = "INSERT INTO users(first_name, surname, password) VALUES(?, ?, ?)";
 $stmt = $this->connect()->prepare($sql);
 $stmt->execute([$first_name, $surname, $password]);



}


}
