  <?php 
  include 'config.php';
$r_id=$_GET['r_id'];

$q="select * from purchase_return where `id`='$r_id'";
$e=mysqli_query($conn,$q);
$data=mysqli_fetch_array($e);
?> 
<?php 
include 'header.php';
 ?> 

          <body class="nav-md" >
            <?php 
            include 'sidebar.php'; ?>
                  <!-- page content -->

                            <!-- page content -->
                  <div class="right_col" role="main">
                    <div class="">

                      <div class="page-title">
                        <div class="title_left col-md-1 col-xs-6">
                          <h3><i class="fa fa-share" aria-hidden="true"></i> Purchase Return</h3>
                        </div>

                    
                      </div>

                        <div class="clearfix"></div>

                    <div class="clearfix"></div>
                    <!-- General Details starts -->
                    <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
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
                        <div class="x_content">
                          <form class="form-horizontal" method="post">
                              <div class="row">
                               <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Purchase Return Number:</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="purchase_return_number" class="form-control" value="<?php echo $data['purchase_return_number'];?>" id="PurchaseOrderNo@" placeholder="">
                                  </div>
                                </div>
                              </div> 

                               <div class="col-md-6">
                                             <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Pay Mode :</label>
                                <div class="col-sm-8">
                                  <select class="form-control" value="<?php echo $data['paymode'];?>" name="paymode" id="PaymentMode@">
                                  <option>--Select--</option>
                                  <option>Cash</option>
                                  <option>Check</option>
                                  <option>Draft</option>
                                
                                </select>
                              </div>
                            </div>
                            <!--  -->
                          </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">

                             <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Prchase Order Number*:</label>
                              <div class="col-sm-8 col-xs-4">
                                <input type="text" value="<?php echo $data['purchase_order_number'];?>" name="purchase_order_number" class="form-control" id="PONo@"  required>
                              </div>
                            </div>
                          </div> 

                          <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label"> Party Supplier Name*:</label>
                              <div class="col-sm-8">
                                <input type="text" value="<?php echo $data['party_supplier_name'];?>" name="party_supplier_name" class="form-control" id="PONo@" placeholder="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">City* :</label>
                            <div class="col-sm-8">
                              <input type="text" name="city" value="<?php echo $data['city'];?>" class="form-control" id="" placeholder="" required>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Via Category"  class="col-sm-4 control-label">Address:</label>
                            <div class="col-sm-8">
                            <textarea class="form-control" value="<?php echo $data['address'];?>" name="address"></textarea>
                             
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Purchase Return Date* :</label>
                            <div class="col-sm-8">
                             <input type="Date" value="<?php echo $data['purchase_return_date'];?>" name="purchase_return_date" class="form-control" id="PONo@"  required>
                            </div>
                          </div>
                        </div>
                    </div>
                <br>
                <div class="row">
                          <div class="col-md-2"></div>
                          <div class="form-group">
                            <div class="col-sm-8">
                             <button type="reset" class="btn btn-default">Reset</button>
                             <input class="btn btn-default btn-info" type="submit" name="save" value="Save">
                           </div>
                         </div>
                       </div>
                    

                  
                <!-- x-pannel -->
              </div>

            </form>

       </div>
     </div>

     <!-- x-pannel ends -->
   </div>
   <!-- col md 1 xs md end -->
 </div>
 <!-- row ends -->
<?php 

 ?>

 <!-- Item Table -->
 <div class="clearfix"></div>
 <!-- Items Table starts -->
 
<!-- row ends -->
              
<!-- row ends -->
</div>
</div>
</div>

<!-- /page content -->

<!-- footer content -->
<?php 
include 'footer.php'; ?>
<!-- /compose -->
<?php 
include 'config.php';
if(isset($_POST['save']))
{
$purchase_return_number=$_POST['purchase_return_number'];
$purchase_order_number=$_POST['purchase_order_number'];
$paymode=$_POST['paymode'];
$city=$_POST['city'];
$address=$_POST['address'];
$party_supplier_name=$_POST['party_supplier_name'];
$purchase_return_date=$_POST['purchase_return_date'];




 $query="UPDATE `purchase_return` SET `purchase_return_number`='$purchase_return_number',`purchase_order_number`='$purchase_order_number',`paymode`='$paymode',`city`='$city',`address`='$address',`party_supplier_name`='$party_supplier_name',`priority`='$priority',`purchase_return_date`='$purchase_return_date' WHERE `id`='$r_id'";
mysqli_query($conn,$query);
header("location:edit_purchase_return.php?r_id=$r_id&err=200");


}
 ?>