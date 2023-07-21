<?php 
require_once '../conn/config.php';
include('../layouts/header.php'); 
include ('../controllers/participantController.php');
$participant = getParticipantDetail();

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=excel-report-participant-detail.xls"); 

?>

<div class="main-content ">
    
   
    <div class="container">
        <h3 class="print-container">Particpant Details</h3><br>
        <div class="table-responsive">
            <table class="table table-bordered print-container printIndex" id="myTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="text-align:center" >No</th>
                        <th scope="col" style="text-align:center" >Ic Number</th>
                        <th scope="col" style="text-align:center" >Full Name</th>
                        <th scope="col" style="text-align:center" >Email</th>
                        <th scope="col" style="text-align:center" >Phone</th>
                        <th scope="col" style="text-align:center" >Age</th>
                        <th scope="col" style="text-align:center" >Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $participant['part_ic'] ?> </td>
                        <td><?= $participant['part_fullname'] ?> </td>
                        <td><?= $participant['part_email'] ?> </td>
                        <td><?= $participant['part_phone'] ?> </td>
                        <td><?= $participant['part_age'] ?> </td>
                        <td><?= $participant['part_gender'] ?> </td>
                    </tr>
            </table> 
        </div>
    </div>       
</div>  


        

  