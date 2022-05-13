<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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

<!-- about section starts  -->

<section class="about">

    <div class="image">
        <img src="images/about-img.png" alt="">
    </div>

    <div class="content">
        <h3>our story</h3>
        <p>The coming time is technology time. So, that is the main motive of us to go with this field rather than any other option. It enhanced our knowledge of new coming era and enhanced the senses of sensing new products.</p>
        
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- faq section starts  -->

<section class="faq">

    <h1 class="heading"> questions & <span>answers</span> </h1>

    <div class="accordion-container">

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to make websites?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
               Choose the perfect domain name and website design to start your own website.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to place order online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
               In the shopping cart preview you can see a list of the products you have chosen, together with their quantity and price. To continue, click "PROCEED TO CHECKOUT".
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to pay online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                You can use Google Pay to pay select online merchants that accept this type of payment method.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>is online payment safe?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
         Typically, an online bill pay service that is backed by a bank or a company that provides online banking services will be safe and reliable.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to contact service center?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
             For service you need to click on contact, you can get mobile no and email address as well.
            </p>
        </div>

    </div>

</section>

<!-- faq section ends -->

<!-- review section starts  -->

<section class="review">

    <h1 class="heading"> clients <span>review</span> </h1>

    

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                
                <h3>Mandeep Sidhu</h3>
                <span>designer</span>
                <p>A web designer is responsible for creating the design and layout of a website or web pages.</p>
            </div>

            <div class="swiper-slide slide">
                
                <h3>Manjinder Singh</h3>
                <span>designer</span>
                <p>A web designer is responsible for creating the design and layout of a website or web pages.</p>
            </div>

            

    </div>

</section>

<!-- review section ends -->













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