<!DOCTYPE html>
<title>Vote.it | Dog 5</title>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="https://voteit--hcahoon01.repl.co/">Vote.it</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="../index.html" id="navbardrop" data-toggle="dropdown">
        Dogs
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../dog1/vote.php">Dog 1</a>
        <a class="dropdown-item" href="../dog2/vote.php">Dog 2</a>
        <a class="dropdown-item" href="../dog3/vote.php">Dog 3</a>
        <a class="dropdown-item" href="../dog4/vote.php">Dog 4</a>
        <a class="dropdown-item" href="../dog5/vote.php">Dog 5</a>
      </div>
    </li>
  </ul>
</nav>
<br><script>
function dogVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","dog5.php?vote="+int,true);
  xmlhttp.send();
}
</script>
<center>
<div id="poll">
<h3>Do you think this dog is cute?</h3>
<img src="https://cdn.akc.org/content/hero/puppy-boundaries_header.jpg" width="500" height="600">

<img scr="">
<form>
Yes: <input type="radio" name="vote" value="0" onclick="dogVote(this.value)"><br>
No: <input type="radio" name="vote" value="1" onclick="dogVote(this.value)">
</form>
</div>
</center>
