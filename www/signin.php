<?php
$mail=trim($_POST['mail']);
$pass=trim($_POST['pass']);
$pass=md5($pass);
require_once 'connect.php';
$sql=mysqli_query($db,"SELECT * FROM users WHERE email='$mail' AND password='$pass'");
$userhave=mysqli_fetch_assoc($sql);
$record=mysqli_num_rows($sql);
if ($record>0)
{
	setcookie('username',$mail, time() + (60*60*24),"/");
	echo 0;
}else{
	echo 1;
}
mysqli_close($db);
?>
