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
                             <label for="Name" class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Firstname:</label>
                                <input type="text" class="form-control" name="txtFirstname">
                            </div>

                            <span class="text-danger"><?php echo $lname; ?></span>
                            <div class="form-group">
                             <label for="Name" class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Lastname:</label>
                                <input type="text" class="form-control" name="txtLastname">
                            </div>

                            <!-- <span class="text-danger"><?php echo $lname; ?></span>
                            <div class="form-group">
                             <label for="Sex" class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Lastname</label>
                                <input type="radio" class="form-control" name="txtLastname" placeholder="Lastname" >
                            </div> -->
                            <div class="radio radio-inline">
                                <label ><input type="radio" name="optradio">Male</label>
                            </div>
                            <div class="radio radio-inline">
                                <label><input type="radio" name="optradio">Female</label>
                            </div>

                            <span class="text-danger"><?php echo $mail; ?></span>
                             <label for="Email" class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Email:</label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="txtEmail">
                            </div>

                            <span class="text-danger"><?php echo $num; ?></span>
                             <label for="Mobile" class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Mobile Number:</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="txtMobileNumber">
                            </div>

                            <span class="text-danger"><?php echo $fac ; ?></span>
                            <div class="form-group">
                                <label for="Faculty" id="sellist" class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Faculty:</label>
                                <select class="form-control" name="txtFaculty" placeholder="Faculty" id="sellist">
                                    <option value=""></option>
                                    <option value="">agriculture & Wildlife management</option>
                                    <option value="">Arts & humanities</option>
                                    <option value="">Education</option>
                                    <option value="">law & order</option>
                                    <option value="">Medicine</option>
                                    <option value="">Science</option>
                                    <option value="">Technology</option>
                                    <option value="">The social sciences</option>
                                    <option value="">Veterinary medicine</option>
                                </select>
                            </div>

                            <span class="text-danger"><?php echo $course ; ?></span>
                            <div class="form-group">
                                <label for="Course" id="sellist2" class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Courses:</label>
                                <input type="text" class="form-control" name="txtCourse">
                            </div>

                            <div class="form-group">
                                <label for="Username" class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Username:</label>
                                <input type="text" class="form-control" name="txtUsername">
                            </div>

                            <div class="form-group">
                                <label for="Password" class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Password:</label>
                                <input type="password" class="form-control" name="txtPassword">
                            </div>

                            <span class="text-danger"><?php echo $conf; ?></span>
                            <div class="form-group">
                                <label for="Confirm-Password" class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Re-enter Password:</label>
                                <input type="password" class="form-control" name="txtConfirmPassword">
                            </div>

                            <span class="text-danger"></span>
                            <div class="form-group">
                            <input type="file" id="myFile"><small><span>Upload Passport</span> Passport must not be > 2kb in size and of JPEG format</small>
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