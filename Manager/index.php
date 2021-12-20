<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     <form action="login.php" method="POST">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email: </label>
     	<input type="text" name="manager_email" placeholder="Manager Email"><br>

     	<label>Password</label>
     	<input type="password" name="manager_password" placeholder="Manager Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>