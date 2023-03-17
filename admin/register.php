<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $ret="select Username from admin where Username=:username";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{
$sql="Insert Into admin(Username,Password,Email)Values(:username,:password,:email)";
$query = $dbh->prepare($sql);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_INT);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('You have signup  Succesfully');</script>";
}
else
{

echo "<script>alert('Something went wrong.Please try again');</script>";
}
}
 else
{

echo "<script>alert('This username already exists. Please try again');</script>";
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
	<div class="login-html" style="margin-top: -68px">
		<input id="tab-2" type="radio" name="tab" class="sign-in" checked><label for="tab-2" class="tab" > Sign Up</label>
		<input id="tab-1" type="radio" name="tab" class="sign-up"><label for="tab-1" class="tab"><a href="register.php"></a></label>
		<div class="login-form">
			<form  method="post" >
			<div class="sign-in-htm">
				
				<div class="group">
					<label for="username" class="label">Username</label>
					<input type="text" name="username" required="true" class="input"/>
				</div>
				
        <div class="group">
					<label for="email" class="label">Email</label>
					<input type="text" name="email" class="input"/>
				</div>
				
				<div class="group">
					<label for="password" class="label">Password</label>
					<input type="password" name="password" required="true" class="input"/>
				</div>
			
				
				<div class="group">
				<button type="submit" class="button" name="submit" style="margin-top:40px">Sign Up</button>
				</div>
			
				<div class="foot-lnk" style="margin-top:70px">
					<label for="tab-1"><a href="login.php" style="margin-top:90px">Already Registered?</a>
				</div>
			</div>
		</form>

			
		</div>
	</div>
</div>
</html>