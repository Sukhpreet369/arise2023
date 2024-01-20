<?php include_once "header.php";?>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metisMenu nav" id="side-menu">
                            <li class="menu-title">Navigation</li>
                            <li><a href="index.php">Dashboard</a></li>             
                            <li>
                                <a href="javascript: void(0);" aria-expanded="true"><i class="fi-target"></i> <span> Classes </span> <span class="menu-arrow"></span></a>
                                <?php include_once "menu.php";?>
								
                            </li>

                            
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Pace Institute</a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-lg-4 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Class 7 Total Students</p>
                                        <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?php  echo $st->countstudent("class7");?></span></h2>
                                        
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-4 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Class 8 Total Students</p>
                                        <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?php  echo $st->countstudent("class8");?></span></h2>
                                       
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-4 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                   <i class="mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Class 9 Total Students</p>
                                        <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?php  echo $st->countstudent("class9");?></span></h2>
                                       
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-6 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                   <i class="mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Class 10 Total Students</p>
                                        <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?php  echo $st->countstudent("class10");?></span></h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div><!-- end col -->
							<div class="col-lg-6 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                   <i class="mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Class +1 Total Students</p>
                                        <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?php  echo $st->countstudent("class11");?></span></h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->




                        <!--- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 © Adminox. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="../plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="../plugins/c3/c3.min.js"></script>

        <!--Echart Chart-->
		<script src="../plugins/echart/echarts-all.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>