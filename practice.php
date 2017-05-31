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
                          <h3><i class="fa fa-cog  fa-lg" aria-hidden="true"></i> Practice</h3>
                        </div>

                        <div class="title_right">
                          <div class="col-md-2 col-sm-8 col-xs-7 form-group pull-right top_search">
                            <div class="input-group">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Help!</button>
                               <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                     <img src="images/product.png" class="img-responsive" alt="Responsive image">
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
                            
                            <div class="x_title">
                            <h2>General Details</h2>
                            <div class="clearfix"></div>
                          </div>
                          <form action="#">
                          
                           name with space
                           <input id="inputTextBox" class="name" type="text"/>
                           <div id="errorMsg1"></div>
                           <br>
                           <br>
                           Number only Messege
                           <input type="text" name="number1" id="number1" maxlength="10" onkeypress="return checkOnlyDigits(event)"/>
                           <div id="errorMsg"></div>
                              <br>

                               Email
                            <input type="text" onblur="validateEmail(this);" />
                            <div id="errorMsg3"></div>
                            <input type="submit" name="submit">
                          </form>
                              <br>
  
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
<script type="text/javascript" src="js/validations.js">
 
</script>


</body>

</html>