<?php

// Register user function
if (isset($_POST['register'])) {
	// include databae
	include("../dbcon.php");
	// catching values coming from form
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	// query to insert records in user table
     $insert_records="INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
     $run=mysqli_query($con, $insert_records);
     if($run==true){
     	echo "<script>alert('Account Created Successfully. Thank You!!')</script>";
     	header("location:../login.php");
     }
     else{
     
     }
}


// script for user login
if (isset($_POST['login'])) {
	// include databae
	include("../dbcon.php");
	$email = $_POST['email'];
	$password = $_POST['password'];
	// remove special character from name and password
    // $email = mysql_real_escape_string($_POST['email']);
    // $password = sha1(mysql_real_escape_string($_POST['password']));
    // query for login
    $login_query ="SELECT * FROM `users` WHERE  `email` = '$email' AND `password` = '$password'";
    print $login_query;
       $result=mysqli_query($con, $login_query);
        if(mysqli_num_rows($result) > 0){
        	session_start();
        $_SESSION['user'] = '$user';
        header("location:../products.php");
        }
      
    else {
        echo '<br>Access denied!';

    }
}

// Add products into cart
if (isset($_GET['pro_id'])) {
	include("../dbcon.php");
	$pro_id=$_GET['pro_id'];
	$checkProInCart="SELECT * FROM CART WHERE `product_id`='$pro_id'";
	 $runQry=mysqli_query($con, $checkProInCart);
	 if(mysqli_num_rows($runQry) > 0){
	 	echo "<script>alert('This Product is Already Exist in Cart. Please Checkout Cart Page. Thank You!! ')</script>";
	 
	 }



else{

	$qty=1;
    $user_ip=1;
    	// query to insert products into cart
     $add_to_cart="INSERT INTO `cart`(`product_id`, `qty`, `user_ip`) VALUES ('$pro_id','$qty','$user_ip')";
     $run=mysqli_query($con, $add_to_cart);
     if($run==true){
     	echo "<script>alert('Product Added to cart successfully!!')</script>";
     	header('location:../products.php');
     }
     else{
   
     }
     }
 }

 // show products on search
 if (isset($_POST['searchPro'])) {
 	$keywords=$_POST['search-product'];
include("dbcon.php");
    $getProducts="SELECT * FROM `products` WHERE `title`='$keywords'";
      $run=mysqli_query($con, $getProducts);
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
    

?>