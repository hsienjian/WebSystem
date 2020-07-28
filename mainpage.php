<?php
    include('includes/header1.php'); 
    
?>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: content-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}

.circle{
    padding-top: 50px;
}

h1{
    margin: auto;
    padding-top: 20px;
}

.row{
    margin: auto;
    padding-top: 20px;
}

.column{
    padding-left: 50px;
}

span.row{
    max-width: 180px;
}
</style>
</head>
<body>


<div class="slideshow-container">
<div class="mySlides right">
  <a href="#" style="stylesheet"><img src="img/promo1.jpg" style="width:95%"></a>
</div>
<div class="mySlides right">
  <a href="#" style="stylesheet"><img src="img/promo2.jpg" style="width:95%"></a>
</div>
<div class="mySlides right">
    <a href="#" style="stylesheet"><img src="img/promotion3.png" style="width:95%"></a>  
</div>

    </div>

    


<script> // this is for slideshow automatic
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); 
}



</script>

<h1>Shop By brand</h1>
<div class="row">
  <div class="column">
      <a href="#" style="stylesheet"><img src="img/Gucci.png" alt="logo"></a>
  </div>
  <div class="column">
      <a href="#" style="stylesheet"><img src="img/Comfort_Colors.jpg" alt="Comfort_Colors"></a>
  </div>
  <div class="column">
      <a href="#" style="stylesheet"><img src="img/Rightway.jpg" alt="Rightway"></a>
  </div>
    <div class="column">
        <a href="#" style="stylesheet"><img src="img/oren.png" alt="oren"></a>
  </div>
</div>

<div class="row">
  <div class="column">
      <a href="#" style="stylesheet"><img src="img/ck.jpg" alt="CK"></a>
  </div>
  <div class="column">
      <a href="#" style="stylesheet"><img src="img/gildan.png" alt="Gildan"></a>
  </div>
  <div class="column">
      <a href="#" style="stylesheet"><img src="img/Apparel.jpg" alt="Apparel"></a>
  </div>
    <div class="column">
        <a href="#" style="stylesheet"><img src="img/palomo.png" alt="palomo"></a>
  </div>
</div>

<h1>Best Selling</h1>

<div class="row">
  <div class="column">
      <a href="#" style="stylesheet"><img src="img/best_selling1.jpg" alt="shirt"></a>
      <span class="row">Unisex T-Shirt</span>
  </div>
  <div class="column">
      <a href="#" style="stylesheet"><img src="img/best_selling2.jpg" alt="shirt"></a>
      <span class="row">100% Comfort Cotton Round Neck T-Shirt</span>
  </div>
  <div class="column">
      <a href="#" style="stylesheet"><img src="img/best_selling3.png" alt="shirt"></a>
      <span class="row">High Quality T-Shirt</span>
  </div>
    <div class="column">
        <a href="#" style="stylesheet"><img src="img/best_selling4.png" alt="hoodie"></a>
        <span class="row">Sweater Hoodie</span>
  </div>
</div>


</body>
</html> 
       
    
    <?php
       echo 'test';
       ?>
    
   
<?php
include('includes/footer.php');
?>