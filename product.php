<?php

@include 'config.php';

session_start();{
  $user_name = $_SESSION['user_name'];
if (isset($_GET['id'])){
  // Sanitize the provided item id to prevent SQL injection attacks
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT * FROM products WHERE id= $id";
$nelly=mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($nelly)) {
$a = $row['product_name'];
$b = $row['product_img_name'];
$c = $row['price'];
}
$product = "INSERT INTO selec_pdt(name, product_name, product_price, image) VALUES ('$user_name','$a','$c','$b')";
if(mysqli_query($conn, $product)){
  $error[] = 'Has Been Added to Cart Successfully';

  header('location:mycart.php');
  // echo "Records added successfully.";
} else{
  // echo "ERROR: Could not able to execute. " . mysqli_error($conn);
}

  }
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!-- <link rel="stylesheet" href="product.css"> -->
   <link rel="stylesheet" href="header.css"> 
   <link rel="stylesheet" href="product/product.css"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<style>
   .error-msg{

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
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="product.php">Products</a>
        <a href="mycart.php">My Cart</a>
        <a href="#"><?php echo $_SESSION['user_name']?></a>
        <a href="logout.php">Logout</a>
    </nav>
</section>
   <!------------------CONTAINERRRRRRRRRRRRRRRRRR------------------>
   <div class="container">
   <?php

if(isset($error)){

   foreach($error as $error){

      echo '<span class="error-msg">'.$error.'</span>';

   };

};

?>

      <h3 class="title"> DIOR </h3>

      <div class="products-container">

         <div class="product" data-name="p-1">
            <img src="product/dior1.jpg" alt="">
            <h3>MISS DIOR</h3>
            <div class="price">$60.00</div>
         </div>

         <div class="product" data-name="p-2">
            <img src="product/dior2.jpg" alt="">
            <h3>JADORE ABSOLU</h3>
            <div class="price">$72.00</div>
         </div>
         

         <div class="product" data-name="p-3">
            <img src="product/dior3.jpg" alt="">
            <h3>POISON GIRL</h3>
            <div class="price">$60.00</div>
         </div>
      </div>
   </div>
   <!----------------DIOR CONTAINER ENDING----------------->

   <div class="container">

      <h3 class="title"> LV </h3>

      <div class="products-container">

         <div class="product" data-name="p-4">
            <img src="product/caldreamm.jpg" alt="">
            <h3>CALFORNIA DREAM<h3>
                  <div class="price">$150.00</div>
         </div>

         <div class="product" data-name="p-5">
            <img src="product/heru.jpg" alt="">
            <h3>HEURSE D ABSENCE </h3>
            <div class="price">$200.00</div>
         </div>

         <div class="product" data-name="p-6">
            <img src="product/imagination.jpg" alt="">
            <h3>IMAGINATION</h3>
            <div class="price">$120.00</div>
         </div>

      </div>

   </div>


   <!----------------------------------------------------------------------->
   <div class="container">

      <h3 class="title"> CHANEL </h3>

      <div class="products-container">

         <div class="product" data-name="p-7">
            <img src="product/coco1.jpg" alt="">
            <h3>COCO CHANEL</h3>
            <div class="price">$200.00</div>
         </div>

         <div class="product" data-name="p-8">
            <img src="product/coco2.jpg" alt="">
            <h3>CHANCE CHANEL</h3>
            <div class="price">$220.00</div>
         </div>

         <div class="product" data-name="p-9">
            <img src="product/coco3.jpg" alt="">
            <h3>COCO CHANEL</h3>
            <div class="price">$130.00</div>
         </div>
      </div>
   </div>

   <div class="container">

      <h3 class="title"> VICTORIA SECRETS </h3>

      <div class="products-container">

         <div class="product" data-name="p-10">
            <img src="product/vs1.jpg" alt="">
            <h3>PEAR GLACE</h3>
            <div class="price">$100.00</div>
         </div>

         <div class="product" data-name="p-11">
            <img src="product/vs2.jpg" alt="">
            <h3>SANTAL STAR</h3>
            <div class="price">$140.00</div>
         </div>

         <div class="product" data-name="p-12">
            <img src="product/vs3.jpg" alt="">
            <h3>AQUA KISS</h3>
            <div class="price">$160.00</div>
         </div>
      </div>
   </div>
   <!---------------PREVIRE STARTSSSSSS----------->
   <div class="products-preview">


      <div class="preview" data-target="p-1">
         <i class="fas fa-times"></i>
         <img src="product/dior1.jpg" alt="">
         <h3>MISS DIOR</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>A captivating and feminine fragrance that combines floral and fruity notes, embodying elegance and
            sophistication.</p>
         <div class="price">$60.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <!-- <a href="#" class="cart">add to cart</a> -->
            <a href='product.php?id=<?php echo '1'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>

      <div class="preview" data-target="p-2">
         <i class="fas fa-times"></i>
         <img src="product/dior2.jpg" alt="">
         <h3>JADORE ABSOLU</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>An exquisite floral bouquet with a modern and sensual twist, featuring notes of blood orange, rose, jasmine,
            vanilla, and musk.</p>
         <div class="price">$72.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
           <a href='product.php?id=<?php echo '2'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>

      <div class="preview" data-target="p-3">
         <i class="fas fa-times"></i>
         <img src="product/dior3.jpg" alt="">
         <h3>POISON GIRL</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>A bold and seductive fragrance aimed at the young and rebellious, with a blend of sweet and spicy notes,
            leaving a lasting impression.</p>
         <div class="price">$60.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href='product.php?id=<?php echo '3'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>
      <!----------------DIROE CONTAINER PREVIEW ENDS-->
      <div class="preview" data-target="p-4">
         <i class="fas fa-times"></i>
         <img src="product/caldreamm.jpg" alt="">
         <h3>CALFORNIA DREAM</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p> A fresh and uplifting fragrance capturing the vibrant and sunny California lifestyle, with citrusy notes
            and a touch of exotic flowers.</p>
         <div class="price">$150.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href='product.php?id=<?php echo '4'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>

      <div class="preview" data-target="p-5">
         <i class="fas fa-times"></i>
         <img src="product/heru.jpg" alt="">
         <h3>HEURSE D'ABSENCE</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>A delicate and nostalgic perfume with powdery and floral accords, evoking elegance and romanticism.</p>
         <div class="price">$200.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href='product.php?id=<?php echo '5'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>

      <div class="preview" data-target="p-6">
         <i class="fas fa-times"></i>
         <img src="product/imagination.jpg" alt="">
         <h3>IMAGINATION</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>A modern and mysterious fragrance celebrating creativity, with woody and aromatic notes that inspire and
            transport you to a world of possibilities.</p>
         <div class="price">$120.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href='product.php?id=<?php echo '6'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>
      <!--------------------lv ends here-->
      <div class="preview" data-target="p-7">
         <i class="fas fa-times"></i>
         <img src="/product/coco1.jpg" alt="">
         <h3>COCO CHANEL</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="fas fa-star"></i>
            <span>( 250 )</span>
         </div>
         <p> A timeless and sophisticated perfume by Chanel, blending floral and oriental notes to create an iconic
            fragrance.</p>
         <div class="price">$200.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href='product.php?id=<?php echo '7'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>
      <div class="preview" data-target="p-8">
         <i class="fas fa-times"></i>
         <img src="product/coco2.jpg" alt="">
         <h3>CHANCE CHANEL</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
            <span>( 250 )</span>
         </div>
         <p>A lively and youthful perfume by Chanel, combining floral and fruity notes for a fresh and playful scent
            that embraces unexpected possibilities.</p>
         <div class="price">$220.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href='product.php?id=<?php echo '8'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>

      <div class="preview" data-target="p-9">
         <i class="fas fa-times"></i>
         <img src="product/coco3.jpg" alt="">
         <h3>COCO CHANEL</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p> A timeless and sophisticated perfume by Chanel, blending floral and oriental notes to create an iconic
            fragrance.</p>
         <div class="price">$130.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href='product.php?id=<?php echo '9'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>
      <!---------coco ends----------------->
      <div class="preview" data-target="p-10">
         <i class="fas fa-times"></i>
         <img src="product/vs1.jpg" alt="">
         <h3>PURE GLACE</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>

            <span>( 250 )</span>
         </div>
         <p>A cool and refreshing perfume by Victoria Secret, combining floral and fruity notes for a delicate and
            invigorating fragrance.</p>
         <div class="price">$100.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
           <a href='product.php?id=<?php echo '10'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>
      <div class="preview" data-target="p-11">
         <i class="fas fa-times"></i>
         <img src="product/vs2.jpg" alt="">
         <h3>SANTAL STAR</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Santal Star is a captivating perfume by Victorias Secret, featuring the warm and woody notes of sandalwood,
            creating a sensual and alluring fragrance.</p>
         <div class="price">$140.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
           <a href='product.php?id=<?php echo '11'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>
      <div class="preview" data-target="p-12">
         <i class="fas fa-times"></i>
         <img src="product/vs3.jpg" alt="">
         <h3>AQUA KISS</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>A refreshing perfume by Victorias Secret, embodying a gentle ocean breeze with its aquatic and floral notes,
            creating a serene and pure fragrance experience.</p>
         <div class="price">$160.00</div>
         <div class="buttons">
            <a href="#" class="buy">buy now</a>
           <a href='product.php?id=<?php echo '12'; ?>'>
              Add to Cart
            </a>
         </div>
      </div>
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
      let preveiwContainer = document.querySelector('.products-preview');
      let previewBox = preveiwContainer.querySelectorAll('.preview');

      document.querySelectorAll('.products-container .product').forEach(product => {
         product.onclick = () => {
            preveiwContainer.style.display = 'flex';
            let name = product.getAttribute('data-name');
            previewBox.forEach(preview => {
               let target = preview.getAttribute('data-target');
               if (name == target) {
                  preview.classList.add('active');
               }
            });
         };
      });

      previewBox.forEach(close => {
         close.querySelector('.fa-times').onclick = () => {
            close.classList.remove('active');
            preveiwContainer.style.display = 'none';
         };
      });

      const element = document.querySelector('.error-msg');




setTimeout(() => {

  element.parentNode.removeChild(element);

}, 3000);
   </script>




</body>

</html>