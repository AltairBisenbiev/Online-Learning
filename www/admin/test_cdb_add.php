<?php
require_once 'admin_only.php';

if (isset($_POST['save']))
{
	if(isset($_POST['nomer_variant'])) $nomer_variant=intval($_POST['nomer_variant']);
	if(isset($_POST['nomer_question'])) $nomer_question=intval($_POST['nomer_question']);
	if(isset($_POST['question'])) $question=$_POST['question'];
	if(isset($_POST['answer'])) $correct=$_POST['answer'];
	//echo $correct;
	require_once '../connect.php';
 	$data=mysqli_query($db,"SELECT * FROM test_cdb_question WHERE nomer_variant='$nomer_variant' AND nomer_question='$nomer_question' ") or die (mysql_error());
	$record=mysqli_num_rows($data);
if ($record<1){
	//echo $question.'  '.$nomer_variant.'  '.$nomer_question;	
	mysqli_query($db,"INSERT INTO test_cdb_question (nomer_variant,nomer_question,question) VALUES ('$nomer_variant','$nomer_question','$question')") or die(mysqli_error($db));
	
$correctTo=0;
	
		if(isset($_POST['answer_1'])) 
		{
			$answer_1=$_POST['answer_1'];
			$variant_1=$_POST['variant_1'];
			//echo $answer_1.'  '.$variant_1.'<br>';
			if($correct==1) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"INSERT INTO test_cdb_answer (nomer_variant,nomer_question,variant_answer,answer,correct) VALUES ('$nomer_variant','$nomer_question','$variant_1','$answer_1','$correctTo')") or die(mysqli_error($db));
		}
		if(isset($_POST['answer_2'])) 
		{
			$answer_2=$_POST['answer_2'];
			$variant_2=$_POST['variant_2'];
			//echo $answer_2.'  '.$variant_2.'<br>';
			if($correct==2) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"INSERT INTO test_cdb_answer (nomer_variant,nomer_question,variant_answer,answer,correct) VALUES ('$nomer_variant','$nomer_question','$variant_2','$answer_2','$correctTo')") or die(mysqli_error($db));
		}
		if(isset($_POST['answer_3'])) 
		{
			$answer_3=$_POST['answer_3'];
			$variant_3=$_POST['variant_3'];
			//echo $answer_3.'  '.$variant_3.'<br>';
			if($correct==3) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"INSERT INTO test_cdb_answer (nomer_variant,nomer_question,variant_answer,answer,correct) VALUES ('$nomer_variant','$nomer_question','$variant_3','$answer_3','$correctTo')") or die(mysqli_error($db));
		}
		if(isset($_POST['answer_4'])) 
		{
			$answer_4=$_POST['answer_4'];
			$variant_4=$_POST['variant_4'];
			//echo $answer_4.'  '.$variant_4.'<br>';
			if($correct==4) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"INSERT INTO test_cdb_answer (nomer_variant,nomer_question,variant_answer,answer,correct) VALUES ('$nomer_variant','$nomer_question','$variant_4','$answer_4','$correctTo')") or die(mysqli_error($db));
		}
		if(isset($_POST['answer_5'])) 
		{
			$answer_5=$_POST['answer_5'];
			$variant_5=$_POST['variant_5'];
			//echo $answer_5.'  '.$variant_5.'<br>';
			if($correct==5) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"INSERT INTO test_cdb_answer (nomer_variant,nomer_question,variant_answer,answer,correct) VALUES ('$nomer_variant','$nomer_question','$variant_5','$answer_5','$correctTo')") or die(mysqli_error($db));
		}
		if(isset($_POST['answer_6'])) 
		{
			$answer_6=$_POST['answer_6'];
			$variant_6=$_POST['variant_6'];
			//echo $answer_6.'  '.$variant_6.'<br>';
			if($correct==6) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"INSERT INTO test_cdb_answer (nomer_variant,nomer_question,variant_answer,answer,correct) VALUES ('$nomer_variant','$nomer_question','$variant_6','$answer_6','$correctTo')");
		}
		if(isset($_POST['answer_7'])) 
		{
			$answer_7=$_POST['answer_7'];
			$variant_7=$_POST['variant_7'];
			//echo $answer_7.'  '.$variant_7.'<br>';
			if($correct==7) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"INSERT INTO test_cdb_answer (nomer_variant,nomer_question,variant_answer,answer,correct) VALUES ('$nomer_variant','$nomer_question','$variant_7','$answer_7','$correctTo')");
		}
		if(isset($_POST['answer_8'])) 
		{
			$answer_8=$_POST['answer_8'];
			$variant_8=$_POST['variant_8'];
			//echo $answer_8.'  '.$variant_8.'<br>';
			if($correct==8) $correctTo=1; else $correctTo=0;
			mysqli_query($db,"INSERT INTO test_cdb_answer (nomer_variant,nomer_question,variant_answer,answer,correct) VALUES ('$nomer_variant','$nomer_question','$variant_8','$answer_8','$correctTo')");
		}
		mysqli_close($db);
	}else
	{
		echo "<script type='text/javascript'>alert('The question with such number of the module and a question is already to a database!');</script>";
	}
}  

