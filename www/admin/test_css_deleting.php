<?php
require_once 'admin_only.php';


if(isset($_POST['delete']))
{
	require_once '../connect.php';
	$id=$_POST['id'];
	$var=$_POST['var'];
	$data=mysqli_query($db,"SELECT * FROM test_css_answer WHERE nomer_question='$id' and nomer_variant='$var'");
		while($row=mysqli_fetch_array($data))
		{
			mysqli_query($db,"DELETE FROM test_css_answer WHERE nomer_question='$id' AND nomer_variant='$var'");
		}
	mysqli_query($db,"DELETE FROM test_css_question WHERE nomer_question='$id' AND nomer_variant='$var'");
	mysqli_close($db);	

}
header("Location:test_css_delete.php")
?>