<?php 
include 'config.php';
$e_id=$_GET['e_id'];
$q="DELETE FROM `purchase_enquiry` WHERE `id`= '$e_id'";
$e_q=mysqli_query($conn,$q);

header("location:purchase_enquiry.php");


 ?>