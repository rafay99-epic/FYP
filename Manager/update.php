<?php 
#The connection to the database.
include 'db_conn.php';

//This will keep the record for the session start and close
session_start(); 
//Getting the useremail from the url
$id=$_GET['updateid'];

//Query to get the value from the database
$sql= "SELECT * FROM `user` WHERE user_email ='$id'";
// Executting the query with the database connection
$result=mysqli_query($conn,$sql);

 //Geting the date from the database on by one 
$row=mysqli_fetch_assoc($result);
$user_email=$row['user_email'];
$user_name=$row['user_name'];
$user_password=$row['user_password'];
$user_DOB=$row['user_DOB'];


//This will get the values from the form text bos and then store them in to a varaiable 
if (isset($_POST['update'])){
	$user_email=$_POST['user_email']; 
	$user_name=$_POST['user_name'];
	$user_password=$_POST['user_password'];
	$user_DOB=$_POST['DOB'];
 
	//This is the query that will update the database
	$sql= "UPDATE user SET user_email='$user_email', user_name='$user_name', user_password='$user_password', user_DOB='$user_DOB' WHERE user_email='$id'";

	$result= mysqli_query($conn,$sql);
	if($result){
			//echo "Data is updates to the database successfully";
			header("location:display.php");
	}
	else{
		die(mysqli_error($conn));
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     <form action="#" method="post">
     	<h2>Update Profile</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <input type="text" 
               name="user_name" 
               placeholder=" UserName"
               value="<?php echo $user_name; ?>"><br>
          

          <label>Email</label>
          <input type="text" 
               name="user_email" 
               placeholder="User Email"
               value="<?php echo $user_email; ?>"><br>
     


     	<label>Password</label>
     	<input type="password" 
               name="user_password" 
               placeholder="User Password"
               value="<?php echo $user_password; ?>"><br>

          <label>Date of Birth</label>
          <input type="date" 
               name="DOB" 
               placeholder="User Date of Birth"
               value="<?php echo $user_DOB?>"><br>
     	<button type="submit" name="update">Update Profile</button>
     </form>
</body>
</html>