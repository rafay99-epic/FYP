<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['user_email']) && isset($_POST['user_password'])
    && isset($_POST['user_name']) && isset($_POST['DOB'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    //Email 
	$uname = validate($_POST['user_email']);
	//Password
    $pass = validate($_POST['user_password']);
    //Date of Birth
	$re_pass = validate($_POST['DOB']);
	//Name
    $name = validate($_POST['user_name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=Email  is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error= Date of Birth is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else{

		// hashing the password
       // $pass = md5($pass);

	    $sql = "SELECT * FROM user WHERE user_email='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The email is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO user (user_email,user_name,user_password,user_DOB) VALUES('$uname', '$name', '$pass','$re_pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}