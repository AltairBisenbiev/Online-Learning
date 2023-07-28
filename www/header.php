<!DOCTYPE html>
<html lang="en">
<head>
	<title>School</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="FontAwesome/css/all.css"/>
	<link rel="shortcut icon" href="images/favicon.ico" />
</head> 
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark sticky-top mb-4">
	<a href="index.php">
			<img src="images/logo-long.png" width="150px" alt="logo">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a href="index.php" class="nav-link <?php $x = $_SERVER[PHP_SELF]; if(basename($x)=='index.php') echo 'active';  ?> ">Home</a>				
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle 
				<?php 
				$cd = $_SERVER[PHP_SELF];
				$cdpath=basename($cd); 
					if(($cdpath=='lessons_cdb.php')||($cdpath=='test_cdb.php')||($cdpath=='keyterms_cdb.php'))
					 echo 'active';
				   ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-toggle="tooltip" data-placement="bottom" title="Computers and Digital Basics">Computers and DB</span></a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="lessons_cdb.php?punct=cdb0101">Lessons </a>
					<a class="dropdown-item" href="test_cdb.php">Tests</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item mbot" href="keyterms_cdb.php">Key Terms</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle
				<?php 
				$cpp = $_SERVER[PHP_SELF];
				$cpppath=basename($cpp); 
					if(($cpppath=='lessons_cpp.php')||($cpppath=='test_cpp.php')||($cpppath=='keyterms_cpp.php'))
					 echo 'active';
				   ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">C++</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="lessons_cpp.php?punct=cpp0101">Lessons</a>
					<a class="dropdown-item" href="test_cpp.php">Tests</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item mbot" href="keyterms_cpp.php">Key Terms</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle
				<?php 
				$html = $_SERVER[PHP_SELF];
				$htmlpath=basename($html); 
					if(($htmlpath=='lessons_html.php')||($htmlpath=='test_html.php')||($htmlpath=='keyterms_html.php'))
					 echo 'active';
				   ?>" " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HTML</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="lessons_html.php?punct=html0101">Lessons</a>
					<a class="dropdown-item" href="test_html.php">Tests</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item mbot" href="keyterms_html.php">Key Terms</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle
				<?php 
				$css = $_SERVER[PHP_SELF];
				$csspath=basename($css); 
					if(($csspath=='lessons_css.php')||($csspath=='test_css.php')||($csspath=='keyterms_css.php'))
					 echo 'active';
				   ?>" " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CSS</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="lessons_css.php?punct=css0101">Lessons</a>
					<a class="dropdown-item" href="test_css.php">Tests</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item mbot" href="keyterms_css.php">Key Terms</a>
				</div>
			</li>
			
			<li class="nav-item">
				<a href="contacts.php" class="nav-link
				<?php
				$cont=$_SERVER[PHP_SELF];
				$contPath=basename($cont);
				if($contPath=='contacts.php')
				echo 'active';
				?>" >Contacts</a>				
			</li>	
			<li class="nav-item">
				<a href="aboutus.php" class="nav-link 
				<?php
				$ab=$_SERVER[PHP_SELF];
				$abPath=basename($ab);
				if($abPath=='aboutus.php')
				echo 'active';
				?>" >About us</a>				
			</li>		
		</ul>
		<form  class="form-inline my-2 my-lg-0">
			<?php if (empty($_COOKIE['username'])){ ?>
			<span class="btn btn-success my-2 mr-sm-2" data-toggle="modal" data-target="#exampleModal2">Sign in</span>	
			<span class="btn btn-outline-success my-2 mr-sm-2"  data-toggle="modal" data-target="#exampleModal">Sign up</span>
		<?php }else {?>
			<a href="cabinet.php"><span class="btn btn-success my-2 mr-sm-2" ><?php echo '<i class="fas fa-user-circle"></i> '.$_COOKIE['username']?></span></a>
			<a href="exit.php"><span class="btn btn-outline-success my-2 mr-sm-2" >Exit <i class="fas fa-sign-out-alt"></i></span></a>
		<?php }?>
		</form>
	</div>	
</nav>
<div class="wrapper">
<div class="content">