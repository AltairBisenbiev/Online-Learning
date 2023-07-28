<?php
require_once 'admin_only.php';

require_once '../connect.php';  
$name=mysqli_real_escape_string($db,trim($_POST['name']));
$surname=mysqli_real_escape_string($db,trim($_POST['surname']));
$email=mysqli_real_escape_string($db,trim($_POST['email']));
$password=mysqli_real_escape_string($db,trim($_POST['password']));
$password=md5($password);
$datauser=mysqli_query($db,"SELECT * FROM users WHERE email='$email'");
$userhave=mysqli_fetch_assoc($datauser);
$record=mysqli_num_rows($datauser);
if ($record<1){
$sql=mysqli_query($db,"INSERT INTO users (name,surname,email,password) VALUES ('$name','$surname','$email','$password') "); 
setcookie('username',$email, time() + (60*60*24),"/");	
mysqli_close($db);
echo '0';
}else{
echo '1';
}
?>