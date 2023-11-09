<?php
session_start();
// if(!isset($_SESSION['name']) && !isset($_SESSION['password'])){
//   header("location:index.php");
// }
if($_SESSION['name']==""){
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Barbar Shop Rohilainwali</title>
</head>
<style>.logo{
    width: 160px;
    position: absolute;
    top: -5px;
    left: 2px;

    
}</style>

<body>
  <section id="banner">
    <img src="./logo1.png" class="logo">
    <div class="banner-text">
      <h1> HY <?php if(isset( $_SESSION['name'])){
        echo $_SESSION['name'];
      }
      else{
        echo"WELCOME";
      }
      ?></h1>
      <br>
      <p>your welcome here you can jon us with the web</p>
      <div class="banner-btn">
        <?php 
        if(isset($_SESSION['name']) ){ 
          
          echo "<a href='logout.php' ><span></span>LOG OUT</a> ";
        }else {
            echo "<a href='index.php'><span></span>LOG IN</a> ";
            echo "<a href='register.php'><span></span>Register Now</a> ";

            
          }
        ?>
      </div>
    </div>
  </section>

  <input type="checkbox" id="check">
  <label for="check">
    <img src="./menu.png" id="btn">
    <img src="./close.png" id="cancel">

  </label>

  <div class="sidebar">

    <header>MY SHOP</header>
    <ul>
      <li><a href="#banner">HOME</a></li>
      <li><a href="#feature">FEATURES</a></li>
      <li><a href="#service">SERVICES</a></li>
      <li><a href="#testimonial">TESTIMONIALS</a></li>
      <li><a href="#footer">MEET US</a></li>
    </ul>
  </div>
  <section id="feature">
    <div class="tittle-text">
      <p>FEATURES</p>
      <h1>WHY CHOOSE US</h1>
    </div>
    <div class="feature-box">
      <div class="features">
        <h1>Experienced Staff</h1>
        <div class="feature-desc">

          <div class="feature-text">
            <p>Lorem ipsum ratione quibusdam illo debitis harum neque sit?</p>
          </div>
        </div>
        <h1>Online Booking</h1>
        <div class="feature-desc">

          <div class="feature-text">
            <p>Lorem ipsum ratione quibusdam illo debitis harum neque sit?</p>
          </div>
        </div>
        <h1>online booking</h1>
        <div class="feature-desc">

          <div class="feature-text">
            <p>Lorem ipsum ratione quibusdam illo debitis harum neque sit?</p>
          </div>
        </div>
      </div>

      <div class="feature-img">
        <img src="./dddd.jpg">
      </div>


    </div>


  </section>


  <section id="service">
    <div class="tittle-text">
      <p>SERVICES</p>
      <h1>WE PROVIDE BETTER</h1>
    </div>
    <div class="service-box">
      <div class="single-service">
        <img src="./pic-1.jpg">
        <div class="overlay"></div>
        <div class="service-desc">
          <h3>hair style</h3>
          <hr>
          <p>avaakhf hadsas afa f f fsd efsf dsf ssf sd f sd</p>
        </div>
      </div>
      <div class="single-service">
        <img src="./pic-2.jpg">
        <div class="overlay"></div>
        <div class="service-desc">
          <h3>hair style</h3>
          <hr>
          <p>avaakhf hadsas afa f f fsd efsf dsf ssf sd f sd</p>
        </div>
      </div>
      <div class="single-service">
        <img src="./pic-3.jpg">
        <div class="overlay"></div>
        <div class="service-desc">
          <h3>hair style</h3>
          <hr>
          <p>avaakhf hadsas afa f f fsd efsf dsf ssf sd f sd</p>
        </div>
      </div>
      <div class="single-service">
        <img src="./pic-4.jpg">
        <div class="overlay"></div>
        <div class="service-desc">
          <h3>hair style</h3>
          <hr>
          <p>avaakhf hadsas afa f f fsd efsf dsf ssf sd f sd</p>
        </div>
      </div>

    </div>


  </section>

  <section id="testimonial">
    <div class="tittle-text">
      <p>TESTIMONIALS</p>
      <h1>what our client says</h1>
    </div>
    <div class="testimonial-row">

      <div class="testimonial-colum">
        <div class="user">
          <img src="./img-1.jpg">
          <div class="user-info">
            <h3>umair gujjar <i class="fa fa-twitter-square" i></i></h3>
            <small>@umairgujjar1 </small>
          </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et at ex doloribus, rerum tempore ipsa ea ipsam
          obcaecati, corrupti delectus excepturi aliquam accusantium dolorem, fugiat hic iusto asperiores! Pariatur,
          aspernatur.</p>
      </div>
      <div class="testimonial-colum">
        <div class="user">
          <img src="./img-2.jpg">
          <div class="user-info">
            <h3>RANA Muzamil <i class="fa fa-twitter-square" i></i></h3>
            <small>@rana muzamil1 </small>
          </div>
        </div>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et at ex doloribus, rerum tempore ipsa ea ipsam
          obcaecati, corrupti delectus excepturi aliquam accusantium dolorem, fugiat hic iusto asperiores! Pariatur,
          aspernatur.</p>
      </div>
      <div class="testimonial-colum">
        <div class="user">
          <img src="./img-3.jpg">
          <div class="user-info">
            <h3>Zohaib Sajjad <i class="fa fa-twitter-square" i></i></h3>
            <small>@zohaib sajjad1 </small>
          </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et at ex doloribus, rerum tempore ipsa ea ipsam
          obcaecati, corrupti delectus excepturi aliquam accusantium dolorem, fugiat hic iusto asperiores! Pariatur,
          aspernatur.</p>
      </div>
    </div>
  </section>

  <section id="footer">
    <img src="./footer-img.png" class="footer-img">
    <div class="tittle-text">
      <p>CONTACT US</p>
      <h1>STAY CONNECTED</h1>
    </div>
    <div class="footer-row">
      <div class="footer-left">
        <h3>Openiing Hour</h3>
        <p>sunday to friday</p>
        <p>07:30AM to 7:30PM 
        </p>
      </div>
      <div class="footer-right">
        <h3>Get in touch</h3>
        <p>Rohilainwali muzaffergarh</p>
        <p>umair.gujar0303@gmail.com</p>
        <p>03097136235</p>
      </div>
      
     
    </div>
   
    <div class="copyright">
    <p>copyright@umair gujjar</p>
  </div>



  </section>


<script>var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 1000,
	speedAsDuration: true
});</script>


</body>

</html>