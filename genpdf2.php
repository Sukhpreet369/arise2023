<?php
//Include autoloader 
require_once 'dompdf/autoload.inc.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
use Dompdf\Options;
$sid=$_GET['rid'];
$class=$_GET['class'];
$sql="select * from $class where sid=".$sid;
$mysql=new mysqli("localhost","paceonlineform","Pass@123#@","paceonlineform");
 $result=$mysql->query($sql);
 if($result->num_rows>0)
 {
	 while($rw=$result->fetch_array(MYSQLI_ASSOC))
	 {
				
 	 
// Instantiate and use the dompdf class 
$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);
$contxt = stream_context_create([ 
    'ssl' => [ 
        'verify_peer' => FALSE, 
        'verify_peer_name' => FALSE,
        'allow_self_signed'=> TRUE
    ] 
]);
$dompdf->setHttpContext($contxt);
$dompdf->loadHtml('<table style="width:100%;margin:auto;border:1px solid #000;font-family:arial;" cellspacing="20">
		<tr>
		<td>
		
		<table style="width:100%;height:auto;font-family:arial" cellpadding="0" cellspacing="0">	
			<tr style="width:100%;line-height:30px;">
				<td colspan="3">
					<table width="100%" cellpadding="0" cellspacing="0" style="border-bottom:2px solid #000;padding-bottom:10px;margin-bottom:10px;">
						<tr height="50px" valign="middle">
							<td style="width:70%;padding:10px">
								<img src="http://checkyourwebsite.in/paceonlineform/img/logo.png" alt="logo">
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
<h2 style="font-size:35px;font-weight:600;color:#000;margin:0;margin-top:0;">PACE ARISE-2021-2022</h2>								
<p style="font-size:16px;font-weight:600;color:#000;margin:0;">Registration Form</p>
<table style="width:100%;">
<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Test Date :</p></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;border:1px solid #000;padding:3px 7px 3px 7px;">26 JAN 2021</p></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">Date of Registration :'.$rw['dor'].'</p></td>
							<td><input type="text" style="border:none;border-bottom:1px dotted;width:70%;"></td>
						</tr>
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Registration No.:<br>(for official use only)</p></td>
							<td colspan="3"><input type="text" style="width:70%;height:25px;"></td>
						</tr>
					</table>
				</td>
				<td style="width:30%;">
					<div style="width:200px;height:200px;text-align:center;border:1px solid;padding:10px;">
						<img src="http://checkyourwebsite.in/paceonlineform/uploads/'.$rw['class'].'/'.$rw['picture'].'" width="100%">
						<!--<img src="http://checkyourwebsite.in/paceonlineform/uploads/class5/1.jpg" width="100%">-->
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:10px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Name of the Student :</p></td>
							<td>'.$rw['sname'].'</td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">Date of Birth :</p></td>
							<td>'.$rw['dob'].'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Father`s Name :</p></td>
							<td>'.$rw['fname'].'</td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">Mother`s Name :</p></td>
							<td>'.$rw['mname'].'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">SCHOOL :</p></td>
							<td>'.$rw['school'].'</td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">Class presently studying in :</p></td>
							<td>'.$rw['class'].'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">House Address  :</p></td>
							<td>'.$rw['haddress'].'</td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">City  :</p></td>
							<td>'.$rw['city'].'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Contact No. (Father) :</p></td>
							<td>'.$rw['fcontactno'].'</td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">Contact No. (Mother):</p></td>
							<td>'.$rw['fcontactno'].'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Contact No. (Student):</p></td>
							<td>'.$rw['scontactno'].'</td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-left:20px;">E-mail ID:</p></td>
							<td>'.$rw['emailid'].'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Percentage (%) of marks obtained in last exam : Maths </p></td>
							<td>'.$rw['mathmarks'].'</td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Science </p></td>
							<td>'.$rw['sciencemarks'].'</td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Tot. Agg. (All Sub.)</p></td>
							<td>'.$rw['totalmarks'].'</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Career Option: </p></td>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">'.$rw['careeroption'].'<!--[Engineering / Medical / Others]--></p></td>
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
					<table style="width:100%;line-height:20px;margin:100px;" cellpadding="0" cellspacing="0">
						
						<tr>
							<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-top:30px;text-align:right;">(Signature of Student) </p></td>
						</tr>
					</table>
				</td>
			</tr>
			
			
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td>
								<p style="font-size:20px;font-weight:600;color:#000;margin:0;margin-top:30px;text-align:center;">
								TERMS & CONDITIONS</p>
							</td>
						</tr>					
					</table>
				</td>
			</tr>
			
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:25px;line-height:30px;" cellpadding="0" cellspacing="0">
						<tr>
							<td>
								<ol>
									<li>Incomplete form will be rejected. Kindly attach photocopy of mark sheet of previous class and recent passport size
										photographs to the admission form.</li>
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
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;" cellpadding="0" cellspacing="0">
						<tr>
							<td>
								<p style="font-size:14px;font-weight:200;color:#000;margin:0;margin-top:5px;margin-left:23px;">
								<b>Note.1.</b> Registration fee is non-refundable. </p>
							</td>
						</tr>					
					</table>
				</td>
			</tr>
			
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;padding:15px;" cellpadding="0" cellspacing="0">
						<tr>
							<td><input type="checkbox" style="width:20px;height:20px;margin-right:-15px;"></td>
							<td>
								<p style="font-size:14px;font-weight:200;color:#000;margin:0;margin-top:5px;">
								I agree with all the terms mentioned above.</p>
							</td>
						</tr>					
					</table>
				</td>
			</tr>
			
			
			<tr>
				<td colspan="3">
					<table style="width:100%;line-height:20px;margin-top:10px;padding:15px;margin-bottom:250px" cellpadding="0" cellspacing="0">
						<tr>
							<td colspan="2"><p style="font-size:14px;font-weight:600;color:#000;margin:0;margin-top:30px;">(Signature of Student) </p></td>
						</tr>
						<tr>
							<td><p style="font-size:14px;color:#000;margin:0;margin-top:20px;">Date</p></td>
							<td><input type="text" style="border:none;border-bottom:1px dotted;"></td>
						</tr>
						<tr>
							<td><p style="font-size:14px;color:#000;margin:0;margin-top:20px;">Place</p></td>
							<td><input type="text" style="border:none;border-bottom:1px dotted;"></td>
						</tr>
					</table>
					
				</td>
				
			</tr>		
		</table>
		
		</td>
		</tr>
			</table>	
			'); 
	 }
 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'potrait'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser 
$dompdf->stream("codexworld", array("Attachment" => 0));
 }
?>