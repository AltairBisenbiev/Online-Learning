<?php 
require_once 'admin_only.php';

if (isset($_POST['save']))
{
	if(isset($_POST['nomer_variant'])) $nomer_variant=$_POST['nomer_variant'];
	if(isset($_POST['nomer_question'])) $nomer_question=$_POST['nomer_question'];
	if(isset($_POST['question'])) $question=$_POST['question'];
	if(isset($_POST['correct'])) $correct=$_POST['correct'];
	//echo $correct;
	require_once '../connect.php';
	$nomer_question=$_POST['nomer_question'];
	$nomer_variant=$_POST['nomer_variant'];
	mysqli_query($db,"UPDATE test_css_question SET question='$question' WHERE nomer_variant='$nomer_variant' AND nomer_question='$nomer_question' ");
	$correctTo=0;
	
		if(isset($_POST['answer_1'])) 
		{
			$answer_1=$_POST['answer_1'];
			$variant_1=$_POST['variant_1'];
			//echo $answer_1.'  '.$variant_1.'<br>';
			if($correct==1) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"UPDATE test_css_answer SET answer='$answer_1',correct='$correctTo'  WHERE id='$variant_1'  ");
		}
		if(isset($_POST['answer_2'])) 
		{
			$answer_2=$_POST['answer_2'];
			$variant_2=$_POST['variant_2'];
			//echo $answer_2.'  '.$variant_2.'<br>';
			if($correct==2) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"UPDATE test_css_answer SET answer='$answer_2',correct='$correctTo'  WHERE id='$variant_2' ");
		}
		if(isset($_POST['answer_3'])) 
		{
			$answer_3=$_POST['answer_3'];
			$variant_3=$_POST['variant_3'];
			//echo $answer_3.'  '.$variant_3.'<br>';
			if($correct==3) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"UPDATE test_css_answer SET answer='$answer_3',correct='$correctTo'   WHERE id='$variant_3'  ");
		}
		if(isset($_POST['answer_4'])) 
		{
			$answer_4=$_POST['answer_4'];
			$variant_4=$_POST['variant_4'];
			//echo $answer_4.'  '.$variant_4.'<br>';
			if($correct==4) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"UPDATE test_css_answer SET answer='$answer_4',correct='$correctTo'   WHERE id='$variant_4'  ");
		}
		if(isset($_POST['answer_5'])) 
		{
			$answer_5=$_POST['answer_5'];
			$variant_5=$_POST['variant_5'];
			//echo $answer_5.'  '.$variant_5.'<br>';
			if($correct==5) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"UPDATE test_css_answer SET answer='$answer_5',correct='$correctTo'  WHERE id='$variant_5'  ");
		}
		if(isset($_POST['answer_6'])) 
		{
			$answer_6=$_POST['answer_6'];
			$variant_6=$_POST['variant_6'];
			//echo $answer_6.'  '.$variant_6.'<br>';
			if($correct==6) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"UPDATE test_css_answer SET answer='$answer_6',correct='$correctTo'  WHERE id='$variant_6' ");
		}
		if(isset($_POST['answer_7'])) 
		{
			$answer_7=$_POST['answer_7'];
			$variant_7=$_POST['variant_7'];
			//echo $answer_7.'  '.$variant_7.'<br>';
			if($correct==7) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"UPDATE test_css_answer SET answer='$answer_7',correct='$correctTo'   WHERE id='$variant_7' ");
		}
		if(isset($_POST['answer_8'])) 
		{
			$answer_8=$_POST['answer_8'];
			$variant_8=$_POST['variant_8'];
			//echo $answer_8.'  '.$variant_8.'<br>';
			if($correct==8) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"UPDATE test_css_answer SET answer='$answer_8',correct='$correctTo'  WHERE id='$variant_8'  ");
		}
		mysqli_close($db);
		echo "<script type='text/javascript'>window.location.href = 'test_css_edit.php';</script>";;

}
require_once 'header.php';?>
<div class="container">
 <br>
 <div class="row">
 	<div class="col-lg-4 col-sm-12 my-1">
 		<a href="test_css_add.php" style="text-decoration: none;">
 			<span class="btn btn-success btn-block">ADD QUESTION</span>
 		</a>
 	</div>
 	<div class="col-lg-4 col-sm-12 my-1">
 		<a href="test_css_delete.php"  style="text-decoration: none;">
 			<span class="btn btn-danger btn-block">DELETE QUESTION</span>
 		</a>
 	</div>
 	<div class="col-lg-4 col-sm-12 my-1">
 		<a href="test_css_edit.php"  style="text-decoration: none;">
 			<span class="btn btn-info btn-block">EDIT QUESTION</span>
 		</a>
 	</div> 	
 </div>
 
 <br>
 <h3 class="text-info">Editing question</h3>
 
  <?php
require_once '../connect.php';
$variant=$_POST['vid'];
$question=$_POST['qid'];

$data=mysqli_query($db,"SELECT * FROM test_css_question WHERE nomer_variant='$variant' AND nomer_question='$question'");
$row=mysqli_fetch_array($data);
?>
<form method="POST">
<div class="form-group">
	<label>Text of question</label>
	<input type="hidden" name="nomer_variant" value="<?php echo $variant; ?>">
	<input type="hidden" name="nomer_question" value="<?php echo $question; ?>">
	<input type="text" name="question" class="form-control" value="<?php echo $row['question'];  ?>">
	<small class="form-text text-muted">Enter the text of question</small>
</div>
<?php
$data2=mysqli_query($db,"SELECT * FROM test_css_answer WHERE nomer_variant='$variant' AND nomer_question='$question'");
$c=1;$d=1;
while ($row2=mysqli_fetch_array($data2)) {
	?>
	<div class="form-group">
		<label for="question">Variant <?php echo $row2['variant_answer'];?></label>
		<input class="form-control" type="text" name="answer_<?php echo $c++;?>" placeholder="" aria-describdy="help3" value="<?php echo $row2['answer'];?>" required>
		<input type="hidden" name="variant_<?php echo $d++;?>" value="<?php echo $row2['id'];?>">
		<small id="help3" class="form-text text-muted">Enter the text of answer for Variant <?php echo $row2['variant_answer'];?></small>
		
	</div>
	<?php

}	
$data2=mysqli_query($db,"SELECT * FROM test_css_answer WHERE nomer_variant='$variant' AND nomer_question='$question'");
$count=1;
while ($row2=mysqli_fetch_array($data2)) {
	?>
<label class="mycontainer">
	<input  type="radio" name="answer" value="<?php echo $count++; ?>" <?php if ($row2['correct']==1) echo 'checked';?>/><?php echo $row2['variant_answer'];?>
	<span class="mycheckmark"></span>
</label>
	<?php	
} ?>


<br><br>
<button type='submit' name='save' class='btn btn-info px-5'>SAVE</button>	
</form>

</div>
</div>
<?php require_once 'footer.php';?>