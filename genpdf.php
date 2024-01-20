<?php
//Include autoloader 
require_once 'dompdf/autoload.inc.php'; 
include_once "config.php";
// Reference the Dompdf namespace 
use Dompdf\Dompdf;
use Dompdf\Options; 
$sid=$_GET['rid'];
$class=$_GET['class'];
$st=new student();
$data=$st->view($class);
/*$sql="select * from $class where sid=".$sid;
$mysql=new mysqli("localhost","root","","paceonlineform");
 $result=$mysql->query($sql);
 */
/* if($result->num_rows>0)
 {
	 while($rw=$result->fetch_array(MYSQLI_ASSOC))
	 {
		*/
		$filename="";
 foreach($data as $rw)
 { $filename=$rw['sname']."-ARISE2O22";
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
// Load HTML content 
$dompdf->loadHtml('<table style="font-family:arial;" >
<tr>
<td>

<table cellpadding="0" cellspacing="0"  >
<tr>
<td>
<table cellpadding="0" cellspacing="0" >
<tr height="50px" valign="middle">
<td style="width:100%;padding:10px">
<img src="'.$st->base_url.'/img/header.png" alt="logo" style="width:700px; height:200px;">
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
<td><p style="font-size:14px;color:#000;margin:0;border:1px solid #000;padding:3px 7px 3px 7px;">24 Dec 2022</p></td>
<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Date of Registration :'.$rw['dor'].'</p></td>
<td><input type="text" style="border:none;border-bottom:1px dotted;width:70%;"></td>
</tr>
<tr>
<td><p style="font-size:14px;font-weight:600;color:#000;margin:0;">Registration No.:<br>(for official use only)</p></td>
<td colspan="3">'.$rw['regno'].'</td>
</tr>
</table>
</td>
<td width="30%">
<div style="width:155px;height:185px;border:1px solid;padding:5px;text-align:right;float:right;">
<img src="'.$st->base_url.'uploads/'.$rw['class'].'/'.$rw['picture'].'" width="150" height="180">
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
<td>Name of the Student :</b> '.$rw['sname'].'</p></td>
<td><b>Date of Birth :</b> '.$rw['dob'].'</p></td>
</tr>
<tr>
<td><b>Father`s Name :</b>'.$rw['fname'].'</td>
<td><b>Mother`s Name :</b>'.$rw['mname'].'</td>
</tr>
<tr>
<td><b>SCHOOL :</b>'.$rw['school'].'</td>
<td><b>Class presently studying in :</b>'.$rw['class'].'</td>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>House Address :</b>'.$rw['haddress'].'</td></p>
<td><p style="font-size:14px;color:#000;"><b>City :</b>'.$rw['city'].'</td></p>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>Contact No. (Father) :</b>'.$rw['fcontactno'].'</p></td>
<td><p style="font-size:14px;color:#000;"><b>Contact No. (Mother):</b>'.$rw['fcontactno'].'</p></td>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>Contact No. (Student):</b>'.$rw['scontactno'].'</p></td>
<td><p style="font-size:14px;color:#000;"><b>E-mail ID:</b>'.$rw['emailid'].'</p></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table width="100%">

<tr>
<td><p style="font-size:14px;color:#000;"><b>Overall %age in previous Class:</b>'.$rw['totalmarks'].'</p></td>
</tr>
</table>
</td>
</tr>
<tr>
<td><p style="font-size:14px;color:#000;"><b>Career Option:</b>'.$rw['careeroption'].' </p></td>
<td><p style="font-size:14px;color:#000;"></td>
</tr>
<tr>
<td>
<p style="font-size:14px;font-weight:600;color:#000;margin:0;">Declaration</p>
<p style="font-size:14px;color:#000;margin:0;margin-top:10px">I authorise <b>PACE INSTITUTE</b> to call me and send me information by sms, e-mail, post on the above mentioned communication details.</p>
</td>

</tr>
<tr>
<td><br>
<b>Note</b>: To Complete the Registration for ARISE, you have to Download the pdf of Filled Form after submitting the Online details and must submit the printout of Filled form alongwith Test  Fees in PACE OFFICE.</td>
</tr>
<tr>
<td>
<table style="width:100%;line-height:20px;margin-top:50px;" cellpadding="0" cellspacing="0">
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
</table>
</td>
</tr>
</table>'); 
	 }
 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'potrait'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser 
$dompdf->stream($filename, array("Attachment" => 0));
 
?>