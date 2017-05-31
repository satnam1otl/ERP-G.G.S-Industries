  <?php 
  include 'config.php';
$s_id=$_GET['s_id'];

$q="select * from sales_return where `id`='$s_id'";
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
                        <div class="title_left">
                          <h3><i class="fa fa-reply" aria-hidden="true"></i> &nbsp;Sales Return</h3>
                        </div>

                         
                      </div>
                      

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
                                    <strong>Updated !</strong> Your Data is Updated
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
                                  <label for="inputEmail3" class="col-sm-4 control-label">SLR No:</label>
                                  <div class="col-sm-8">
                                    <input type="text" value="<?php echo $data['slr_number'];?>" name="slr_number" class="form-control" id="PurchaseOrderNo@" placeholder="">
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
                              <label for="inputEmail3" class="col-sm-4 control-label">SLR Date*:</label>
                              <div class="col-sm-8 col-xs-4">
                                <input type="Date" value="<?php echo $data['slr_date'];?>" name="slr_date" class="form-control" id="PONo@" placeholder="" required>
                              </div>
                            </div>
                          </div> 

                          <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Invoice No*:</label>
                              <div class="col-sm-8">
                                <input type="text" value="<?php echo $data['invoice_no']; ?>" name="invoice_no" class="form-control" id="PONo@" placeholder="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Customer Name* :</label>
                            <div class="col-sm-8">
                              <input type="text" value="<?php echo $data['customer_name'];?>" name="customer_name" class="form-control" id="p/sName@" placeholder="" required>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Via Category"  class="col-sm-4 control-label">City:</label>
                            <div class="col-sm-8">
                            <input type="text" value="<?php echo $data['city'];?>" name="city" class="form-control" id="SupplierCity@" placeholder="" >
                             
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Address* :</label>
                            <div class="col-sm-8">
                              <textarea class="form-control" value="<?php echo $data['address'];?>" name="address" rows="1"></textarea>
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
                             <input class="btn btn-default btn-info" name="save" type="submit" value="Save">
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


    <!-- Item Table -->
    <div class="clearfix"></div>
    <!-- Items Table starts -->
   
  <!-- row ends -->
 
  <div class="clearfix"></div>
    <!-- Search  Table starts -->

<!-- row ends -->
</div>
</div>
</div>

<!-- /page content -->

<!-- footer content -->
<?php 
include 'footer.php'; ?>

<?php 
include 'config.php';
if(isset($_POST['save'])){

$slr_number=$_POST['slr_number'];
$paymode=$_POST['paymode'];
$invoice_no=$_POST['invoice_no'];
$slr_date=$_POST['slr_date'];
$customer_name=$_POST['customer_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$query="UPDATE `sales_return` SET `slr_number`='$slr_number',`paymode`='$paymode',`invoice_no`='$invoice_no',`slr_date`='$slr_date',`customer_name`='$customer_name',`address`='$address',`city`='$city' WHERE `id`='$s_id'";
mysqli_query($conn,$query);
header("location:edit_sales_return.php?s_id=$s_id&err=200");

}  
 ?>

