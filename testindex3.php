<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
   
		

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
    <!-- MultiStep Form -->
    <div class="container">
<div class="row">
    <div class="col-md-12">
	<form id="msform" name="msform">
            <!-- progressbar -->
            <ul id="progressbar">
			<li class="active">Student Details -1 </li>
                <li>Student Details - 2</li>
                <li>Payment</li>
			
               
            </ul>
            <!-- fieldsets -->
			<fieldset>
			<h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
						<label for="studetnName1">Student Name</label>
						<input type="text" class="form-control" id="studentName1"  name="sname1" placeholder="" required>
						<span id="nameerror1" class="error-color"></span>
						</div>
				</div>
				<div class="col-sm-6">
						<div class="form-group">
						<label for="class1">Class Presently studying in</label>
						<select class="form-control" name="class1" id="class1" required>
							<option value="">Select Class.....</option>
							
							<option value="class7">7th</option>
							<option value="class8">8th</option>
							<option value="class9">9th</option>
							<option value="class10">10th</option>
							<option value="class11med">+1(medical)</option>
							<option value="class11nonmed">+1(Non Medical)</option>
							
						</select>
					   <!-- <input type="text" class="form-control" id="class"  placeholder="">-->
						<span id="classerror1" class="error-color"></span>
						</div>
					</div> 
				</div>
				<div class="row">
				<div class="col-sm-12">
						<div class="form-group">
						<label for="email1">Email Id</label>
						<input type="email" class="form-control" id="email1" name="emailid1" placeholder="" required>
						<span id="emailerror1" class="error-color"></span>
						</div>
					</div> 
				</div>
				<!--<div class="row">
				<div class="col-sm-6">
						<div class="form-group">
						<label for="fmobileno1">Father's Mobile Number</label>
						<input type="text" class="form-control" id="fmobileno1" name="fmobileno1" placeholder="" required>
						<button class="btn btn-danger" href="#" id="otp_btn" disabled>Send OTP</button>
						<span id="fmobile1error" class="error-color"></span>
						</div>
					</div> 
					<div class="col-sm-6">
						<div class="form-group">
						<label for="otp">Enter OTP</label>
						<input type="text" class="form-control" id="otp" name="otp" placeholder="" required>
						<span id="otperror" class="error-color"></span>
						</div>
					</div> 
					
				</div>-->

				<input  type="button" name="next" class="next action-button"  value="Next"/>
		</fieldset>
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
				
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
						<label for="studetnName">Student Name</label>
						<input type="text" class="form-control" id="studentName"  name="sname" placeholder="" required>
						<span id="nameerror" class="error-color"></span>
						</div>
					</div> 
					<div class="col-sm-6">
						<div class="form-group">
						<label for="bdate">Date Of Birth</label>
						<input type="date" class="form-control" id="bdate"  name="dob" placeholder="" required>
						<span id="bdateerror" class="error-color"></span>
						</div>
					</div> 
				</div>
                <div class="row">
					<div class="col-sm-6">
						<div class="form-group">
						<label for="fatherName">Father Name</label>
						<input type="text" class="form-control" id="fatherName" name="fname" placeholder="" required>
						<span id="fathernameerror" class="error-color"></span>
						</div>
					</div> 
					<div class="col-sm-6">
						<div class="form-group">
						<label for="bdate">Mother Name</label>
						<input type="text" class="form-control" id="mothername" name="mname" placeholder="" required>
						<span id="mothernameerror" class="error-color"></span>
						</div>
					</div> 
				</div>
				
				
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
						<label for="fatherName">School</label>
						<input type="text" class="form-control" id="school" name="school" placeholder="" required>
						<span id="schoolerror" class="error-color"></span>
						</div>
					</div> 
					<div class="col-sm-6">
						<div class="form-group">
						<label for="class">Class Presently studying in</label>
						<select class="form-control" name="class" id="class" required>
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
						<input type="text" class="form-control" id="addrress" name="haddress" placeholder="" required>
						<span id="addresserror" class="error-color"></span>
						</div>
					</div> 
					<div class="col-sm-6">
						<div class="form-group">
						<label for="city">City</label>
						<select class="form-control" id="city" name="city" required>
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
						<label for="scontactno">Father Occupation</label>
						<input type="text" class="form-control" id="foccupation" name="foccupation" placeholder="" required>
						<span id="foccupationerror" class="error-color"></span>
						</div>
					</div> 
					<div class="col-sm-6">
						<div class="form-group">
						<label for="text">Father's Work Organization</label>
						<input type="text" class="form-control" id="forg" name="forg" placeholder="" required>
						<span id="forgerror" class="error-color"></span>
						</div>
					</div> 
				</div>
				
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
						<label for="fcontactno">Contact No (Father)</label>
						<input type="text" class="form-control" id="fcontactno" name="fcontactno"  placeholder="" required>
						<span id="fcontacterror" class="error-color"></span>
						</div>
					</div> 
					
					<div class="col-sm-6">
						<div class="form-group">
						<label for="mcontactno">Contact No (Mother)</label>
						<input type="text" class="form-control" id="mcontactno" name="mcontactno" placeholder="" required>
						<span id="mcontacterror" class="error-color"></span>
						</div>
					</div> 
				</div>
				
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
						<label for="scontactno">Contact No (Student)</label>
						<input type="text" class="form-control" id="scontactno" name="scontactno" placeholder="" required>
						<span id="scontacterror" class="error-color"></span>
						</div>
					</div> 
					<div class="col-sm-6">
						<div class="form-group">
						<label for="email">Email Id</label>
						<input type="email" class="form-control" id="email" name="emailid" placeholder="" required>
						<span id="emailerror" class="error-color"></span>
						</div>
					</div> 
				</div>
            
				<div class="row">
					<div class="col-sm-6">
						<label for="email">Percentage Obtained in Previous Class</label>
						<input type="text" class="form-control" id="totalmarks" name="totalmarks"  placeholder="" required>
						<span id="totalerror" class="error-color"></span>
					</div>
				   
					 <div class="col-sm-6">
						
						<label for="email">Test Slot</label>
						<select class="form-control" id="slots" name="slots" required>
							<option value="">Select Test Slot.....</option>
							<option value="slot1">Slot 1- 9.30 a.m. to 10.30 a.m.</option>
							<option value="slot2">Slot 2- 12.00 p.m. to 1 p.m.</option>
							<option value="slot3">Slot 3 - 2.30 p.m. to 3.30 p.m.</option>
							<option value="slot4">Slot 4 - 5.00 p.m. to 6.00 p.m.</option>
						</select>
						<span id="sloterror" class="error-color"></span>	
						</div>
					</div>
				
				
				
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
						<label for="email">Career Option</label>
						<select  class="form-control" id="careeroption" name="careeroption" required>
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
						
						<input type="checkbox" id="terms" name="terms" style="height:30px;width:30px;" required>
					</div>
					<div class="col-sm-11"> 
						<p>To Complete the Registration for ARISE, you have to Download the pdf of Filled Form after submitting the Online details and must submit the printout of Filled form alongwith Test  Fees in PACE OFFICE.</p>
					</div>
				</div>
			
			
				<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input  type="button" name="next" class="next action-button"  value="Next"/>

            </fieldset>
            
			

            <fieldset>
                <h2 class="fs-title">Payment</h2>
                <h3 class="fs-subtitle" id="message">Test Payment</h3>
                <input type="text" name="tid" id="tid" readonly/>
                <input type="hidden" name="merchant_id" id="merchant_id" value="2918678"/>
				<input type="hidden" name="order_id" value="123654789"/>
				<input type="text" name="amount" value="100.00" readonly />
				<input type="hidden" name="currency" value="INR"/>
				<input type="hidden" name="redirect_url" value="https://paceonline.in/eazypay3/ccavResponseHandler.php"/>
				<input type="hidden"  name="cancel_url" value="https://paceonline.in/eazypay3/ccavResponseHandler.php"/>
				<input type="text" id="billing_name" name="billing_name" value="Charli"/>
				<input type="text" id="billing_address" name="billing_address" value="Room no 1101, near Railway station Ambad"/>
				<input type="text" id="billing_city" name="billing_city" value="Indore"/>
				<input type="text" id="billing_state" name="billing_state" value="PB"/>
				<input type="text" id="billing_zip" name="billing_zip" value="147001"/>
				<input type="text" id="billing_country" name="billing_country" value="India"/>
				<input type="text" id="billing_tel" name="billing_tel" value="9876543210"/>
				<input type="text" id="billing_email" name="billing_email" value="test@test.com"/>

               <input  type="button" name="next" class="submit action-button"  value="submit"/>
			</fieldset>
			<!--<fieldset>
                <h2 class="fs-title">Download Form</h2>
               <h3 class="fs-subtitle"  id="message">Test Payment</h3>
				
			</fieldset>	-->
        </form>
       
    </div>
