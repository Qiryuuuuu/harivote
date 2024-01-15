<?php
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start(); // Start session only when a login attempt is made

    $conn = require __DIR__ . "/database.php";

    $studno = $_POST['studno'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM voters WHERE studno = '$studno'";
    $query = $conn->query($sql);

    $user = $query->fetch_assoc();

    if ($user) {
        if (password_verify($_POST["password"], $user["password"])) {
            session_regenerate_id();
            $_SESSION["user_id"] = $user["id"];
            header("Location: /votesystem/home.php");
            exit;
        }
    }

    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harivote Login</title>
    <link rel="stylesheet" type="text/css" href="loginuser.css">
<body>
<main>
        <div class="row">
            <div class="colm-logo">
                <h1 class="logoone">Hari</h1><h1 class="logotwo">Vote</h1>
                <h2>Connect Voices, Empower Haribons</h2>
            </div>
   
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    <form method="post">
        <div class="colm-form">
            <div class="form-container">
    
        <label for="studno">Student Number</label>
        <input type="number" name="studno" id="studno" placeholder="Ex. 202100123">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password"placeholder="Enter your Password">
        <div class= "pass-wrapper">
	    	<a href="user-forgotPassword.php" class="forgot-password">Forgot Password?</a>
		</div>
        
        <a type = "submit" class = "btn-new" role="button">Login</a>

        <a href="loginadmin.php">Login as Admin</a>
                    <a class ="btn-new" href="signup.php" role="button">Create new Account</a>
                </div>
                <p><b>Make the best choice</b>  Vote now! </p>
            </div>
        </div>
    </main>
    <footer id="footer">
        <div id="footer-inner">
            <p>&copy; Copyright <a href="https://www.facebook.com/profile.php?id=100092946333803">HariVote</a> &#124; <a href="https://plmedu-my.sharepoint.com/:b:/g/personal/jnialambra2021_plm_edu_ph/EWFykrsgO9lEm8mMFPi-7_IBZKZcATHNNvvtGYlqA_McbQ?e=Eieqda">Terms of Use</a> &#124; 
            <a href="https://plmedu-my.sharepoint.com/:b:/g/personal/jnialambra2021_plm_edu_ph/EU5rNZ-k50NHiqrwDhm_3PMBZWN29BFMkylBvJwwBerUgw?e=36ur1c">Privacy Policy</a></p>
            <div class="clr"></div>
        </div>
    </footer>
</div>
    
</body>
</html>








