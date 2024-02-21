<?php
include 'dbh.php';

$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="insert into users(username,email,password)
values ('$uname','$email','$pass')";
$result=mysqli_query($conn,$sql);

header("Location:index.php");
?>