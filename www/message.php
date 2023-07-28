<?php
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$message=trim($_POST['message']);
require_once 'connect.php';
$data=mysqli_query($db,"INSERT INTO message (name,email,message) VALUES ('$name','$email','$message')");
echo 0;
mysqli_close($db);
?>