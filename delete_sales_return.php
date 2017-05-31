<?php 
include 'config.php';
$s_id=$_GET['s_id'];
$q="DELETE FROM `sales_return` WHERE `id`= '$s_id'";
$e_q=mysqli_query($conn,$q);

header("location:sales_return.php");


 ?>