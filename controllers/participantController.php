<?php
require_once '../conn/config.php';
require_once WEB_ROOT_FILE. '/conn/database.php';

$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : '';

switch($cmd) {

	case 'add-participant':
		addParticipant();
	break;

	case 'add-participant-home':
		addParticipantHome();
	break;

    case 'update-participant':
		updateParticipant();
	break;

	case 'delete-participant':
		deleteParticipant();
	break;
}

function getParticipantRecords(){

	$sql = "SELECT * FROM participants ORDER BY created_at DESC";

	$result = dbQuery($sql);
    // dd($result);
	$records = [];
    
	if (dbNumRows($result) >= 1) {
		while($participant = dbFetchAssoc($result)) {
			$records[] = $participant;
		}
	}
	return $records;
}

function getParticipantRecordsLimit(){

	$sql = "SELECT * FROM participants ORDER BY created_at DESC LIMIT 5";

	$result = dbQuery($sql);
    // dd($result);
	$records = [];
    
	if (dbNumRows($result) >= 1) {
		while($participant = dbFetchAssoc($result)) {
			$records[] = $participant;
		}
	}
	return $records;
}

function getNumberParticipantRecords(){

	$sql = "SELECT COUNT(*) AS num_rows FROM participants";

	$result = dbQuery($sql);
    // dd($result);
	$records = [];
    
	$records = dbFetchAssoc($result);
	
	return $records;
}

function getParticipantDetail(){
	$part_ic	= $_GET['ic'];
	$records = [];

	$sql = "SELECT * FROM participants WHERE part_ic = $part_ic"	;
	// dd($sql);
	$result = dbQuery($sql);
	// dd($result);
	
	if (dbNumRows($result) >= 1) {
		$records = dbFetchAssoc($result);
	}
	return $records;
} 

function addParticipant() {

    // dd($_POST);
    $fullname 	        = $_POST['fullname'];
    $email              = $_POST['email'];
    $ic              	= $_POST['ic'];
    $pnumber	        = $_POST['pnumber'];
    $age 	        	= $_POST['age'];
    $gender           	= $_POST['gender'];


    $sql = "INSERT INTO participants (part_ic, part_fullname, part_email, part_age, part_gender, part_phone, created_at)
			VALUES ('$ic', '$fullname', '$email', '$age', '$gender',$pnumber, NOW())";
	// dd($sql);
    $hasError = dbInsert($sql);
    


	if($hasError) {
		$_SESSION['error_message'] = 'Register Participant Failed.';
		header('Location: ../participant/index.php');
		exit();
	} else {
		$_SESSION['success_message'] = 'Register Participant Succesfull.';
		header('Location: ../participant/index.php');
		exit();
	}
}

function addParticipantHome() {

    // dd($_POST);
    $fullname 	        = $_POST['fullname'];
    $email              = $_POST['email'];
    $ic              	= $_POST['ic'];
    $pnumber	        = $_POST['pnumber'];
    $age 	        	= $_POST['age'];
    $gender           	= $_POST['gender'];


    $sql = "INSERT INTO participants (part_ic, part_fullname, part_email, part_age, part_gender, part_phone, created_at)
			VALUES ('$ic', '$fullname', '$email', '$age', '$gender',$pnumber, NOW())";
	// dd($sql);
    $hasError = dbInsert($sql);
    


	if($hasError) {
		$_SESSION['error_message'] = 'Register Participant Failed.';
		header('Location: ../home/registration.php');
		exit();
	} else {
		$_SESSION['success_message'] = "Congratulations to $fullname and all participants who have successfully registered! You are now eligible to join the event. We are excited to have you on board and look forward to your active participation. We will soon send an invitation link to your registered email address, $email. We want to ensure that you have a memorable and enriching experience throughout the event. As the event approaches, please keep an eye on your inbox for the invitation email containing important details and instructions.";
		header('Location: ../home/registration.php');
		exit();
	}
}

function updateParticipant() {

    // dd($_POST);
    $fullname 	        = $_POST['fullname'];
    $email              = $_POST['email'];
    $ic              	= $_GET['ic'];
    $pnumber	        = $_POST['pnumber'];
    $age 	        	= $_POST['age'];
    $gender           	= $_POST['gender'];


    $sql = "UPDATE participants 
        SET part_fullname = '$fullname', 
            part_email = '$email', 
            part_phone = '$pnumber', 
            part_age = '$age', 
            part_gender = '$gender' 
        WHERE part_ic = '$ic'";
	// dd($sql);
    $hasError = dbInsert($sql);
    


	if($hasError) {
		$_SESSION['error_message'] = 'Update Participant Failed.';
		header('Location: ../participant/index.php');
		exit();
	} else {
		$_SESSION['success_message'] = 'Update Participant Succesfull.';
		header('Location: ../participant/index.php');
		exit();
	}
}

function deleteParticipant(){
	$part_ic	= $_GET['ic'];
    
    //delete from table participant
    $sql = "DELETE FROM `participants` WHERE part_ic = '$part_ic'"; 
	// dd($sql);
	dbQuery($sql);


   
	$hasError = dbInsert($sql);

	if($hasError) {
		$_SESSION['error_message'] = 'Delete Participant Failed.';
		header('Location: ../participant/index.php');
		exit();
	} else {
		$_SESSION['success_message'] = 'Delete Participant Succesfull .';
		header('Location: ../participant/index.php');
		exit();
	}
}