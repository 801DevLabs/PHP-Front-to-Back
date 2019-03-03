<?php
  require('config/config.php');
  require('config/db.php');

  // CHECK FOR SUBMIT
  if(isset($_POST['submit'])){
    // GET FORM DATA
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "UPDATE posts SET
                title = '$title',
                author = '$author',
                body = '$body'
              WHERE
                id = {$update_id}";

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
      <h1>Add Post</h1>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
        </div>

        <div class="form-group">
          <label for="author">Author</label>
          <input type="author" name="author" class="form-control" value="<?php echo $post['author']; ?>">
        </div>

        <div class="form-group">
          <label for="body">Body</label>
          <textarea name="body" id="body" class="form-control"><?php echo $post['body']; ?></textarea>
        </div>

        <input type="hidden" name="update_id" value="<?php echo $post['id'];?>">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
  <?php include('inc/footer.php'); ?>