<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['manager_email']) && isset($_POST['manager_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['manager_email']);
	$pass = validate($_POST['manager_password']);

	if (empty($uname)) {
		header("Location: index.php?error=Email  is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM manager WHERE manager_email='$uname' AND manager_password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['manager_email'] === $uname && $row['manager_password'] === $pass) {
            	$_SESSION['manager_name'] = $row['manager_name'];
            	$_SESSION['manager_DOB'] = $row['manager_DOB'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect Email or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect Email or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}


// if(isset($_POST["manager_email"]) && isset($_POST["manager_password"])) {
    
//     function validate($data)
//     {
//         $data=trim($data);
//         $data=stripslashes($data);
//         $data=htmlspecialchars($data);
//         return $data;
//     }
//     $email= validate($_POST["manager_email"]);
//     $password= validate($_POST["manager_password"]);

//     if (empty($email) )
//     {
//         header("Location: index.php?error=Email is required");
//         exit();
//     }else if(empty($password))
//     {
//         header("Location: index.php?error=Password is required");
//         exit();
//     }else
//     {
//         echo "Valid input"
//     }

 
// }else{
//     header("Location: index.php?error");
//     exit();
// }



// $host="localhost";
// $user="root";
// $password ="";
// $db="parking_data";

// $con=mysqli_connect("localhost","root","","parking_data") or die("Error " .       mysqli_error($con));
// echo "Connection is opened"

// if(isset($_POST['manager_email'])){
//     $uname=$_POST['manager_email'];
//     $passwod=$_POST['manager_password'];

//     $sql ="select * from manager where manager_email='".$uname."' AND manager_password='".$passwod."' limit 1";

//     $result = mysql_query($sql);


//     if(mysql_num_rows($result)==1){
//         echo"You are logged into the system";
//         exit();
//     }
//     else
//     {
//         echo "Incorrect username and password";
//         exit();
//     }



// }


