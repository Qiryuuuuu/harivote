<?php
session_start();
if (!isset($_SESSION["user_id"])) {
  header('location:/votesystem/loginuser.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&family=Open+Sans&display=swap"
    rel="stylesheet">

  <!-- CSS -->
  

  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<style>
/* body{
    padding-left: 5%;
    padding-right: 5%;
} */

.navbar {
    background-color: whitesmoke;
    margin-top: 2px;
    color: #0c6464;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.10em;
    font-weight: 400;
}

.navbar-nav {
    padding-left: 50%;
    padding-right: 5%;
    margin-left: auto;
    margin-right: auto;
}

.nav-item {
    padding: 0 10px;
}

.nav-btn {
    position: absolute;
    right: 20px;
    width: 300px;
    border-radius: 50px;
    background-color: #f2570f;
    border-width: none;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    align-items: center;
    align-content: center;
    font-size: 1.10em;

}

img {
    float: left;
}

h1 {
    font-family: tahoma, verdana, arial, sans-serif;
    font-size: 40px;
    list-style: none;
    letter-spacing: 0.05px;
    margin: 0;
    color: #fff;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    padding: 2px;
    color: black;
}

h3 {
    color: #fff;
}

#about {
    padding-left: 5%;
    padding-right: 5%;
    padding-top: 10%;
    padding-bottom: 10%;
    color: #000;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.50em;
    font-weight: 400;
    align-items: center;
    width: 100%;

}

.philo {
    margin-top: 1%;
    margin-bottom: 1%;
    color: #000;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.20em;
    font-weight: 400;
    align-items: center;
}

.philo1 {
    margin-top: 1%;
    margin-bottom: 1%;
    color: #000;
    font-family: 'Open Sans', sans-serif;
    font-size: 1em;
    font-weight: 400;
    align-items: center;
}

#vision {
    padding-top: 5%;
    padding-bottom: 5%;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    width: 100%;
    background-color: whitesmoke;
}

.div-vision {
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    margin-bottom: 5%;
}

#team {
    margin-top: 10%;
    margin-bottom: 5%;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    line-height: 1.6;
    width: 90%;
}

h2 {
    color: black;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 4em;
    font-weight: 800;
    text-align: center;
}

.team-img {
    border-radius: 100%;
    width: 100px;
}

.team-member {
    margin-top: 15px;
    margin-bottom: 15px;
}

.icon {
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 5px;
    margin-right: 5px;
    width: 30x;
    height: 30px;

}

footer {
    background-color: #008080;
    font-size: x-small;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
    color: #fff;
    padding: 0px;
}

.navbar {
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    color: white;
}

.brand-title {
    font-size: 1.5rem;
    margin: .5rem;
}

.navbar-links {
    height: 100%;
}

.navbar-links ul {
    display: flex;
    margin: 0;
    padding: 0;
}

.navbar-links li {
    list-style: none;
}

.navbar-links li a {
    display: block;
    text-decoration: none;
    color: #033E3E;
    padding: 1rem;
}

.navbar-links li:hover {
    background-color: #25c19b;
}

.toggle-button {
    position: absolute;
    top: .75rem;
    right: 1rem;
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
}

.toggle-button .bar {
    height: 3px;
    width: 100%;
    background-color: #033E3E;
    border-radius: 10px;
}

@media (max-width: 800px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .toggle-button {
        display: flex;
    }

    .navbar-links {
        display: none;
        width: 100%;
    }

    .navbar-links ul {
        width: 100%;
        flex-direction: column;
    }

    .navbar-links ul li {
        text-align: center;
    }

    .navbar-links ul li a {
        padding: .5rem 1rem;
    }

    .navbar-links.active {
        display: flex;
    }
}

#logo {
    padding: 0;
    margin-left: 0%;
    width: auto;
    float: left;
}

#logo h1 a,
h1 a:hover {
    color: #033E3E;
    text-decoration: none;
}

#logo h1 span {
    color: #42B72A
}

#header {
    background: #fff;
}

#header-inner {
    margin: 0 auto;
    padding: 0;
    width: 970px;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.box {
    border: 3px solid black;
    padding: 20px;
    text-align: center;
}

.heading {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    color: black;
}

.video-container {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
    /* 16:9 aspect ratio (responsive) */
    margin-bottom: 100px;
}

/* Style the video iframe */
.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

label {
    display: block;
    margin-bottom: 20px;
    font-weight: bold;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid #008080;
    margin-bottom: 20px;
}

input[type="submit"] {
    background-color: #008080;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    width: 10%;
    margin-bottom: 10px;
}

input[type="submit"]:hover {
    background-color: #005b96;
}

form {
    font-size: 30px;
    background-color: #fff;
    border-radius: 10px;
    padding: 60px;
    margin: 50px auto;
    max-width: 1500px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    opacity: 0.90;
}

#popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}

#popupForm {
    background-color: #fff;
    padding: 20px;
    max-width: 400px;
    text-align: center;
}

#popup h2 {
    margin-bottom: 20px;
}

#popup button {
    background-color: #008080;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    width: 30%;
    margin-bottom: 10px;
}

#popup button:hover {
    background-color: #005b96;
}

#myForm {
    display: flex;
    flex-direction: column;
    align-items: left;
    justify-content: center;
    text-align: center;
    margin: 0 auto;
    max-width: 1500px;
}

</style>

</head>

<body>

  <div id="page">
    <header id="header">
      <nav class="navbar">
      <div id="logo">
          <a href="home.php"> <img height="80px" width="220px" src="img/logofinal.png"></a>

        </div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="loginvote.php">Vote</a></li>
                        <li><a href="register as candidate.php">Candidacy</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="help.php">Help</a></li>
                        <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <br><br><br>

    <h2> Revolutionized E-Voting System for Institute </h2>
    <h2> of Computer Engineers of the Philippines</h2>
    <h2> Student Edition - PLM Chapter</h2>

    <br><br><br>

    <div class="box">
      <h1 class="heading">CONNECT VOICES, EMPOWER HARIBONS</h1>
    </div>

    <section id="about">
      <div class="row">
        <div class="col">
          <h1>WHAT IS ONLINE VOTING?</h1>
          <p class="philo1">
            Online voting refers to the process of casting and counting votes electronically using internet-based
            platforms. It is important for student organizations as it enhances accessibility and convenience, allowing
            members to participate in decision-making regardless of their location or schedule. Additionally, online
            voting streamlines the voting process, reduces administrative burdens, and promotes democratic principles
            within student organiations.
          </p>
        </div>
        <div class="col"><img src="./resources/vote.png" alt="" width="100%" /></div>
      </div>

    </section>

    <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/BW3SFZxygto" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
    </div>

    <footer>
      <h3>&copy; 2023 HariVote. All rights reserved.</h3>
    </footer>

</body>

</html>