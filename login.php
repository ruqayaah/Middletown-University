<?php
session_start();
$err = @$_SESSION['errMsg'];
$pass = @$_SESSION['errPassword'];
$void = @$_SESSION['void'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Middletown University | Student Login</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <link rel="stylesheet" href="css/dashboard.css" type="text/css" />
</head>
<body>
<div class="container mt-5 bg-warning">
      <div class="row">
        <div class="col-md-3"><img class="" src="img/UofCCoat.png" /></div>
        <div class="col-md-6 header motto">
              <h5 class="header-content">Propagating Virtue and Excellence since Forever...</h5>
        </div>
        <div class="col-md-3"></div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 jumbotron">
          <div class="text-center">
          <h3 class="text-danger font-weight-bold">Login</h3>
          </div>
          <div>
            <form action="Loogin.php" method="POST">
              <span class="text-danger"><?php echo $err; ?></span>
              <span class="text-danger"><?php echo $void; ?></span>
              <div class="form-group">
                <label class="mt-3" for="exampleInputEmail1">Enter Email or Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="myUsername"/>
                </div>
              <span class="text-danger"><?php echo $pass; ?></span>
              <div class="form-group">
                <label class="mt-3" for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="myPassword"/>
                <small id="passwordHelp" class="form-text text-muted">Do not share your password with other people.</small >
              </div>
              <button type="submit" class="btn btn-danger mt-3">Login</button>
            </form>
          </div>
          <h6>
            Forgot password? Click <span><a>Here</a></span>
          </h6>
          <h6>Don't have an account? <a href="new_student_register.php" class="text-danger font-weight-bold">Sign up</a></h6>
        </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>


</body>
<?php
unset($_SESSION['errMsg']);
unset($_SESSION['errPassword']);
unset($_SESSION['void']);
?>



</html>