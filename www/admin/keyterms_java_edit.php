<?php
if(isset($_POST['save'])){
	$kid=$_POST['kid'];
	$kazakh=$_POST['kaz'];
	$russian=$_POST['rus'];
	$english=$_POST['eng'];
	require '../connect.php';
	mysqli_query($db,"UPDATE keyterms_java SET kaz='$kazakh',rus='$russian',eng='$english' WHERE id='$kid'");
	mysqli_close($db);
	echo "<script type='text/javascript'>alert('Editing finish succesfully!'); window.location.href='keyterms_java.php';</script>";
}
/////////////////////////////////////////
require "header.php";
?>
<div class="container-fluid">
	<form method="POST">
	<div class="row my-5 mx-3 border">
	<?php
	require '../connect.php';
	$id=$_POST['id'];
	$result=mysqli_query($db,"SELECT * FROM keyterms_java WHERE id='$id'");
	$row=mysqli_fetch_array($result);
	?>
		<div class="col-lg-4 col-sm-12">
			<h2>Kazakh</h2>
            <textarea name="kaz" class="form-control" rows="5" placeholder="Enter your text" required> <?php echo $row['kaz'];?></textarea>
            
		</div>
		<div class="col-lg-4 col-sm-12">
	<h2>Russian</h2>

            <textarea  name="rus" class="form-control" rows="5" placeholder="Enter your text" required> <?php echo $row['rus'];?>  </textarea>
          
		</div>
		<div class="col-lg-4 col-sm-12">
					<h2>English</h2>

            <textarea  name="eng" class="form-control" rows="5" placeholder="Enter your text" required><?php echo $row['rus'];?>  </textarea>
           
		</div>
		<input type="hidden" name="kid" value="<?php echo $id;?>">
	<button type="submit" name="save" class="btn btn-success ml-3 my-3 px-5">SAVE</button>

	</form>		

	</div>
</div>

<?php
require "footer.php";
?>