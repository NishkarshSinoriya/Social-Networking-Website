<?php
  require_once'../../inc/db.php';
  $_SESSION['logged_in'] === $_GET['logged_in'];
  unset($_SESSION['user_id']);
  unset($_SESSION['logged_in']);
  mysqli_query($link,$sql);
 ?>
