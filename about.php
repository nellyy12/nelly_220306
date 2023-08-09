
<?php

@include 'config.php';

session_start();{
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ABOUT US/about.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Document</title>
</head>
<body>
   <!-- Header -->
<section class="header">
  <a href="#" class="logo">Fragrance Haven</a>
  <nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="product.php">Products</a>
    <a href="mycart.php">My Cart</a>
    <a href="#"><?php echo $_SESSION['user_name']?></a>
    <a href="logout.php">Logout</a>
  </nav>
</section>

 <!-------------- ABOUT US-------------->
    <div class="about-section">
    <div class="inner-container">
          <h1>About Us</h1>
          <p class="text">
            We are an online-based Franfrance Store in Nepal, 
            exporting premium quality products sourced from outside the country. 
            As an all-women-based business, we are committed to increasing women empowerment and providing equal opportunities.
             Our curated collection offers exquisite items to enhance your lifestyle, while also supporting a more inclusive society.
             Join us in promoting women empowerment and enjoy the excellence of our products.
          </p>
    </div>  
  </div>


  <!-------------- OUR TEAM -------------->
  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="ABOUT US/team1.jpg" alt="Jane" >
        <div class="container">
          <h2>Jane Doe</h2>
          <p class="title">Marketing Coordinator:</p>
          <p> Implements marketing strategies, manages social media, and coordinates advertising efforts.</p>
          <p>jane@gamil.com</p>
          
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="ABOUT US/team2.jpg" alt="Rosie" >
        <div class="container">
          <h2>Rosie Adem</h2>
          <p class="title">Store Manager</p>
          <p>Oversees store operations, manages staff, inventory, and customer satisfaction.</p>
          <p>rossadem@gmail.com</p>
          
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="ABOUT US/team3.jpg" alt="Zendya" >
        <div class="container">
          <h2>Zendya kernel</h2>
          <p class="title">Sales Consultant </p>
          <p>Assists customers, provides product information, and completes sales transactions.</p>
          <p>zendya@gamil.com</p>
          
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="ABOUT US/team4.jpg" alt="Isabella" >
        <div class="container">
          <h2>Isabella Gomez </h2>
          <p class="title">Fragrance Specialist</p>
          <p> Offers personalized advice, helps customers select fragrances, and provides detailed scent information.</p>
          <p>isabella21@gmai.com</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Existing card elements -->
  </div>
  <button id="seeMoreButton" class="button">See More</button>
  <div class="row hidden">
    <!-- Four additional card elements -->
    <div class="column">
      <div class="card">
        <img src="ABOUT US/team5.jpg" alt="Taylor" >
        <div class="container">
          <h2>Taylor swift</h2>
          <p class="title">Store Manager</p>
          <p>Oversees store operations, manages staff, inventory, and customer satisfaction.</p>
          <p>tyalor12@gmail.com</p>
          
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="ABOUT US/team6.jpg" alt="Selena" >
        <div class="container">
          <h2>Selena Gomex</h2>
          <p class="title">Sales Consultant </p>
          <p>Assists customers, provides product information, and completes sales transactions.</p>
          <p>selena@gamil.com</p>
          
        </div>
      </div>
    </div>

<div class="column">
      <div class="card">
        <img src="ABOUT US/team7.jpg" alt="Charlie" >
        <div class="container">
          <h2>Charlie Kerry</h2>
          <p class="title">Sales Consultant </p>
          <p>Assists customers, provides product information, and completes sales transactions.</p>
          <p>charlie@gamil.com</p>
          
        </div>
      </div>
    </div>


    <div class="column">
      <div class="card">
        <img src="ABOUT US/team8.jpg" alt="Emma" >
        <div class="container">
          <h2>Emma Doe</h2>
          <p class="title">Fragrance Specialist</p>
          <p> Offers personalized advice, helps customers select fragrances, and provides detailed scent information.</p>
          <p>Emma@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
  </div>
 <!-------------- FOOTER-------------->
 <section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>Quick Links</h3>
      <a href="home.html"><i class="fas fa-angle-right"></i>Home</a>
      <a href="about.html"><i class="fas fa-angle-right"></i>About</a>
      <a href="package.html"><i class="fas fa-angle-right"></i>Shop</a>
      <a href="book.html"><i class="fas fa-angle-right"></i>Book</a>
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
      <a href="#"
        ><i class="fas fa-envelope"></i> nxlsss12@gmail.com</a
      >
      <a href="#"><i class="fas fa-map"></i>Kathmandu-Budhanilkantha, 44600</a>
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
    Coursework done by <span>Nelly KC</span> 
  </div>
</section>

  
  <!-------------- JS SCRIPT-------------->

  <script>
    document.getElementById("seeMoreButton").addEventListener("click", function() {
      var hiddenRow = document.querySelector(".row.hidden");
      hiddenRow.classList.remove("hidden");
      document.getElementById("seeMoreButton").style.display = "none";
    });
  </script>
  

</body>
</html>