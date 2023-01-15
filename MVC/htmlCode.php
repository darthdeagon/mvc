<?php

  include 'include/autoloader.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $testname = new UsersView();
    $testname->showUser("Salsa");

    $test = new UsersContr();
    $test->createUser("Sara", "Mojic", 123);
     ?>
  </body>
</html>
