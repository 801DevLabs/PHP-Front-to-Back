<?php
  // LOOPS - EXECUTE CODE SET NUMBER OF TIMES

  /*
    - FOR
    - WHILE
    - DO..WHILE
    - FOREACH
  */

  // FOR LOOP
  // @params - init, condition, inc

  // for($i = 0; $i <= 10; $i++){
  //   echo 'Number ' . $i;
  //   echo '<br>';
  // }

  // WHILE LOOP
  // @params - condition

  // $i = 0;

  // while($i < 10){
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }

  // DO..WHILE
  // @params - condition

  // $i = 0;
  // do{
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }

  // while($i<10);


  // FOREACH LOOP - FOR ARRAYS
  // $people = array('Tom', 'Ron', 'Leslie');

  // foreach($people as $person) {
  //   echo $person;
  //   echo '<br>';
  // }

  $people = array('Tom' => 'tom@gmail.com', 'Ron' => 'ron@gmail.com', 'Leslie' => 'leslie@gmail.com');

  foreach($people as $person => $email) {
    echo $person . ': ' . $email;
    echo '<br>';
  }