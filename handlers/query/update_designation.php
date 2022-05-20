<?php
  require_once '../../inc/db.php';
  if(!isset($_SESSION)){
      session_start();
  }
  $userid = $_SESSION['user_id'];
  $designation = $_GET['designation'];
  $sql = "UPDATE users SET designation = '$designation' WHERE id = '$userid'";
  mysqli_query($link,$sql);
 ?>
