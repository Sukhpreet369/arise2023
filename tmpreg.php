<?php
include_once "config.php";
			
            
            $sname=$_POST['sname'];
				$dob=$_POST['dob'];
				$fname=$_POST['fname'];
				$mname=$_POST['mname'];
				$school=$_POST['school'];
				$class=$_POST['class'];
				$haddress=$_POST['haddress'];
				$city=$_POST['city'];
				$foccupation=$_POST['foccupation'];
				$forg=$_POST['forg'];
				$fcontactno=$_POST['fcontactno'];
				$mcontactno=$_POST['mcontactno'];
				$scontactno=$_POST['scontactno'];
				$emailid=$_POST['emailid'];
				if(isset($_POST['mathmarks'])){
				$mathmarks=$_POST['mathmarks'];
				}
				else
				{
				$mathmarks=0;	
				}
				if(isset($_POST['sciencemarks'])){
				$sciencemarks=$_POST['sciencemarks'];
				}
				else
				{
				$sciencemarks=0;	
				}
				$totalmarks=$_POST['totalmarks'];
				$testslot=$_POST['slots'];
				$careeroption=$_POST['careeroption'];
				$picture=$_FILES['pic']["name"];
				//$picture="";
				//print_r($_POST);
				//die;
				
				$student=new student();
				$chkreg=$student->chk_tmpreg($class,$sname,$emailid);
				if($chkreg>0)
				{  
					//echo "I am in";
					 
				$result=$student->update_tmpreg($sname,$dob,$fname,$mname,$school,$class,$haddress,$city,$foccupation,$forg,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$testslot,$careeroption);
				//$result=$student->assign_regno($class,$result);	
				$regno=$student->get_tmpregno($sname,$emailid,$class);	
				$result=$student->register($sname,$dob,$regno,$fname,$mname,$school,$class,$haddress,$city,$foccupation,$forg,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$testslot,$careeroption,$picture);
			
			}
				else
				{
				$result=$student->tempreg($sname,$dob,$fname,$mname,$school,$class,$haddress,$city,$foccupation,$forg,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$testslot,$careeroption,$picture);
				//$student->genpdf();
				$result=$student->assign_regno($class,$result);
				
				if($result>0){
					move_uploaded_file($_FILES['pic']['tmp_name'],"uploads/".$class."/".$picture);
					//@session_start();
					//$_SESSION['uname']=$uname;
					//echo '<h2 class="active" style="text-align:center;">Regitration Succesfull</h2>';
					//$r="rid=".$result."&class=".$class;
					//echo $r;
					//echo "<p class='text-center' style='color:yellow'>Note : If you find anything wrong in your pdf form than you can contact to pace office for correction</p>";
				?>
				<!--<p style="text-align:center;">click <a href="genpdf.php?<?php //echo $r;?>">here</a> download pdf</p>
				<?php 
				}
				else{
					echo '<h2 class="active"> unable to register record</h2>';
					echo '<p style="color:red;">Unable to create account </p>';
					
				}
				}
					echo '<h2 class="active" style="text-align:center;">Regitration Succesfull</h2>';
					$r="rid=".$result."&class=".$class;
					//echo $r;
					echo "<p class='text-center' style='color:yellow'>Note : If you find anything wrong in your pdf form than you can contact to pace office for correction</p>";
              ?>  