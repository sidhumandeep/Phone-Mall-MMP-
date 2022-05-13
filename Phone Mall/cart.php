<?php

function showProductsToCart(){
    include("dbcon.php");
    $getProId="SELECT * FROM `cart`";
      $run=mysqli_query($con,  $getProId);
      if(mysqli_num_rows($run) < 1){
echo "<tr >
  <td colspan='6' style='font-size:2.4rem;padding:60px 0'>  Your Cart is Empty Please Shop Now!! <br> <br>  <a href='products.php' class='shop-btn' style='display:inline-block; background:#000; color:#fff; padding:12px 30px;'>Shop Now </a></td>

   
</tr>
    ";
      }


      else{
      while($record=mysqli_fetch_array($run)){
        // get data from cart
        $cart_id=$record['cart_id'];
        $pro_id=$record['product_id'];
        $qty=$record['qty'];
        // search product with id present in cart
                      // search product with id present in cart
        $getProducts="SELECT * FROM `products` WHERE `id`='$pro_id'";
         $go=mysqli_query($con, $getProducts);
               while($data=mysqli_fetch_array($go)){
                $id=$data['id'];
                $title=$data['title'];
               $price=$data['price'];
               $total= $price * $qty;
               $img01=$data['img'];
                    echo "        <tr>
            <td><img src='images/$img01' width='80' alt=''></td>
            <td>$title</td>
            <td>$price</td>
            <td><input type='text' name='' value='$qty'></td>
            <td>$total</td>
            <td> <a href='functions/del.php?pro=$cart_id'>Remove</a></td>
            
        </tr>";
              
    }     
    }
}
        
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

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

<!-- shopping cart section starts  -->

<div id="cart-container">

    <div id="cart-with-items">
 <table>
    <thead>
        <tr>
            <th>Product Image</th>
        <th>Product Title</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
      
         <?php
        echo showProductsToCart();
            ?>
            
    </tbody>
</table>
    </div>


<!-- shopping cart section ends -->
















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