<?php 
include 'config.php';
$p_id=$_GET['p_id'];
$q="DELETE FROM `product_table` WHERE `id`= '$p_id'";
$e_q=mysqli_query($conn,$q);

header("location:product_master.php");


 ?>