require_once 'header.php';
?>
<div class="container">
	<br>
 <div class="row">
 	<div class="col-lg-3 col-sm-12 my-1">
 		<a href="test_cdb_add.php" style="text-decoration: none;">
 			<span class="btn btn-success btn-block">ADD QUESTION</span>
 		</a>
 	</div>
 	<div class="col-lg-3 col-sm-12 my-1">
 		<a href="test_cdb_delete.php"  style="text-decoration: none;">
 			<span class="btn btn-danger btn-block">DELETE QUESTION</span>
 		</a>
 	</div>
 	<div class="col-lg-3 col-sm-12 my-1">
 		<a href="test_cdb_edit.php"  style="text-decoration: none;">
 			<span class="btn btn-info btn-block">EDIT QUESTION</span>
 		</a>
 	</div> 	
 	<div class="col-lg-3 col-sm-12 my-1">
 		<span class="btn btn-dark btn-block" data-toggle="modal" data-target="#addmodule">ADD NEW MODULE  &emsp; 	<span class="badge badge-danger">+</span></span>
 	</div> 	
 </div>
 <br><br>
<div class="modal fade" id="addmodule" tabindex="-1" role="dialog" aria-labellebdy="addmodule" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title text-success" id="exampleModalLabel">Add new module</h3>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				<span aria-hidden="true">&times;</span>
			</div>
			<div class="modal-body">
			<div >				
				<div class="form-group">
					<form method="GET" action="test_cdb_add_module.php">
					<label for="email" required>Module number</label>
					<input type="text" name="module" class="form-control" id="module" aria-describdy="emailhelp" placeholder="Enter module number">					
				</div>							
				<button type="submit" name="add" class="btn btn-success">ADD NEW MODULE</button>
			</form>
			</div>	
			</div>			
		</div>
	</div>
</div>


	<h3 class="text-success">Add new question to database</h4>

<form method="POST" >
	<div class="form-row">
		<div class="col">
			<div class="form-group">
		<label for="nomer-variant">Number of module</label>
		<input class="form-control" type="text" name="nomer_variant" placeholder="" aria-describdy="help1" required>
		<small id="help1" class="form-text text-muted">Enter number of module</small>		
	</div>
</div>

<div class="col">
			<div class="form-group">
		<label for="nomer-question">Number of question</label>
		<input class="form-control" type="text" name="nomer_question" placeholder="" aria-describdy="help2" required>
		<small id="help2" class="form-text text-muted">Enter number of question</small>		
	</div>
</div>
</div>

<div class="form-group">
		<label for="question">Question</label>
		<input class="form-control" type="text" name="question" placeholder="" aria-describdy="help3" required>
		<small id="help3" class="form-text text-muted">Enter the text of question</small>		
	</div>
<!----------------------->
	<div class="form-group">
		<label for="question">Variant A</label>
		<input class="form-control" type="text" name="answer_1" placeholder="" aria-describdy="help3" required>
		<small id="help3" class="form-text text-muted">Enter the text of answer for Variant A</small>
		<input type="hidden" name="variant_1" value="A">		
	</div>
	<div class="form-group">
		<label for="question">Variant B</label>
		<input class="form-control" type="text" name="answer_2" placeholder="" aria-describdy="help3" required>
		<small id="help3" class="form-text text-muted">Enter the text of answer for Variant B</small>	
		<input type="hidden" name="variant_2" value="B">		

	</div>
<span name='form_inner' id='form_inner'>
</span>
<!----------------------->
<div class="form-group">
		<label for="question">Choose correct answer</label>

	</div>

<label class="mycontainer">A
	<input  type="radio" name="answer" value="1" checked="checked">
	<span class="mycheckmark"></span>
</label>


<label class="mycontainer">B
	<input  type="radio" name="answer" value="2">
	<span class="mycheckmark">
</label>
<span name='form_inner2' id='form_inner2'></span>

		<br><br>
		<input type="button" class="btn btn-secondary" value="ADD ANSWER" id="addAnswer">
		<input type="button" class="btn btn-danger" value="REMOVE ANSWER" id="remAnswer">
		<button type="submit" name="save" class="btn btn-success">SAVE AS NEW QUESTION</button>
		

</form>
</div>
<?php require_once 'footer.php';?>