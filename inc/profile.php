<?php
  $sql= "SELECT * from users where id = $_SESSION[user_id]";
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_assoc($result);
 ?>

<div id="profile">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="profile_card">
          <div class="grey">
              <input type="file" id="input_file" name="profilepic" value="" style="visibility:hidden">
              <div onclick="openInputWindow()" class="circle">

              </div>
          </div>
          <div class="intro">
            <h3><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></h3>
            <p>software development engineer</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
