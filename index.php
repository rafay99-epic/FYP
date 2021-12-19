<!-- <html>
<head>
    <title> Login Page </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id ="frm">
        <form action="login.php" method= "POST">
                <h2>LOGIN</h2>
                 <label> Email: </label>
                 <input type="text" id="email" name="manager_email"/>

                 <label> Password: </label>
                 <input type="text" id="pass" name="manager_password"/>
            
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html> -->



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