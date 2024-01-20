<?php ob_start();
 include_once "header.php";?>
<script>
		function validate(f)
			{
			let sname=f.sname;
			let dob=f.dob;
			let fname=f.fname;
			let mname=f.mname;
			let school=f.school;
			let clas=f.class;
			let haddress=f.haddress;
			let city=f.city;
			let fcontactno=f.fcontactno;
			let mcontactno=f.mcontactno;
			let scontactno=f.scontactno;
			let emailid=f.emailid;
			let mathmarks=f.mathmarks;
			let sciencemarks=f.sciencemarks;
			let totalmarks=f.totalmarks;
			let careeroption=f.careeroption;
			let imgfile=f.imgfile;		
			if(sname.value=='')
				{ 
					document.getElementById('nameerror').innerHTML= " Student Name should not be blank ";	
					return false;
				}
				if(dob.value=="")
				{
					document.getElementById('bdateerror').innerHTML= " Date Of Birth should not be blank";
					return false;
				}
				if(fname.value=="")
				{
					document.getElementById('fathernameerror').innerHTML= " Father Name should not be blank ";
					return false;
				}
				if(mname.value=="")
				{
					document.getElementById('mothernameerror').innerHTML= " Mother Name should not be blank ";
					return false;
				}
				if(school.value=="")
				{
					document.getElementById('schoolerror').innerHTML= " School should not be blank ";
					return false;
				}
				if(clas.value=="")
				{
					document.getElementById('classerror').innerHTML= " Class Presently studying in should not be blank ";
					return false;
				}
				if(haddress.value=="")
				{
					document.getElementById('addresserror').innerHTML= " House Address should not be blank ";
					return false;
				}
				if(city.value=="")
				{
					document.getElementById('cityerror').innerHTML= " City should not be blank  ";
					return false;
				}
				if(fcontactno.value=="")
				{
					document.getElementById('fcontacterror').innerHTML= " Contact No (Father) should not be blank ";
					return false;
				}
				if(mcontactno.value=="")
				{
					document.getElementById('mcontacterror').innerHTML= " Contact No (Mother) should not be blank ";
					return false;
				}
				if(scontactno.value=="")
				{
					document.getElementById('scontacterror').innerHTML= "Contact No (Student) should not be blank ";
					return false;
				}
				if(emailid.value=="")
				{
					document.getElementById('emailerror').innerHTML= " Email Id should not be blank ";
					return false;
				}
				if(mathmarks.value=="")
				{
					document.getElementById('matherror').innerHTML= " Maths should not be blank ";
					return false;
				}
				if(sciencemarks.value=="")
				{
					document.getElementById('scienceerror').innerHTML= " Science should not be blank ";
					return false;
				}
				if(totalmarks.value=="")
				{
					document.getElementById('totalerror').innerHTML= " Total Aggregated should not be blank ";
					return false;
				}
				if(careeroption.value=="")
				{
					document.getElementById('careererror').innerHTML= " Career Option should not be blank ";
					return false;
				}
				if(imgfile.files.length==0)
				{
					document.getElementById('imgfileerror').innerHTML=" No file selected";
				}
				return true;
			}
	</script>
