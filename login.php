<?php session_start();
     if(isset($_POST['submit'])){
include_once "config.php";
$uname=$_POST['login'];
$pwd=$_POST['pwd'];
$myuser=new student();
$result=$myuser->checkuser($uname,$pwd);
if($result===true){
	$_SESSION['uname']=$uname;
	header("location:".$myuser->base_url."/admin");}
else{?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
	
	
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

		 <h2 class="active">Pace Institute - Login Screen  </h2>
            <img src="img/logo.png">
          <!-- Login Form -->
	<?php	  
	
	echo '<p style="color:red;">Invalid UserName or password  </p>';
	echo '<p>click <a href="login.php">here</a> to login again</p>';
}
}
else{
	  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
	
	
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

		 <h2 class="active">Pace Institute - Login Screen  </h2>
            <img src="img/logo.png">
          <!-- Login Form -->
         

		  <form method="post">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
			
            <input type="password" id="password" class="fadeIn third" name="pwd" placeholder="password">
            
			<input type="submit" name="submit" class="fadeIn fourth" value="Log In">
			
          </form>
		  <!--<a href="forget.php">Forget Password</a>-->
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
           <!-- <a class="underlineHover" href="#">Forgot Password?</a>-->
          </div>
      
        </div>
      </div>
      
<?php }?>

</body>

</html>

