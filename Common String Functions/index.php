<?php
  // substr()
  // RETURNS A PORTION OF A STRING

  // $output = substr('Hello', 1, 3);
  // $output = substr('Hello', -2);
  // echo $output;

  // strlen()
  // RETURNS THE LENGTH OF A STRING
  // $output = strlen('Hello World');
  // echo $output;

  // strpos()
  // FINDS THE POSITION OF THE FIRST OCCURENCE OF A SUB STRING
  // $output = strpos('Hello World', 'o');
  // echo $output;

  // strrpos()
  // FINDS THE POSITION OF THE LAST OCCURENCE OF A SUB STRING
  // $output = strrpos('Hello World', 'o');
  // echo $output;

  /*
  // trim()
  // STRIPS WHITESPACE
  $text = 'Hello World     ';
  // var_dump($text);

  $trimmed = trim($text);
  var_dump($trimmed);
  */

  // strtoupper
  // MAKES EVERYTHING UPPERCASE
  // $output = strtoupper('Hello World');
  // echo $output;

  // strtolower
  // MAKES EVERYTHING LOWERCASE
  // $output = strtolower('Hello World');
  // echo $output;

  // ucwords()
  // CAPITALIZE EVERY WORD
  // $output = ucwords('hello world');
  // echo $output;

  // str_replace()
  // REPLACE ALL OCCURENCES OF A SEARCH STRING WIHTH A REPLACEMENT
  // $text = 'Hello World';
  // $output = str_replace('World', 'Everyone', $text);
  // echo $output;

  // is_string()
  // CHECK IF STRING
  // $val = 'Hello';
  // $output = is_string($val);
  // echo $output;

  // $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

  // foreach($values as $value){
  //   if(is_string($value)){
  //     echo "{$value} is a string <br>";
  //   }
  // }

  // gzcompress()
  // COMPRESS A STRING

  $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec ipsum magna. Pellentesque in nisi ante. In hac habitasse platea dictumst. Nunc ullamcorper, quam ac efficitur suscipit, dolor velit vestibulum neque, in tempor ligula nisl pellentesque neque. Phasellus tempor, tellus id luctus mollis, nisl eros accumsan quam, vel interdum enim quam eget enim. Aenean iaculis velit nec risus sollicitudin, eget vulputate neque mollis. Morbi tempus molestie congue. Integer odio neque, posuere a vestibulum at, fermentum a orci. Aenean blandit, augue vel fringilla dapibus, leo metus bibendum est, ac varius nunc neque et orci. Donec tellus enim, aliquet eget tempus et, ultrices eget dui. Aenean sit amet lorem eget justo pellentesque condimentum. In nibh turpis, egestas ac dictum quis, blandit non massa. Suspendisse dapibus vel enim et pretium. Maecenas tempor ipsum eu velit feugiat, id efficitur tortor condimentum. Mauris consectetur convallis eleifend. Ut consequat, lacus sed fringilla rhoncus, nisl dolor pulvinar enim, sit amet cursus lectus nisl in ipsum.";

  $compressed = gzcompress($string);

  // echo $compressed;

  $original = gzuncompress($compressed);

  echo $original;