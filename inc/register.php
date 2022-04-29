<div id="reg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <form id="registration_form" class="" action="handlers/register.php" method="post">
          <div class="card">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-8">
                  <div class="left">
                    <div class="head">
                      <h3>sign up</h3>
                    </div>
                  <div class="grid">
                    <div class="col-sm-6">
                      <div class="input_group">
                        <label for="">first name</label>
                        <input type="text" id="form_fname" name="fname" >
                        <span class="error_form" id="fname_error_message"></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input_group">
                        <label for="">last name</label>
                        <input type="text" id="form_lname" name="lname" >
                        <span class="error_form" id="lname_error_message"></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input_group">
                        <label for="">username</label>
                        <input type="text" id="form_username" name="username" >
                        <span class="error_form" id="username_error_message"></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input_group">
                        <label for="">email</label>
                        <input type="email" id="form_email" name="email" >
                        <span class="error_form" id="email_error_message"></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input_group">
                        <label for="">password</label>
                        <input type="password" id="form_password" name="password" >
                        <span class="error_form" id="password_error_message"></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input_group">
                        <label for="">confirm password</label>
                        <input type="password" id="form_cpassword" name="cpassword" >
                        <span class="error_form" id="cpassword_error_message"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="buttons_pane">
                      <button type="submit" class="button" name="button">sign up</button>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="right">
                    <div class="text">
                      <h3>friendzone</h3>
                      <p>connect with your friends around the world</p>
                    </div>
                    <div class="buttons_pane" >
                      <p>already have an account?</p>
                        <a href="login.php"><button type="button" class="button" name="button">sign in</button></a>
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


          $("#fname_error_message").hide();
          $("#lname_error_message").hide();
          $("#username_error_message").hide();
          $("#email_error_message").hide();
          $("#password_error_message").hide();
          $("#cpassword_error_message").hide();

          var error_fname = false;
          var error_lname = false;
          var error_username = false;
          var error_email = false;
          var error_password= false;
          var error_cpassword= false;

          $("#form_fname").focusout(function() {
            check_fname();
          });
          $("#form_lname").focusout(function() {
            check_lname();
          });
          $("#form_username").focusout(function() {
            check_username();
          });
          $("#form_email").focusout(function() {
            check_email();
          });
          $("#form_password").focusout(function() {
            check_password();
          });
          $("#form_cpassword").focusout(function() {
            check_cpassword();
          });

          function check_fname() {
                  var pattern = /^[a-zA-Z]*$/;
                  var fname = $("#form_fname").val();
                  if (pattern.test(fname) && fname !== '') {
                     $("#fname_error_message").hide();
                     $("#form_fname").css("border-bottom","1px solid #34F458");
                  } else {
                     $("#fname_error_message").html("Should contain only Characters");
                     $("#fname_error_message").show();
                     $("#form_fname").css("border-bottom","1px solid #F90A0A");
                     error_fname = true;
                  }
          }

           function check_lname() {
              var pattern = /^[a-zA-Z]*$/;
              var lname = $("#form_lname").val()
              if (pattern.test(lname) && lname !== '') {
                 $("#lname_error_message").hide();
                 $("#form_lname").css("border-bottom","1px solid #34F458");
              } else {
                 $("#lname_error_message").html("Should contain only Characters");
                 $("#lname_error_message").show();
                 $("#form_lname").css("border-bottom","1px solid #F90A0A");
                 error_lname = true;
              }
           }

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

           function check_email() {
              var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
              var email = $("#form_email").val();
              if (pattern.test(email) && email !== '') {
                 $("#email_error_message").hide();
                 $("#form_email").css("border-bottom","1px solid #34F458");
              } else {
                 $("#email_error_message").html("Invalid Email");
                 $("#email_error_message").show();
                 $("#form_email").css("border-bottom","1px solid #F90A0A");
                 error_email = true;
              }
           }

           function check_password() {
              var password_length = $("#form_password").val().length;
              if (password_length < 5) {
                 $("#password_error_message").html("Atleast 5 Characters");
                 $("#password_error_message").show();
                 $("#form_password").css("border-bottom","1px solid #F90A0A");
                 error_password = true;
              } else {
                 $("#password_error_message").hide();
                 $("#form_password").css("border-bottom","1px solid #34F458");
              }
           }

           function check_cpassword() {
              var password = $("#form_password").val();
              var cpassword = $("#form_cpassword").val();
              if (password !== cpassword && cpassword !== '') {
                 $("#cpassword_error_message").html("Passwords Did not Matched");
                 $("#cpassword_error_message").show();
                 $("#form_cpassword").css("border-bottom","1px solid #F90A0A");
                 error_cpassword = true;
              } else {
                 $("#cpassword_error_message").hide();
                 $("#form_cpassword").css("border-bottom","1px solid #34F458");
              }
           }

           $("#registration_form").submit(function() {
                 error_fname = false;
                 error_sname = false;
                 error_username = false;
                 error_email = false;
                 error_password = false;
                 error_cpassword = false;

                 check_fname();
                 check_lname();
                 check_username();
                 check_email();
                 check_password();
                 check_cpassword();

                 if (error_fname === false && error_lname === false &&error_username === false && error_email === false && error_password === false && error_cpassword === false) {
                    alert("Registration Successfull");
                    return true;
                 } else {
                    alert("Please Fill the form Correctly");
                    return false;
                 }


          });
</script>
