<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prints</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding-top: 10px;
      padding-bottom: 50px;
    }
    .mySlides
    {
       width:auto;
       height:700px;
       
      
    }
    .button_left
    { 
      color: white;
      background-color: black;
      border-radius: 9px;
      border: 2px black;
       margin-left:auto;
       margin-right:auto;
       position: absolute;
       top:50%;
       left: 10%;
       cursor: pointer;
    }
    .button_right
    {
      color: white;
      background-color: black;
      border-radius: 9px;
      border: 2px black;
       margin-left:auto;
       margin-right:auto;
       position: absolute;
       top:50%;
       right: 10%;
       cursor: pointer;
    }
    
    .close{
      color: white;
      background-color: black;
      border-radius: 9px;
      border: 2px black;
      cursor: pointer;
      position: absolute;
       top:1%;
       right: 10%;

    }
    </style>
  </head>
  <body>


<div class="container">
<img class="mySlides" src="prints-images/img1.png">
<img class="mySlides"src="prints-images/img2.png">
<img class="mySlides"src="prints-images/img3.png">
<img class="mySlides"src="prints-images/img4.png">
<img class="mySlides"src="prints-images/img5.png">
<img class="mySlides"src="prints-images/img6.png">
<img class="mySlides"src="prints-images/img7.png">
<img class="mySlides"src="prints-images/img8.png">

<button class="button_left" onclick="plusDivs(-1)">&#10094;</button>
<button class="button_right" onclick="plusDivs(+1)">&#10095;</button>
<a href="prints.php"><button class="close">&times;</button></a>
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