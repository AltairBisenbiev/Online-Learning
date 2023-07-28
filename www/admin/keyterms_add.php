<?php
if(isset($_POST['add']))
{
	$disp="";
	if($_POST['disp']=='java') $disp='keyterms_java';
	else if($_POST['disp']=='html') $disp='keyterms_html';
	else if($_POST['disp']=='css') $disp='keyterms_css';
	else $disp='keyterms_cdb';
	for($i=1; $i<=10; $i++){
		$kaz=trim($_POST["kaz".$i]);
		$rus=trim($_POST["rus".$i]);
		$eng=trim($_POST["eng".$i]);
		if(($kaz!='')&&($rus!='')&&($eng!='')){
			require '../connect.php';
			$query="INSERT INTO ".$disp." (kaz,rus,eng) VALUES ('$kaz','$rus','$eng')";
			mysqli_query($db,$query) or die(mysqli_error($db));
			mysqli_close($db);
		}		
	}
	echo "<script type='text/javascript'>alert('New data have add!');</script>";
}
/////////////////////////////////////////////////////////////////////////////////////
require_once 'header.php';
?>
<div class="container">
<table class="table table-responsive-lg table-bordered table-striped my-5">
		<thead class="bg-dark">
			<tr class="text-center text-light">
				<th>№</th>
				<th>Kazakh</th>
				<th>Russian</th>
				<th>English</th>							
			</tr>			
		</thead>
		<tbody>	
			<form method="POST">
				<input type="hidden" name="disp" value="<?php echo $_GET['dis'];?>">
			<?php
			for ($i=1; $i<=10; $i++)
			{
				?>
				<tr class="text-center">
					<td>
						<?php echo $i;	?>							
					</td>
					<td>
						<textarea class="form-control" name="<?php echo 'kaz'.$i; ?>" row=3 placeholder="Қазақша аудармасы" col="7"> 
						</textarea>
					</td>
					<td>
						<textarea class="form-control" name="<?php echo 'rus'.$i; ?>" row=3 placeholder="Русский перевод"> </textarea>
					</td>
					<td>
						<textarea class="form-control" name="<?php echo 'eng'.$i; ?>" row=3 placeholder="English"> 
						</textarea>
					</td>
					
				</tr>
				<?php
			}
			?>
		
		</tbody>
		</table>
		<button class="btn btn-success px-5" name="add" type="submit">ADD NEW TERMS</button>

	</form>	
</div>
<?php
require_once 'footer.php';
?>