<?php 
$connection = mysqli_connect("localhost", "root", "", "db_automation");
$loginError = "";
if(isset($_POST['login'])){

	include("function.php");
	$formUsername = validateFormData($_POST['username']);
	$formPassword = validateFormData($_POST['password']);


	$query = "SELECT id, username, password FROM user_account WHERE username = '$formUsername'";
	$result = mysqli_query($connection,$query);

	if(mysqli_num_rows($result) > 0){

		while($row=mysqli_fetch_assoc($result)){

			$id=$row['id'];
			$name=$row['username'];
			$hashedPass = $row['password'];
		}

		if($formPassword === $hashedPass){
			session_start();
			$_SESSION['logUser']=$name;
			$_SESSION['logid']=$id;
			header("Location:index.php");
		}else{
			echo "<script type='text/javascript'>alert('Your username and password not match'); window.location.href='login.php';</script>";
		}
	}else{
			echo "<script type='text/javascript'>alert('No such user in database'); window.location.href='login.php';</script>";
	}
}
 mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="icon" type="image/gif/png" href="./img/logo.png">
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	 <div class="main">
		<div class="login-form">

			<h1>P2P AUTOMATION</h1>
					<div class="head">
						<img src="img/logo.png" alt=""/>
					</div>
				<form method="POST">
						<input type="text" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" name="username">
						<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name="password">
						<div class="submit">
							<input type="submit" name="login" value="LOGIN" >
					</div>	
					
				</form>
			</div>
   					<div class="copy-right">
					</div>
		</div>
		 		
</body>
</html>