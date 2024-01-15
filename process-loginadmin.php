<?php
  session_start();
  include 'includes/conn.php';

  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $query = $conn->query($sql);

    if($query->num_rows < 1){
      $_SESSION['error'] = 'Invalid login';
      header('location: loginadmin.php'); // Redirect back to the login page
      exit();
    }

    $row = $query->fetch_assoc();
    if(password_verify($password, $row['password'])){
      $_SESSION['admin'] = $row['id'];
      header('location: /votesystem/admin/home.php'); // Redirect to the admin home page
      exit();
    } else {
      $_SESSION['error'] = 'Invalid login';
      header('location: loginadmin.php'); // Redirect back to the login page
      exit();
    }
  } else {
    $_SESSION['error'] = 'Input admin credentials first';
    header('location: loginadmin.php'); // Redirect back to the login page
    exit();
  }
?>
