<?php

/*
  if(isset($_GET['name'])){
    print_r($_GET);
    $name = htmlentities($_GET['name']);
    echo $name;
  }

  if(isset($_POST['name'])){
    print_r($_GET);
    $name = htmlentities($_POST['name']);
    echo $name;
  }
  
  if(isset($_REQUEST['name'])){
    // print_r($_GET);
    $name = htmlentities($_REQUEST['name']);
    echo $name;
  }
*/

echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Website</title>
</head>
<body>
  <form action="index.php" method="POST">
    <div>
      <label for="name">Name</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
</body>
</html>