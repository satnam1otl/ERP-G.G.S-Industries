<?php 
include 'config.php';
$customer_id=$_GET['customer_id'];
$q="DELETE FROM `customer_master` WHERE `id`= '$customer_id'";
$e_q=mysqli_query($conn,$q);

header("location:customer_vender.php");


 ?>