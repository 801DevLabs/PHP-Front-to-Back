<?php
  // MESSAGE VARS
  $msg = '';
  $msgClass = '';

  // CHECK FOR SUBMIT
  if(filter_has_var(INPUT_POST, 'submit')){
    // GET FORM DATA
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // CHECK REQUIRED FIELDS
    if(!empty($email) && !empty($name) && !empty($message)){
      // PASSED
      // CHECK EMAIL
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // FAILED
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      } else {
        // PASSED
        $toEmail = 'admin@arborwebdesign.com';
        $subject = 'Contact Request From ' . $name;
        $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

                // EMAIL HEADERS
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

                // ADDITIONAL HEADERS
                $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                  // EMAIL SENT
                  $msg = 'Your email has been sent';
                  $msgClass = 'alert-success';
                } else {
                  $msg = 'Your email was not sent';
                  $msgClass = 'alert-danger';
                }
      }
    } else {
      // FAILED
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <div class="navbar-header">
      <div class="navbar-brand" href="index.php">My Website</div>
    </div>
  </div>
</nav>
<div class="container">
<?php if($msg != ''): ?>
  <div class="alert <?php echo $msgClass; ?>">
    <?php echo $msg; ?>
  </div>
<?php endif; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea name="message" id="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>