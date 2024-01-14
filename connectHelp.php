<?php
    $help_name = $_POST['help_name'];
    $help_email = $_POST['help_email'];
    $help_subject = $_POST['help_subject'];
    $help_description = $_POST['help_description'];
    
    $conn = new mysqli('localhost','root','','votesystem');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into filereport(help_name, help_email, help_subject, help_description)
        values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $help_name, $help_email, $help_subject, $help_description);
       
    }
    if ($stmt->execute()) {

        header("Location: help-success.php");
        exit;}
?>