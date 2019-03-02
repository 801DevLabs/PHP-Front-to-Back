<?php
  // VARIABLE THAT HOLDS MULTIPLE VALUES
  /*
    - INDEXED
    - ASSOCIATIVE
    - MULTIDIMENSIONAL
  */

  // INDEXED
  $people = array('Tom', 'Ron', 'Leslie');
  $ids = array(23, 55, 12);
  $cars = ['Honda', 'Toyota', 'Ford'];
  $cars[3] = 'Chevy';
  $cars[] = 'BMW';

  //echo count($cars);
  //print_r($cars);
  //var_dump($cars);

  //echo $people[1];
  //echo $ids[2];
  //echo $cars[4];

  // ASSOCIATIVE ARRAYS
  $people = array('Tom' => 28, 'Ron' => 54, 'Leslie' => 36);

  $ids = [28 => 'Tom', 54 => 'Ron', 36 => 'Leslie'];

  //echo $people['Tom'];
  //echo $ids[36];
  $people['Ann'] = 34;
  //echo $people['Ann'];
  //print_r($people);
  //var_dump($people);

  // MULTIDIMENSIONAL
  $cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Form', 23, 12),
  );

  echo $cars[1][2];