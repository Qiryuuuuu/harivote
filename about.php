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
  <title>About Us</title>

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
            font-size: 60px;
            list-style: none;
            letter-spacing: 0.05px;
            margin: 0;
            color: black;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            padding: 2px;
        }
h3 {
    color: black;
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
    font-size: 0.95em;
    font-weight: 400;
    align-items: center;
    text-align: justify;
}
.philo1 {
    margin-top: 1%;
    margin-bottom: 1%;
    color: #000;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.10em;
    font-weight: 400;
    align-items: center;
    text-align: justify;
}

#vision {
    padding-top: 5%;
    padding-bottom: 5%;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    width: 100%;
    background-color: whitesmoke;
    text-align: justify;
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
    color: #0c6464;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 4em;
    font-weight: 800;
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
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}
    </style>
</head>

<body>

  <div id="page">
    <header id="header">
      <nav class="navbar">
        <div id="logo">
          <a href="home.php"> <img height="80px" width="180px" src="img/logofinal.png"></a>
         

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

    <section id="about">
      <div class="row">
        <div class="col">
          <h1>About Us</h1>
          <p class="philo">
            HariVote is a student-led online voting software of the ICpEP.se- PLM Chapter. It allows students to vote 
            electronically using the HariVote website, having any internet-connected device. Moreover, HariVote is
            secure, eliminating the need for expensive and less efficient traditional voting tools and in-person gatherings. 
            The system makes it easy to create and distribute electronic ballots to voters. Results are automatically 
            recorded and tallied during the election period, saving resources by eliminating manual tallying, which shall 
            be posted upon the PLM - HariVote FB Page.
          </p>
        </div>
        <div class="col"><img src="./resources/coverpage.png" alt="" width="100%" /></div>
      </div>

    </section>

    <section id="vision">
      <div class="div-vision">
        <h2>Our Vision</h2>
        <p class="philo1">
          We envision a future where voting is accessible and convenient for everyone, and where organizations can trust
          the integrity and accuracy of their election results. Harivote’s strives to create a democratic environment
          where transparency and fairness are at the forefront of every election. We aim to become the leading provider
          of
          electronic voting systems in the Pamantasan ng Lungsod ng Maynila, by continuously improving our technology
          and
          services to meet the evolving needs of our clients. Our ultimate vision is to empower organizations to conduct
          free and fair elections, and to make a positive impact on the communities we serve.
        </p>
      </div>
      <div class="div-vision">
        <h2>Our Mission</h2>
        <p class="philo1">
          Harivote’s mission is to provide a secure, user-friendly, and efficient electronic voting system for the
          organizations of the Pamantasan ng Lungsod ng Maynila. We aim to revolutionize the way voting is conducted by
          offering a reliable and robust platform that ensures the accuracy and integrity of the election results. Our
          goal is to enable every member of the organization to exercise their right to vote conveniently and safely,
          without any hassle or fear of fraud.
        </p>
      </div>
    </section>

    <section id="vision">
      <div class="div-vision">
        <h2>Who We Are</h2>
        <p class="philo1">
          Welcome to our student-led online voting website, HariVote! We are a group of passionate and dedicated
          students
          who have come together to create a platform that empowers fellow PLMayers to voice their opinions and make a
          difference in our educational community. Our goal is to provide a convenient, secure, and accessible website
          for
          conducting various student elections, surveys, and polls. At the heart of our project is the belief that every
          student deserves a voice and the opportunity to shape the
          future of our Pamantasan. We understand the importance of student engagement and the impact it can have on
          fostering a vibrant and inclusive campus environment. Through HariVote, we aim to create a space where
          students
          can actively participate in decision-making processes that affect their education and overall student
          experience.
          <br><br>
          Security and privacy are our top priorities. We have implemented sufficient security measures to ensure the
          integrity and confidentiality of the voting process. Rest assured that your privacy is protected, and your
          votes
          remain anonymous. As students ourselves, we understand the importance of transparency and accountability. We
          strive to maintain
          the highest standards of fairness and accuracy in our online voting system.
          <br><br>
          We are constantly working to improve our platform and welcome feedback from our fellow students. Your
          suggestions and ideas are invaluable in shaping the future of HariVote. Together, let's create a strong and
          united student community by actively engaging in the democratic process. Thank you for using HariVote! Your
          participation and involvement are essential in making a positive impact on
          our educational journey. If you have any questions, concerns, or suggestions, please don't hesitate to reach
          us
          out.
          <br><br>
        </p>
      </div>
    </section>


    <section id="team">
      <div class="row">
        <h2>Our Team</h2>
        <br> <br> <br> <br> <br>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 team-member">
          <img src="./resources/Alambra.png" alt="employee-image" class="team-img">
          <h3>Joseph Nathaniel Alambra</h3>
          <p>jnialambra2021@plm.edu.ph</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 team-member">
          <img src="./resources/Aragon.png" alt="employee-image" class="team-img">
          <h3>Patrick Laurence M. Aragon</h3>
          <p>plmaragon2021@plm.edu.ph</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 team-member">
          <img src="./resources/Banal.png" alt="employee-image" class="team-img">
          <h3>Daryll L. Banal</h3>
          <p>dlbanal2021@plm.edu.ph</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12  team-member">
          <img src="./resources/Beron.png" alt="employee-image" class="team-img">
          <h3>Anna Bianca G. Beron</h3>
          <p>abgberon2021@plm.edu.ph</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 team-member">
          <img src="./resources/Bolocon.png" alt="employee-image" class="team-img">
          <h3>Joniel R. Bolocon</h3>
          <p>jrbolocon2021@plm.edu.ph</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 team-member">
          <img src="./resources/De Guzman.png" alt="employee-image" class="team-img">
          <h3>Jastine V. De Guzman</h3>
          <p>jvdeguzman2021@plm.edu.ph</p>
        </div>
      </div>
    </section>

    <div>
      <a href="https://www.facebook.com/profile.php?id=100092946333803&mibextid=LQQJ4d"><img class="icon"
          src="./img/facebook.png" onmouseover="this.src='./img/facebook-hover.png';"
          onmouseout="this.src='./img/facebook.png';" alt=""></a>
      <a href="https://www.instagram.com/plm.harivote/?igshid=OGQ5ZDc2ODk2ZA%3D%3D"><img class="icon"
          src="./img/instagram.png" onmouseover="this.src='./img/instagram-hover.png';"
          onmouseout="this.src='./img/instagram.png';" alt=""></a>
    </div>

    <footer>
      <div>
        <h3>© 2024 HariVote. All rights reserved.</h3>
      </div>

    </footer>
</body>

</html>