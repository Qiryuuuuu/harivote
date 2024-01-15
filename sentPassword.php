<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgotPassword.css">
</head>
<body>

        <div id="success-popup" class="popup">
             <h1 class="messpop">Message sent successfully, please check your email.</h1>
             <a class="close" href="forgotPassword.php">Close</a>
        </div>

    <div class="back-wrapper">
        <a class="back" href="loginadmin.php">Back</a>
    </div>    

    <div class="logo-wrapper"> 
        <img class="logo" href="#" src="img/logoFinal.png">
    </div>

<section class="container">
    <div class="content">
        <form action="send-password-reset.php" method="post">
            <h1>Forgot Password<h1>
            <div class="group-input">
				<div class="textfield">
        			<input type="email" class="form-control" name="email" placeholder="Enter email" required>
				</div>

                <div>
					<button class= "sign" type="submit" name="login">Send</button>
				</div>
            </div>
        
        
        
        
        </form>
    </div>

</section>

</body>
</html>