<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:/admin/home.php');
  	}
?>
<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="loginadmins_v2.css">
	<title>Admin Login</title>
</head>
<body>
	<div class="back-wraper">
		<a href="loginuser.php" class="back">Back</a>
	</div>
	
	<div class="logo-wrapper">
		<img class="logo" src="img/logofinal.png">
	</div>

<section class="container">
	<div class="content">
		<form action="process-loginadmin.php" method="post">
		<h1>Sign in</h1>
			<div class="group-input">
				<div class="textfield">
        			<input type="text" class="form-control" name="username" placeholder="Username" required>
				</div>

				<div class="textfield">
        			<input type="password" class="form-control" name="password" placeholder="Password" required>
				</div>
				
				<div class= "pass-wrapper">
					<a href="forgotPassword.php" class="forgot-password">Forgot Password?</a>
				</div>

				<div>
					<button class= "sign" type="submit" name="login">Sign in</button>
				</div>

				<div class="create-wrapper">
					<p>Don't have an account yet? <span class="log"><a href="adminSignups.php">Sign up</a></span></p>
				</div>

			</div>


		</form>
	<div>
</section>

</body>
</html>
  
 
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
