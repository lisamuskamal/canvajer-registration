<?php 

require_once 'conn/config.php';

$errorMessage = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : ''; 
session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Canva Jer</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

  <body class="text-center">
    
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6">
            <main class="form-signin p-3">
                <img width= 100% src="assets/side_image.png" alt="side_image" >
            </main>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-4">
            <main class="form-signin p-3">
                <h1 class="h3 mb-3 fw-normal">Welcome to CanvaJer</h1>
                <a href="<?php echo WEB_ROOT; ?>/home/login.php"><button class="w-100 btn btn-lg btn-primary" >Login</button></a><br><br>
                <a href="<?php echo WEB_ROOT; ?>/home/registration.php"><button class="w-100 btn btn-lg btn-primary" >Registration</button></a>
            </main>
        </div>
    </div><br><br>

  </body>
</html>
