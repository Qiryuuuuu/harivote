<?php
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__  . "/database.php";

$sql = "INSERT INTO admin(firstname, lastname, username, email, password) VALUES(?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();
if (! $stmt->prepare($sql)){
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssss", 
                    $_POST["firstname"],
                    $_POST["lastname"],
                    $_POST["username"],
                    $_POST["email"],
                    $password_hash
);



if ($stmt->execute()){
    header('Location: adminSignupSuccess.php');
} else {
    if($mysqli->errno === 1062){
        die("email already taken");
    }else{
        die($mysqli->error . "" . $mysqli->error);
    }
}

?>