<div id="sb">
  <div id='toggle_sidebar' class="open">
    <div class="sidebar_container">
      <div class="container-fluid">
        <div class="row">
        <button  class="toggle" onclick="toggle_sidebar() "type="button" name="button"></button>
        <div class="card">
          <div class="circle">
          </div>
        </div>
        <ul>
          <a href="profile.php"><li>profile</li></a>
          <a href="index.php?logout"><li>log out</li></a>
        </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function toggle_sidebar()
  {
  var sidebar_status = document.getElementById('toggle_sidebar').className;

  if (sidebar_status=='open')
   {
    document.getElementById('toggle_sidebar').className ='closed';
  }

  else
   {
    document.getElementById('toggle_sidebar').className ='open';
  }

  }
</script>
