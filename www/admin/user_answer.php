<?php
require_once 'admin_only.php';

if(isset($_POST['admin_answer']))
{
  $to=$_POST['email'];
  $answer=$_POST['text_answer'];
  mail($to, "Answer to you question", $answer);
  echo "<script type='text/javascript'>alert('Message submitted'); window.location.href = 'index.php';
</script>";
}
require_once 'header.php';
?>
<div class="container">
<div class="row">
	<div class="col-lg-3 col-sm-12"></div>
	<div class="col-lg-6 col-sm-12 border mt-5">
		
			<div style="background-color: #ECF0F1; height: 95%;" class=" m-1 p-3 my-3" >
				<h2 class="text-success text-center my-4 mt-4">Answer to user</h2>
				<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Message</h4>
  <?php
  require '../connect.php';
  $id=$_POST['id'];
  $data=mysqli_query($db,"SELECT * FROM message WHERE id='$id'");
  $row=mysqli_fetch_array($data);  
  ?>
  <p><br><?php echo $row['message'];?></p>
  <hr>
  <p class="mb-0">&copy;   <?php echo $row['name'];?></p>  
</div>
<div class="form-group">
  <form method="POST">
            <label for="message" class="h4 ">You answer</label>
            <input type="hidden" name="email" value="<?php echo $row['email']?>">
            <textarea name="text_answer"class="form-control" rows="5" placeholder="Enter your message" required></textarea>
        </div>
        <button type="submit" name="admin_answer"  class="btn btn-success btn-lg pull-right mt-3 px-5">Answer</button>
</form>
	</div>

</div>	
</div>
<?php
require_once 'footer.php';
?>