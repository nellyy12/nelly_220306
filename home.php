
<?php

@include 'config.php';

session_start();{

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="author" content="Nelly kc" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta charset="UTF-8" />

  <title>Fragrance Haven</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="style/stylesheet.css" />
</head>

<body>
   <!-- Header -->
   <section class="header">
    <a href="" class="logo">Fragrance Haven</a>
    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="product.php">Products</a>
      <a href="mycart.php">My Cart</a>
      <a href="#"><?php echo $_SESSION['user_name']?></a>
      <a href="logout.php">Logout</a>
    </nav>
  </section>

  <!-----------------------------------service-->


  <section class="banner">
    <div class="banner-overlay">
      <div class="containerr">
        <h1>Welcome to Fragrance Heaven</h1> <br />
        <p>The perfume that gets you noticed</p>
        <a href="product.php" class="btn">Explore </a>
      </div>
    </div>
  </section>


  <!---------- FEAUTURED PRODUCTES ---------->
  <div class="containerr">
  <h1 class="hi">FEATURED PRODUCTS</h1>
</div>

  <section class="services">
    <h3 class="main-heading"></h3>
    <div class="container">
      <div class="service">
        <img src="style/images/coco.jpg" alt="Chanel" />
        <h2>Coco Chanel</h2>
        
        <p></p>
      </div>
      <div class="service">
        <img src="style/images/dior.jpg" alt="Dior" />
        <h2>Dior</h2>
        
        <p></p>
      </div>
      <div class="service">
        <img src="style/images/ely.jpg" alt="" />
        <h2>Elyess</h2>
        
        <p></p>
      </div>
      <div class="service">
        <img src="style/images/gucci.jpg" alt="Gucci Items" />
        <h2>Gucci</h2>
        
        <p></p>
      </div>
      <div class="service">
        <img src="style/images/lv.jpg" alt="Chanel" />
        <h2>LV</h2>
        
        <p></p>
      </div>
      <div class="service">
        <img src="style/images/versace.jpg" alt="Dior" />
        <h2>Versace</h2>
        
        <p></p>
      </div>
      <div class="service">
        <img src="style/images/ari.jpg" alt="" />
        <h2>Arianaa</h2>
       
        <p></p>
      </div>
      <div class="service">
        <img src="style/images/victo.jpg" alt="Gucci Items" />
        <h2>Velvet Petals</h2>
        
        <p></p>
      </div>
    </div>
    </div>
  </section>
  <!--------------footer starts------------->
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="product.php"><i class="fas fa-angle-right"></i>Products</a>
        
      </div>
      <div class="box">
        <h3>Extra Links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
      </div>
      <div class="box">
        <h3>Contact Me</h3>
        <a href="#"><i class="fas fa-phone"></i>+977 9823289112</a>
        <a href="#"><i class="fas fa-phone"></i>01-4377700</a>
        <a href="#"><i class="fas fa-envelope"></i> nxlsss12@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Kathmandu-Budhanilkatha, 44600</a>
      </div>
      <div class="box">
        <h3>Follow Us</h3>
        <a href="https://www.facebook.com/nelly.kc.3"><i class="fab fa-facebook"></i>Facebook</a>
        <a href="https://twitter.com/NellyKc2"><i class="fab fa-twitter"></i>Twitter</a>
        <a href="https://www.instagram.com/_nxlsss._/"><i class="fab fa-instagram"></i>Instagram</a>
        <a href="https://www.linkedin.com/in/nelly-kc-0b0a81262/"><i class="fab fa-linkedin"></i>Linkedin</a>
      </div>
    </div>
    <div class="credit">
      Coursework done by <span>Nelly KC</span> | all rights reserved!
    </div>
  </section>
</body>

</html>