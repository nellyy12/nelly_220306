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
   <title>Document</title>
   <!-- <link rel="stylesheet" href="product.css"> -->
   <link rel="stylesheet" href="success.css">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<section class="header">
    <a href="home.html" class="logo">Fragrance Haven</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="product.php">Products</a>
        <a href="mycart.php">My Cart</a>
        <a href="#"><?php echo $_SESSION['user_name']?></a>
        <a href="logout.php">Logout</a>
    </nav>
</section>
<div class="container">
    <div class="success-message" id="successMessage">
      Your order has been successfully placed! Thank you for choosing us!
    </div>
    <!-- <button class="" href id="goBackButton">Go Back</button> -->
    <button class="go-back-btn" onclick="window.location.href='home.php'">Go to home</button>
  </div>

<!-------footer-->

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
            <a href="#"><i class="fas fa-envelope"></i> nxlsss12@gmail.com</a>
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

   <script>
    // ... existing JavaScript code ...

// Wait for the DOM to load before showing the success message
document.addEventListener("DOMContentLoaded", function() {
  // Get the success message element and the go back button element
  const successMessage = document.getElementById("successMessage");
  const goBackButton = document.getElementById("goBackButton");

  // Show the success message
  successMessage.style.display = "block";

  // After a delay, hide the success message
  setTimeout(function() {
    successMessage.style.display = "none";
  }, 5000); // Change 5000 to the desired time (in milliseconds) for the message to stay visible

  // Handle the go back button click
  goBackButton.addEventListener("click", function() {
    // You can modify this to navigate to a specific page if needed
    history.back(); // Go back to the previous page
  });
});

    </script>
</body>
</html>