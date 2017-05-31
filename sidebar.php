<?php ob_start();
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['userid'])) {
  header("location:index.php?err=400");
}



 ?>

<div class="container body" >
              <div class="main_container">
                <div class="col-md-3 left_col">
                  <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                      <a href="" class="site_title"> <span><img src="img/logo2.png" id="logocompany" class="img-responsive" style="padding-top: 6px;"></span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                      <div class="profile_pic">
                        <img src="img/pic3.png" alt="..." class="img-circle profile_img">
                      </div>
                      <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?php 
          echo $_SESSION['username'];

           ?></h2>
                      </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><br>
                      <div class="menu_section">
                        <h3>Dashboard</h3>
                        <ul class="nav side-menu" >
                          <li><a><i class="fa fa-cog" aria-hidden="true"></i> Master <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="product_master.php">Product Master</a></li>
                              <li><a href="customer_vender.php">Customer/Vender Master</a></li>
                            </ul>
                          </li>
                          <li><a><i class="fa fa-shopping-cart" aria-hidden="true"></i></i> Purchase <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="purchase_enquiry.php">Purchase Enquiry</a></li>
                              <li><a href="purchase_return.php">Purchase Return</a></li>
                              <li><a href="purchase_order.php">Purchase Order</a></li>
                            </ul>
                          </li>
                           <li><a><i class="fa fa-recycle" aria-hidden="true"></i>Sales <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="bill_create.php">Bill Create</a></li>
                              <li><a href="chalan_create.php">Chalan Create</a></li>
                              <li><a href="bill_list.php">Bills Lists</a></li>
                              <li><a href="chalan_list.php">Chalan Lists</a></li>
                              <li><a href="sales_return.php">Sales Return</a></li>

                            </ul>
                          </li>
                          <!-- <li><a><i class="fa fa-recycle" aria-hidden="true"></i>Sales <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a><i class="fa fa-inr" aria-hidden="true"></i>Sales Invoice <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                  <li><a href="bill_create.php">Bill Create</a></li>
                                  <li><a href="chalan_create.php">Chalan Create</a></li>
                                </ul>
                                <li><a href="bill_list.php">Bills Lists</a></li>
                                <li><a href="chalan_list.php">Chalan Lists</a></li>
                                <li><a href="sales_return.php">Sales Return</a></li>
                              </ul>
                            </li> -->
                            <li><a><i class="fa fa-cog" aria-hidden="true"></i>Employees Master <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                <li><a href="employee_master.php">Employees Info</a></li>
                                <li><a href="today_attendence.php">Today Attendence</a></li>
                                <li><a href="view_attendence.php">View Attendence</a></li>
                              </ul>
                            </li>
                            <li><a><i class="fa fa-cog" aria-hidden="true"></i></i>Payroll <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                <li><a href="make_salary.php">Make Salary</a></li>
                                <li><a href="salary_list.php">Salary List</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                        

                      </div>
                      <!-- /sidebar menu -->

                      <!-- /menu footer buttons -->
                      <div class="sidebar-footer hidden-small">
                        
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                      </div>
                      <!-- /menu footer buttons -->
                    </div>
                  </div>

                  <!-- top navigation -->
                  <div class="top_nav">
                    <div class="nav_menu">
                      <nav>
                        <div class="nav toggle">
                          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                          <li class="">
                            <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                           
                          </li>
                          </ul>
                      </nav>
                    </div>
                  </div>
                  <!-- /top navigation -->