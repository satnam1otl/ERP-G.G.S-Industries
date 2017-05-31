  <?php 
  include 'config.php';
$customer_id=$_GET['customer_id'];

$q="select * from customer_master where `id`='$customer_id'";
$e=mysqli_query($conn,$q);
$data=mysqli_fetch_array($e);
?> 
 
    <?php 
    include 'header.php'; ?>

          <body class="nav-md" >
            <?php 
            include 'sidebar.php';
             ?>

                  <!-- page content -->
                  <div class="right_col" role="main">
                    <div class="">

                      <div class="page-title">
                        <div class="title_left col-md-1 col-xs-6">
                          <h3><i class="fa fa-user" aria-hidden="true"></i></i> Customer Master</h3>
                        </div>

                        
                      </div>

                        <div class="clearfix"></div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="x_panel">
                             <?php 
                              if (isset($_GET['err'])) {
                                if ($_GET['err']==200) {
                                  ?>
                                  <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Updated!</strong> Your Data is Updated
                                  </div>

                                  <?php 
                                }
                               }
                                 ?>

                             <div class="x_title">
                            <h2>General Details</h2>

                            <div class="clearfix"></div>
                          </div>
                            <form class="form-horizontal" method="POST">
                                <div class="row">
                                 <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">First Name* :</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="first_name" class="form-control" id="FirstName@" value="<?php echo $data['first_name'] ?>" placeholder="" required>
                                    </div>
                                  </div>
                                </div> 

                                <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Last Name* :</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="last_name" class="form-control" id="LastName@" value="<?php echo $data['last_name'] ?>" placeholder="" required>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                               <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Address* :</label>
                                  <div class="col-sm-8">
                                   <textarea class="form-control" value= "<?php echo $data['address']?>" name="address" required></textarea>
                                  </div>
                                </div>
                              </div> 

                              <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">City* :</label>
                                  <div class="col-sm-8">
                                    <input type="text" value="<?php echo $data['city'] ?>" name="city" class="form-control" id="City@" placeholder="" required>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">State* :</label>
                                <div class="col-sm-8">
                                  <input type="text" value="<?php echo $data['state'] ?>" name="state" class="form-control" id="State@" placeholder="" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-4 control-label">Personal Contact:</label>
                                <div class="col-sm-8">
                                  <input type="text" value="<?php echo $data['personal_contact'] ?>" name="personal_contact" class="form-control" id="Contactperson@" placeholder="" >
                                </div>
                              </div>
                            </div>
                          </div>
                         <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Contact No* :</label>
                                <div class="col-sm-8">
                                  <input type="text" value="<?php echo $data['contact_no']; ?>" name="contact_no" class="form-control" id="ContactNo@" placeholder="" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Email :</label>
                                <div class="col-sm-8">
                                  <input type="text" value="<?php echo $data['email'] ?>" name="email" class="form-control" id="Contactperson@" placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Service Tax No* :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="s_t_n" value="<?php echo $data['service_tax_no'] ?>" class="form-control" id="ServicaeTaxNo@" placeholder="" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">VAT No* :</label>
                                <div class="col-sm-8">
                                  <input type="text" value="<?php echo $data['vat_no'] ?>" name="v_n" class="form-control" id="VATNo@" placeholder="" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="form-group">
                            <div class="col-sm-8">
                             <button type="submit" name="update" class="btn  btn-info">Update</button>
                             <input class="btn btn-default" type="reset" value="Reset">
                           </div>
                         </div>
                       </div>
                     </form><br></div>
        </div>

        <!-- x-pannel ends -->
      </div>
      <!-- col md 1 xs md end -->
    </div>
    <!-- row ends -->
  <?php
  include 'config.php';
                  if(isset($_POST['update']))
                  {
                    $f_name=$_POST['first_name'];
                    $l_name=$_POST['last_name'];
                    $address=$_POST['address'];
                    $contact=$_POST['contact_no'];
                    $s_t_n=$_POST['s_t_n'];
                    $state= $_POST['state'];
                    $city= $_POST['city'];
                    $p_contact= $_POST['personal_contact'];
                    $vat_no= $_POST['v_n'];
                    $email=$_POST['email'];

                    $query_var="UPDATE `customer_master` SET `first_name`='$f_name',`last_name`='$l_name',`address`='$address',`contact_no`='$contact',`service_tax_no`='$s_t_n',`state`='$state',`city`='$city' ,`personal_contact`='$p_contact',`vat_no`='$vat_no' ,`email`='$email' WHERE `id`='$customer_id'";

                    mysqli_query($conn,$query_var);
                     header("location:edit_customer_vender.php?customer_id=$customer_id&err=200");
                  } 
   ?>

   <!-- Item Table -->
   <div class="clearfix"></div>
   <!-- Items Table starts -->
   
  <!-- row ends -->
</div>
</div>
</div>

                    <!-- /page content -->

                    <!-- footer content -->
                    <?php 
                    include 'footer.php'; ?>

              