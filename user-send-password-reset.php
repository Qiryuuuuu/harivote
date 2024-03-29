<?php

$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$mysqli = require __DIR__ ."/database.php";

$sql = "UPDATE voters 
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE lastname = ?";

$stmt = $mysqli -> prepare($sql);

$stmt -> bind_param ("sss", $token_hash, $expiry, $email);

$stmt -> execute();


if ($mysqli -> affected_rows){
    require __DIR__ ."/user-mailer.php";  
}



?>