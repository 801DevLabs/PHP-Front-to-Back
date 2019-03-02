<?php

  // FUNCTION - BLOCK OF CODE THAT CAN BE REPEATEDLY CALLED

  /*
    - CAMEL CASE - myFunction()
    - LOWER CASE - my_function()
    - PASCAL CASE - MyFunction()
  */

  // CREATE SIMPLE FUNCTION
  function simpleFunction(){
    echo 'Hello World';
  }

  // RUN SIMPLE FUNCTION
  // simpleFunction();

  // FUNCTION WITH PARAM
  function sayHello($name){
    echo "Hello $name <br>";
  }

  //sayHello('Tom');
  //sayHello('Ron');
  //sayHello('Leslie');'

  // RETURN VALUE
  function addNumbers($num1, $num2){
    return $num1 + $num2;
  }

  //echo addNumbers(2,3);

  // BY REFERENCE
  $myNum = 10;

  function addFive($num){
    $num += 5;
  }

  function addTen(&$num){
    $num += 10;
  }

  addFive($myNum);

  echo "Value: $myNum <br>";

  addTen($myNum);

  echo "Value: $myNum <br>";