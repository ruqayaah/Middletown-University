<?php
session_start();
require_once('connect.php');

function test_input($data) {
  $trim = trim($data);
  $strip = stripslashes($trim);
  $final = htmlspecialchars($strip);
  return $final;
}

$username = test_input($_POST['myUsername']);
$password = test_input($_POST['myPassword']);

if (empty($username) || empty($password)) {
    $_SESSION['errMsg'] = "Enter Username and Password";
    header("Location:login.php");
    echo 'love';
}
else {
    echo 'hatred';
    $new_pass = crypt($password, "love");

    $check= mysqli_query($con, "SELECT * FROM stud_details WHERE Username = '$username' || Email = '$email'");
    $details = mysqli_fetch_assoc($check);

    if($details){
        if ($details['Password'] == $new_pass) {
            header('Location:dashboard.php');
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