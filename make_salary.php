<?php 
include 'header.php'; ?>
          <body class="nav-md" >
           <?php 
           include 'sidebar.php'; ?>
                  <!-- /top navigation -->

                  <!-- page content -->

                  <div class="right_col" role="main">
                    <div class="">
                      <div class="row">
                        <div class="col-md-8">

                          <div class="page-title">
                            <div class="title_left">
                              <h3><i class="fa fa-info-circle" aria-hidden="true"></i></i> &nbsp;Make Salary</h3>
                            </div>
                            <div></div></div></div>

                            
                            <div class="">

                              <div class="title_right">
                                <div class="col-md-1 col-sm-8 col-xs-4 form-group pull-right top_search">
                                  <div class="input-group">
                                    <button type="button" style="margin-top: 17px;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Help!</button>
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
                             <div class="col-md-4">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Salary Date* :</label>
                                <div class="col-sm-8">
                                    <input type="Date" class="form-control" name="salary_date" id="salary_date" placeholder="">

                                </div>
                              
                                
                              </div>
                            </div> 

                            <div class="col-md-4">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Emp Name :</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="emp_name" placeholder="" name="emp_name">
                                  <div id="error_emp_name"></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Emp Code:</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="emp_code" placeholder="" name="emp_code" onkeypress="return checkOnlyDigits_emp_code(event)"/>
                           <div id="error_emp_code"></div>

                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                           <div class="col-md-4">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Emp. Designation:</label>
                              <div class="col-sm-8">
                               <input type="text" class="form-control" id="emp_designation" placeholder="" required="" name="emp_designation">
                            </div>
                          </div>
                        </div> 

                        <div class="col-md-4">

                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label"> working Days in Month:</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="working_days_month" placeholder="" name="working_days_month" onkeypress="return checkOnlyDigits_working_days_month(event)"/>
                           <div id="error_working_days_month"></div>

                            </div>
                          </div>
                        </div>
                         <div class="col-md-4">

                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Salary</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="salary" name="salary" placeholder="">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Total Leaves :</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="total_leaves" name="total_leaves" placeholder="" required onkeypress="return checkOnlyDigits_total_leaves(event)"/>
                           <div id="error_total_leaves"></div>
                          </div>
                        </div>
                      </div>

                    
                    
                  </div>

              <br>
              <div class="row">
                <div class="col-md-1"></div>
                <div class="form-group">
                  <div class="col-md-4">
                   <button type="reset" class="btn btn-default ">Reset</button>
                   <input class="btn  btn-info" type="submit" name="save" value="Save">
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
 

<div class="clearfix"></div>
<!-- Search  Table starts -->


        


 
</div>
    <!-- x-pannel ends -->

  </div>
  <!-- col md 1 xs md end -->
</div>
<!-- row ends -->
</div>
</div>
</div>

     

    <!-- Enteries and Search starts -->


<!-- /page content -->

<!-- footer content -->
<?php 
include 'footer.php'; ?>
<!-- /compose -->
<?php 
include 'config.php';
if(isset($_POST['save'])){
  $salary_date=$_POST['salary_date'];
  $emp_name=$_POST['emp_name'];
  $emp_code=$_POST['emp_code'];
  $emp_designation=$_POST['emp_designation'];
  $total_leaves=$_POST['total_leaves'];
  $salary=$_POST['salary'];
  $working_days_month=$_POST['working_days_month'];
  $query="INSERT INTO `employee_salary`( `salary_date`,`salary`, `emp_name`,`emp_code`, `emp_designation`, `total_leaves`, `location`, `working_days_month`) VALUES ('$salary_date','$salary',$emp_name','$emp_code','$emp_designation','$total_leaves','$working_days_month')";
  mysqli_query($conn,$query);
 header("location:make_salary.php?err=800");

}

?>
