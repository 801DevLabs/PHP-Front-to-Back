<?php
  require('config/config.php');
  require('config/db.php');

  // CHECK FOR SUBMIT
  if(isset($_POST['delete'])){
    // GET FORM DATA
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id = {$delete_id}";

    if(mysqli_query($conn, $query)){
      header('Location: '.ROOT_URL.'');
    } else {
      echo 'ERROR ' . mysqli_error($conn);
    }
  }

  // GET ID
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // CREATE QUERY
  $query = 'SELECT * FROM posts WHERE  id =' . $id;

  // GET RESULT
  $result = mysqli_query($conn, $query) or die ('Query Failed');

  // FETCH POSTS
  $post = mysqli_fetch_assoc($result);
  // var_dump($posts);

  // FREE RESULT
  mysqli_free_result($result);

  // CLOSE CONNECTION
  mysqli_close($conn);

  ?>

  <?php include('inc/header.php'); ?>
  <div class="container">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-secondary">Back</a>
    <h1><?php echo $post['title']; ?></h1>
    <small>Created on <?php echo $post['date']; ?> by <?php echo $post['author']; ?></small>
    <p><?php echo $post['body']; ?></p>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="float-right">
      <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
      <input type="submit" name="delete" value="Delete" class="btn btn-danger">
    </form>
    <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-secondary">Edit</a>
  </div>
  <?php include('inc/footer.php'); ?>