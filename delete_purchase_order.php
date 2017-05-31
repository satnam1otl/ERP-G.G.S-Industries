<?php 
include 'config.php';
$o_id=$_GET['o_id'];
$q="DELETE FROM `purchase_order` WHERE `id`= '$o_id'";
$e_q=mysqli_query($conn,$q);

header("location:purchase_order.php");


 ?>