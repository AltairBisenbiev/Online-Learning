</div>
</div> 
<!-----------------------Sign in-------------------------------------->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labellebdy="exampleModal2" aria-hidden="true">
	<div class="modal-dialog" role="document"> 
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sign in <i class="far fa-sign-in-alt"></i></h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				<i class="far fa-times"></i>
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
				<h5 class="modal-title" id="exampleModalLabel">Form registration <i class="fas fa-user-plus" style="font-size: 0.85rem !important" style="margin-bottom: : 0 !important" ></i></h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				<i class="far fa-times"></i>
			</div>
			<div class="modal-body">
			<div id="formsignup" >
				<div class="row">
				<div class="form-group col-lg-6 col-sm-12">
					<label for="name">Name</label>
					<input  type="text" name="name" class="form-control" id="name" aria-describdy="namehelp" placeholder="Name" required>
					<small id="namehelp" class="form-text text-muted">Enter your name</small>
				</div>
				<div class="form-group col-lg-6 col-sm-12">
					<label for="surname">Surname</label>
					<input type="text" name="surname" class="form-control" id="surname" aria-describdy="surnamehelp" placeholder="Surname" required>
					<small id="surnamehelp" class="form-text text-muted">Enter your surname</small>
				</div>
				</div>
				<div class="form-group">
					<label for="email">Email addess</label>
					<input type="email" name="email" class="form-control" id="email" aria-describdy="emailhelp" placeholder="Sample@example.com" required>
					<small id="emailhelp" class="form-text text-muted">Enter your email</small>
				</div>
				<div class="form-group">
					<label for="passwors">Password</label>
					<input type="password" name="password" class="form-control" id="password" aria-describdy="passwordhelp" placeholder="password" required>
					<small id="passwordhelp" class="form-text text-muted">The password must contain at least 8 and no more than 15 characters</small>
				</div>
				<div class="form-group">
					<label for="passwors">Confirm password</label>
					<input type="password" name="password1" class="form-control" id="password1" aria-describdy="passwordhelp" placeholder="Password Repeat" required>
					<small id="passwordhelp" class="form-text text-muted">Repeat password</small>
				</div>
				<div class="row form-group">
					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
						<label for="grade" >Grade</label>
						<select name="grade" class="form-control" id="grade" required="required">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
					</div>
					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
						<label for="letter">Class</label>
						<select name="letter" class="form-control" id="letter" required="required">
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
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
<br><br>
</div>
<div class="container-fluid bg-dark footer">
	<div class="container">
	<div class="row" style="color: #fff;">
		<div class="col-lg-4 col-sm-6 ">
			<br>
			<h5 >Contacts <i class="far fa-phone-office"></i></i></i></h5><br>
			<b>Phone number:</b>
			<span>+7(7142) 22-23-24</span>
			<br><br>
			<b>Mobilephone:</b>
			<span>+7(775) 838-35-43</span>
			<br><br><br>
			<div class="dropdown-divider"></div>
			<br><br>
		</div>
		
		<div class="col-lg-4 col-sm-6 ">
			<br>
			<h5 >Adress <i class="far fa-city"></i></h5><br>
			<b>Adress:</b>
			<span>Zhanaozen city</span>
			<br><br>
			<b></b>
			<span></span>
			<br><br><br>
			<div class="dropdown-divider"></div>
			<br><br>
		</div>
<div class="col-lg-4 col-sm-6 ">
			<br>
			<h5 >Lessons <i class="far fa-chalkboard-teacher"></i></h5><br>
			<a class="flink" href="lessons_cdb.php?punct=html0101"><span>Computer and DB</span></a>
			<br>
			<a class="flink" href="lessons_html.php?punct=html0101"><span>HTML</span></a>
			<br>
			<a class="flink" href="lessons_css.php?punct=css0101"><span>CSS</span></a>
			<br>
			<a class="flink" href="lessons_cpp.php?punct=cpp0101"><span>C++</span></a>
			<br><br>
			<div class="dropdown-divider"></div>
			<br><br>
		</div>	
	</div>
	</div>
</div>


<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="DataTables/datatables.min.js"></script>
<script src="js/script.js"></script>
<script src="FontAwesome/js/all.js"></script>
</body>
</html>