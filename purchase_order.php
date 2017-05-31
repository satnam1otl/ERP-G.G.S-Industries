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

                           <div class="title_right">
                          <div class="col-md-2 col-sm-8 col-xs-9 form-group pull-right top_search">
                            <div class="input-group">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="margin-top: 17px;">Help!</button>
                               <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                     <h3 style="text-align: center;">Validations On This Page</h3>
                                    <br>
                                    <h2>1. Only Digits Should be allowed In Number or phone number field.
                                    <br>
                                    <br>
                                    2. Only Characters Allow in name feild
                                     <br>
                                     <br>
                                    3. Email Address Should be valid you enter in the email feild.
                                    <br>
                                     <br>
                                    4. In Search field you can serach according to name or accroding to number. 
                                     </h2>
                                    </div>
                                  </div>
                                </div>
                              <!-- <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                              </span> -->
                            </div>
                          </div>
                        </div>
                      </div>
                      

                      <div class="clearfix"></div>
                      <!-- General Details starts -->
                      <div class="row">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                         <?php 
                              if (isset($_GET['err'])) {
                                if ($_GET['err']==800) {
                                  ?>
                                  <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Inserted!</strong> Your Data is inserted
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
                                    <input type="text" class="form-control" id="PurchaseOrderNo@"  name="purchase_order_number" placeholder="" onkeypress="return checkOnlyDigits_purchase_order(event)"/>
                                    <div id="error_purchase_order"></div>
                                  </div>
                                </div>
                              </div> 

                              <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4  control-label">Purchase Order Date* :</label>
                                  <div class="col-sm-8">
                                   <input type="Date" name="purchase_order_date" class="form-control date_in" id="PODate@" placeholder="" required>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Pay Mode :</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="paymode" id="PayMode@">
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
                                <select class="form-control" name="party_supplier_name" id="PaymentMode@">
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
                             <textarea class="form-control" name="supplier_address" rows="1"></textarea>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Via Category"  class="col-sm-4 control-label">Supplier City:</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="city" id="SupplierCity" placeholder="" >
                             <div id="error_SupplierCity"></div>
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
 
  <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
            
    <div class="x_panel">
        <div class="x_title">
          <h2>Purchase Order Details</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
          <form>
            <div id="" class="table-responsive">
              <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                  <tr class="headings">
               <th class="column-title">Purchase Order No.</th>
                  <th class="column-title">Purchase Order Date </th>
                  <th class="column-title">Supplier Name</th>
                  <th class="column-title">City</th>
                  
                 
                  <th class="column-title">        </th>
                   <th class="column-title">        </th>
                </tr>
              </thead>

              <tbody>
               <?php 
               include 'config.php';
               $result="SELECT  * FROM purchase_order";
               $query = mysqli_query($conn, $result);
               if(!$query) {
                $message = "Error" . mysqli_error($conn);
                return $message;
              }

              while ($row = mysqli_fetch_array( $query ) ) {

               ?>
               <tr class="even pointer">
                 <td class=" " style="padding: 15px;"><?php echo $row['purchase_order_number']; ?></td>
                  <td class=" " style="padding: 15px;" ><?php echo $row['purchase_order_date']; ?></td>
                  <td class=" " style="padding: 15px;"><?php echo $row['party_supplier_name']; ?></td>
                  <td class=" " style="padding: 15px;"><?php echo $row['city']; ?></td>
                  
                  
                  
                  <td class=" "><a class="btn btn-default btn-sm btn-success" href="edit_purchase_order.php?o_id=<?php echo $row['id']; ?>" role="button">Edit </a></td>
                  <td class=" "><a class="btn btn-default btn-danger btn-sm" href="delete_purchase_order.php?o_id=<?php echo $row['id']; ?>" role="button">Delete</a></td>
                
              </tr> 

              <?php 
            }
            ?>

            



          </tbody>
        </table>
      </div>
      

    </form>
  </div>
  


  
  <div class="clearfix"></div>
</div>
    <!-- x-pannel ends -->

  </div>
  <!-- col md 1 xs md end -->
</div>
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
  
  $query="INSERT INTO `purchase_order`(`purchase_order_number`, `paymode`, `supplier_address`, `purchase_order_date`, `party_supplier_name`, `city`) VALUES ('$purchase_order_number','$paymode','$supplier_address','$purchase_order_date','$party_supplier_name','$city')";

  mysqli_query($conn,$query);
 header("location:purchase_order.php?err=800");
}

 ?>


