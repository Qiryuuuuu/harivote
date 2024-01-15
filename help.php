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
  <title>FAQs</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Ubuntu&display=swap" rel="stylesheet" />

</head>
<style>
 * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


/* ------- HEADER----------- */

.masthead {
  padding: 1rem;
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
}
h3 {
  color: #fff;
}

h2 {
  text-align: center;
  font-size: 40px;
}

h4 {
  overflow: hidden;
  font-family: Arial, sans-serif;
  font-size: 0.75rem;
  margin-bottom: 5px;
}

h4:before,
h4:after {
  background-color: #000;
  content: '';
  display: inline-block;
  height: 1px;
  position: relative;
  vertical-align: middle;
  width: 2%;
}

h4:before {
  right: 0.5em;
  margin-left: -50%;
}

h4:after {
  left: 0.5em;
  margin-right: -50%;
}

.masthead p {
  font-family: Arial, sans-serif;
  font-size: medium;
}

/* ------------ FAQS SECTION --------- */

main {
  background-image: url(./alain-pham-P_qvsF7Yodw-unsplash.jpg);
  background-size: cover;
}

.container {
  width: 60%;
  height: 90vh;
  margin: 0 auto;
  padding: 2rem;
  background-color: rgb(241, 241, 239);
}

.container h1 {
  text-align: center;
  font-size: 2rem;
}

.accordion-item {
  margin: 1rem 0;
}

.accordion-item-header {
  background: rgb(196, 196, 175);
  padding: 0.5rem 1rem 0.5rem 1rem;
  min-height: 3.5rem;
  line-height: 1.25rem;
  font-weight: bold;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
  cursor: pointer;
  color: rgb(58, 56, 56);
  letter-spacing: 1.5px;
  box-shadow: 2px 2px 3px rgb(32, 32, 32);
  border-radius: 4px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  font-size: 25px;
}

.accordion-item-header::after {
  content: '\002B';
  font-size: 2rem;
  /* position: absolute; */
  /* right: 1rem; */
}

.accordion-item-header.active::after {
  content: '\2212';
  margin-left: 5px;
}

.accordion-item-body {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  -webkit-transition: max-height 0.2s ease-out;
  -moz-transition: max-height 0.2s ease-out;
  -ms-transition: max-height 0.2s ease-out;
  -o-transition: max-height 0.2s ease-out;
}

.accordion-item-body-content {
  font-size: 1.25rem;
  padding: 1rem;
  line-height: 1.2rem;
  font-family: Arial, sans-serif;
}

/* ---------- FOOTER ----------- */
footer {
  font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
  background-color: #008080;
  text-align: center;
  position: fixed;
  bottom: 0;
  width: 100%;
  color: #fff;
  padding: 18px;
  font-size: 20px;
  font: bold;
}

footer p {
  margin: 0;
}

/*---------- MEDIA QUERIES ------------ */
@media only screen and (max-width: 850px) {
  .container {
    width: 80%;
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
  }
  h3 {
    color: #fff;
}
  h4 {
    font-size: 0.6rem;
  }

  .masthead p {
    font-size: 0.6rem;
  }
}

@media only screen and (max-width: 800px) {
  .container h1 {
    font-size: 1.25rem;
  }

  .accordion-item-header {
    font-size: 0.75rem;
  }

  .accordion-item-header::after {
    font-size: 1.2rem;
  }

  .accordion-item-body-content {
    font-size: 0.75rem;
  }
}

@media only screen and (max-width: 490px) {
  h1 {
    font-size: medium;
  }

  .container {
    width: 85%;
    padding: 1rem;
  }

  .container h1 {
    font-size: 1rem;
  }

  .accordion-item-header {
    font-size: 0.65rem;
  }

  .accordion-item-body-content {
    font-size: 0.65rem;
  }
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 10px;
  border-radius: 3px;
  border: 1px solid #1100ff59;
  margin-bottom: 20px;
}

input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border-radius: 3px;
  border: 1px solid #1100ff59;
  margin-bottom: 20px;
}

input[type="submit"] {
  background-color: #000155;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #005b96;
}

form {
  background-color: #fff;
  border-radius: 5px;
  padding: 60px;
  margin: 50px auto;
  max-width: 600px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
img {
  float: left;
}

input[type="submit"] {
  background-color: #008080;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #005b96;
}


body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
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
</style>

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

    <main>
      <div class="container" id="faqs">
        <h2>FAQS</h2>
        <div class="accordion-item">
          <div class="accordion-item-header">
            How Does HariVote Work?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              This is an online voting website where officially registered PLMayers can log in using their credentials,
              view the available options, and cast their votes electronically. The system ensures the integrity and
              confidentiality of the votes through encryption, authentication measures, and sufficient security
              protocols.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Is HariVote Safe and Secure?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              Yes, this online voting website prioritize security to protect the integrity of the voting process. User
              authentication methods, like passwords or multi-factor authentication, are employed to ensure that only
              eligible voters can cast their votes.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            How Can I Trust the Accuracy of the Results?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              HariVote employ rigorous verification and auditing processes to ensure the accuracy of the results. The
              system is often assessed for vulnerabilities and conduct comprehensive reviews to validate the integrity
              of
              the voting process.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            What if I Encounter Technical Issues While Voting?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              HariVote have dedicated technical support teams to assist users in case of any issues. Contact information
              and support channels are provided, such as email or live chat, where users can reach out for assistance.
              It
              is recommended to familiarize yourself with the platform's support options before voting to ensure a
              smooth
              experience.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Can I Change My Vote After Submitting It?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              HariVote do not allow voters to change their votes after submission. This is done to ensure the integrity
              and credibility of the voting process. It is important to review your choices carefully before finalizing
              your vote.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Is My Personal Information Safe?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              HariVote prioritize the security and privacy of user information. This online voting website adhere to
              strict data protection regulations and employ sufficient security measures to safeguard personal data.
              It's
              crucial to review the platform's privacy policy to understand how your information is collected, used, and
              protected.
              <br><br><br><br><br><br>
            </div>
          </div>
        </div>
      </div>
    </main>
    <br><br><br><br><br><br>
    <h2>Contact Us</h2>

    <form action="connectHelp.php" method="post">
      <label for="help_name">Full Name:</label>
      <input type="text" id="help_name" name="help_name" required>

      <label for="help_email">PLM Official Email:</label>
      <input type="email" id="help_email" name="help_email" required>

      <label for="help_subject">Subject:</label>
      <input type="text" id="help_subject" name="help_subject" required>

      <label for="help_description">Message:</label>
      <textarea id="help_description" name="help_description" required></textarea>

      <input type="submit" value="Submit">

      <br><br>

      <div>
        <a href="https://www.facebook.com/profile.php?id=100092946333803&mibextid=LQQJ4d"><img class="icon"
            src="facebook.png" onmouseover="this.src='facebook-hover.png';" onmouseout="this.src='facebook.png';"
            alt=""></a>
        <a href="https://www.instagram.com/plm.harivote/?igshid=OGQ5ZDc2ODk2ZA%3D%3D"><img class="icon"
            src="instagram.png" onmouseover="this.src='instagram-hover.png';" onmouseout="this.src='instagram.png';"
            alt=""></a>
      </div>
    </form>

    <footer>


      <div>&copy; 2023 HariVote. All rights reserved.</div>
    </footer>

    <script src="script.js"></script>
</body>

</html>