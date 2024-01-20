<?php
include_once "config.php";
			
            
            $sname=$_POST['sname1'];
				
				
				$class=$_POST['myclass1'];
				
				$emailid=$_POST['email1'];
				
				//$picture="";
				/*print_r($_POST);
				die;
				*/
				$student=new student();
				$data=$student->validate_tempreg($class,$sname,$emailid);
				$jsonData=json_encode($data);
				header('Content-Type: application/json');
				echo $jsonData;

              ?>  