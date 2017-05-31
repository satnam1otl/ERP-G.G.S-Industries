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
                                  <label for="inputEmail3" class="col-sm-4 control-label">SLR No:</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="slr_number" class="form-control" id="slr_number" placeholder="" onkeypress="return checkOnlyDigits_slr_number(event)"/>
                           <div id="error_slr_number"></div>
                                  </div>
                                </div>
                              </div> 

                               <div class="col-md-6">
                                             <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Pay Mode :</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="paymode" id="PaymentMode@">
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
                                <input type="Date" name="slr_date" class="form-control" id="PONo@" placeholder="" required>
                              </div>
                            </div>
                          </div> 

                          <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Invoice No*:</label>
                              <div class="col-sm-8">
                                <input type="text" name="invoice_no" class="form-control" id="PONo@" placeholder="" required onkeypress="return checkOnlyDigits_invoice_number(event)"/>
                           <div id="error_invoice_number"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Customer Name* :</label>
                            <div class="col-sm-8">
                              <input type="text" name="customer_name" class="form-control" id="c_name" placeholder="" required>
                              <div id="error_c_name"></div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Via Category"  class="col-sm-4 control-label">City:</label>
                            <div class="col-sm-8">
                            <input type="text" name="city" class="form-control" id="city_sale" placeholder="" >
                            <div id="error_city_sale"></div>
                             
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Address* :</label>
                            <div class="col-sm-8">
                              <textarea class="form-control" name="address" rows="1"></textarea>
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
 <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
            
    <div class="x_panel">
        <div class="x_title">
          <h2>Sales Return Details</h2>
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
               
                  <th class="column-title">SLR NO.</th>
                  <th class="column-title">Customer Name</th>
                  <th class="column-title">PayMode</th>
                  <th class="column-title">Invoice No.</th>
                  <th class="column-title">City</th>
                
                 
                  <th class="column-title">        </th>
                  <th class="column-title">        </th>

                  
                </tr>
              </thead>

              <tbody>
               <?php 
               include 'config.php';
               $result="SELECT  * FROM sales_return";
               $query = mysqli_query($conn, $result);
               if(!$query) {
                $message = "Error" . mysqli_error($conn);
                return $message;
              }

              while ($row = mysqli_fetch_array( $query ) ) {
                
               ?>

               <tr class="even pointer">
                
              <td class=" " style="padding: 15px;"><?php echo $row['slr_number']; ?></td>
                  <td class=" " style="padding: 15px;" ><?php echo $row['customer_name']; ?></td>
                  <td class=" " style="padding: 15px;"><?php echo $row['paymode']; ?></td>
                  <td class=" " style="padding: 15px;"><?php echo $row['invoice_no']; ?></td>
                  <td class=" " style="padding: 15px;"><?php echo $row['city']; ?></td>
                  
                  
                  
                  <td class=" "><a class="btn btn-default btn-sm btn-success" href="edit_sales_return.php?s_id=<?php echo $row['id']; ?>" role="button">Edit </a></td>
                  <td class=" "><a class="btn btn-default btn-danger btn-sm" href="delete_sales_return.php?s_id=<?php echo $row['id']; ?>" role="button">Delete</a></td>
                
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
$query="INSERT INTO `sales_return`(`slr_number`, `paymode`, `invoice_no`, `slr_date`, `customer_name`, `address`, `city`) VALUES ('$slr_number','$paymode','$invoice_no','$slr_date','$customer_name','$address','$city')";
mysqli_query($conn,$query);
header("location:sales_return.php?err=800");

}  
 ?>

