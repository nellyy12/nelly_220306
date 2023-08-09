<?php
@include 'config.php';

session_start();

if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = $_POST['password'];
  $select = "SELECT * FROM user_form WHERE email = '$email'";

  $result = mysqli_query($conn, $select);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    // Use password_verify() to check the hashed password against the user input
    if (password_verify($pass, $row['password'])) {
      if ($row['user_type'] == 'admin') {
        $_SESSION['admin_name'] = $row['admin'];
        header('location:teacher.php');
      } elseif ($row['user_type'] == 'user') {
        $_SESSION['user_name'] = $row['name'];
        header('location:afterlogin.php');
      }
    } else {
      $error[] = 'Incorrect email or password!';
    }
  } else {
    $error[] = 'Incorrect email or password!';
  }
}

if (isset($_POST['reg'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = $_POST['password'];
  $cpass = $_POST['cpassword'];

  $select = "SELECT * FROM user_form WHERE email = '$email'";
  $result = mysqli_query($conn, $select);

  if (mysqli_num_rows($result) > 0) {
    $error[] = 'User already exists!';
  } else {
    if ($pass != $cpass) {
      $error[] = 'Passwords do not match!';
    } else {
      // Use password_hash() to hash the password with PASSWORD_DEFAULT algorithm
      $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

      // Store the hashed password in the database
      $insert = "INSERT INTO user_form(name, email, password) VALUES('$name','$email','$hashedPassword')";
      mysqli_query($conn, $insert);
      $error[] = 'You have been registered successfully';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="author" content="Nelly kc" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta charset="UTF-8" />
  <title>Fragrance Haven</title>
  <title>Login/Signup Page</title>
  <link rel="stylesheet" type="text/css" href="loginn/login.css">
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<style>
  .error-msg {

    text-align: center;

    display: block;

    color: rgb(255, 254, 254);

    font-size: 20px;

    margin: 30px 0px;

    background: rgb(110, 0, 21);

    border-radius: 50px;

    padding: 10px;

    animation: fadeOut 3.2s ease-in-out;

  }
</style>

<body>
  <!-- Header -->
  <section class="header">
    <a href="home.html" class="logo">Fragrance Haven</a>
    <nav class="navbar">
      <a href="index.php">Home</a>
      
      <!-- <a href="/contact/contact.html">Contact Me</a> -->
      <a href="#">Login/Signup</a>
    </nav>
  </section>

  <div class="container">
    <div class="form-container">
      <?php

      if (isset($error)) {

        foreach ($error as $error) {

          echo '<span class="error-msg">' . $error . '</span>';

        }
        ;

      }
      ;

      ?>
      <form id="login-form" action="" class="form" method="post">
        <h1>Login</h1>
        <input type="text" id="username" name="email" placeholder="test@gmail.com" required>
        <input type="password" id="password" name="password" placeholder="*********" required>
        <div class="form-options">
          <div class="remember-me">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <a href="#" class="forgot-password">Forgot Password?</a>
        </div>
        <button name="login" type="submit">Login</button>
        <div class="form-switch">
          <p>Don't have an account? <a href="#" class="switch-link" data-form="signup-form">Sign Up</a></p>
        </div>
      </form>

      <form id="signup-form" class="form" method="post">
        <h1>Sign Up</h1>
        <input type="text" id="name" name="name" placeholder="Name" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="password" id="signup-password" name="password" placeholder="Password" required>
        <input type="password" id="confirm-password" name="cpassword" placeholder="Confirm Password" required>
        <div class="form-options">
          <div class="remember-me">
            <input type="checkbox" id="signup-remember-me">
            <label for="signup-remember-me">Remember me</label>
          </div>
        </div>
        <input name="reg" type="submit" value="Signup">
        <div class="form-switch">
          <p>Already have an account? <a href="#" class="switch-link" data-form="login-form">Login</a></p>
        </div>
      </form>
    </div>
  </div>

  <!--------------footer starts------------->
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Quick Links</h3>
        <a href="home.html"><i class="fas fa-angle-right"></i>Home</a>
        <a href="about.html"><i class="fas fa-angle-right"></i>About</a>
        <a href="#"><i class="fas fa-angle-right"></i>Product</a>
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
  <script src="loginn/script.js"></script>
</body>

</html>