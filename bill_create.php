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
                          <h3><i class="fa fa-cog  fa-lg" aria-hidden="true"></i>Bill Create</h3>
                        </div>

                        <div class="title_right">
                          <div class="col-md-2 col-sm-8 col-xs-7 form-group pull-right top_search">
                            <div class="input-group">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Help!</button>
                               <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                     <h3 style="text-align: center;">Note</h3>
                                    <br>
                                    <h2>1. Only numeric values are allowed in rate quantity and invoice number field.
                                    <br>
                                    <br>
                                    2. When you enter the rate and quantity of an item the amount in ruppees of each item is calculated.
                                     <br>
                                    <br>
                                    3. When amount in rupees is calculated the total amount should be calculated automaticallly.
                                     <br>
                                    <br>
                                    4. After you enter the vat % then the grand total of items should be calculated.
                                     <br>
                                    <br>
                                    5. When you click on save button one copy is saved in database and pdf  of the bill is generated you can print the pdf.
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
                                    <label for="inputEmail3" class="col-sm-4 control-label">Tin No :</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="tin_no" class="form-control" id="TinNo@ placeholder="" onkeypress="return checkOnlyDigits_TinNo(event)"/>
                                     <div id="error_TinNo"></div>
                                    </div>
                                  </div>
                                </div> 

                                <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Invoice No* :</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="invoice_no" class="form-control" id="invoiceno" placeholder="" required onkeypress="return checkOnlyDigits_invoice_no(event)"/>
                                      <div id="error_invoice_no"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                               <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Date :</label>
                                  <div class="col-sm-8">
                                    <input type="Date" name="date" class="form-control" id="date" placeholder="">
                                  </div>
                                </div>
                              </div> 

                              <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Name* :</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="" required>
                                    <div id="error_name"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Tin/Vrn/CST No* :</label>
                                <div class="col-sm-8">
                                  <input type="text" name="tin_vrn_cst" class="form-control" id="sl_rt" placeholder="" required>
                                </div>
                              </div>
                            </div>


                            <div class="col-md-6">

                              <div class="form-group">
                                <label for="Via Category"  class="col-sm-4 control-label">Description :</label>
                                <div class="col-md-3">
                                  <textarea class="form-control" rows="1" name="desc_one" placeholder="Item 1"></textarea>
                                </div>
                                <div class="col-md-3">
                                  <textarea class="form-control" rows="1" name="desc_two" placeholder="Item 2"></textarea>
                                </div>
                                 <div class="col-md-2">
                                  <textarea class="form-control" rows="1" placeholder="Item 3" name="desc_three"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                           <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Rate :</label>
                              <div class="col-sm-3">
                                <input type="text" name="rate_one" class="form-control" id="rate_one" placeholder="Item 1" onkeypress="return checkOnlyDigits_rate_one(event)"/>
                                <div id="error_rate_one"></div>
                              </div>
                               <div class="col-sm-3">
                                <input type="text" name="rate_two" class="form-control" id="rate_two" placeholder="Item 2" onkeypress="return checkOnlyDigits_rate_two(event)"/>
                                <div id="error_rate_two"></div>
                                </div>
                                 <div class="col-sm-2">
                                <input type="text" name="rate_three" class="form-control" id="rate_three" placeholder="Item3" onkeypress="return checkOnlyDigits_rate_three(event)"/>
                                <div id="error_rate_three"></div>
                              </div>
                              </div>
                            </div>
                         
                          <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Quantity :</label>
                              <div class="col-sm-3">
                                <input type="text" name="qty_one" class="form-control" id="qty_one" placeholder="Item 1" onkeypress="return checkOnlyDigits_qty_one(event)"/>
                                <div id="error_qty_one"></div>
                              </div>
                              <div class="col-sm-3">
                                <input type="text" name="qty_two" class="form-control" id="qty_two" placeholder="Item 2" onkeypress="return checkOnlyDigits_qty_two(event)"/>
                                <div id="error_qty_two"></div>
                              </div>
                              <div class="col-sm-2">
                                <input type="text" name="qty_three" class="form-control" id="qty_three" placeholder="Item 3" onkeypress="return checkOnlyDigits_qty_three(event)"/>
                                <div id="error_qty_three"></div>
                              </div>
                            </div>
                          </div>
                      
                        </div>
                        <div class="row">
                           <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Amount In Rs.* :</label>
                              <div class="col-sm-3">
                                <input type="text" name="amount_rs_one" class="form-control" id="amount_rs_one" placeholder="Item 1 " required>
                              </div>
                              <div class="col-sm-3">
                                <input type="text" name="amount_rs_two" class="form-control" id="amount_rs_two" placeholder="Item 2" required>
                              </div>
                              <div class="col-sm-2">
                                <input type="text" name="amount_rs_three" class="form-control" id="amount_rs_three" placeholder=" Item3" required>
                              </div>
                            </div>
                          </div>
                           <div class="col-md-6">
                                <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Total :</label>
                              <div class="col-sm-8">
                                <input type="text" name="total" class="form-control" id="total" placeholder="">
                              </div>
                            </div>
                           
                          </div> 
                          
                        </div>
                         <div class="row">
                           <div class="col-md-6">

                           
                          </div>
                           <div class="col-md-6">
                           <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Vat(%) :</label>
                              <div class="col-sm-8">
                                <input type="text" name="tax" class="form-control" id="vat" placeholder="0">
                              </div>
                            </div>
                         
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                          
                        </div>
                           <div class="col-md-6">

                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Grand Total :</label>
                              <div class="col-sm-8">
                                <input type="text" name="grand_total" class="form-control" id="grand_total" placeholder="">
                              </div>
                            </div>
                          </div>
                         
                        </div><br>
                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="form-group">
                            <div class="col-sm-8">
                             <button type="reset" class="btn btn-default">Reset</button>
                            <a href=""> <input class="btn btn-info" name="save" type="submit" value="Save"></a>
                           </div>
                         </div>
                       </div>
                     </form><br>
                     



                   </div>
                 </div>
               </div>
                
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
include 'footer.php';
 ?>
