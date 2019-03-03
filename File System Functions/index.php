<?php
  $path = '/dir0/dir1/myfile.php';
  $file = 'file1.txt';

  // RETURN FILENAME
  // echo basename($path);

  // RETURN FILENAME WITHOUT EXT
  // echo basename($path, '.php');

  // RETURN THE DIR NAME FROM PATH
  // echo dirname($path);

  // echo file_exists($file);

  // GET ABS PATH
  // echo realpath($file);

  // CHECKS STO SEE IF FILE
  // echo is_file($file);
  // echo file_exists('test');

  // CHECK IF WRITEABLE
  // echo is_writable($file);

  // CHECK IF READABLE
  // echo is_readable($file);

  // GET FILE SIZE
  // echo filesize($file);

  // CREATE A DIRECTORY
  // mkdir('testing');

  // REMOVE A DIRECTORY IF EMPTY
  // rmdir('testing');

  // COPY FILE
  // echo copy('file1.txt', 'file2.txt');

  // RENAME A FILE
  // rename('file2.txt', 'myfile.txt');

  // DELETE FILE
  // unlink('myfile.txt');

  // WRITE FROM FILE TO STRING
  // echo file_get_contents($file);

  // WRITE STRING TO FILE
  // echo file_put_contents($file, 'Hello Everyone');

  // $current = file_get_contents($file);

  // $current .= ' Hello Everyone';

  // file_put_contents($file, $current);

  // OPEN FILE FOR READING
  // $handle = fopen($file, 'r');
  // $data = fread($handle, filesize($file));
  // echo $data;
  // fclose($handle);

  // OPEN FILE FOR WRITING
  $handle = fopen('$file2.txt', 'w');
  $txt = "Hello World\n";
  fwrite($handle, $txt);
  $txt = "Hello Everyone\n";
  fwrite($handle, $txt);
  fclose($handle);