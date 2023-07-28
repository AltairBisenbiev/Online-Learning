<?php
session_start();
setcookie ("username", "", time()-86400,"/");
session_destroy();
header("Location:index.php");
?>