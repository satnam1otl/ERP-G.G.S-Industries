<?php 
include 'header.php'; ?>


          <body class="nav-md" >
            <?php 
            include 'sidebar.php'; ?>
                  <!-- /top navigation -->

                  <!-- page content -->
                  <div class="right_col" role="main">
                    <div class="">

                      <div class="page-title">
                        <div class="title_left">
                          <h3><i class="fa fa-cog  fa-lg" aria-hidden="true"></i> Product Master</h3>
                        </div>

                        <div class="title_right">
                          <div class="col-md-2 col-sm-8 col-xs-7 form-group pull-right top_search">
                            <div class="input-group">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Help!</button>
                               <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                    <!--  <img src="images/product.png" class="img-responsive" alt="Responsive image"> -->
                                    <h3 style="text-align: center;">Validations On This Page</h3>
                                    <br>
                                    <h2>1. Only Digits Should be allowed In Number or phone number field.
                                    <br>
                                    <br>
                                    2.Only Characters Allow in name feild</h2>
                                     <br>
                                    <h3 style="text-align: center;">Note</h3>
                                      <br>
                                      <h2> Enter the sales rate and vat % on the sales rate the sales rate with vat% is automatically calculated.</h2>
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

                        <div class="clearfix"></div>

                        <div class="row">
                          <div class="col-md-12">
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
                              <form class="form-horizontal" method="post">
                                <div class="row">
                                 <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Product No :</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="product_code" class="form-control" id="ProductNo@"   placeholder="" onkeypress="return checkOnlyDigits_product(event)"/>
                                       <div id="errorMsg_product_n"></div>
                                    </div>
                                  </div>
                                </div> 

                                <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Product Name* :</label>
                                    <div class="col-sm-8">
                                       <input id="inputTextBox_product_c" class="name form-control" type="text" name="product_name" />
                           <div id="errorMsg_product_c"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                               <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Sale/Purchase Unit :</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="sales_purchase_unit" class="form-control" id="ProductNo@" placeholder="">
                                  </div>
                                </div>
                              </div> 

                              <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Purchase Rate* :</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="puchase_rate" class="form-control" id="ProductName@" placeholder=""  required>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Sale Rate* :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="sales_rate" class="form-control" id="sl_rt" placeholder="" required>
                                </div>
                              </div>
                            </div>


                            <div class="col-md-6">

                              <div class="form-group">
                                <label for="Via Category"  class="col-sm-4 control-label">Vat Category :</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="vat_category" id="vatCategory@" >
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
                              <label for="inputEmail3" class="col-sm-4 control-label">Vat(%) :</label>
                              <div class="col-sm-8">
                                <input type="text" name="tax" class="form-control" id="vat" placeholder="0">
                              </div>
                            </div>
                          </div> 

                          <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Sale Rate With Vat * :</label>
                              <div class="col-sm-8">
                                <input type="text" name="sales_rate_with_tax" class="form-control" id="ttl" placeholder="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Create Date* :</label>
                              <div class="col-sm-8">
                                <input type="Date" name="create_date" class="form-control" id="ttl" placeholder="" required>
                              </div>
                            </div>
                          </div>
                        </div><br>
                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="form-group">
                            <div class="col-sm-8">
                             <button type="reset" class="btn btn-default">Reset</button>
                             <input class="btn btn-info" name="save" type="submit" value="Save">
                           </div>
                         </div>
                       </div>
                     </form><br>
                     

<?php 
include 'config.php';
if(isset($_POST['save']))
{
$product_code=$_POST['product_code'];
$product_name=$_POST['product_name'];
$sales_purchase_unit=$_POST['sales_purchase_unit'];
$sales_rate=$_POST['sales_rate'];
$puchase_rate=$_POST['puchase_rate'];
$tax=$_POST['tax'];
$sales_rate_with_tax=$_POST['sales_rate_with_tax'];
$create_date=$_POST['create_date'];
$vat_category=$_POST['vat_category'];

 $query="INSERT INTO product_table VALUES ('','$product_code','$product_name', '$sales_purchase_unit', '$sales_rate','$puchase_rate','$tax','$sales_rate_with_tax','' ,'$create_date','$vat_category')";
mysqli_query($conn,$query);
 header("location:product_master.php?err=800");

}
 ?>

                   </div>
                 </div>
               </div>
                
               <!-- Item Table -->
               <div class="clearfix"></div>
               <!-- Items Table starts -->
               <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
            
    <div class="x_panel">
        <div class="x_title">
          <h2>Product Details</h2>
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
                  <th class="column-title">Product Name </th>
                  <th class="column-title">Purchase Rate</th>
                  <th class="column-title">Sales Rate </th>
                  <th class="column-title">Create Date </th>
                  
                  <th class="column-title">       </th>
                  <th class="column-title">       </th>

                  
                </tr>
              </thead>

              <tbody>
               <?php 
               include 'config.php';
               $result="SELECT  * FROM product_table";
               $query = mysqli_query($conn, $result);
               if(!$query) {
                $message = "Error" . mysqli_error($conn);
                return $message;
              }

              while ($row = mysqli_fetch_array( $query ) ) {
                
               ?>

               <tr class="even pointer">
                
                 <td class=" " style="padding: 15px;"><?php echo $row['product_code']; ?></td>
                  <td class=" " style="padding: 15px;" ><?php echo $row['product_name']; ?></td>
                  <td class=" " style="padding: 15px;"><?php echo $row['purchase_rate']; ?></td>
                  <td class=" " style="padding: 15px;"><?php echo $row['sales_rate']; ?></td>
                  <td class=" " style="padding: 15px;"><?php echo $row['create_date']; ?></td>
                  
                  <td class=" "><a class="btn btn-default btn-sm btn-success" href="edit_product_master.php?p_id=<?php echo $row['id']; ?>" role="button">Edit </a></td>
                  <td class=" "><a class="btn btn-default btn-danger btn-sm" href="delete_product_master.php?p_id=<?php echo $row['id']; ?>" role="button">Delete</a></td>
                
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
include 'footer.php';
 ?>
<!-- /compose -->

</body>
<script type="text/javascript">
  


$("#vat").blur(function() {
  var sale=parseFloat($("#sl_rt").val());
  var vat=parseFloat($(this).val());

  var vatprice= (vat/100)*sale;
   var ttl=sale+vatprice;

   $("#ttl").val(ttl);


})


</script>
</html>