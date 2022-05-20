<div id="login">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <form id="loginform" class="" action="handlers/login.php" method="post">
          <div class="card">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-5">
                  <div class="left">
                    <div class="head">
                      <h3>sign in</h3>
                    </div>
                    <div class="input_group">
                      <label for="">username/email</label>
                      <input type="text" id="form_username" name="euser" value="">
                      <span class="error_form" id="username_error_message"></span>
                    </div>
                    <div class="input_group">
                      <label for="">password</label>
                      <input type="password" id="form_password" name="password" value="">
                      <span class="error_form" id="password_error_message"></span>
                    </div>
                    <div class="buttons_pane">
                      <button type="submit" class="button" name="button">let's go</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-7">
                  <div class="right">
                    <div class="text">
                      <h3>friendzone</h3>
                      <p>connect with your people around the world</p>
                    </div>
                    <div class="buttons_pane" >
                      <p>don't have an account?</p>
                        <a href="register.php"><button type="button" class="button" name="button">register</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

          $("#username_error_message").hide();
          $("#password_error_message").hide();


          var error_username = false;
          var error_password= false;


          $("#form_username").focusout(function() {
            check_username();
          });
          $("#form_password").focusout(function() {
            check_password();
          });




           function check_username() {
              var pattern = /^[a-zA-Z]*$/;
              var username = $("#form_username").val()
              if (pattern.test(username) && username !== '') {
                 $("#username_error_message").hide();
                 $("#form_username").css("border-bottom","1px solid #34F458");
              } else {
                 $("#username_error_message").html("Should contain only Characters");
                 $("#username_error_message").show();
                 $("#form_username").css("border-bottom","1px solid #F90A0A");
                 error_username = true;
              }
           }



           function check_password() {
              var password_length = $("#form_password").val().length;
              if (password_length < 8) {
                 $("#password_error_message").html("Atleast 8 Characters");
                 $("#password_error_message").show();
                 $("#form_password").css("border-bottom","1px solid #F90A0A");
                 error_password = true;
              } else {
                 $("#password_error_message").hide();
                 $("#form_password").css("border-bottom","1px solid #34F458");
              }
           }


           $("#loginform").submit(function() {
                 error_username = false;
                 error_password = false;


                 check_username();
                 check_password();

                 if (error_username === false && error_password === false) {
                     window.location = "login.php";
                    return true;
                 } else {
                    alert("Username or password is incorrect");
                    return false;
                 }


          });
</script>
