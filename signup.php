<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP User</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['user_name'])) { ?>
               <input type="text" 
                      name="user_name" 
                      placeholder=" UserName"
                      value="<?php echo $_GET['user_name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="user_name" 
                      placeholder="User Name"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['user_email'])) { ?>
               <input type="text" 
                      name="user_email" 
                      placeholder="User Email"
                      value="<?php echo $_GET['user_email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="user_email" 
                      placeholder="User Email"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="user_password" 
                 placeholder="User Password"><br>

          <label>Date of Birth</label>
          <input type="date" 
                 name="DOB" 
                 placeholder="User Date of Birth"><br>
     	<button type="submit">Create an Account for User</button>
     </form>
</body>
</html>