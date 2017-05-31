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
                          <h3><i class="fa fa-shopping-cart  fa-lg" aria-hidden="true"></i> Purchase Enquiry</h3>
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
                                <label for="inputEmail3" class="col-sm-4 control-label">Enquiry No :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="enquiry_number" class="form-control" id="EnquiryNo" placeholder="" onkeypress="return checkOnlyDigits_EnquiryNo(event)"/>
                                  <div id="error_EnquiryNo"></div>
                                </div>
                              </div>
                            </div> 

                            <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Enquiry Date* :</label>
                                <div class="col-sm-8">
                                  <input type="Date"  name="enquiry_date" class="form-control" id="EnquiryDate@" placeholder="" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                           <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Follow Up*:</label>
                              <div class="col-sm-8">
                               <select class="form-control" name="follow_ups" id="FollowUp@">
                                <option>--Select--</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                              </select>
                            </div>
                          </div>
                        </div> 

                        <div class="col-md-6">

                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Due Date* :</label>
                            <div class="col-sm-8">
                              <input type="Date" name="due_date" class="form-control" id="DueDate@" placeholder="" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Party/Supplier Name* :</label>
                          <div class="col-sm-8">
                            <input type="text" name="party_supplier_name" class="form-control" id="party_supplier_name" placeholder="" required>
                            <div id="error_party_supplier_name"></div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="Via Category"  class="col-sm-4 control-label">Priority :</label>
                          <div class="col-sm-8">

                           <select class="form-control" name="priority" id="priority@">
                            <option>--Select--</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-6">

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Address Of Supplier* :</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="address" rows="1"></textarea>

                      </div>
                    </div>
                  </div> 

                  <div class="col-md-6">
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Enter City* :</label>
                    <div class="col-sm-8">
                      <input type="text" name="city" class="form-control" id="City_enquiry" placeholder="" required>
                      <div id="error_City_enquiry"></div>
                    </div>
                  </div>
                </div> 
              </div>
              <br>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="form-group">
                  <div class="col-sm-8">
                   <button type="reset" class="btn btn-default ">Reset</button>
                   <input class="btn  btn-info" name="save"  type="submit" value="Save">
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
               <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
            
    <div class="x_panel">
        <div class="x_title">
          <h2>Enquiry Details</h2>
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
               
                  <th class="column-title">Enquiry Code</th>
                  <th class="column-title">Enquiry Date </th>
                  <th class="column-title">Follow ups</th>
                  <th class="column-title">Party/Supplier</th>
                
                 
                  <th class="column-title">        </th>
                  <th class="column-title">        </th>

                  
                </tr>
              </thead>

              <tbody>
               <?php 
               include 'config.php';
               $result="SELECT  * FROM purchase_enquiry";
               $query = mysqli_query($conn, $result);
               if(!$query) {
                $message = "Error" . mysqli_error($conn);
                return $message;
              }

              while ($row = mysqli_fetch_array( $query ) ) {
                
               ?>

               <tr class="even pointer">
                
              <td class=" " style="padding: 15px;"><?php echo $row['enquiry_number']; ?></td>
                  <td class=" " style="padding: 15px;" ><?php echo $row['enquiry_date']; ?></td>
                  <td class=" " style="padding: 15px;"><?php echo $row['follow_ups']; ?></td>
                  <td class=" " style="padding: 15px;"><?php echo $row['party_supplier_name']; ?></td>
                  
                  
                  
                  <td class=" "><a class="btn btn-default btn-sm btn-success" href="edit_purchase_enquiry.php?e_id=<?php echo $row['id']; ?>" role="button">Edit </a></td>
                  <td class=" "><a class="btn btn-default btn-danger btn-sm" href="delete_purchase_enquiry.php?e_id=<?php echo $row['id']; ?>" role="button">Delete</a></td>
                
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
<!-- /compose -->
<?php 
include 'config.php';
if(isset($_POST['save']))
{
$enquiry_number=$_POST['enquiry_number'];
$follow_ups=$_POST['follow_ups'];
$party_supplier_name=$_POST['party_supplier_name'];
$address=$_POST['address'];
$due_date=$_POST['due_date'];
$city=$_POST['city'];
$priority=$_POST['priority'];

 $query="INSERT INTO purchase_enquiry VALUES ('','$enquiry_number','$follow_ups', '$party_supplier_name', '$address','$due_date','$city','$priority')";
mysqli_query($conn,$query);
 header("location:purchase_enquiry.php?err=800");

}
 ?>