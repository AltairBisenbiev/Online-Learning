<?php
require_once 'admin_only.php';

require_once '../connect.php';
if (isset($_POST['link_edit']))
{
	$link=$_POST['link_edit'];	
		?>
	<table class="table table-striped table-bordered ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">№</th>
      <th scope="col">Question</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$datatable=mysqli_query($db,"SELECT * FROM test_java_question WHERE nomer_variant='$link'  ORDER BY nomer_question ASC");
  	while($rowtable=mysqli_fetch_array($datatable))
  	{
  	?>
    <tr>
      <th scope="row"><?php echo $rowtable['nomer_question'];?></th>
      <td ><?php echo $rowtable['question'];?></td>
      <td class="text-center">
        <form method="POST" action="test_java_editing.php">
      	<input type="hidden" name="vid" value="<?php echo $rowtable['nomer_variant'];?>">
      	<input type="hidden" name="qid" value="<?php echo $rowtable['nomer_question'];?>">
      	<button class="btn btn-danger" name="delete" type="submit">EDIT</button>      	
      </form>
    </td>
    </tr>
<?php }?>
  </tbody>
</table>
  </tbody>
</table>

<?php
	
}else{
echo $id."<-";
}

?>