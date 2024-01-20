<?php
class student{
	
	private	$servername="localhost";
	private	$user="root";
	private	$pwd="";
	private	$dbname="paceonlineform";
	private $conn="index.html";
	public $base_url="http://localhost/paceonlineform/";
	function __construct(){
		$this->conn = new mysqli($this->servername, $this->user, $this->pwd, $this->dbname);
		
	}
	function register($sname,$dob,$fname,$mname,$school,$class,$haddress,$city,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$careeroption,$picture){
		?>
			
		<?php
		$dor=date('d-M-Y');
		$dob1=date('d-M-Y',strtotime($dob));
		$sql="insert into $class (dor,sname,dob,fname,mname,school,class,haddress,city,fcontactno,mcontactno,scontactno,emailid,mathmarks,sciencemarks,totalmarks,careeroption,picture) values('$dor','$sname','$dob1','$fname','$mname','$school','$class','$haddress','$city','$fcontactno','$mcontactno','$scontactno','$emailid','$mathmarks','$sciencemarks','$totalmarks','$careeroption','$picture')";
		//echo $sql;
		
		if($this->conn->query($sql)===TRUE){
			
			return $this->conn->insert_id;
		}else{
			//echo $this->conn->error();
			return 0;
		}
		
			
	}
	
	function update_reg($sname,$dob,$fname,$mname,$school,$class,$haddress,$city,$fcontactno,$mcontactno,$scontactno,$emailid,$mathmarks,$sciencemarks,$totalmarks,$careeroption,$picture){
		?>
			
		<?php
		/*$dor=date('d-M-Y');*/
		$dob1=date('d-M-Y',strtotime($dob));
		$sql="update $class set sname='$sname',dob='$dob',fname='$fname',mname='$mname',school='$school',class='$class',haddress='$haddress',city='$city',fcontactno='$fcontactno',mcontactno='$mcontactno',scontactno='$scontactno',emailid='$emailid',mathmarks='$mathmarks',sciencemarks='$sciencmarks',totalmarks='$totalmarks',careeroption='$careeroption',picture='$picture' where sid='$sid'";
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
		
		
	}
	
	
	