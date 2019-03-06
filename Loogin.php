<?php
session_start();
require_once('connect.php');

function test_input($data) {
  $trim = trim($data);
  $strip = stripslashes($trim);
  $final = htmlspecialchars($strip);
  return $final;
}

$username = test_input($_POST['txtUsername']);
$password = test_input($_POST['txtPassword']);

if (empty($username) || empty($password)) {
    $_SESSION['errMsg'] = "Enter Username and Password";
    header("Location:login.php");
}
else {
    $new_pass = crypt($password, "love");

    $sql = mysqli_query($con, "SELECT * FROM stud_details WHERE Username = '$username' ||Email = '$email'");
    $details = mysqli_fetch_assoc($sql);

    if($details){
        if ($details['Password'] == $new_pass) {
            header('Location:dashboard.php');
            $_SESSION['user'] = $details;
        }else {
        $_SESSION['errPassword'] = 'Your Password is incorrect';
        header('Location:login.php');
        }
    }
    else {
        $_SESSION['void'] = "Please Enter a correct username";
        header('Location:login.php');
    }
}
?>