<?php
require_once 'admin_only.php';
 require_once 'header.php';?>
<div class="container">
 <br> 
 <div class="row">
  <div class="col-lg-4 col-sm-12 my-1">
    <a href="test_cdb_add.php" style="text-decoration: none;">
      <span class="btn btn-success btn-block">ADD QUESTION</span>
    </a>
  </div>
  <div class="col-lg-4 col-sm-12 my-1">
    <a href="test_cdb_delete.php"  style="text-decoration: none;">
      <span class="btn btn-danger btn-block">DELETE QUESTION</span>
    </a>
  </div>
  <div class="col-lg-4 col-sm-12 my-1">
    <a href="test_cdb_edit.php"  style="text-decoration: none;">
      <span class="btn btn-info btn-block">EDIT QUESTION</span>
    </a>
  </div>  
</div><br>
<h3 class="text-info">Edit questions</h3>
  <select class="test_cdb_edit form-control">
  	<option>--Choose module--</option>
  <?php
require_once '../connect.php';
$data=mysqli_query($db,"SELECT * FROM test_cdb_variant");
while ($row=mysqli_fetch_array($data)) {
	echo "<option value='".$row['nomer_variant']."'>Module ".$row['nomer_variant']."</option>";
}
  ?>
</select><br>
  <span class="test_cdb_edit_ajax"></span>


</div>
</div>
<?php require_once 'footer.php';?>