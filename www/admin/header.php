<?php

require_once 'admin_only.php';
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../FontAwesome/css/all.css"/>
	<link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" />

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark sticky-top">
	<a href="../index.php">
			<img src="../images/admin.png" width="140px" alt="logo" class="img-fluid">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item 
			<?php
				$m=$_SERVER[PHP_SELF];
				$mpath=basename($m);
				if(($mpath=='index.php')||($mpath=='user_answer.php')) echo 'active';
			?>
				">
				<a href="index.php" class="nav-link"><i class="far fa-envelope"></i> Messages</a>				
			</li>
			<li class="nav-item dropdown
			<?php
				$cdb=$_SERVER[PHP_SELF];
				$cdbpath=basename($cdb);
				if(($cdbpath=='test_cdb_add.php')||($cdbpath=='test_cdb_delete.php')||($cdbpath=='test_cdb_edit.php')||($cdbpath=='test_cdb_editing.php')||($cdbpath=='keyterms_cdb.php')||($cdbpath=='keyterms_cdb_edit.php')||($cdbpath=='keyterms_cdb_add.php'))
				 echo 'active';
			?>
			">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-toggle="tooltip" data-placement="bottom" title="Computers and Digital Basics">Computers and DB</span></a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="test_cdb_add.php">Tests</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="keyterms_cdb.php">Key Terms</a>
				</div>
			</li>
			<li class="nav-item dropdown
			<?php
				$java=$_SERVER[PHP_SELF];
				$javapath=basename($java);
				if(($javapath=='test_java_add.php')||($javapath=='test_java_delete.php')||($javapath=='test_java_edit.php')||($javapath=='test_java_editing.php')||($javapath=='keyterms_java.php')||($javapath=='keyterms_java_edit.php')||($javapath=='keyterms_java_add.php'))
				 echo 'active';
			?>
			">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">C++</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="test_java_add.php">Tests</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="keyterms_java.php">Key Terms</a>
				</div>
			</li>
			<li class="nav-item dropdown
			<?php
				$html=$_SERVER[PHP_SELF];
				$htmlpath=basename($html);
				if(($htmlpath=='test_html_add.php')||($htmlpath=='test_html_delete.php')||($htmlpath=='test_html_edit.php')||($htmlpath=='test_html_editing.php')||($htmlpath=='keyterms_html.php')||($htmlpath=='keyterms_html_edit.php')||($htmlpath=='keyterms_html_add.php'))
				 echo 'active';
			?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HTML</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="test_html_add.php">Tests</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="keyterms_html.php">Key Terms</a>
				</div>
			</li>
			<li class="nav-item dropdown
			<?php
				$css=$_SERVER[PHP_SELF];
				$csspath=basename($css);
				if(($csspath=='test_css_add.php')||($csspath=='test_css_delete.php')||($csspath=='test_css_edit.php')||($csspath=='test_css_editing.php')||($csspath=='keyterms_css.php')||($cdbpath=='keyterms_css_edit.php')||($csspath=='keyterms_css_add.php'))
				 echo 'active';
			?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CSS</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="test_css_add.php">Tests</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="keyterms_css.php">Key Terms</a>
				</div>
			</li>
			
			<li class="nav-item dropdown
			<?php
				$user=$_SERVER[PHP_SELF];
				$userpath=basename($user);
				if(($userpath=='user_info.php')||($userpath=='user_result.php'))
				 echo 'active';
			?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i> Users</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="user_info.php">List of users</a>
					<a class="dropdown-item" href="user_result.php">Test results of users</a>
				</div>
			</li>	
		</ul>
		<form  class="form-inline my-2 my-lg-0">
			<?php if (empty($_COOKIE['username'])){ ?>
			<span class="btn btn-success my-2 mr-sm-2" data-toggle="modal" data-target="#exampleModal2">Sign in</span>	
			<span class="btn btn-outline-success my-2 mr-sm-2"  data-toggle="modal" data-target="#exampleModal">Sign up</span>
		<?php }else {?>
			<a href="../cabinet.php"><span class="btn btn-success my-2 mr-sm-2" ><i class="fas fa-user-cog"></i><?php echo ' Admin';?></span></a>
			<a href="../exit.php"><span class="btn btn-outline-success my-2 mr-sm-2" >Exit <i class="fas fa-sign-out-alt"></i></span></a>
		<?php }?>
		</form>
	</div>	
</nav>
<div class="wrapper">