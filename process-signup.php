<html>
    <body>
<?php

if (empty($_POST["firstname"])) {
    echo '<a href="signup.php">Go Back</a>';
    die("Name is required");
    
}

if ( ! filter_var($_POST["lastname"], FILTER_VALIDATE_EMAIL)) {
    echo '<a href="signup.php">Go Back</a>';
    die("Valid email is required");
}
if (empty($_POST["password"])) {
    echo '<a href="signup.php">Go Back</a>';
    die("Password is required");
}
if (strlen($_POST["password"]) < 8) {
    echo '<a href="signup.php">Go Back</a>';
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    echo '<a href="signup.php">Go Back</a>';
    die("Password must contain at least one letter");
}
if ( ! preg_match("/[!@#$%^&*()_+.]/", $_POST["password"])) {
    echo '<a href="signup.php">Go Back</a>';
    die("Password must contain at least one special character");
}
if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    echo '<a href="signup.php">Go Back</a>';
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    echo '<a href="signup.php">Go Back</a>';
    die("Passwords must match");
    
}

if (empty($_POST["degree"])) {
    echo '<a href="signup.php">Go Back</a>';
    die("Degree is required");
    
}
if (empty($_POST["year"])) {
    echo '<a href="signup.php">Go Back</a>';
    die("Year is required");
    
}
if (empty($_POST["studno"])) {
    echo '<a href="signup.php">Go Back</a>';
    die("Student Number is required");
    
}

$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$conn = require __DIR__ . "/database.php";

        $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $studno = $_POST['studno'];
        $degree = $_POST['degree'];
        $year = $_POST['year'];
        $existingStudno = $_POST["studno"];
        
$checkQuery = "SELECT COUNT(*) as count FROM voters WHERE studno = ?";
$stmtCheck = $conn->prepare($checkQuery);
$stmtCheck->bind_param("s", $existingStudno);
$stmtCheck->execute();
$resultCheck = $stmtCheck->get_result();
$rowCheck = $resultCheck->fetch_assoc();
$count = $rowCheck['count'];

if ($count > 0) {
    echo '<a href="signup.php">Go Back</a>';
    die("Student Number already exists");
}
//generate voters id
$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$voter = substr(str_shuffle($set), 0, 15);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                 
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'plm.harivote@gmail.com';                     //SMTP username
    $mail->Password   = 'pbzngrvmvpreadnv';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'PLM Harivote');
    $mail->addAddress($_POST["lastname"]);   //Add a recipient
    $mail->isHTML(true);

    
    $regmessage= "Greetings, ". $firstname . "! The code below is your assigned Voter's ID. Please utilize on vote tab when about to vote.\n\n\n" . $voter;

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'PLM E-Voting';
    $mail->Body    = $regmessage;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


$sql = "INSERT INTO voters (voters_id, password, firstname, lastname, studno, degree, year) VALUES ('$voter', '$password', '$firstname', '$lastname', '$studno', '$degree', '$year')";
        
$stmt = $conn->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}


                  
if ($stmt->execute()) {

    header("Location: signup-success.php");
    exit;
    
} else {
    
    if ($conn->errno === 1062) {
        die("email already taken");
    } else {
        die($conn->error . " " . $conn->errno);
    }
}