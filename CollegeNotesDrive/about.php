<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
<style>
body {
  font-family: Arial;
  margin: 0;
  background-color: #ededed;
}

</style>
</head>
</head>
<body>
<br><br><br>
<div class="contentleft" style="padding-left: 120px;padding-right: 150px;font-size: 20px;">
<div class="dialog-left">
<div class="main-content">
<div class="box-title" style="color: #d01313;font-size: 25px;">
About Notes Drive
</div>
<p>
<strong>Notes Drive</strong> is a free Notes Management System which allows you to search, preview and download
millions of PDF files into your devices. Our crawlers are constantly scanning the world
wide web to add PDF files to our database. In the case that PDF files are withdrawn
from the web, then they are also immediately withdrawn from
<a href="index.php" style="color:rgb(119, 114, 114); text-decoration: none;">Notes Drive</a> search results.
In this way, our PDF Drive library stays up-to-date, while continuously growing and
offering you an enormous database to search. In addition to the traditional search
engines, PDF Drive has these extra features:
</p><br>
<div class="title">Proper Records</div> Students used to upload the notes which is crossed verified by Admin of the desired departments.<br />
<div class="title">Communiuty</div> Notes drive has a large community support<br />
<div class="title">Up-to-date</div> PDF Drive’s archive is constantly growing while being consistently and efficiently updated.<br />
<div class="title">Synchronized</div> The same PDF version of any file is accessible from your computer or mobile devices that have internet connection. <br />
<div class="title">Smart</div> PDF Drive offers recommendations based on your interests and recent searches.<br />
<br /> 

<hr style="border: 1px solid black;">
<div class="box-title" style="color: #d01313;font-size: 25px;">
About Us
</div>

<style>
.mySlides {display:none;}
</style>

<div class="w3-content w3-display-container">
<center>
<div class="w3-display-container mySlides">
  <img src="images/rahul.png" style="border-radius: 50%" width="300" height="300">
  <p>Good afternoon. I am very pleased with the quality of the work of your employee representing your wonderful company.
  </p>
  <h2><b>Rahul</b></h2>
  <h3>DEVELOPER</h3>

</div>

<div class="w3-display-container mySlides">
  <img src="images/raghu.png" style="border-radius: 50%" width="300" height="300">
  <p>All issues are resolved promptly. In communication, the employees are pleasant, helpful. Always offer new ideas, new ways to develop, improve our project.</p>
  <h2><b>Raghu</b></h2>
  <h3>DEVELOPER</h3>

</div>
</center>

<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>



</div>
</div>
</div>	
</div>
<?php include 'includes/footer.php';?>
</body>
</html>