<?php
  include_once '../inc/db.php';

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if (!empty($username) and !empty($email) )
{
  //user already exist check!!!
  $sql="SELECT * from users where username='$username' or email='$email'";
  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);


      if (empty($row))
       {
          if (!empty($password) and !empty($cpassword) and $password===$cpassword )
             {

                 $password_hash=password_hash($password, PASSWORD_DEFAULT);
                 $sql="INSERT into users (fname,lname,username,email,password_hash,dp_path,designation) values ('$fname','$lname','$username','$email','$password_hash','','')";
                 if (mysqli_query($link,$sql)) {

                   $msg='success';
                 }
              }
          else {
              $msg='password criteria not satisfied';
              }

      }

      else {
        $msg='username already exist';
      }
}

else
{
  $msg=' username and email cannot be empty';
}

$url_msg=urlencode($msg);
$redirect_link="../register.php?msg=".$url_msg;

if ($msg==='success') {
  header("location: ../inc/thanks.php");
}
else {
  header("location: $redirect_link");
}
 ?>
