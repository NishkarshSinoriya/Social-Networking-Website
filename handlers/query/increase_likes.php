<?php
  require_once '../../inc/db.php';
  if(!isset($_SESSION)){
    session_start();
  }

  $postid = $_GET['postid'];
  $user_id = $_SESSION['user_id'];

  $sql="SELECT * from likes where user_id='$user_id' and post_id = '$postid'";
  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);

    if (empty($row)) {
        $likes = 1;
        $sql = "INSERT into likes (likes,user_id,post_id) values ('$likes','$user_id','$postid')";
        mysqli_query($link,$sql);
    }
    else{
      if ($row['likes']== 1) {
          $likes = 0;
          $sql = "UPDATE likes SET likes='$likes' WHERE user_id='$user_id' and post_id = '$postid'";
          mysqli_query($link,$sql);
      }
      else{
        $likes = 1;
        $sql = "UPDATE likes SET likes='$likes' WHERE user_id='$user_id' and post_id = '$postid'";
        mysqli_query($link,$sql);
      }
    }
 ?>
