<?php include_once "header.php"?>


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
                        <?php include_once "../config.php";
												$st=new student();
												//$class="class9";
												$class=$_GET['class'];
												$sid=$_GET['sid'];
												$data=$st->view_detail($class,$sid);
												?>
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
						<div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    								
									<div class="table-responsive">
								<?php
												foreach($data as $rw)
												{
											?>
                                    
									<table style="width:100%;margin:auto;border:1px solid #000;font-family:arial;" cellspacing="20">
		<tr>
		<td>
		
		<table style="width:100%;margin:auto;font-family:arialpadding:10px;" cellpadding="0" cellspacing="0">	
			<tr style="width:100%;line-height:30px;">
				<td colspan="3">
					<table width="100%" cellpadding="0" cellspacing="0" style="border-bottom:2px solid #000;padding-bottom:10px;margin-bottom:10px;">
						<tr height="50px" valign="middle">
							<td style="width:70%;padding:10px">
								<img src="<?php echo $st->base_url;?>/img/logo.png" alt="logo">
							</td>
							<td style="width:30%;height:auto;border-left:2px solid #000;text-align:right;">
								<h2 style="font-size:28px;font-weight:600;color:#000;margin:0px;padding:0px; border-bottom:2px solid #000;margin-left:10px;margin-bottom:10px;">PACE INSTITUTE</h2>
								<p style="font-size:15px;padding:0px;margin:0px;margin-left:10px;font-weight:600;margin:10px">IIT-JEE/NEET/FOUNDATION</p>
							</td>
						</tr>
		
					</table>
				</td>
			</tr>
			<tr style="width:100%;height:120px;line-height:25px;">		
			<td style="width:70%;text-align:center;margin-top:0px;">
			<h2 style="font-size:35px;font-weight:600;color:#000;margin:0;margin-top:0;">PACE ARISE-2022-2023</h2>								
			<p style="font-size:16px;font-weight:600;color:#000;margin:0;">Registration Form</p>
			<table style="width:100%;">
			<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Test Date :</p></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;border:1px solid #000;padding:3px 7px 3px 7px;">24 Dec 2022</p></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">Date of Registration :</p></td>
							<td><input type="text" style="border:none;border-bottom:1px dotted;width:70%;"></td>
						</tr>
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Registration No.:<br>(for official use only)</p></td>
							<td colspan="3"><input type="text" style="width:70%;height:25px;"></td>
						</tr>
					</table>
				</td>
				<td style="width:30%;">
					<div style="width:200px;height:200px;text-align:right;border:1px solid;padding:4px;float:right;">
						<!--<img src="uploads/'.$rw['class'].'/'.$rw['picture'].'" width="100%">-->
						<img src="<?php echo $st->base_url;?>/uploads/<?php echo $class;?>/<?php echo $rw['picture'];?>" width="100%">
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:10px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Name of the Student :</p></td>
							<td><?php echo $rw['sname'];?></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">Date of Birth :</p></td>
							<td><?php echo $rw['dob'];?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Father`s Name :</p></td>
							<td><?php echo $rw['fname'];?></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">Mother`s Name :</p></td>
							<td><?php echo $rw['mname'];?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">SCHOOL :</p></td>
							<td><?php echo $rw['school'];?></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">Class presently studying in :</p></td>
							<td><?php echo $rw['class'];?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">House Address  :</p></td>
							<td><?php echo $rw['haddress'];?></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">City  :</p></td>
							<td><?php echo $rw['city'];?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Contact No. (Father) :</p></td>
							<td><?php echo $rw['fcontactno'];?></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">Contact No. (Mother):</p></td>
							<td><?php echo $rw['fcontactno'];?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Contact No. (Student):</p></td>
							<td><?php echo $rw['scontactno'];?></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">E-mail ID:</p></td>
							<td><?php echo $rw['emailid'];?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Percentage (%) of marks obtained in last exam : Maths </p></td>
							<td><?php echo $rw['mathmarks'];?></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Science </p></td>
							<td><?php echo $rw['sciencemarks'];?></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Tot. Agg. (All Sub.)</p></td>
							<td><?php echo $rw['totalmarks'];?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Career Option: </p></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;"><?php echo $rw['careeroption'];?><!--[Engineering / Medical / Others]--></p></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:40px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Declaration</p></td>
						</tr>
						<tr>
							<td><p style="font-size:14px;color:#000;margin:0;margin-top:10px">I authorise <b>PACE INSTITUTE</b> to call me and send me information by sms, e-mail, post on the above mentioned communication details.</p></td>
						</tr>
					</table>
				</td>
			</tr>
			
			<tr>
				<td colspan="3">
					<table style="line-height:20px;margin:100px;" cellpadding="0" cellspacing="0">
						
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-top:30px;text-align:right;">(Signature of Student) </p></td>
						</tr>
					</table>
				</td>
			</tr>
			
			</table>
			</td>
			</tr>
			</table>
			<?php 
			}?>
			
			</div>						
									
                                    </div>
                                </div>

                            </div>

                        </div>
                       
                        <!-- end row -->


                       
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