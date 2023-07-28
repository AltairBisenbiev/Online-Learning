<?php
require '../connect.php';
$columns = array('kaz','rus','eng');
$query="SELECT * FROM keyterms_java";
if(isset($_POST['search']['value'])){
	$query.='WHERE kaz LIKE "%'.$_POST['search']['value'].'%" OR rus LIKE "%'.$_POST['search']['value'].'%" OR eng LIKE "%'.$_POST['search']['value'].'%"';
}
if(isset($_POST['order'])){
	$query.='ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';

}
else{
	$query='ORDER BY id DESC';
}

?>