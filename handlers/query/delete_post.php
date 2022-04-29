<?php
  require_once '../../inc/db.php';
  $post_id = $_GET['post_id'];
  $sql = "DELETE from posts WHERE post_id = '$post_id'";
  mysqli_query($link,$sql);
 ?>
