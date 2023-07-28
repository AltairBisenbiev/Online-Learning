
<?php
require_once 'header.php';
?>
<!-----------------content--------------->
<?php
if(!isset($_COOKIE['username']))
{
	?>
	<div class="container">
		<div class="alert alert-info" role="alert">
			<h1>Instruction</h1>
			<p>1) If you want to take the test, then for this purpose become authorized</p>
		<p>2) And then transfer on necessary the test</p>
		<hr>
		</div>
		
		<img src="images/test_alert.jpg" class="img-fluid img-thumbnail bg-info">
	</div>
	<?php
}else{
?>
<div class="container">	
<ul class="nav nav-tabs" id="myTab" role="tablist">
	<?php
	require 'connect.php';
	$mod=mysqli_query($db,"SELECT * FROM test_css_variant");
	while($jol=mysqli_fetch_array($mod))
			{
	?>
  <li class="nav-item">
    <a class="nav-link <?php if ($jol['nomer_variant']==1) echo 'active'; else echo ''; ?>" id="tab<?php echo $jol['nomer_variant'];?>" data-toggle="tab" href="#module<?php echo $jol['nomer_variant'];?>" role="tab" aria-controls="module<?php echo $jol['nomer_variant'];?>" aria-selected="<?php if($jol['nomer_variant']==1) echo 'true'; else echo 'false'?>">Module <?php echo $jol['nomer_variant'];?></a>
  </li>
<?php
}
?>
</ul>
<div class="tab-content" id="myTabContent">
<?php $mods=mysqli_query($db,"SELECT * FROM test_css_variant");
while($str=mysqli_fetch_array($mods))
{$nomer_variant=$str['nomer_variant'];
	?>
 <div class="tab-pane fade <?php  if($str['nomer_variant']==1) echo 'show active'; else echo '';?>" id="module<?php echo $str['nomer_variant'];?>" role="tabpanel" aria-labelledby="tab<?php echo $jol['nomer_variant'];?>">
 <form method="POST" action="test_css_result.php">
 	<input type="hidden" name="nomer_variant" value="<?php echo $nomer_variant;?>">
<?php

$data=mysqli_query($db, "SELECT * FROM test_css_question WHERE nomer_variant='$nomer_variant' ORDER BY nomer_question ASC");
echo "<h2 class='text-success'>Module ".$nomer_variant."</h2><br>";
while($question=mysqli_fetch_array($data))
{
?>
<span>
	<b>
		<?php echo $question['nomer_question'].")  ".$question['question']?>			
		</b>
	</span>
	<br>
	<br>
<?php
$nomer_question=$question['nomer_question'];
$answers=mysqli_query($db,"SELECT * FROM test_css_answer WHERE nomer_variant='$nomer_variant' AND nomer_question='$nomer_question'");
while($answer=mysqli_fetch_array($answers))
{
	$number_question="question".$nomer_question;
?>
	<p>
		<label class="mycontainer"><?php echo $answer['answer'];?>
			<input name="<?php echo $number_question;?>" type="radio" value="<?php echo $answer['variant_answer'];?>">
			<span class="mycheckmark"></span> 
		</label>
	</p>
<?php
}
}

?>
<BUTTON class="btn btn-success" type="submit" name="answer">ANSWER</BUTTON>
	</form>
 </div>
 <?php
}
?>	
</div>
</div>
<!-----------------content--------------->
<?php
mysqli_close($db);
}

 require_once 'footer.php';

?>