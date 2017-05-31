  <?php 
  include 'config.php';
$p_id=$_GET['p_id'];

$q="select * from product_table where `id`='$p_id'";
$e=mysqli_query($conn,$q);
$data=mysqli_fetch_array($e);
?> 
<?php 
include 'header.php'; 
?>

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

                      
                      </div>

                        <div class="clearfix"></div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="x_panel">
                            <?php 
                              if (isset($_GET['err'])) {
                                if ($_GET['err']==200) {
                                  ?>
                                  <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Updated !</strong> Your Data is Updated
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
                                      <input type="text" name="product_code" class="form-control" id="ProductNo@" value="<?php echo $data['product_code'];?>" placeholder=""/>
                                      
                                    </div>
                                  </div>
                                </div> 

                                <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Product Name* :</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="product_name" class="form-control"  value="<?php echo $data['product_name']; ?>"  placeholder="" required/>
                                       
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                               <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Sale/Purchase Unit :</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="sales_purchase_unit" value="<?php echo $data['sales_purchase_unit']; ?>" class="form-control" id="ProductNo@" placeholder="">
                                  </div>
                                </div>
                              </div> 

                              <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Purchase Rate* :</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="purchase_rate" value="<?php echo $data['purchase_rate']; ?>" class="form-control" id="ProductName@" placeholder="" required>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Sale Rate* :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="sales_rate" value="<?php echo $data['sales_rate']; ?>" class="form-control" id="sl_rt" placeholder="" required>
                                </div>
                              </div>
                            </div>


                            <div class="col-md-6">

                              <div class="form-group">
                                <label for="Via Category"  class="col-sm-4 control-label">Vat Category :</label>
                                <div class="col-sm-8">
                                  <select class="form-control" value="<?php echo $data['vat_category']; ?>" name="vat_category" id="vatCategory@">
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
                                <input type="text" value="<?php echo $data['tax']; ?>" name="tax" class="form-control" id="vat" placeholder="0">
                              </div>
                            </div>
                          </div> 

                          <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Sale Rate With Vat * :</label>
                              <div class="col-sm-8">
                                <input type="text" value="<?php echo $data['sales_rate_with_tax']; ?>" name="sales_rate_with_tax" class="form-control" id="ttl" placeholder="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Create Date* :</label>
                              <div class="col-sm-8">
                                <input type="Date" name="create_date" value="create_date" class="form-control" id="ttl" placeholder="" required>
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
$purchase_rate=$_POST['purchase_rate'];
$tax=$_POST['tax'];
$sales_rate_with_tax=$_POST['sales_rate_with_tax'];
$create_date=$_POST['create_date'];
$vat_category=$_POST['vat_category'];

 $query="UPDATE `product_table` SET `product_code`='$product_code',`product_name`='$product_name',`sales_purchase_unit`='$sales_purchase_unit',`sales_rate`='$sales_rate',`purchase_rate`='$purchase_rate',`tax`='$tax',`sales_rate_with_tax`='$sales_rate_with_tax' ,`create_date`='$create_date',`vat_category`='$vat_category'  WHERE `id`='$p_id'";
mysqli_query($conn,$query);
header("location:edit_product_master.php?p_id=$p_id&err=200");

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