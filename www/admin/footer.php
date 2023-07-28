<?php 

require  'admin_only.php';

?>
</div>
<!-----------------------Sign in-------------------------------------->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labellebdy="exampleModal2" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				<span aria-hidden="true">&times;</span>
			</div>
			<div class="modal-body">
			<div >				
				<div class="form-group">
					<label for="email" required>Email addess</label>
					<input type="email" name="mail" class="form-control" id="mail" aria-describdy="emailhelp" placeholder="Email">					
				</div>
				<div class="form-group">
					<label for="passwors">Password</label>
					<input type="password" name="pass" class="form-control" id="pass" aria-describdy="passwordhelp" placeholder="Password" required>					
				</div>			
				<button type="submit" name="signin" id="signin" class="btn btn-success">Log in</button>
			</div>	
			</div>			
		</div>
	</div>
</div>


<!-----------------------Sign up-------------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labellebdy="exampleModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form registration</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				<span aria-hidden="true">&times;</span>
			</div>
			<div class="modal-body">
			<div id="formsignup" >
				<div class="form-group">
					
					<label for="name">Name</label>
					<input  type="text" name="name" class="form-control" id="name" aria-describdy="namehelp" placeholder="Name" required>
					<small id="namehelp" class="form-text text-muted">Enter your name</small>
				</div>
				<div class="form-group">
					<label for="surname">Surname</label>
					<input type="text" name="surname" class="form-control" id="surname" aria-describdy="surnamehelp" placeholder="Surname" required>
					<small id="surnamehelp" class="form-text text-muted">Enter your surname</small>
				</div>
				<div class="form-group">
					<label for="email">Email addess</label>
					<input type="email" name="email" class="form-control" id="email" aria-describdy="emailhelp" placeholder="Email" required>
					<small id="emailhelp" class="form-text text-muted">Enter your email</small>
				</div>
				<div class="form-group">
					<label for="passwors">Password</label>
					<input type="password" name="password" class="form-control" id="password" aria-describdy="passwordhelp" placeholder="Password" required>
					<small id="passwordhelp" class="form-text text-muted">The password must contain at least 8 characters</small>
				</div>
				<div class="form-group">
					<label for="passwors">Password</label>
					<input type="password" name="password1" class="form-control" id="password1" aria-describdy="passwordhelp" placeholder="Password" required>
					<small id="passwordhelp" class="form-text text-muted">Repeat password</small>
				</div>
				<div class="row"><div class="col-6">
				<button type="submit" name="signup" id="signup"  class="btn btn-success">Sign up</button>
					</div>
					<div class="col-6">
						<span class="text-danger" id="error"></span><br>
					</div>

					
				</div>
			</div>	
			</div>			
		</div>
	</div>
</div>

<!---------------------------------------footer------------------->

</div>
<br><br><br><br><br>
<div class="container-fluid bg-dark   ">
	<div class="container">
	<div class="row" style="color: #fff;">
		<div class="col-12">
		
	<p class="text-center text-light"><br><br><br>Zhanaozen, &copy;2019</p>		
</div>
	</div>
	</div>
</div>


<script src="../js/jquery-3.2.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../DataTables/datatables.min.js"></script>
<script src="../js/script.js"></script>
<script src="../FontAwesome/js/all.js"></script>
</body>
</html>