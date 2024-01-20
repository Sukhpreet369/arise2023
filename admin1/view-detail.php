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
                                            <a href="#">Admin</a>
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
                                    
									<table style="font-family:arial;" >
<tr>
<td>

<table cellpadding="0" cellspacing="0" width="100%" align="center">
<tr>
<td width="100%">
<table width="100%">
<tr height="50px" valign="middle">
<td style="width:100%;padding:0px">
<img src="<?php echo $st->base_url;?>/img/header.jpg" alt="logo" style="width:100%;">
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table width="100%">
<tr>
<td width="70%">
<table style="margin-top:70px;width:100%;">
<tr>
<td><p style="font-size:14px;font-weight:600;color:#000;">Test Date :</p></td>
<td><p style="font-size:14px;color:#000;margin:0;border:1px solid #000;padding:3px 7px 3px 7px;">26 JAN 2021</p></td>
<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Date of Registration :</p></td>
<td><?php echo $rw['dor'];?></td>
</tr>
<tr>
<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Registration No.:<br>(for official use only)</p></td>
<td colspan="3"><?php echo $rw['regno'];?></td>
</tr>
</table>
</td>
<td width="30%">
<div style="width:200px;border:1px solid;padding:5px;text-align:right;float:right;">
<img src="<?php echo $st->base_url.'uploads/'.$rw['class'].'/'.$rw['picture'];?>" width="100%">
<!--<img src="uploads/class5/1.jpg" width="100%">-->
</div>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table style="margin-top:40px;" width="100%">
<tr>
<td><p style="font-size:14px;color:#000;"><b>Name of the Student :</b> <?php echo $rw['sname'];?></p></td>
<td><p style="font-size:14px;color:#000;"><b>Date of Birth :</b> <?php echo $rw['dob'];?></p></td>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>Father`s Name :</b><?php echo $rw['fname'];?></p></td>
<td><p style="font-size:14px;color:#000;"><b>Mother`s Name :</b><?php echo $rw['mname'];?></p></td>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>SCHOOL :</b><?php echo $rw['school'];?></p></td>
<td><p style="font-size:14px;color:#000;"><b>Class presently studying in :</b><?php echo $rw['class'];?></p></td>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>House Address :</b><?php echo $rw['haddress'];?></p></td>
<td><p style="font-size:14px;color:#000;"><b>City :</b><?php echo $rw['city'];?></p></td>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>Contact No. (Father) :</b><?php echo $rw['fcontactno'];?></p></td>
<td><p style="font-size:14px;color:#000;"><b>Contact No. (Mother):</b><?php echo $rw['fcontactno'];?></p></td>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>Contact No. (Student):</b><?php echo $rw['scontactno'];?></p></td>
<td><p style="font-size:14px;color:#000;"><b>E-mail ID:</b><?php echo $rw['emailid'];?></p></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table width="100%">
<tr>
<td colspan="3"><p style="font-size:14px;color:#000;"><b>Marks obtained in previous class :</b></p></td>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>Maths </b><?php echo $rw['mathmarks'];?></p></td>
<td><p style="font-size:14px;color:#000;"><b>Science :</b><?php echo $rw['sciencemarks'];?> </p></td>
<td><p style="font-size:14px;color:#000;"><b>Overall %age in preious class:</b><?php echo $rw['totalmarks'];?></p></td>
</tr>
</table>
</td>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>Career Option:</b><?php echo $rw['careeroption'];?> </p></td>
<td><p style="font-size:14px;color:#000;"></td>
</tr>
<tr>
<td>
<p style="font-size:14px;font-weight:600;color:#000;margin:0;">Declaration</p>
<p style="font-size:14px;color:#000;margin:0;margin-top:10px">I authorise <b>PACE INSTITUTE</b> to call me and send me information by sms, e-mail, post on the above mentioned communication details.</p>
</td>

</tr>

<tr>
<td>
<table style="width:100%;line-height:20px;margin-top:100px;" cellpadding="0" cellspacing="0">
<tr>
<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-top:30px;text-align:right;">(Signature of Student) </p></td>
</tr>
</table>
</td>
</tr>

<tr>
<td>
<p style="font-size:20px;font-weight:600;color:#000;margin:0;margin-top:100px;text-align:center;">TERMS & CONDITIONS</p>
</td>
</tr>

<tr>
<td>
<ol>

<li>It is compulsory/mandatory to provide e-mail I.D. / Mobile No. of the student / father / guardian. The result of test or
any other information by the institute will be sent to the student only on given contact details. Institute shall not be
responsible if any information regarding result or anything else is not received by the student if he/she has not given
his/her e-mail I.D. in the Form at the time of registration</li>
<li>Fee waivers for PACE programs will be decided on the basis of performance and subject to scoring above minimum cutoff marks in each subject and minimum cut-off marks in aggregate.
</li>
<li>The final discretion of award of fee waivers for PACE programs remains with PACE management and this decision will be
final and binding on the candidate.</li>
</ol>
</td>
</tr>





</table>
</td>
</tr>


<tr>
<td>

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
                    2020 © paceinstitute.in_array
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