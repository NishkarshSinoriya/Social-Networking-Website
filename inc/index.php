<?php
  $sql = "SELECT p.post_id,p.post_imagepath,p.post_caption,p.user_id,p.time_stamp,
  u.id,u.fname,u.lname
  from posts as p JOIN users as u
  on u.id = p.user_id
  order by p.post_id DESC";
  $result=mysqli_query($link,$sql);
 ?>

<div id="index">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-9 col-sm-offset-3">
        <div class="right">
          <div class="container-fluid">

            <div class="row">
              <div class="wrapper">
                <div class="post_creation">
                  <!-- form for post creation -->
                  <form class="" action="handlers/post.php" method="post" enctype="multipart/form-data">
                    <textarea placeholder="What's on your mind?" class="textarea" name="caption" ></textarea>
                    <div class="buttons_pane">
                      <input type="file" id="file" name="file" value="" style="visibility:hidden">
                      <button type="button" onclick="takeInput()" class="button">choose image</button>
                      <button type="submit" class="button" name="submit">post</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>

            <!-- while -->
            <?php while ($row=mysqli_fetch_assoc($result)): ?>
              <div class="row">
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
                                    <h3><a href="profile.php"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></a></h3>
                                    <p>software development engineer</p>
                                  </div>
                                </div>
                                <div class="timestamp">
                                  <p class="time"><?php echo $row['time_stamp']; ?></p>
                                  <?php if ($row['user_id']==$_SESSION['user_id']): ?>
                                    <div class="buttons_pane">
                                      <button class="button" type="button" name="button">edit</button>
                                      <button onclick="sendId(<?php echo $row['post_id'] ?>)"data-target='#modal' data-toggle="modal" class="button" type="submit" name="button">delete</button>
                                    </div>
                                  <?php endif; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="picture" style="background: url(<?php echo str_replace("../", "",$row['post_imagepath'])?>);background-position:center;background-repeat: no-repeat;background-size:cover;">

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
                        <ul class="interactions">
                          <li onclick="increaseLikes(<?php echo $row['post_id']; ?>)">like</li>
                          <li onclick="showComment()">comment</li>
                          <li id='likes' class="likes"><?php echo $re['sum(likes)']; ?></li>
                          <li class="comments">0</li>
                        </ul>

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

                        <!-- form for generating comments -->
                        <form  action="handlers/comments.php" method="post" enctype="multipart/form-data">
                          <div id="comment_here" class="open comment_here">
                            <textarea  class="comment_area" name="comment_area" ></textarea>
                            <input type="text" name="post_id" value="<?php echo $row['post_id'];?>" style="display:none;">
                            <div class="buttons_pane">
                                <button type="submit" class="button" name="button">comment</button>
                            </div>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Do you really want to delete the post?
      </div>
      <div class="modal-footer">
        <input id="delete_post" type="hidden" name="" value="">
        <button onclick="delete_post()" type="button" class="btn btn-primary">yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>
      </div>
    </div>
  </div>
</div>
