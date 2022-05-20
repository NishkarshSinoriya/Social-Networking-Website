<?php
include 'database/initialise_db.php';
include 'handlers/check_login.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
    include 'inc/head.php';
   ?>
  <body>
    <?php
    include 'inc/nav.php';
    if (isset($_SESSION['user_id'])) {
      include 'inc/sidebar.php';
    }
    include 'inc/index.php';
    include 'inc/scripts.php';
    include 'inc/pagination.php';
     ?>
  </body>
</html>
