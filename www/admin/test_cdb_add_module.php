 <?php
 require_once 'admin_only.php';

if (isset($_GET['add']))
{
	$module=$_GET['module'];	
	require '../connect.php';
	$data=mysqli_query($db,"SELECT * FROM test_cdb_variant WHERE nomer_variant='$module'");
	$record=mysqli_num_rows($data);
	if ($record<1)
	{
	mysqli_query($db,"INSERT INTO test_cdb_variant (nomer_variant) VALUES ('$module')");
	mysqli_close($db);
echo "<script type='text/javascript'>window.location.href = 'test_cdb_add.php';</script>";	}
	else
	{ 
	echo "<script type='text/javascript'>alert('The database has this record!');window.location.href = 'test_cdb_add.php';</script>";	
	}
}
?>