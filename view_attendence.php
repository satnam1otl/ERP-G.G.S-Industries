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
                              <h3><i class="fa fa-eye" aria-hidden="true"></i> &nbsp;View Attendence</h3>
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
                                         <h3 style="text-align: center;">Note</h3>
                                    <br>
                                    <h2>1. Select The date that you want to see the attendence.
                                    <br>
                                    <br>
                                    2. List of present and absent workers are shown
                                     <br>
                                    <br>
                                   
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

                        <div class="row">
                          <div class="col-md-12">
                            <div class="x_panel">
                             <div class="x_title">
                            <h2>Select Date</h2>
                            <div class="clearfix"></div>
                          </div>
                              <form class="form-horizontal" method="post">
                                <div class="row">
                                 <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">Date :</label>
                                    <div class="col-sm-8">
                                      <input type="Date" name="date" class="form-control" id="date" placeholder="">
                                    </div>
                                  </div>
                                </div> 

                              
                              </div>
                     
                       
                        <br>
                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="form-group">
                            <div class="col-sm-8">
                             
                             <input class="btn btn-info" name="submit" type="submit" value="submit">
                           </div>
                         </div>
                       </div>
                     </form><br>
                     



                   </div>
                 </div>
               </div>
                

<div class="clearfix"></div>
<!-- Search  Table starts -->
<?php if (isset($_POST['submit'])) {
 $date=$_POST['date'];
?>
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
    <!-- Enteries and Search starts -->

    <div class="x_content">
      
            <div id="" class="table-responsive">
              <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                  <tr class="headings">
                 
                  <th class="column-title">Emp. Code</th>
                  <th class="column-title">Emp. Name</th>
                  <th class="column-title">Designation</th>
                  <th class="column-title">Date</th>
                  <th class="column-title">Status</th>
                     
                </tr>
              </thead>

              <tbody>
               <?php 
               include 'config.php';
              $datetime=date("Y-m-d H:i:s",strtotime($date));
      $result="SELECT  * FROM attendence where date(`date`)=date('$datetime')";
               $query = mysqli_query($conn, $result);
              while ($attendance = mysqli_fetch_array( $query ) ) {
             $get="select * from employee_table where `emp_code`='$attendance[emp_code]'";
                $exe_get=mysqli_query($conn,$get);
                $row=mysqli_fetch_array($exe_get);
               ?>

               <tr class="even pointer">
                 
                <td class=" " style="padding: 15px;"><?php  echo $row['emp_code']; ?></td>
                <td class=" " style="padding: 15px;" ><?php echo $row['first_name']; ?></td>
                <td class=" " style="padding: 15px;"><?php echo $row['designation']; ?></td>
                <td class=" " style="padding: 15px;"> <?php echo $attendance['date']; ?> </td>
                <?php 
                  $p="present";
                 $a="absent";
                  if ($attendance['attendence']==$p)
                 {
                   echo '<td style="background-color:#33FFA8">';
                 }
                 else if ($attendance['attendence']==$a)
                 {
                   echo '<td style="background-color:#fa8072">';
                 }
                 else
                 {
                   echo '<td>'; 
                   ?>

                   <?php 
                   } 
                   echo $attendance['attendence'];
                   ?>
                </td>
                 
                
              </tr> 
  
              <?php 
            }
            ?>

            
                


          </tbody>
        </table>
        
      </div>
     
    
            
      </div>
    </div>
    <!-- x-pannel ends -->

  </div>
  <!-- col md 1 xs md end -->
</div>
<?php } ?>
</div>
</div>

<!-- /page content -->

<!-- footer content -->
<?php 
include 'footer.php'; ?>
<!-- /compose -->




