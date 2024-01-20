<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pace Institute - Online Form</title>
	 <!--<script src="js/bootstrap.min.js"></script>-->
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
					document.getElementById('mathmarks').innerHTML= " Maths should not be blank ";
					return false;
				}
				if(sciencemarks.value=="")
				{
					document.getElementById('sciencemarks').innerHTML= " Science should not be blank ";
					return false;
				}
				if(totalmarks.value=="")
				{
					document.getElementById('totalmarks').innerHTML= " Total Aggregated should not be blank ";
					return false;
				}
				if(careeroption.value=="")
				{
					document.getElementById('careeroption').innerHTML= " Career Option should not be blank ";
					return false;
				}
				
				return true;
			}
	</script>
	<link rel="stylesheet" href="style.css">
	<style>
		.error-color{color:#ff0000;}
	</style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="img/header.jpg" width="100%"/>
             </div>
        </div>
		<?php if(isset($_POST['submit'])){
			    include_once "config.php";
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
				$picture=$_FILES['pic']["name"];
				//$picture="";


				$student=new student();
				$result=$student->register($sname,$dob,$fname,$mname,$school,$class,$haddress,$city,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$careeroption,$picture);
				//$student->genpdf();
				$result=$student->assign_regno($class,$result);
				if($result>0){
					move_uploaded_file($_FILES['pic']['tmp_name'],"uploads/".$class."/".$picture);
					//@session_start();
					//$_SESSION['uname']=$uname;
					echo '<h2 class="active" style="text-align:center;">Regitration Succesfull</h2>';
					$r="rid=".$result."&class=".$class;
					//echo $r;
				?>
				<p style="text-align:center;">click <a href="genpdf.php?<?php echo $r;?>">here</a> download pdf</p>
				<?php 
				}
				else{
					echo '<h2 class="active"> unable to register record</h2>';
					echo '<p style="color:red;">Unable to create account </p>';
					
				}
				}
				else{
			?>   

         <form method="post" action="" onsubmit="return validate(this)" enctype="multipart/form-data">
             <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="studetnName">Student Name</label>
                    <input type="text" class="form-control" id="studentName"  name="sname" placeholder="" >
                    <span id="nameerror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="bdate">Date Of Birth</label>
                    <input type="date" class="form-control" id="bdate"  name="dob" placeholder="">
                    <span id="bdateerror" class="error-color"></span>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="fatherName">Father Name</label>
                    <input type="text" class="form-control" id="fatherName" name="fname" placeholder="">
                    <span id="fathernameerror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="bdate">Mother Name</label>
                    <input type="text" class="form-control" id="mothername" name="mname" placeholder="" >
                    <span id="mothernameerror" class="error-color"></span>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="fatherName">School</label>
                    <input type="text" class="form-control" id="school" name="school" placeholder="">
                    <span id="schoolerror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="class">Class Presently studying in</label>
					<select class="form-control" name="class" id="class" >
						<option>Select Class.....</option>
						
						<option value="class7">7th</option>
						<option value="class8">8th</option>
						<option value="class9">9th</option>
						<option value="class10">10th</option>
						<option value="class11">+1</option>
						
						
					</select>
                   <!-- <input type="text" class="form-control" id="class"  placeholder="">-->
                    <span id="classerror" class="error-color"></span>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="fatherName">House Address</label>
                    <input type="text" class="form-control" id="addrress" name="haddress" placeholder="">
                    <span id="addresserror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="city">City</label>
					<select class="form-control" name="city">
						<option>Select City.....</option>
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
                    <input type="text" class="form-control" id="fcontactno" name="fcontactno"  placeholder="">
                    <span id="fcontacterror" class="error-color"></span>
                    </div>
                </div> 
                
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="mcontactno">Contact No (Mother)</label>
                    <input type="text" class="form-control" id="mcontactno" name="mcontactno" placeholder="">
                    <span id="mcontacterror" class="error-color"></span>
                    </div>
                </div> 
                
               
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="scontactno">Contact No (Student)</label>
                    <input type="text" class="form-control" id="scontactno" name="scontactno" placeholder="">
                    <span id="scontactnoserror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="email">Email Id</label>
                    <input type="email" class="form-control" id="email" name="emailid" placeholder="">
                    <span id="emailerror" class="error-color"></span>
                    </div>
                </div> 
            </div>
            <!--<div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                    <label for="email">Email Id</label>
                    <input type="email" class="form-control" id="email" name="emailid" placeholder="">
                    <span id="emailerror" class="form-text text-muted"></span>
                    </div>
                </div> 
            </div>-->
            <div class="row">
                <div class="col-sm-12">
                <p>Marks Obtained Percentage (in previous class)</p>
                </div>
                <div class="col-sm-4">
                    
                    <div class="form-group">
                    <label for="maths">Maths</label>
                    <input type="text" class="form-control" id="math" name="mathmarks" placeholder="">
                    <span id="matherror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-4">
                    
                    <div class="form-group">
                    <label for="science">Science</label>
                    <input type="text" class="form-control" id="science" name="sciencemarks" placeholder="">
                    <span id="scienceerror" class="error-color"></span>
                    </div>
                </div> 
                <div class="col-sm-4">
                    
                    <div class="form-group">
                    <label for="science">Overall %age in previous class</label>
                    <input type="text" class="form-control" id="science" name="totalmarks"  placeholder="">
                    <span id="scienceerror" class="error-color"></span>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="email">Career Option</label>
                    <select  class="form-control" id="careeroption" name="careeroption">
                        <option "">Select</option>
                        <option>Engineering</option>
                        <option>Medical</option>
                        <option>Others</option>
                    </select>
                    </div>
                </div> 
                <div class="col-sm-6">
                    <label for="simage">Student Image</label>
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
}?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
   
  </body>
</html>