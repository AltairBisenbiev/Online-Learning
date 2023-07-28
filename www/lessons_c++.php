<?php
require_once 'header.php'
///////////////////////////////////////////
?>
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-sm-12">
<?php 
require 'menu/c++.php';//menu for C++
?>
</div>	
<div class="col-lg-9 col-sm-12 ">
	
 <iframe src="<?php echo 'lessons/c++/'.$_GET['punct'].'.pdf';?>" width="100%" height="800px" frameborder="0" style="border:0" allowfullscreen></iframe>
 
</div>	
</div>
</div>
<?php
//////////////////////////////////////////
require_once 'footer.php';
?>