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
$gender= test_input($_POST['gender']);
$dob= test_input($_POST['dob']);
$origin= test_input($_POST['origin']);
$address= test_input($_POST['txtAddress']);
$email = test_input($_POST['txtEmail']);
$mobile = test_input($_POST['txtMobileNumber']);
$faculty = test_input($_POST['txtFaculty']);
$course = test_input($_POST['txtCourse']);
$username = test_input($_POST['txtUsername']);
$password = test_input($_POST['txtPassword']);
$confirm_password = test_input($_POST['txtConfirmPassword']);
// $image = test_input($_POST['Image']);
$ffaname= test_input($_POST['txtFfname']);
$f_occupation = test_input($_POST['txtF_occupation']);
$f_address = test_input($_POST['txtF_address']);
$f_mobile = test_input($_POST['txtF_mobile']);
$mfname = test_input($_POST['txtMfname']);
$m_occupation = test_input($_POST['txtM_occupation']);
$m_address = test_input($_POST['txtM_address']);
$m_mobile = test_input($_POST['txtM_mobile']);
$nokfull = test_input($_POST['txtNokfullname']);
$nokrel = test_input($_POST['txtNok_relate']);
$nokdob = test_input($_POST['txtNokdob']);
$nokadd = test_input($_POST['txtNok_address']);
$nokoccupation = test_input($_POST['txtNok_occupation']);
$nokemail = test_input($_POST['txtNok_email']);
$nokmobile = test_input($_POST['txtNok_mobile']);
// $nokimage = test_input($_POST['nokImage']);
$refname1 = test_input($_POST['txtRef1fullname']);
$ref_occupation1 = test_input($_POST['txtRef1_occupation']);
$workadd1 = test_input($_POST['txtWork_address']);
$refemail1 = test_input($_POST['txtRef1_email']);
$refmobile1 = test_input($_POST['txtRef1_mobile']);
// $refimage1 = test_input($_POST['ref1Image']);
$refname2 = test_input($_POST['txtRef2fullname']);
$ref_occupation2 = test_input($_POST['txtRef2_occupation']);
$workadd2 = test_input($_POST['txtWork2_address']);
$refemail2 = test_input($_POST['txtRef2_email']);
$refmobile2 = test_input($_POST['txtRef2_mobile']);
// $refimage2 = test_input($_POST['ref2Image']);

if (empty($firstname) || empty($lastname) || empty($gender) || empty($dob) || empty($origin) || empty($address) || empty($email) || empty($mobile) ||  empty($faculty) || empty($course) || empty($username) || empty($password) || empty($confirm_password) || empty($image) || empty($ffname)
    || empty($f_occupation) || empty($f_address) || empty($f_mobile) || empty($mfname) || empty($m_occupation) || empty($m_address) || empty($m_mobile)
    || empty($nokfull) || empty($nokrel) || empty($nokdob) || empty($nokadd) || empty($nokoccupation) || empty($nokemail) || empty($nokmobile) ||
    empty($nokimage) || empty($refname1) || empty($ref_occupation1) || empty($workadd1) || empty($refemail1) || empty($refmobile1) || empty($refimage1)
    || empty($refname2) || empty($ref_occupation2) || empty($workadd2) || empty($refemail2) || empty($refmobile2) || empty($refimage2))

    {$_SESSION['err'] = "All fields are required!";
      header("Location:new_student_register.php");
    } else if (!empty($firstname) && !empty($lastname) && !empty($gender) && !empty($dob) && !empty($origin) && !empty($address) && !empty($email) && !empty($mobile) && !empty($faculty) && !empty($course) && !empty($username) && !empty($password) && !empty($confirm_password) && !empty($image) && !empty($ffname)
    && !empty($f_occupation) && !empty($f_address) && !empty($f_mobile) && !empty($mfname) && !empty($m_occupation) && !empty($m_address) && !empty($m_mobile)
    && !empty($nokfull) && !empty($nokrel) && !empty($nokdob) && !empty($nokadd) && !empty($nokoccupation) && !empty($nokemail) && !empty($nokmobile) && !empty($nokimage) && !empty($refname1) && !empty($ref_occupation1) && !empty($workadd1) && !empty($refemail1) && !empty($refmobile1) && !empty($refimage1)
    && !empty($refname2) && !empty($ref_occupation2) && !empty($workadd2) && !empty($refemail2) && !empty($refmobile2) && !empty($refimage2))

    {$names = array('$firstname','$lastname','$origin','$ffname','$f_occupation','$mfname','$m_occupation','$nokfull','$nokoccupation','$refname1',
      '$ref_occupation1','$refname2','$ref_occupation2');
              if(empty($names)) {
                $_SESSION['errNames'] = 'Please fill this field';
              } else {
                      foreach ($names as $name) {
                        if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
                          $_SESSION['errNames'] = 'Only letters and spaces are valid inputs';
                          header("Location:new_student_register.php");
               }
              }
            }
      $emails = array('$email','$nokemail','$refemail1','$refemail2');
      if(empty($emails)) {
                $_SESSION['errEmails'] = 'Please fill this field';
              } else {
                      foreach ($emails as $mails) {
                        if(!preg_match("/^([A-Za-z0-9_\.\-])+\@([A-Za-z])+\.([A-Za-z]{2,4})$/", $mails)) {
                          $_SESSION['errEmails'] = 'Invalid email';
                          header("Location:new_student_register.php");
               }
              }
            }

      $mobiles = array('$mobile','$f_mobile','$m_mobile','$nokmobile','$refmobile1','$refmobile2');
      if (empty($mobiles)) {
        $_SESSION['errMobiles'] = 'Please fill this field';
      } else {
        foreach ($mobiles as $myMobile) {
          if(!preg_match("/^[0-9]+$/", $myMobile)) {
            $_SESSION['errMobiles'] = 'Only numbers are allowed';
            header("Location:new_student_register.php");
          }
        }
      }

      // $images = array('$image','$nokimage','$refimage1','$refimage2');
      // For first Image
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES['Image']['name']);
      $imageFileType1 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      // $imagesize =  getimagesize($_FILES['Image']['tmp-name']);
      if ($_FILES["Image"]["size"] > 2000000) {
        $_SESSION['errSize1'] = 'Upload an image smaller than 2MB';
        header("Location:new_student_register.php");
      }
      if ($imageFileType1 !="jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg") {
        $_SESSION['errType1'] ='Upload a file of JPEG, JPG OR PNG Formats';
        header("Location:new_student_register.php");
      }

      // For second image
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES['nokImage']['name']);
      $imageFileType2 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      // $imagesize =  getimagesize($_FILES['nokImage']['tmp-name']);
      if ($_FILES["nokImage"]["size"] > 2000000) {
        $_SESSION['errSize2'] = 'Upload an image smaller than 2MB';
        header("Location:new_student_register.php");
      }
      if ($imageFileType2 !="jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg") {
        $_SESSION['errType2'] ='Upload a file of either JPEG, JPG or PNG Formats';
        header("Location:new_student_register.php");
      }

      // For third Image
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES['ref1Image']['name']);
      $imageFileType3 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      if($_FILES['ref1Image']['name'] > 2000000) {
        $_SESSION['errSize3'] = 'Upload an image smaller than 2MB';
        header('Location:new_student_register.php');
      }
      if ($imageFileType3 != 'jpg' && $imageFileType3 != 'jpeg' && $imageFileType3 != 'png') {
      $_SESSION['errType3'] = 'Upload a file of either JPEG, JPG or PNG Formats';
        header("Location:new_student_register.php");
      }

      // For fourth image
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES['ref2Image']['name']);
      $imageFileType3 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      if($_FILES['ref2Image']['name'] > 2000000) {
        $_SESSION['errSize4'] = 'Upload an image smaller than 2MB';
        header('Location:new_student_register.php');
      }
      if ($imageFileType4 != 'jpg' && $imageFileType4 != 'jpeg' && $imageFileType4 != 'png') {
      $_SESSION['errType4'] = 'Upload a file of either JPEG, JPG or PNG Formats';
        header("Location:new_student_register.php");
      }

    }

  

  // if (!($password == $confirm_password))
  //     {$_SESSION['errPass'] = 'Passwords do not match';
  //     header("Location:new_student_register.php");
  //     }

