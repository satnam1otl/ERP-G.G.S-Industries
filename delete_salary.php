<?php 
include 'config.php';
$salary_id=$_GET['salary_id'];
$q="DELETE FROM `salary_master` WHERE `id`= '$salary_id'";
$e_q=mysqli_query($conn,$q);

header("location:salary_list.php");


 ?>