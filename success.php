<?php
session_start();
$err = @$_SESSION['noErr'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Successful</title>

    <link rel="stylesheet" href="css/bootstrap.css" media="screen" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 success">
                        <img src="img/Students.png" class="success2 mt-5">
                    </div>
                    <div class="col-md-12 myh2">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8 regsuccess"><?php echo $err; ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <h1 class="text-center">
                <a href="index.php" class="future text-decoration-none text-danger text-warning:hover font-weight-bolder">Back to home</a>             </h1>
                </h1>
            </div>
        </div>
    <div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<?php
unset($_SESSION['noErr']);
?>
</html>