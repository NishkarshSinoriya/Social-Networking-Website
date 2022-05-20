<?php
print_r($_SESSION);
print_r($_GET);
if (isset($_SESSION['user_id']) and $_SESSION['user_id']==$_GET['userid']):
      require_once("inc/profile_clicked.php");
?>

<?php else: ?>

  <?php
      $id = $_GET['userid'];
      $profile_sql = "SELECT * from users where id = $id";
      $profile_result = mysqli_query($link,$profile_sql);
      $profile_row=mysqli_fetch_assoc($profile_result);
   ?>
  <div id="profile">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="profile_card">
            <div class="grey">
                <div  class="clicked circle">

                </div>
            </div>
            <div class="intro">
              <h3 class="name"><?php echo $profile_row['fname'] ?> <?php echo $profile_row['lname'] ?></h3>
                <p class="designation">
                  <?php echo $profile_row['designation']?>
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    $sql = "SELECT p.post_id,p.post_imagepath,p.post_caption,p.user_id,p.time_stamp,
    u.id,u.fname,u.lname,u.designation
    from posts as p JOIN users as u
    on u.id = p.user_id
    where u.id = $id
    order by p.post_id DESC";
    $result = mysqli_query($link,$sql);
   ?>

  <?php while ($row=mysqli_fetch_assoc($result)): ?>
      <div id="index">
        <div class="right">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <div class="wrapper">
                      <div class="post">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="name">
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-sm-12">
                                    <div class="name_wrap">
                                      <div class="dp">

                                      </div>
                                      <div class="intro">
                                        <h3><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h3>
                                        <p><?php echo $row['designation']; ?></p>
                                      </div>
                                    </div>
                                    <div class="timestamp">
                                      <p class="time"><?php echo $row['time_stamp']; ?></p>
                                      <?php if (isset($_SESSION['user_id']) and $_SESSION['user_id']==$row['user_id']): ?>
                                        <div class="buttons_pane">
                                          <button onclick="ajaxFetchQuery(<?php echo $row['post_id'] ?>)" class="button" data-target='#edit_modal' data-toggle="modal" type="button" name="button">edit</button>
                                          <button onclick="sendId(<?php echo $row['post_id'] ?>)" data-target='#delete_modal' data-toggle="modal" class="button" type="submit" name="button">delete</button>
                                        </div>
                                      <?php endif; ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="<?php echo $row['post_id']; ?>" class="picture" style="background: url(<?php echo str_replace("../", "",$row['post_imagepath'])?>);background-position:center;background-repeat: no-repeat;background-size:cover;">

                            </div>

                            <div class="caption">
                              <h3 class="text"><?php echo $row['post_caption']; ?></h3>
                            </div>
                            <!-- number of likes and comments -->
                            <?php
                            $postid_check = $row['post_id'];
                            $like_sql="SELECT sum(likes) FROM likes  where post_id = '$postid_check'";
                            $out=mysqli_query($link,$like_sql);
                            $re = mysqli_fetch_assoc($out);
                             ?>
                             <?php if (isset($_SESSION['user_id']) and $_SESSION['user_id']==$_GET['userid']): ?>
                               <ul class="interactions">
                                 <li>like</li>
                                 <li id='likes' class="likes"><?php echo $re['sum(likes)']; ?></li>
                               </ul>
                             <?php endif; ?>

                            <?php
                            $check = $row['post_id'];
                            $sequal = "SELECT c.content,u.fname,u.lname FROM comments as c JOIN users as u on c.user_id = u.id where post_id = '$check'";
                            $outcome= mysqli_query($link,$sequal);
                            while ($r=(mysqli_fetch_assoc($outcome))):
                             ?>
                            <div id="comment_block" class="comment_block">
                              <h3 class="comment_name"><?php echo $r['fname']; ?> <?php echo $r['lname']; ?></h3>
                              <p class="comment_text"><?php echo $r['content']; ?></p>
                            </div>
                          <?php endwhile; ?>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
  <?php endwhile; ?>
<?php endif; ?>
