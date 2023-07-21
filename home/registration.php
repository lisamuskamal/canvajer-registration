
<?php 
require_once '../conn/config.php';
require_once '../layouts/header-login-registration.php';

$successMessage = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : ''; 
unset($_SESSION["success_message"]);

?>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <?php 
                if($successMessage){
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $successMessage; ?>
                    </div>
                <?php } ?>
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
                                <h5 class="card-title fw-bold mt-3">Registration</h5>
                                <hr style="width: 50px;">
                                <form action="<?php echo WEB_ROOT; ?>/controllers/participantController.php?cmd=add-participant-home" method="post">
                                    <div class="mb-3">
                                        <label for="full_name" class="form-label">Full Name</label>
                                        <input name="fullname" type="text" style="text-transform:uppercase"class="form-control form-control-sm" id="full_name" autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input name="email" type="email" class="form-control form-control-sm" id="email" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>

                                    <div class="row g-4 mb-3 align-items-center">
                                        <div class="col-md-5">
                                            <label for="ic" class="form-label">IC Number</label>
                                            <input name="ic" type="number" id="ic" class="form-control form-control-sm" aria-labelledby="passwordHelpInline">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="pnumber" class="form-label">Phone Number</label>
                                            <input name="pnumber" type="number" id="pnumber" class="form-control form-control-sm" aria-labelledby="passwordHelpInline">
                                        </div>
                                    </div>

                                    <div class="row g-4 mb-3 align-items-center">
                                        <div class="col-md-5">
                                            <label for="age" class="form-label">Age</label>
                                            <input name="age" type="number" id="age" class="form-control form-control-sm" aria-labelledby="passwordHelpInline">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="gender" class="form-label">Gender</label>
                                            <select name="gender" class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="gender">
                                                <option selected>Select gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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