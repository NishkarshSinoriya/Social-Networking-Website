<?php
  require_once '../../inc/db.php';
  $post_id = $_GET['id'];
  $post_caption = $_GET['caption'];
  $post_imagepath = $_GET['image'];
  print_r($post_imagepath);
  $sql = "UPDATE posts SET post_caption = '$post_caption' WHERE post_id = '$post_id'";
  mysqli_query($link,$sql);
 ?>
