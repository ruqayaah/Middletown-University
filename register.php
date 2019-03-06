<?php
session_start();
require_once("connect.php");

function test_input($data) {
  $trim = trim($data);
  $stripped = stripslashes($trim);
  $data = htmlspecialchars($stripped);
  return $data;
}

$firstname = test_input($_POST['txtFirstname']);
$lastname = test_input($_POST['txtLastname']);
$email = test_input($_POST['txtEmail']);
$mobile = test_input($_POST['txtMobileNumber']);
$faculty = test_input($_POST['txtFaculty']);
$course = test_input($_POST['txtCourse']);
$username = test_input($_POST['txtUsername']);
$password = test_input($_POST['txtPassword']);
$confirm_password = test_input($_POST['txtConfirmPassword']);

if (empty($firstname) || empty($lastname) || empty($email) || empty($mobile) || empty($faculty) || empty($course)
    || empty($username) || empty($password) || empty($confirm_password)){
    $_SESSION['err'] = "All fields are required!";
    header("Location:new_student_register.php");}

     else if (!preg_match("/^[a-zA-Z ]*$/", $firstname)){
  $_SESSION['errFname'] = 'Only letters and spaces are valid';
  header("Location:new_student_register.php");}

   else if (!preg_match("/^[a-zA-Z ]*$/", $lastname)){
  $_SESSION['errLname'] = 'Only letters and spaces are valid';
  header("Location:new_student_register.php");}

    else if (!(preg_match("/^([A-Za-z0-9_\.\-])+\@([A-Za-z])+\.([A-Za-z]{2,3})$/", $email))){
  $_SESSION['errEmail'] = 'Invalid email';
  header("Location:new_student_register.php");}

    else if (!(preg_match("/^[0-9]+$/", $mobile))){
  $_SESSION['errNum'] = 'Only numbers are allowed';
  header("Location:new_student_register.php");}

    else if (!preg_match("/^[a-zA-Z ]*$/", $faculty)){
  $_SESSION['errFac'] = 'Only letters and spaces are valid';
  header("Location:new_student_register.php");}

    else if (!preg_match("/^[a-zA-Z ]*$/", $course)){
  $_SESSION['errCourse'] = 'Only letters and spaces are valid';
  header("Location:new_student_register.php");}

    else if (!($password == $confirm_password)){
  $_SESSION['errPass'] = 'Passwords do not match';
  header("Location:new_student_register.php");}

else {
    $userID = "P_" . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
    $new_pass = crypt($password, "love");

    $query = "INSERT INTO stud_details (userID, Firstname, Lastname, Email, Mobile, Faculty, Course, Username, Password)
    VALUES ('$userID','$firstname','$lastname','$email','$mobile','$faculty','$course','$username','$new_pass')";

    $sql = mysqli_query($con, $query);

    if ($sql) {
        $_SESSION['noErr'] = "Registration was successfull!";
        header("Location: success.php");
    } else {
        $_SESSION['errPresent'] = "Registration was not successfull";
        header("Location: ../new_student_register.php");
    }
}

?>