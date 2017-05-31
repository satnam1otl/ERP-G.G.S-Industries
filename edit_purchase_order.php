  <?php 
  include 'config.php';
$o_id=$_GET['o_id'];

$q="select * from purchase_order where `id`='$o_id'";
$e=mysqli_query($conn,$q);
$data=mysqli_fetch_array($e);
?> 
<?php 
include 'header.php'; ?> 

          <body class="nav-md" >
            <?php 
            include 'sidebar.php'; ?>

                  <!-- page content -->
                  <div class="right_col" role="main">
                    <div class="">

                      <div class="page-title">
                        <div class="title_left">
                          <h3><i class="fa fa-share fa-lg" aria-hidden="true"></i>Purchase Order</h3>
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
                                  <label for="inputEmail3" class="col-sm-4 control-label">Purchase Order No:</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="PurchaseOrderNo@" value="<?php echo $data['purchase_order_number'];?>"  name="purchase_order_number" placeholder="">
                                  </div>
                                </div>
                              </div> 

                              <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4  control-label">Purchase Order Date* :</label>
                                  <div class="col-sm-8">
                                   <input type="Date" value="<?php echo $data['purchase_order_date'];?>"  name="purchase_order_date" class="form-control date_in" id="PODate@" placeholder="" required>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Pay Mode :</label>
                                <div class="col-sm-8">
                                  <select class="form-control" value="<?php echo $data['paymode'];?>"  name="paymode" id="PayMode@">
                                  <option>--Select--</option>
                                  <option>Cash</option>
                                  <option>Check</option>
                                  <option>Draft</option>
                                
                                </select>
                              </div>
                            </div>
                          </div> 

                          <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Party/Supplier Name* :</label>
                              <div class="col-sm-8">
                                <select class="form-control" name="party_supplier_name" id="PaymentMode@" value="<?php echo $data['party_supplier_name']; ?>">
                                  <option>--Select--</option>
                                  <option>Name1</option>
                                  <option>Name2</option>
                                  <option>Name3</option>
                                
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Supplier Address* :</label>
                            <div class="col-sm-8">
                             <textarea class="form-control" value="<?php echo $data['supplier_address'];?>"  name="supplier_address" rows="1"></textarea>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Via Category"  class="col-sm-4 control-label">Supplier City:</label>
                            <div class="col-sm-8">
                            <input type="text" value="<?php echo $data['city'];?>"  class="form-control" name="city" id="SupplierCity@" placeholder="" >
                             
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

<!-- row ends -->
</div>
</div>
</div>
<!--  End page content -->

<!-- footer content -->
<?php 
include 'footer.php'; ?>
<!-- /compose -->
<?php 
include 'config.php';
if(isset($_POST['save']))
{
  $purchase_order_number=$_POST['purchase_order_number'];
  $paymode=$_POST['paymode'];
  $supplier_address=$_POST['supplier_address'];
  $purchase_order_date=$_POST['purchase_order_date'];
  $party_supplier_name=$_POST['party_supplier_name'];
  $city=$_POST['city'];
  
  $query="UPDATE `purchase_order` SET `purchase_order_number`='$purchase_order_number',`paymode`='$paymode',`supplier_address`='$supplier_address',`purchase_order_date`='$purchase_order_date',`party_supplier_name`='$party_supplier_name',`city`='$city' WHERE `id`='$o_id'";

  mysqli_query($conn,$query);
 header("location:edit_purchase_order.php?o_id=$o_id&err=200");
}

 ?>


