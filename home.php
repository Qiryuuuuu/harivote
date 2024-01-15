<?php
session_start();
if (!isset($_SESSION["user_id"])) {
  header('location:/votesystem/loginuser.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>HariVote</title>
</head>
<body>
    <section class="header">
        <nav>
            <img class="logo" src="./img/logo.png">
            <ul class="nav_links">
                <li><a href="home.php">Home</a></li> 
                <li><a href="loginvote.php">Vote</a></li> 
                <li><a href="register as candidate.php">Candidacy</a></li> 
                <li><a href="about.php">About Us</a></li> 
                <li><a href="help.php">Help</a></li> 
                <li><a href="logout.php">Log Out</a></li> 
            </ul>
        </nav>

        <div class="title-wrapper">
                <img src="./img/title.png" alt="HariVote" class="title">
               <a href="loginvote.php" class="btn vote">Vote Now!</a>
        </div>
   </section>
   
   <section class="char">
    <div class="content">
        <div class="textbox textbox1"><p><span>Connect Voices,</span> Empower Haribons!</p></div>
        <div class="textbox textbox2"><p>From ballots <span class="difftext">to bytes</span></p></div>
    </div>

    <div class="content2">
        <div class="textbox textbox3"><p>Ditch the <br><span>queues,</span>  <br> embrace the<br><span>ease!</span>  </p></div>
        <div class="textbox textbox4"><p>Break free<br><span>from the old-school</span> <br> voting hassle!</p></div>
    </div>

    <div class="center-wrapper">
        <img src="./img/mockup.png" class="mockup">
    </div>
</section>


<section class="partner">
    <div class="icpep-wrapper">
        <a href="https://www.facebook.com/ICpEP.sePLM" target="_blank" rel="noopener noreferrer">
            <img src="./img/icpeplogo.png" alt="ICPeP Logo" class="icpeplogo">
        </a>
        <p class="description">In Partnership with ICPEP.SE-PLM</p>
    </div>
</section>

<footer>
    <div class="footer-bottom">
        <p>&copy; 2024 HariVote. All Rights Reserved.</p>
    </div>
</footer>


</body>
</html> 