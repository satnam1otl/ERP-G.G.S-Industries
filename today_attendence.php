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
                              <h3><i class="fa fa-check-square-o" aria-hidden="true"></i> &nbsp;Today Attendence</h3>
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
                                    <h2>1. Click on CheckBox that you want that workers are absent or present.
                                    <br>
                                    <br>
                                    2. See the list of Workers present or absent in view attendence page
                                     <br>
                                    <br>
                                    3. You can also print the details in pdf format and also save the details in csv or excel format and also copy the records.
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
    <!-- Enteries and Search starts -->

    <div class="x_content">
      <form method="post" action="">
            <div id="" class="table-responsive">
              <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                  <tr class="headings">
                 
                  <th class="column-title">Emp. Code</th>
                  <th class="column-title">Emp. Name</th>
                  <th class="column-title">Designation</th>
                  <th class="column-title">Creation Date</th>
                  <th class="column-title">Mark Attendence</th>
                   
                 
                     
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

                 <td><input type="checkbox" id="check-all" class="flat" name="chk[]" value="<?php echo $row['emp_code']; ?>"></td>
                

                
                
              </tr> 
  
              <?php 
            }
            ?>

            
                


          </tbody>
        </table>
        
      </div>
      <div class="form-group">
      <div class="col-md-5"></div>
                            <div class="col-sm-8 col-md-7">
                             <input class="btn btn-default btn-info" type="submit" name="present" value="Present">
                             
                             <input class="btn btn-default btn-danger" name="absent" type="submit" value="Absent">
                           </div>
                         </div>

    </form>
             
            
      </div>
    </div>
    <!-- x-pannel ends -->

  </div>
  <!-- col md 1 xs md end -->
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
if (isset($_POST['present'])) {
  
$emp_ids=$_POST['chk'];


foreach ($emp_ids as $single_id ) {
  // echo $single;
  // echo "<br>";
$query= "INSERT INTO `attendence`( `attendence`, `date`, `emp_code`) VALUES ('present',CURRENT_TIMESTAMP,'$single_id') ";
 mysqli_query($conn,$query);
 // header("location:view_attendence.php");

}


}



if (isset($_POST['absent'])) {
  
$emp_ids_absent=$_POST['chk'];


foreach ($emp_ids_absent as $single_id_absent ) {
  // echo $single;
  // echo "<br>";
  $query= "INSERT INTO `attendence`( `attendence`, `date`, `emp_code`) VALUES ('absent',CURRENT_TIMESTAMP,'$single_id_absent')";
 mysqli_query($conn,$query);
 header("location:view_attendence.php");

}


}
 ?>

