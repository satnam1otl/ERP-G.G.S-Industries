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
                          <h3><i class="fa fa-cog  fa-lg" aria-hidden="true"></i>&nbsp;Chalan Create</h3>
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
                                    <h2>1. Only numeric values are allowed in chalan no and  quantity 
                                    <br>
                                    <br>
                                    
                                    2. When you click on save button one copy is saved in database and pdf  of the chalan is generated you can print the pdf.
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
                                    <label for="inputEmail3" class="col-sm-4 control-label">Chalan No :</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="chalan_no" class="form-control" id="chalan_no" placeholder="" onkeypress="return checkOnlyDigits_chalan_no(event)"/>
                           <div id="error_chalan_no"></div>
                                     
                                    </div>
                                  </div>
                                </div> 
                               
                              <div class="col-md-6">

                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-4 control-label">Name* :</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" id="name_chalan" placeholder="" required>
                                    <div id="error_name_chalan"></div>
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
                                  <label for="inputEmail3" class="col-sm-4 control-label">Quantity:</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="quantity" class="form-control" id="quantity" placeholder="" onkeypress="return checkOnlyDigits_qty(event)"/>
                           <div id="error_qty"></div>
                                  </div>
                                </div>
                              </div> 
                              

                            </div>
                       <div class="row">
                              <div class="col-md-6">

                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Particulars* :</label>
                                    <div class="col-sm-8">
                                    <textarea name="particulars" value="particulars" class="form-control" required=""></textarea>
                                     
                                    </div>
                                  </div>
                                </div> 

                            </div>
                       
                       <br>
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
</html>

<?php 
include 'config.php';
if(isset($_POST['save']))
{

  $chalan_no=$_POST['chalan_no'];
  $particulars=$_POST['particulars'];
  $name=$_POST['name'];
  $quantity=$_POST['quantity'];
  $date=$_POST['date'];
 
  
  
 $query="INSERT INTO chalan VALUES ('$chalan_no','$particulars','$name','$quantity','$date')";
mysqli_query($conn,$query);

 header("location:chalan_pdf.php?chalan_no=$chalan_no&err=800");

}
 ?>