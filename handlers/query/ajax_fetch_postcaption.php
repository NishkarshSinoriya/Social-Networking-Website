<?php
  require_once '../../inc/db.php';
  $post_id = $_GET['postid'];
  $sql = "SELECT * from posts where post_id='$post_id'";
  $result = mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);
  print_r(json_encode($row));
 ?>
