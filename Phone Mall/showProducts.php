
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="home.php" class="logo"> <i class="fas fa-store"></i> Phone Mall </a>

    <form action="showProducts.php" class="search-form" method="POST">
        <input type="search" name="search-product" id="search-box" placeholder="search here...">
        <button type="submit" name="searchPro"><i class="fas fa-search"></i></button>
    </form>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="login.php" class="fas fa-user"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends -->

<!-- side-bar section starts -->

<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        
        <h3>Team</h3>
        <a href="#">log out</a>
    </div>

    <nav class="navbar">
        <a href="home.php"> <i class="fas fa-angle-right"></i> home </a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about </a>
        <a href="products.php"> <i class="fas fa-angle-right"></i> products </a>
        <a href="contact.php"> <i class="fas fa-angle-right"></i> contact </a>
        <a href="login.php"> <i class="fas fa-angle-right"></i> login </a>
        <a href="register.php"> <i class="fas fa-angle-right"></i> register </a>
        <a href="cart.php"> <i class="fas fa-angle-right"></i> cart </a>
    </nav>

</div>

<!-- side-bar section ends -->

<!-- category section starts  -->



<!-- category section ends -->

<!-- products section starts  -->

<section class="products">

    <h1 class="heading"> Products <span>Found</span> </h1>

    <div class="box-container">

<?php
// search products function
    if(isset($_POST['searchPro'])) {
    include("dbcon.php");
   $product_keywords=$_POST['search-product'];
    $getProducts="SELECT * FROM `products` WHERE `title` LIKE '%$product_keywords%'";
      $run=mysqli_query($con, $getProducts);
    if(mysqli_num_rows($run) > 0){


      while($record=mysqli_fetch_array($run)){
        $id=$record['id'];
        $title=$record['title'];
        $price=$record['price'];
        $old_price=$record['old-price'];
        $img01=$record['img'];
        $img02=$record['img2'];



         if($run==true){
        echo "
         <div class='box'>
            <div class='image'>
                <img src='images/$img01' class='main-img' alt=''>
                <img src='images/$img02' class='hover-img' alt=''>
                <div class='icons'>
                    <a href='functions/functions.php?pro_id=$id' class='fas fa-shopping-cart'></a>
                    <a href='#' class='fas fa-search-plus'></a>
                    <a href='#' class='fas fa-heart'></a>
                    <a href='#' class='fas fa-share'></a>
                </div>
            </div>
            <div class='content'>
                <h3>$title</h3>
                <div class='price'>£$price <span>£$old_price</span></div>
                <div class='stars'>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star-half-alt'></i>
                </div>
            </div>
        </div>

        ";
        
     }
     else{
     
     }
      }
  }

else{
    echo "
        <script> alert('No Products Found') </script>

        ";
}


       }
      

?>
    </div>

</section>

<!-- products section ends -->

<!-- product banner section starts  -->



<!-- product banner section ends -->















<!-- footer section starts  -->

<section class="quick-links">

    <a href="home.php" class="logo"> <i class="fas fa-store"></i> Phone Mall </a>

    <div class="links">
        <a href="home.php"> home </a>
        <a href="about.php"> about </a>
        <a href="products.php"> products </a>
        <a href="contact.php"> contact </a>
        <a href="login.php"> login </a>
        <a href="register.php"> register </a>
        <a href="cart.php"> cart </a>
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

</section>

<section class="credit">

    <p> created by <span>Team</span> | all rights reserved! </p>

    <img src="images/card_img.png" alt="">

</section>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>