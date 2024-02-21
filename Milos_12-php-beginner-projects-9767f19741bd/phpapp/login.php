<?php
include 'dbh.php';

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$sql = "SELECT * FROM users WHERE username = '".$uname."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
} else {
     echo "TAJ USER NE POSTOJI";
}
?>