<?php include 'handlers/check_login.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
    include 'inc/head.php';
   ?>
  <body>
    <?php
    include 'inc/nav.php';
    print_r($_SESSION);
    include 'inc/sidebar.php';
    include 'inc/index.php';
    // include 'inc/pagination.php';
    include 'inc/scripts.php';
     ?>
  </body>
</html>
