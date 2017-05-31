
 
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
                          <h3><i class="fa fa-user" aria-hidden="true"></i></i>Add Attendence</h3>
                        </div>

                        <div class="title_right">
                          <div class="col-md-2 col-sm-8 col-xs-9 form-group pull-right top_search">
                            <div class="input-group">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="margin-top: 17px;">Help!</button>
                               <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                     <img src="images/customer-vender.png" class="img-responsive" alt="Responsive image">
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
                             <?php 
                              if (isset($_GET['err'])) {
                                if ($_GET['err']==202) {
                                  ?>
                                  <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Attendence Inserted !!!!
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
                                      <input type="text" name="first_name" class="form-control" id="FirstName@" placeholder="" required>
                                    </div>
                                  </div>
                                </div> 

                                <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Status* :</label>
                                    <div class="col-sm-8">
                               <select class="form-control" name="status_attendence" id="FollowUp@">
                                <option>--Select--</option>
                                <option>Present</option>
                                <option>Absent</option>
                                <option>HalfDay</option>
                                <option>Sick Leave</option>
                              </select>
                            </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                               <div class="col-md-6">
                                 <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Days in Month* :</label>
                                <div class="col-sm-8">
                                  <input type="text" value="" name="days_in_month" class="form-control" id="State@" placeholder="" required>
                                </div>
                              </div>
                              </div> 

                              <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Attendence Date* :</label>
                                  <div class="col-sm-8">
                                    <input type="Date" value="" name="date_attendence" class="form-control" id="City@" placeholder="" required>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                        
                          
                          <br>
                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="form-group">
                            <div class="col-sm-8">
                             <button type="submit" name="add" class="btn  btn-info">Add</button>
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
  
   <!-- Item Table -->
   <div class="clearfix"></div>
   <!-- Items Table starts -->
   
  <!-- row ends -->
</div>
</div>
</div>

                    <!-- /page content -->

                    <!-- footer content -->
                    <?php 
                    include 'footer.php'; ?>

              