<!-- /compose -->

</body>
<script type="text/javascript">
  

$("#amount_rs_one").blur(function() {
   var qty_one=parseFloat($("#qty_one").val());
  var rate_one=parseFloat($("#rate_one").val());
  var amount_rs_one= qty_one*rate_one;
   $("#amount_rs_one").val(amount_rs_one);

})
$("#amount_rs_two").blur(function() {
   var qty_two=parseFloat($("#qty_two").val());
  var rate_two=parseFloat($("#rate_two").val());
  var amount_rs_two= qty_two*rate_two;
   $("#amount_rs_two").val(amount_rs_two);

})

$("#amount_rs_three").blur(function() {
   var qty_three=parseFloat($("#qty_three").val());
  var rate_three=parseFloat($("#rate_three").val());
  var amount_rs_three= qty_three*rate_three;
   $("#amount_rs_three").val(amount_rs_three);

})

$("#total").blur(function() {
  var amount_one=parseFloat($("#amount_rs_one").val());
   var amount_two=parseFloat($("#amount_rs_two").val());
    var amount_three=parseFloat($("#amount_rs_three").val());
  // var vat=parseFloat($(this).val());

  var total= amount_one+amount_two+amount_three;
   

   $("#total").val(total);

})

$("#vat").blur(function() {
  var total=parseFloat($("#total").val());
  var vat=parseFloat($(this).val());

  var vatprice= (vat/100)*total;
   var grand_total=total+vatprice;

   $("#grand_total").val(grand_total);
})

</script>
</html>

<?php 
include 'config.php';
if(isset($_POST['save']))
{

  $tin_no=$_POST['tin_no'];
  $invoice_no=$_POST['invoice_no'];
  $date=$_POST['date'];
  $name=$_POST['name'];
  $tin_vrn_cst=$_POST['tin_vrn_cst'];
  $desc_one=$_POST['desc_one'];
  $desc_two=$_POST['desc_two'];
  $desc_three=$_POST['desc_three'];
  $qty_one=$_POST['qty_one'];
  $qty_two=$_POST['qty_two'];
  $qty_three=$_POST['qty_three'];
  $rate_one=$_POST['rate_one'];
  $rate_two=$_POST['rate_two'];
  $rate_three=$_POST['rate_three'];
  $amount_rs_one=$_POST['amount_rs_one'];
  $amount_rs_two=$_POST['amount_rs_two'];
  $amount_rs_three=$_POST['amount_rs_three'];
  $total=$_POST['total'];
  $grand_total=$_POST['grand_total'];
  $tax=$_POST['tax'];
  
  
 $query="INSERT INTO bill_invoice VALUES ('','$tin_no','$invoice_no','$date','$name','$tin_vrn_cst','$desc_one','$desc_two','$desc_three','$qty_one','$qty_two','$qty_three','$rate_one','$rate_two','$rate_three','$amount_rs_one','$amount_rs_two','$amount_rs_three','$total','$grand_total','$tax')";
mysqli_query($conn,$query);

 header("location:vat_invoice.php?invoice_no=$invoice_no&err=800");

}
 ?>