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
                              <h3><i class="fa fa-info-circle" aria-hidden="true"></i></i> &nbsp;Employee Infomation</h3>
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
                                <label for="inputEmail3" class="col-sm-4 control-label">First Name* :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="first_name" class="form-control" id="first_name" placeholder="" required="">
                                  <div id="error_first_name"></div>
                                </div>
                              </div>
                            </div> 

                            <div class="col-md-4">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Middle Name :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="middle_name" class="form-control" id="middle_name" placeholder="">
                                  <div id="error_middle_name"></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Last Name :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="last_name" class="form-control" id="last_name" placeholder="">
                                  <div id="error_last_name"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                           <div class="col-md-4">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Contact No*:</label>
                              <div class="col-sm-8">
                               <input type="text" name="contact_no" class="form-control" id="contact_no" placeholder="" required=""  onkeypress="return checkOnlyDigits_contact_no(event)"/>
                              <div id="error_contact_no"></div>
                            </div>
                          </div>
                        </div> 

                        <div class="col-md-4">

                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Emp Code :</label>
                            <div class="col-sm-8">
                              <input type="text" name="emp_code" class="form-control" id="emp_code" placeholder=""  onkeypress="return checkOnlyDigits_emp_code(event)"/>
                              <div id="error_emp_code"></div>
                            </div>
                          </div>
                        </div>
                         <div class="col-md-4">

                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Designation:</label>
                            <div class="col-sm-8">
                              <input type="text" name="designation" class="form-control" id="designation" placeholder="">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-md-4">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Personal No* :</label>
                          <div class="col-sm-8">
                            <input type="text" name="personal_contact" class="form-control" id="personal_no" placeholder="" required onkeypress="return checkOnlyDigits_personal_contact_no(event)"/>
                              <div id="error_personal_contact_no"></div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="location"  class="col-sm-4 control-label">Location:</label>
                          <div class="col-sm-8">
                            <input type="text" name="location" class="form-control" id="location" placeholder="" >
                        
                            
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="Salary"  class="col-sm-4 control-label">Salary*:</label>
                          <div class="col-sm-8">
                            <input type="text" name="salary" class="form-control" id="salary" placeholder="" required>
                        
                            
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                          <label for="create_date"  class="col-sm-4 control-label">Create Date:</label>
                          <div class="col-sm-8">
                            <input type="Date" name="create_date" class="form-control" id="creat_date@" placeholder="">
                        
                            
                        </div>
                      </div>
                  </div>
                    
                  </div>

              <br>
              <div class="row">
                <div class="col-sm-1"></div>
                <div class="form-group">
                  <div class="col-sm-6">
                   <button type="reset" class="btn btn-default ">Reset</button>
                   <input class="btn  btn-info" name="save" type="submit" value="Save">
                 </div>
               </div>
             </div>
<?php 
include 'config.php';
if(isset($_POST['save'])){
  $emp_code=$_POST['emp_code'];
  $first_name=$_POST['first_name'];
  $middle_name=$_POST['middle_name'];
  $last_name=$_POST['last_name'];
  $designation=$_POST['designation'];
  $contact_no=$_POST['contact_no'];
  $personal_contact=$_POST['personal_contact'];
  $salary=$_POST['salary'];
  $location=$_POST['location'];
  $create_date=$_POST['create_date'];
  $q="INSERT INTO `employee_table`(`emp_code`, `first_name`, `middle_name`,`last_name`,`designation`,`contact_no`,`personal_contact`,`salary`,`location`,`create_date`) VALUES ('$emp_code','$first_name','$middle_name','$last_name','$designation','$contact_no','$personal_contact','$salary','$location','$create_date')";
  $e_q=mysqli_query($conn,$q);
header("location:employee_master.php?err=800");

}
 ?>


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
<div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Employee Details</h2>
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
                  <!-- <th>
                    <input type="checkbox" id="check-all" class="flat">
                  </th> -->
                  <th class="column-title">Emp. Code</th>
                  <th class="column-title">Emp. Name</th>
                  <th class="column-title">Designation</th>
                  <th class="column-title">Creation Date</th>
                 
                  <th class="column-title">        </th>
                  <th class="column-title">        </th>

                  
                </tr>
              </thead>

              <tbody>
               <?php 
               include 'config.php';
               $result="SELECT  * FROM employee_table";
               $query = mysqli_query($conn, $result);
               if(!$query) {
                $message = "Error" . mysqli_error($conn);
                return $message;
              }

              while ($row = mysqli_fetch_array( $query ) ) {
                
               ?>

               <tr class="even pointer">
                
                <td class=" " style="padding: 15px;"><?php  echo $row['emp_code']; ?></td>
                <td class=" " style="padding: 15px;" ><?php echo $row['first_name']; ?></td>
                <td class=" " style="padding: 15px;"><?php echo $row['designation']; ?></td>
                <td class=" " style="padding: 15px;"><?php echo $row['create_date'];?></td>
               
                
                

                <td class=" "><a class="btn btn-success" href="edit_customer_vender.php?customer_id=<?php echo $row['id']; ?>" role="button">Edit </a></td>
                <td class=" "><a class="btn btn-danger" href="delete_customer_vender.php?customer_id=<?php echo $row['id']; ?>" role="button">Delete</a></td>
                
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


</div>
      <!-- x-pannel ends

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

