<!DOCTYPE html>
<html>
<head>
	<title>ONLINE BANKING...</title>
	<style>
		.container {
  position: relative;
  text-align: center;
  color: white;
}
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}
a:link { 
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: gray;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: green;
  background-color: transparent;
  text-decoration: underline;
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 8%;
  padding: 5px;
}


</style>
</head>
<body background="black">
	
	<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.button {
  background-color:black; /* Green */
  border: none;
  color: #ff3333;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {border-radius: 12px;}
</style>
</head>
<body bgcolor="#ff3333">
	<span><h1 style="background-color: black "><img src="mainlogo.jpg" style="width:40px;height:39px;" align="left" class="profileimage"><span style="color:#ff3333 " text-align: right;>&nbsp;PEACE BANK</span>&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp  &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp

 <a href="index.php" style="font-size: 25px;"><span style="color:#ff3333 " text-align: right;>&nbsp;HOME</span></a>&nbsp &nbsp
 <a href="transfermoney.php" style="font-size: 25px;"><span style="color:#ff3333 ">CUSTOMERS</span></a>&nbsp &nbsp
 <a href="transactionhistory.php" style="font-size: 25px;"><span style="color:#ff3333 ">HISTORY</span></a>&nbsp &nbsp
 <a href="https://www.thesparksfoundationsingapore.org/" style="font-size: 25px;"><span style="color:#ff3333 ">ABOUT</span></a>&nbsp &nbsp</h1></span>
 
 <marquee direction="left" width="1200"  behavior="left"><h2 style="font-size: 10px; color: white;"><span> <img src="mainlogo.jpg" style="width:25px;height:38px;"></span><span style="font-size: 25px; color:black"><b>&nbsp&nbsp&nbsp&nbsp W E L C O M E P E A C E B A N K</b></span></h2></marquee>
</h1></span>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="pots.jpg"  style="width:100%;height:300px;">
  <div class="text">JOIN US ONLINE</div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="pots.jpg"  style="width:100%;height:300px;">
  <div class="text">JOIN US ONLINE</div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="pots.jpg"  style="width:100%;height:300px;">
  <div class="text">JOIN US ONLINE</div>
</div>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script><br><br>
<center>
<a class="content__item" href="transfermoney.php">
          <button class="button button5"><span><span>Make a Transaction</span></span></button>
          </a>&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp
          <a class="content__item" href="transactionhistory.php">
          <button class="button button5"><span><span>Transaction History</span></span></button>
          </a></center><br><br><br>




<h1 style="background-color: black"><span style="color: "><span style="color: #ff3333"><img src="mainlogo.jpg" style="width:40px;height:39px;" align="left" class="profileimage"><center>©2021 Made by AyyappaReddy. The Sparks Foundation</center><SPAN style="font-size: 8px;"></SPAN></span></h1>
</body>
</html>