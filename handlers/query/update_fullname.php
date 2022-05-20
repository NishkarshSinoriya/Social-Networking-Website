<?php
  require_once '../../inc/db.php';
  if(!isset($_SESSION)){
      session_start();
  }
  $userid = $_SESSION['user_id'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $sql = "UPDATE users SET fname = '$fname', lname = '$lname' WHERE id = '$userid'";
  mysqli_query($link,$sql);
 ?>
