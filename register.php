<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mobno=$_POST['mobno'];
    $add=$_POST['address'];
    $password=md5($_POST['password']);
    $ret="select MobileNumber from users where MobileNumber=:mobno";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':mobno', $mobno, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{
$sql="Insert Into users(FirstName,LastName,MobileNumber,Address,Password)Values(:fname,:lname,:mobno,:add,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':mobno',$mobno,PDO::PARAM_INT);
$query->bindParam(':add',$add,PDO::PARAM_STR);

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

echo "<script>alert('This Mobile Number already exist. Please try again');</script>";
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
					<label for="fname" class="label">Firstname</label>
					<input type="text" name="fname" required="true" class="input"/>
				</div>
				<div class="group">
					<label for="lname" class="label">Surname</label>
					<input type="text" name="lname" required="true" class="input" />
				</div>
				<div class="group">
					<label for="mobno" class="label">Mobile Number</label>
					<input type="text" name="mobno" maxlength="10" pattern="[0-9]+" required="true" class="input"/>
				</div>
        <div class="group">
					<label for="add" class="label">Address</label>
					<input type="text" name="address" class="input"/>
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