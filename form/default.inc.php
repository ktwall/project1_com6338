<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: 'Source Sans Pro', sans-serif;
  text-align: center;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}
body {
  line-height: 1;
}
ol,
ul {
  list-style: none;
}
blockquote,
q {
  quotes: none;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
  content: "";
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}


/*.container {
  max-width: 80%;
  margin: 0 auto;
}*/

/*==========================

  Burger Menu

==========================*/

#menu__toggle {
  opacity: 0;
}

#menu__toggle:checked ~ .menu__btn > span {
  transform: rotate(45deg);
}
#menu__toggle:checked ~ .menu__btn > span::before {
  top: 0;
  transform: rotate(0);
}
#menu__toggle:checked ~ .menu__btn > span::after {
  top: 0;
  transform: rotate(90deg);
}
#menu__toggle:checked ~ .menu__box {
  visibility: visible;
  left: 0;
}

.menu__btn {
  display: flex;
  align-items: center;
  position: fixed;
  top: 20px;
  left: 20px;

  width: 26px;
  height: 26px;

  cursor: pointer;
  z-index: 1;
}

.menu__btn > span,
.menu__btn > span::before,
.menu__btn > span::after {
  display: block;
  position: absolute;

  width: 100%;
  height: 2px;

  background-color: #616161;

  transition-duration: 0.25s;
}
.menu__btn > span::before {
  content: "";
  top: -8px;
}
.menu__btn > span::after {
  content: "";
  top: 8px;
}

.menu__box {
  display: block;
  position: fixed;
  visibility: hidden;
  top: 0;
  left: -100%;

  width: 15em;
  height: 100%;

  margin: 0;
  padding: 80px 0;

  list-style: none;

  background-color: #C7C5C5;
  box-shadow: 1px 0px 6px #68696A;

  transition-duration: 0.25s;
}

.menu__item {
  display: block;
  padding: 12px 24px;

  color: #ff0000;

  font-family: "Source Sans Pro", sans-serif;
  font-size: 1em;
  font-weight: 600;

  text-decoration: none;

  transition-duration: 0.25s;
}
.menu__item:hover {
  background-color: #68696A;
}

/*==========================

  Side Nav

==========================*/

.sidenav {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  flex-wrap: nowrap;
  height: 100%;
  width: 10%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #F10000;
  border-right: #ffffff 2px;
  overflow-x: hidden;
  padding-top: 4%;
}

.sidenav a {
  color: white;
  font-family: "Source Sans Pro", sans-serif;
  font-weight: bold;
  font-size: 1em;
  letter-spacing: 0.25em;
  width: 100%;
  margin-left: 10%;
  margin: 2%;
}

/*-----------------------
header
----------------------- */

.logo {
  float: inherit;
  position: relative;
  z-index: 999;
  max-width: 25%;
  left: 38%;
}


footer {
  text-align: center;
  padding: 8px 0 15px 0;
  max-width: 35%;
  display: block;
  margin: 10px auto;
  font-size: 0.4em;
  color: #f10000;
}

h1 {
  margin: 1% 0;
  display: inline-block;
  color: #f10000;
  padding: 5px;
  font-size: 2em;
  font-weight: bold;
}

@media screen and  (min-width: 320px){
    .main {
      width:100%;
    }

    .logo {
        left: 45%;
    }
}
    
@media screen and  (max-width: 780px){
    .sidenav{
          display: none;
          width: 0%;
    }
    .logo {
        left: 45%;
    }
    .container {
        padding-left: 3%;
    }
    
}  
    


@media screen and  (min-width: 780px){
    header h1 {
          font-family: "Source Sans Pro", sans-serif;
          letter-spacing: 0.15em;
          font-size: 3em;
          font-weight: bold;
          line-height: normal;
          padding: 20px;
          margin-left: 175px;
    }
    .gallery {
          margin-left: 200px;
    }
    .footer {
        font-size: 1.4em;
    }
    main section article {
        padding-left: 7%;
    }
}

</style>




  <header>
    <nav class="HolyGrail-nav">
      <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>
        <ul class="menu__box">
          <li><a class="menu__item" href="index.html">Home</a></li>
          <li><a class="menu__item" href="about.html">About</a></li>
          <li><a class="menu__item" href="gallery.html">Gallery</a></li>
          <li><a class="menu__item" href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </nav>
    <div class="logo">
      <a href="index.html">
        <img src="images/cplogo.png" alt="logo" title="logo image" width="75" />
      </a>
    </div>
  </header>

  <main>
    <div class="container">

      <div id="mysidenav" class="sidenav">
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="gallery.html">Gallery</a>
        <a href="contact.html">Contact Us</a>

      </div>

  <div class="container">
    <h1>Sorry something went wrong with your submission</h1>
    <p>Please try again</p>
  </div>
  <footer>
    <div class="footer">
      <nav>
        <ul>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <p>Connect with us on social! <a class="social-media" href="https://www.facebook.com/camp.pontiac/"
            target="_blank"><i class="fab fa-facebook-square"></i></a> <a class="social-media"
            href="https://www.instagram.com/camppontiac_12516/?hl=en" target="_blank"><i
              class="fab fa-instagram"></i></a></p>
      </nav>
    </div>
  </footer>
