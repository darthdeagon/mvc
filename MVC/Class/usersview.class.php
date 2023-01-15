<?php

class UsersView extends Users{

  public function showUser($name){
    $result = $this->getUser($name);
    echo "Full name: " .$result[0]['firstname'] ." ". $result[0]['surname'] . "<br>";
    echo "password: " . $result[0]["password"];
  }

}


 ?>
