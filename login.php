 <?php
  // if (isset($_GET['logout']))
  //  {
  //   if (!isset($_SESSION))
  //   {
  //     session_start();
  //   }
  //   session_destroy();
  //   $logged_out=true;
  // }
?>
<?php
  // if(!isset($_SESSION)){
  //   session_start();
  //   unset ($_SESSION['user_id']);
  //   unset ($_SESSION['logged_in']);
  //   session_destroy();
  // }
 ?>
 <?php include 'handlers/check_login.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
  include 'inc/head.php';
  ?>
  <body>
    <?php
    include 'inc/login.php';
    ?>
  </body>
</html>
