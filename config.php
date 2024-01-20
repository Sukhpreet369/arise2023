<?php
//require_once 'dompdf/autoload.inc.php'; 
 			// Reference the Dompdf namespace 
//use Dompdf\Dompdf;
class student{
	
	/*private	$servername="localhost";
	private	$user="dhwdohem_pace";
	private	$pwd="Pass@123#@";
	private	$dbname="dhwdohem_pace";
	private $conn=null;
	public $base_url="http://paceonline.in/arise2022/";
	*/
	private	$servername="localhost";
	private	$user="root";
	private	$pwd="";
	private	$dbname="dhwdohem_pace";
	private $conn=null;
	public $base_url="http://localhost/arise2023";
	function __construct(){
		$this->conn = new mysqli($this->servername, $this->user, $this->pwd, $this->dbname);
		
	}
	

function validateOTP($expectedOTP, $userOTP) {
    // Remove any leading or trailing spaces from user input
    $userOTP = trim($userOTP);

    // Compare the expected OTP with the user input
    if ($expectedOTP === $userOTP) {
        return true; // OTP is valid
    } else {
        return false; // OTP is not valid
    }
}
function tempreg($sname,$dob,$fname,$mname,$school,$class,$haddress,$city,$foccupation,$forg,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$testslot,$careeroption,$picture){
		?>
			
		<?php
		$dor=date('d-M-Y');
		$dob1=date('d-M-Y',strtotime($dob));
		$sql="insert into tempregister (dor,regno,sname,dob,fname,mname,school,class,haddress,city,foccupation,forg,fcontactno,mcontactno,scontactno,emailid,mathmarks,sciencemarks,totalmarks,testslot,careeroption,picture) values('$dor','','$sname','$dob1','$fname','$mname','$school','$class','$haddress','$city','$foccupation','$forg','$fcontactno','$mcontactno','$scontactno','$emailid','$mathmarks','$sciencemarks','$totalmarks','$testslot','$careeroption','$picture')";
		//echo $sql;
		
		if($this->conn->query($sql)===TRUE){
				return $this->conn->insert_id;
		}else{
			//echo $this->conn->error();
			return 0;
		}
		
			
	}



	function register($sname,$dob,$regno,$fname,$mname,$school,$class,$haddress,$city,$foccupation,$forg,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$testslot,$careeroption,$picture){
		?>
			
		<?php
		$dor=date('d-M-Y');
		//$dob1=date('d-M-Y',strtotime($dob));
		$sql="insert into $class (dor,regno,sname,dob,fname,mname,school,class,haddress,city,foccupation,forg,fcontactno,mcontactno,scontactno,emailid,mathmarks,sciencemarks,totalmarks,testslot,careeroption,picture) values('$dor','$regno','$sname','$dob','$fname','$mname','$school','$class','$haddress','$city','$foccupation','$forg','$fcontactno','$mcontactno','$scontactno','$emailid','$mathmarks','$sciencemarks','$totalmarks','$testslot','$careeroption','$picture')";
		echo $sql;
		$sql2="delete from tempregister where sname='$sname' and emailid='$emailid' and class='$class'";
		echo $sql2;
		die;
		if($this->conn->query($sql)===TRUE){
		$insid=	$this->conn->insert_id;	
	
			if($this->conn->query($sql2)===TRUE){

			return $insid;
			}
		}else{
			//echo $this->conn->error();
			return 0;
		}
		
			
	}
	function update_tmpreg($sname,$dob,$fname,$mname,$school,$class,$haddress,$city,$foccupation,$forg,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$testslot,$careeroption)
	{
		
		/*$dor=date('d-M-Y');*/
		
		$dob1=date('d-M-Y',strtotime($dob));
		$sql="update tempregister set dob='$dob1',fname='$fname',mname='$mname',school='$school',haddress='$haddress',city='$city',foccupation='$foccupation',forg='$forg',fcontactno='$fcontactno',mcontactno='$mcontactno',scontactno='$scontactno',mathmarks='$mathmarks',sciencemarks='$sciencemarks',totalmarks='$totalmarks',testslot='$testslot',careeroption='$careeroption' where sname='$sname' and emailid='$emailid' and class='$class'";
		
		if($this->conn->query($sql)===TRUE){
			
			return $this->conn->insert_id;
		}else{
			//echo $this->conn->error();
			return 0;
		}
		
			
	}
	

	function update_reg($sid,$sname,$dob,$fname,$mname,$school,$class,$haddress,$city,$foccupation,$forg,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$testslot,$careeroption,$picture){
		?>
			
		<?php
		/*$dor=date('d-M-Y');*/
		$dob1=date('d-M-Y',strtotime($dob));
		$sql="update $class set sname='$sname',dob='$dob',fname='$fname',mname='$mname',school='$school',class='$class',haddress='$haddress',city='$city',foccupation='$foccupation',forg='$forg',fcontactno='$fcontactno',mcontactno='$mcontactno',scontactno='$scontactno',emailid='$emailid',mathmarks='$mathmarks',sciencemarks='$sciencemarks',totalmarks='$totalmarks',testslot='$testslot',careeroption='$careeroption',picture='$picture' where sid='$sid'";
		//echo $sql;
		
		if($this->conn->query($sql)===TRUE){
			
			return $this->conn->insert_id;
		}else{
			//echo $this->conn->error();
			return 0;
		}
		
			
	}
	/*function checkuser($uname,$pwd){
			
			$sql="select * from player where uname='$uname' and password='$pwd'";
			$result=$this->conn->query($sql);
			
			if(isset($result->num_rows) && $result->num_rows > 0){
				
           	return true;
			}
			else
			{
			return false;
			}
			
		}
	function forget($uname,$pwd){
			
			$sql="select * from player where uname='$uname'";
			$result=$this->conn->query($sql);
			
			if(isset($result->num_rows) && $result->num_rows > 0){
			  $sql1="update player set password='$pwd' where uname='$uname'";
              $this->conn->query($sql1);			  
           	return true;
			}
			else
			{
			return false;
			}
			
		}
		*/
		
