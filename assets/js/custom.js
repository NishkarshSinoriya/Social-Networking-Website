function destroy_session(){
  var nli = 'nli';
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/logout.php?logged_in="+nli, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
    console.log(nli);
     // window.location="index.php";
    }
  };
}

function pop_over(){
  var c = document.getElementById('pop_over').className;
  if( c == "closed pop_over"){
    document.getElementById('pop_over').className ="open pop_over";
  }
  else{
    document.getElementById('pop_over').className ="closed pop_over";
  }
}

function sendId(id){
  console.log(id);
  document.getElementById('delete_post').value = id;
}

function delete_post(){
  var id = document.getElementById('delete_post').value;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/delete_post.php?post_id="+id, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
     window.location="index.php";
    }
  };
}

function deleteProfilePost(){
  var id = document.getElementById('delete_post').value;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/delete_post.php?post_id="+id, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
     window.location="profile.php";
    }
  };
}

function ajaxFetchQuery(id){

  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/ajax_fetch_query.php?postid="+id, true);
  xhttp.send();

  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
    {
      var result=JSON.parse(this.responseText);
      var inputs=document.getElementsByClassName('input_controller');
      inputs[0].value=result['post_caption'];
      document.getElementById('image').src=result['post_imagepath'].substr(3);
      document.getElementById('image').value = result['post_imagepath'];
      document.getElementById('edit_post').value = id;
    }
  }
}

function ajaxFetchPostcaption(id){

  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/ajax_fetch_postcaption.php?postid="+id, true);
  xhttp.send();

  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
    {
      var result=JSON.parse(this.responseText);
      var inputs=document.getElementsByClassName('input_c');
      inputs[0].value=result['post_caption'];
      document.getElementById('image').src=result['post_imagepath'].substr(3);
      document.getElementById('image').value = result['post_imagepath'];
      document.getElementById('edit_post').value = id;
    }

  }
}

function ajaxFetchPostcaptiononclick(id){

  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/ajax_fetch_postcaption.php?postid="+id, true);
  xhttp.send();

  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
    {
      var result=JSON.parse(this.responseText);
      var inputs=document.getElementsByClassName('input_con');
      inputs[0].value=result['post_caption'];
      document.getElementById('image').src=result['post_imagepath'].substr(3);
      document.getElementById('image').value = result['post_imagepath'];
      document.getElementById('edit_post').value = id;
    }

  }
}

function edit_post(){
  var id = document.getElementById('edit_post').value;
  var caption = document.getElementById('caption').value;
  var image = document.getElementById('image').value;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/edit_post.php?id="+id+"&caption="+caption+"&image="+image, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
        location.reload();
        window.location="index.php#"+id;

    }
  };
}

function openInputWindow(){
  document.getElementById('input_file').click();
}

function takeInput(){
  document.getElementById('file').click();
}

function takeEditInput(){
  document.getElementById('edit_file').click();
}

function increaseLikes(id){
  var postid = id;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/increase_likes.php?postid="+postid, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
        location.reload();
        window.location="index.php#"+id;
    }
  };
}

function increaseLikesPC(postid,userid){
  var postid = postid;
  var userid = userid;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/increase_likes.php?postid="+postid, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
        location.reload();
        window.location="clickedprofile.php?userid="+userid;
    }
  };
}

function updateFullname(id){
  var userid = id;
  var fname = document.getElementById('fname').value;
  var lname = document.getElementById('lname').value;
  console.log(fname);
  console.log(lname);
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/update_fullname.php?userid="+userid+"&fname="+fname+"&lname="+lname, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
     window.location="profile.php";
    }
  };
}

function updateDesignation(id){
  var userid = id;
  var designation = document.getElementById('designation').value;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/update_designation.php?userid="+userid+"&designation="+designation, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
     window.location="profile.php";
    }
  };
}
