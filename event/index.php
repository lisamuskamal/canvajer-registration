<?php 
require_once '../conn/config.php';
include('../layouts/header.php'); 
include('../layouts/menu.php'); 
include ('../controllers/eventController.php');
$events = getEventRecords();
// dd($events);

?>
<?php 
$successMessage = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : ''; 
unset($_SESSION["success_message"]);
?>

<div class="container">
    <div class="main-content">
    
        <?php 
        if($successMessage){
        ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php } ?>
        <h3>List of Activities</h3><br>

        <div class="container">
            <div class="row">
                <div class="col-0 col-sm-10">
                    <br>
                </div>
                <div class="col-12 col-sm-2">
                    <a href="<?php echo WEB_ROOT; ?>/event/create.php"><button type="button" class="btn btn-primary btn-sm" style="margin-right: 0"><i class="fas fa-plus"></i>&nbsp Create New Activity</button></a>
                </div>
            </div>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Location</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $number = 1;
                    foreach ($events as $key => $event) {?>
                        <tr>
                            <th scope="row"><center><?php echo $number++ ?></center></th>
                            <td><?= $event['act_title'] ?> </td>
                            <td><?= $eventDate = date("d M Y", strtotime($event['act_date']));  echo " | " ; echo $eventTime = date("g:iA", strtotime($event['act_time'])); ?> </td>
                            <td><?= $event['act_location'] ?> </td>
                            <td>
                                <center>
                                    <a class="margin2px" href="<?php echo WEB_ROOT; ?>/event/view.php?id=<?php echo $event['act_id']?>"><i class="fas fa-eye"></i></a>
                                    <a class="margin2px"  href="<?php echo WEB_ROOT; ?>/event/update.php?id=<?php echo $event['act_id']?>"><i class="fas fa-edit"></i></a>
                                    <a class="margin2px" href="<?php echo WEB_ROOT; ?>/controllers/eventController.php?cmd=delete-event&id=<?php echo $event['act_id']?>"><i class="fas fa-trash"></i></a>
                                </center>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table> 
        </div>
    </div>
</div>



<?php include('../layouts/footer.php'); ?>

<script>
function myFunction() {
  // Get the text field
  var copy = document.getElementById("myInput");

  // Select the text field
  copy.select();
  copy.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copy.value);
  
  // Alert the copied text
  alert("Copied the text: " + copy.value);
}
</script>

        

  