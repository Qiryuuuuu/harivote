<?php

$token = $_POST["token"];

$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM voters
        WHERE reset_token_hash = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$voters = $result->fetch_assoc();

if ($voters === null) {
    die("token not found");
}

if (strtotime($voters["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "UPDATE voters
        SET password = ?, 
            reset_token_hash = NULL,
            reset_token_expires_at = NULL
        WHERE id = ?";

$stmt =$mysqli -> prepare ($sql);

$stmt -> bind_param ("ss", $password_hash, $voters["id"]);

$stmt -> execute();

if ($stmt->affected_rows > 0) {
    header('Location: user-resetPasswordSuccess.php');
} else {
    echo "Failed to update password.";
}
?>

