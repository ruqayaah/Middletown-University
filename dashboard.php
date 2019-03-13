<?php
session_start();
// $err = @$_SESSION['err'];
// $fname = @$_SESSION['errFname'];
// $lname = @$_SESSION['errLname'];
// $mail = @$_SESSION['errEmail'];
// $num = @$_SESSION['errNum'];
// $fac = @$_SESSION['errFac'];
// $course = @$_SESSION['errCourse'];
// $conf = @$_SESSION['errPass'];
// $notSucc = @$_SESSION['errPresent'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Middletown University | <?php echo '$firstname $lastname'. '\'s Dashboard'?></title>
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
                        <li class="list-inline-item font-weight-bold"><a href="before_signup.php" class="future text-decoration-none text-danger text-warning:hover" >Courses</a></li>
                        <li class="list-inline-item font-weight-bold"><a href="login.php" class="future text-decoration-none text-danger  text-warning:hover" >Payment Status</a></li>
                        <li class="list-inline-item font-weight-bold"><a href="#" class="future text-decoration-none text-danger text-warning:hover" >Awards</a></li>
                        <li class="list-inline-item font-weight-bold"><a href="#" class="future text-decoration-none text-danger text-warning:hover" >Extra-Curricular Actvities</a></li>
                        <li class="list-inline-item font-weight-bold"><a href="#" class="future text-decoration-none text-danger text-warning:hover" >My MU Records</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row w-100">
           <div class="col-md-3 col-md-block jumbotron bg-transparent border-dark">
                <div class="btn text-dark font-weight-bold">LOGOUT</div>
           </div>
           <div class="col-md-6">
                <div class="row header">
                    <div class="col-3 border-danger">
                        <img src="img/UofCCoat.png" alt="">
                    </div>
                    <div class="col-3 border-danger"></div>
                    <div class="col-6">
                        <div class="m-3">
                            <button class="btn border-dark bg-success text-white btn:hover btn.focus">Update Profile Picture
                            </button>
                        </div>
                        <div class="m-3 header-content">
                            <button class="btn border-dark bg-success text-white btn:hover btn.focus">Change Password
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row"></div>
           </div>
           <div class="col-md-3 col-md-block jumbotron bg-transparent border-dark"></div>
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
</html>