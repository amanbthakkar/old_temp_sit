<html>
<head><h1> Galaxy hotel </h1>
<link rel = "stylesheet" type="text/css" href="Header.css" title ="Header">
</head>
<body class ="bg">
<div class = "tabs">
<a href= "Header.html" class="tab" >Home</a>
<a href= "Rooms.html" class="tab" >Rooms</a>
<a href= "Dining.html" class="tab" >Dining</a>
<a href= "Amenities.html" class="tab" >Amenities</a>
<a href= "form2.html" class="tab" >Book now </a>
<a href= "form1.php" class="tab" > Management </a> 
</div>
<br>
<div class = "container">
	<div class ="slide" >
	<img src = "img1.jpg" class="image">
	</div>
	
	<div class="slide">
	<img src ="img2.jpg" class="image">
	</div>
	
	<div class ="slide">
	<img src ="img3.jpg" class="image">
	</div>
	
	<button class="prev" onclick="plusSlides(-1)">&#10094;</button>
	<button class="next" onclick="plusSlides(+1)">&#10095;</button>

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
  var slides = document.getElementsByClassName("slide");
  <!--var dots = document.getElementsByClassName("dot");--!>
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  <!--for (i = 0; i < dots.length; i++) {--!>
      <!--dots[i].className = dots[i].className.replace(" active", "");--!>
  <!--}--!>
  slides[slideIndex-1].style.display = "block"; 
  <!--dots[slideIndex-1].className += " active";--!>
}
</script>
<br>
<br>
<center><h2> For additonal information contact us: <br> 022-25655378 / 022-25655379</h2></center>
<br>

<center><a href= "Feedback.php" class="tab2" >Provide your valueable feedback</a></center>
 
</div>

</body>

</html>


