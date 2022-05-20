<?php

require '../inc/db.php';
if (!isset($_SESSION)) {
  session_start();
}
print_r($_POST);
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  print_r($file);
  $file_name = $file['name'];
  $filetmp_name = $file['tmp_name'];
  $file_size = $file['size'];
  $file_error = $file['error'];
  $file_type = $file['type'];

  $file_ext = explode('.',$file_name);
  $file_actualext = strtolower(end($file_ext));

  $allowed_format = array('jpg','jpeg','png');

  if (in_array($file_actualext,$allowed_format)) {
    if ($file_error === 0) {
      if ($file_size <1000000) {
        $new_filename = uniqid('',true).".".$file_actualext;
        $file_destination ='../uploads/'.$new_filename;
        move_uploaded_file($filetmp_name,$file_destination);

      }
      else {
        echo "your file is too big!!";
      }
    }
    else{
      echo "There was an error uploading your file";
    }
  }
  else{
    echo "you cannot upload file of this type";
  }
}

$post_caption = $_POST['caption'];

$user_id = $_SESSION['user_id'];

if (isset($_POST['caption']) and $_POST['caption']!="") {
  $sql= "INSERT INTO posts (post_imagepath,post_caption,user_id) values ('$file_destination','$post_caption','$user_id')";
  mysqli_query($link,$sql);
}

header('location:../index.php');

 ?>
