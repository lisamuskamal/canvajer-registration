<?php
include('../layouts/header.php'); 
include('../layouts/menu.php'); 
include ('../controllers/participantController.php');
$participant = getParticipantDetail();

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

        <form action="<?php echo WEB_ROOT; ?>/controllers/participantController.php?cmd=update-participant&ic=<?= $participant['part_ic'] ?>" method="post">
            <h3>Add New Participant</h3><br>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="form-group">
                        <label for="name " class="bold" >Full Name:<span class="requiredColor">*</span></label>
                        <input value="<?= $participant['part_fullname'] ?>" name="fullname"  type="text"  name="name" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="form-group">
                        <label for="name " class="bold" >Email:<span class="requiredColor">*</span></label>
                        <input value="<?= $participant['part_email'] ?>" name="email" type="email"  name="name" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="ic" class="bold">Ic Number<span class="requiredColor">*</span></label>
                        <input value="<?= $participant['part_ic'] ?>" name="ic" type="number" id="ic" class="form-control" required="" disabled>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="pnumber" class="bold">Phone<span class="requiredColor">*</span></label>
                        <input value="<?= $participant['part_phone'] ?>" name="pnumber" type="number" id="pnumber" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="age" class="bold">Age<span class="requiredColor">*</span></label>
                        <input value="<?= $participant['part_age'] ?>" name="age" type="number" class="form-control" required="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="gender" class="bold">Gender<span class="requiredColor">*</span></label>
                        <select name="gender" class="form-control" id="gender" required >
                            <option value="">-- Select Gender --</option>
                            <option value="Male"<?php if ($participant['part_gender'] == 'Male'){echo 'selected';}?>>Male</option required>
                            <option value="Female"<?php if ($participant['part_gender'] == 'Female'){echo 'selected';}?>>Female</option required>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3"></div>
                <div class="col-12 col-sm-9" style="text-align: right;">
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div><br>
        </form>
    </div>  
</div>  


<?php include('../layouts/footer.php'); ?>

