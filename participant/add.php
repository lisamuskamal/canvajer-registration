<?php
require_once '../conn/config.php';
include('../layouts/header.php'); 
include('../layouts/menu.php'); 

$successMessage = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : ''; 
unset($_SESSION["success_message"]);
$errorMessage = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : ''; 
unset($_SESSION["error_message"]);

?>

<div class="main-content">
    <div class="container">
        <?php 
        if($successMessage){
        ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php } ?>

        <form action="<?php echo WEB_ROOT; ?>/controllers/participantController.php?cmd=add-participant" method="post">
        <h3>Add New Participant</h3><br>
            
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="form-group">
                        <label for="name " class="bold" >Full Name:<span class="requiredColor">*</span></label>
                        <input name="fullname"  type="text"  name="name" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="form-group">
                        <label for="name " class="bold" >Email:<span class="requiredColor">*</span></label>
                        <input name="email" type="email"  name="name" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="ic" class="bold">Ic Number<span class="requiredColor">*</span></label>
                        <input name="ic" type="number" id="ic" class="form-control" required="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="pnumber" class="bold">Phone<span class="requiredColor">*</span></label>
                        <input name="pnumber" type="number" id="pnumber" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="age" class="bold">Age<span class="requiredColor">*</span></label>
                        <input name="age" type="number" class="form-control" required="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="gender" class="bold">Gender<span class="requiredColor">*</span></label>
                        <select name="gender" class="form-control" id="gender" required >
                            <option value="">-- Select Gender --</option>
                            <option >Male</option required>
                            <option >Female</option required>
                        </select>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>  
</div>  


<?php include('../layouts/footer.php'); ?>

