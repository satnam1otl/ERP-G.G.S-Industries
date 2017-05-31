<?php 
include 'config.php';
$r_id=$_GET['r_id'];
$q="DELETE FROM `purchase_return` WHERE `id`= '$r_id'";
$e_q=mysqli_query($conn,$q);

header("location:purchase_return.php");


 ?>