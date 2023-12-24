<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="resetPassword.css">
</head>
<body>
    <div class="back-wrapper">
        <a class="back" href="#">Back</a>
    </div>    

    <div class="logo-wrapper"> 
        <img class="logo" href="#" src="img/logoFinal.png">
    </div>

<section class="container">
    <div class="content">
        <form action="#" method="post">
            <h1>Reset Password<h1>
            <div class="group-input">
                <div class="textfield">
                    <input type="password" id="pass" class="input-field form-control" name="password" pattern="^(?!.*[\\~<>\s]).*(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$" title="Your password should include all the formats below" placeholder="Password" required>
                </div>

                <div id="validation">
                    <h3>Make sure to have this on your password:</h3>
                    <p id="length" class="invalid">At least eight (8 characters)</p>
                    <p id="capital" class="invalid">At least one (1) uppercase letter (A through Z)</p>
                    <p id="letter" class="invalid">At least one (1) lowercase letter (a through z)</p>
                    <p id="number" class="invalid">At least one (1) number (0 through 9)</p>
                    <p id="special" class="invalid">At least one (1) special character <br>Password cannot contain the following characters: \, ~, <, >, space, and tab</br></p>
                    <p id="special-comment" class="comment"></p>
                </div>     

                <div class="textfield">
                    <input type="password" id="confirm-password" class="input-field form-control" placeholder="Confirm Password" required>
                </div>

                <p id="confirm-validation">Password don't match</p>
                <?php if (isset($errorMessage)) { ?>
                    <p class="error-message"><?php echo $errorMessage; ?></p>
                <?php } ?>

                <div>
					<button class= "sign" type="submit" name="login">Send</button>
				</div>
            </div>
        
        
        
        
        </form>
    </div>

</section>

<script src="js/adminSignup.js"></script>
</body>
</html>