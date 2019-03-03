<?php
  require('config/config.php');
  require('config/db.php');

  // CREATE QUERY
  $query = 'SELECT * FROM posts ORDER BY id DESC';

  // GET RESULT
  $result = mysqli_query($conn, $query) or die ('Query Failed');

  // FETCH POSTS
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // var_dump($posts);

  // FREE RESULT
  mysqli_free_result($result);

  // CLOSE CONNECTION
  mysqli_close($conn);

  ?>

  <?php include('inc/header.php'); ?>
    <div class="container">
      <h1>Posts</h1>
      <?php foreach($posts as $post) : ?>
        <div class="card card-body bg-light">
          <h3><?php echo $post['title']; ?></h3>
          <small>Created on <?php echo $post['date']; ?> by <?php echo $post['author']; ?></small>
          <p><?php echo $post['body']; ?></p>
          <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id'] ?>">Read More</a>
        </div>
      <?php endforeach; ?>
    </div>
  <?php include('inc/footer.php'); ?>