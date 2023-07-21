<?php
require_once '../conn/config.php';
include('../layouts/header.php'); 
include('../layouts/menu.php'); 
include ('../controllers/eventController.php');
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

        <form action="<?php echo WEB_ROOT; ?>/controllers/eventController.php?cmd=add-event" method="post" enctype="multipart/form-data">  
        <h3>Create New Activity</h3><br>
            
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="form-group">
                        <label for="name " class="bold" >Title:<span class="requiredColor">*</span></label>
                        <input type="text"  name="title" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="bold">Description<span class="requiredColor">*</span></label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="brand" class="bold">Date<span class="requiredColor">*</span></label>
                        <input type="date" name="date" class="form-control" required="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="brand" class="bold">Time<span class="requiredColor">*</span></label>
                        <input type="time" name="time" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="location" class="bold">Location<span class="requiredColor">*</span></label>
                        <input type="text" name="location" class="form-control" required="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="capacity" class="bold">Capacity<span class="requiredColor">*</span></label>
                        <input type="number" name="capacity" class="form-control" required="">
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>  
</div>  


<?php include('../layouts/footer.php'); ?>

