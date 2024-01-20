<?php 
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pace Institute - Online Form</title>
	 <!--<script src="js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="style.css">

<script>
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})
</script>	
	
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
				if(fcontactno.value.length<10 || fcontactno.value.length>10 )
				{
					document.getElementById('fcontacterror').innerHTML= " Contact Number must have 10 digits";
				return false;
				}
				if(mcontactno.value=="")
				{
					document.getElementById('mcontacterror').innerHTML= " Contact No (Mother) should not be blank ";
					return false;
				}
				if(mcontactno.value.length<10 || mcontactno.value.length>10 )
				{
					document.getElementById('mcontacterror').innerHTML= " Contact Number must have 10 digits";
				return false;
				}
				if(scontactno.value=="")
				{
					document.getElementById('scontacterror').innerHTML= "Contact No (Student) should not be blank ";
					return false;
				}
				if(scontactno.value.length<10 || scontactno.value.length>10 )
				{
					document.getElementById('scontacterror').innerHTML= " Contact Number must have 10 digits";
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
	
  </head>
  <body>
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bbs.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bss.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bd.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

    
  <!--<div class="container-fluid">-->
  <!--<div class="row">-->
     
                
  <!--              <img src="img/header3.jpeg"  class="img1" width="100%"/>-->
  <!--                      </div>-->
              
              
              
                        
                        
  <!--      </div>-->
  <!--</div>-->
  

  
  
    <div class="container">
              
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
				$careeroption=$_POST['careeroption'];
				$picture=$_FILES['pic']["name"];
				//$picture="";


				$student=new student();
				$chkreg=$student->validate_reg($class,$sname,$emailid);
				if($chkreg>0)
				{
				 ?><h2 class="active" style="text-align:center;color:yellow">Registration Error</h2><p style="text-align:center;">student already register with same Name and emailid in this class<br>Use back button to change your details</p>
					<p class="text-center"><input type="button" value="Back to the Form page" onclick="history.back(-1)" /></p>
				<?php }
				else
				{
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
					echo "<p class='text-center' style='color:yellow'>Note : If you find anything wrong in your pdf form than you can contact to pace office for correction</p>";
				?>
				<p style="text-align:center;">click <a href="genpdf.php?<?php echo $r;?>">here</a> download pdf</p>
				<?php 
				}
				else{
					echo '<h2 class="active"> unable to register record</h2>';
					echo '<p style="color:red;">Unable to create account </p>';
					
				}
				}
				}
				else{
			?>  
			<!--	<div class="row">
				 <div class="col-sm-12 text-center">
				 <h2>Registration for Arise are closed</h2>
				 <p style="font-size:24px;">Kindly Contact: <a href="tel:98729-22629">98729-22629</a> for further Details</p>
				 </div>
				</div> 
			-->
			  <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Social Profiles</li>
                <li>Account Setup</li>
            </ul>
			<div class="row">
				 <div class="col-sm-12 text-center">
				 <h2 class="txt">ARISE REGISTRATION FORM</h2>
				 <!--<p style="font-size:24px;">Kindly Contact: <a href="tel:98729-22629">98729-22629</a> for further Details</p>-->
				 </div>
			</div> 
         <form method="post" action="" onsubmit="return validate(this)" enctype="multipart/form-data" id="regForm">
            <div class="tab">
			
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
							<option value="">Select Class.....</option>
							
							<option value="class7">7th</option>
							<option value="class8">8th</option>
							<option value="class9">9th</option>
							<option value="class10">10th</option>
							<option value="class11med">+1(medical)</option>
							<option value="class11nonmed">+1(Non Medical)</option>
							
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
							<option value="">Select City.....</option>
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
						<span id="scontacterror" class="error-color"></span>
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
            
				<div class="row">
					<div class="col-sm-12">
					<p>Percentage Obtained in Previous Class</p>
					</div>
				   
					 <div class="col-sm-4">
						
						<div class="form-group">
						<input type="text" class="form-control" id="totalmarks" name="totalmarks"  placeholder="">
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
							<option>Engineering</option>
							<option>Medical</option>
							<option>Others</option>
						</select>
						<span id="careererror" class="error-color"></span>
						</div>
					</div> 
					<div class="col-sm-6">
						<label for="simage">Student Image</label>
						<input type="file" id="imgfile" name="pic">
						<span id="imgfileerror" class="error-color"></span>
					</div>
				</div> 
				
				<div class="row">
					<div class="col-sm-12">
						<h5 style="color:#fff;">Please read instructions and Tick the checkbox before submission.</h5>
					</div>
					<div class="col-sm-1">
						
						<input type="checkbox" id="imgfile" name="terms" style="height:30px;width:30px;" required>
					</div>
					<div class="col-sm-11"> 
						<p>To Complete the Registration for ARISE, you have to Download the pdf of Filled Form after submitting the Online details and must submit the printout of Filled form alongwith Test  Fees in PACE OFFICE.</p>
					</div>
				</div>
			</div>
			
            <!--<div class="row">
                <div class="col-sm-12 text-center">
                    <input type="submit" id="submit" name="submit" value="submit">
                </div>
            </div>--->
			
					<div class="tab">Payment
						<p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
						<p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
					</div>
					  
					  
					  <div style="overflow:auto;">
						<div style="float:right;">
						  <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="previous action-button-previous">Previous</button>
						  <button type="button" id="nextBtn" onclick="nextPrev(1)" id="submit" name="submit" Class="next">Next</button>
						</div>
					  </div>
					  
					  <!-- Circles which indicates the steps of the form: -->
					  <div style="text-align:center;margin-top:40px;">
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
					  </div>
            </form>
				<div class="row">
                <div class="col-sm-12 text-center">
                    &nbsp;
                </div>
            </div>
				<?php 
}?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
   <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
  </body>
</html>