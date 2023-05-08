<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Album Art</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
    <script src="app.js"></script>

  </head>
  <body>


<div class="container">
<img class="mySlides" src="album-images/img-1.png">
<img class="mySlides"src="album-images/img-2.png">
<img class="mySlides"src="album-images/img-3.png">
<!--img class="mySlides"src="merch-images/img_ (4).png">
<img class="mySlides"src="merch-images/img_ (5).png">
<img class="mySlides"src="merch-images/img (6).png">
<img class="mySlides"src="merch-images/img (7).png">
<img class="mySlides"src="merch-images/img (8).png"-->

<button class="button_left" onclick="plusDivs(-1)">&#10094;</button>
<button class="button_right" onclick="plusDivs(+1)">&#10095;</button>
<a href="album.php"><button class="close">&times;</button></a>
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
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>



  
 


</body>
</html>