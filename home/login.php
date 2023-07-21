
<?php 
require_once '../conn/config.php';
require_once '../layouts/header-login-registration.php';
$errorMessage = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : ''; 
session_destroy();
?>



<body>
    <div class="container">
    <?php
    if($errorMessage){
    ?>
        <div class="alert alert-danger" role="alert">
        <?php echo $errorMessage; ?>
        </div>
    <?php } ?>
        <div class="row d-flex justify-content-center">
            <div class="col d-flex justify-content-center md-6" style="max-height: 100%">
                <div class="card mb-3" style="max-width: 70%;">
                    <div class="row g-0">
                        <div class="col-md-4" id="right_image">
                            <h1 class="mt-4 text-center" id="title">CanvaJer</h1>
                            <p class="mb-4 text-center text-white">Embrace Your Creativity</p>
                            <img src="../assets/side_image.png" class="img-fluid rounded-start" id="front-image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-3">Staff Login</h5>
                                <hr style="width: 50px;">
                                <form action="<?php echo WEB_ROOT; ?>/controllers/userController.php?cmd=login" method="post">
                                    <div class="mb-3">
                                        <label for="full_name" class="form-label">Username</label>
                                        <input name= "username" type="text" style="text-transform:uppercase"
                                            class="form-control form-control-sm" id="full_name" autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input name = "password" type="password" class="form-control form-control-sm" id="password" aria-describedby="emailHelp">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>