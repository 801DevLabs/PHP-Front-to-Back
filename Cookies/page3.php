<?php
  $user = ['name' => 'Tom', 'email' => 'tom@gmail.com', 'age' => 28];

  $user = serialize($user);

  setcookie('user', $user, time() + (86400 * 30));

  $user = unserialize($_COOKIE['user']);


  print_r($user);