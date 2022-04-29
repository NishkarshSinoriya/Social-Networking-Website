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
  console.log("clicked");
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

function openInputWindow(){
  document.getElementById('input_file').click();
}

function takeInput(){
  document.getElementById('file').click();
}


function increaseLikes(id){
  var postid = id;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/increase_likes.php?postid="+postid, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
     window.location="index.php";
    }
  };
}

function showComment(){
  var c = document.getElementById('comment_here').className;
  if( c == "closed comment_here"){
    document.getElementById('comment_here').className ="open comment_here";
  }
  else{
    document.getElementById('comment_here').className ="closed comment_here";
  }
}
