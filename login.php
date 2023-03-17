<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $mobno=$_POST['mobno'];
    $password=md5($_POST['password']);
    $sql ="SELECT ID FROM users WHERE MobileNumber=:mobno and Password=:password";
    $query=$dbh->prepare($sql);
    $query->bindParam(':mobno',$mobno,PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['obcsuid']=$result->ID;
}


$_SESSION['login']=$_POST['mobno'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<title>LOGIN</title>
		  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="style.css">


</head>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="register.php">Sign Up</a></label>
		<div class="login-form">
			<form method="post" name="login">
			<div class="sign-in-htm">
				
				<div class="group">
					<label for="mobno" class="label">mobile number</label>
				
                  <input type="text" name="mobno" maxlength="10" pattern="[0-9]+" required="true" class="input"/>
                                                
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<div class="login-input-area">
                                                <input type="password" name="password" required="true" class="input" />
                                                <i class="fa fa-lock login-user"></i>
                                            </div>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon" style= margin-top:10px></span> Keep me Signed in</label>
				</div>
				<div class="group">
				<button type="submit" class="button" style= margin-top:30px name="login">Sign in</button>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk" style= margin-top:50px>
					<a href="forgot-password.php">Forgot Password?</a>
				</div>
			</div>
		</form>

			
		</div>
	</div>
</div>
</html>