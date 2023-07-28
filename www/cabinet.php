<?php 
if($_COOKIE['username']=="admin@mail.ru") echo "<script type='text/javascript'>window.location.href = 'admin';</script>";
require_once 'connect.php';
if(isset($_POST['delete']))
{
	$id=$_POST['id'];
	mysqli_query($db,"DELETE FROM test_result WHERE id='$id'");
}
require_once 'header.php';
?>
	<?php

$email=$_COOKIE['username'];
$data=mysqli_query($db,"SELECT * FROM users WHERE email='$email' ");
$row=mysqli_fetch_array($data);
$cdb = 0;
$css = 0; 
$html = 0;
$cpp = 0;
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
	 			<img src="images/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
		 		<h1 class="name-text"><?php echo $row['name'].' '.$row['surname'];?></h1>
		 			
		   	</div>

		
		</div>
		<br>
		<button data-toggle="collapse" data-target="#ProfileInfo" class="btn btn-lg btn-info">Info</button>
		<br>
		<div class="collapse" id="ProfileInfo">
			<div class="jumbotron">
			<h5>Name: <?php echo $row['name']?></h5>
			<h5>Surname: <?php echo $row['surname']?></h5>
			<h5>Class: <?php echo $row['grade'].' '.$row['letter']?></h5>
			</div>
		</div>
		<br>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		  Select image to upload:
		  <input type="file" value="button" name="fileToUpload" id="fileToUpload">
		  <input type="submit" value="Upload Image" name="submit">
		</form>
		<br>
		<h2>Your Test Results:</h2>
		<br>

		
	<?php
	#########################################################################################################################################
	$r=mysqli_query($db,"SELECT * FROM test_result WHERE username='$email' ");
	while($rw=mysqli_fetch_array($r))
	{
		$nomer_variant=$rw['module'];

	####################################################CBD/RESULT####################################################################
		if($rw['part']=="cdb")
		{
			$cdb=1;
			$cdbc=mysqli_query($db,"SELECT * FROM test_cdb_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
			?>
			<table class="table table-striped table-responsive text-center" style="font-size: 13px;">
			  <thead class="thead-dark table-bordered">
				<tr>				
					<th>Time</th>
					<th>Topic</th>
					<th>Module</th>
			<?php
			$count=0;
			while($cdbcw=mysqli_fetch_array($cdbc))
			{
				$count++;
			}
			?><th>Correct</th>
			<th>Ball</th>
			<th>Action</th>
			<tr>			
				<td><?php echo $rw['timedate'].";<br>".$rw['timetest']?></td>
				<td><?php echo 'Computer DB';?></td>
				<td><?php echo $rw['module'];?></td>
				<td><?php echo $rw['correct'].' / '.$count;?></td>
				<td><?php echo $rw['ball'].' / 100';?></td>
				<td>
					<form method="POST">
						<input type="hidden" name="id" value="<?php echo $rw['id'];  ?>">
						<button type="submit"  name="delete" class="btn-danger btn btn-sm">DELETE</button>
					</form>
				</td>
			</tr>
			<?php
		}
	####################################################CSS/RESULT####################################################################
		if($rw['part']=="css")
		{
			$css=1;
			$c=mysqli_query($db,"SELECT * FROM test_css_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
			?>
			<table class="table table-striped table-responsive text-center" style="font-size: 13px;">
			  <thead class="thead-dark table-bordered ">
				<tr>				
					<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date / Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th>Topic</th>
					<th>Module</th>
			<?php
			$count=0;
			while($cw=mysqli_fetch_array($c))
			{
				$count++;
			}
			?><th>Correct</th>
			<th>Ball</th>
			<th>Action</th>
			<tr>			
				<td><?php echo $rw['timedate'].";<br>".$rw['timetest']?></td>
				<td><?php echo 'CSS';?></td>
				<td><?php echo $rw['module'];?></td>
				<td><?php echo $rw['correct'].' / '.$count;?></td>
				<td><?php echo $rw['ball'].' / 100';?></td>
				<td>
					<form method="POST">
						<input type="hidden" name="id" value="<?php echo $rw['id'];  ?>">
						<button type="submit"  name="delete" class="btn-danger btn btn-sm">DELETE</button>
					</form>
				</td>
			</tr>
			<?php
		}
	####################################################HTML/RESULT###################################################################

		if($rw['part']=="html"){
			$html=1;
			$h=mysqli_query($db,"SELECT * FROM test_html_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
			?>
			<table class="table table-striped table-responsive text-center" style="font-size: 13px;">
			  <thead class="thead-dark table-bordered">
				<tr>				
					<th>Time</th>
					<th>Topic</th>
					<th>Module</th>
			<?php
			$count=0;
			while($hw=mysqli_fetch_array($h))
			{
				$count++;
			}
			?><th>Correct</th>
			<th>Ball</th>
			<th>Action</th>
			<tr>			
				<td><?php echo $rw['timedate'].";<br>".$rw['timetest']?></td>
				<td><?php echo 'HTML';?></td>
				<td><?php echo $rw['module'];?></td>
				<td><?php echo $rw['correct'].' / '.$count;?></td>
				<td><?php echo $rw['ball'];?></td>
				<td>
					<form method="POST">
						<input type="hidden" name="id" value="<?php echo $rw['id'];  ?>">
						<button type="submit"  name="delete" class="btn-danger btn btn-sm">DELETE</button>
					</form>
				</td>
			</tr>
			<?php
		}
	####################################################C++/RESULT####################################################################
		if($rw['part']=="java"){
			$cpp=1;
			$j=mysqli_query($db,"SELECT * FROM test_java_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
			?>
			<table class="table table-striped table-responsive text-center" style="font-size: 13px;">
			  <thead class="thead-dark table-bordered">
				<tr>				
				<th>Time</th>
				<th>Topic</th>
				<th>Module</th>
			<?php
			$count=0;
			while($jw=mysqli_fetch_array($j))
			{
				$count++;
			}
			?>
			<th>Correct</th>
			<th>Ball</th>
			<th>Action</th>
			<tr>			
				<td><?php echo $rw['timedate'].";<br>".$rw['timetest']?></td>
				<td><?php echo 'C++';?></td>
				<td><?php echo $rw['module'];?></td>
				<td><?php echo $rw['correct'].' / '.$count;?></td>
				<td><?php echo $rw['ball'];?></td>
				<td>
					<form method="POST">
						<input type="hidden" name="id" value="<?php echo $rw['id'];  ?>">
						<button type="submit"  name="delete" class="btn-danger btn btn-sm">DELETE</button>
					</form>
				</td>
			</tr>
			<?php
		}
		}

		?>
			</tr>
			</thead>
		</table>
		</tr>
		<?php 
if ($cdb == 0 && $html == 0 && $css == 0 && $cpp == 0) {
 	echo '<div class="alert alert-info">
  <strong>Info!</strong> You have not pass any test yet, or you deleted all of your Results.
</div>';
 }
?>
</div>
</div>


<?php 
require_once 'footer.php';
mysqli_close($db);
?>
