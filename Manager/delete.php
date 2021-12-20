<?php
include 'db_conn.php';
if(isset($_GET['deleteid'])){
    $user_email = $_GET['deleteid'];
    // $sql="DELETE FROM `user` WHERE `user`.`user_email`"
    $sql= "delete from user where user_email = '$user_email'";
    // $sql ="DELETE FROM `user` WHERE `user_email=$user_email";
  #  $sql ="delete from 'user' where user_email=$user_email";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: display.php");
    }
    else{
        die(mysqli_error($conn));
    }

}














?>