<?php 
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" type="text/css"> 
    <title>Display User Data</title>

</head>
<body>
  <h1>View and Update Data</h1><br>
<!-- <button><a href ="signup.php" class= "text-light"> Add User</a></button> -->
<br>
<div class="container">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">User Email</th>
            <th scope="col">User Name</th>
            <th scope="col">User Password</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>

        <tbody>

        <?php
        $sql= "SELECT * FROM `user`";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
          // $row=mysqli_fetch_assoc($result);
          // echo $row['user_email'];
          
          while($row=mysqli_fetch_assoc($result))
          {
            $user_email=$row['user_email'];
            $user_name=$row['user_name'];
            $user_password=$row['user_password'];
            $user_DOB=$row['user_DOB'];
            echo '<tr>
            <th scope="row">'.$user_email.'</th>
            <td>'.$user_name.'</td>
            <td>'.$user_password.'</td>
            <td>'.$user_DOB.'</td>
            <td>
              <button><a href="update.php?updateid='.$user_email.'">Update</a></button>
              <button><a href="delete.php?deleteid='.$user_email.'">Delete</a></button>
            </td>
            </tr>';
          }
        }
        
        
        
        
        ?>

        </tbody>
      </table>

     


</div>

  
</body>
</html>