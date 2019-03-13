    <?php
//     echo $_SERVER['PHP_SELF'];
// echo "<br>";
// // RETURNS THE IP ADDRESS OF THE HOST SERVER
// // $_SERVER['SERVER_ADD'];
// echo "<br>";
// // RETURNS THE NAME OF THE HOST SERVER
// $_SERVER['SERVER_NAME'];
// echo "<br>";
// // RETURNS THE
// // $_SERVER['SERVER_HOST'];
// echo "<br>";
// // RETURNS THE IP ADDRESS FROM WHERE THE USER IS VIEWING THE CURRENT PAGE
// $_SERVER['REMOTE_ADDR'];
// echo "<br>";
// // RETURNS THE HOST FROM WHERE THE USER IS VIEWING THE CURRENT PAGE
// // $_SERVER['REMOTE_HOST'];
// echo "<br>";
// // RETURNS THE PORT BEING USED BY THE USER'S MACHINE TO COMMUNICATE WITH THE WEB SERVER
// $_SERVER['REMOTE_PORT'];
// echo "<br>";
// // RETURNS THE BROWSER
// $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
    session_start();
    $err = @$_SESSION['err'];
    $fname = @$_SESSION['errNames'];
    $mail = @$_SESSION['errEmails'];
    $num = @$_SESSION['errMobiles'];
    $conf = @$_SESSION['errPass'];
    $size1 = @$_SESSION['errSize1'];
    $type1 = @$_SESSION['errType1'];
    $size2 = @$_SESSION['errSize2'];
    $type2 = @$_SESSION['errType2'];
    $size3 = @$_SESSION['errSize3'];
    $type3 = @$_SESSION['errType3'];
    $size4 = @$_SESSION['errSize4'];
    $type4 = @$_SESSION['errType4'];
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
        <link rel="stylesheet" href="css/dashboard.css" type="text/css" />
        <link rel="stylesheet" href="css/custom.css" type="text/css" />
    </head>

    <body>
        <div class="container-fluid">
            <div class="row divbg">
                <div class="col-sm-4 col-md-2">
                    <img class="ml-3" src="img/UofCCoat.png" />
                </div>
                <div class="col-sm-8 col-md-4">
                    <p class="font-weight-bold text"><span class="name">MIDDLETOWN</span><br><span class="university">UNIVERSITY</span></p>
                </div>
                <div class="col-sm-12 col-md-6 header">
                    <nav class="navbar header-content">
                        <ul class="list-unstyled">
                            <li class="list-inline-item font-weight-bold">
                                <a href="before_signup.php" class="future text-decoration-none text-danger text-warning:hover">Future Students</a>
                            </li>
                            <li class="list-inline-item font-weight-bold">
                                   <a href="login.php" class="future text-decoration-none text-danger  text-warning:hover">Current Students</a>
                            </li>
                            <li class="list-inline-item font-weight-bold">
                                   <a href="#" class="future text-decoration-none text-danger text-warning:hover">Alumni and Donors</a>
                            </li>
                            <li class="list-inline-item font-weight-bold">
                                   <a href="#" class="future text-decoration-none text-danger text-warning:hover">Research</a>
                            </li>
                            <li class="list-inline-item font-weight-bold">
                                   <a href="#" class="future text-decoration-none text-danger text-warning:hover">Faculty & Staff</a>
                            </li>
                            <li class="list-inline-item font-weight-bold">
                                   <a href="#" class="future text-decoration-none text-danger text-warning:hover">About MU</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 px-4 py-4">
                    <div class="row mt-3">
                        <div class="col-sm-1 col-md-2"></div>
                        <div class="col-sm-10 col-md-8">
                            <div class="row">
                                <div id="form1-header" class="col-4 text-dark font-weight-bold centralize formHeader blue-border">
                                    Personal Information</div>
                                <div id="form2-header" class="col-4 text-dark font-weight-bold centralize formHeader">
                                    Parents and Next-of-Kin</div>
                                <div id="form3-header" class="col-4 text-dark font-weight-bold centralize formHeader">
                                    Referees</div>
                            </div>
                            <span class="text-danger"><?php echo $err; ?></span>
                            <span class="text-danger"><?php echo $notSucc; ?></span>
                            <form action="" method="post" class="w-100">

                            <div id="form1">
                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                    <label for="Name"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Firstname:</label>
                                    <input type="text" class="form-control" name="txtFirstname" id="firstName">
                                    <span class="text-danger errorText" id="errorFirstName"></span>
                                </div>

                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                    <label for="Name"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Lastname:</label>
                                    <input type="text" class="form-control" name="lastName">
                                    <span class="text-danger errorText" id="errorLastName"></span>

                                </div>

                                <div class="form-group">
                                    <label for="gender"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Gender:</label>
                                    <input type="radio" class="list-inline-item font-weight-bold ml-5 gender" name="gender" value="male">Male
                                    <input type="radio" class="list-inline-item font-weight-bold ml-5 gender" name="gender" value="female">Female
                                    <span class="text-danger errorText" id="errorGender"></span>

                                </div>

                                <div class="form-group">
                                    <label for="dob"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Birth
                                        date:</label>
                                    <input type="date" class="form-control" name="dob" id="date">
                                    <span class="text-danger errorText" id="errorDob"></span>

                                </div>

                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                    <label for="origin"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Nationality:</label>
                                    <input type="text" class="form-control" name="origin" id="orgin">
                                    <span class="text-danger errorText" id="errorOrigin"></span>

                                </div>

                                <div class="form-group">
                                    <label for="address"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Permanent
                                        Address:</label>
                                    <input type="text" class="form-control" name="txtAddress" id="add">
                                    <span class="text-danger errorText" id="errorAdd"></span>

                                </div>

                                <span class="text-danger"><?php echo $mail; ?></span>
                                <div class="form-group">
                                    <label for="Email"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Email:</label>
                                    <input type="email" class="form-control" name="txtEmail" id="email">
                                    <span class="text-danger errorText" id="errorEmail"></span>

                                </div>

                                <span class="text-danger"><?php echo $num; ?></span>
                                <div class="form-group">
                                    <label for="Mobile"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Mobile
                                        Number:</label>
                                    <input type="text" class="form-control" name="txtMobileNumber" id="phoneNumber">
                                    <span class="text-danger errorText" id="errorMobileNumber"></span>

                                </div>

                                <div class="form-group">
                                    <label for="Faculty" id="sellist"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Faculty:</label>
                                    <select class="form-control" name="txtFaculty" placeholder="Faculty" id="faculty">
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
                                    <span class="text-danger errorText" id="errorFac"></span>

                                </div>

                                <div class="form-group">
                                    <label for="Course" id="sellist2"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Courses:</label>
                                    <input type="text" class="form-control" name="txtCourse" id="course">
                                    <span class="text-danger errorText" id="errorCourse"></span>

                                </div>

                                <div class="form-group">
                                    <label for="Username"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Username:</label>
                                    <input type="text" class="form-control" name="txtUsername" id="userName">
                                    <span class="text-danger errorText" id="errorUsername"></span>
                                </div>

                                <div class="form-group">
                                    <label for="Password"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Password:</label>
                                    <input type="password" class="form-control" name="txtPassword" id="password">
                                    <span class="text-danger errorText" id="errorPassword"></span>

                                </div>

                                <span class="text-danger"><?php echo $conf; ?></span>
                                <div class="form-group">
                                    <label for="Confirm-Password"
                                        class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Re-enter
                                        Password:</label>
                                    <input type="password" class="form-control" name="txtConfirmPassword" id="confirmPassword">
                                    <span class="text-danger errorText" id="errorConfirmPassword"></span>
                                </div>

                                <span class="text-danger"><?php echo $size1; ?></span>
                                <span class="text-danger"><?php echo $type1; ?></span>
                                <div class="form-group">
                                    <input type="file" id="myFile" name="Image"><small><span>Upload Passport</span> Passport must not be
                                        > 2kb in size and of JPEG format</small>
                                    <span class="text-danger errorText" id="errorImage"></span>
                                </div>

                                <div class="form-group centralize">
                                    <button id="next-button1" class="btn btn-danger"
                                        name="btnRegister">NEXT</button>
                                </div>
                            </div>
                            <div id="form2">
                                <div class="">
                                    <h4><span class="font-weight-bold">Parents' Details</span></h4>
                                </div>
                                <!-- Beginning of parents' information -->
                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                    <label for="Ffullame"
                                            class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Father's
                                            Fullname:</label>
                                        <input type="text" class="form-control" name="txtFfname">
                                </div>

                                    <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                    <label for="F_occupation"
                                            class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Father's
                                            Occupation:</label>
                                        <input type="text" class="form-control" name="txtF_occupation">
                                </div>

                                <div class="form-group">
                                        <label for="F_address"
                                            class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Father's
                                            Address:</label>
                                        <input type="text" class="form-control" name="txtF_address">
                                </div>

                                <span class="text-danger"><?php echo $num; ?></span>
                                <div class="form-group">
                                    <label for="F_mobile"
                                    class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Father's
                                    Mobile Number:</label>
                                    <input type="text" class="form-control" name="txtF_mobile">
                                </div>

                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                        <label for="Mfullame"
                                            class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Mother's
                                            Fullname:</label>
                                        <input type="text" class="form-control" name="txtMfname">
                                </div>

                                    <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                        <label for="M_occupation"
                                            class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Mother's
                                            Occupation:</label>
                                        <input type="text" class="form-control" name="txtM_occupation">
                                </div>

                                <div class="form-group">
                                    <label for="M_address"
                                    class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Mother's
                                    Address:</label>
                                    <input type="text" class="form-control" name="txtM_address">
                                </div>

                                <span class="text-danger"><?php echo $num; ?></span>
                                <div class="form-group">
                                    <label for="M_mobile"
                                    class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Mother's
                                    Mobile Number:</label>
                                    <input type="text" class="form-control" name="txtM_mobile">
                                </div>
                                <!-- End of Parents' information -->

                                <!-- Beginning of Next of Kin details -->
                                <div class="">
                                    <h4><span class="font-weight-bold">Next-of-Kin Details</span></h4>
                                </div>
                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                    <label for="Nokfullame"
                                    class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Fullname:</label>
                                    <input type="text" class="form-control" name="txtNokfullname">
                                </div>

                                <div class="form-group">
                                    <label for="Nok_relate"
                                    class="future font-weight-bold text-decoration-none text-danger">Relationship:</label>
                                    <select type="text" class="form-control" name="txtNok_relate">
                                        <option value=""></option>
                                        <option value="">Father</option>
                                        <option value="">Mother</option>
                                        <option value="">Husband</option>
                                        <option value="">Wife</option>
                                        <option value="">Brother</option>
                                        <option value="">Sister</option>
                                        <option value="">Aunt</option>
                                        <option value="">Uncle</option>
                                        <option value="">Step-Father</option>
                                        <option value="">Step-Mother</option>
                                        <option value="">Step-Brother</option>
                                        <option value="">Step-Sister</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Nokdob"
                                    class="future font-weight-bold text-decoration-none text-danger text-warning:hover">Birth
                                    date:</label>
                                    <input type="date" class="form-control" name="txtNokdob">
                                </div>

                                <div class="form-group">
                                    <label for="Nok_address"
                                    class="future font-weight-bold text-decoration-none text-danger">Address:</label>
                                    <input type="text" class="form-control" name="txtNok_address">
                                </div>

                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                        <label for="Nok_occupation"
                                            class="future font-weight-bold text-decoration-none text-danger">Occupation:</label>
                                        <input type="text" class="form-control" name="txtNok_occupation">
                                </div>

                                <span class="text-danger"><?php echo $mail; ?></span>
                                <div class="form-group">
                                        <label for="Nok_email"
                                            class="future font-weight-bold text-decoration-none text-danger">Email:</label>
                                        <input type="email" class="form-control" name="txtNok_email">
                                </div>

                                <span class="text-danger"><?php echo $num; ?></span>
                                <div class="form-group">
                                        <label for="Nok_mobile"
                                            class="future font-weight-bold text-decoration-none text-danger">Mobile
                                            Number:</label>
                                        <input type="text" class="form-control" name="txtNok_mobile">
                                </div>

                                <span class="text-danger"><?php echo $size2; ?></span>
                                <span class="text-danger"><?php echo $type2; ?></span>
                                <div class="form-group">
                                        <input type="file" id="nokFile" name="nokImage"><small><span>Upload Passport</span> Passport must
                                            not be > 2kb in size and of JPEG
                                            format</small>
                                </div>

                                <div class="buttons centralize">
                                        <div class="form-group mr-1">
                                            <button id="prev-button1" class="btn btn-danger">PREV</button>
                                        </div>
                                        <div class="form-group ml-1">
                                            <button id="next-button2" class="btn btn-danger">NEXT</button>
                                        </div>
                                </div>
                            </div>
                            <div id="form3">
                                <div class="">
                                        <h6><span class="font-weight-bold">Referee 1:</span></h6>
                                </div>

                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                        <label for="Ref1fullame"
                                            class="future font-weight-bold text-decoration-none text-danger">Fullname:</label>
                                        <input type="text" class="form-control" name="txtRef1fullname">
                                </div>

                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                        <label for="Ref1_occupation"
                                            class="future font-weight-bold text-decoration-none text-danger">Occupation:</label>
                                        <input type="text" class="form-control" name="txtRef1_occupation">
                                </div>

                                <div class="form-group">
                                        <label for="Work_address"
                                            class="future font-weight-bold text-decoration-none text-danger">Place of
                                            Work
                                            Address:</label>
                                        <input type="text" class="form-control" name="txtWork_address">
                                </div>

                                <span class="text-danger"><?php echo $mail; ?></span>
                                <div class="form-group">
                                        <label for="Ref1_email"
                                            class="future font-weight-bold text-decoration-none text-danger">Email:</label>
                                        <input type="email" class="form-control" name="txtRef1_email">
                                </div>

                                <span class="text-danger"><?php echo $num; ?></span>
                                <div class="form-group">
                                        <label for="Ref1_mobile"
                                            class="future font-weight-bold text-decoration-none text-danger">Mobile
                                            Number:</label>
                                        <input type="text" class="form-control" name="txtRef1_mobile">
                                </div>

                                <span class="text-danger"><?php echo $size3; ?></span>
                                <span class="text-danger"><?php echo $type3; ?></span>
                                <div class="form-group">
                                        <input type="file" id="ref1File" name="ref1Image"><small><span>Upload Passport</span> Passport
                                            must not be > 2kb in size and of JPEG
                                            format</small>
                                </div>
                                    <!-- End of Referee 1 details -->

                                    <!-- beginning of Referee 2 details -->
                                <div class="">
                                        <h6><span class="font-weight-bold">Referee 2:</span></h6>
                                </div>

                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                        <label for="Ref2fullame"
                                            class="future font-weight-bold text-decoration-none text-danger">Fullname:</label>
                                        <input type="text" class="form-control" name="txtRef2fullname">
                                </div>

                                <span class="text-danger"><?php echo $fname; ?></span>
                                <div class="form-group">
                                        <label for="Ref2_occupation"
                                            class="future font-weight-bold text-decoration-none text-danger">Occupation:</label>
                                        <input type="text" class="form-control" name="txtRef2_occupation">
                                </div>

                                <div class="form-group">
                                        <label for="Work2_address"
                                            class="future font-weight-bold text-decoration-none text-danger">Place of
                                            Work
                                            Address:</label>
                                        <input type="text" class="form-control" name="txtWork2_address">
                                </div>

                                <span class="text-danger"><?php echo $mail; ?></span>
                                <div class="form-group">
                                        <label for="Ref2_email"
                                            class="future font-weight-bold text-decoration-none text-danger">Email:</label>
                                        <input type="email" class="form-control" name="txtRef2_email">
                                </div>

                                <span class="text-danger"><?php echo $num; ?></span>
                                <div class="form-group">
                                        <label for="Ref2_mobile"
                                            class="future font-weight-bold text-decoration-none text-danger">Mobile
                                            Number:</label>
                                          <input type="text" class="form-control" name="txtRef2_mobile">
                                </div>

                                <span class="text-danger"><?php echo $size4; ?></span>
                                <span class="text-danger"><?php echo $type4; ?></span>
                                <div class="form-group">
                                        <input type="file" id="ref2File" name="ref2Image"><small><span>Upload Passport</span> Passport
                                            must not be > 2kb in size and of JPEG
                                            format</small>
                                </div>
                                        <!-- End of Referee 2 details-->
                                <div class="buttons centralize">
                                    <div class="form-group mr-1">
                                            <button id="prev-button2" class="btn btn-danger">PREV</button>
                                    </div>
                                    <div class="form-group ml-1">
                                            <button class="btn btn-danger" type="submit" id="submitBtn">REGISTER</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="col-sm-1 col-md-2"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
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
                <h3 class="header-content mb-4">&copy MU 2019</h3>
            </div>
        </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
        <!-- <script src="js/register.js"><script> -->
        <script src="js/register.js"></script>
    </body>
    <?php
    unset($_SESSION['err']);
    unset($_SESSION['errNames']);
    unset($_SESSION['errEmails']);
    unset($_SESSION['errMobiles']);
    unset($_SESSION['errPass']);
    unset($_SESSION['errSize1']);
    unset($_SESSION['errType1']);
    unset($_SESSION['errSize2']);
    unset($_SESSION['errType2']);
    unset($_SESSION['errSize3']);
    unset($_SESSION['errType3']);
    unset($_SESSION['errSize4']);
    unset($_SESSION['errType4']);
    unset($_SESSION['errPresent']);
    ?>

    </html>