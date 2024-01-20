<?php 
@session_start();
@session_destroy();
include_once "../config.php";
$st=new student();
header("location:".$st->base_url."/login.php");
?>