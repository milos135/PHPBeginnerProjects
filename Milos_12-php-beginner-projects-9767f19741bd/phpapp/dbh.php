<?php
$conn=mysqli_connect("localhost:3307","root","","mydatabase");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>