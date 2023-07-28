<?php
require '../connect.php';
$id = $_POST['id'];
mysqli_query($db,"DELETE FROM keyterms_css WHERE id='$id'");
mysqli_close($db);
echo "<script type='text/javascript'>alert('Delete finishing succesfully!'); window.location.href='keyterms_css.php'</script>"
?>
