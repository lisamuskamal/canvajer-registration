<?php 
include('../layouts/header.php'); 
include('../layouts/menu.php'); 
include ('../controllers/participantController.php');
$participant = getParticipantDetail();
// dd($participants);
?>
<div class="main-content">
    <div class="container">
        <h3>Participant Details</h3></h3><br>
        <a href="<?php echo WEB_ROOT; ?>/participant/excel-report-detail.php?ic=<?php echo $participant['part_ic']?>"><button type="button" class="btn btn-success"><i class="bi bi-download"></i>&nbsp&nbspDownload</button><br><br><br></a>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="form-group">
                        <label for="name " class="bold" >Full Name:</label>
                        <input value="<?= $participant['part_fullname'] ?>" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="form-group">
                        <label for="name " class="bold" >Email:</label>
                        <input value="<?= $participant['part_email'] ?>" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="ic" class="bold">Ic Number:</label>
                        <input value="<?= $participant['part_ic'] ?>" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="pnumber" class="bold">Phone:</label>
                        <input value="<?= $participant['part_phone'] ?>" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="age" class="bold">Age:</label>
                        <input value="<?= $participant['part_age'] ?>" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="gender" class="bold">Gender:</label>
                        <input value="<?= $participant['part_gender'] ?>" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3"></div>
                <div class="col-12 col-sm-9" style="text-align: right;">
                    <a href="<?php echo WEB_ROOT; ?>/participant/update.php?ic=<?php echo $participant['part_ic']?>"><button type="reset" class="btn btn-primary">Update</button></a>
                    <a href="<?php echo WEB_ROOT; ?>/controllers/participantController.php?cmd=delete-participant&ic=<?php echo $participant['part_ic']?>"><button type="reset" class="btn btn-danger">Delete</button></a>
                </div>
            </div><br>

            

    </div>
    
</div>  


<?php include('../layouts/footer.php'); ?>
        

  