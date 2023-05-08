<!DOCTYPE html>

<?php

session_start();
if(isset($_SESSION["loggedUser"])){

  include "connection.php";
  $email=$_SESSION["loggedUser"];


  $viewUser = "SELECT * FROM sign_up WHERE email='$email' ";

  $result=mysqli_query($con,$viewUser);

  if(!$result){echo "<br>Error: ".mysqli_error($con);}

  $row=mysqli_fetch_array($result);

  $firstName= $row["fname"];
  $lastName= $row["lname"];

  if(!$row){
    $firstName = "admin";
  }

}
else{
  header('Location: sign-in.php');
}

?>
}
else{
  header('Location: landing.php');
}

?>


<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
  <script src="app.js"></script>
  <style>
  .terms_container{
    background-color: #131313;
    padding: 10px 10px;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    height: 90%;
    z-index: 1;
    width: 100%;
    max-width: 1300px;
    padding: 0 50px;
    color: #fff;


  }


  .terms_container h1 {
    font-size: 2rem;
    background-color: #fe3b6f;
    background-image: linear-gradient(to top, #ff087b 0%, #ed1a52 100%);
    background-size: 100%;
    -webkit-background-clip: text;
    -moz-background-clip: text;
    -webkit-text-fill-color: transparent;
    -moz-text-fill-color: transparent;
    text-transform: uppercase;
    margin-bottom: 32px;
  }

  .terms_container h2 {
    font-size: 4rem;
    background: #ff8177; /* fallback for old browsers */
    background: -webkit-linear-gradient(
      to right,
      #9114ff,
      #da22ff
      ); /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(
        to right,
        #8f0eff,
        #da22ff
        ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background-size: 100%;
        -webkit-background-clip: text;
        -moz-background-clip: text;
        -webkit-text-fill-color: transparent;
        -moz-text-fill-color: transparent;
      }

      .terms_container p {
        margin-top: 1rem;
        font-size: 2rem;
        font-weight: 700;
      }

      </style>
    </head>
    <body>
      <!-- Navbar Section -->
      <nav class="navbar">
        <div class="navbar__container">
          <a href="landing.php" id="navbar__logo">ABSTURACT</a>
          <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> <span class="bar"></span>
            <span class="bar"></span>
          </div>
          <ul class="navbar__menu">
            <li class="navbar__item">
              <a href="Art.php" class="navbar__links" id="home-page">Art</a>
            </li>
            <li class="navbar__item">
              <a href="about.php" class="navbar__links" id="about-page">Who</a>
            </li>
            <li class="navbar__item">
              <a href="logout.php" class="navbar__links" id="about-page">Who</a>
            </li>
            <li class="navbar__btn">
            <button class="open-button" onclick="openForm()">Contact Us</button>
          </li>
        </ul>
      </div>
    </nav>


    <!--termsandconditions-->


    <div align="center" class="terms_container">

      <h1 id="contactus">Welcome</h1>
      <body style="top:0px; margin:0px;">
        <?php echo "Good Evening, ".$firstName." ".$lastName.", hope you have a wonderful experience on our website!"; ?>
        <br><br>
        <button style="height:30px;width:120px;border-radius:5px;" onclick="location.href='logout.php'">Logout</button>
      </body>

    </div>






































    <div class="form" id="myForm">
      <div class="contact-info">
        <h3 class="title">Let's get in touch</h3>
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
          dolorum adipisci recusandae praesentium dicta!
        </p>

        <div class="info">
          <div class="information">
            <img src="location.png" class="icon" alt="" />
            <p>92 Cherry Drive Uniondale, NY 11553</p>
          </div>
          <div class="information">
            <img src="email.png" class="icon" alt="" />
            <p>lorem@ipsum.com</p>
          </div>
          <div class="information">
            <img src="phone.png" class="icon" alt="" />
            <p>123-456-789</p>
          </div>
        </div>

        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="index.php" autocomplete="off">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            <input type="text" name="name" class="input" />
            <label for="">Username</label>
            <span>Username</span>
          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" />
            <label for="">Email</label>
            <span>Email</span>
          </div>
          <div class="input-container">
            <input type="tel" name="phone" class="input" />
            <label for="">Phone</label>
            <span>Phone</span>
          </div>
          <div class="input-container textarea">
            <textarea name="message" class="input"></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>
          <input type="submit" class = "btn submit"value="Send">
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
    </div>
  </div>



  <!-- Footer Section-->
  <section>
    <div class="footer__container">
      <p class="website__rights">© ABSTURACT 2020<a href= "terms.php">  All rights reserved</a></p>
      <div class="social-media">
        <p>Connect with us :</p>
        <div class="social-icons">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>


      </div>
    </div>


  </section>
</div>

</body>
</html>
