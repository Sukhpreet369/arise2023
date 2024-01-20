<?php 
include_once "../config.php";
$class=$_GET['class'];
$sid=$_GET['sid'];
$classfile=$_GET['classfile'];

$student=new student();

$d=$student->del_student($class,$sid);
 if($d==true)
 { 
header("location:{$classfile}.php");
 }  
 
 ?>
