<?php
  // CONDITIONALS

  /*
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
  */

  // $num = 6;

  // if($num == 5){
  //   echo '5 passed';
  // } elseif($num == 6){
  //   echo '6 passed';
  // } else {
  //   echo 'Did not pass';
  // }

  // NESTING IF
  $num = 2;
  // if($num > 4){
  //   if($num < 10){
  //     echo "$num passed";
  //   }
  // }

  /*
    LOGICAL OPERATORS

    AND - &&
    OR - ||
    XOR
  */

  // if($num > 4 XOR $num < 10) {
  //   echo "$num passed";
  // }

  // SWITCH
  $favColor = 'blue';

  switch($favColor){
    case 'red':
      echo 'Favorite color is red';
      break;
    case 'blue':
      echo 'Favorite color is blue';
      break;
    case 'green':
      echo 'Favorite color is green';
      break;
    default:
      echo 'Your favorite color is something else';
  }