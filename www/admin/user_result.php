<?php
require_once 'admin_only.php';

require_once 'header.php';


if(isset($_POST['delete']))
{
	require_once '../connect.php';
	$id=$_POST['id'];
	mysqli_query($db,"DELETE FROM test_result WHERE id='$id'");
}
?>
<div class="container my-5">
	

<?php
##############################################################################################
require '../connect.php';
$r=mysqli_query($db,"SELECT * FROM test_result");
while($rw=mysqli_fetch_array($r))
{
	$nomer_variant=$rw['module'];
	$username=$rw['username'];


#########################################################################################
	if($rw['part']=="cdb")
	{
		$cdbcount=1;
		$cdbcn=1;
		$cdbc=mysqli_query($db,"SELECT * FROM test_cdb_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
		///////////////////////////////////////////////////
		$cdbuser=mysqli_query($db,"SELECT * FROM users WHERE email='$username'");
		$cdburow=mysqli_fetch_array($cdbuser);
		?>
		<span><?php echo '<h5><b>'.$cdburow['name'].'    '.$cdburow['surname'].' </b></h5> 
		Date:  '.$rw['timedate']."; &#160;&#160;&#160;&#160;&#160;&#160;Time:  ".$rw['timetest'].';  &#160;&#160;&#160;&#160;&#160;&#160; Topic:  Computers and Digital Basics;';?></span>
		<table class="table table-lg table-responsive table-bordered  text-center" >
		  <thead class="thead-dark">
			<tr>
				<th>Module</th>
		<?php
		while($cdbcw=mysqli_fetch_array($cdbc))
		{
			echo "<th>".$cdbcn++."</th>";
		}
		?><th>Questions</th>
		<th>Marks</th>
		<th>Action</th>
	</tr>
</thead>
<!----------------------------------------------------------------------------->
<tr>
<?php
$cdbcss=mysqli_query($db,"SELECT * FROM test_cdb_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
echo "<td rowspan='2' class='align-middle'><h1>".$rw['module']."</h1></td>";
while($cdbcans=mysqli_fetch_array($cdbcss))
{
	$cdbcssq=$cdbcans['nomer_question'];
	$cdbquery=mysqli_query($db,"SELECT * FROM test_cdb_answer WHERE nomer_question='$cdbcssq' AND  nomer_variant='$nomer_variant'");
	while($cdbcssans=mysqli_fetch_array($cdbquery))
	if($cdbcssans['correct']==1){
	echo "<td>".$cdbcssans['variant_answer']."</td>";
	$cdblastcss=$cdbcssans['nomer_question'];
		}	
}
?>
<td><?php echo $cdblastcss;?></td>
<td>100</td>
<td rowspan="2" class="align-middle">
				<form method="POST">
					<input type="hidden" name="id" value="<?php echo $rw['id'];  ?>">
					<button type="submit"  name="delete" class="btn-danger btn btn-mini">DELETE</button>
				</form>
			</td>
</tr>
<!----------------------------------------------------------------------------->	
		<tr>			
			<?php echo $rw['result'];?>
			<td><?php echo $rw['correct'];?></td>
			<td><?php echo $rw['ball'];?></td>			
		</tr>
	</table>
		<?php
	}
#########################################################################################################

	#########################################################################################
	if($rw['part']=="css")
	{
		$count=1;
		$cn=1;
		$c=mysqli_query($db,"SELECT * FROM test_css_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
		///////////////////////////////////////////////////
		$user=mysqli_query($db,"SELECT * FROM users WHERE email='$username'");
		$urow=mysqli_fetch_array($user);
		?>
		<span><?php echo '<h5><b>'.$cdburow['name'].'    '.$cdburow['surname'].' </b></h5> 
		Date:  '.$rw['timedate']."; &#160;&#160;&#160;&#160;&#160;&#160;Time:  ".$rw['timetest'].';  &#160;&#160;&#160;&#160;&#160;&#160; Topic:  CSS;';?></span>
		<table class="table table-lg table-responsive table-bordered  text-center" >
		  <thead class="thead-dark table-bordered">
			<tr>
				<th>Module</th>
		<?php
		while($cw=mysqli_fetch_array($c))
		{
			echo "<th>".$cn++."</th>";
		}
		?><th>Questions</th>
		<th>Marks</th>
		<th>Action</th>
	</tr>
</thead>
<!----------------------------------------------------------------------------->
<tr>
<?php
$css=mysqli_query($db,"SELECT * FROM test_css_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
echo "<td rowspan='2' class='align-middle'><h1>".$rw['module']."</h1></td>";
while($cans=mysqli_fetch_array($css))
{
	$cssq=$cans['nomer_question'];
	$query=mysqli_query($db,"SELECT * FROM test_css_answer WHERE nomer_question='$cssq' AND  nomer_variant='$nomer_variant'");
	while($cssans=mysqli_fetch_array($query))
	if($cssans['correct']==1){
	echo "<td>".$cssans['variant_answer']."</td>";
	$lastcss=$cssans['nomer_question'];
		}	
}
?>
<td><?php echo $lastcss;?></td>
<td>100</td>
<td rowspan="2" class="align-middle">
				<form method="POST">
					<input type="hidden" name="id" value="<?php echo $rw['id'];  ?>">
					<button type="submit"  name="delete" class="btn-danger btn btn-mini">DELETE</button>
				</form>
			</td>
</tr>
<!----------------------------------------------------------------------------->	
		<tr>			
			<?php echo $rw['result'];?>
			<td><?php echo $rw['correct'];?></td>
			<td><?php echo $rw['ball'];?></td>			
		</tr>
	</table>
		<?php
	}
#########################################################################################################

	if($rw['part']=="html")
	{
		$hn=1;
		$h=mysqli_query($db,"SELECT * FROM test_html_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
				///////////////////////////////////////////////////
		$user=mysqli_query($db,"SELECT * FROM users WHERE email='$username'");
		$urow=mysqli_fetch_array($user);
		?>
		<span><?php echo '<h5><b>'.$cdburow['name'].'    '.$cdburow['surname'].' </b></h5> 
		Date:  '.$rw['timedate']."; &#160;&#160;&#160;&#160;&#160;&#160;Time:  ".$rw['timetest'].';  &#160;&#160;&#160;&#160;&#160;&#160; Topic:  HTML;';?></span>
		<table class="table table-lg table-responsive table-bordered  text-center" style="font-size: 13px;">
		  <thead class="thead-dark">
			<tr>				
				
				<th>Module</th>

		<?php
		while($hw=mysqli_fetch_array($h))
		{
			echo "<th>".$hn++."</th>";
		}
		?><th>Questions</th>
		<th>Marks</th>
		<th>Action</th>
	</tr>
</thead>
<!----------------------------------------------------------------------------->
<tr>
<?php
$html=mysqli_query($db,"SELECT * FROM test_html_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
echo "<td rowspan='2' class='align-middle'><h1>".$rw['module']."</h1></td>";
while($hans=mysqli_fetch_array($html))
{
	$htmlq=$hans['nomer_question'];
	$hquery=mysqli_query($db,"SELECT * FROM test_html_answer WHERE nomer_question='$htmlq' AND  nomer_variant='$nomer_variant'");
	while($htmlans=mysqli_fetch_array($hquery))
	if($htmlans['correct']==1){
	echo "<td>".$htmlans['variant_answer']."</td>";
	$lasthtml=$htmlans['nomer_question'];
	}	
}
?>
<td><?php echo $lasthtml;?></td>
<td>100</td>
<td rowspan="2" class="align-middle">
				<form method="POST">
					<input type="hidden" name="id" value="<?php echo $rw['id'];  ?>">
					<button type="submit"  name="delete" class="btn-danger btn btn-mini">DELETE</button>
				</form>
			</td>
</tr>
<!----------------------------------------------------------------------------->	
	<tr>		
			<?php echo $rw['result'];?>
			<td><?php echo $rw['correct'];?></td>
			<td><?php echo $rw['ball'];?></td>
			
		</tr>
	</table>
		<?php
	}
###############################################################################################################
	if($rw['part']=="java")
	{
		$jn=1;
		$j=mysqli_query($db,"SELECT * FROM test_java_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
				///////////////////////////////////////////////////
		$user=mysqli_query($db,"SELECT * FROM users WHERE email='$username'");
		$urow=mysqli_fetch_array($user);
		?>
		<span><?php echo '<h5><b>'.$cdburow['name'].'    '.$cdburow['surname'].' </b></h5> 
		Date:  '.$rw['timedate']."; &#160;&#160;&#160;&#160;&#160;&#160;Time:  ".$rw['timetest'].';  &#160;&#160;&#160;&#160;&#160;&#160; Topic: C++;';?></span>

		<table class="table table-large table-responsive table-bordered text-center" style="font-size: 13px;">
		  <thead class="thead-dark">
			<tr>				
				
				<th>Module</th>
		<?php
		while($jw=mysqli_fetch_array($j))
		{
			echo "<th>".$jn++."</th>";
		}
		?><th>Questions</th>
		<th>Marks</th>
		<th>Action</th>
	</tr>
</thead>
<!----------------------------------------------------------------------------->
<tr>
<?php
$java=mysqli_query($db,"SELECT * FROM test_java_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
echo "<td rowspan='2' class='align-middle'><h1>".$rw['module']."</h1></td>";
while($jans=mysqli_fetch_array($java))
{
	$javaq=$jans['nomer_question'];
	$jquery=mysqli_query($db,"SELECT * FROM test_java_answer WHERE nomer_question='$javaq' AND  nomer_variant='$nomer_variant'");
	while($javaans=mysqli_fetch_array($jquery))
	if($javaans['correct']==1){
	echo "<td>".$javaans['variant_answer']."</td>";
$lastjava=$javaans['nomer_question'];
	}	
}
?>
<td><?php echo $lastjava;?></td>
<td>100</td>
<td rowspan="2" class="align-middle">
				<form method="POST">
					<input type="hidden" name="id" value="<?php echo $rw['id'];  ?>">
					<button type="submit"  name="delete" class="btn-danger btn btn-mini">DELETE</button>
				</form>
			</td>
</tr>
<!----------------------------------------------------------------------------->	
		<tr>			
			<?php echo $rw['result'];?>
			<td><?php echo $rw['correct'];?></td>
			<td><?php echo $rw['ball'];?></td>			
		</tr>
	</table>
		<?php
	}
}

?>
	</div></div>	
<?php
require_once 'footer.php';
?>