		/*function genpdf()
		{ 
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		
		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'potrait'); 
		// Load HTML content 
		$dompdf->loadHtml('<h1>Hello students</h1>'); 
		// Render the HTML as PDF 
		$dompdf->render(); 
		// Output the generated PDF to Browser 
		$dompdf->stream("codexworld", array("Attachment" => 0));
		}*/
		
		function validate_reg($class,$sname,$email){
			$sql="select * from $class where sname='$sname' and emailid='$email'";
			$result=$this->conn->query($sql);
			return $result->num_rows;
		}
		function chk_tmpreg($class,$sname,$email){
			$sql="select * from tempregister where sname='$sname' and emailid='$email' and class='$class'";
			$result=$this->conn->query($sql);
			return $result->num_rows;
		}
		function validate_tempreg($class,$sname,$email){
			$sql="select * from tempregister where sname='$sname' and emailid='$email' and class='$class'";
			/*echo $sql;
			die; */
			$result=$this->conn->query($sql);
			$data=array();
			if($result->num_rows)
			{
				while ($row = $result->fetch_assoc()) {
					$data = $row;
				}
			}
			return $data;
		}
		
		function view($class)
		{
		$sql="select * from $class";
		$result=$this->conn->query($sql);
		return $result ->fetch_all(MYSQLI_ASSOC);
		}
		function view_detail($class,$sid)
		{
		$sql="select * from $class where sid='$sid'";
		$result=$this->conn->query($sql);
		return $result ->fetch_all(MYSQLI_ASSOC);
		}
		function countstudent($class)
		{
		$sql="select * from $class";
		$result=$this->conn->query($sql);
		return $result->num_rows;
		}
		
		function assign_regno($class,$rid)
		{
			if($class=="class7")
			{
			$classcode="07";
			}
			else if($class=="class8")
			{
			$classcode="08";
			
			}
			else if($class=="class9")
			{
			$classcode="09";
			
			}
			
			else if($class=="class10")
			{
			$classcode="10";
			}
			else if($class=="class11med")
			{
			$classcode="11M";
			}
			else if($class=="class11nonmed")
			{
			$classcode="11NM";	
			}
			$regno="PACE2023".$classcode.$rid;
			$sql="update tempregister set regno='$regno' where sid='$rid'";
			//echo $sql;
			$this->conn->query($sql);
			return $rid;
		}
		
		function get_tmpregno($sname,$emailid,$class)
		{
			$sql="select regno from tempregister where sname='$sname' and emailid='$emailid' and class='$class'";
			$result=$this->conn->query($sql);
			if($result->num_rows)
			{
				while ($row = $result->fetch_assoc()) {
					$data = $row;
				}
				return $data['regno'];
			}
			
		}
		function get_tmpsid($sname,$emailid,$class)
		{
			$sql="select sid from tempregister where sname='$sname' and emailid='$emailid' and class='$class'";
			$result=$this->conn->query($sql);
			if($result->num_rows)
			{
				while ($row = $result->fetch_assoc()) {
					$data = $row;
				}
				return $data['sid'];
			}
			
		}
		function get_tmpregno2($sid)
		{
			$sql="select regno from tempregister where sid='$sid'";
			$result=$this->conn->query($sql);
			if($result->num_rows)
			{
				while ($row = $result->fetch_assoc()) {
					$data = $row;
				}
				return $data;
			}
			
		}
		function checkuser($uname,$pwd){
			
			$sql="select * from admin where uname='$uname' and password='$pwd'";
			$result=$this->conn->query($sql);
			
			if(isset($result->num_rows) && $result->num_rows > 0){
				
           	return true;
			}
			else
			{
			return false;
			}
			
		}
		
		function forget($uname,$pwd){
			
			$sql="select * from admin where uname='$uname'";
			$result=$this->conn->query($sql);
			
			if(isset($result->num_rows) && $result->num_rows > 0){
			  $sql1="update admin set password='$pwd' where uname='$uname'";
              $this->conn->query($sql1);			  
           	return true;
			}
			else
			{
			return false;
			}
			
		}

		function pay_status($tid,$sname,$sclass,$email,$amount,$order_status,$trans_date){
			$sql="insert into payment_detail (tid,sname,sclass,email,amount,order_status,trans_date) values('$tid','$sname','$sclass','$email','$amount','$order_status','$trans_date')";
			
			if($this->conn->query($sql1)===TRUE){
				return $this->conn->insert_id;
			}
		}
	}
	
	
	