<style>
		.error-color{color:yellow;}
	</style>
            
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
                        <?php 
						 if(isset($_POST['submit'])){
			    include_once "../config.php";
				$classfile=$_POST['classfile'];
				$sid=$_POST['sid'];
				$sname=$_POST['sname'];
				$dob=$_POST['dob'];
				$fname=$_POST['fname'];
				$mname=$_POST['mname'];
				$school=$_POST['school'];
				$class=$_POST['class'];
				$haddress=$_POST['haddress'];
				$city=$_POST['city'];
				$fcontactno=$_POST['fcontactno'];
				$mcontactno=$_POST['mcontactno'];
				$scontactno=$_POST['scontactno'];
				$emailid=$_POST['emailid'];
				$mathmarks=$_POST['mathmarks'];
				$sciencemarks=$_POST['sciencemarks'];
				$totalmarks=$_POST['totalmarks'];
				$careeroption=$_POST['careeroption'];
				$oldpic=$_POST['oldpic'];
				$pic=$_FILES['pic']["name"];
				$picture="";
				if(strlen($pic)>0)
				{	$picture=$pic;
				}
				else{
					$picture=$oldpic;
				}

				$student=new student();
				$result=$student->update_reg($sid,$sname,$dob,$fname,$mname,$school,$class,$haddress,$city,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$careeroption,$picture);
				//$student->genpdf();
				if(strlen($pic)>0)
				 {
					 $p="../uploads/".$class."/".$pic;
				move_uploaded_file($_FILES['pic']['tmp_name'],$p);
				}
				header("location:".$classfile.".php");
				?>
				
				<?php 
				}
							
				else{
			?> 
						
						<?php include_once "../config.php";
												$st=new student();
												//$class="class9";
												$class=$_GET['class'];
												$sid=$_GET['sid'];
												$classfile=$_GET['classfile'];
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
                                    
									<form method="post" action="" onsubmit="return validate(this)" enctype="multipart/form-data">
             <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
					<input type="hidden" name="classfile" value="<?php echo $classfile;?>">
                    <input type="hidden" value="<?php echo $rw['sid'];?>" name="sid">
					<label for="studetnName">Student Name</label>
                    <input type="text" class="form-control" id="studentName"  name="sname" placeholder="" value="<?php echo $rw['sname'];?>" >
                    <span id="nameerror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="bdate">Date Of Birth</label>
					<?php $d=$rw['dob'];
						$d1=strtotime($d);
						$month=date("m",$d1);
						$day=date("d",$d1);
						$year=date("Y",$d1);
						$dob=$year.'-'.$month.'-'.$day;
					?>
                    <input type="date" class="form-control" id="bdate"  name="dob" placeholder="" value="<?php echo $dob;?>" >
                    <span id="bdateerror" class="error-color"></span>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="fatherName">Father Name</label>
                    <input type="text" class="form-control" id="fatherName" name="fname" placeholder="" value="<?php echo $rw['fname'];?>" >
                    <span id="fathernameerror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="bdate">Mother Name</label>
                    <input type="text" class="form-control" id="mothername" name="mname" placeholder="" value="<?php echo $rw['mname'];?>" >
                    <span id="mothernameerror" class="error-color"></span>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="fatherName">School</label>
                    <input type="text" class="form-control" id="school" name="school" placeholder="" value="<?php echo $rw['school'];?>" >
                    <span id="schoolerror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="class">Class Presently studying in</label>
					<input type="text"  class="form-control" value="<?php echo $rw['class'];?>" readonly name="class">
					<!--
					<select class="form-control" name="class" id="class" >
						<option value="">Select Class.....</option>
						<?php 
						 /*$cl=array("7th"=>"class7","8th"=>"class8","9th"=>"class9","10th"=>"class10","+1(medical)"=>"class11med","+1(Non Medical)"=>"class11nonmed");
						 $k=array_search($rw['class'],$cl);
						*/
						 ?>-->
					
						<!--<option value="<?php //echo $cl[$k];?>" selected><?php //echo $k;?></option>
						<option value="class7">7th</option>
						<option value="class8">8th</option>
						<option value="class9">9th</option>
						<option value="class10">10th</option>
						<option value="class11med">+1(medical)</option>
						<option value="class11nonmed">+1(Non Medical)</option>
						
					</select>-->
                   <!-- <input type="text" class="form-control" id="class"  placeholder="">-->
                    <span id="classerror" class="error-color"></span>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="fatherName">House Address</label>
                    <input type="text" class="form-control" id="addrress" name="haddress" placeholder="" value="<?php echo $rw['haddress'];?>">
                    <span id="addresserror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="city">City</label>
					<select class="form-control" name="city">
						<option value="">Select City.....</option>
						<option value="<?php echo $rw['city'];?>" selected><?php echo $rw['city'];?></option>
						<option value="Amritsar">Amritsar</option>
						<option value="Abohar">Abohar</option>
						<option value="Anandpur Sahib">Anandpur Sahib</option>
						<option value="Adampur">Adampur</option>
						<option value="Bathinda">Bathinda</option>
						<option value="Batala">Batala</option>
						<option value="Barnala">Barnala</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Dhuri">Dhuri</option>
						<option value="Dinanagar">Dinanagar</option>
						<option value="Firozpur">Firozpur</option>
						<option value="Fazilka">Fazilka</option>
						<option value="Faridkot">Faridkot</option>
						<option value="Fatehgarth Sahib">Fatehgarth Sahib</option>
						<option value="Gurdaspur">Gurdaspur</option>
						<option value="Hoshiarpur">Hoshiarpur</option>
						<option value="Jalandhar">Jalandhar</option>
						<option value="Jagraon">Jagraon</option>
						<option value="Khanna">Khanna</option>
						<option value="Kila Raipur">Kila Raipur</option>
						<option value="Kapurthala">Kapurthala</option>
						<option value="Kharar">Kharar</option>
						<option value="Ludhiana">Ludhiana</option>
						<option value="Moga">Moga</option>
						<option value="Malout">Malout</option>
						<option value="Mansa">Mansa</option>
						<option value="Malerkotla">Malerkotla</option>
						<option value="Mandi Gobindgarh">Mandi Gobindgarh</option>
						<option value="Nangal">Nangal</option>
						<option value="Nabha">Nabha</option>
						<option value="Nawashahr">Nawashahr</option>
						<option value="Patiala">Patiala</option>
						<option value="Pathankot">Pathankot</option>
						<option value="Phagwara">Phagwara</option>
						<option value="Panchkula">Panchkula</option>
						<option value="Qadian">Qadian</option>
						<option value="Rajpura">Rajpura</option>
						<option value="Rupnagar">Rupnagar</option>
						<option value="Sunam">Sunam</option>
						<option value="Sunam">Samana</option>
						<option value="Samana">Sirhind</option>
						<option value="Sangrur">Sangrur</option>
						<option value="Sahnewal">Sahnewal</option>
						<option value="Sahibzada Ajit Singh Nagar">Sahibzada Ajit Singh Nagar</option>
						<option value="Shaheed Bhagat Singh Nagar">Shaheed Bhagat Singh Nagar</option>
						<option value="Tarn Taran Sahib">Tarn Taran Sahib</option>
						<option value="Zirakpur">Zirakpur</option>
						
					</select>
                    <!--<input type="text" class="form-control" id="city"  placeholder="">-->
                    <span id="cityerror" class="error-color"></span>
                    </div>
                </div> 
                
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="fcontactno">Contact No (Father)</label>
                    <input type="text" class="form-control" id="fcontactno" name="fcontactno"  placeholder="" value="<?php echo $rw['fcontactno'];?>">
                    <span id="fcontacterror" class="error-color"></span>
                    </div>
                </div> 
                
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="mcontactno">Contact No (Mother)</label>
                    <input type="text" class="form-control" id="mcontactno" name="mcontactno" placeholder="" value="<?php echo $rw['mcontactno'];?>">
                    <span id="mcontacterror" class="error-color"></span>
                    </div>
                </div> 
                
               
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="scontactno">Contact No (Student)</label>
                    <input type="text" class="form-control" id="scontactno" name="scontactno" placeholder="" value="<?php echo $rw['scontactno'];?>">
                    <span id="scontacterror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="email">Email Id</label>
                    <input type="email" class="form-control" id="email" name="emailid" placeholder="" value="<?php echo $rw['emailid'];?>">
                    <span id="emailerror" class="error-color"></span>
                    </div>
                </div> 
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                <p>Marks Obtained Percentage (%)</p>
                </div>
                <div class="col-sm-4">
                    
                    <div class="form-group">
                    <label for="maths">Maths</label>
                    <input type="text" class="form-control" id="math" name="mathmarks" placeholder="" value="<?php echo $rw['mathmarks'];?>">
                    <span id="matherror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-4">
                    
                    <div class="form-group">
                    <label for="science">Science</label>
                    <input type="text" class="form-control" id="science" name="sciencemarks" placeholder="" value="<?php echo $rw['sciencemarks'];?>">
                    <span id="scienceerror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-4">
                    
                    <div class="form-group">
                    <label for="science">Total Aggregated:</label>
                    <input type="text" class="form-control" id="totalmarks" name="totalmarks"  placeholder="" value="<?php echo $rw['totalmarks'];?>">
                    <span id="totalerror" class="error-color"></span>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="email">Career Option</label>
                    <select  class="form-control" id="careeroption" name="careeroption">
                        <option value="">Select</option>
						<option value="<?php echo $rw['careeroption'];?>" selected><?php echo $rw['careeroption'];?></option>
                        <option>Engineering</option>
                        <option>Medical</option>
                        <option>Others</option>
                    </select>
					<span id="careererror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <label for="simage">Student Image</label>
					<img src="<?php echo $st->base_url;?>/uploads/<?php echo $class;?>/<?php echo $rw['picture'];?>" height="90" width="90">
                    <input type="hidden" name="oldpic" value="<?php echo $rw['picture'];?>">
					<input type="file" id="imgfile" name="pic">
                    <span id="imgfileerror" class="error-color"></span>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-12 text-center">
                    <input type="submit" id="submit" name="submit" value="submit">
                </div>
            </div>
                 
                </form>
									
									
									
									
			<?php 
				}}?>
			
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