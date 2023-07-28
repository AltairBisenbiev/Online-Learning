<?php
require_once 'admin_only.php';

if (isset($_POST['delete']))
{
	$id=$_POST['id'];
	require '../connect.php';
	mysqli_query($db,"DELETE FROM users WHERE id='$id'");
	mysqli_close($db);
}
require_once 'header.php';
?>
<div class="container my-5">
	<table class="table table-bordered table-striped table-responsive-sm" id="dataTable" >
		<thead class="bg-dark">
			<tr class="text-center text-light">
				<th>№</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Password</th>
				<th>Action</th>				
			</tr>			
		</thead>
		<tbody>		
				<?php
					require '../connect.php';
					$data=mysqli_query($db,"SELECT * FROM users");
					$i=1;
					while($row=mysqli_fetch_array($data))
					{
						?>
						<tr>
							<td><?php echo $i++;?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['surname'];?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['password'];?></td>
							<td class="text-center">
								<form method="POST">
								<input type="hidden" name="id" value="<?php echo $row['id'];?>">
								<button type="submit" name="delete" class="btn btn-danger btn-sm">DELETE</button>							
								</form>
							</td>
						</tr>
						<?php
					}
					mysqli_close($db);
				?>
		</tbody>		
	</table>
</div>



<?php
require_once 'footer.php';
?>