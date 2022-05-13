<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

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

<!-- contact info section starts  -->

<section class="info-container">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map"></i>
            <h3>address</h3>
            <p>Dudley, United Kingdom - DY1 4BP</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>sidhumandeep0003@gmail.com</p>
           
        </div>

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>number</h3>
            <p>(+44) 07466670512</p>
            
        </div>

    </div>

</section>

<!-- contact info section ends -->

<!-- contact section starts  -->

<section class="contact">

    <form action="">
        <h3>get in touch</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe provident nihil non unde, quia magnam quibusdam ad obcaecati nam animi?</p>
        <div class="inputBox">
            <input type="text" placeholder="your name">
            <input type="email" placeholder="your email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="your number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>


</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <div class="content">
        <h3>newsletter</h3>
        <p>subscribe for weelky newsletter.</p>
    </div>

    <form action="">
        <input type="email" name="" placeholder="enter your email" id="" class="email">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->



 











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