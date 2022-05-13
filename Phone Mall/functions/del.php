<?php
 include_once("../dbcon.php");
    // script to remove product from cart
 if (isset($_GET['pro'])) {
    $del_pro_id=$_GET['pro'];
    $del_pro_qry="DELETE FROM `cart` WHERE `cart_id`=$del_pro_id";
    $execute= mysqli_query($con, $del_pro_qry);
    if($execute==true){
      header('location:../cart.php');
    }
 }
    

?>