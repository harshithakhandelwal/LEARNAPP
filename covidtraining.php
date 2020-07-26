<?php
   include('session.php');
?>


<html>
<head>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 300px;


}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  background-color : white;
}
header {
padding : 20px 20px;

}

div.maincontainer {
padding: 100px 100px;
background-color:white;
align: center;

  


}
body {
background-image : url('7.jpg');
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}
/* button */


.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
}

#myButton {

visibility:hidden;
align:center;
}

</style>
</head>
<body>
<header>
    <h1><center>Learning and assessment management system<center></h1></header>
	<nav>
	<h1>Welcome <?php echo $login_session; ?></h1> 
     <h2><a href = "logout.php">Sign Out</a></h2>
	 </nav>
	<div class="maincontainer">
	<H3><center>COVID-19 AWARENESS PROGRAMME<center><H3> 
	<center><video width="600" controls id="myVid">
  <source src="mov_bbb.mp4" type="video/mp4" id="myVid">
  
  Your browser does not support HTML video.
</video></center>
<form action ="certificate.php" method="post">
<button class="button" type = "submit" id="myButton" >NEXT</button>
</form>

</div>
<script>
var vid = document.getElementById("myVid");
vid.onended = function() {
  alert("The video has ended");
  document.getElementById("myButton").style.visibility = "visible";
  
};

window.onfocus = function() { document.getElementById('myVid').play(); };
window.onblur = function() { document.getElementById('myVid').pause(); };

</script>
</body>
</html>