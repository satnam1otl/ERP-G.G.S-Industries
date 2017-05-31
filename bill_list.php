
<?php 
include 'header.php'; ?> 

          <body class="nav-md" >
          <?php 
          include 'sidebar.php';
           ?>
           

<div class="right_col" role="main">
                    <div class="">

                      <div class="page-title">
                        <div class="title_left">
                          <h3><i class="fa fa-list-alt" aria-hidden="true"></i> Bills List</h3>
                        </div>

                      
                      </div>

                        <div class="clearfix"></div>

                        
                
               <!-- Item Table -->
               <div class="clearfix"></div>
               <!-- Items Table starts -->
               <div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Bills List</h2>
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
                 
                <th class="column-title">Invoice No.</th>
                  <th class="column-title">Name</th>
                  <th class="column-title">TIN/VRN/CST NO.</th>
                  <th class="column-title">Date</th>
                  
                  <th class="column-title">        </th>
                  
                </tr>
              </thead>

              <tbody>
               <?php 
               include 'config.php';
               $result="SELECT  * FROM bill_invoice";
               $query = mysqli_query($conn, $result);
               if(!$query) {
                $message = "Error" . mysqli_error($conn);
                return $message;
              }

              while ($row = mysqli_fetch_array( $query ) ) {
                
               ?>

               <tr class="even pointer">
                
                <td class=" " style="padding: 15px;"><?php  echo $row['invoice_no']; ?></td>
                <td class=" " style="padding: 15px;" ><?php echo $row['name']; ?></td>
                <td class=" " style="padding: 15px;"><?php echo $row['tin_vrn_cst']; ?></td>
                <td class=" " style="padding: 15px;"><?php echo $row['date'];?></td>
               
                <td class=" "><a class="btn btn-success" href="vat_invoice.php?invoice_no=<?php echo $row['invoice_no']; ?>" role="button">Show Bill</a></td>
              
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
   
  </div>
          

             
       
<!-- row ends -->
</div>
</div>
</div>

<!-- /page content -->

<?php 

include 'footer.php';
 ?>

