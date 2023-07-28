<?php

require_once 'admin_only.php';


if (isset($_POST['delete']))
{
	$id=$_POST['id'];
	require '../connect.php';
	mysqli_query($db,"DELETE FROM message WHERE id='$id'");
	mysqli_close($db);
}

require_once 'header.php';
?>
<div class="container my-5 text-center">
	<table class="table table-bordered table-lg table-striped table-responsive-sm">
		<thead class="bg-dark">
			<tr class="text-center text-light">
				<th>№</th>
				<th>Name</th>
				<th>Email</th>
				<th>Message</th>
								<th>Answer</th>				

				<th>Deleting</th>
			</tr>			
		</thead>
		<tbody>		
				<?php
					require '../connect.php';
					$data=mysqli_query($db,"SELECT * FROM message");
					$i=1;
					while($row=mysqli_fetch_array($data))
					{
						?>
						<tr>
							<td><?php echo $i++;?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['message'];?></td>
							<td class="text-center">
								<form method="POST" action="user_answer.php">
								<input type="hidden" name="id" value="<?php echo $row['id'];?>">
								<button type="submit" name="answer" class="btn btn-info btn-sm">ANSWER</button>							
								</form>
							</td>
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