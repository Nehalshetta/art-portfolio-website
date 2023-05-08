<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Absturact</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
  ></script>
    <style>
      /* gallery Section */
.gallery {
  background-color: #141414;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100%;
  padding-top: 10px;
  padding-bottom: 50px;
}



.gallery__wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
}


.gallery__card {
  margin: 10px;
  height: 425px;
  width: 300px;
  border-radius: 4px;
  display: flex;
  float: left;
  flex-direction: column;
  justify-content: center;
  color: #fff;
  transition: 0.3s ease-in;
}
.gallery__card img {
  border-radius: 1%;
  background-color:black;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}




.gallery h2 {
  text-align: center;
  background-color: #ff8177;
  background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
  background-size: 100%;
  -webkit-background-clip: text;
  -moz-background-clip: text;
  -webkit-text-fill-color: transparent;
  -moz-text-fill-color: transparent;
  display: flex;
  align-items: center;
  cursor: pointer;
  text-decoration: none;
  font-size: 2rem;
}





.gallery__card:hover {
  box-shadow: 0 4px 8px 0 rgba(241, 230, 230, 0.2), 0 6px 20px 0 rgba(122, 112, 112, 0.19);
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


    <div>
      <div class="gallery" id="gallery">
        <h2 style="text-align:center">Prints Gallery</h2>
          <div class="gallery__wrapper">
            <div class="gallery__card">
              <a href = "prints_slideshow.php"><img src= "prints-images/img1.png" height = "425px" width = "300px"></a>

            </div>
            <div class="gallery__card img2">
              <a href = "prints_slideshow.php"><img src= "prints-images/img2.png" height = "425px" width = "300px"></a>


            </div>
            <div class="gallery__card img3">
              <a href = "prints_slideshow.php"><img src= "prints-images/img3.png" height = "425px" width = "300px"></a>


            </div>
            <div class="gallery__card img4">
              <a href = "prints_slideshow.php"><img src= "prints-images/img4.png" height = "425px" width = "300px"></a>
            </div>

            <div class="gallery__card">
              <a href = "prints_slideshow.php"><img src= "prints-images/img5.png" height = "425px" width = "300px"></a>

            </div>
            <div class="gallery__card img2">
              <a href = "prints_slideshow.php"><img src= "prints-images/img6.png" height = "425px" width = "300px"></a>


            </div>
            <div class="gallery__card img3">
              <a href = "prints_slideshow.php"><img src= "prints-images/img7.png" height = "425px" width = "300px"></a>


            </div>
            <div class="gallery__card img4">
              <a href = "prints_slideshow.php"><img src= "prints-images/img8.png" height = "425px" width = "300px"></a>
            </div>


          </div>
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

      <script>
        function openForm() {
          document.getElementById("myForm").style.display = "grid";
        }

        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>

       <script>
         const inputs = document.querySelectorAll(".input");

    function focusFunc() {
      let parent = this.parentNode;
      parent.classList.add("focus");
    }

    function blurFunc() {
      let parent = this.parentNode;
      if (this.value == "") {
        parent.classList.remove("focus");
      }
    }

    inputs.forEach((input) => {
      input.addEventListener("focus", focusFunc);
      input.addEventListener("blur", blurFunc);
    });

       </script>
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
