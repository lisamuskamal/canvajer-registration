<?php
require_once '../conn/config.php';
require_once WEB_ROOT_FILE. '/conn/database.php';

$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : '';

switch($cmd) {
	
	case 'login':
		login();
	break;

    case 'logout':
		logout();
	break;
}

function login()
{
	// dd($_POST);
	$name 	= $_POST['username'];
	$pwd 	= $_POST['password'];

	$errorMessage = '';
	//Login user
	$sql 	= "SELECT * FROM users WHERE ad_username = '$name' AND ad_password = '$pwd'";
	
    $result = dbQuery($sql);
    // dd(dbNumRows($result));
    
	if (dbNumRows($result) == 1) {
		$user = dbFetchAssoc($result);
		$_SESSION['user'] = $user; 
        // dd($user['ad_role']);
        if($user['ad_role'] == 1) {  
            header('Location: ../home/dashboard.php');
            exit();
        } 
    } else {
        $_SESSION['error_message'] = 'Username & Password Wrong';
		header('Location: ../home/login.php');
            exit();
	}
}

function logout()
{
    session_destroy();
    header('Location: ../../index.php');
	exit();
}

function getNumberStaffRecords(){

	$sql = "SELECT COUNT(*) AS num_rows FROM users";

	$result = dbQuery($sql);
    // dd($result);
	$records = [];
    
	$records = dbFetchAssoc($result);
	
	return $records;
}
