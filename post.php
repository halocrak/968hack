<?php
include 'hacking.php';
'insert.php';
'delete.php';
?>
<div class="form-group">
  <form action="post.php" method="post" enctype="multipart/form-data">
    <?php if (isset($_POST['su                                                                                                                                                                                                                                                                                                                                                                                                                                                              ubmit'])) { ?><p><?php echo $error['result']; ?> <?php } ?></p>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name Post">
      <div class="form-group">
        <input type="text" name="dec" class="form-control" id="exampleInputPassword1" placeholder="descripshen">
        <div class="form-group">
          <div class="form-group">
            <input type="file" name="file" class="form-control">
            <div class="form-group">
              <button name="submit" class="submit">Add Post</button>
  </form>
  <?php
  $query = mysqli_query($db, "SELECT * FROM `name` ORDER BY `id` DESC ");
  while ($row = mysqli_fetch_assoc($query)) { ?>
    <div class="card" style="width: 18rem;">
      <img src="upload/<?php echo $row['photo']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['names']; ?></h5>
        <p class="card-text"><?php echo $row['dec']; ?></p>
        <a href="post.php?delete=<?php echo $row['id']; ?>" class="delete">Delete Post</a>
      </div>
    </div>
  <?php } ?>
  <?php
  if (isset($_GET['delete'])) {
    $id = htmlspecialchars($_GET['delete']);
    $query = mysqli_query($db, "DELETE FROM `name` WHERE `id` = '$id'");
    if ($query) {
      header("Location:post.php");
    }
  }
  ?>
  <link rel="stylesheet" href="./post.css">