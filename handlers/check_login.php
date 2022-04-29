<?php
  require_once 'inc/db.php';
    if(!isset($_SESSION)){
        session_start();

      // if ($_SESSION['logged_in']==true)
      // {
      //
      // }
      // else{
      //   function set_nli()
      //   {
      //       if($_GET['logged_in']){
      //         if($_GET['logged_in']==='nli'){
      //           $_SESSION['logged_in']=$_GET['logged_in'];
      //           unset($_SESSION['user_id']);
      //           session_destroy();
      //           header('location:index.php');
      //         }
      //     }
      //   }
      // }
      // if ($_SESSION['logged_in']!==true)
      // {
      //   header('location: index.php?nli');
      //   exit;
      // }
      // else
      // {
      //
      // }
      // }
      //
      // else
      // {
      // header('location: index.php?nli');
      // exit;
      //
      //

    }
    // print_r($_GET['logged_in']);
?>
