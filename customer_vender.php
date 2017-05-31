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
                                    <!--  <img src="images/customer.png" class="img-responsive" alt="Responsive image"> -->
                                    </div>
                                  </div>
                                </div>
                            
                            </div>
                          </div>
                        </div>
                      </div>

                        <div class="clearfix"></div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="x_panel">
                            <!-- Alert For data inserted -->
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
                            <form class="form-horizontal" method="POST">
                                <div class="row">
                                 <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">First Name* :</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="first_name" class="inputTextBox form-control" id="FirstName" placeholder="" required/>
                                      <div id="error_FirstName"></div>
                                    </div>
                                  </div>
                                </div> 

                                <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Last Name* :</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="last_name" class=" inputTextBox form-control" id="LastName" placeholder="" required/>
                                      <div id="error_LastName"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                               <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Address* :</label>
                                  <div class="col-sm-8">
                                   <textarea class="form-control" name="address" required></textarea>
                                  </div>
                                </div>
                              </div> 

                              <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">City* :</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="city" class="form-control" id="City" placeholder="" required>
                                     <div id="error_City"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">State* :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="state" class="form-control" id="State" placeholder="" required>
                                   <div id="error_State"></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-4 control-label">Personal Contact:</label>
                                <div class="col-sm-8">
                                  <input type="text" name="personal_contact" class="form-control" id="PersonalContact" maxlength="10" placeholder="" onkeypress="return checkOnlyDigits_PersonalContact(event)"/>
                                  <div id="error_PersonalContact"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                         <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Contact No* :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="contact_no" class="form-control" id="ContactNo@" placeholder="" required onkeypress="return checkOnlyDigits_Contact_no(event)"/>
                                  <div id="error_Contact_no"></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Email :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="email" class="form-control" id="email" placeholder="" onblur="validateEmail_customer(this);" />
                                <div id="error_email"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Service Tax No* :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="s_t_n" class="form-control" id="ServicaeTaxNo@" placeholder="" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">VAT No* :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="v_n" class="form-control" id="VATNo@" placeholder="" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="form-group">
                            <div class="col-sm-8">
                             <button type="submit" name="submit" class="btn  btn-info">Save</button>
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
                  if(isset($_POST['submit']))
                  {
                    $f_name=$_POST['first_name'];
                    $l_name=$_POST['last_name'];
                    $address=$_POST['address'];
                    $contact_no=$_POST['contact_no'];
                    $s_t_n=$_POST['s_t_n'];
                    $state= $_POST['state'];
                    $city= $_POST['city'];
                    $p_contact= $_POST['personal_contact'];
                    $vat_no= $_POST['v_n'];
                    $email=$_POST['email'];
              
              echo $query_var="INSERT INTO customer_master VALUES ('', '$f_name', '$l_name','$address','$contact_no','$s_t_n','$state','$city','$p_contact','$vat_no','$email')";

                    mysqli_query($conn,$query_var);
                     header("location:customer_vender.php?err=800");
                  } 
   ?>

   <!-- Item Table -->
   <div class="clearfix"></div>
   <!-- Items Table starts -->
   <div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Customer Details</h2>
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
                  <th class="column-title">Code</th>
                  <th class="column-title"> First Name </th>
                  <th class="column-title"> Last Name </th>     
                  <th class="column-title">Service Tax No</th>
                  <th class="column-title">Vat No</th>
                  <th class="column-title">       </th>
                  <th class="column-title">       </th>
                  
                </tr>
              </thead>

              <tbody>
               <?php 
               include 'config.php';
               $result="SELECT  * FROM customer_master";
               $query = mysqli_query($conn, $result);
               if(!$query) {
                $message = "Error" . mysqli_error($conn);
                return $message;
              }

              while ($row = mysqli_fetch_array( $query ) ) {
                
               ?>

               <tr class="even pointer">
                
                <td class=" " style="padding: 15px;"><?php  echo $row['id']; ?></td>
                <td class=" " style="padding: 15px;" ><?php echo $row['first_name']; ?></td>
                <td class=" " style="padding: 15px;"><?php echo $row['last_name']; ?></td>
                <td class=" " style="padding: 15px;"><?php echo $row['service_tax_no'];?></td>
                <td class=" " style="padding: 15px;"><?php echo $row['vat_no'];?></td>
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

              