<?php
$con=mysqli_connect("localhost","root","","phone-mall");
// check database is connected or not
if($con==true){
	echo "";
}
else{
	echo "Databse not Connected";
}
?>