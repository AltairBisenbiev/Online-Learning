<?php 
if(isset($_POST['answer']))
{
	require_once 'connect.php';
	$varnom=$_POST['nomer_variant'];
	$d=mysqli_query($db,"SELECT * FROM test_java_question WHERE nomer_variant='$varnom' ORDER BY nomer_question ASC");
	$i=0;
	$s=0;
	$l=0;
	$str="";	
	while ($q=mysqli_fetch_array($d))
	{
		$nofq=$q['nomer_question'];
		$i++;
		$a=mysqli_query($db,"SELECT * FROM test_java_answer WHERE nomer_variant='$varnom' AND nomer_question='$nofq'");
		$str=$str."<td>";
		while($twa=mysqli_fetch_array($a))
		{
			if(($_POST["question".$i]==$twa['variant_answer'])&&($twa['correct']==1))
			{
				$l++;
			} 

		}
		$str=$str.$_POST["question".$i];
		$str=$str."</td>";					
	}	
	$username=$_COOKIE['username'];
	$part="java";
	$correct=$l;
	$ball=(100/$i)*$l;
	$ball=round($ball);
	$date=date("y-m-d");
	$time=date("H:i:s");
	mysqli_query($db,"INSERT INTO test_result (username,timedate,timetest,part,module,result,correct,ball) VALUES ('$username','$date','$time','$part','$varnom','$str','$correct','$ball' )");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>html Result</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body id="result">
	<div></div>
	<div class="row">
		<div class="col-lg-4 col-sm-2"></div>
		<div class="bg-light col-lg-4 col-sm-8 vcenter align-items-center my-5 p-4 text-center" style="box-shadow: 0px 0px 10px gray; border-radius: 10px;">
			<?php
				$username=$_COOKIE['username'];
				$dat=mysqli_query($db,"SELECT * FROM users WHERE email='$username'");
				$row=mysqli_fetch_array($dat);
			?>
		<h3>Dear <?php echo $row['name']."  ".$row['surname'];?></h3>
		<h5>Number of points</h5>
		<h1 class="text-danger"><?php echo $ball;?> out of 100 points</h1>
		<a href="test_cpp.php" class="btn btn-primary">BACK</a>
	</div>
		<div class=" col-lg-4 col-sm-2"></div>
	</div>

</body>
</html>