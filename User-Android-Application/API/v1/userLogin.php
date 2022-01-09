<?php 

require_once '../includes/DbOperations.php';

$response = array(); 

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['user_email']) and isset($_POST['user_password'])){
		$db = new DbOperations(); 

		if($db->userLogin($_POST['user_email'], $_POST['user_password'])){
			$user = $db->getUserByUsername($_POST['user_email']);
			$response['error'] = false; 
			$response['user_email'] = $user['user_email'];
			$response['user_password'] = $user['user_password'];
		}else{
			$response['error'] = true; 
			$response['message'] = "Invalid Email or password";			
		}

	}else{
		$response['error'] = true; 
		$response['message'] = "Required fields are missing";
	}
}

echo json_encode($response);