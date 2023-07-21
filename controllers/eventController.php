<?php
require_once '../conn/config.php';
require_once WEB_ROOT_FILE. '/conn/database.php';

$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : '';

switch($cmd) {

	case 'add-event':
		addEvent();
	break;

    case 'update-event':
		updateEvent();
	break;

	case 'delete-event':
		deleteEvent();
	break;
}

function addEvent() {

    // dd($_POST);
    $title 	        = $_POST['title'];
    $description    = $_POST['description'];
    $date           = $_POST['date'];
    $time	        = $_POST['time'];
    $location 	    = $_POST['location'];
    $capacity       = $_POST['capacity'];


    $sql = "INSERT INTO activities (act_title, act_desc, act_date, act_time, act_location, act_capacity)
			VALUES ('$title', '$description', '$date', '$time', '$location','$capacity')";
	// dd($sql);
    $hasError = dbInsert($sql);
    


	if($hasError) {
		$_SESSION['error_message'] = 'Create Activity Failed.';
		header('Location: ../event/index.php');
		exit();
	} else {
		$_SESSION['success_message'] = 'Create Activity Succesfull.';
		header('Location: ../event/index.php');
		exit();
	}
}

function getEventRecords(){

	$sql = "SELECT * FROM activities ORDER BY act_id desc";

	$result = dbQuery($sql);
    // dd($result);
	$records = [];
    
	if (dbNumRows($result) >= 1) {
		while($events = dbFetchAssoc($result)) {
			$records[] = $events;
		}
	}
	return $records;
}

function getNumberEventsRecords(){

	$sql = "SELECT COUNT(*) AS num_rows FROM activities";

	$result = dbQuery($sql);
    // dd($result);
	$records = [];
    
	$records = dbFetchAssoc($result);
	
	return $records;
}

function getEventDetail(){
	$act_id	= $_GET['id'];
	$records = [];

	$sql = "SELECT * FROM activities WHERE act_id = $act_id"	;
	// dd($sql);
	$result = dbQuery($sql);
	// dd($result);
	
	if (dbNumRows($result) >= 1) {
		$records = dbFetchAssoc($result);
	}
	return $records;
} 

function deleteEvent(){
	$eventId	= $_GET['id'];
    
    $sql = "DELETE FROM `activities` WHERE act_id = '$eventId'"; 
	// dd($sql);
	dbQuery($sql);


   
	$hasError = dbInsert($sql);

	if($hasError) {
		$_SESSION['error_message'] = 'Delete Event Failed.';
		header('Location: ../event/index.php');
		exit();
	} else {
		$_SESSION['success_message'] = 'Delete Event Succesfull .';
		header('Location: ../event/index.php');
		exit();
	}
}

function updateEvent() {

    // dd($_POST);
	$activityId = $_GET['id'];
    $title 	        = $_POST['title'];
    $description    = $_POST['description'];
    $date           = $_POST['date'];
    $time	        = $_POST['time'];
    $location 	    = $_POST['location'];
    $capacity       = $_POST['capacity'];


    $sql = "UPDATE activities 
        SET act_title = '$title', 
            act_desc = '$description', 
            act_date = '$date', 
            act_time = '$time', 
            act_location = '$location', 
            act_capacity = '$capacity' 
        WHERE act_id = $activityId";
	// dd($sql);
    $hasError = dbInsert($sql);
    


	if($hasError) {
		$_SESSION['error_message'] = 'Update Event Failed.';
		header('Location: ../event/index.php');
		exit();
	} else {
		$_SESSION['success_message'] = 'Update Event Succesfull.';
		header('Location: ../event/index.php');
		exit();
	}
}