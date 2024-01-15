<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin sign up</title>
    <link rel="stylesheet" href="adminSignups.css">

</head>
<body>

        <div id="success-popup" class="popup">
             <h1 class="messpop">Account created successfully!</h1>
             <a class="loginAdmin" href="loginadmin.php">Login now</a>
        </div>

    <div class="back-wrapper">
        <a class="back" href="home.php">Back</a>
    </div>

    <div class="logo-wrapper">
        <img class="logo" src="img/logo.png">
    </div>

    <section class="container">
            <div class="content">
                <div class="left"></div>
                <form action="process-signupadmin.php" method="post">
                    <h1>Create Account</h1>
                    <div class="group-input">
                        <div class="textfield names">
                            <input type="text" class="name input-field first-name" placeholder="First Name" name="firstname" required>

                            <input type="text" class="name input-field last-name" placeholder="Last Name" name="lastname" required>
                        </div>
                        
                        <div class="textfield">
                            <input type="text" class="name input-field" placeholder="Username" name="username" required>
                        </div>

                        <div class="textfield">
                            <input type="email" class="input-field" placeholder="Email" name="email" required>
                        </div>

                        <div class="textfield">
                            <input type="password" id="pass" class="input-field" name="password" pattern="^(?!.*[\\~<>\s]).*(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$" title="Your password should include all the formats below" placeholder="Password" required>
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
                            <input type="password" id="confirm-password" class="input-field" name="confirmPassword" placeholder="Confirm Password" required>
                        </div>

                        <p id="confirm-validation">Password don't match</p>
                        <?php if (isset($errorMessage)) { ?>
                            <p class="error-message"><?php echo $errorMessage; ?></p>
                        <?php } ?>

                        <div>
                            <button class= "create" type="submit" name="submit">Submit</button>
                            <p class="priv">By submitting this form you agree to our <span class="log"><a href="#" target="_blank">Privacy and Policy</a></span></p>
                            <p>Already have an account? <span class="log"><a href="loginadmin.php">Sign in</a></span></p>
                        </div>
                    </div>
                </form>
            </div>
        </section>


        <script src="js/adminSignup.js"></script>
        


</body>
</html>