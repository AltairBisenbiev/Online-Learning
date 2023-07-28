<?php
$db = new mysqli("localhost", "root", "", "school");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>