</div>
</div>
<!-- /.MultiStep Form -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script>
    
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var count=0

$("#fmobileno1").blur(function()
{   $("#fmobile1error").html("")
	 if(!(/^\d{10}$/.test($(this).val())))
	 {
		$("#fmobile1error").html("Invalid Phone Number")
	 } 
	 else
	 {
		$('#otp_btn').prop("disabled",false);
	 }
	})
$("#otp").blur(function(){
	$("#otperror").html("")
	if(!(/^\d{6}$/.test($(this).val())))
	 {
		$("#otperror").html("Invalid otp number")
	 } 
	 else
	 {
		
	 }

})	
$('#otp_btn').click(function(){
	$.ajax(
		{
			url:'smscode.php',
			type:POST,
			data:{mobileno:mobileno},
			success:function(){

			},
			error:function(xhr, status, error){

			}
		});
})

$(".next").click(function(){
	
	
	/*if(animating) return false;
	animating = true;
	
	*/ 
	if(count==0)
	{
		var sname1=$('#studentName1').val()
		var myclass1=$('#class1').val()
		var emailid1=$('#email1').val()
		
		if(sname1=="")
      {
       $('#nameerror1').html("Name should not be blank")
        return false;
      }
	  if(myclass1=="")
      {
       $('#classerror1').html("Class should not be blank")
        return false;
      }
	  if(emailid1=="")
      {
       $('#emailerror1').html("Email should not be blank")
        return false;
      }
	
	
	  event.preventDefault();                 
                //var form = document.getElementById('msform'); 
                //var formData = new FormData(form); 

				$.ajax({
    				url: 'chktemp.php',
    				method: 'POST',
    				dataType: 'json',
					data: {sname1:sname1,myclass1:myclass1,email1:emailid1},
    				success: function(data) {
        		// Handle the JSON data received from the server
        			alert(data.length)
					if(data.length>0)
					{
					$("#studentName").val(data["sname"])
					$("#regno").val(data["regno"])
					//$("#bdate").val(data["dob"])
					$("#regno").val(data["regno"])
					$("#fatherName").val(data["fname"])	
					$("#mothername").val(data["mname"])
					$("#school").val(data["school"])
					$("#class").val(data["class"])
					$("#addrress").val(data["haddress"])
					$("#city").val(data["city"])
					$("#foccupation").val(data["foccupation"])
					$("#forg").val(data["forg"])	
					$("#fcontactno").val(data["fcontactno"])
					$("#mcontactno").val(data["mcontactno"])
					$("#scontactno").val(data["scontactno"])
					$("#email").val(data["emailid"])	
					$("#totalmarks").val(data["totalmarks"])
					$("#slots").val(data["testslot"])
					$("#careeroption").val(data["careeroption"])
					}
					else
					{
						$("#studentName").val(sname1)
						$("#class").val(myclass1)
						$("#studentName").val(sname1)
						$("#email").val(emailid1)
					}
					//$("#imgfile").val(data["picture"])
				},
    			error: function(xhr, status, error) {
       			 // Handle errors
        	console.error(xhr.responseText);
    		}
			});
	  
		count++
	}
	else if(count==1)
	{
	 var sname=$('#studentName').val()
	  var dob=$('#bdate').val()
	  var fname=$('#fatherName').val()
	  var mname=$('#mothername').val()
	  var school=$('#school').val()
	  var myclass=$('#class').val()
	  var haddress=$('#addrress').val()
	  var city=$('#city').val()
	  var foccupation=$('#foccupation').val()
	  var forg=$('#forg').val()
	  var fcontactno=$('#fcontactno').val()
	  var scontactno=$('#scontactno').val()
	  var emailid=$('#email').val()
	  var mathmarks=0
	  var sciencemarks=0
	  var totlmarks=$('#totalmarks').val()
	  var testslot=$('#slots').val()
	  var careeroption=$('#careeroption').val()
	  var picture=$('#imgfile').val()
	  if(sname=="")
      {
       $('#nameerror').html("Name should not be blank")
        return false;
      }
      if(dob=="")
      {
       $('#bdateerror').html("Must Select Date Of Birth")
        return false;
      }
      if(fname=="")
      {
       $('#fathernameerror').html("Father Name should not be blank")
        return false;
      }
	  if(mname=="")
      {
       $('#mothernameerror').html("Mother Name should not be blank")
        return false;
      }
	  if(school=="")
      {
       $('#schoolerror').html("School Name should not be blank")
        return false;
      }
	  if(myclass=="")
      {
       $('#classerror').html("Class should not be blank")
        return false;
      }
	  if(haddress=="")
      {
       $('#addresserror').html("Address should not be blank")
        return false;
      }
	  if(city=="")
      {
       $('#cityerror').html("City should not be blank")
        return false;
      }
	  if(foccupation=="")
      {
       $('#foccupationerror').html("Father Occupation should not be blank")
        return false;
      }
	  if(forg=="")
      {
       $('#forgerror').html("Father Organization should not be blank")
        return false;
      }
	  if(fcontactno=="")
      {
       $('#fcontacterror').html("Father contact number should not be blank")
        return false;
      }
	  if(mcontactno=="")
      {
       $('#mcontacterror').html("Mother contact number should not be blank")
        return false;
      }
	  if(scontactno=="")
      {
       $('#scontacterror').html("Student should not be blank")
        return false;
      }
	  if(emailid=="")
      {
       $('#emailerror').html("email should not be blank")
        return false;
      }
	  if(totlmarks=="")
      {
       $('#totalerror').html("Marks Obtained  should not be blank")
        return false;
      }
	  if(testslot=="")
      {
       $('#sloterror').html("Test Slot should not be blank")
        return false;
      }
	  if(careeroption=="")
      {
       $('#careererror').html("Career Option should not be blank")
        return false;
      }
	  if(picture=="")
      {
       $('#imgfileerror').html("Piture must be  uploaded")
        return false;
      }
	
	  var tid = new Date().getTime();
	  $('#tid').val(tid)
	  $('#billing_name').val(sname)
	  $('#billing_address').val(haddress)
	  $('#billing_city').val(city)
	  $('#billing_tel').val(scontactno)
	  $('#billing_email').val(emailid)
	
	  event.preventDefault();                 
                var form = document.getElementById('msform'); 
                var formData = new FormData(form); 
				
	$.ajax({ 
                    url: 'tmpreg.php', 
                    method: 'POST', 
                    data: formData, 
                    processData: false, 
                    contentType: false, 
                    success: function (response) {                       
                        //alert(response)
						$('#message').html(response)
                    }, 
                    error: function (xhr, status, error) {                        
						//$('#message').html(error);
                        
                    } 
                });
			count++
			}
		else if (count==2)
		{

		}	
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

$(".previous").click(function(f){
	count--
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
	event.preventDefault();                 
                var form2 = document.getElementById('msform'); 
                var formData2 = new FormData(form2); 
	
	$.ajax({
    				url: 'eazypay3/ccavRequestHandler.php',
    				method: 'POST',
    				dataType: 'json',
					data: formData2,
    				success: function(data) {
        		
					//$("#imgfile").val(data["picture"])
				},
    			error: function(xhr, status, error) {
       			 // Handle errors
        	console.error(xhr.responseText);
    		}
			}); 
	//return false;
})
</script>
</body>
</html>