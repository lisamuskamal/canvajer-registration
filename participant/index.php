<?php 
require_once '../conn/config.php';
include('../layouts/header.php'); 
include('../layouts/menu.php'); 
include ('../controllers/participantController.php');
$participants = getParticipantRecords();
$Numparticipants = getNumberParticipantRecords();

$successMessage = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : ''; 
unset($_SESSION["success_message"]);

?>

<div class="main-content ">
    <div class="container">
        <?php 
        if($successMessage){
        ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php } ?>
        <h3 class="print-container">List of Particpants</h3><br>
        <div class="row">
                <div class="col-6 col-sm-6">
                    <a href="<?php echo WEB_ROOT; ?>/participant/excel-report-list.php"><button type="button" class="btn btn-success"><i class="bi bi-download"></i>&nbsp&nbspDownload</button><br></a>
                </div>
                <div class="col-6 col-sm-6" style="text-align: right;">
                    <button type="button" class="btn btn-primary">
                        Total : <span class="badge badge-light"><?=$Numparticipants['num_rows']?></span>
                    </button>
                </div>
            </div><br>
       
        <input  class="form-control mr-sm-2 w-100" type="search" placeholder="Search for name or ic.." aria-label="Search" id="myInput" onkeyup="myFunction()"><br>
        <div class="table-responsive">
            <table class="table table-bordered print-container printIndex" id="myTable">
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


<?php include('../layouts/footer.php'); ?>
<script>
function myFunction() {
  var input, filter, table, tr, td1, td2, i, txtValue1, txtValue2;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td1 = tr[i].getElementsByTagName("td")[0];
    td2 = tr[i].getElementsByTagName("td")[1];
    if (td1 && td2) {
      txtValue1 = td1.textContent || td1.innerText;
      txtValue2 = td2.textContent || td2.innerText;
      if (txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

        

  