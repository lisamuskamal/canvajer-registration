<?php
require_once '../conn/config.php';
include('../layouts/header.php'); 
include('../layouts/menu.php'); 
include ('../controllers/eventController.php');
$event = getEventDetail();
// dd($events);
?>
<?php 
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

        <h3>Activity Details</h3><br>
            
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="form-group">
                        <label for="name " class="bold" >Title:</label>
                        <input value="<?= $event['act_title'] ?>" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="bold">Description:</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?= $event['act_desc'] ?></textarea>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="brand" class="bold">Date:</label>
                        <input value="<?= $eventDate = date("d M Y", strtotime($event['act_date'])) ?>" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="brand" class="bold">Time:</label>
                        <input value="<?=  $eventTime = date("g:iA", strtotime($event['act_time'])) ?>" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="location" class="bold">Location:</label>
                        <input value="<?= $event['act_location'] ?>" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="capacity" class="bold">Capacity:</label>
                        <input value="<?= $event['act_capacity'] ?>" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3"></div>
                <div class="col-12 col-sm-9" style="text-align: right;">
                    <a href="<?php echo WEB_ROOT; ?>/event/update.php?id=<?php echo $event['act_id']?>"><button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?php echo WEB_ROOT; ?>/controllers/eventController.php?cmd=delete-event&id=<?php echo $event['act_id']?>"><button type="reset" class="btn btn-danger">Delete</button>
                </div>
            </div><br>
    </div>  
</div>  


<?php include('../layouts/footer.php'); ?>

