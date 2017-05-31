  <?php 
  include 'config.php';
$e_id=$_GET['e_id'];

$q="select * from purchase_enquiry where `id`='$e_id'";
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
                          <h3><i class="fa fa-shopping-cart  fa-lg" aria-hidden="true"></i> Purchase Enquiry</h3>
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
                                    <strong>Updated !</strong> Your Data is updated
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
                                  <input type="text" value="<?php echo $data['enquiry_number'];?>" name="enquiry_number" class="form-control" id="EnquiryNo@" placeholder="">
                                </div>
                              </div>
                            </div> 

                            <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Enquiry Date* :</label>
                                <div class="col-sm-8">
                                  <input type="Date" value="<?php echo $data['enquiry_date'];?>"  name="enquiry_date" class="form-control" id="EnquiryDate@" placeholder="" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                           <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Follow Up*:</label>
                              <div class="col-sm-8">
                               <select class="form-control" value="<?php echo $data['follow_ups'];?>" name="follow_ups" id="FollowUp@">
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
                              <input type="Date" value="<?php echo $data['due_date'];?>" name="due_date" class="form-control" id="DueDate@" placeholder="" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Party/Supplier Name* :</label>
                          <div class="col-sm-8">
                            <input type="text" value="<?php echo $data['party_supplier_name'];?>" name="party_supplier_name" class="form-control" id="ProductName@" placeholder="" required>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="Via Category"  class="col-sm-4 control-label">Priority :</label>
                          <div class="col-sm-8">

                           <select class="form-control" value="<?php echo $data['priority'];?>" name="priority" id="priority@">
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
                        <textarea class="form-control" value="<?php echo $data['address'];?>" name="address" rows="1"></textarea>

                      </div>
                    </div>
                  </div> 

                  <div class="col-md-6">
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Enter City* :</label>
                    <div class="col-sm-8">
                      <input type="text" name="city" value="<?php echo $data['city'];?>" class="form-control" id="ProductName@" placeholder="" required>
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

$query= "UPDATE `purchase_enquiry` SET `enquiry_number`='$enquiry_number',`follow_ups`='$follow_ups',`party_supplier_name`='$party_supplier_name',`address`='$address',`enquiry_date`='$enquiry_date',`due_date`='$due_date',`city`='$city' WHERE `id`='$e_id'";
mysqli_query($conn,$query);
header("location:edit_purchase_enquiry.php?e_id=$e_id&err=200");
 

}
 ?>