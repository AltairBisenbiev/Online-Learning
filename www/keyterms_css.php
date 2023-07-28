<?php
////////////////////////////////////////////////////////
require 'header.php';
?>
<div class="container">
<table class="table table-sm table-responsive-sm table-striped table-bordered  "  id="dataTable"  >
  <thead class="thead-dark bg-dark text-light">
  <tr>
    <td>Kazakh</td>
    <td>Russian</td>
    <td>English</td>
    
  </tr>   
  </thead>
  <tbody>
  	<?php
  	require 'connect.php';
  	
  	$result=mysqli_query($db,"SELECT * FROM keyterms_css ORDER BY kaz DESC");
  	while($row=mysqli_fetch_array($result)){
  	?>
  	<tr>
  	<td><?php echo $row['kaz'];?></td>
  	<td><?php echo $row['rus'];?></td>
  	<td><?php echo $row['eng'];?></td>

  </tr>
  	<?php
    }
  	?>
  </tbody>
</table>  	
</div>
<?php
///////////////////////////////////////////////////////////
require 'footer.php';
?>