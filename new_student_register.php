<?php
session_start();
$err = @$_SESSION['err'];
$fname = @$_SESSION['errFname'];
$lname = @$_SESSION['errLname'];
$mail = @$_SESSION['errEmail'];
$num = @$_SESSION['errNum'];
$fac = @$_SESSION['errFac'];
$course = @$_SESSION['errCourse'];
$conf = @$_SESSION['errPass'];
$notSucc = @$_SESSION['errPresent'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Middletown University | New Student Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/dashboard.css" type="text/css"/>
    <link rel="stylesheet" href="css/custom.css" type="text/css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row divbg">
            <div class="col-sm-4 col-md-2"><img class="ml-3" src="img/UofCCoat.png" /></div>
            <div class="col-sm-8 col-md-4">
                <p class="font-weight-bold text"><span class="name">MIDDLETOWN</span><br><span class="university">UNIVERSITY</span></p>
            </div>
            <div class="col-sm-12 col-md-6 header">
                <nav class="navbar header-content">
                    <ul class="list-unstyled">
                        <li class="list-inline-item font-weight-bold"><a href="before_signup.php" class="future text-decoration-none text-danger text-warning:hover" >Future Students</a></li>
                        <li class="list-inline-item font-weight-bold"><a href="login.php" class="future text-decoration-none text-danger  text-warning:hover" >Current Students</a></li>
                        <li class="list-inline-item font-weight-bold"><a href="#" class="future text-decoration-none text-danger text-warning:hover" >Alumni and Donors</a></li>
                        <li class="list-inline-item font-weight-bold"><a href="#" class="future text-decoration-none text-danger text-warning:hover" >Research</a></li>
                        <li class="list-inline-item font-weight-bold"><a href="#" class="future text-decoration-none text-danger text-warning:hover" >Faculty & Staff</a></li>
                        <li class="list-inline-item font-weight-bold"><a href="#" class="future text-decoration-none text-danger text-warning:hover" >About MU</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 px-4 py-4">
                <div class="row mt-3">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <span class="text-danger"><?php echo $err; ?></span>
                        <span class="text-danger"><?php echo $notSucc; ?></span>
                        <form action="register.php" method="post" class="w-100">
                            <span class="text-danger"><?php echo $fname; ?></span>
                            <div class="form-group">
                                <input type="text" class="form-control" name="txtFirstname" placeholder="Firstname" >
                            </div>
                            <span class="text-danger"><?php echo $lname; ?></span>
                            <div class="form-group">
                                <input type="text" class="form-control" name="txtLastname" placeholder="Lastname" >
                            </div>
                            <div class="form-group">
                                <span class="text-danger"><?php echo $mail; ?></span>
                                <input type="email" class="form-control" name="txtEmail" placeholder="Email" >
                            </div>
                            <div class="form-group">
                                <span class="text-danger"><?php echo $num; ?></span>
                                <input type="number" class="form-control" name="txtMobileNumber" placeholder="Phone Number" >
                            </div>
                            <span class="text-danger"><?php echo $fac ; ?></span>
                            <div class="form-group">
                                <input type="text" class="form-control" name="txtFaculty" placeholder="Faculty" >
                            </div>
                            <span class="text-danger"><?php echo $course ; ?></span>
                            <div class="form-group">
                                <input type="text" class="form-control" name="txtCourse" placeholder="Course" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="txtUsername" placeholder="Username" >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="txtPassword" placeholder="Password" >
                            </div>
                            <div class="form-group">
                                <span class="text-danger"><?php echo $conf; ?></span>
                                <input type="password" class="form-control" name="txtConfirmPassword" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-danger" value="Register" name="btnRegister">
                                <a href="login.php" class="px-3 text-danger font-weight-bold">Sign In</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row footerbg text-white">

            <div class="col-md-4 blockquote">
                <address class="addd mr-5">
                    <span class="text-danger">MU</span><br>
                    2500 University Drive NE<br>
                    Middletown<br>
                    Moniya, Ibadan<br>
                    NIGERIA.
                </address>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 header">
                    <ul class="list-unstyled">
                        <li class="list-inline-item"><a href="#"><img class="imagesize" src="img/facebook.png"></a></li>
                        <li class="list-inline-item"><a href="#"><img class="imagesize" src="img/twitter.png"></a></li>
                        <li class="list-inline-item"><a href="#"><img class="imagesize" src="img/linkedin.png"></a></li>
                        <li class="list-inline-item"><a href="#"><img class="imagesize" src="img/instagram.png"></a></li>
                        <li class="list-inline-item"><a href="#"><img class="imagesize" src="img/youtube.jfif"></a></li>
                    </ul><br>
                    <h3 class="header-content mb-4">MU &copy 2019</h3>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<?php
unset($_SESSION['err']);
unset($_SESSION['errFname']);
unset($_SESSION['errLname']);
unset($_SESSION['errEmail']);
unset($_SESSION['errNum']);
unset($_SESSION['errFac']);
unset($_SESSION['errCourse']);
unset($_SESSION['errPass']);
unset($_SESSION['errPresent']);
?>
</html>