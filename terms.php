<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terms and Conditions</title>
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
              <a href="sign-in.php" class="navbar__links" id="about-page">Sign In</a>
            </li>
            <li class="navbar__item">
              <a href="sign-up.php" class="navbar__links" id="about-page">Sign Up</a>
            </li>
          <li class="navbar__item">
            <a href="Art.php" class="navbar__links" id="home-page">Art</a>
          </li>
          <li class="navbar__item">
            <a href="about.php" class="navbar__links" id="about-page">Who</a>
          </li>
          <li class="navbar__btn">
            <button class="open-button" onclick="openForm()">Contact Us</button>
          </li>
        </ul>
      </div>
    </nav>


    <!--termsandconditions-->


    <div class="terms_container">

    <h1>TERMS AND CONDITIONS TEMPLATE</h1>
    <h2>AGREEMENT TO TERMS</h2>
    <p>

    These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of our entity and Ansturact, concerning your access to and use of the website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto.
    You agree that by accessing the Site, you have read, understood, and agree to be bound by all of these Terms and Conditions. If you do not agree with all of these Terms and Conditions, then you are expressly prohibited from using the Site and you must discontinue use immediately.
    Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms and Conditions at any time and for any reason.
    We will alert you about any changes by updating the “10/10/2021” date of these Terms and Conditions, and you waive any right to receive specific notice of each such change.

    </p>

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