//   else if (!preg_match("/^[a-zA-Z ]*$/", $names))
//     {$_SESSION['errNames'] = 'Only letters and spaces are valid inputs';
//     header("Location:new_student_register.php");
//     }

//   else if (!preg_match("/^([A-Za-z0-9_\.\-])+\@([A-Za-z])+\.([A-Za-z]{2,4})$/", $emails))
//     {$_SESSION['errEmails'] = 'Invalid email';
//     header("Location:new_student_register.php");
//     }

//   else if (!preg_match("/^[0-9]+$/", $mobiles))
//     {$_SESSION['errMobiles'] = 'Only numbers are allowed';
//     header("Location:new_student_register.php");
//     }


//   else if()
//   {$_SESSION['errImagetype'] = 'Image should be in JPEG, JPG or PNG Format';
//   header("Location:new_student_register.php");
//   }

//   else if ()
//   {$_SESSION['errImagesizee'] = 'Image should not be greater than 2KB in size';
//   header("Location:new_student_register.php");
//   }
// else {
//     $userID = "P_" . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
//     $new_pass = crypt($password, "love");

//     $query = "INSERT INTO stud_details (userID, Firstname, Lastname, Gender, DOB, Nationality, Address, Email, Mobile, Faculty, Course, Username,
//               Password, Image, Fatherfullname, Fatheroccupation, Fatheraddress, Fathermobile, Motherfullname, Motheroccupation, Motheraddress, Mothermobile, Nokfullname, Relationship, Nokdob, Nokaddress, Nokoccupation, Nokemail, Nokmobile, Nokimage, Ref1fullname, Ref1occupation, Ref1address, Ref1email, Ref1mobile, Ref1image, Ref2fullname, Ref2occupation, Ref2address, Ref2email, Ref2mobile, Ref2image)
//               VALUES ('$userID','$firstname','$lastname','$gender','$dob','$origin','$address','$email','$mobile','$faculty','$course','$username','$new_pass','$image','$ffname','$f_occupation','$f_address','$f_mobile','$mfname','$m_occupation','$m_address','$m_mobile','$nokfull','$nokrel','$nokdob','$nokadd','$nokoccupation','$nokemail','$nokmobile','$nokimage','$refname1','$ref_occupation1','$workadd1','$refemail1','$refmobile1','$refimage1','$refname2','$ref_occupation2','$workadd2','$refemail2','$refmobile2','$refimage2')";

//     $sql = mysqli_query($con, $query);

//     if ($sql) {
//         $_SESSION['noErr'] = "Registration was successfull!";
//         header("Location: success.php");
//     } else {
//         $_SESSION['errPresent'] = "Registration was not successfull";
//         header("Location: ../new_student_register.php");
//     }
// }

?>