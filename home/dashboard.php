<?php
require_once '../conn/config.php';
include('../layouts/header.php'); 
include('../layouts/menu.php'); 
include ('../controllers/participantController.php');
include ('../controllers/userController.php');
include ('../controllers/eventController.php');
$participants = getParticipantRecordsLimit();
$Numparticipants = getNumberParticipantRecords();
$NumEvents = getNumberEventsRecords();
$NumStaffs = getNumberStaffRecords();
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <center>
                        <h1 class="card-title"><?=$Numparticipants['num_rows']?></h1>
                        <p class="card-text">Total Participants</p>
                    </center>   
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-1"><br></div>
        <div class="col-12 col-sm-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <center>
                        <h1 class="card-title"><?=$NumStaffs['num_rows']?></h1>
                        <p class="card-text">Total Staff</p>
                    </center>   
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-1"><br></div>
        <div class="col-12 col-sm-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <center>
                        <h1 class="card-title"><?=$NumEvents['num_rows']?></h1>
                        <p class="card-text">Total Events</p>
                    </center>   
                </div>
            </div>
        </div>
    </div>
</div><br><br>

<div class="main-content ">
    
    <div class="container">
        <h5 class="print-container">New Registrations</h5>
        <div class="table-responsive">
            <table class="table table-bordered print-container printIndex" >
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="text-align:center" >No</th>
                        <th scope="col" style="text-align:center" >Ic Number</th>
                        <th scope="col" style="text-align:center" >Name</th>
                        <th scope="col" style="text-align:center" >Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $number = 1;
                    foreach ($participants as $key => $participant) {?>
                        
                            <tr>
                                <th scope="row"><center><?php echo $number++ ?></center></th>
                                <td><?= $participant['part_ic'] ?> </td>
                                <td><?= $participant['part_fullname'] ?> </td>
                                <td >
                                    <center >
                                            <a class="margin2px" href="<?php echo WEB_ROOT; ?>/participant/view.php?ic=<?php echo $participant['part_ic']?>"><i class="fas fa-eye"></i></a>
                                            <a class="margin2px"  href="<?php echo WEB_ROOT; ?>/participant/update.php?ic=<?php echo $participant['part_ic']?>"><i class="fas fa-edit"></i></a>
                                            <a class="margin2px" href="<?php echo WEB_ROOT; ?>/controllers/participantController.php?cmd=delete-participant&ic=<?php echo $participant['part_ic']?> " ><i class="fas fa-trash"></i></a>
                                    <center> 
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

<?php
include('../layouts/footer.php'); 
?>