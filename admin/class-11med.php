<?php include_once "header.php";?>
<?php include_once "../config.php";
												
												$st=new student();
												$class="class11med";
												$data=$st->view($class);
												
												?>



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
                                    <h4 class="page-title"><?php echo $class;?></h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Adminox</a>
                                        </li>
                                        <li>
                                            <a href="index.php">Dashboard</a>
                                        </li>
                                        <li class="active">
                                           <?php echo $class;?>
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
						
                        <!-- end row -->
					<div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                        <a href="export.php?class=class11med">Export Data</a>                           

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                                <th>Image</th>
                                                <th>RegNo</th>
												<th>Student Name</th>
												<th>School</th>
                                                <th>Class</th>
												 <th>Father Name</th>
                                                <th>Father Contact</th>
                                                <th>Mother Contact</th>
                                                <th>Address</th>
                                                <th>City</th>
												<th>View</th>
												<th>Edit</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                       <!--<tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>-->
                                        <?php
												foreach($data as $rw)
												{
											?>
                                            <tr>
                                                <td><img src="<?php echo $st->base_url;?>/uploads/<?php echo $class;?>/<?php echo $rw['picture'];?>" height="90px" width="90px"></th>
                                                <td><?php echo $rw['regno'];?></td>
												<td><?php echo $rw['sname'];?></td>
												 <td><?php echo $rw['school'];?></td>
                                                <td><?php echo $rw['class'];?></td>
												 <td><?php echo $rw['fname'];?></td>
                                                <td><?php echo $rw['fcontactno'];?></td>
                                                <td><?php echo $rw['mcontactno'];?></td>
                                                <td><?php echo $rw['haddress'];?></td>
                                                <td><?php echo $rw['city'];?></td>
												<td><a href="view-detail.php?sid=<?php echo $rw['sid'];?>&class=<?php echo $class;?>">View Detail</a></td>
												<td><a href="edit-detail.php?sid=<?php echo $rw['sid'];?>&class=<?php echo $class;?>&classfile=class-11med">Edit</a></td>
												<td><a href="del.php?sid=<?php echo $rw['sid'];?>&class=<?php echo $class;?>&classfile=class-11med" onclick="return confirmation()">Delete</a></td>
                                            </tr>
												<?php
												}
												?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                       
                        <!-- end row -->


                        
                        <!--- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                     2022 © Pace Institute - admin panel
				</footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <?php include_once "script.php";?>

    </body>
</html>