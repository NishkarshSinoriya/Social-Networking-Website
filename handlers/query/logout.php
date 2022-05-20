<?php
  // require_once'../../inc/db.php';
  // $_SESSION['logged_in'] === $_GET['logged_in'];
  // unset($_SESSION['user_id']);
  // unset($_SESSION['logged_in']);
  // // $_SESSION = array();
  // // session_destroy();
  // mysqli_query($link,$sql);
    session_start();
  $_SESSION = array();
  session_destroy();
  header('location: ../../login.php');
 ?>
