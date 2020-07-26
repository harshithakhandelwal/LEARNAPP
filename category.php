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
<div class="gallery">
  <a target="_blank" href="covidtraining.php">
    <img src="2.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">COVID -19 AWARENESS</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="3.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">INDUCTION TRAINING</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="4.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">DEPARTMENT TRAININGS</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="5.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">ASSESSMENT TRAININGS</div>
</div>
</div>


</body>
</html>