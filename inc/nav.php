
<nav class="navbar navbar-default">
  <div class="container">
    <div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <div class="logo">
          </div>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['logged_in'])): ?>
              <li><a href="index.php">home</a></li>
              <li><a href="profile.php">profile</a></li>
              <!-- <li> <a onclick="destroy_session()">logout</a> </li> -->
              <li> <a href="handlers/query/logout.php">logout</a> </li>
            <?php else: ?>
              <li><a href="index.php">home</a></li>
              <li><a href="login.php">login</a></li>
            <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</nav>
