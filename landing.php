<!DOCTYPE html>
<html>
<head>
    <style>
    /* Flashlight Overlay */
:root {
  cursor: none;
  --cursorX: 50vw;
  --cursorY: 50vh;
}
:root:before {
  content: '';
  display: block;
  width: 100%;
  height: 100%;
  position: fixed;
  pointer-events: none;
  background: radial-gradient(
    circle 10vmax at var(--cursorX) var(--cursorY),
    rgba(0,0,0,0) 0%,
    rgba(0,0,0,.5) 80%,
    rgba(0,0,0,.95) 100%
  )
}

/* Hero Section */
.hero {
  background: #000000;
  background: linear-gradient(to right, #161616, #000000);
  padding: 200px 0;
}

.hero__container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  height: 90%;
  text-align: center;
  padding: 30px;
}

.hero__heading {
  font-size: 100px;
  margin-bottom: 24px;
  color: #fff;
}

.hero__heading span {
  background: #ee0979; /* fallback for old browsers */
  background: -webkit-linear-gradient(
    to right,
    #ff6a00,
    #ee0979
  ); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(
    to right,
    #ff6a00,
    #ee0979
  ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background-size: 100%;
  -webkit-background-clip: text;
  -moz-background-clip: text;
  -webkit-text-fill-color: transparent;
  -mo-text-fill-color: transparent;
}

.hero__description {
  font-size: 60px;
  background: #da22ff; /* fallback for old browsers */
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

.highlight {
  border-bottom: 4px solid rgb(132, 0, 255);
}


.main__btn {
  font-size: 1.8rem;
  background: #833ab4;
  background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
  background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
  padding: 20px 60px;
  border: none;
  border-radius: 4px;
  margin-top: 2rem;
  cursor: pointer;
  position: relative;
  transition: all 0.35s;
  outline: none;
}

.main__btn a {
  position: relative;
  z-index: 2;
  color: #fff;
  text-decoration: none;
}

.main__btn:after {
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background: #ff1ead;
  transition: all 0.35s;
  border-radius: 4px;
}

.main__btn:hover {
  color: #fff;
}

.main__btn:hover:after {
  width: 100%;
}

</style>
<script>
function update(e){
    var x = e.clientX || e.touches[0].clientX
    var y = e.clientY || e.touches[0].clientY
  
    document.documentElement.style.setProperty('--cursorX', x + 'px')
    document.documentElement.style.setProperty('--cursorY', y + 'px')
  }
  
  document.addEventListener('mousemove',update)
  document.addEventListener('touchmove',update)
  </script>
</head>
<body

<div class="hero" id="home">
    <div class="hero__container">
      <h1 class="hero__heading">Manifesting art through <span>Absturact</span></h1>
      <button class="main__btn"><a href="Art.php">Start</a></button>
    </div>
  </div>
</body>
</html>