<?php
  require '../inc/db.php';
  if (!isset($_SESSION)) {
    session_start();
  }
  $comment = $_POST['comment_area'];
  $user_id = $_SESSION['user_id'];
  $post_id = $_POST['post_id'];
  $sql = "INSERT INTO comments (content,user_id,post_id)
  values ('$comment','$user_id','$post_id')";
  mysqli_query($link,$sql);
  header('location:../index.php');
 ?>
