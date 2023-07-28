<?php 
////////////////////////////////////////////////////////////////////////////////////
require "header.php";
?>
<div class="container">

<a href="keyterms_java_add.php" class="btn btn btn-info my-5">ADD NEW KEYTERMS</a>
<table class="table table-sm table-responsive-sm table-striped table-bordered "  id="dataTable"  >
  <thead class="thead-dark">
  <tr>
    <td>Kazakh</td>
    <td>Russian</td>
    <td>English</td>
    <td>Delete</td>
    <td>Edit</td>
  </tr>   
  </thead>
  <tbody>
  	<?php
  	require '../connect.php';;
  	$result=mysqli_query($db,"SELECT * FROM keyterms_java ORDER BY kaz DESC");
  	while($row=mysqli_fetch_array($result)){
  	?>
  	<tr>
  	<td><?php echo $row['kaz'];?></td>
  	<td><?php echo $row['rus'];?></td>
  	<td><?php echo $row['eng'];?></td>
  	<td>
  		<form method="POST" action="keyterms_java_delete.php">
  			<input type="hidden" name="id" value="<?php echo $row['id'];?>">
  			<button type="submit" class="btn btn-danger btn-sm">DELETE</button>
  		</form>
  			
  		</td>
  	<td>
  		<form method="POST" action="keyterms_java_edit.php">
  			<input type="hidden" name="id" value="<?php echo $row['id'];?>">
  			<button type="submit" class="btn btn-info px-3 btn-sm">EDIT</button>
  		</form>
  			
  		</td>
  </tr>
  	<?php
    }
  	?>
  </tbody>
</table>  
</div>
<?php 
////////////////////////////////////////////////////////////////////////////////////
require "footer.php";
?>