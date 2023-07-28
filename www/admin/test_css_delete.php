<?php 
require_once 'admin_only.php';

if(isset($_POST['delete']))
{
	$id=$_POST['fordel'];
	require '../connect.php';
	$data=mysqli_query($db,"SELECT * FROM test_css_question WHERE nomer_variant='$id'");
	while($r=mysqli_fetch_array($data))
  	{
		$nomer_question=$r['nomer_question'];
		$d=mysqli_query($db,"SELECT * FROM test_css_answer WHERE  nomer_variant='$id'");
		while($row=mysqli_fetch_array($d))
		{
			mysqli_query($db,"DELETE FROM test_css_answer WHERE  nomer_variant='$id'");
		}
    mysqli_query($db,"DELETE FROM test_css_question WHERE  nomer_variant='$id'");
	}
  mysqli_query($db,"DELETE FROM test_css_variant WHERE nomer_variant='$id'");
	mysqli_close($db);	
}
require_once 'header.php';?>
<div class="container">
 <br>
  <div class="row">
  <div class="col-lg-3 col-sm-12 my-1">
    <a href="test_css_add.php" style="text-decoration: none;">
      <span class="btn btn-success btn-block">ADD QUESTION</span>
    </a>
  </div>
  <div class="col-lg-3 col-sm-12 my-1">
    <a href="test_css_delete.php"  style="text-decoration: none;">
      <span class="btn btn-danger btn-block">DELETE QUESTION</span>
    </a>
  </div>
  <div class="col-lg-3 col-sm-12 my-1">
    <a href="test_css_edit.php"  style="text-decoration: none;">
      <span class="btn btn-info btn-block">EDIT QUESTION</span>
    </a>
  </div>  

  <div class="col-lg-3 col-sm-12 my-1">
    <span class="btn btn-dark btn-block" data-toggle="modal" data-target="#addmodule">DELETE MODULE  &emsp;   <span class="badge badge-danger">&times; </span></span>
  </div>  
 </div><br><h3 class="text-danger">Delete question</h3>
<div class="modal fade" id="addmodule" tabindex="-1" role="dialog" aria-labellebdy="addmodule" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-success" id="exampleModalLabel">Delete module</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				<span aria-hidden="true">&times;</span>
			</div>
			<div class="modal-body">
			<div >	
			<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Warning!</h4>
  <p>This action removes all the tests included in the module that you want to remove!</p>
  <hr>
  
</div>			
<table class="table table-striped table-bordered ">
  <thead class="thead-dark">
    <tr>      
      <th scope="col">Modules</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>	
  <tbody>
  	<?php
  	require '../connect.php';
  	$m=mysqli_query($db,"SELECT * FROM test_css_variant");
  	while ($r=mysqli_fetch_array($m)) {
  		?>
  		<tr>
  			<td><?php echo "Module №".$r['nomer_variant'];?></td>
  			<td class="text-center">
  				<form method="POST">
  					<input type="hidden" name="fordel" value="<?php echo $r['nomer_variant'];?>"> 
  					<button class="btn  btn-danger btn-sm" type="submit" name="delete">DELETE</button>
  				</form>
  			</td>
  		</tr>
  		<?php
  	 } 
  	?>
  	
  </tbody>
</table>
			</div>	
			</div>			
		</div>
	</div>
</div>
  
  <select class="variants_for_del form-control">
    <option>--Choose module--</option>
  <?php
require_once '../connect.php';
$data=mysqli_query($db,"SELECT * FROM test_css_variant");
while ($row=mysqli_fetch_array($data)) {
  echo "<option value='".$row['nomer_variant']."'>Module ".$row['nomer_variant']."</option>";
}
  ?>
</select><br>
  <span class="ajax_variant_del"></span>


</div>
</div>
<?php require_once 'footer.php';?>