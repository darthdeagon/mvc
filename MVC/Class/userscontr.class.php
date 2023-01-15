<?php

  class UsersContr extends Users{

    public function createUser($firstname, $surname, $password){

      $this->setUsers($firstname, $surname, $password);

    }

  }


 ?>
