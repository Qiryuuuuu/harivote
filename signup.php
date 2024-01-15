<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="signup.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>HariVote Registration </title>
</head>
<body>
<div id="page">
        <header id="header">
            <nav class="navbar">
                <div id="logo">
          <a href="loginuser.php"> <img height="80px" width="220px" src="img/logofinal.png"></a>
        


                </div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                
            </nav>
        </header>
    <main>
    <div class="wrapper">
        <div class="titles">
            Create an account
            <p>It's quick and easy</p>
        </div>
    <div class="container">
        <header>HariVote Registration</header>

        <form action="process-signup.php" method="post" id="signup" novalidate>
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                    
                    <div class="input-field">
                    <label for="firstname">Full Name</label>
                      <input type="text" id="firstname" placeholder="Enter your Full Name" name="firstname"required>
            
                        </div>
                        
                        <div class="input-field">
                            <label for="lastname">Personal Email</label>
                            <input type="email" id="lastname" placeholder="Personal Email" name="lastname"required>
                              </div>
                        <div class="input-field">
                        <label for="password">Password</label>
                     <input type="password" id="password"placeholder="Enter your Password" name="password"required>
                     
            
                        </div>
        
                         <div class="input-field">
                         <label for="password_confirmation">Confirm password</label>
                       <input type="password" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation"required>
                          </div>

                          
                          
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identity Details</span>
                    <div class="fields">
                    
                    <div class="input-field">
                            <label label for="studno">Student Number</label>
                            <input type = "number" id="studno" placeholder="Ex. 2021XXXXX" name="studno"required>
                        </div>
                    <div class="input-field">
                      
                            <label label for="degree">Degree or Program</label>
                            <select id="degree" name="degree" required>
                                <option disabled selected>Select Year</option>
                                <option>Computer Engineering</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label label for="year">Year</label>
                            <select id="year" name="year" required>
                                <option disabled selected>Select Year</option>
                                <option>1st</option>
                                <option>2nd</option>
                                <option>3rd</option>
                                <option>4th</option>
                                <option>5th</option>
                                <option>6th</option>
                            </select>
                        </div>
                       
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

        
    <script src="signup.js"></script>
</body>
</html>