<?php 
ob_start();
session_start();
include 'config.php';
if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
  header("location:product_master.php");
}

 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title> Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">
          <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet">
            <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
            <!-- NProgress -->
            <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
            <!-- bootstrap-wysiwyg -->
            <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

            <!-- Custom styling plus plugins -->
            <link href="build/css/custom.min.css" rel="stylesheet">
  
</head>

<body>
  <div class="login-wrap">
  <?php 
  if (isset($_GET['err'])) {
  if ($_GET['err']==400) {
?>
  
                   <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Error!</strong> Unautherised Access! PLease Login To continue
                                  </div>


<?php 
}
elseif ($_GET['err']==500) {
 ?>

  <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Alert!</strong> Log Out Successfull.
                                  </div>

  <?php }
  elseif ($_GET['err']==600) {
   
   ?>   
  
              <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4><i class="icon fa fa-warning"></i>Warning!</h4>
                Wrong Credentials! Please Try Again.
                                  </div>
  <?php 
  }elseif($_GET['err']==700) {
    # code...
 

   ?>  
    <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4>Sign Up Successfull..</h4>
                
                                  </div>
   <?php 
   }
   } ?>            
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
    <div class="login-form">
      <div class="sign-in-htm">
      <form action="" method="post">
        <div class="group">
          <label for="user"  class="label">Username</label>
          <input id="user" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" name="password" type="password" class="input" data-type="password">
        </div>
        <!-- <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div> -->
        <div class="group">
          <input type="submit" class="button" name="login"  value="Login">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          
        </div>
      </div>
      
        
      <!-- Signup -->
      <div class="sign-up-htm">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="user" name="sign_username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" name="sign_password" type="password" class="input" data-type="password">
        </div>
        
        <div class="group">
          <label for="pass" class="label">Email Address</label>
          <input id="pass" name="email" type="text" class="input">
        </div>
        <div class="group">
          <input type="submit" name="sign_up" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>
<?php
include 'config.php';
if(isset($_POST['sign_up'])){
$sign_username=$_POST['sign_username'];
$sign_password=md5($_POST['sign_password']);
$email=$_POST['email'];
$query="INSERT INTO login VALUES ('','','$sign_username', '$sign_password', '$email')";
$e_q=mysqli_query($conn,$query);
header("location:index.php?err=700");
}
 ?>
  
</body>
</html>

<?php 
include 'config.php';
if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=md5($_POST['password']);

  $login_query="SELECT * FROM `login` WHERE `username`='$username' and `password`='$password'";
  $exe_login_query=mysqli_query($conn,$login_query);
  $data_login=mysqli_fetch_array($exe_login_query);
  if ($data_login && mysqli_num_rows($exe_login_query)==1) {


      
      $_SESSION['username']=$data_login['username'];
      $_SESSION['user_id']=$data_login['user_id'];

      header("location:product_master.php");

   }
   else{
  header("location:index.php?err=600");
  }
 
    }

   ?>
